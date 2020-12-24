<?php

require('db.php');
include 'auth.php';
$_SESSION['prc_endTime']=time();
$session_username = $_SESSION['username'];

$prc_startTime = $_SESSION['prc_startTime'];

$prc_endTime = $_SESSION['prc_endTime'];

$prc_duration = floor(($prc_endTime - $prc_startTime)/60);

// This line for testing purposes
//echo "Has estudiat $prc_duration minuts, comencant a les $prc_startTime i acabant a les $prc_endTime<br>";



if (!isset($_POST['prc_comment'])) {
$_POST['prc_comment'] = "";
}

$prc_comment =  $_POST['prc_comment'];
echo "Your comment $prc_comment";

//insert all new data to prc_log
$query1 = "INSERT INTO prc_log (username, prc_datetime,prc_duration,prc_comments) VALUES ('$session_username', CURRENT_DATE,'$prc_duration','$prc_comment')";

$result1 = mysqli_query($con,$query1);

header('Location: process2.php');
?>