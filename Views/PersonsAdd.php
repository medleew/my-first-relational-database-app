<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nouvelle Personne</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href=".../assets/images/CogipLogo.svg"/>
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
    	<?php require_once("./Views/components/navbar.php"); ?>     
        <div class="wrap">
        	<form  action="/persons-add" method="POST">
				<input hidden name="id" value="<?php echo $_GET['id'] ?>">
	            <div class="title-back">
	                <a href="acceuil.html" class="btn waves-effect waves-light red right">Retour</a>
	                <h2 style="font-size: 30px; margin-top: 150px">Création d'une nouvelle personne</h2>
	            </div>            
	            <div class="row">
	                <div class="input-field col s6">
	                    <input type="text" name="name" id="name" class="validate" value="">
	                    <label class="active" for="name">Nom</label>
	                </div>
	            </div>            
	            <div class="row">
	                <div class="input-field col s6">
	                    <input value="" id="firstname" name="firstname" type="text" class="validate">
	                    <label class="active" for="firstname">Prénom</label>
	                </div>
	            </div>            
	            <div class="row">
	                <div class="input-field col s6">
	                    <input value="" id="email" type="text" class="validate">
	                    <label class="active" for="email">E-mail</label>
	                </div>
	            </div>            
	            <div class="row">
	                <div class="input-field col s6">
	                    <input name="phonenumber" value="" id="telephone" type="text" class="validate">
	                    <label class="active" for="telephone">Numéro de téléphone</label>
	                </div>
	            </div>
	            <div class="row">
	                <div class="input-field col s6">
	                    <label class="active" for="telephone">Société</label>
	                    <select name="companyid" id="" class="form-control">
	                    	<?php echo PersonsUpdate::showAllCompagnies(); ?>
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
