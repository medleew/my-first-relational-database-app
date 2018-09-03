
<a href="/dashboard">Retourner sur le dashboard</a>

<h1>Page Factures !</h1>
<table>
	<thead>
		<th>Numéro de facture</th>
		<th>Date</th>
		<th>Object</th>
		<th>Société</th>
		<th>Personne Responsable</th>
		<th>Type</th>
	</thead>
	<tbody>
		<?php echo Invoices::showAllInvoices(); ?>
	</tbody>
</table>