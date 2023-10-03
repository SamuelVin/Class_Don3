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

    <h1 style="text-align:center; margin-top: 4%; margin-bottom: 3%">Comment était votre expérience?</h1>
    <div class="container d-flex" style="margin-top: 1%; justify-content: center">
        <a href="../Web/Ajout_Don.php" style="width: 100%; height: 50px; text-align: center; border: solid 2px grey; background-color: #f2f2f2;  border-radius: 100px; padding-left: 50%; ; padding-right: 50%; color: black; text-decoration-line: none; font-size: 30px">Ajouter</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Version</th>
                <th scope="col">Date</th>
                <th scope="col">Zoom</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
    <?php
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

    if ($result->num_rows > 0) {
      	// output data of each row
      	while($row = $result->fetch_assoc()) {
        	//Faire un bel affichage de notre data!
        	//echo "<br>" . "id: " . $row["id"]. "<br>" . " - Race: " . $row["race"].  "<br>" . " - Couleur: " . $row["couleur"].  "<br>" . " - Age: " . $row["age"].  "<br>" . " - Image: " . '<img src="'.$row["image"].'">' .  "<br>" ;
        	echo "<tr>" . "<th scope='row'>" . $row["NomEvenement"] . "</th>" . "<th>" . $row["Version"] . "</th>" . "<th>" . $row["Date"] . "</th>" . "<th>" .
            "<a href='Zoom_Don.php?id=" . $row["Id"] . "'>" . "<img style='max-height: 60px' src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magnifying_glass_icon.svg/1024px-Magnifying_glass_icon.svg.png'" . "</th>" . "<th>" .
            "<a href='Modification_Don.php?id=" . $row["Id"] . "'>" . "<img style='max-height: 60px' src='https://th.bing.com/th/id/R.f71b0b45feaf4924d063181778d4680c?rik=Z9j37Y2xiV9qvg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_388620.png&ehk=HHAXuQ3ZoeLe8q8kaSNqZ5uo%2fs8TBLUetN1G7CtXqxQ%3d&risl=&pid=ImgRaw&r=0'" . "</a>"  . "</th>" . "<th>" .
            "<a href='Suppresion.php?id=" . $row["Id"] . "'>" . "<img style='max-height: 60px' src='https://th.bing.com/th/id/OIP.SSvWW9H9PwEgeTXKfxZoCgHaHZ?w=206&h=206&c=7&r=0&o=5&pid=1.7'"
            . "</th>" . "</tr>";
		}
    } else {
      echo "0 results";
    }

    $conn->close();
    ?>

    </tbody>
	</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>