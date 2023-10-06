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


<h1 style="text-align:center; margin-top: 4%; margin-bottom: 3%">Modification d'utilisateur</h1>
<?php
    // define variables and set to empty values
    $idErr = $UsernameErr = "";
    $id = $usernameA = "";
    $erreur = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        if(empty($_POST["Id"])){
            $idErr = "* Id absent";
            $erreur = true;
        } else {
            $id = test_input($_POST["Id"]);//
        }
        if(empty($_POST["UsernameA"])){
            $UsernameErr = "* Date absent";
            $erreur = true;
        } else {
            $usernameA = test_input($_POST["UsernameA"]);//
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
        $sql = "UPDATE users SET Username='$usernameA'  WHERE id='$id'";
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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?id=".$_GET["id"]);?>">
<table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
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

    $sql = "SELECT * FROM users";

    $conn->query("SET NAMES utf8");
    //L'acion, la query est ici
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      	// output data of each row
      	while($row = $result->fetch_assoc()) {
        	//Faire un bel affichage de notre data!
        	if($row["Id"]==$_GET["id"]){
            echo "<tr>" . "<th scope='row'>" . 
            $row["Id"] . "</th>" . "<th>" . 
            "<input type='text' name='UsernameA' value='$row[Username]'>" . "</th>" . 
            "</tr>" . "<tr>" . 
            "<th>" . "<input type='hidden' name='Id' value='" . $_GET["id"] ."'>" . "</th>" . "</tr>";
            }
        }
    } else {
      echo "0 results";
    }

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
    <input style="margin-left: 10px" type="submit" value="Modifier">
    <a style="margin-left: 10px; color: black; text-decoration-line: none; background-color: #F0F0F0; padding: 4px; padding-left: 19px; padding-right: 19px; border: solid #858585 1px; border-radius: 3.5px" href="Affichage_user.php">Retour</a>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>













