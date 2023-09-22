<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
 
<?php

// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "root";
<<<<<<< HEAD
$db="smiley face";
=======

$db="pizzastage";


>>>>>>> b4857151efc148b0fca100ed617eed07ca735e7f
// Connexion à la base de données
$connexion = mysqli_connect($servername, $username, $password, $db);

// Vérifier la connexion à la base de données
if (!$connexion) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

<<<<<<< HEAD
// Récupérer les valeurs du formulaire
=======
    // Récupérer les valeurs du formulaire
>>>>>>> b4857151efc148b0fca100ed617eed07ca735e7f
    $nom_utilisateur = $_POST["nom_utilisateur"];
    $mot_de_passe = $_POST["mot_de_passe"];

    $requete = "SELECT id, nom_utilisateur, mot_de_passe FROM utilisateurs WHERE nom_utilisateur = ?";
    
    if ($stmt = mysqli_prepare($connexion, $requete)) {

<<<<<<< HEAD
// Liaison des paramètres
        mysqli_stmt_bind_param($stmt, "s", $nom_utilisateur);
// Exécution de la requête
        mysqli_stmt_execute($stmt);

// Récupération des résultats
        mysqli_stmt_bind_result($stmt, $id, $nom_utilisateur_db, $mot_de_passe_db);

        if (mysqli_stmt_fetch($stmt)) {
// Vérifier si le mot de passe est correct
            if (password_verify($mot_de_passe, $mot_de_passe_db)) {
// Authentification réussie
=======
        // Liaison des paramètres
        mysqli_stmt_bind_param($stmt, "s", $nom_utilisateur);

       // Exécution de la requête
        mysqli_stmt_execute($stmt);

        // Récupération des résultats
        mysqli_stmt_bind_result($stmt, $id, $nom_utilisateur_db, $mot_de_passe_db);

        if (mysqli_stmt_fetch($stmt)) {
            // Vérifier si le mot de passe est correct
            if (password_verify($mot_de_passe, $mot_de_passe_db)) {
                // Authentification réussie
>>>>>>> b4857151efc148b0fca100ed617eed07ca735e7f
                session_start();
                $_SESSION["utilisateur_id"] = $id;
                header("Location: Admin.php"); // Rediriger vers la page d'accueil
            } else {

                $erreur_message = "Nom d'utilisateur incorrect.";
            }
    
<<<<<<< HEAD
// Fermer le statement
=======
            // Fermer le statement
>>>>>>> b4857151efc148b0fca100ed617eed07ca735e7f
            mysqli_stmt_close($stmt);
        } else {
            die("Erreur de requête: " . mysqli_error($connexion));
        }
        
<<<<<<< HEAD
// Fermer la connexion à la base de données
=======
        // Fermer la connexion à la base de données
>>>>>>> b4857151efc148b0fca100ed617eed07ca735e7f
        mysqli_close($connexion);
    }
}
    ?>

<<<<<<< HEAD
<body style="background-color:#f8f9fa;">

    <div class="container">
        <h1>Bienvenue dans la Page d'Administration</h1>

        <!-- Liens vers les pages d'affichage, de modification, d'ajout et de suppression -->
        <ul>
            <li><a href="affichage.php">Afficher les données</a></li>
            <li><a href="modification.php">Modifier les données</a></li>
            <li><a href="ajout.php">Ajouter des données</a></li>
            <li><a href="suppression.php">Supprimer des données</a></li>
        </ul>
    </div>
 
=======
>>>>>>> b4857151efc148b0fca100ed617eed07ca735e7f
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>