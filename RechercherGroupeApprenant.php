<!DOCTYPE html>
<html>
<head>

<!--hedhaya chya3ml integrité meben bootstrap html w css mte3ou 3ibara link l css  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!--hedha font family sigma -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Sigmar&display=swap" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="welcome.css">
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


<form method="POST" action="RechercherGroupeApprenant.php">

<div  class="middle-section">
  <input  class="search" type="search" name="search" placeholder="Search un Groupe">
 
  <button type="submit" value="submit" name="submit" class="search-button">
   <img class="image-search" src="utilisateur.png" >
  </button>
</div>
</form>


<div class="right-section">
	
<a href="index2.php"><button class="block3">Déconnexion</button> </a>


</div>





<div style="background-color: ;" class="side_bar">

<div class="logo-admin">
	<img src="6830335.png">
<div style="color: rgb(241, 196, 15); padding-top: 5px;margin-left: 20px;  margin-top: 0px;" class="gere_Admin">
Admin

</div>
</div>





<div class="Acceil" onclick="location.href='welcome.php';" style="cursor:pointer;">
<img src="25694.png" style="width: 35px; height: 35px;">
	<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_tuteur">
		Home
	</div>
</div>






<div class="Acceil" onclick="location.href='GererTuteur.php';" style="cursor:pointer;">
	<img src="aaaaaaaaaaa.png">
	<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_tuteur">
		Compte Tuteur
	</div>
</div>




<div class="Acceil" onclick="location.href='GererApprenant.php';" style="cursor:pointer;">
	<img src="1904186.png">
<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_tuteur">
Compte Apprenant

</div>
</div>






<div class="Acceil" onclick="location.href='GererGroupe.php';" style="cursor:pointer;">
	<img src="32441.png">
	<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_tuteur">
	Gerer Groupe
	</div>
</div>



<div class="Acceil" onclick="location.href='GererFormation.php';" style="cursor:pointer;">
	<img src="5257128.png">
<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_tuteur">
Gerer Formation

</div>
</div>








</div>
</div>


<!--  bodyyyyyyy page lpage lwestaniya -->







 
<div class="bodyTitle">
  
<p>Liste de Groupes d'apprenants : </p>

</div>


<div class="bodyPage">
	
	<div>

<a class='btnAjoute' href='formulaireAjoutergrpapp.php' ><img src="1200px-Add_user_icon_(blue).svg.png" width="35px" >Ajouter nouveau groupe </a>



</div>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Niveau</th>
      <th>Email</th>
       <th>DATE_D'ADHESION</th>
         <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>

<!--houna bech njibou donnee mel base w n7otouhom fil colonet mta3 table chna3mlou lconnexion w kol houna -->
<?php
include("dataBaseConnexion.php");
$SearchId=$_POST['search'];
$inputID=(int)$SearchId;

$sql="select idG,nomG,niveauG,emailG,date_dadhésion from groupeapprenant where idG=$inputID";

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
      <th>$row[idG]</th>
      <th>$row[nomG]</th>
      <td>$row[niveauG]</td>
      <td>$row[emailG]</td>
      <td>$row[date_dadhésion]</td>
      <td>

<a class='btn btn-success' href='formulaireModifiergrpapprenant.php?idG=$row[idG]'>Modifier</a>
<a class='btn btn-danger' href='formulairesupprimergrpapp.php?id=$row[idG]'>Supprimer</a>

      </td>
    </tr>";
}
  ?>
  </tbody>
</table>

</div>





</body>
</html>