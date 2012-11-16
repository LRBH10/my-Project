<?php
require('fonctions/fonctions.inc.php');
require ('fonctions/config.php');

session_start();

if ((isset($_POST['pseudo'])) && (isset($_POST['mdp']))) {
  if (($_POST['pseudo']=='') or ($_POST['mdp']=='')) {
?>  
<div class="authentification">
		  <form action="index.php" method="post">
		    <fieldset>
	          <legend>Connexion</legend>
              <p>
              <center><label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" size="10" maxlength="10"/><br>
	 	      <label for="mdp">Mot de passe</label><input type="password" name="mdp" id="mdp" size="11" maxlength="11"/><br><br></center>
			  <pre><input type="submit" value="Valider"/>  <input type="reset" value="Rétablir"/></pre>
			  <center><a href="admin/inscription.php">Créer un compte</a></center>
		      </p>
		      <b><font color="red">Champ manquant</font></b><br>
		   </fieldset>
		   </form>
</div>

<?php
  } else {
  
    $pseude = htmlentities ($_POST['pseudo']);
    //$code = htmlentities ($_POST['mdp']);
	$codeC=htmlentities (md5($_POST['mdp']));
    // requete sur les tables user (on récupère les infos de la personne)
mysql_select_db($db, $galaxie);
$verif_query=sprintf("(SELECT * FROM tbl_tmp_user where pseudo='$pseude' and mdp='$codeC') UNION (SELECT * FROM tbl_user where pseudo='$pseude' and mdp='$codeC')"); // requête sur la base administrateurs
$verif = mysql_query($verif_query, $galaxie) or die(mysql_error());
$row_verif = mysql_fetch_assoc($verif);
$utilisateur = mysql_num_rows($verif);

	
	if ($utilisateur) {	// On test s'il y a un utilisateur correspondant
	
	    $_SESSION['authentification'] = TRUE; // enregistrement de la session
		
		// déclaration des variables de session
		$_SESSION['valid'] = $row_verif['valid']; // le valid de l'utilisateur (permet de définir la situation de compte d'utilisateur)
		$_SESSION['email'] = $row_verif['email'];
		$_SESSION['nom'] = $row_verif['nom']; // Son nom
		$_SESSION['prenom'] = $row_verif['prenom']; // Son Prénom
		$_SESSION['pseudo'] = $row_verif['pseudo']; // Son pseudo
		$_SESSION['mdp'] = $row_verif['mdp']; // Son mot de passe (à éviter)
		
		header("Location:indexconnect.php"); // redirection si OK
		//show_information_user ( $pseude );
	}

     else {
?>

<div class="authentification">
		  <form action="index.php" method="post">
		    <fieldset>
	          <legend>Connexion</legend>
              <p>
              <center><label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" size="10" maxlength="10"/><br>
	 	      <label for="mdp">Mot de passe</label><input type="password" name="mdp" id="mdp" size="11" maxlength="11"/><br><br></center>
			  <pre><input type="submit" value="Valider" ref="inscription.php"/>  <input type="reset" value="Rétablir"/></pre>
			  <center><a href="admin/inscription.php">Créer un compte</a></center>
		      </p>
			  <b><font color="red">Mot de passe ou pseudo invalide</font></b><br>
		   </fieldset>
		   </form>
</div>
	  
      <?php
    }
  }
}
 else {
  ?>
  <?php

{
?>
<div class="authentification">
		  <form action="index.php" method="post">
		    <fieldset>
	          <legend>Connexion</legend>
              <p>
              <center><label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" size="10" maxlength="10"/><br>
	 	      <label for="mdp">Mot de passe</label><input type="password" name="mdp" id="mdp" size="11" maxlength="11"/><br><br></center>
			  <pre><input type="submit" value="Valider"/>  <input type="reset" value="Rétablir"/></pre>
			  <center><a href="admin/inscription.php">Créer un compte</a></center>
		      </p>
		   </fieldset>
		   </form>
</div>

  <?php
}
}
?>
<?php
// Gestion de la  déconnexion
if(isset($_GET['erreur']) && $_GET['erreur'] == 'logout'){ // Test sur les paramètres d'URL qui permettront d'identifier un contexte de déconnexion
	$prenom = $_SESSION['prenom']; // On garde le prénom en variable pour dire au revoir (soyons polis :-)
	session_unset("authentification");
	header("Location:index.php?erreur=delog&prenom=$prenom");
}
?>
