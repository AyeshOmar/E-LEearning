
<?php
include("dataBaseConnexion.php");
if(isset($_POST['submit'])){


$inputid=$_POST['idF'];
$idA=(int)$inputid;



}



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Choisir Formation</title>
    <link rel="stylesheet" type="text/css" href="AffecterTuteurFormation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
          crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
       <div class="title">
            Choisir Formation
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NomFormation</th>
                    <th>Description</th>
                    <th>Date_debut</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("dataBaseConnexion.php");
                $sql="select idF, NomF, Description, date_debut from formation";
                $result= mysqli_query($conn,$sql);

                if(!$result){
                    die("Invalid query !");
                }
                while($row = mysqli_fetch_assoc($result)) {
                    echo"
                    <tr>
                        <th>$row[NomF]</th>
                        <td>$row[Description]</td>
                        <td>$row[date_debut]</td>
                        <td>
                            <a class='btn btn-success' onclick='affecterTuteur($row[idF])'>Choisir</a>
                        </td>
                    </tr>";
                }
                ?> 
            </tbody>
        </table>
       
        <form method="post">
            <div class="form">
                <?php
                if(isset($_GET['id'])){
                    $inputidT=$_GET['id'];
                }else{
                    $inputidT="";
                }
                ?>
                <div class="inputfield">
                    <label>ID Formation</label>
                    <input type="text" id="idT" class="input" name="idF" value="" readonly>
                </div>  
                <div class="inputfield">
                    <label>ID</label>
                    <input type="text" class="input" name="idA" value="<?php echo $inputid ?>" readonly>
                </div>  
               

       
        
     
      <div class="inputfield">
        <input type="submit" value="Ajouter" name="envoyer" class="btn">
       </div>
<div class="inputfield">
        <a href="ApprenantEspace.php" class="cancel"> cancel </a>
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
    $inputidT=$_POST['idF'];
    $idF=(int)$inputidT;
    $inputid=$_POST['idA'];
    $idA=(int)$inputid;

    
    $sql="INSERT INTO `apprenantinscrit`(`idAinscrit`,`idF`) 
          VALUES ('$idA','$idF')";
          
    $result=mysqli_query($conn,$sql);
    header("location:ApprenantEspace.php");
    exit();
}
?>
