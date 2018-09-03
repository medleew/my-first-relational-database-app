<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<a href="/facture">Voir toutes les factures</a>
	<table>
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
</body>
</html>