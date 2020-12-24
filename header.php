<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Kaushan+Script&display=swap" rel="stylesheet"> 
</head>

<?php
require('db.php');
include 'auth.php';

if (!isset($_SESSION['prc_startTime'])) {
$_SESSION['prc_startTime'] = 0;
$_SESSION['prc_endTime'] = 0;
    }
?>

<body>
   <style>
     @media screen and (max-width: 3767px) {
        .header-links {
            padding-right: 10px;
            font-size: 90%;
        }
         .header-link {
             padding-right: 10px;
         }
       }

    </style>
    
<div class="container-fluid header-links" style="margin:auto">
    <div class="row justify-content-center">
        <div class="col-xs-4 header-link">Hello <?php echo $_SESSION["username"]?>!   </div>
        <div class="col-xs-4 header-link"><a href="process2.php"><b>Ja estic!   </b></a></div>
        <div class="col-xs-4 header-link"><a href="logout.php"><b>Surt</b></a></div>
    </div>

</div>


</body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<hr>
