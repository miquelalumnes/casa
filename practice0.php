<?php
session_start();
$_SESSION['prc_startTime'] = time();
header('Location:practice.php');
?>