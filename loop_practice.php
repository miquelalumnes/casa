<?php
include 'auth.php';

$username = $_SESSION['username'];
$username = strtolower($username);

$loop_url = $username . '-loop' . '.mp3';
$loop2_url = $username . '-loop2' . '.mp4';
$loop3_url = $username . '-loop3' . '.mp4';

$loop_url = "lrc/".$loop_url;
$loop2_url = "lrc/".$loop2_url;
$loop3_url = "lrc/".$loop3_url;

$directions_url = "lrc/". $username . '-dir.mp3';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Un altre cop!</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>

<body style=" background-image: url('web_music_1-reddish.png');   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  text-align: center;
   opacity: 1">

    <script>
        $(document).ready(function() {
            function windowCloses() {
                var windowClosed = true;
                $.post("timerAutoLogoutScript.php", {
                    windowClosed: windowClosed
                });
            };
            window.addEventListener('blur', windowCloses);
        });

    </script>

    <h3><a href="practice.php">Torna enrere</a></h3><br>



    <h2>Dona-l'hi voltes</h2> <br>

    <?php

    if (file_exists($directions_url)) {
    
    echo '<h5>Instruccions especials per a ' .$username. ':</h5><audio controls> <source src='.$directions_url.'></audio><hr>';}
    
echo '<div class="text-center" style = "font-size: 1.5rem">
<a href="#video1" class="text-info">Primer vídeo |</a>
<a href="#video2">Segon vídeo |</a>
<a href="#video3" class="text-primary">Tercer vídeo </a>
</div>';
    
    if (!file_exists($loop_url)) {
        $loop_url = str_replace("mp3","mp4",$loop_url);
            if (!file_exists($loop_url)) {
                echo "Ui, de moment no tens àudio o vídeo. Diga-li al professor que en posi un!";
            }
    } if (file_exists($loop_url)) {
       echo '<video controls loop autoplay style="width: 80%;
  height: auto" id="video1"><br>
        <source src='.$loop_url.'>
        Your browser does not support the audio element.
    </video><br>

    <button type="button" class="btn btn-info" onClick="slower1()">50%</button>
    <button type="button" class="btn btn-primary" onClick="slower1b()">75%</button>
    <button type="button" class="btn btn-warning" onClick="normal1()">Normal</button>
    <br> <br> <hr>';}
        if (file_exists($loop2_url)) {
       echo '<video controls loop style="width: 80%;
  height: auto" id="video2"><br>
        <source src='.$loop2_url.'>
        Your browser does not support the audio element.
    </video><br>

    <button class="btn btn-info" onClick="slower2()">50%</button>
    <button type="button" class="btn btn-primary" onClick="slower2b()">75%</button>
    <button class="btn btn-warning" onClick="normal2()">Normal</button>
    <br> <br> <hr>';}
        if (file_exists($loop3_url)) {
       echo '<video controls loop style="width: 80%;
  height: auto" id="video3"><br>
        <source src='.$loop3_url.'>
        Your browser does not support the audio element.
    </video><br>

    <button class="btn btn-info" onClick="slower3()">50%</button>
    <button type="button" class="btn btn-primary" onClick="slower3b()">75%</button>
    <button class="btn btn-warning" onClick="normal3()">Normal</button>
    <br>';}

    ?>

    <script>
        var video1 = document.getElementById("video1");

        function slower1() {
            video1.playbackRate = 0.5;
        }

        function slower1b() {
            video1.playbackRate = 0.75;
        }

        function normal1() {
            video1.playbackRate = 1;

        }

    </script>
    <script>
        var video2 = document.getElementById("video2");

        function slower2() {
            video2.playbackRate = 0.5;
        }

        function slower2b() {
            video2.playbackRate = 0.75;
        }

        function normal2() {
            video2.playbackRate = 1;

        }

    </script>
    <script>
        var video3 = document.getElementById("video3");

        function slower3() {
            video3.playbackRate = 0.5;
        }

        function slower3b() {
            video3.playbackRate = 0.75;
        }

        function normal3() {
            video3.playbackRate = 1;

        }

    </script>


    <p class="text-dark" style="padding: 2em; font-size: 1.5em">Aquí hi ha un vídeo o àudio que es repeteix infinitament. Espera un parell de voltes i aleshores prova de tocar amb ell. Si t'agrada com t'ha sortit, perfecte, torna-hi uns cops més. Si creus que no t'ha sortit prou bé, tranquil/a, a la següent volta t'anirà millor.</p>


</body>

</html>
