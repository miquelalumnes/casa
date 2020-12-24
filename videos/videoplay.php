<?php
session_start();
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <script type="text/javascript">
        var video = document.getElementById('video');
        video.volume = 0.5;

        function videoEnded() {
            window.location.replace("videodone.php");
        };

    </script>
    <center>
        <video id="video" autoplay="autoplay" controls="controls" width="70%" height="70%" onended="videoEnded()">
            <source src="weekly-video.mp4" type="video/mp4" />
        </video>
        <h3>Has de mirar tot aquest vídeo sencer! Tranquils, que és curt. Un cop s'hagi acabat, podreu tornar a l'entrada de la web.</h3>
    </center>
</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
