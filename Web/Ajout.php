<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db="pizzastage";
// Connexion à la base de données
$connexion = mysqli_connect($servername, $username, $password, $db);
// Vérifier la connexion à la base de données
if (!$connexion) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $colonne1 = $_POST['colonne1'];
    $colonne2 = $_POST['colonne2'];
    // Récupérez les autres valeurs de formulaire

    // Exécutez la requête d'ajout
    $query = "INSERT INTO votre_table (colonne1, colonne2) VALUES ('$colonne1', '$colonne2')";
    mysqli_query($connexion, $query);

    // Redirigez l'utilisateur vers la page d'affichage après l'ajout
    header("Location: Affichage.php");
}
$connexion->close();
?>
