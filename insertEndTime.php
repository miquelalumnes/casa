<?php

//this should read the prc start time from the db, then substract it from the current time. The result will be the duration of the practice session in seconds.
include 'header.php';
$session_username = $_SESSION['username'];

//get prc_startTime from db
$query2a = "SELECT prc_startTime FROM prc_log WHERE username='$session_username' ORDER BY id desc LIMIT 1";

$prc_startTime = mysqli_query($con,$query2a);

//set prc_endTime to current time
$prc_endTime = time();
echo "prc_startTime is $prc_startTime and prc_endTime is $prc_endTime <br>";

$prc_duration = ($prc_endTime - $prc_startTime)/60;
echo "Has estudiat $prc_duration minuts";

$query2b = "INSERT INTO prc_log (username, prc_datetime,prc_duration) VALUES ('$session_username', CURRENT_DATE,$prc_duration)";
$result2b = mysqli_query($con,$query2b);

$con->close();
?>