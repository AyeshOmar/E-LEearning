<?php
include("dataBaseConnexion.php");

if(isset($_POST['submit'])){




    $idG = (int)$_POST['id'];
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $niveau = mysqli_real_escape_string($conn, $_POST['niveau']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $check_box_list = isset($_POST['check_box_list']) ? $_POST['check_box_list'] : [];
    
    //Insertion dans la table groupeapprenant
    $sql="INSERT INTO `groupeapprenant`(`idG`,`nomG`, `niveauG`, `emailG`) VALUES ('$idG','$nom','$niveau','$email')";
    $result=mysqli_query($conn,$sql);
    
    if(!$result){
        die("Invalid query !");
    }

    //Insertion dans la table apprenantgroupe
    if(!empty($check_box_list)) {
        foreach($check_box_list as $idAInscrit) {
            $sql = "INSERT INTO `apprenantgroupe`(`idG`,`idAInscrit`) VALUES ('$idG', '$idAInscrit')";
            $result=mysqli_query($conn,$sql);
            if(!$result){
                die("Invalid query !");
            }
        }
    }
    
   header("location:emploidutemp.php?id=$idG");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="formulaireAjoutergrpapp.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter Nouveau Groupe D'Apprenants</title>
</head>
<body>

<div class="wrapper">
    <div class="title">
     Liste Apprenant Inscrit
    </div>

    <form method="post">
    <table class="table">
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>NOMFormation</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT apprenant.nom, apprenant.prènom, formation.NomF,apprenantinscrit.idAInscrit
FROM apprenantinscrit 
JOIN apprenant ON apprenant.id = apprenantinscrit.idAInscrit
JOIN formation ON apprenantinscrit.idF = formation.idF
";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Invalid query !");
        }
        while($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <th>$row[nom]</th>
                <td>$row[prènom]</td>
                <td>$row[NomF]</td>
                <td>
                    <input type='checkbox' name='check_box_list[]' value='$row[idAInscrit]'>
                </td>
            </tr>";
        }
        ?> 
    </tbody>
    </table>

        <div class="title">
      Ajouter Groupe
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
          <label>Niveau</label>
          <input type="text" class="input" name="niveau">
       </div>  


        <div class="inputfield">
          <label>Email</label>
          <input type="password" class="input" name="email">
       </div> 
        
     
      <div class="inputfield">
        <input type="submit" value="Ajouter" name="submit" class="btn">
       </div>
<div class="inputfield">
        <a href="GererGroupe.php" class="cancel"> cancel </a>
       </div>


    </div>
    </form>



</div>






</body>
</html>