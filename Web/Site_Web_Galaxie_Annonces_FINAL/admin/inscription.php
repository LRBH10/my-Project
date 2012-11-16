       <?php include("../haut_bas/haut1.php") ?> <!--la banniere du HomePage(l'entete)-->
	   
       <?php include("../barre_rapide/speedbarre1.php") ?> <!--la barre de controle-->
	   
	   
	   <div id="corpsi"> <!-- Ici on mettra le contenu principal de la page (tout le texte quoi) -->
      
		<h2>Inscription</h2>
		<hr width="90%" align="center" color="white">
		<center><b><font color="blue">NB :</font><font color="silver"> Aprés l'inscription votre compte sera activé dans les prochaines 48 heures qui arrive au maximum</font></b></center>
		<hr width="60%" align="center" color="white">
		
		<?php
require('../fonctions/fonctions.inc.php');
if ((isset($_POST['f_pseudo'])) && (isset($_POST['f_mdp'])) && (isset($_POST['f_nom'])) && (isset($_POST['f_prenom'])) && (isset($_POST['f_email'])) && (isset($_POST['f_tel']))) {
  if ((($_POST['f_pseudo'])=='') Or (($_POST['f_mdp'])=='') Or (($_POST['f_nom'])=='') Or (($_POST['f_prenom'])=='') Or (($_POST['f_email'])=='') Or (($_POST['f_tel'])=='') Or !preg_match("#^[_A-Za-z0-9]+$#", $_POST['f_pseudo']) Or !preg_match("#^[A-Za-z0-9]+$#", $_POST['f_mdp']) Or !preg_match("#^[A-Za-z]+$#", $_POST['f_nom']) Or !preg_match("#^[A-Za-z]+$#", $_POST['f_prenom']) Or !preg_match("#^[a-z0-9._-]{1,}@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['f_email']) Or !preg_match("#^[0-9]+$#", $_POST['f_tel'])) {
    {
	?>
		
	<div class="formui">
	      <br><form method="post" action="inscription.php">
	      <fieldset>
	        <legend>Vos coordonnées</legend>
            <label for="pseudo">Pseudo* </label><input type="text" name="f_pseudo" id="pseudo" size="15" maxlength="20"/><br><br>
	   	    <label for="mdp">Mot de passe* </label><input type="password" name="f_mdp" id="mdp" size="16" maxlength="20"/><br><br>
	        <label for="nom">Nom* </label><input type="text" name="f_nom" size="15" id="nom" maxlength="20"/><br><br>
			<label for="prenom">Prénom* </label><input type="text" name="f_prenom" id="prenom" size="15" maxlength="20"/><br><br>
	        <label for="email">E-mail* </label><input type="text" name="f_email" id="email" size="30" maxlength="40"/><br><br>
			<label for="tel">N° telephone* </label><input type="text" name="f_tel" id="tel" size="30" maxlength="40"/></br></br>
	        <b><font color="red">Erreur : champ manquant ou caractere interdit</font></b><br>
			<center><input type="submit" value="Valider"/>  <input type="reset" value="Rétablir"/></center><br><br>
		  </fieldset>
       </form>	
	</div>
	<?php
  }} else {
    echo 'Enregistrement en cour...<br><br>';
    $pseude = htmlentities ($_POST['f_pseudo']);
    $code = htmlentities ($_POST['f_mdp']);
    $codeC = md5($code);
    $nom = htmlentities ($_POST['f_nom']);
    $prenom = htmlentities ($_POST['f_prenom']);
    $email = htmlentities ($_POST['f_email']);
	$tel = htmlentities ($_POST['f_tel']);
    //DB connection
    if (check_exist($pseude)==false) {
      mysql_connect("localhost", 'root',"");
      mysql_select_db('galaxie');
      mysql_query("INSERT INTO tbl_tmp_user(ID, pseudo, mdp, nom, prenom, email, valid, tel) VALUES ('', '$pseude', '$codeC', '$prenom', '$nom', '$email', '0','$tel')");
      //mysql_close();
      echo 'Enregistrement Terminer<br><br>';
      echo '<br>Pseudo : ' . $pseude . '<br><Br>Mot de passe : ' . $code . '<br><br>Nom : ' . $nom . '<br><br>Prenom : ' . $prenom . '<br><br>E-mail : ' . $email . '<br><br>';
    } else {
      echo 'Pseudo existant. <a href=inscription.php>Retour</a>';
    }
  }
} else {
  ?>
	<div class="formui">
	      <br><form method="post" action="inscription.php">
	      <fieldset>
	        <legend>Vos coordonnées</legend>
            <p>
            <label for="pseudo">Pseudo* </label><input type="text" name="f_pseudo" id="pseudo" size="15" maxlength="20"/><br><br>
	   	    <label for="mdp">Mot de passe* </label><input type="password" name="f_mdp" id="mdp" size="16" maxlength="20"/><br><br>
	        <label for="nom">Nom* </label><input type="text" name="f_nom" size="15" id="nom" maxlength="20"/><br><br>
			<label for="prenom">Prénom* </label><input type="text" name="f_prenom" id="prenom" size="15" maxlength="20"/><br><br>
	        <label for="email">E-mail* </label><input type="text" name="f_email" id="email" size="30" maxlength="40"/><br><br>
			<label for="tel">N° telephone* </label><input type="text" name="f_tel" id="tel" size="30" maxlength="40"/></br></br>
			<center><input type="submit" value="Valider"/>  <input type="reset" value="Rétablir"/></center><br><br>
	      </fieldset>
       </form>	
	</div>
 <?php
}

?>	

	   </div>
	   
	   
	   <?php include ("../haut_bas/basi.php")?>