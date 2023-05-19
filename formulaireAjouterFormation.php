


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="formulaireAjoutergrpapp.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajouter Nouveau Groupe D'Apprenants</title>
</head>
<body>



<div class="wrapper">
    <div class="title">
      Ajouter Formation
    </div>
    <form method="post" action="AffecterTuteurFormation.php">
    <div class="form">
       <div class="inputfield">
          <label>IDF</label>
          <input type="text" class="input" name="idF">
       </div>  

       
        <div class="inputfield">
          <label>Nom Formation</label>
          <input type="text" class="input" name="nom">
       </div>  
       <div class="inputfield">
          <label>Description</label>
          <input type="text" class="input" name="Description">
       </div>  


        <div class="inputfield">
          <label>date_debut</label>
          <input type="date" class="input" name="date_debut">
       </div> 

        <div class="inputfield">
          <label>duree</label>
          <input type="text" class="input" name="duree">
       </div> 
        
     
      <div class="inputfield">
        <input type="submit" value="Ajouter" name="submit" class="btn">
       </div>
<div class="inputfield">
        <a href="GererFormation.php" class="cancel"> cancel </a>
       </div>


    </div>
    </form>
</div>




</body>
</html>



<?php
include("dataBaseConnexion.php");
if(isset($_POST['submit'])){
  $inputid = $_POST['idF'];
  $nom = $_POST['nom'];
  $description = $_POST['description'];
  $date_debut = $_POST['date_debut'];
  $duree = $_POST['duree'];

}
?>