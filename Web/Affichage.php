
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

$query = "SELECT * FROM votre_table";
$result = mysqli_query($connexion, $query);

// Afficher les données dans un tableau

echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['colonne1'] . "</td>";
    echo "<td>" . $row['colonne2'] . "</td>";
    
// Ajoutez autant de colonnes que nécessaire
    echo "<td><a href='Modification.php?id=" . $row['id'] . "'>Modifier</a></td>";
    echo "<td><a href='Suppression.php?id=" . $row['id'] . "'>Supprimer</a></td>";
    echo "</tr>";
}
echo "</table>";

$connexion->close();
?>
