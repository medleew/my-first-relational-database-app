<a href="/dashboard">Retourner sur le dashboard</a>

<h1>Page Personnes !</h1>
<table style="text-align: center">
	<thead>
		<th>ID</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Email</th>
		<th>Société</th>
	</thead>
	<tbody>
		<?php echo Persons::showAllPersons(); ?>
	</tbody>
</table>