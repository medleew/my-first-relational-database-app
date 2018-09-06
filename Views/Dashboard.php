<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Acceuil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cogip App"/>
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
        <nav>
            <div class="nav-wrapper">
            	<a href="/dashboard">
               		<img class="logo" src="assets/images/CogipLogo.svg" alt="logo">
               	</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="personnes.html">Personnes</a></li>
                    <li><a href="factures.html">Factures</a></li>
                    <li><a href="societes.html">Sociétés</a></li>
                </ul>
            </div>
        </nav>
        <div class="wrap">
            <h3>Dernières factures</h3>
            <div>
                <a href="/facture-add" class="btn red">Ajouter une nouvelle facture</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Numéro de la facture</th>
                        <th>Date de la facture</th>
                        <th>Objet prestation</th>
                        <th>Contact</th>
                        <th>Société</th>
                        <th>Actions</th>
                    </tr>
                </thead>               
                <tbody>
                	<?php echo Dashboard::showRecentInvoices(); ?>
                </tbody>
            </table>
            <a href="/facture" class="gestion">Gerer les factures</a>
            <h3>Dernières personnes</h3>
            <div>
                <a href="/persons-add" class="btn red">Ajouter une nouvelle personne</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>E-mail</th>
                        <th>Société</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	<?php echo Dashboard::showRecentPersons(); ?>
            </table>
            <a href="/persons" class="gestion">Gerer les personnes</a>
            <h3>Dernières sociétés</h3>
            <div>
                <a href="nouvelle-societe.html" class="btn red">Ajouter une nouvelle société</a>
            </div>
            <table>
                <thead>
                    <tr>
                    <th>Nom de la société</th>
                    <th>Adresse de la société</th>
                    <th>Pays</th>
                    <th>N° de TVA</th>
                    <th>N° de téléphone</th>
                    <th>Type</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Knor</td>
                        <td>Rue de la soupe</td>
                        <td>Belgique</td>
                        <td>TVA BE 0 123 456 789</td>
                        <td>02 025 25 85</td>
                        <td>Revendeur</td>
                        <td>
                        	<a href="details-societe.html" alt="details">
                        		<i class="fa fa-eye"></i>
                        	</a>
                        	<a href="modif-societe.html" alt="modifications">
                        		<i class="fa fa-pencil"></i>
                        	</a>
                        	<a href="supprimer-societe" alt="suppression">
                        		<i class="fa fa-minus-circle"></i>
                        	</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Amora</td>
                        <td>Rue de la sauce</td>
                        <td>Belgique</td>
                        <td>TVA BE 0 032 698 148</td>
                        <td>02 025 02 14</td>
                        <td>Revendeur</td>
                        <td><a href="details-societe.html" alt="details"><i class="fa fa-eye"></i></a><a href="modif-societe.html" alt="modifications"><i class="fa fa-pencil"></i></a><a href="supprimer-societe" alt="suppression"><i class="fa fa-minus-circle"></i></a></td>
                    </tr>
                    <tr>
                        <td>Heinz</td>
                        <td>Rue du ketchup</td>
                        <td>Belgique</td>
                        <td>TVA BE 0 365 456 125</td>
                        <td>02 025 02 36</td>
                        <td>Revendeur</td>
                        <td><a href="details-societe.html" alt="details"><i class="fa fa-eye"></i></a><a href="modif-societe.html" alt="modifications"><i class="fa fa-pencil"></i></a><a href="supprimer-societe" alt="suppression"><i class="fa fa-minus-circle"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <a href="societes.html" class="gestion">Gerer les sociétés</a>
        </div>
    </body>
</html>