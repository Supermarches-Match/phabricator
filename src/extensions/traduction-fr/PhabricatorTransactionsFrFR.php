<?php

final class PhabricatorTransactionsFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'Verrouiller / Cacher des champs',
      'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in Settings.' => 'Vous n\'avez aucun facteur MFA attaché à votre compte, vous ne pouvez donc pas signer ce groupe de transactions avec MFA. Ajoutez MFA à votre compte dans la configuration.',
      'To silence this edit, run this command:' => 'Pour faire taire cette modification, exécutez cette commande:',
      '%s added a comment.' => '%s a ajouté un commentaire.',
      'Empty Comment' => 'Commentaire vide',
      'No object exists with PHID "%s".' => 'Il n\'existe pas d\'objet avec le PHID « %s » .',
      'The %s action(s) you are taking have no effect:' => array(
        'L\'action que vous prenez est sans effet :',
        'Les %s actions que vous prenez sont sans effet :',
      ),
      '%s removed %s subscriber(s) for %s: %s.' => '%s a retiré %s abonné(s) pour %s: %s .',
      'Engine: Editor' => 'Moteur: Editeur',
      'To continue, configure multi-factor authentication in Settings.' => 'Pour continuer, configurez l\'identification multi-facteurs dans vos paramètres.',
      'SearchEngine class to export data from.' => 'Classe SearchEngine pour exporter les données.',
      '%s added %s file(s): %s.' => '%s a ajouté %s fichier(s) : %s.',
      'In %s, %s wrote:' => 'Dans %s, %s a écrit :',
      '%s marked %s inline comment(s) as done.' => '%s a marqué %s commentaire(s) en ligne comme fait(s).',
      'Email Body Text' => 'Texte du corps du courriel',
      'Optional instructions, shown above the form.' => 'Instructions optionelles, apparaissant au-dessus du formulaire.',
      'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => 'Ce groupe de transactions nécessite MFA pour opérer, mais vous ne pouvez pas fournir de réponse MFA via Conduit. Modifiez cet objet via l\'interface utilisateur web.',
      'Subtype key "%s" does not identify a valid subtype.' => 'La clé de sous-type « %s » n\'identifie pas un sous-type valide.',
      'Name of the form.' => 'Nom du formulaire.',
      'No search engines match "%s". Available engines which support data export are: %s.' => 'Il n\'y a pas de moteur de recherche « %s ». Les moteurs disponibles prenant en charge l\'exportation de données sont : %s.',
      '%s changed the visibility for %s.' => '%s a modifié la visibilité pour %s .',
      '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s abonné(s) modifié(s), %s:%s ajouté(s); %s:%s retiré(s).',
      'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => 'Utilisez « --output <path> » pour spécifier un fichier de sortie, ou « --output - » pour imprimer vers stdout.',
      'Form Disabled' => 'Formulaire désactivé',
      'Recipient Removed' => 'Destinataire supprimé',
      'Transaction' => 'Transaction',
      'Bulk Edit Actions' => 'Actions de modification en masse',
      'Primary Fields' => 'Champs primaires',
      'Transactions' => 'Transactions',
      'Export format.' => 'Format d\'exportation.',
      'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".' => 'Le monograme « %s »identifie un objet du mauvais type. L\'objet chargé est de classe « %s », mais cet éditeur traite les objets de type « %s ».',
      '🔒 Locked' => '🔒 Vérouillé',
      'New Object' => 'Nouvel objet',
      'Edit type (with key "%s") is missing a Conduit parameter type.' => 'Il manque un type de paramètre Conduit pour le type de modification (avec la clé « %s »).',
      'You are about to apply a bulk edit which will affect %s object(s).' => array(
        'Vous allez appliquer une modification en masse qui converne %s objet.',
        'Vous allez appliquer une modification en masse qui converne %s objets.',
      ),
      'You do not have access to any forms which are enabled and marked as edit forms.' => 'Vous n\'avez accès à aucun formulaire activé et marqué en tant que formulaire de modification.',
      'This job is already configured to run silently.' => 'Cette tâche est déja configurée pour s\'exécuter silencieusement.',
      'Browse Forms' => 'Parcourir les formulaires',
      'Specify an export format with "--format".' => 'Spécifiez un format d\'exportation avec « --format ».',
      'Expected a query key or a set of query constraints.' => 'Attendu une clé de requête ou un ensemble de contraintes de requête.',
      'Tell No One' => 'Ne le dire à personne',
      '%s edited edge metadata for %s.' => '%s a modifié les méta-données de bord pour %s.',
      'Query does not match any objects you have permission to edit.' => 'La requête ne concerne aucun objet que vous pouvez modifier.',
      'Query does not match any objects.' => 'La requête ne concerne aucun objet.',
      '✘ Hidden' => '✘ Masqué',
      '%s rescinded a token.' => '%s a annulé un jeton.',
      '%s awarded a token.' => '%s offre un jeton.',
      'Mentioned or subscribed users will not be notified.' => 'Les utilisateurs mentionnées ou abonnés ne seront pas notifiés.',
      'Acting User' => 'Utilisateur actif',
      'Edit Form %d: %s' => 'Modifier le formulaire %s : %s',
      'Output path already exists. Use "--overwrite" to overwrite it.' => 'Le chemin de sortie existe déjà. Utilisez « --overwrite » pour le substituer.',
      'Change Subtype' => 'Modifier le sous-type',
      'Drag and drop fields to reorder them.' => 'Déplacez et relâchez les champs pour les réordonner.',
      '%s removed %d subscriber(s): %s.' => '%s a retiré %s abonné(s): %s .',
      'Not an Edit Form' => 'Pas un formulaire d\'édition',
      'Mark Form' => 'Marquer le formulaire',
      'EditEngine ("%s") contains an invalid key character "/".' => 'EditEngine ("%s") contient un caractère de clé «&nbsp;/&nbsp;» invalide.',
      'Change Default Values' => 'Modifier les valeurs par défaut',
      'No default edit engine configuration for bulk edit.' => 'Il n\'existe pas de configuration par défaut du moteur de modification pour les éditions en masse.',
      'After running this command, reload this page to see the new setting.' => 'Après avoir exécuté cette commande, veuillez recharger cette page pour voir les nouveaux paramètres.',
      'Save Defaults' => 'Sauver les valeurs par défaut',
      'Change how forms in other applications are created and edited. Advanced!' => 'Changer la manière dont les formulaires sont créés et modifiés dans les autres applications. Avancé !',
      'Mention In' => 'Mentionné dans',
      'HTTP Parameters' => 'Paramètres HTTP',
      'Disable this form? Users will no longer be able to use it.' => 'Désactiver ce formulaire ? Les utilisateurs ne pourront plus l\'utiliser.',
      'Bulk Editor' => 'Editeur de masse',
      'Support Applications' => 'Supporter des applications',
      'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.' => 'Ce groupe de transactions nécessite MFA pour opérer, mais l\'éditeur n\'a pas été configuré avec une requête. Ce flux de travail ne peut pas réaliser le contrôle MFA.',
      'Working Set' => 'Ensemble de travail',
      'Make comments.' => 'Rédiger des commentaires.',
      'Via Content Source' => 'Via la source de contenu',
      'Really remove this comment?' => 'Supprimer effectivement ce commentaire ?',
      'No MFA' => 'Pas de MFA',
      'Export format ("%s") is not enabled.' => 'Le format d\'exportation (« %s ») n\'est pas activé.',
      'You can not apply transactions which already have IDs/PHIDs!' => 'Vous ne pourvez pas appliquer des transactions qui ont déja des IDs/PHIDs !',
      'Forms' => 'Formulaires',
      'Hide Edit Forms' => 'Masquer les formulaires d\'édition',
      'Disable Form' => 'Désactiver le formulaire',
      'This form ("%s") is not marked as an edit form, so it can not be used to edit objects.' => 'Ce formulaire (« %s ») n\'est pas marqué comme étant un formulaire éditable, et ne peut donc pas être utilisé pour modifier des objets.',
      'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.' => 'Vous devez fournir les certificats multi-facteurs pour commenter ou faire des modifications, mais vous n\'avez pas de tels certificats configurés sur votre compte.',
      '%s edited a custom field on %s.' => '%s a modifié un champ personnalisé de %s.',
      'Mention' => 'Mention',
      'export' => 'exporter',
      'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.' => 'L\'appel à setShouldRequireMFA() arrive trop tard: cet éditeur a déjà vérifié les conditions MFA.',
      'You have not selected any objects to edit.' => 'Vous n\'avez sélectionné aucun objet à modifier.',
      'Work has already started on job "%s". Jobs can not be reconfigured after they have been started.' => 'L\'exécution a déjà commencé avec la tâche « %s ». Les tâches ne peuvent pas être reconfigurées une fois qu\'elles ont été démarrées.',
      'Post Comment' => 'Publier un commentaire',
      'Enable this form? Users who can see it will be able to use it to create objects.' => 'Activer ce formulaire ? Les utilisateurs qui peuvent le voir pourront l\'utiliser et créer des objets.',
      'Specify one or more queries to export with "--query".' => 'Spécifiez une ou plusieurs requêtes à exporter avec  « --query ».',
      'You can not select this %s policy, because you would no longer be able to %s the object.' => 'Vous ne pouvez pas selectionner cette politique %s, car vous ne pourrez plus %s l\'objet.',
      '%s removed %s contributor(s): %s.' => '%s a enlevé %s éditeur(s): %s .',
      '%s created %s in the %s space.' => '%s a créé %s dans l\'espace %s .',
      '%s added this form to the "Create" menu.' => '%s a ajouté ce formulaire au menu  « Création » .',
      'You will be required to provide multi-factor credentials to make changes.' => 'Vous devrez fournir les certificats multi-facteurs pour faire des modifications.',
      'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.' => 'La configuration du sous-type est non valide: le sous-type ayant pour clé « %s » spécifie à la fois des sous-types et des formulaires enfants. Choisissez l\'un ou l\'autre, mais non pas les deux.',
      'You can not sign a transaction group that has no other effects.' => 'Vous ne pouvez pas signer un groupe de transactions qui n\'a pas d\'autres effets.',
      'No Edit Forms' => 'Pas de formulaires de modification',
      '%s added %s unsubscriber(s) for %s: %s.' => '%s a ajouté %s désabonné(s) pour %s: %s.',
      'Edit Defaults' => 'Modifier les valeurs par défaut',
      'Encryption Required' => 'Cryptage nécessaire',
      'Form name is required.' => 'Nom de formulaire obligatoirement.',
      '%s wrote:' => '%s a écrit :',
      'Change subtype to' => 'Modification du sous-type en',
      'Transaction Types' => 'Types de transactions',
      'Extension "%s" defines a bulk edit group with the same key ("%s") as the main editor or another extension. Each bulk edit group must have a unique key.' => 'L\'extension « %s » définit un goupe d\'édition de masse avec la même clé (« %s ») que l\'éditeur principal ou une autre extension. Chaque groupe d\'édition de masse doit avoir une clé unique.',
      'EMAIL PREFERENCES' => 'PRÉFÉRENCES DE COURRIEL',
      '%s edited this object (transaction type "%s").' => '%s a modifié cet objet (type de transaction « %s »).',
      'Mark as "Edit" Form' => 'Marquer comme formulaire de « Modification »',
      'You do not have permission to configure forms for this application.' => 'Vous n\'avez pas l\'autorisation de configurer les formulaires pour cette application.',
      'Configure bulk job __id__ to run silently (without sending mail or publishing notifications).' => 'Configurer la tâche de travail en masse __id__ pour qu\'elle s\'exécute en silence (sans envoyer de courriel ni publier de notification).',
      'Make Editable' => 'Rendre modifiable',
      '%s disabled this form.' => '%s a désactivé ce formulaire.',
      '%s created an object: %s.' => '%s a créé un objet : %s.',
      'Duplicate Form' => 'Dupliquer le formulaire',
      '%s added %d subscriber(s): %s.' => '%s a ajouté %s abonné(s): %s.',
      'This is a draft revision that will not publish any notifications until the author requests review.' => 'Ceci est une version provisoire qui ne publiera aucune notification tant que l\'auteur n\'aura pas demandé de relecture.',
      '%s created this object in space %s.' => '%s a créé cet objet dans l’espace %s.',
      'Show Only Create Forms' => 'Montrer uniquement les formulaires de création',
      'You can not interact with this object because it is locked.' => 'Vous ne pouvez pas agir sur cet objet car il est vérouillé.',
      'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").' => '« newTimelineView() » doit retourner un objet de classe  « %s » (pour le moteur « %s »).',
      '%s shifted this object from the %s space to the %s space.' => '%s a déplacé cet objet de l\'espace %s vers l\'espace %s.',
      'Create Form' => 'Créer un formulaire',
      'Raw Comment' => 'Commentaire brut',
      '%s updated subscribers of %s.' => '%s a modifié des abonnés de %s .',
      '%s created this object.' => '%s a créé cet objet.',
      'Unknown export format ("%s"). Known formats are: %s.' => 'Format d\'exportation inconnu (« %s »). Les formats connus sont : %s.',
      'You have not chosen any edits to apply.' => 'Vous n\'avez choisi aucune modification à appliquer.',
      'Unable to load object with PHID "%s"!' => 'Impossible de charger l\'objet avec le PHID « %s » !',
      'Edit Form' => 'Modifier les formulaires',
      '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s contributeur edite pour %s, %s: %s ajoute; %s :%s elimines',
      'This transaction is supposed to have an %s set, but it does not!' => 'Cette transaction suppose d\'avoir un %s activé et ce n\'est pas le cas !',
      'Comment Preview' => 'Aperçu du commentaire',
      'Untitled Form' => 'Formulaire sans titre',
      '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s abonné(s) modifié(s) pour %s, %s:%s ajouté(s); %s:%s retiré(s).',
      'Unsupported bulk edit type "%s".' => 'Type d\'édition de masse « %s » non supporté.',
      'Mentioned User' => 'Utilisateur mentionné',
      'List of PHIDs to set.' => 'Liste pour installer les PHIDs.',
      '%s added %s unsubscriber(s): %s.' => '%s a ajouté %s désabonné(s): %s .',
      'EDIT DETAILS' => 'MODIFIER LES DÉTAILS',
      'Remove Action: %s' => 'Supprimer l\'action : %s',
      'Read transactions for an object.' => 'Lire les transactions associées à un objet.',
      'Edit Form: %s' => 'Modifier le formulaire : %s',
      '%s moved this task from %s to %s on the %s board.' => '%s a déplacé cette tâche de %s vers %s sur le tableau %s .',
      'List of PHIDs to remove.' => 'Liste de PHIDs à supprimer.',
      'Create New Form' => 'Créer un nouveau formulaire',
      'Transaction requires handles and it did not load them.' => 'La transaction nécessite des références mais ne les a pas chargées.',
      '(Show Details)' => '(Montrer les Détails)',
      '%s edited this %s.' => '%s a modifié ce %s .',
      'Apply remaining actions?' => 'Exécuter les actions restantes ?',
      'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.' => 'Deux groupes d\'éditions en masse ont la même clé (« %s »). Chaque groupe d\'éditions en masse doit avoir une clé unique.',
      'If the output file already exists, overwrite it instead of raising an error.' => 'Si le fichier de sortie existe déjà, le réécrire plutôt que de lever une erreur.',
      'Transaction Type: %s' => 'Type de transaction: %s',
      'Configure Form' => 'Configurer le formulaire',
      'You can not post an empty comment.' => 'Vous ne pouvez pas publier un commentaire vide.',
      'Field "%s" has a bulk edit group key ("%s") with no corresponding bulk edit group.' => 'Le champ « %s » possède une clé de groupe de modification de masse (« %s ») mais sans groupe d\'édition de masse associé.',
      'Exported data to "%s".' => 'Exporter les données vers « %s ».',
      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s abonné(s) modifié(s), %s:%s ajouté(s); %s:%s retiré(s).',
      '%s mentioned this in %s.' => '%s a mentionné cela dans %s.',
      '%s created this object with join policy "%s".' => '%s a créé cet objet avec les autorisations d’abonnement « %s ».',
      'Subtype configuration is invalid: it must be a list of subtype specifications.' => 'La configuration du sous-type est invalide: elle doit être une liste de spécifications de sous-types.',
      'Use Form' => 'Utiliser un formulaire',
      'The command "!%s" is not a supported mail command. Valid commands for this object are: %s.' => 'La commande « !%s » n\'est pas une commande de courriel supportée. Les commandes valides pour cet objet sont : %s.',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => 'La parametre \'\'%s\'\' doit contenir de divers themes de transactions, mais le theme de cle \'\'%s\'\' n\'est pas un dictionnaire.',
      'Edit Comment' => 'Modifier un commentaire',
      '%s marked this form as an edit form.' => '%s a marqué ce formulaire en tant que formulaire de modification.',
      'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.' => 'Ce groupe de transactions nécessite MFA pour opérer, mais l\'éditeur n\'a pas été configuré avec un URI d\'annulation. Ce flux de travail ne peut pas réaliser le contrôle MFA.',
      'Silent Edit' => 'Edition silencieuse',
      'Reorder Fields' => 'Réordonner les champs',
      'Add Action...' => 'Ajouter une action...',
      'Type a form name...' => 'Entrer un nom de formulaire...',
      'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.' => 'Les requêtes spécifiées utilisent différents moteurs :  « %s » utilise le moteur  « %s », et non pas  « %s ». Toutes les requêtes doivent s\'exécuter avec le même moteur.',
      '%s updated subscribers...' => '%s a modifié des abonnés...',
      'Remove Comment' => 'Retirer le commentaire',
      'Export data to a flat file (JSON, CSV, Excel, etc).' => 'Exporter les données vers un fichier à plat (JSON, CSV, Excel, etc).',
      'Edit Forms' => 'Modifier les formulaires',
      'Field' => 'Champ',
      '%s edited file(s), added %s: %s; removed %s: %s.' => '%s fichier(s) modifié(s), ajoouté(s) %s: %s; supprimé(s) %s: %s.',
      '%s added %s subscriber(s): %s.' => '%s a ajouté %s abonné(s): %s .',
      'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => 'Le sous-type \'\'%s\'\' n\'est pas valide: les clés du sous-type ne peuvent comporter que des caractères minuscules latins (de \'\'a\'\' à \'\'z\'\').',
      'Capability not supported.' => 'Possibilité non prise en charge.',
      'Use "--id" to choose a bulk job to make silent.' => 'Utiliser « --id » pour choisir une tâche de masse à rendre silencieuse.',
      'Change Form Subtype' => 'Modifier le sous-type de formulaire',
      '%s added %s contributor(s): %s.' => '%s a ajouté %s contributeur(s): %s .',
      '%s created this object with edit policy "%s".' => '%s a créé cette objet avec les autorisations de modification « %s ».',
      'Unable to load bulk job with ID "%s".' => 'Impossible de charger la tâche de travail en masse avec l\'ID « %s ».',
      '%s added %s watcher(s): %s.' => '%s a ajouté %s observateur(s): %s.',
      'Task has no object PHID!' => 'La tâche n\'a pas de PHID d\'objet !',
      'Flag "--overwrite" has no effect when outputting to stdout.' => 'Le drapeau « --overwrite » n\'a pas d\'effet quand la sortie se fait sur stdout.',
      'Export the data selected by one or more queries.' => 'Exporter les données sélectionnées par une ou plusieurs requêtes.',
      'Bulk Edit' => 'Edition en masse',
      'Write output to a file. If omitted, output will be sent to stdout.' => 'Ecrire la sortie dans un fichier. Si absent, la sortie sera redirigée vers stdout.',
      'You will be required to provide multi-factor credentials to comment or make changes.' => 'Vous devrez fournir les certificats multi-facteurs pour commenter ou faire des modifications.',
      '%s shifted %s from the %s space to the %s space.' => '%s a déplacé %s de l\'espace %s vers l\'espace %s.',
      '%s named this form "%s".' => '%s a nommé ce formulaire "%s".',
      'Warning: Unexpected Effects' => 'Attention: effets imprévisibles',
      'Add Another Action' => 'Ajouter une autre action',
      'Configure a bulk job to execute silently.' => 'Configurer une tâche de travail en masse pour qu\'elle s\'exécute silencieusement.',
      '%s signed these changes with MFA.' => '%s a signé ces modifications avec MFA.',
      'SearchEngine class ("%s") does not support data export.' => 'La classe SearchEngine (« %s ») ne supporte pas l\'exportation de données.',
      'Multiple search engines match "%s": %s.' => 'Plusieurs moteurs de recherche ont trouvé la concordance « %s » : %s.',
      'Mark as "Create" Form' => 'Marquer comme « Créer » un formulaire',
      'Failed to base64_decode() value for key "%s".' => 'Erreur de valeur dans base64_decode() pour la clé « %s ».',
      'This EditField does not provide a Bulk EditType with key "%s".' => 'Ce champ d\'édition ne génère pas un type d\'édition de masse ayant pour clé « %s ».',
      '<empty>' => '<vide>',
      '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => array(
        array(
          array(
            '%s a marqué %s commentaire en ligne comme fait et %s commentaire inline comme non-fait.',
            '%s a marqué %s commentaire en ligne comme fait et %s commentaires inline comme non-faits.',
          ),
          array(
            '%s a marqué %s commentaires en ligne comme faits et %s commentaire inline comme non-fait.',
            '%s a marqué %s commentaires en ligne comme faits et %s commentaires inline comme non-faits.',
          ),
        ),
      ),
      '!%s (or %s)' => '!%s (ou %s)',
      '%s reordered the fields in this form.' => '%s a réordonné les champs de ce formulaire.',
      'This is a preview of the current form configuration.' => 'Ceci est une prévisualisation de la configuration actuelle du formulaire.',
      '%s renamed this form from "%s" to "%s".' => '%s a renommé ce formulaire de « %s » vers « %s » .',
      '%s changed the edit policy for %s.' => '%s a modifié la politique de confidentialité de %s.',
      'All Forms' => 'Tous les formulaires',
      'This %s already has that view policy.' => 'Ce %s a déja cette politique de visibilité.',
      'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".' => 'La requête « %s » est inconnue. Pour exécuter une requête embarquée comme  « all » ou  « active », précisez également le moteur de recherche avec  « --class ».',
      'The source object has a comment which mentions the destination object.' => 'L\'objet source a un commentaire indiquant l\'objet destination.',
      'Configured job "%s" to run silently.' => 'Tâche « %s » configurée pour s\'exécuter silencieusement.',
      'If no rules match, %s all other users.' => 'Si aucune règle n\'est satisfaite, %s tous les autres utilisateurs.',
      'Custom field transaction has invalid \'%s\'; field \'%s\' is disabled or does not exist.' => '\'%s\' est invalide pour la transaction de champs utilisateur; le champ \'%s\' est désactivé ou n\'existe pas.',
      '%s Action(s) Have No Effect' => '%s action(s) sont sans effet',
      'None of the fields on this object support templating.' => 'Aucun des champs de cet objet ne peut être représenté par un modèle.',
      'Query "%s" is not a recognized query for class "%s".' => 'Query « %s » n\'est pas une requête reconnue pour la classe « %s ».',
      'Constraint "phids" to "transaction.search" requires nonempty list, empty list provided.' => 'La contrainte « phids » sur « transaction.search » demande une liste non vide, et une liste vide a été fournie.',
      'If you start work now, this edit will send mail and publish notifications normally.' => 'Si vous commencez le travail maintenant, ces modifications enverront les courriels et publieront les notifications normalement.',
      'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.' => 'Si vous commencez le travail maintenant, cette modification sera appliquée silencieusement: elle n\'enverra pas de courriels ni ne publiera de notifications.',
      'Form %d' => 'Formulaire %s',
      'The source object is mentioned in a comment on the destination object.' => 'L\'objet source est mentionné dans un commentaire de l\'objet destination.',
      'Capability not supported!' => 'Possibilité non prise en charge !',
      '%s created this object with visibility "%s".' => '%s a créé cet objet avec les autorisations de visibilité « %s ».',
      'You can not apply transactions which already have commentVersions!' => 'Vous ne pourvez pas appliquer des transactions qui ont déja des commentVersions !',
      'Object Monogram' => 'Objet Monogram',
      '%s removed %s subscriber(s): %s.' => '%s a retiré %s abonné(s): %s.',
      'When calling "transaction.search", you must provide an object to retrieve transactions for.' => 'Quand vous appelez « transaction.search » , vous devez fournir un objet sur lequel récupérer les transactions.',
      '%s changed the visibility from "%s" to "%s".' => '%s a changé la visibilité de « %s » à  « %s » .',
    );
  }

}