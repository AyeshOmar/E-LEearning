

<!DOCTYPE html>
<html>
<head>

<!--hedhaya chya3ml integrité meben bootstrap html w css mte3ou 3ibara link l css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!--hedha font family sigma -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Sigmar&display=swap" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="TuteurEspace.css">
  <link rel="stylesheet" type="text/css" href="page.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>





<style type="text/css">
  

.btnBack{
  margin-top: 20px;
  margin-left: 20px;

}

.block3{
    background-color: #dc3545;
    border: none;
}

a{
  margin-top: 10px;

}

</style>

  
</head>
<body>

 



  <div class="btnBack">
<a href="TuteurEspace.php"><button class="block3">Back</button> </a>
</div>



<div class="bodyTitle">
  
<p>Liste Formations : </p>





<form method="POST" action="RechercherFormationTuteur.php">

<div   class="middle-section">
  <input  class="search" type="search" name="search" placeholder="Search un Groupe">
 
  <button type="submit" value="submit" name="submit" class="search-button">
   <img class="image-search" src="utilisateur.png" >
  </button>
</div>
</form>


</div>


<div class="bodyPage">
	<table class="table">
  <thead>
    <tr>
      <th>IDF</th>
     <th>NOMFORMATION</th>
      <th>DESCRIPTION</th>
       <th>DATE_DEBUT</th>
       <th>Duree</th>
       <th>date_dadhésion</th>
       <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>

<!--houna bech njibou donnee mel base w n7otouhom fil colonet mta3 table chna3mlou lconnexion w kol houna -->
<?php
include("dataBaseConnexion.php");
$SearchId=$_POST['search'];
$inputID=(int)$SearchId;
$sql="select idF ,NomF, Description,Date_debut,Duree,date_dadhésion from formation  where idF=$inputID";

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
      <td>$row[Description]</td>
      <td>$row[Date_debut]</td>
      <th>$row[Duree]</th>
      <td>$row[date_dadhésion]</td>
      

  
     
       
        <td>
           
            <a class='btn btn-info' href=''>Détail</a>
        </td>
    </tr>";
}
?> 
  </tbody>
</table>

</div>


</body>
</html>