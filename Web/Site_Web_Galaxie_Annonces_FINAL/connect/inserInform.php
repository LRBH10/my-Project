<?php
	if(!isset($_POST['capacite']) && !isset($_POST['type']) && !isset($_FILES['monfichier']))
	{
?>
<div class="formuii">
<br/><form method="post" action="compte.php?typ=2" >
			<p>
				<input type="hidden" name="categorie" value="informatique" />
				<label for="type"><font color="violet">Donnez le type de votre annonce </font></label>
				<select name="type" id="type">
					<optgroup label="cas traité">
						<option value="PC ">Ordinateur</option>
					</optgroup>
					<optgroup label="cas non traité">
						<option value="prephérique">Prepherique</option>
						<option value="logicel">Logiciel et pilote</option>
					</optgroup>
				</select>
				<br/><br/><br/>
				<label for="titre"> <font color="violet">Adresse de l'annonce 	</font></label><input type="text" name="adress" id="titre"/><br/>	
				<br/><br/>
				<label for="prix">  <font color="violet">Prix de Vente			</font></label><input type="text" name="prix" id="prix"/>
					<input type="radio" name="type_vente" value="N" checked="checked" /> Negociable
					<input type="radio" name="type_vente" value="F" /> Prix Fixe<br/><br/>
				<fieldset>
					<legend>Les Details</legend>
						<br/><label for="rd">	<font color="violet">Le type de PC </font></label><br/>
						<center>
						<input type="radio" id="rd" name="type_PC" value="portable" checked="checked" /> PC Portable
						<input type="radio" name="type_PC" value="bureau" /> PC de Bureau<br/><br/>
						</center>
						<br/>
						<label for="cpu"> <font color="violet">CPU	 </font></label><input type="text" name="cpu" id="cpu"/> GHz<br/><br/><br/>	
						<center>
						<input type="radio" name="type_cpu" value="duel_core" checked="checked" /> Duel Core
						<input type="radio" name="type_cpu" value="core2_duo" /> Core 2 Duo 
						<input type="radio" name="type_cpu" value="core_quaod" checked="checked" /> Core Quoad
						<input type="radio" name="type_cpu" value="core_extreme" /> Core Extreme 
						<input type="radio" name="type_cpu" value="autres" /> Autres.. <br/><br/>
						</center>
						
						<br/>
						<label for="disque_dur">   <font color="violet">Disque dure 	</font></label><input type="text" name="disque_dure" id="disque_dure"/> Go<br/><br/><br/>
						
						<label for="ram">    <font color="violet">La Ram		</font></label><input type="text" name="ram" id="surface"/> Go<br/><br/><br/>
						<center>
						<input type="radio" name="type_ram" value="ddr2" /> DDR2 
						<input type="radio" name="type_ram" value="ddr3" checked="checked" /> DDR3
						<input type="radio" name="type_ram" value="autres" checked="checked" /> Autres
						</center>
						<br/><br/>
						<label for="cart">    <font color="violet">La Carte Graphique		</font></label><input type="text" name="carte" id="cart"/><br/><br/>
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
		mysql_query("UPDATE pc SET file='".$_FILES['monfichier']['name']."' where id=".$_POST['idd']."")or die (mysql_error());
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
	<strong> Le type de PC			:   <?php echo $_POST['type_PC'];	?></strong><br/>
	<strong> Le CPU		 			:  <?php echo $_POST['cpu'];	?>GHz</strong><br/>
	<strong> Le type de CPU		 	:  <?php echo $_POST['type_cpu'];	?></strong><br/>
	<strong> La capacite de disque 	:  <?php echo $_POST['disque_dure'];	?>Go</strong><br/>
	<strong> La capacité de la RAM 	:   <?php echo $_POST['ram'];	?>Go</strong><br/>
	<strong> Le type de la RAM		:  <?php echo $_POST['type_ram'];	?></strong><br/>
	<strong> La carte graphique 	:   <?php echo $_POST['carte'];	?></strong><br/>
	<strong> L'adress 				:  <?php echo $_POST['adress'];	?></strong><br/>
	<strong> La catégorie 			:  <?php echo $_POST['categorie'];	?></strong><br/>
	</p>
<?php
	mysql_connect("localhost", 'root',"");
	mysql_select_db('galaxie');
	mysql_query("insert into pc values('','".$_POST['type']."',".$_POST['prix'].",'".$_POST['type_vente']."','".$_POST['type_PC']."','".$_POST['cpu']."','".$_POST['type_cpu']."',".$_POST['disque_dure'].",".$_POST['ram'].",'".$_POST['type_ram']."','".$_POST['carte']."','".$_POST['adress']."','informatique','')") or die(mysql_error());
	
 
	$x=0;
	$reponse = mysql_query("SELECT id FROM pc"); // Requête SQL
 	while ($donnees = mysql_fetch_array($reponse) )
	{
		$x=$donnees['id'];
	}
	mysql_query("insert into annonce values('','".$_SESSION['pseudo']."',".$x.",'pc','informatique')");

	
?>
		<form method="post" action="compte.php?typ=2"  enctype="multipart/form-data">
        <p>
				<input type="hidden" name="categorie" value="informatique" />
				<h3>Ajouter une image:</h3>
				<input type="hidden"  name="idd" value=<?php echo $x; ?> />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="uploader l'image" />
        </p>
		</form>
<?php
	}			
?>




