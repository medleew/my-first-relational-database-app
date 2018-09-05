<body style="text-align: center; font-size: 175%;">
	<h1>Details compagnies</h1>
	<p>Nom : <?php echo CompagniesDetails::query('name') ?></p>
	<p>Pays : <?php echo CompagniesDetails::query('pays') ?></p>
	<p>Telephone : <?php echo CompagniesDetails::query('phonenumber') ?></p>
	<p>N°TVA : <?php echo CompagniesDetails::query('address') ?></p> <!-- changer dans la DB ntva contre address-->
	<p>Type : 
		<a href="/company-details/<?php echo CompagniesDetails::query('companyid') ?>"> <!--A ajuster pour les types de users ===> societé --> 
			<?php echo CompagniesDetails::query('companyname') ?>
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
			<?php echo CompagniesDetails::showAllLinkedInvoices(); ?>
		</tbody>
	</table>  
<a style="padding: 1.2vh; font-size: 1.2rem; background-color: red; position: fixed; top:0; left: 0; text-decoration: none; color: white;" href="/compagnies">Retourner aux societés</a>
<a style="padding: 1.2vh; font-size: 1.2rem; background-color: red; position: fixed; bottom:0; left: 0; text-decoration: none; color: white;" href="/dashboard">Retourner au dashboard</a>