<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Check Video Seen Log</title>
</head>

<body>
    
<h1>Video Seen Log</h1>
<h3><a href="Check_prclog.php">Check prc log</a></h3> 
<h3><a href="delete_prclogid.php">Delete prc log by Id</a></h3> <br>
</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

require('db.php');

$query = "SELECT * FROM `videoSeenLog`";
$result = mysqli_query($con,$query);

if ($result->num_rows > 0) {
    echo "<table border = 1><tr><th align='center'>Video Seen</th><th align='center'>Usuari/a</th><th align='center'>Dia</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td align='center'>".$row["videoseen"]."</td><td align='center'>".$row["username"]."<td align='center'>".$row["prc_datetime"]."</td></tr>";
    }
    echo "</table>";
}

?>