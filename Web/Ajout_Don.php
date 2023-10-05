<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<style>

      /* Style pour l'en-tête */
      header {
            background-color:rgb(9,45,116); /* Couleur de fond de l'en-tête */
            color: #fff; /* Couleur du texte */
            padding: 10px 0; /* Espacement interne */
            text-align: center; /* Alignement du contenu */
            height: 110px;
            height: 100px;
        
        }

        /* Style pour le logo */
        #logo {
            width: 150px; /* Largeur du logo */
            height:110px; /* Hauteur du logo */
            float:left;
           margin-bottom:20px;
           padding-top: -20px;
        }

.container{
    width: 100%;
    max-width: 1200px;
    margin:0 auto;
    overflow: hidden;

}

.image-left,
.image-right{
    width:500px; 
    box-sizing: border-box;
    float: left;
    padding: 10px;
   
}
.image-left img,
.image-right img {
    width: 100%; /* Pour s'assurer que l'image remplit la largeur de son conteneur */
    height: auto; /* Pour maintenir les proportions de l'image */
        }
    </style>

    <header>
    <img id="logo" src="../Image/logo.png" alt="">     
    </header>
</style>

<h1 style="text-align:center; margin-top: 4%; margin-bottom: 3%">Ajouter un évènement</h1>
<?php
    // define variables and set to empty values
    $idErr = $dateErr = $lieuErr = $nomErr = $departementErr = $versionErr = $vertErr = $jauneErr = $rougeErr = "";
    $id = $date = $lieu = $nom = $departement = $version = $vert = $jaune = $rouge = "";
    $erreur = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        if(empty($_POST["Date"])){
            $dateErr = "* Date absent";
            $erreur = true;
        } else {
            $date = test_input($_POST["Date"]);//
        }
        if(empty($_POST["Lieu"])){
            $lieuErr = "* Lieu absent";
            $erreur = true;
        } else {
            $lieu = test_input($_POST["Lieu"]);//
        }
        if(empty($_POST["NomEvenement"])){
            $nomErr = "* Nom absent";
            $erreur = true;
        } else {
            $nom = test_input($_POST["NomEvenement"]);//
        }
        if(empty($_POST["Departement"])){
            $departementErr = "* Departement absent";
            $erreur = true;
        } else {
            $departement = test_input($_POST["Departement"]);//
        }
        if(empty($_POST["Version"])){
            $versionErr = "* Version absent";
            $erreur = true;
        } else {
            $version = test_input($_POST["Version"]);//
        }
        if(empty($_POST["SatisfactionVert"])){
            $vertErr = "* Vert absent";
            $erreur = true;
        } else {
            $vert = test_input($_POST["SatisfactionVert"]);//
        }
        if(empty($_POST["SatisfactionJaune"])){
            $jauneErr = "* Jaune absent";
            $erreur = true;
        } else {
            $jaune = test_input($_POST["SatisfactionJaune"]);//
        }
        if(empty($_POST["SatisfactionRouge"])){
            $rougeErr = "* Rouge absent";
            $erreur = true;
        } else {
            $rouge = test_input($_POST["SatisfactionRouge"]);//
        }

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "pizzastage";

        //Connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        //Verify connection
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        //echo $id . ", " . $date . ", " . $lieu . ", " . $nom . ", " . $departement . ", " . $version . ", " . $vert . ", " . $jaune . ", " . $rouge . ", Ligne 87";
        $sql = "INSERT INTO events (Date, Lieu, NomEvenement, Departement, Version,  SatisfactionVert, Satisfactionjaune, SatisfactionRouge)
        VALUES ('$date', '$lieu', '$nom', '$departement', '$version', '$vert', '$jaune', '$rouge')";
        //echo $sql;

        if (mysqli_query($conn, $sql)){
            //echo "<br>" . "Succès";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    if($_SERVER["REQUEST_METHOD"] != "POST" || $erreur == true) {}
    ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Lieu</th>
                <th scope="col">Nom</th>
                <th scope="col">Departement</th>
            </tr>
        </thead>
        <tbody>
    <?php
    //Alt + Shift + F
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "pizzastage";
    //Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    //Check connection
    if($conn->connect_error){
        die("Connection failed: " . $con->connection_error);
    }
    //echo "Connection successfully";

    $sql = "SELECT * FROM events";

    $conn->query("SET NAMES utf8");
    //L'acion, la query est ici
    $result = $conn->query($sql);

    
    
    echo "<tr>" . "<th>" . 
    "<input type='text' name='Date' >" . "</th>" . "<th>" . 
    "<input type='text' name='Lieu' >" . "</th>" . "<th>" .
    "<input type='text' name='NomEvenement' >" . "</th>" . "<th>" .
    "<input type='text' name='Departement' >" . "</th>" . "</tr>" . "<tr>" . "</th>" .
    "<th scope='col'>" . "Version" . "</th>" .
    "<th scope='col'>" . "Positif" . "</th>" .
    "<th scope='col'>" . "Neutre" . "</th>" .
    "<th scope='col'>" . "Négatif" . "</th>" . "</tr>" . "<tr>" . "<th>" . 
    "<input type='text' name='Version' >" . "</th>" . "<th>" .
    "<input type='text' name='SatisfactionVert' >" . "</th>" . "<th>" .
    "<input type='text' name='SatisfactionJaune' >" . "</th>" . "<th>" .
    "<input type='text' name='SatisfactionRouge' >" . "</th>" . "</tr>";


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $conn->close();
    ?>
        
	<tbody>
	</table>
    <input style="margin-left: 10px" type="submit" value="Ajouter">
    <a style="margin-left: 10px; color: black; text-decoration-line: none; background-color: #F0F0F0; padding: 4px; padding-left: 19px; padding-right: 19px; border: solid #858585 1px; border-radius: 3.5px" href="Affichage.php">Retour</a>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>