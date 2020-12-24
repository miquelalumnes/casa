<?php
include 'header.php';
$session_username = $_SESSION['username'];
$prc_startTime = $_SESSION['prc_startTime'];

// This line for testing purposes
//echo "Hora que has comencat a estudiar: $prc_startTime";

$query1 = "INSERT INTO prc_log (username, prc_datetime) VALUES ('$session_username', CURRENT_DATE)";

$result = mysqli_query($con,$query1);
header('Location:practice.html');
$con->close();
?>