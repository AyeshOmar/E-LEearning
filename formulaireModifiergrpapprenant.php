


<?php
 include("dataBaseConnexion.php");
 $nom="";
 $niveau="";
 $email="";



  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['idG'])){
      header("location:GererGroupe.php");
      exit;
    }

    
$idG=$_GET['idG'];
   $sql="select * from groupeapprenant where idG =$idG";
   $result=mysqli_query($conn,$sql);
$row =$result->fetch_assoc();
    while(!$row){
       header("location:GererGroupe.php");
      exit;
    }
   
$nom=$row['nomG'];
$niveau=$row['niveauG'];
$email=$row['emailG'];


  }
  else{
   
$idG=$_POST['idG'];
$nom=$_POST['nom'];
$niveau=$_POST['niveau'];
$email=$_POST['email'];




$sql="UPDATE `groupeapprenant` SET `nomG`='$nom',`niveauG`='$niveau',`emailG`='$email' WHERE  `idG`=$idG";

 $result = $conn->query($sql);

 header('location:GererGroupe.php');
    
  }



?>





<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="formulaireAjoutergrpapp.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modifier Groupe Apprenants</title>
</head>
<body>



<div class="wrapper">
    <div class="title">
      Modifier  Groupe Apprenants
    </div>
    <form method="post">
    <div class="form">
       
        <div class="inputfield">
          <label>Id</label>
          <input type="hidden" class="input" name="idG" value="<?php echo $idG?>">
       </div>  

         <div class="inputfield">
          <label>Nom</label>
          <input type="text" class="input" name="nom" value="<?php echo $nom?>">
       </div>  
       
           
      <div class="inputfield">
          <label>Niveau</label>
          <input type="text" class="input" name="niveau" value="<?php echo $niveau?>">
       </div> 
      
        <div class="inputfield">
          <label>Email</label>
          <input type="email" class="input" name="email" value="<?php echo $email?>">
       </div> 
       
      <div class="inputfield">
       <input type="submit" value="Submit" name="Submit" class="btn">
       </div>
<div class="inputfield">
        <a href="GererGroupe.php" class="cancel"> Annuler </a>
       </div>


    </div>
    </form>
</div>




</body>
</html>