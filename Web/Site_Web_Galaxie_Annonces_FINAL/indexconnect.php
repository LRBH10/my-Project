       <?php require('fonctions/fonctions.inc.php');?>
	   <?php include("haut_bas/haut.php"); ?> <!--la banniere du HomePage(l'entete)-->
       
	   
	   <?php
	   session_start(); // On relaye la session
       if (isset($_SESSION["authentification"])){ // vérification sur la session authentification (la session est elle enregistrée ?)
       // ici les éventuelles actions en cas de réussite de la connexion
       }
       else {
        header("Location:index.php"); // redirection en cas d'echec
       }
	   if($_SESSION['valid']==1)
		 {
		 include("barre_rapide/speedbarreconnect.php");
		 
	     }
		 else{
		 include("barre_rapide/speedbarreconnectnv1.php");
		 
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
	//$prenom = $_SESSION['prenom']; // On garde le prénom en variable pour dire au revoir (soyons polis :-)
	session_unset("authentification");
	header("Location:index.php?erreur=delog");
    }
       ?>
		<p align="center" ><a href="index.php?erreur=logout" ><span><strong>(d&eacute;connexion)</strong></span></a></p>  

		
          <div class="element_menu"> <!-- Cadre correspondant à un sous-menu -->
           <h3>Catégories</h3> <!-- Titre du sous-menu -->
           <ul>
            <li><a href="immobilierconnect.php">Immobiliers</a></li>  <!-- Liste des liens du sous-menu -->
            <li><a href="page2.html">Informatique</a></li>
   			<li><a href="page3.html">Automobiles</a></li>
			<li><a href="page4.html">Meubles</a></li>
			<li><a href="page5.html">Musique</a></li>
			<li><a href="page6.html">Emploi</a></li>
			<li><a href="page7.html">Matériel professionnel</a></li>
			<li><a href="page8.html">Téléphonie et mobiles</a></li>
			<li><a href="page9.html">Business-Affaires</a></li>
			<li><a href="page10.html">Librairie</a></li>
			<li><a href="page11.html">Articles divers</a></li>
           </ul>
          </div>
	   </div>
 
       <div id="corps"> <!-- Ici on mettera le contenu principal de la page (tout le texte quoi) -->
       <h1>www.galaxie-annonces.dz</h1>
 
        
		<?php
if(!isset($_GET['type']))
{
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	
	$reponse = mysql_query("SELECT * FROM annonce "); // Requête SQL
 	while ($donnees = mysql_fetch_array($reponse))
	{
		
		$rp=mysql_query("SELECT * FROM ".$donnees['tablee']." where id=".$donnees['id_annonce'].""); 
		while ($donn = mysql_fetch_array($rp) )
		{
		$inter1=mysql_query("SELECT * FROM tbl_user where pseudo = '".$donnees['psedo']."'")or die (mysql_error());
		$inter=mysql_fetch_array($inter1);
		
		if($donnees['tablee']=="villa")
		{
	?>
			<center>
			<img src="Imageupload/<?php echo $donn['file'] ?>" alt="pas d'images " width="400" height="250" /> <br/>
		
			<strong> <font color="orange">Type : </font></strong><?php echo $donn['type'];?><br/>
			<strong><font color="orange">Type de vente : </font></strong><?php echo $donn['type_vente'];?><br/>
			<strong><font color="orange">Nombre de chambre : </font></strong><?php echo $donn['nbr_chambre']?><br/>
			<strong><font color="orange">Nombre d'étage : </font></strong><?php echo $donn['nbr_etage']?><br/>
			<strong><font color="orange">Surface : </font></strong><?php echo $donn['surface']?> m2<br/>
			<strong><font color="orange">Adress : </font></strong><?php echo $donn['adress']?><br/>
			<strong><font color="green">Prix : </font></strong><?php echo $donn['prix']; ?> DA<br/>
			<strong><font color="bold">Contact : </font></strong></br>
			<strong><font color="orange">Par : </font></strong><?php echo $donnees['psedo'];?><br/>
			<strong><font color="orange">N° telephone : </font></strong><?php echo $inter['tel']; ?> <br/>
			<strong><font color="orange">email : </font></strong><?php echo $inter['email']; ?> <br/>

			<font color="green"><a href="indexconnect.php?type=1&amp;ps=<?php echo $donnees['psedo'];?>"> Laissez un Message </a></font> <br/>
			
			<h2>*******************************************************</h2>
			</center>
	<?php
			echo "<br/>";
		}
		else 
		{
	?>
			<center>
			<img src="Imageupload/<?php echo $donn['file'] ?>" alt="pas d'images " width="400" height="250" /> <br/>
			
			<strong><font color="orange">Type : </font></strong><?php echo $donn['type'];?><br/>
			<strong><font color="orange">Type de vente : </font></strong><?php echo $donn['type_vente'];?><br/>
			<strong><font color="orange">Type PC : </font></strong><?php echo $donn['type_pc'];?><br/>
			<strong><font color="orange">CPU : </font></strong><?php echo $donn['cpu'];?><br/>
			<strong><font color="orange">Type CPU : </font></strong><?php echo $donn['type_cpu'];?><br/>
			<strong><font color="orange">Disque dure :	</font></strong><?php echo $donn['disque'];?><br/>
			<strong><font color="orange">RAM : </font></strong><?php echo $donn['ram'];?><br/>
			<strong><font color="orange">Type de ram : </font></strong><?php echo $donn['type_ram'];?><br/>
			<strong><font color="orange">Carte graphique : </font></strong><?php echo $donn['carte'];?><br/>
			<strong><font color="green">Prix : </font></strong><?php echo $donn['prix']; ?> DA<br/>
			<strong><font color="bold">Contact : </font></strong></br>
			<strong><font color="orange">Par : </font></strong><?php echo $donnees['psedo'];?><br/>
			<strong><font color="orange">N° telephone : </font></strong><?php echo $inter['tel']; ?> <br/>
			<strong><font color="orange">email : </font></strong><?php echo $inter['email']; ?> <br/>
			<font color="green"><a href="indexconnect.php?type=1&amp;ps=<?php echo $donnees['psedo']; ?>"> Laissez un Message </a></font> <br/>
			</strong>
			
			<h2>*******************************************************</h2>
			</center>
		
	<?php
		}
		}
	}
}
else if($_GET['type']==1) 
{
	
?>
	<div class="formui">
	<form action="indexconnect.php?type=2&amp;ps=<?php echo $_GET['ps']?>" method="post">
		<p>
		<label for="tel">Votre Message 	:</label><br/>
		<center>
		<textarea name="text" id="tel" cols=60  rows=10>Ecrire votre message </textarea> <br/><br/>
	    <input type="submit" value="sauvgarder"/></center><br/><br/>

		</p>
	</form>
	</div>

<?php
}
else if($_GET['type']==2)
{
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	
	$str=$_POST['text'];	
	mysql_query("insert into message values('','".$_SESSION['pseudo']."','".$_GET['ps']."','".$str."')")or die(mysql_error());

}
	?>
		
	   </div>
 
       <?php include ("haut_bas/basi.php")?> <!--la baniiere du bas de page-->
