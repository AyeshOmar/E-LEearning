<!DOCTYPE html>
<html>
<head>

<!--hedhaya chya3ml integrité meben bootstrap html w css mte3ou 3ibara link l css  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!--hedha font family sigma -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Sigmar&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="grps apprenant.css">
	<link rel="stylesheet" type="text/css" href="page.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<div class="Header">
	
	<div class="flex">
		
   <div class="left-section">
  <div  class="Portrait">Name</div>
<div  class="ala-main">Of System </div>

</div>



<div   class="middle-section">

	<input class="search" type="text" name="Search" placeholder="Search">

	<button class="search-button">
		<img class="image-search" src="search.svg" >
	</button>
</div>


<div class="right-section">
	
<a href="index2.php"><button class="block3">Déconnexion</button> </a>


</div>





<div style="background-color: ;" class="side_bar">

<div class="logo-admin">
	<img src="6830335.png">
<div style="color: rgb(241, 196, 15); padding-top: 10px;margin-left: 20px;  margin-top: 0px;" class="gere_grpapp">
Admin

</div>
</div>







<div class="Acceuil">
	<img src="tuteur.png">
<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_grpapp">
Gérer Tuteur

</div>
</div>






<div class="Acceuil">
	<img src="1904186.png">
<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_grpapp">
Gérer Apprenant

</div>
</div>



<div class="Acceuil">
	<img src="1904186.png">
<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_grpapp">
Gérer Groupe d'apprenants

</div>
</div>




<div class="Acceuil">
	<img src="1904186.png">
<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_grpapp">
Gérer Formation

</div>
</div>





</div>
</div>


<!--  bodyyyyyyy page lpage lwestaniya -->

<div class="bodyTitle">
	
<p>Liste d'apprenants inscrits dans une formation : </p>

</div>



<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Email</th>
       <th>Date_D'inscription</th>
         <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>

<!--houna bech njibou donnee mel base w n7otouhom fil colonet mta3 table chna3mlou lconnexion w kol houna -->
<?php
include("dataBaseConnexion.php");

$sql="select idG,nom,prenom,email,date_inscri from apprenants inscrits";

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
      <th>$row[id]</th>
      <th>$row[nom]</th>
      <td>$row[prenom]</td>
      <td>$row[email]</td>
      <td>$row[date_inscri]</td>
      <td>

/*;;;;;;;;;;;;;;;;;;;;;;;;;;checkbox 
header('location:emploidutemps.php');
      </td>
    </tr>";
}
  ?>
  </tbody>
</table>

</div>



</body>
</html>