<?php


include("dataBaseConnexion.php");

if (isset($_GET['id'])) {
	

$id=$_GET['id'];
$sql= "delete from formation where idF=$id";

$result=mysqli_query($conn,$sql);
}
 header("location:GererFormation.php");
exit;
?>