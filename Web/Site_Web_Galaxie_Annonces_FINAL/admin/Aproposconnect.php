       <?php include("../haut_bas/haut1.php") ?> <!--la banniere du HomePage(l'entete)-->
       <?php include("../barre_rapide/speedbarreconnectnv.php") ?> <!--la barre de controle-->
	   <?php
	   session_start(); // On relaye la session
       if (isset($_SESSION["authentification"])){ // vérification sur la session authentification (la session est elle enregistrée ?)
       // ici les éventuelles actions en cas de réussite de la connexion
       }
       else {
        header("Location:Apropos.php"); // redirection en cas d'echec
       }
	   ?>

       <div id="menu"> <!-- Ici on mettra le menu et le login-->
	   
	    <div style="float: right; border:2px solid blue;">
   <object height="500" width="160">
   <param name="movie" value="show.swf">
   <embed src="../images/me.swf" height="500" width="160">
   </object>
   </div>
	   </div>
 
       <div id="corps"> <!-- Ici on mettera le contenu principal de la page (tout le texte quoi) -->
       <h1>www.galaxie-annonces.dz</h1>
 
        <p>
        Bienvenue sur notre super site !<br />
        Vous allez adorer ici, c'est un site génial qui va vous offrir un monde d'affaires...des annonces publiées gratuitement...dans tous les domaines, il suffit de choisir un parmi les différentes catégories proposé dans le menu !!
        </p>
 
       <h2>A qui s'adresse ce site ?</h2>    
        <p>
        A tout le monde ! bien sure;<br/>
        C'est un site ou vous allez trouvé des annonces...donc sa sera utils pour n'importe quel personne qui veut..acheter,vendre, et toute type de transaction...<br/>
        ---Inscrivez vous, et vous devenez membre dans notre espace d'affaires---
		</p>
   
       <h2>L'auteur</h2>    
        <p>
        L'auteur du site ? Bah, c'est moi, quelle question !!<br />
        En réalité ce site a été crée par un groupe d'étudiants : <br/>
		<div id="créateur_site">
		- Badache Ismail (Chef de projet)<br/>
		- Touazi Fayçal<br/>
		- Mekhtoub Yassine<br/>
		- Laouadi Rabeh<br/><br/>
		</div>
		Si vous voulez nous contactez, voila nos cordonnés :<br/><br/>
		Tel :
		<div class="Contact_créateur">
		0792 366 811
		</div>
		E-mail : 
		<div class="Contact_créateur">
		max_evens@hotmail.com
		</div>
        </p>
		
	</div>	
	<?php
	// Gestion de la  déconnexion
        if(isset($_GET['erreur']) && $_GET['erreur'] == 'logout'){ // Test sur les paramètres d'URL qui permettront d'identifier un contexte de déconnexion
	   //$prenom = $_SESSION['prenom']; // On garde le prénom en variable pour dire au revoir (soyons polis :-)
	    session_unset("authentification");
	    header("Location:index.php?erreur=delog");
        }
       ?>
       <?php include ("../haut_bas/basi.php")?> <!--la baniiere du bas de page-->