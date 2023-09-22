<?php
// Connectez-vous à votre base de données ici
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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Exécutez la requête de suppression
    $query = "DELETE FROM votre_table WHERE id = $id";
    mysqli_query($connexion, $query);

    // Redirigez l'utilisateur vers la page d'affichage après la suppression
    header("Location: Affichage.php");
}

$connexion->close();

?>
