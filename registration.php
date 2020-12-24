<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Alta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.5">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet"> 
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = $_POST['username'];
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $password = $_POST['password'];
 $password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into `users` (username, password)
VALUES ('$username', '".password_hash($password, PASSWORD_DEFAULT)."')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h1>Ja estàs registrat/da.</h1>
<br/>Ara ja pots <a href='login.php'>entrar</a></div>";
        }
    }else{
?>
<div class="form">
<h1 style="font-family: sans-serif">Donar-se d'alta</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Nom d'usuari/a" required />
<input type="password" name="password" placeholder="Contrasenya" required />
<input type="submit" name="submit" value="Registra't" />
</form> <br>
<p style="color: orange">Si pot ser, tria un nom sense espais o emoji!</p>
</div>
<?php } ?>
</body>
</html>