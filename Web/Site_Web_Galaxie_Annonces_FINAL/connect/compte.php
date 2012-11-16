       <?php include("../haut_bas/haut1.php") ?> <!--la banniere du HomePage(l'entete)-->
       <?php include("../barre_rapide/speedbarreconnect1.php") ?> <!--la barre de controle-->
       <title>Mon compte !</title>

       <?php
	   session_start(); // On relaye la session
       if (isset($_SESSION["authentification"])){ // vérification sur la session authentification (la session est elle enregistrée ?)
       // ici les éventuelles actions en cas de réussite de la connexion
       }
       else {
        header("Location:../index.php"); // redirection en cas d'echec
       }
	   ?>


<div id="menu"> <!-- Ici on mettra le menu et le login-->

	   <?php
	   // Gestion de la  déconnexion
       if(isset($_GET['erreur']) && $_GET['erreur'] == 'logout'){ // Test sur les paramètres d'URL qui permettront d'identifier un contexte de déconnexion
	//$prenom = $_SESSION['prenom']; // On garde le prénom en variable pour dire au revoir (soyons polis :-)
	session_unset("authentification");
	header("Location:../index.php?erreur=delog");
    }
       ?>
          <div class="element_menu"> <!-- Cadre correspondant à un sous-menu -->
           <h3>Options</h3> <!-- Titre du sous-menu -->
           <ul>
            <li><a href="compte.php?typ=1">Votre Compte</a></li>  <!-- Liste des liens du sous-menu -->
            <li><a href="compte.php?typ=2">Ajout Annonce</a></li>
   			<li><a href="compte.php?typ=3">Supprission Annonce</a></li>
			<li><a href="compte.php?typ=4">Vos Messages</a></li>
			</ul>
          </div>
	   </div>
 
<div id="corpsi">

<?php
if ($_GET['typ']==2)
{
	if(!isset($_POST['categorie']))
	{
		
?>

		<center><h2> Ajouter une annonce </h2></center>
		<hr width="90%" align="center" color="white">
		<div class="formui">
		<center>
		<form method="post" action="compte.php?typ=2">
			<p>
				<h4>Donnez la catégorie de votre annonce <h4>
				
					<select name="categorie" id="categorie">
						<optgroup label="cas traité">
							<option value="informatique">Informatique</option>
							<option value="immobilier">Immobiliers</option>
						</optgroup>
						<optgroup label="cas non-traité">
							<option value="telephone">Téléphonie et mobiles</option>
							<option value="meuble">Meubles</option>
							<option value="automobile">Automobiles</option>
							<option value="matriel">Matériel professionnel</option>
							<option value="musique">Musique</option>
							<option value="emploi">Emploi</option>
						</optgroup>
					</select>
				<center><br/><input type="submit" value="Valider"/></center>
			</p>
		</form>
		</CENTER>
		</div>
	<?php
	}
	
	else if($_POST['categorie']=="immobilier")
	{
		include ("inserImoble.php");
	}
	else if($_POST['categorie']=="informatique")
	{
		include ("inserInform.php");
	}
	else echo "<h2> cas non encore traité</h2>";
}
else if ($_GET['typ']==1)
{
?>
	<center><h2> Bienvenue dans votre Compte </h2></center>
	
<?php
echo"<hr width=\"90%\" align=\"center\" color=\"white\">";
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	if(!isset($_GET['al']))
	{
		
		if(isset($_GET['f']))
		{
		if($_SESSION['valid']==1)
			mysql_query("UPDATE tbl_user SET nom='".$_POST['nom']."', prenom='".$_POST['prenom']."',mdp='".$_POST['mddp']."',email='".$_POST['email']."',tel='".$_POST['tel']."' where pseudo='".$_SESSION['pseudo']."'")or die (mysql_error());
			
		else
			mysql_query("UPDATE tbl_tmp_user SET nom='".$_POST['nom']."', prenom='".$_POST['prenom']."',mdp='".$_POST['mddp']."',email='".$_POST['email']."',tel='".$_POST['tel']."' where pseudo='".$_SESSION['pseudo']."'")or die (mysql_error());
		}
		
		
		$reponse = mysql_query("SELECT * FROM tbl_user where pseudo='".$_SESSION['pseudo']."'"); // Requête SQL
		while ($donnees = mysql_fetch_array($reponse) )
		{
?>
		<center><br/><br/><strong> <font color="orange">Votre pseudo       	: </font></strong><?php echo $donnees['pseudo']; ?><br/>
		<strong> <font color="orange">Votre Nom    			:</font></strong> <?php echo $donnees['nom']; ?><br/>
		<strong> <font color="orange">Votre Prenom 			:</font></strong> <?php echo $donnees['prenom']; ?><br/>
		<strong> <font color="orange">Votre Mot de Passe		:</font></strong> <?php echo $donnees['mdp']; ?><br/>
		<strong> <font color="orange">Votre Email			:</font></strong> <?php echo $donnees['email']; ?><br/>
		<strong> <font color="orange">Votre N° tel		:</font></strong> <?php echo $donnees['tel']; ?><br/>
		<strong> <br/><a href="compte.php?typ=1&amp;al=0"/><font color="bold">Edite</font></a>
		<br/><br/></center>
<?php
		}
	}
	else
	{
?>	<div class="formui">
	<form action="compte.php?typ=1&amp;f=1" method="post">
		<p>
		<label for="nom"> Nom 	:</label><input type="text" name="nom" id="nom"/><br/>	
		<label for="prenom"> Prenom 	:</label><input type="text" name="prenom" id="prenom"/><br/>
		<label for="mdp"> Mot de Passe 	:</label><input type="text" name="mddp" id="mdp"/><br/>
		<label for="email"> Email 	:</label><input type="text" name="email" id="email"/><br/>	
        <label for="tel">N° telephone 	:</label><input type="text" name="tel" id="tel"/><br/>	
		<center> <input type="submit" value="sauvgarder"/></center>
		</p>
	</form>
	</div>
<?php
	}
}
else if($_GET['typ']==3)
{
echo "<center><h2> Supprission D'une annonce </h2></center><hr width=\"90%\" align=\"center\" color=\"white\"><br/>";
?>
	
<?php
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	if(isset($_GET['id']))
	{
		mysql_query("DELETE FROM ".$_GET['table']." where id='".$_GET['id']."'") or die(mysql_error()) ; 	
		mysql_query("DELETE FROM annonce where id_annonce=".$_GET['id']." and tablee='".$_GET['table']."' and psedo='".$_SESSION['pseudo']."'") or die(mysql_error()) ; 	
	}
	
	$reponse = mysql_query("SELECT * FROM annonce where psedo='".$_SESSION['pseudo']."'"); // Requête SQL
 	while ($donnees = mysql_fetch_array($reponse))
	{
		
		$rp=mysql_query("SELECT * FROM ".$donnees['tablee']." where id=".$donnees['id_annonce'].""); 
		while ($donn = mysql_fetch_array($rp) )
		{
		if($donnees['tablee']=="villa")
		{
			?>
			<center>
			<img src="../Imageupload/<?php echo $donn['file'] ?>" alt="pas d'images " width="400" height="250" /> <br/>
		
			<strong> Type :<?php echo $donn['type'];?><br/>
			Prix : <?php echo $donn['prix']; ?><br/>
			Type de vente : <?php echo $donn['type_vente'];?><br/>
			Nombre de chambre: <?php echo $donn['nbr_chambre']?><br/>
			Nombre d'etage: <?php echo $donn['nbr_etage']?><br/>
			Surface :	<?php echo $donn['surface']?><br/>
			Adress :	<?php echo $donn['adress']?><br/>
			</strong>
			
			<a href="compte.php?typ=3&amp;id=<?php echo $donn['id']; ?>&amp;table=<?php echo $donnees['tablee'];?>" > -                    Supprimer-</a> 
			<h1>---------------------------------------------------------</h1>
			</center>
			<?php
			echo "<br/>";
		}
		else 
		{
		?>
			<center>
			<img src="../Imageupload/<?php echo $donn['file'] ?>" alt="pas d'images " width="400" height="250" /> <br/>
			
			<strong> Type :<?php echo $donn['type'];?><br/>
			Prix : <?php echo $donn['prix']; ?><br/>
			Type de vente : <?php echo $donn['type_vente'];?><br/>
			type PC: <?php echo $donn['type_pc']?><br/>
			CPU: <?php echo $donn['cpu']?><br/>
			type CPU :	<?php echo $donn['type_cpu']?><br/>
			disque dure :	<?php echo $donn['disque']?><br/>
			RAM: <?php echo $donn['ram']?><br/>
			type_ram: <?php echo $donn['type_ram']?><br/>
			carte graphique: <?php echo $donn['carte']?><br/>
			</strong>
			<a href="compte.php?typ=3&amp;id=<?php echo $donn['id']; ?>&amp;table=<?php echo $donnees['tablee'];?>" > -                    Supprimer-</a> 
			
			<h1>---------------------------------------------------------</h1>
			</center>
				
		<?php	
		}
		
		}
	}
}
else if($_GET['typ']==4)
{
    echo "<center><h2> Vos Message </h2></center><hr width=\"90%\" align=\"center\" color=\"white\"><br/>";
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	
	$rp = mysql_query("SELECT * FROM message where psedo_des='".$_SESSION['pseudo']."'"); // Requête SQL
	$n=mysql_numrows($rp);
	echo "<center>Il y a $n  message </center><br/><br/>";
	
	while ($donn = mysql_fetch_array($rp) )
	{
	?>
	<center><strong><font color="orange"> par <?php echo $donn['psedo_src'] ?> </font></strong><br/>
	<font color="white" >  <?php echo $donn['text'] ?> </font><br/>
	<a href="compte.php?typ=5&amp;msg=<?php echo $donn['id']?>" >                Supprimer</a></center>
	<center><h2>*********************************************************</h2></center>
	
	<?php	
	}	
 	
}
?>
</div>
<?php
if(isset($_GET['msg']))
{
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	
	$rp = mysql_query("DELETE FROM message where id='".$_GET['msg']."'") or die(mysql_error()); // Requête SQL
	$s=$_GET['msg'];
	header("Location:compte.php?typ=4"); 
}
?>
	<?php include ("../haut_bas/basi.php")?> <!--la baniiere du bas de page-->
