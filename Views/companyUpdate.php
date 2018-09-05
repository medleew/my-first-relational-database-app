<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UpdateCompany</title>
</head>
<body>
	<form action="/companyupdatepost" method="POST">
		<input hidden name="id" value="<?php echo $_GET['id'] ?>">
		<label for="name">Nom:</label>
		<input type="text" name="name" value=" <?php echo CompaniesUpdate::queryCompany($_GET['id'])['name'] ?> ">
		<label for="firstname">Pays:</label>
		<input type="text" name="country" value=" <?php echo CompaniesUpdate::queryCompany($_GET['id'])['country'] ?> ">
		<label for="email">Courriel:</label>
		<input type="text" name="address" value=" <?php echo CompaniesUpdate::queryCompany($_GET['id'])['address'] ?> ">
		<label for="phonenumber">Telephone:</label>
		<input type="tel" name="phonenumber" value=" <?php echo CompaniesUpdate::queryCompany($_GET['id'])['phonenumber'] ?> ">
        <label for="tva">N° TVA:</label>
        <input type="number" name="tva" value=" <?php echo CompaniesUpdate::queryCompany($_GET['id'])['tva'] ?> ">
		<label for="">Type</label>
		<select name="companyTypeId" id=""> 
			<?php echo CompaniesUpdate::showAllCompagnies(); ?>
		</select>
		<input type="submit" value="Modifier">
	</form>
</body>