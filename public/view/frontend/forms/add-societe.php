<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
<?php include('../head.php');?>
<body>
	<a href="../societe.php">Société</a>
	<h1 class ="add">Ajouter une Société</h1>
	<form action="../../../../model/model.php" method="post" enctype="multipart/form-data">
		<div>
			<label for="name">Nom de la societe</label>
			<input type="text" name="nom_societe" value="">
			<?php
			if(!isset($_GET['san_nom_societe'])){
				$_GET['san_nom_societe'] = "";}
                if($_GET['san_nom_societe'] == "false"){
                    echo '<p class="error">svp veuillez à introduire un nom correct.</p>';
				}	
            ?>
		</div>
        <div>
			<label for="pays">Pays de la societe</label>
			<input type="text" name="pays_societe" value="">
			<?php
			if(!isset($_GET['san_pays_societe'])){
				$_GET['san_pays_societe'] = "";}
                if($_GET['san_pays_societe'] == "false"){
                    echo '<p class="error">svp veuillez à introduire un pays correct.</p>';
				}	
            ?>
		</div>
		<div>
			<label for="tva">Nº de TVA</label>
			<input type="number" name="tva_societe" value="">
			<?php
			if(!isset($_GET['san_tva_societe'])){
				$_GET['san_tva_societe'] = "";}
                if($_GET['san_tva_societe'] == "false"){
                    echo '<p class="error">svp veuillez à introduire un número correct.</p>';
				}	
            ?>
		</div>
		<div>
			<label for="telephone">Nº de téléphone</label>
			<input type="number" name="telephone_societe" value="">
			<?php
			if(!isset($_GET['san_telephone_societe'])){
				$_GET['san_telephone_societe'] = "";}
                if($_GET['san_telephone_societe'] == "false"){
                    echo '<p class="error">svp veuillez à introduire un número correct.</p>';
				}	
            ?>
		</div>
		<div>
			<label for="types">Types</label>
			<select name="types_id_types">
				<option value="1">Fournisseur</option>
				<option value="2">Client</option>
			</select>
		</div>
		<button type="submit" name="submit_societe">Envoyer</button>
	</form>
	<?php include('../footer.php');?>
</body>
</html>