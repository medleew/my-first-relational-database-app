<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Factures</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/images/CogipLogo.svg"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    </head>
    <body>
    	<?php require_once("./Views/components/navbar.php"); ?>
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
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
					<?php echo Invoices::showAllInvoices(); ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
