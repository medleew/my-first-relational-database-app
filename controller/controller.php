<?php 
    $error_list = [];
 
    $nom_societe = $_POST['nom_societe'];
    $pays_societe = $_POST['pays_societe'];
    $tva_societe = $_POST['tva_societe'];
    $telephone_societe = $_POST['telephone_societe'];
    $types_id_types = $_POST['types_id_types'];

    //Sanitization
    $san_nom_societe = filter_var($nom_societe,FILTER_SANITIZE_STRING);
    $san_pays_societe = filter_var($pays_societe, FILTER_SANITIZE_STRING);
    $san_tva_societe = filter_var($tva_societe, FILTER_SANITIZE_NUMBER_INT);
    $san_telephone_societe = filter_var($telephone_societe, FILTER_SANITIZE_NUMBER_INT);

    if(!$san_nom_societe){
        array_push($error_list, "san_nom_societe");
    }

    if(!$san_pays_societe){
        array_push($error_list, "san_pays_societe");
    }

    if(!$san_tva_societe){
        array_push($error_list, "san_tva_societe");
    }

    if(!$san_telephone_societe){
        array_push($error_list, "san_telephone_societe");
    }

    if(strlen($san_telephone_societe)< 6){
        array_push($error_list, "san_telephone_societe");
    }
?>