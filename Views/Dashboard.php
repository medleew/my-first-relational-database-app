<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<h2>Factures</h2>
	<a href="/facture">Voir toutes les factures</a>
	<table style="text-align: center;">
		<thead>
			<th>Numéro de facture</th>
			<th>Date</th>
			<th>Object</th>
			<th>Société</th>
			<th>Personne Responsable</th>
			<th>Type</th>
			<th>Modification</th>
		</thead>
		<tbody>
			<?php echo Dashboard::showRecentInvoices(); ?>
		</tbody>
	</table>
	<a href="/facture-add">Ajouter une facture</a>

	<h2>Personnes</h2>
	<a href="/facture">Voir toutes les personnes</a>
	<table style="text-align: center;">
		<thead>
			<th>ID</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Courriel</th>
			<th>Société</th>
			<th>Modification</th>
		</thead>
		<tbody>
			<?php echo Dashboard::showRecentPersons(); ?>
		</tbody>
	</table>
	<a href="/facture-add">Ajouter une personne</a>
</body>
</html>