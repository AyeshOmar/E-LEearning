<?php
include("dataBaseConnexion.php");

if (isset($_GET['id'])) {
    $idG = $_GET['id'];

    // Supprimer les enregistrements de la table emploidutemps liés au groupe
    $sql0 = "DELETE FROM emploidutemps WHERE idG = $idG";
    $result0 = mysqli_query($conn, $sql0);

    // Supprimer les enregistrements de la table apprenantgroupe liés au groupe
    $sql1 = "DELETE FROM apprenantgroupe WHERE idG = $idG";
    $result1 = mysqli_query($conn, $sql1);

    // Supprimer l'enregistrement de la table groupeapprenant correspondant au groupe
    $sql2 = "DELETE FROM groupeapprenant WHERE idG = $idG";
    $result2 = mysqli_query($conn, $sql2);

    if ($result0 && $result1 && $result2) {
        header('location: GererGroupe.php');
        exit;
    } else {
        echo "Erreur lors de la suppression du groupe";
    }
}
?>
