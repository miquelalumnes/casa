<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet"> 
</head>
<body style="background-image: url('login_score1.jpg'); background-position: center;
  background-repeat: repeat;
  background-size: cover;
  height: 100%;" >
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_POST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_POST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".password_hash($password, PASSWORD_DEFAULT)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows>0){
     $_SESSION['username'] = $username;
    // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<div class="form col-12" style="padding: 6em 3em 6em 4em;" >
<h2>Hora de fer música!</h2>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Entra" />
</form>
</div>
<?php } ?>



</body>
</html>