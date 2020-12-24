<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Regsitre de temps d'estudiar música</title>
</head>

<body>
<h1>Registre de temps d'estudiar música</h1>
<h3><a href="delete_prclogid.php">Esborrar per ID</a></h3> <br>
<h3><a href="Check_userlog.php">Llista d'usuaris</a></h3> <br>
</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<?php
require('db.php');

$query3 = "SELECT id, username, prc_datetime, prc_duration, prc_comments FROM prc_log ORDER BY id DESC";
$result = mysqli_query($con,$query3);

if ($result->num_rows > 0) {
    echo "<table border = 1><tr><th align='center'>Id</th><th align='center'>Usuari/a</th><th align='center'>Dia</th><th align='center'>Temps de música</th><th align='center'>Comentaris</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td align='center'>".$row["id"]."</td><td align='center'>".$row["username"]."<td align='center'>".$row["prc_datetime"]."</td><td align='center'>".$row["prc_duration"]."</td><td>".$row["prc_comments"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
