

<?php
include("dataBaseConnexion.php");
if(isset($_POST['submit'])){

$inputid=$_POST['id'];
$id=(int)$inputid;

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];

$inputage=$_POST['age'];
$age=(int)$inputage;
$sexe=$_POST['sexe'];
$specialite=$_POST['specialiter'];

$inputtelephone=$_POST['telephone'];
$telephone=(int)$inputtelephone;
$adresse=$_POST['adresse'];
$username=$_POST['username'];
$password=$_POST['password'];


$sql="INSERT INTO `tuteur`(`username`, `password`, `idT`, `Nom`, `prènom`, `téléphone`, `Sexe`, `Spécialité`,`age`, `Adresse`) VALUES ('$username','$password','$id','$nom','$prenom','$telephone','$sexe','$specialite','$age','$adresse')";

$result=mysqli_query($conn,$sql);
 header("location:GererTuteur.php");
}



?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="formulaireCreartionTuteur.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add new Tuteur</title>
</head>
<body>



<div class="wrapper">
    <div class="title">
      Ajouter Tuteur
    </div>
    <form method="post">
    <div class="form">
       <div class="inputfield">
          <label>ID</label>
          <input type="text" class="input" name="id">
       </div>  

       
        <div class="inputfield">
          <label>Nom</label>
          <input type="text" class="input" name="nom">
       </div>  
       <div class="inputfield">
          <label>Prènom</label>
          <input type="text" class="input" name="prenom">
       </div>  



        <div class="inputfield">
          <label>Age</label>
          <input type="password" class="input" name="age">
       </div> 
        <div class="inputfield">
          <label>Sexe</label>
          <div class="custom_select">
            <select name="sexe">
              <option value="">Select</option>
              <option value="Homme">Homme</option>
              <option value="Femme">Femme</option>
            </select>
          </div>
       </div>
       <div class="inputfield">
          <label>Spècialiter</label>
          <input type="text" class="input" name="specialiter">
       </div> 
      <div class="inputfield">
          <label>Télephone</label>
          <input type="text" class="input" name="telephone">
       </div> 
      <div class="inputfield">
          <label>Adresse</label>
           <input type="text" class="input" name="adresse">
       </div> 
        <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="username">
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password">
       </div>  
     
      <div class="inputfield">
        <input type="submit" value="Submit" name="submit" class="btn">
       </div>
<div class="inputfield">
        <a href="GererTuteur.php" class="cancel"> cancel </a>
       </div>


    </div>
    </form>
</div>




</body>
</html>