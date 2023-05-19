

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="formulaireAjoutergrpapp.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inscrire Apprenant</title>
</head>
<body>



<div class="wrapper">
    <div class="title">
      Inscrire
    </div>
    <form method="post" action="ChoisieFormation.php">
    <div class="form">
       <div class="inputfield">
          <label>ID</label>
          <input type="text" class="input" name="idF">
       </div>  

       

        
     
      <div class="inputfield">
        <input type="submit" value="Ajouter" name="submit" class="btn">
       </div>
<div class="inputfield">
        <a href="ApprenantEspace.php" class="cancel"> cancel </a>
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
 
}
?>