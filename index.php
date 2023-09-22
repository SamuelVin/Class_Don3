<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .rounded-container {
            border-radius:50%;
            padding: 100px;
            background-color:lightblue;;
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
            <h2>Connexion</h2> <br>
        </div>               
<?php
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
        <button type="button" class="btn btn-dark">Se Connecter</button>   
        </div>
      
     <a href= "Web/Admin.php">
        aaaaaaaaaaaaa
     </a>

        




    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>