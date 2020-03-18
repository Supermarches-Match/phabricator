**Phabricator** is a collection of web applications which help software companies build better software.

Phabricator includes applications for:

  - reviewing and auditing source code;
  - hosting and browsing repositories;
  - tracking bugs;
  - managing projects;
  - conversing with team members;
  - assembling a party to venture forth;
  - writing stuff down and reading it later;
  - hiding stuff from coworkers; and
  - also some other things.

You can learn more about the project (and find links to documentation and resources) at [Phabricator.org](http://phabricator.org)

Phabricator is developed and maintained by [Phacility](http://phacility.com).

----------

**SUPPORT RESOURCES**

For resources on filing bugs, requesting features, reporting security issues, and getting other kinds of support, see [Support Resources](https://secure.phabricator.com/book/phabricator/article/support/).

**LICENSE**

Phabricator is released under the Apache 2.0 license except as otherwise noted.

----------

**FORK**

This repository is a fork of official Phacility, with some add-on that can not be added by extension

Supermarches Match does not provide support for this version and cannot be held responsible for the use of this version

**ADD ON**
- Search in repositories are case insensitive
- Remarkup for table has new option :
  - merged columns with colspan
  - merged line with rowspan
  - colorised cell text with color (you can use color name or css format with #)
  - colorised cell backgroung with bgcolor (you can use color name or css format with #)


example :
```
    <table>
    <tr>
    <th>test1</th><th colspan=2>test12</th><th>test13</th>
    </tr>
    <tr>
    <td>test2</td><td>test22</td><td>test23</td><td>test23</td>
    </tr>
    <tr>
    <td color=red>test2</td><td colspan=3 bgcolor=green>**test22**</td>
    </tr>
    </table>


    |  test1 |  {colspan=2} test12 | test13
    | ----- | ----- | ----- | -----
    | test2 | test22 | test23 | test23
    | {color=red} test2 | {colspan=3, bgcolor=green} **test22**
```

![result](https://i.imgur.com/Dc7uc4R.png)
