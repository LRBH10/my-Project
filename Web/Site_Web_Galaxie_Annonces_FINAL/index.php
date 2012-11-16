       <?php include("haut_bas/haut.php") ?> <!--la banniere du HomePage(l'entete)-->
       <?php include("barre_rapide/speedbarre.php") ?> <!--la barre de controle-->
	   
       <div id="menu"> <!-- Ici on mettra le menu et le login-->
	   
	   <?php include("admin/login.php") ?>  <!--fichier d'authentification-->

		  
          <div class="element_menu"> <!-- Cadre correspondant à un sous-menu -->
           <h3>Catégories</h3> <!-- Titre du sous-menu -->
           <ul>
            <li><a href="immobilier.php">Immobiliers</a></li>  <!-- Liste des liens du sous-menu -->
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
			
			
			
			<h2>*******************************************************</h2>
			</center>
	<?php
		}
		}
	}
	?>
		
	   </div>
 
       <?php include ("haut_bas/basi.php")?> <!--la baniiere du bas de page-->