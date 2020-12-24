<?php
include 'header.php';

//set all variables
$session_username = $_SESSION['username'];

if (!isset($_POST['prc_comment'])) {
$_POST['prc_comment'] = "";
}



?>
<head>
<style type="text/css">
    form textarea,
    form input {
        width: 200px;
        padding: 0px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;

    }

    form div textarea {
        vertical-align: text-top;
    }

    form div {
        text-align: left;
        padding: 5px;
    }

    form {
        width: 80%;
    }

</style>
</head>

<body>
   <h3>Felicitats al</h3><h1>Nom</h1>
    <h5>que ha estudiat molt aquesta setmana! </h5><p class="text-dark"></p>
    <div>
        <form action="submit_comments.php" method="post">
            <div>
                <textarea name="prc_comment" cols="25" rows="5" placeholder="Què has tocat? Què t'ha semblat? Tens dubtes?"></textarea></div>
            <div><input type="submit" name="submit" value="Envia" style="background-color:lightgreen; border-radius: 20px"/></div>
        </form>
    </div>
    <p class="text-dark"><i><font size=4>Potser vols <a href="index.php">tornar al principi?</a></font></i></p>
</body>  
        <?php
//select data to display
$query3 = "SELECT username, prc_datetime, prc_duration, prc_comments FROM prc_log WHERE username='$session_username' ORDER BY id DESC";
$result = mysqli_query($con,$query3);

if ($result->num_rows > 0) {
    echo "<table border = 1><tr><th align='center'>Usuari/a</th><th align='center'>Dia</th><th align='center'>Temps de música</th><th align='center'>Comentaris</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td align='center'>".$row["username"]."</td><td align='center'>".$row["prc_datetime"]."</td><td align='center'>".$row["prc_duration"]."</td><td>".$row["prc_comments"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$con->close();
?>
