<?php
if ((isset($_POST['f_ad_pseudo'])) AND (isset($_POST['f_ad_mdp']))) {
  echo '<h3>Adminstration Panel</h3><br>';
  show_tmp_user();
  show_user();
} else {
  echo 'Vous navez pas les droits dadministratoin!';
}
?>