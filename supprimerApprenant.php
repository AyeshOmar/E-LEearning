<?php


include("dataBaseConnexion.php");

if (isset($_GET['id'])) {
	

$id=$_GET['id'];
$sql= "delete from apprenant where id=$id";

$result=mysqli_query($conn,$sql);
}
 header("location:GererApprenant.php");
exit;
?>