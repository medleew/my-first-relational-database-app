<h1>Page Factures !</h1>

<table>
	<thead>
		<th>Numéro de facture</th>
		<th>Company Name</th>
		<th>Date of issue</th>
	</thead>
	<tbody>
		<?php echo Invoices::showAllInvoices(); ?>
	</tbody>
</table>