<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/w3.css">
    <title></title>
</head>

<body>
<h1>Puntuacions</h1>

</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<?php
require('db.php');

$query3 = "SELECT id, username, date, level, score FROM gameData ORDER BY score DESC";
$result = mysqli_query($con,$query3);

if ($result->num_rows > 0) {
    echo "<table border = 1><tr><th align='center'>Id</th><th align='center'>Usuari/a</th><th align='center'>Dia</th><th align='center'>Nivell</th><th align='center'>Punts</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td align='center'>".$row["id"]."</td><td align='center'>".$row["username"]."<td align='center'>".$row["date"]."</td><td align='center'>".$row["level"]."</td><td>".$row["score"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>