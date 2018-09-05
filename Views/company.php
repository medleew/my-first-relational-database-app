<!-- THE VIEW PART OF THE COMPANY -->
<a href="/dashboard">Retourner sur le dashboard</a>

<h1>Page compagnies !</h1>
<table style="text-align: center">
	<thead>
		<th>ID</th>
		<th>Nom</th>
		<th>Pays</th>
		<th>N°TVA</th>
		<th>Téléphone</th>
        <th>Type</th>
	</thead>
	<tbody>
		<?php echo companyController::showAllCompagnies(); ?>
	</tbody>
</table>