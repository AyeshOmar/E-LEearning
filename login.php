<?php
include("dataBaseConnexion.php");



if (isset($_POST['submit'])) {

$username=$_POST['user'];
$password=$_POST['password'];


$sqlAdmin="select * from administrateur where username ='$username' and password ='$password'";
$resultAdmin = mysqli_query($conn,$sqlAdmin);
// $row hedhi bech  trécupérii la première ligne 
$row =mysqli_fetch_array($resultAdmin);
// $countAdmin hedhi bech traja3lek fiha le nombre de ligne 7asb lcondition mta3 requete 
$countAdmin =mysqli_num_rows($resultAdmin);
   





$sqltuteur="select * from tuteur where username ='$username' and password ='$password'";
$resulttuteur = mysqli_query($conn,$sqltuteur);
$rowTuteur =mysqli_fetch_array($resulttuteur);
$counttuteur =mysqli_num_rows($resulttuteur);






$sqlapprenant="select * from apprenant where username ='$username' and password ='$password'";
$resultapprenant = mysqli_query($conn,$sqlapprenant);
$rowApprenant =mysqli_fetch_array($resultapprenant);
$countapprenant =mysqli_num_rows($resultapprenant);



	$etat_compte = $rowTuteur['etat_compte'];
 $etat_compteApprenant= $rowApprenant['etat_compte'];
if($countAdmin==1){
	$_SESSION['loggedin'] = true;
	header("Location:welcome.php");
}else if($counttuteur==1 && $etat_compte==1){
	$_SESSION['loggedin'] = true;


		header("Location:TuteurEspace.php");
	
	
}else if($counttuteur==1 && $etat_compte==0){
	$_SESSION['loggedin'] = true;


		header("Location: index.php?error=Contacter l'administrateur !!");
	
	
}


else if($countapprenant==1 && $etat_compteApprenant==1){
	$_SESSION['loggedin'] = true;
	header("Location:ApprenantEspace.php");
}


else if($countapprenant==1 && $etat_compteApprenant==0){
	$_SESSION['loggedin'] = true;


		header("Location: index.php?error=Contacter l'administrateur !!");
	
	
}else{
	header("Location: index.php?error=Invalid login");
}}

?>


