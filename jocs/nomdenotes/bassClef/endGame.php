

<?php

require('db.php');
include 'auth.php';


    echo 'username on top is ' . $_SESSION['username'] . '<br>';
    echo 'level on top is ' . $_SESSION["level"] . $level . '<br>';
    echo 'score on top is ' . $_POST["score"] . '<br>';
    
    $_SESSION['score'] = $_POST["score"];
    
if ( isset( $_SESSION['username'] ) && isset( $_SESSION['level'] ) && isset( $_SESSION['score'] ) ) {
    $username = $_SESSION['username'];
    $level = $_SESSION['level'];
    $score = $_SESSION['score'];
    $date = date("Y-m-d H:i:s");

    //insert all new data to gameData
    $query1 = "INSERT INTO gameData (username, date, level, score) VALUES ('$username', '$date','$level','$score')";

    $result1 = mysqli_query( $con, $query1 );
    $con->close();

} else {
    echo 'yo somthins wrong at endGame.php <br>';
    echo 'username is ' . $_SESSION['username'];
    echo ' - level is ' . $_SESSION['level'];
    echo ' - score is ' . $_SESSION['score'];
}
?>
