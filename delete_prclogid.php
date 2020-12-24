<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Esborra entrada al registre d'estudiar música</title>
</head>

<body>
    <form action="delete_prclogid.php" method="post">
        
        Enter log ID to be deleted:
        <input type="text" name="requestedId">
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<?php
require('db.php');

if (!isset($_POST['requestedId'])) {
$_POST['requestedId'] = " not set";
}

$requestedId = $_POST['requestedId'];
echo "Id requested is " . $requestedId . "<br>";

$query1 = "DELETE FROM prc_log WHERE id = $requestedId ";
$result = mysqli_query($con,$query1);

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