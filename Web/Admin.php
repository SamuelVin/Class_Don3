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
$db="pizzastage";


// Connexion à la base de données
$connexion = mysqli_connect($servername, $username, $password, $db);

// Vérifier la connexion à la base de données
if (!$connexion) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Récupérer les valeurs du formulaire
    $nom_utilisateur = $_POST["nom_utilisateur"];
    $mot_de_passe = $_POST["mot_de_passe"];

    $requete = "SELECT id, nom_utilisateur, mot_de_passe FROM utilisateurs WHERE nom_utilisateur = ?";
    
    if ($stmt = mysqli_prepare($connexion, $requete)) 
// Liaison des paramètres
        mysqli_stmt_bind_param($stmt, "s", $nom_utilisateur);
// Exécution de la requête
        mysqli_stmt_execute($stmt);

// Récupération des résultats
        mysqli_stmt_bind_result($stmt, $id, $nom_utilisateur_db, $mot_de_passe_db);

        if (mysqli_stmt_fetch($stmt)) {
// Vérifier si le mot de passe est correct
            if (password_verify($mot_de_passe, $mot_de_passe_db)) {


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

                session_start();
                $_SESSION["utilisateur_id"] = $id;
                header("Location: Admin.php"); // Rediriger vers la page d'accueil
            } else {

                $erreur_message = "Nom d'utilisateur incorrect.";
            }

            // Fermer le statement
            mysqli_stmt_close($stmt);
        } else {
            die("Erreur de requête: " . mysqli_error($connexion));
        }
        

        // Fermer la connexion à la base de données

        mysqli_close($connexion);
    }
}
}

?>
    <style>
        /* Style pour l'en-tête */
        header {
            background-color: #333; /* Couleur de fond de l'en-tête */
            color: #fff; /* Couleur du texte */
            padding: 10px 0; /* Espacement interne */
            text-align: center; /* Alignement du contenu */
        }

        /* Style pour le logo */
        #logo {
            width: 100px; /* Largeur du logo */
            height: 100px; /* Hauteur du logo */
        }

        /* Style pour les boutons */
        .bouton {
            background-color: #007bff; /* Couleur de fond du bouton */
            color: #fff; /* Couleur du texte du bouton */
            border: none; /* Suppression de la bordure */
            padding: 10px 20px; /* Espacement interne */
            margin: 10px; /* Marge extérieure */
            cursor: pointer; /* Curseur de la souris */
        }

        /* Style pour le bouton de recherche */
        #bouton-recherche {
            background-color: #28a745; /* Couleur de fond du bouton de recherche */
        }
    </style>

    <header>
        <img id="logo" src="chemin/vers/votre/logo.png" alt="Logo de votre site">
        <button class="bouton">Utilisateur</button>
        <button id="bouton-recherche" class="bouton">Recherche</button>
    </header>

    <style>
        /* Styles pour le pied de page */
        footer {
            background-color: #333; /* Couleur de fond du pied de page */
            color: #fff; /* Couleur du texte du pied de page */
            padding: 20px 0; /* Espacement interne */
            text-align: center; /* Alignement du contenu */
        }

        /* Style pour les liens du pied de page */
        footer a {
            color: #fff; /* Couleur des liens */
            text-decoration: none; /* Suppression du soulignement des liens */
            margin: 0 10px; /* Marge extérieure pour les liens */
        }
    </style>

    <header>
        <!-- Votre en-tête ici -->
    </header>
    
    <!-- Le reste de votre contenu web ici -->
<div class="container">
        <h1>Bienvenue dans la Page d'Administration</h1>

        <!-- Liens vers les pages d'affichage, de modification, d'ajout et de suppression -->
        <ul>
            <li><a href="Affichage.php">Afficher les données</a></li>
            <li><a href="Modification.php">Modifier les données</a></li>
            <li><a href="Ajout.php">Ajouter des données</a></li>
            <li><a href="suppression.php">Supprimer des données</a></li>
        </ul>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>