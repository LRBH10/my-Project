<?php
require ('../fonctions/fonctions.inc.php');
if (isset($_GET['uid'])) {
  $uid = htmlentities ($_GET['uid']);
  active_pseudo ($uid);
} else {
  echo 'Id Inexistant';
}
?>