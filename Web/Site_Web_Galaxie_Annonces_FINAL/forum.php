       <?php include("haut_bas/haut.php") ?> <!--la banniere du HomePage(l'entete)-->
       <?php include("barre_rapide/speedbarreconnectnv1.php") ?> <!--la barre de controle-->
	   <?php
		require('fonctions/fonctions.inc.php');
		require ('fonctions/config.php');
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
         show_information_user ( $pseude );
		 if($_SESSION['valid']==1)
		 {
	   ?>
	   <br><b><a href="connect/compte.php?typ=2">Mon Compte</a></b>
	   <?php
	   }
	   // Gestion de la  déconnexion
    if(isset($_GET['erreur']) && $_GET['erreur'] == 'logout'){ // Test sur les paramètres d'URL qui permettront d'identifier un contexte de déconnexion
	//$prenom = $_SESSION['prenom']; // On garde le prénom en variable pour dire au revoir
	session_unset("authentification");
	header("Location:index.php?erreur=delog");
    }
       ?>
	     <!--fichier d'authentification-->

		  
         
	   </div>
 
       <div id="corps"> <!-- Ici on mettera le contenu principal de la page (tout le texte quoi) -->
       <h1>Bienvenue  dans Galaxie Forum</h1>
			
				
				<?php
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	
	if(isset($_POST['text']))
	{
		$str=$_POST['text'];
		mysql_query("insert into forum values('','".$_SESSION['pseudo']."','".$str."')")or die (mysql_error());
	}	
	
	$reponse = mysql_query("SELECT * FROM forum order by id desc"); // Requête SQL
 	while ($don = mysql_fetch_array($reponse))
	{
				?>
				<fieldset>
				<legend><font color="orange"><?php echo $don['psedo']?> :</font></legend>
				<br/><font color="white"><?php echo $don['text']?> .</font><br/><br/>
				</fieldset>
				<br/>	
				<?php
	}
				?>
		<center>
		<form method="post" action="forum.php">
		    <div> 
			
			</div>
			<label for="nam"><strong><font color="purple">Laisser un Message : </font></strong></label>
			<div> 
			
			</div>
			<textarea cols=70 rows=4 name="text" id="nam"> </textarea>
			<div>
			
			</div>
            <br/><input type="submit" value="Envoyer"/><br/><br/>
		</form>
		</center>
	    </div>
 
       <?php include ("haut_bas/basi.php")?> <!--la baniiere du bas de page-->