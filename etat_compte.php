<?php
include("dataBaseConnexion.php");



$id=$_GET['id'];
$etat_compte=$_GET['etat_compte'];

$sql="UPDATE `tuteur` SET `etat_compte`='$etat_compte' WHERE idT=$id";

$result=mysqli_query($conn,$sql);
 header("location:GererTuteur.php");
?>