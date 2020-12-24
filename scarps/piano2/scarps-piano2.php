<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Piano grau 2</title>
</head>

<body>
    <div align="center">
        <h1>Piano Grau 2</h1>

        <video width="70%" height="70%" controls autoplay onended="videoEnded()" id='video'>
            <source src="<?php $random = rand(1,20); echo $random; ?>.mp4"> </video> <br>

        <button onClick="slower()">Més lent</button>
        <button onClick="normal()">Normal</button>
        <br>
        <a href="../scarpslist.php">
            <h2>Torna Enrere</h2>
        </a>
    </div>

    <script>
        var video = document.getElementById('video');

        function slower() {
            video.playbackRate = 0.5;
        }

        function normal() {
            video.playbackRate = 1;

        }

        function videoEnded() {
            location.reload();


        }

    </script>

</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
