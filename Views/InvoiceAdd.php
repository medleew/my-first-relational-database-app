<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nouvelle Facture</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../assets/images/CogipLogo.svg"/>
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
            <div class="title-back">
                <a href="acceuil.html" class="btn waves-effect waves-light red right">Retour</a>
                <h2 style="font-size: 30px; margin-top: 150px">Création d'une nouvelle facture</h2>
            </div>
            <form  action="/facture-add" method="POST">
	            <div class="row">
	                <div class="input-field col s6">
	                    <input value="" id="date" type="date" class="validate" name="date">
	                    <label class="active" for="date">Date d'émission</label>
	                </div>
	            </div> 
	            <div class="row">
	                <div class="input-field col s6">
	                    <input value="" id="objet" name="object" type="text" class="validate">
	                    <label class="active" for="objet">Objet de la facture</label>
	                </div>
	            </div>
	            <div class="row">
	                <div class="input-field col s6">
	                    <label class="active" for="objet">Personne de contact</label>
	                	<select class="form-control mt-2" name="contactperson" id="">
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
	                Envoyer
	            </button>
            </form>
        </div>
    </body>
</html>
