
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="DetailTuteur.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modifier Tuteur</title>
</head>
<body>



<div class="wrapper">
    <div class="title">
      Détail Formation
    </div>
    
    <div class="formDetail">
       
      
<table class="table">
  <thead>
    <tr>
      <th>IDF</th>
      <th>NOM_FORMATION</th>
      <th>DESCRIPTION</th>
        <th>DATE_DEBUT</th>
        <th>DUREE</th>
        <th>DATE_DADHESION</th>
         <th>NOM_TUTEUR</th>
        <th>PRENOM_TUTEUR</th>
        <th>TELEPHONE</th>
       
    </tr>
  </thead>
  <tbody>

<!--houna bech njibou donnee mel base w n7otouhom fil colonet mta3 table chna3mlou lconnexion w kol houna -->
<?php
include("dataBaseConnexion.php");
$id=$_GET['id'];
$sql = "SELECT f.idF, f.idT, f.NomF, f.Description, f.Date_debut, f.Duree, f.date_dadhésion, t.Nom,t.téléphone, t.prènom 
        FROM formation f
        JOIN tuteur t ON f.idT = t.idT 
        WHERE f.idF = '$id'";

    

//$result hedhi chetraja3lek resultat lkol mta3 requete
$result= mysqli_query($conn,$sql);

if(!$result){
die("Invalid query !📛");
}
// 3melna boucle bech nraj3ou fih e donner
    while($row = mysqli_fetch_assoc($result)) {
     
    //afficher le donner
      echo"
  <tr>
      <th>$row[idF]</th>
       <td>$row[NomF]</td>
      <th>$row[Description]</th>
       <th>$row[Date_debut]</th>
       <td>$row[Duree]</td>
       <td>$row[date_dadhésion]</td>
      
      <td>$row[Nom]</td>
      <td>$row[prènom]</td>
      <td>$row[téléphone]</td>
      
    
       
      
      
    </tr>";
}
  ?>
  </tbody>
</table>





       <div class="inputfield">
        <a href="GererFormation.php" class="cancell"> cancel </a>
       </div>


    </div>
   
</div>




</body>
</html>