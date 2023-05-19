
<?php
include("dataBaseConnexion.php");
if(isset($_POST['submit'])) {
  // Récupération des données du formulaire
   $idGG = $_GET['id'];
  $idG=(int)$idGG;
  $lundi1 = $_POST['lundi1'];
  $lundi2 = $_POST['lundi2'];
  $lundi3 = $_POST['lundi3'];
  $lundi4 = $_POST['lundi4'];
  $mardi1 = $_POST['mardi1'];
  $mardi2 = $_POST['mardi2'];
  $mardi3 = $_POST['mardi3'];
  $mardi4 = $_POST['mardi4'];
  $mercredi1 = $_POST['mercredi1'];
  $mercredi2 = $_POST['mercredi2'];
  $mercredi3 = $_POST['mercredi3'];
  $mercredi4 = $_POST['mercredi4'];
  $jeudi1 = $_POST['jeudi1'];
  $jeudi2 = $_POST['jeudi2'];
  $jeudi3 = $_POST['jeudi3'];
  $jeudi4 = $_POST['jeudi4'];
  $vendredi1 = $_POST['vendredi1'];
  $vendredi2 = $_POST['vendredi2'];
  $vendredi3 = $_POST['vendredi3'];
  $vendredi4 = $_POST['vendredi4'];
  
  // Requête pour insérer les données dans la table "emploidutemps"
  $sql = "INSERT INTO `emploidutemps`(`idG`, `lundi1`, `mardi1`, `mercredi1`, `jeudi1`, `vendredi1`, 
            `lundi2`, `mardi2`, `mercredi2`, `jeudi2`, `vendredi2`, `lundi3`, `mardi3`, `mercredi3`, 
            `jeudi3`, `vendredi3`, `lundi4`, `mardi4`, `mercredi4`, `jeudi4`, `vendredi4`) 
          VALUES ('$idG', '$lundi1', '$lundi2', '$lundi3', '$lundi4', '$mardi1', '$mardi2', '$mardi3', '$mardi4', '$mercredi1', '$mercredi2', '$mercredi3', '$mercredi4', '$jeudi1', '$jeudi2', '$jeudi3', '$jeudi4', '$vendredi1', '$vendredi2', '$vendredi3', '$vendredi4')";

  $result=mysqli_query($conn,$sql);
 header("Location: GererGroupe.php");
  exit();
}

?>




<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire emploi du temps</title>
    <style>
     body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
      }
      .container {
        margin: 50px auto;
        width: 600px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
      }
      h1 {
        font-size: 24px;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333;
      }
      input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
        box-sizing: border-box;
        font-size: 16px;
        color: #333;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      table th,
      table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
      }
      table th {
        background-color: #333;
        color: #fff;
      }
      input[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }
      input[type="submit"]:hover {
        background-color: #555;
      }
      .cancel {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }
      .cancel:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Ajouter un emploi du temps</h1>
      <form action="" method="POST" id="form">
      

        <table>
          <thead>
            <tr>
              <th>Jour/Heure</th>
              <th>8h-10h</th>
              <th>10h-12h</th>
              <th>14h-16h</th>
              <th>16h-18h</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lundi</td>
              <td><input type="text" name="lundi1" id="lundi1"></td>
              <td><input type="text" name="lundi2" id="lundi2"></td>
              <td><input type="text" name="lundi3" id="lundi3"></td>
              <td><input type="text" name="lundi4" id="lundi4"></td>
            </tr>
            <tr>
              <td>Mardi</td>
              <td><input type="text" name="mardi1" id="mardi1"></td>
              <td><input type="text" name="mardi2" id="mardi2"></td>
              <td><input type="text" name="mardi3" id="mardi3"></td>
              <td><input type="text" name="mardi4" id="mardi4"></td>
            </tr>
            <tr>
              <td>Mercredi</td>
              <td><input type="text" name="mercredi1" id="mercredi1"></td>
              <td><input type="text" name="mercredi2" id="mercredi2"></td>
              <td><input type="text" name="mercredi3" id="mercredi3"></td>
              <td><input type="text" name="mercredi4" id="mercredi4"></td>
            </tr>
            <tr>
              <td>Jeudi</td>
              <td><input type="text" name="jeudi1" id="jeudi1"></td>
              <td><input type="text" name="jeudi2" id="jeudi2"></td>
              <td><input type="text" name="jeudi3" id="jeudi3"></td>
              <td><input type="text" name="jeudi4" id="jeudi4"></td>
            </tr>
            <tr>
              <td>Vendredi</td>
              <td><input type="text" name="vendredi1" id="vendredi1"></td>
              <td><input type="text" name="vendredi2" id="vendredi2"></td>
              <td><input type="text" name="vendredi3" id="vendredi3"></td>
              <td><input type="text" name="vendredi4" id="vendredi4"></td>
              </tr>
           </tbody>
              </table>
            <button  type="submit" name="submit" id="submit">Enregistrer</button>
  </form>
</div>
