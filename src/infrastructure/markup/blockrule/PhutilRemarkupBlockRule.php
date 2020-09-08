<?php

abstract class PhutilRemarkupBlockRule extends Phobject {

  private $engine;
  private $rules = array();

  /**
   * Determine the order in which blocks execute. Blocks with smaller priority
   * numbers execute sooner than blocks with larger priority numbers. The
   * default priority for blocks is `500`.
   *
   * Priorities are used to disambiguate syntax which can match multiple
   * patterns. For example, `  - Lorem ipsum...` may be a code block or a
   * list.
   *
   * @return int Priority at which this block should execute.
   */
  public function getPriority() {
    return 500;
  }

  final public function getPriorityVector() {
    return id(new PhutilSortVector())
      ->addInt($this->getPriority())
      ->addString(get_class($this));
  }

  abstract public function markupText($text, $children);

  /**
   * This will get an array of unparsed lines and return the number of lines
   * from the first array value that it can parse.
   *
   * @param array $lines
   * @param int   $cursor
   *
   * @return int
   */
  abstract public function getMatchingLineCount(array $lines, $cursor);

  protected function didMarkupText() {
    return;
  }

  final public function setEngine(PhutilRemarkupEngine $engine) {
    $this->engine = $engine;
    $this->updateRules();
    return $this;
  }

  final protected function getEngine() {
    return $this->engine;
  }

  public function setMarkupRules(array $rules) {
    assert_instances_of($rules, 'PhutilRemarkupRule');
    $this->rules = $rules;
    $this->updateRules();
    return $this;
  }

  private function updateRules() {
    $engine = $this->getEngine();
    if ($engine) {
      $this->rules = msort($this->rules, 'getPriority');
      foreach ($this->rules as $rule) {
        $rule->setEngine($engine);
      }
    }
    return $this;
  }

  final public function getMarkupRules() {
    return $this->rules;
  }

  final public function postprocess() {
    $this->didMarkupText();
  }

  final protected function applyRules($text) {
    foreach ($this->getMarkupRules() as $rule) {
      $text = $rule->apply($text);
    }
    return $text;
  }

  public function supportsChildBlocks() {
    return false;
  }

  public function extractChildText($text) {
    throw new PhutilMethodNotImplementedException();
  }

  protected function renderRemarkupTable(array $out_rows) {
    assert_instances_of($out_rows, 'array');

    if ($this->getEngine()->isTextMode()) {
      $lengths = array();
      foreach ($out_rows as $r => $row) {
        foreach ($row['content'] as $c => $cell) {
          $text = $this->getEngine()->restoreText($cell['content']);
          $lengths[$c][$r] = phutil_utf8_strlen($text);
        }
      }
      $max_lengths = array_map('max', $lengths);

      $out = array();
      foreach ($out_rows as $r => $row) {
        $headings = false;
        foreach ($row['content'] as $c => $cell) {
          $length = $max_lengths[$c] - $lengths[$c][$r];
          $out[] = '| '.$cell['content'].str_repeat(' ', $length).' ';
          if ($cell['type'] == 'th') {
            $headings = true;
          }
        }
        $out[] = "|\n";

        if ($headings) {
          foreach ($row['content'] as $c => $cell) {
            $char = ($cell['type'] == 'th' ? '-' : ' ');
            $out[] = '| '.str_repeat($char, $max_lengths[$c]).' ';
          }
          $out[] = "|\n";
        }
      }

      return rtrim(implode('', $out), "\n");
    }

    if ($this->getEngine()->isHTMLMailMode()) {
      $isHtmlMail = true;
      $table_attributes = array(
        'style' => 'border-collapse: separate;
          border-spacing: 1px;
          background: #d3d3d3;
          margin: 12px 0;',
      );
      $cell_attributes = array(
        'style' => 'background: #ffffff;
          padding: 3px 6px;',
      );
    } else {
      $isHtmlMail = false;
      $table_attributes = array(
        'class' => 'remarkup-table',
      );
      $cell_attributes = array();
    }

    $out = array();
    $out[] = "\n";
    foreach ($out_rows as $row) {
      $cells = array();
      foreach ($row['content'] as $cell) {
        if(!$isHtmlMail){
          $cell_attributes = $this->renderAttributes($cell);
        }
        $cells[] = phutil_tag(
          $cell['type'],
          $cell_attributes,
          $cell['content']);
      }
      $out[] = phutil_tag($row['type'], array(), $cells);
      $out[] = "\n";
    }

    $table = phutil_tag('table', $table_attributes, $out);
    return phutil_tag_div('remarkup-table-wrap', $table);
  }

  private function renderAttributes($cell) {
    $cell_attributes = array();
    if (isset($cell['colspan'])) {
      $cell_attributes['colspan'] = $cell['colspan'];
    }

    if (isset($cell['rowspan'])) {
      $cell_attributes['rowspan'] = $cell['rowspan'];
    }

    $style = null;
    if (isset($cell['color'])) {
      $style = $style.'color: '.$cell['color']."; ";
    }
    if (isset($cell['bgcolor'])) {
      $style = $style.'background-color: '.$cell['bgcolor'].";";
    }
    if ($style != null) {
      $cell_attributes['style'] = $style;
    }
    return $cell_attributes;
  }

}
