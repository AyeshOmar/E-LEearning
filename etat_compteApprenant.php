<?php
include("dataBaseConnexion.php");



$id=$_GET['id'];
$etat_compte=$_GET['etat_compte'];

$sql="UPDATE `apprenant` SET `etat_compte`='$etat_compte' WHERE id=$id";

$result=mysqli_query($conn,$sql);
 header("location:GererApprenant.php");
?>