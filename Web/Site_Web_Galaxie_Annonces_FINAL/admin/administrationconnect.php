<?php include("../haut_bas/haut1.php") ?> <!--la banniere du HomePage(l'entete)-->
	   
       <?php include("../barre_rapide/speedbarreconnect11.php") ?> <!--la barre de controle-->
	   
	   <div id="corpsi"> <!-- Ici on mettra le contenu principal de la page (tout le texte quoi) -->
      
		<h2>Espace Administrateur</h2>
		<hr width="90%" align="center" color="white">
		
		<?php
require('../fonctions/fonctions.inc.php');
if ((isset($_POST['f_ad_pseudo'])) AND (isset($_POST['f_ad_mdp']))) {
  if ((($_POST['f_ad_pseudo'])=='') OR (($_POST['f_ad_mdp'])=='')) {
    ?>
		<div class="formui">
	      <br><form method="post" action="administration.php">
	      <fieldset>
	        <legend>Connexion</legend>
            <p>
            <label for="pseudo">Pseudo* </label><input type="text" name="f_ad_pseudo" id="pseudo" size="15" maxlength="20"/><br><br>
	   	    <label for="mdp">Mot de passe* </label><input type="password" name="f_ad_mdp" id="mdp" size="16" maxlength="20"/><br><br>
	        <b><font color="red">Erreur champ manquant</font></b><br>
			<center><input type="submit" value="Valider"/>  <input type="reset" value="Rétablir"/></center><br><br>
		  </fieldset>
              </form>	
	    </div>
		
		<?php
  } else {
    $pseudo = htmlentities ($_POST['f_ad_pseudo']);
    $code = htmlentities ($_POST['f_ad_mdp']);
    $code = md5($code);
    if (check_admin_login($pseudo, $code) == true) {
      include ('adminpanel.php');
	    echo'<center><FORM> 
<INPUT TYPE="button" VALUE="Actualiser" ONCLICK="history.go(0)"> 
</FORM></center>' ;
    } else {
      echo 'Accés refusé';
    }
  }
} else {
  ?>

  <?php
	   session_start(); // On relaye la session
       if (isset($_SESSION["authentification"])){ // vérification sur la session authentification (la session est elle enregistrée ?)
       // ici les éventuelles actions en cas de réussite de la connexion
       }
       else {
        header("Location:index.php"); // redirection en cas d'echec
       }
	   
	   ?>
       <div id="menu"> <!-- Ici on mettra le menu et le login-->
	   
	   <?php
	     //session_start();
	     $pseude = $_SESSION['pseudo'];
         //show_information_user ( $pseude );
	   ?>
	   
	   </div>
	   
  <div class="formui">
	      <br><form method="post" action="administration.php">
	      <fieldset>
	        <legend>Connexion</legend>
            <p>
            <label for="pseudo">Pseudo* </label><input type="text" name="f_ad_pseudo" id="pseudo" size="15" maxlength="20"/><br><br>
	   	    <label for="mdp">Mot de passe* </label><input type="password" name="f_ad_mdp" id="mdp" size="16" maxlength="20"/><br><br>
	     	<center><input type="submit" value="Valider"/>  <input type="reset" value="Rétablir"/></center><br><br>
		  </fieldset>
              </form>	
	    </div>
		
		<?php
}
?>
</div>
<?php include ("../haut_bas/basi.php")?>