<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UpdateInvoice</title>
</head>
<body>
	<form action="/personupdatepost" method="POST">
		<input hidden name="id" value="<?php echo $_GET['id'] ?>">
		<label for="name">Nom:</label>
		<input type="text" name="name" value=" <?php echo PersonsUpdate::queryPerson($_GET['id'])['name'] ?> ">
		<label for="firstname">Prénom:</label>
		<input type="text" name="firstname" value=" <?php echo PersonsUpdate::queryPerson($_GET['id'])['firstname'] ?> ">
		<label for="email">Courriel:</label>
		<input type="text" name="email" value=" <?php echo PersonsUpdate::queryPerson($_GET['id'])['email'] ?> ">
		<label for="phonenumber">Telephone:</label>
		<input type="tel" name="phonenumber" value=" <?php echo PersonsUpdate::queryPerson($_GET['id'])['phonenumber'] ?> ">
		<label for="">Société</label>
		<select name="company" id="">
			<?php echo PersonsUpdate::showAllCompagnies(); ?>
		</select>
		<input type="submit" value="Modifier">
	</form>
</body>
</html>