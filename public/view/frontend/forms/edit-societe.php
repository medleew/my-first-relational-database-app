<?php
include("../../../../controller/edit.php");
include('../head.php');
?>
<body>
	<a href="../societe.php">Société</a>
	<h1>Editer Société</h1>
	<form action="edit-societe.php" method="post">
	<input type="text" name="id_societe" value="<?php echo $id_societe;?>" class="display-none">
		<div>
			<label for="name">Nom de la societe</label>
			<input type="text" name="nom_societe" value="<?php echo $nom_societe;?>" required>
		</div>
        <div>
			<label for="pays">Pays de la societe</label>
			<input type="text" name="pays_societe" value="<?php echo $pays_societe;?>" required>
		</div>
		<div>
			<label for="tva">Nº de TVA</label>
			<input type="number" name="tva_societe" value="<?php echo $tva_societe;?>" required>
		</div>
		<div>
			<label for="telephone">Nº de téléphone</label>
			<input type="number" name="telephone_societe" value="<?php echo $telephone_societe;?>" required>
		</div>
		<div>
			<label for="types">Types</label>
			<select name="types_id_types">
				<option value="1">Fournisseur</option>
				<option value="2">Client</option>
			</select>
		</div>
		<button type="submit" name="edit-societe">Envoyer</button>
	</form>
</body>
</html>