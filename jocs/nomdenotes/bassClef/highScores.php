<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/w3.css">
    <title>High Scores</title>
</head>

<style>
    h1 {
        font-size: 3vh;
    }

    td {
        font-size: 4vh;
    }

    th {
        font-size: 4vh;
    }

    #title {
        font-size: 5vh;
        padding: 2vh;
    }

    #again {
        padding: 2em;
    }

</style>

<body>
    <div class="w3-container w3-center w3-animate-top">
        <div id="title">High Scores</div>
        
<?php
require('db.php');
include 'auth.php';

//select data to display
$query3 = "SELECT username, level, score FROM gameData ORDER BY score DESC LIMIT 5";
$result = mysqli_query($con,$query3);

if ($result->num_rows > 0) {
    echo "<table class='w3-table'><tr class='w3-border'><th class='w3-center'>Usuari/a</th><th class='w3-center'>Nivell</th><th class='w3-center'>Punts</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr class='w3-border'><td class='w3-center'>".$row["username"]."</td><td class='w3-center'>".$row["level"]."</td><td class='w3-center'>".$row["score"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "De moment no hi ha res aquí!";
}

$con->close();
    
    ?>

        <div id="again">
            <a href="../levelSelect.php" class="w3-btn w3-green w3-large w3-center" id="clearScore">Torna-hi!</a>

        </div>
        <div id="exit">
            <a href="../logout.php" class="w3-btn w3-grey w3-small w3-center">Tanca sessió</a></div>
    </div>

</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
