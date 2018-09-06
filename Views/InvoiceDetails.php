<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Detail Facture</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../assets/images/CogipLogo.svg"/>
        <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <img class="logo" src="../assets/images/CogipLogo.svg" alt="logo">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="acceuil.html">Acceuil</a></li>
                    <li><a href="personnes.html">Personnes</a></li>
                    <li><a href="societes.html">Sociétés</a></li>
                </ul>
            </div>
        </nav>
        <div class="wrap">      
            <h1>Factures</h1>
            <table>
                <thead>
                    <tr>
                    <th>Numéro de la facture</th>
                    <th>Date de la facture</th>
                    <th>Objet de la prestation</th>
                    <th>Contact</th>
                    <th>Société</th>
                    <th>Type</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo InvoiceDetails::query('id') ?></td>
                        <td><?php echo InvoiceDetails::query('dateofissue') ?></td>
                        <td><?php echo InvoiceDetails::query('object') ?></td>
                        <td>
                        	<a href="/persons-details/<?php echo InvoiceDetails::query('personsid'); ?>"> 
                        			<?php echo InvoiceDetails::query('personname') ?>
							</a>
                        </td>
                        <td>
                        	<a href="/company-details/<?php echo InvoiceDetails::query('companyid') ?>">
                        		<?php echo InvoiceDetails::query('companyname') ?>
                        	</a>                                               
                        </td>
                        <td> <?php echo InvoiceDetails::query('companytype') ?></td>
                        <td>
                        	<a href="modif-facture.html">
                        		<i class="fa fa-pencil"></i>
                        	</a>
                        	<a href="supprimer-facture">
                        		<i class="fa fa-minus-circle"></i>
                        	</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>