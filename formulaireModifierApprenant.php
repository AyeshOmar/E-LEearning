
<?php
 include("dataBaseConnexion.php");
$nom="";
$username="";
$password="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:GererApprenant.php");
      exit;
    }

    
$id=$_GET['id'];
$sql="select * from apprenant where id =$id";
$result=mysqli_query($conn,$sql);
$row =$result->fetch_assoc();
    while(!$row){
      header("location:GererApprenant.php");
      exit;
    }
   
$nom=$row['nom'];

$username=$row['username'];
$password=$row['password'];
  }
  else{
   
$id=$_POST['id'];
$nom=$_POST['nom'];

$username=$_POST['username'];
$password=$_POST['password'];


$sql="UPDATE `Apprenant` SET `username`='$username',`password`='$password',`nom`='$nom' WHERE  `id`=$id";

 $result = $conn->query($sql);

 header("location:GererApprenant.php");
    
  }



?>





<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="formulaireCreartionTuteur.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modifier Tuteur</title>
</head>
<body>



<div class="wrapper">
    <div class="title">
      Modifier Tuteur
    </div>
    <form method="post">
    <div class="form">
       
        <div class="inputfield">
          <label>Id</label>
          <input type="hidden" class="input" name="id" value="<?php echo $id?>">
       </div>  

         <div class="inputfield">
          <label>Nom</label>
        <input type="text" class="input" name="nom" value="<?php echo $nom?>">
       </div>  
       
           
      
        <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="username" value="<?php echo $username?>">
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="text" class="input" name="password" value="<?php echo $password?>">
       </div>  
     
      <div class="inputfield">
       <input type="submit" value="Submit" name="Submit" class="btn">
       </div>
<div class="inputfield">
        <a href="GererApprenant.php" class="cancel"> cancel </a>
       </div>


    </div>
    </form>
</div>




</body>
</html>