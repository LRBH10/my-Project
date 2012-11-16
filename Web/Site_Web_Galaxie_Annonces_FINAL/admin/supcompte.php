<?php
require ('../fonctions/fonctions.inc.php'); 
if ((isset($_GET['t'])) && (isset($_GET['uid']))) {
  $t = htmlentities ($_GET['t']);
  $uid = htmlentities ($_GET['uid']);
  if (($t == 'tmp') || ($t == 'user')) {
    supprime_pseudo ( $uid, $t);

    } else {
    echo 'Erreur dans la selection de la table';
  }
} else {
  echo 'Aucune table ou aucun identifiant selectionner';
}
?>