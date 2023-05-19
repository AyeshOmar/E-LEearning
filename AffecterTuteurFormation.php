

<?php
include("dataBaseConnexion.php");
if(isset($_POST['submit'])){


$inputid=$_POST['idF'];
$idF=(int)$inputid;
$nom=$_POST['nom'];
$description=$_POST['Description'];
$date_debut=$_POST['date_debut'];
$duree=$_POST['duree'];



}



?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="AffecterTuteurFormation.css">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajouter Nouveau Groupe D'Apprenants</title>
</head>
<body>



<div class="wrapper">




<table class="table">
  <thead>
    <tr>
      <th>IDT</th>
      <th>NOM</th>
      <th>PRENOM</th>
     
         <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>

<!--houna bech njibou donnee mel base w n7otouhom fil colonet mta3 table chna3mlou lconnexion w kol houna -->
<?php
include("dataBaseConnexion.php");

$sql="select idT ,nom, prènom  from tuteur";

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
      <th>$row[idT]</th>
      <td>$row[nom]</td>
      <td>$row[prènom]</td>

        <td>

           <a class='btn btn-success' onclick='affecterTuteur($row[idT])'>Affecter</a>
            
        </td>
    </tr>";
}
?> 
  </tbody>
</table>




    <div class="title">
      Ajouter Formation
    </div>
    <form method="post">
    <div class="form">


<?php
if(isset($_GET['id'])){
    $inputidT=$_GET['id'];
}
else{
    $inputidT="";
}
?>

      <div class="inputfield">
          <label>ID Tuteur</label>
          <input type="text" id="idT" class="input" name="idT" value="">
       </div>  
       <div class="inputfield">
          <label>IDF</label>
          <input type="text" class="input" name="idF" value="<?php echo $inputid ?>">
       </div>  

       
        <div class="inputfield">
          <label>Nom Formation</label>
          <input type="text" class="input" name="nom" value="<?php echo $nom ?>">
       </div>  
       <div class="inputfield">
          <label>Description</label>
          <input type="text" class="input" name="Description" value="<?php echo $description ?>">
       </div>  


        <div class="inputfield">
          <label>date_debut</label>
          <input type="date" class="input" name="date_debut" value="<?php echo $date_debut ?>">
       </div> 

        <div class="inputfield">
          <label>duree</label>
          <input type="text" class="input" name="duree" value="<?php echo $duree ?>">
       </div> 
        
     
      <div class="inputfield">
        <input type="submit" value="Ajouter" name="envoyer" class="btn">
       </div>
<div class="inputfield">
        <a href="GererFormation.php" class="cancel"> cancel </a>
       </div>


    </div>
    </form>
</div>



<script>
  
function affecterTuteur(idT) {
  
document.getElementById('idT').value=idT;

}




</script>



</body>
</html>

<?php
include("dataBaseConnexion.php");
if(isset($_POST['envoyer'])){


$inputidT=$_POST['idT'];
$idT=(int)$inputidT;
$inputid=$_POST['idF'];
$idF=(int)$inputid;
$nom=$_POST['nom'];
$description=$_POST['Description'];
$date_debut=$_POST['date_debut'];
$dureee=$_POST['duree'];
$duree=(int)$dureee;

$sql="INSERT INTO `formation`(`idF`,`idT`,`NomF`, `Description`, `Date_debut`,`Duree`) VALUES ('$idF','$idT','$nom','$description','$date_debut','$duree')";


$result=mysqli_query($conn,$sql);
 header('location:GererFormation.php');
}



?>
