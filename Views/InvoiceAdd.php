<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/facture-add" method="POST">
		<label for="dateofissue">Date d'émission :</label>
		<input type="date" name="date">
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
		<input type="submit" value="Ajouter">
	</form>
	<a href="/dashboard">Retourner au dashboard</a>
</body>
</html>