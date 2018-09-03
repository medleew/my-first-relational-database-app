<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UpdateInvoice</title>
</head>
<body>
	<p>Numéro de facture : #<?php echo $_GET['id'] ?></p>	
	<p>Date : <?php echo UpdateInvoice::showInvoiceInfo('dateofissue') ?></p>	
	<form action="/UpdateInvoicePOST" method="POST">
		<input hidden name="id" value="<?php echo $_GET['id'] ?>">
		<label for="">Objets :</label>
		<input type="text" name="object" value="<?php echo UpdateInvoice::showInvoiceInfo('object') ?>">
		<label for="">Société</label>
		<select name="company" id="">
			<?php echo UpdateInvoice::showAllCompagnies(); ?>
		</select>
		<label for="">Personne de contact</label>
		<select name="contactperson" id="">
			<?php echo UpdateInvoice::showAllPersones(); ?>
		</select>
		<input type="submit" value="Modifier">
	</form>
</body>
</html>