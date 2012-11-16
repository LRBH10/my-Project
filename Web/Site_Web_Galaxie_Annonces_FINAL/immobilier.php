
   <?php include("haut_bas/hauti.php") ?> <!--haut de page-immo-->
   <?php include("barre_rapide/speedbarre.php") ?> <!--la barre de controle-->
   <?php include("menu/menui.php") ?> <!--menu de page-immo-->

<div id="corps"> <!-- Ici on mettra le contenu principal de la page (tout le texte quoi) -->
        <center><font color="red" style="font-size:30px">Le Monde <img src="images/ferme1.gif" alt="une ferme" />Immobilier</font></center><br>
		<hr width="95%" size="20px" align="center"/>  
		  
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
		
			<strong> <font color="purple">Type : </font></strong><?php echo $donn['type'];?><br/>
			<strong><font color="purple">Type de vente : </font></strong><?php echo $donn['type_vente'];?><br/>
			<strong><font color="purple">Nombre de chambre : </font></strong><?php echo $donn['nbr_chambre']?><br/>
			<strong><font color="purple">Nombre d'étage : </font></strong><?php echo $donn['nbr_etage']?><br/>
			<strong><font color="purple">Surface : </font></strong><?php echo $donn['surface']?> m2<br/>
			<strong><font color="purple">Adress : </font></strong><?php echo $donn['adress']?><br/>
			<strong><font color="green">Prix : </font></strong><?php echo $donn['prix']; ?> DA<br/>
			<strong><font color="bold">Contact : </font></strong></br>
			<strong><font color="purple">Par : </font></strong><?php echo $donnees['psedo'];?><br/>
			<strong><font color="purple">N° telephone : </font></strong><?php echo $inter['tel']; ?> <br/>
			<strong><font color="purple">email : </font></strong><?php echo $inter['email']; ?> <br/>

			
			<h2>*******************************************************</h2>
			</center>
	<?php
			echo "<br/>";
		}
		/*else 
		{
	?>
			<center>
			<img src="Imageupload/<?php echo $donn['file'] ?>" alt="pas d'images " width="400" height="250" /> <br/>
			
			<strong><font color="orange">Type : </font><?php echo $donn['type'];?><br/>
			<font color="orange">Type de vente : </font><?php echo $donn['type_vente'];?><br/>
			<font color="orange">Type PC : </font><?php echo $donn['type_pc'];?><br/>
			<font color="orange">CPU : </font><?php echo $donn['cpu'];?><br/>
			<font color="orange">Type CPU : </font><?php echo $donn['type_cpu'];?><br/>
			<font color="orange">Disque dure :	</font><?php echo $donn['disque'];?><br/>
			<font color="orange">RAM : </font><?php echo $donn['ram'];?><br/>
			<font color="orange">Type de ram : </font><?php echo $donn['type_ram'];?><br/>
			<font color="orange">Carte graphique : </font><?php echo $donn['carte'];?><br/>
			<font color="green">Prix : </font><?php echo $donn['prix']; ?> DA<br/>
			<font color="orange">Par : </font><?php echo $donnees['psedo'];?><br/>
			<font color="green">N° telephone : </font><?php echo $inter['tel']; ?> <br/>
			
			</strong>
			
			<h2>*******************************************************</h2>
			</center>
		
	<?php
		}*/
	}
	}
	?>
		
	   </div>
 <?php include("haut_bas/basi.php") ?> <!--bas de page-immo-->
