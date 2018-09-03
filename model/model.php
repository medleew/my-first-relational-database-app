<?php
  include('db.php');

  //Societe
  
  if (isset($_POST['submit_societe']))
  {
    include('../controller/controller.php');

    $stmt = $db->prepare("INSERT INTO societe (nom_societe, pays_societe, tva_societe, telephone_societe, types_id_types) 
    VALUES (:nom_societe, :pays_societe, :tva_societe, :telephone_societe, :types_id_types)");

    $stmt->bindParam(':nom_societe', $nom_societe);
    $stmt->bindParam(':pays_societe', $pays_societe);
    $stmt->bindParam(':tva_societe', $tva_societe);
    $stmt->bindParam(':telephone_societe', $telephone_societe);
    $stmt->bindParam(':types_id_types', $types_id_types);
    
    $stmt->execute();

    if(count($error_list) != 0){
      $string = '../public/view/frontend/forms/add-societe.php?status=false';
      foreach($error_list as $index=>$value){
          $string .= '&'.$value.'=false';
      }
      var_dump($string);
      header('Location: '.$string);
    }else{
      header('Location: ../public/view/index.php');
    }
  }

?>