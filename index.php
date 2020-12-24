<?php
include("header.php");
?>
<!DOCTYPE html>
<html style="height:100%">

<head>
    <meta charset="utf-8">
    <title>A practicar música!</title>
</head>

<body>
    <div class="container d-flex justify-content-center" style="margin:auto">

        <div class="row">
            <div class="container-fluid" style="margin:auto">
                <a href="practice0.php" class="btn btn-default btn-lg btn-block btn-info col-lg-12 col-md-12 col-sm-12 col-xs-12" role="button" style="font-size:2em">Fes música!</a>
                <a href="muth.html" class="btn btn-lg btn-block btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" role="button" style="font-size:2em">Llenguatge Musical</a>
                <a href="jocs/nomdenotes/levelSelect.php" class="btn btn-lg btn-block btn-warning col-lg-12 col-md-12 col-sm-12 col-xs-12" role="button" style="font-size:2em">Jocs</a>
                <a href="videos/videoplay.php" class="btn btn-lg btn-block btn-secondary col-lg-12 col-md-12 col-sm-12 col-xs-12" role="button" style="font-size:2em">Concert petit del Professor</a>

                <?php
$username = $_SESSION['username'];
$username = stripslashes($username);
$username = strtolower($username);

// the following code will check if a student practiced the previous day, and if so, add 1 to the daily practice streak

date_default_timezone_set(''); // set timezone
$jsondata = file_get_contents("lastprclist.json");
$json = json_decode($jsondata, true);
$arrayLength = count($json);
for ($i = 0; $i < $arrayLength; $i++) {
    if ($json[$i]['username'] == $username) {
        $day0 = $json[$i]['day0'];
        if ($day0 > 0){
            $count = $json[$i]['count'];
            $yesterday = abs(strtotime("-1 day"));
            $midnight = strtotime("today midnight");
            if ($day0 >= $yesterday && $day0 <= $midnight) {
                $count++;
                echo '<br><center  style="margin:auto"> <i>Sembla que ahir vas estudiar! Ara ja portes <h4>' . $count . '</h4> dies seguits estudiant. Felicitats!</i><br><small>Des del 29 de març de 2020<small></center>';
            } else {
                $count = 0;
                echo '<br><h6 class="text-center"  style="margin:auto">Hola! Vas estudiar ahir?</h6>';
            }
            // write $count to json file
            $json[$i]['count'] = $count;
            // then write time() to json file
            $day0 = time();
            $json[$i]['day0'] = time();
        } else
        {
            echo '<br><h6 class="text-center" style="margin:auto">Es el primer cop que passes per aqui, oi? Benvingut/da! Si no ho has fet ja, diga-li al professor el nom que has triat.</h6><br>';
            $day0 = time();
            $json[$i]['day0'] = time();
            $json[$i]['count']++;
            
        }
    }

}

$jsondata = json_encode($json);
file_put_contents('lastprclist.json', $jsondata);
            
?>

            </div>
        </div>
    </div>
</body>

<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
