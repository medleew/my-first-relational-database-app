<?php
    include('../../../../model/db.php');
    if(isset($_POST['edit-societe'])){ 	
        $id_societe = $_POST['id_societe'];

        $nom_societe = $_POST['nom_societe'];
        $pays_societe = $_POST['pays_societe'];
        $tva_societe = $_POST['tva_societe'];
        $telephone_societe = $_POST['telephone_societe'];
        $types_id_types = $_POST['types_id_types'];

        $sql = "UPDATE societe SET nom_societe=:nom_societe, pays_societe=:pays_societe, tva_societe=:tva_societe, telephone_societe=:telephone_societe, types_id_types=:types_id_types 
        WHERE id_societe=:id_societe";
        $query = $db->prepare($sql);

            $query->bindParam(':id_societe', $id_societe);
            $query->bindParam(':nom_societe', $nom_societe);
            $query->bindParam(':pays_societe', $pays_societe);
            $query->bindParam(':tva_societe', $tva_societe);
            $query->bindParam(':telephone_societe', $telephone_societe);
            $query->bindParam(':types_id_types', $types_id_types);

        $result = $query->execute();
        header("Location: ../../../../public/view/frontend/societe.php");
    }

    $id = $_GET['id_societe'];
    $sql = "SELECT * FROM societe WHERE id_societe=:id";
    $query = $db->prepare($sql);
    $query->execute(array(':id' => $id));

    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $id_societe = $row['id_societe'];
        $nom_societe = $row['nom_societe'];
        $pays_societe = $row['pays_societe'];
        $tva_societe = $row['tva_societe'];
        $telephone_societe = $row['telephone_societe'];
        $types_id_types = $row['types_id_types'];
    }
?>