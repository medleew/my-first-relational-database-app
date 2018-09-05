<body style="text-align: center; font-size: 175%;">
	<h1>Details Personne</h1>
	<p>Nom : <?php echo PersonsDetails::query('name') ?></p>
	<p>Prénom : <?php echo PersonsDetails::query('firstname') ?></p>
	<p>Telephone : <?php echo PersonsDetails::query('phonenumber') ?></p>
	<p>Email : <?php echo PersonsDetails::query('email') ?></p>
	<p>Société : 
		<a href="/company-details/<?php echo PersonsDetails::query('companyid') ?>">
			<?php echo PersonsDetails::query('companyname') ?>
		</a>
	</p>

	<h2>Factures associées</h2>
	<table style="margin:auto; text-align: center;">
		<thead>
			<th>Numéro de facture</th>
			<th>Date</th>
			<th>Object</th>
		</thead>
		<tbody>
			<?php echo PersonsDetails::showAllLinkedInvoices(); ?>
		</tbody>
	</table>




	<a style="padding: 1.2vh; font-size: 1.2rem; background-color: red; position: fixed; top:0; left: 0; text-decoration: none; color: white;" href="/persons">Retourner aux personnes</a>
	<a style="padding: 1.2vh; font-size: 1.2rem; background-color: red; position: fixed; bottom:0; left: 0; text-decoration: none; color: white;" href="/dashboard">Retourner au dashboard</a>
</body>
