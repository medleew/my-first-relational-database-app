<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Modification Facture</title>
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
                    <li><a href="personnes.html">Personnes</a></li>
                    <li><a href="factures.html">Factures</a></li>
                    <li><a href="societes.html">Sociétés</a></li>
                </ul>
            </div>
        </nav>
        <div class="wrap">  
            <div class="title-back">
                <a href="acceuil.html" class="btn waves-effect waves-light red right">Retour</a>
                <h2 style="font-size: 30px; margin-top: 150px">Modification de la facture</h2>
                <p>Numéro de facture : #<?php echo $_GET['id'] ?></p>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="<?php echo UpdateInvoice::showInvoiceInfo('dateofissue') ?>" name="date" id="date" type="date" class="validate">
                    <label class="active" for="date"></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="objet" type="text" class="validate" value="<?php echo UpdateInvoice::showInvoiceInfo('object') ?>">
                    <label class="active" for="objet">Objet de la facture</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label class="active" for="contactperson">Personne de contact</label>
					<select name="contactperson" class="form-control mt-2" id="contactperson">
						<?php echo UpdateInvoice::showAllPersones(); ?>
					</select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label class="active" for="company">Société</label>
                    <select name="company" class="form-control mt-2" id="company">
                    	<?php echo UpdateInvoice::showAllCompagnies(); ?>
                    </select>
                </div>
            </div>
            <button class="btn waves-effect waves-light red right" type="submit" name="action">
                Confirmer
            </button>
        </div>
    </body>
</html>
