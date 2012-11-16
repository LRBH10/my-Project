<?php include("../haut_bas/haut1.php") ?> <!--la banniere du HomePage(l'entete)-->
	   
       <?php include("../barre_rapide/speedbarre1.php") ?> <!--la barre de controle-->
	   
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