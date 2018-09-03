<?php
include('../model/db.php');
$id_societe = $_GET['id'];
$sql = "DELETE FROM societe WHERE id_societe=:id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id_societe));
header("Location: ../public/view/frontend/societe.php");
?>