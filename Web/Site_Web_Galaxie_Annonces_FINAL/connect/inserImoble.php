<?php
	
	if(!isset($_POST['type']) && !isset($_POST['titre']) && !isset($_POST['prix']) && !isset($_FILES['monfichier']))
	{
?>
<div class="formuii">
<br/><form method="post" action="compte.php?typ=2" >
			<p>
				<input type="hidden" name="categorie" value="immobilier" />
				<label for="type"><font color="violet">Donnez le type de votre annonce </font></label>
				<select name="type" id="type">
					<optgroup label="cas traité">
						<option value="villa">Maison et Villa</option>
					</optgroup>
					<optgroup label="cas non traité">
						<option value="appartement">Appartement</option>
						<option value="ferme">Ferme et Atelier</option>
						<option value="terrain">Terrain</option>
						<option value="garage">Garage et Parking</option>
						<option value="autres">Autres...</option>
					</optgroup>
				</select>
				<br/><br/><br/>
				<label for="titre"> <font color="violet">Adresse de l'annonce 	</font></label><input type="text" name="adress" id="titre"/><br/>	
				<br/><br/>
				<label for="prix">  <font color="violet">Prix de Vente			</font></label><input type="text" name="prix" id="prix"/>
					<input type="radio" name="type_vente" value="N" checked="checked" /> Negociable
					<input type="radio" name="type_vente" value="F" /> Prix Fixe<br/>
				<fieldset>
					<legend>Les Details</legend>
						<br/>
						<label for="nbr_chambre"> <font color="violet">Nombre de chambre	 </font></label><input type="text" name="chambre" id="nbr_chambre"/><br/><br/>	
						<br/>
						<label for="nbr_etage">   <font color="violet">Nombre d'étages 	</font></label><input type="text" name="etage" id="nbr_etage"/><br/><br/>
						<br/>
						<label for="surface">     <font color="violet">Superficie		</font></label><input type="text" name="surface" id="surface"/><br/><br/>
						<br/>
				</fieldset>
				<br/><br/>
				<center><input type="submit" value="Valider"/><input type="reset" value="Rétablir"/></center><br/>
			</p>
		</form>
		</div>
<?php
	}
	else if(isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
	{
		mysql_connect("localhost", 'root',"");
		mysql_select_db('galaxie');
		mysql_query("UPDATE villa SET file='".$_FILES['monfichier']['name']."' where id=".$_POST['idd']."")or die (mysql_error());
		move_uploaded_file($_FILES['monfichier']['tmp_name'], '../Imageupload/' .$_FILES['monfichier']['name']);
?>
		<h3> l'image uplaoder </h3>
		<center><img src="../Imageupload/<?php echo  $_FILES['monfichier']['name']; ?>" alt="Photo uploader" width="600" height="400"  /></center>
<?php		
		
	}
	else	
	{
?>
	<p>
	<h1> voila les informations saisis </h1>
	<br/>
	<strong> Le type 				:   <?php echo $_POST['type'];	?></strong><br/>
	<strong> Le prix 				:   <?php echo $_POST['prix'];	?> DA</strong><br/>
	<strong> Le type de vente 		:   <?php echo $_POST['type_vente'];	?></strong><br/>
	<strong> Le surface 			:  <?php echo $_POST['surface'];	?>M²</strong><br/>
	<strong> Le nombre des chombre 	:  <?php echo $_POST['chambre'];	?></strong><br/>
	<strong> Le nombre d'étages 	:   <?php echo $_POST['etage'];	?></strong><br/>
	<strong> L'adress 				:  <?php echo $_POST['adress'];	?></strong><br/>
	<strong> La catégorie 			:  <?php echo $_POST['categorie'];	?></strong><br/>
	
	</p>
<?php
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	mysql_query("insert into villa values('','".$_POST['type']."',".$_POST['prix'].",'".$_POST['type_vente']."',".$_POST['chambre'].",".$_POST['etage'].",".$_POST['surface'].",'".$_POST['adress']."','immobilier','')") or die(mysql_error());
	
 
	$x=0;
	$reponse = mysql_query("SELECT id FROM villa"); // Requête SQL
 	while ($donnees = mysql_fetch_array($reponse) )
	{
		$x=$donnees['id'];
	}
	mysql_query("insert into annonce values('','".$_SESSION['pseudo']."',".$x.",'villa','immobilier')");
	
	
?>
		<form method="post" action="compte.php?typ=2"  enctype="multipart/form-data">
        <p>
				<input type="hidden" name="categorie" value="immobilier" />
				<h3>Ajouter une image:</h3>
				<input type="hidden"  name="idd" value=<?php echo $x; ?> />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="uploader l'image" />
        </p>
		</form>
<?php
	
	
	}			
?>
