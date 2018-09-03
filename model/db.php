<?php
  try
  {
    $db = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'mohamed', ''); 
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
?>