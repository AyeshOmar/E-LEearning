<?php


include("dataBaseConnexion.php");

if (isset($_GET['id'])) {
	

$id=$_GET['id'];
$sql= "delete from tuteur where idT=$id";

$result=mysqli_query($conn,$sql);
}
 header("location:GererTuteur.php");
exit;
?>