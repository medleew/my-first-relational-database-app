<h1>Page facture détaillée</h1>


<h1>Société : <?php echo InvoiceDetails::query('companyid') ?></h1>
<small>Date: <?php echo InvoiceDetails::query('dateofissue') ?></small>
<address>Personne de contact : <?php echo InvoiceDetails::query('personid') ?></address>
<strong>Object: <?php echo InvoiceDetails::query('object') ?></strong><br>


<pre>
<?php print_r(InvoiceDetails::queryInvoice($_GET['id'])); echo $_GET['id']; ?>
</pre>