<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>

        .rounded-container {
            border-radius:50%;
            padding:100px;
            background-color:rgb(9,45,116);
            color:white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);

        }
  
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>   

</head>
 
<body style="background-color:#f8f9fa; display: flex; justify-content: center; align-items: center; height: 100vh;"> 

<div class="rounded-container ">
        
<div class="text-center">
            <i class="fas fa-user fa-3x"></i>
            <h2>Connexion</h2><br>
        </div>               
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username=$_POST["Nom d'utilisateur"];

    $password= $_POST["password"];

    $password= sha1($password,false);

    echo $password;

// Verifier si l'usager est dans la BD,activer

    $servername = "localhost";

    $username = "root";

    $password = "root";

    $db="pizzastage";

   // Établir la connexion

   $connexion = new mysqli($servername, $username , $password, $db );

   // Vérifier la connexion

   if ($connexion->connect_error) {

       die("Échec de la connexion : " . $connexion->connect_error);

   }

   // Requête SQL pour vérifier l'authentification

   $requete = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'" ;

   $resultat = $connexion->query($requete);

   if ($resultat->num_rows > 0) {

       $row= $resultat->fetch_assoc();

       echo "Connexion réussie !";

       $_SESSION["connexion"]= true;

       // Vous pouvez rediriger l'utilisateur vers une page sécurisée ici

   } else {

       echo "Nom d'utilisateur ou mot de passe incorrect.";

   }

   // Fermer la connexion

   $connexion->close();

}
    if (isset($erreur_message)) {
        echo '<p style="color: red;">' . $erreur_message . '</p>';
    }
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nom_utilisateur">Nom d'utilisateur:</label>
        <input type="text" id="nom_utilisateur" name="nom_utilisateur" required><br><br>
        
        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
        <div class="text-center">
        <a href= "Web/Admin.php">   
        <button type="button" class="btn btn-light">Se Connecter</button>   
        </div>
        <body style="background-color:#f8f9fa;">
        </a>
    
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>