<?php
include("dataBaseConnexion.php");

$nomformation = "";
$description = "";
$date_debut = "";
$duree="";
if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:GererFormation.php");
        exit;
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM formation WHERE idF = $id";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location:GererFormation.php");
        exit;
    }
      $duree=$row['Duree'];
    $nomformation = $row['NomF'];
    $description = $row['Description'];
    $date_debut = $row['Date_debut'];
} else {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $dateDebut = $_POST['dateDebut'];
    $duree = $_POST['duree'];

  $sql="UPDATE `formation` SET `NomF`='$nom',`Description`='$description',`Date_debut`='$dateDebut',`Duree`='$duree' WHERE  `idF`=$id";
    $result = $conn->query($sql);

    header("location:GererFormation.php");
    exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="formulaireCreartionTuteur.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier Formation</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Modifier Formation
        </div>
        <form method="post">
            <div class="form">
                <div class="inputfield">
                    <label>Id</label>
                    <input type="hidden" class="input" name="id" value="<?php echo $id ?>">
                </div>
                <div class="inputfield">
                    <label>Nom Formation</label>
                    <input type="text" class="input" name="nom" value="<?php echo $nomformation ?>">
                </div>
                <div class="inputfield">
                    <label>Description</label>
                    <input type="text" class="input" name="description" value="<?php echo $description ?>">
                </div>
                <div class="inputfield">
                    <label>Date de début</label>
                    <input type="date" class="input" name="dateDebut" value="<?php echo $date_debut ?>">
                </div>
                <div class="inputfield">
                    <label>Duree </label>
                    <input type="text" class="input" name="duree" value="<?php echo $duree ?>">
                </div>
                <div class="inputfield">
                    <input type="submit" value="Submit" name="Submit" class="btn">
                </div>
                <div class="inputfield">
                    <a href="GererFormation.php" class="cancel">Annuler</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
