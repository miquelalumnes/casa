<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

<?php
require('../db.php');
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../login.php");
}

$videoseen = 1;
$session_username = $_SESSION['username'];
$query1 = "INSERT INTO videoSeenLog (username, prc_datetime, videoseen) VALUES ('$session_username', CURRENT_DATE,'$videoseen')";

$result1 = mysqli_query($con,$query1);
    
?>

<center>
        <h3>Gracies per veure el video!</h3><br>
        <h4><a href="videoplay.php">Torna a veure el video</a></h4><br>
        <h4><a href="../index.php">Torna al principi</a></h4>
</center>

</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.min.css">
