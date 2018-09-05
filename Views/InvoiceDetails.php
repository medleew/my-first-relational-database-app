<body style="text-align: center; font-size: 175%;">
	<h1>Société : <?php echo InvoiceDetails::query('companyname') ?></h1>
	<p>Objet : <?php echo InvoiceDetails::query('object') ?></p>
	<small>Date: <?php echo InvoiceDetails::query('dateofissue') ?></small>
	<p>Numéro de facture : <?php echo InvoiceDetails::query('id') ?></p>
	<address>Adresse de la société : <?php echo InvoiceDetails::query('companyaddress') ?> </address>
	<address>Personne de contact : <a href="/persons-details/<?php echo InvoiceDetails::query('personsid'); ?>"> 
		<?php echo InvoiceDetails::query('personname') ?></a>
	</address>
	<strong >Type de société : <?php echo InvoiceDetails::query('companytype') ?></strong><br>
	<a style="padding: 1.2vh; font-size: 1.2rem; background-color: red; position: absolute; top:0; left: 0; text-decoration: none; color: white;" href="/facture">Retourner aux factures</a>
	<a style="padding: 1.2vh; font-size: 1.2rem; background-color: red; position: absolute; bottom:0; left: 0; text-decoration: none; color: white;" href="/dashboard">Retourner au dashboard</a>
</body>

