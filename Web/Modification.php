
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $colonne1 = $_POST['colonne1'];
    $colonne2 = $_POST['colonne2'];
// Récupérez les autres valeurs de formulaire

// Exécutez la requête de mise à jour
    $query = "UPDATE votre_table SET colonne1 = '$colonne1', colonne2 = '$colonne2' WHERE id = $id";
    mysqli_query($connexion, $query);

// Redirigez l'utilisateur vers la page d'affichage après la modification
    header("Location: Affichage.php");
}
$connexion->close();
?>












?>
