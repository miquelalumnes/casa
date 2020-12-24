<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <form action="" method="post" name="usernameInput">
        <input type="text" name="username" placeholder="Username" required />
    </form>

    <?php
    session_start();
    if (isset($_POST['username'])){
     $username = stripslashes($_POST['username']);
     $username = strtolower($username);
    
     $loop_url = $username . '-loop' . '.mp4';
     $loop2_url = $username . '-loop2' . '.mp4';
     $loop3_url = $username . '-loop3' . '.mp4';
     $loop_url = "lrc/".$loop_url;
     $loop2_url = "lrc/".$loop2_url;
     $loop3_url = "lrc/".$loop3_url;

     $directions_url = "lrc/". $username . '-dir.mp3';
     echo "Aixo es els que hi ha en el repeteix forever per a <b>" . $username . "</b><br>";
    }
 if (file_exists($directions_url)) {
    
    echo '<h5>Instruccions especials per a ' .$username. ':</h5><audio controls> <source src='.$directions_url.'></audio><hr>';}
    
    if (!file_exists($loop_url)) {
        $loop_url = str_replace("mp3","mp4",$loop_url);
            if (!file_exists($loop_url)) {
                echo "Ui, de moment no tens àudio o vídeo. Diga-li al professor que en posi un!";
            }
    } if (file_exists($loop_url)) {
        echo "Content last changed: ".date("F d Y H:i:s.", filemtime($loop_url));
       echo '<video controls loop autoplay style="width: 80%;
  height: auto" id="video1"><br>
        <source src='.$loop_url.'>
        Your browser does not support the audio element.
    </video><br>

    <button type="button" class="btn btn-info" onClick="slower1()">Molt lent</button>
    <button type="button" class="btn btn-info" onClick="slower1b()">Mig lent</button>
    <button type="button" class="btn btn-success" onClick="normal1()">Normal</button>
    <br> <br> <hr>';}
        if (file_exists($loop2_url)) {
            echo "Content last changed: ".date("F d Y H:i:s.", filemtime($loop2_url));
       echo '<video controls loop style="width: 80%;
  height: auto" id="video2"><br>
        <source src='.$loop2_url.'>
        Your browser does not support the audio element.
    </video><br>

    <button class="btn btn-info" onClick="slower2()">Molt lent</button>
    <button type="button" class="btn btn-info" onClick="slower2b()">Mig lent</button>
    <button class="btn btn-success" onClick="normal2()">Normal</button>
    <br>';}
        if (file_exists($loop3_url)) {
            echo "Content last changed: ".date("F d Y H:i:s.", filemtime($loop3_url));
       echo '<video controls loop style="width: 80%;
  height: auto" id="video3"><br>
        <source src='.$loop3_url.'>
        Your browser does not support the audio element.
    </video><br>

    <button class="btn btn-info" onClick="slower3()">Molt lent</button>
    <button type="button" class="btn btn-info" onClick="slower3b()">Mig lent</button>
    <button class="btn btn-success" onClick="normal3()">Normal</button>
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
            video2.playbackRate = 0.5;
        }

        function slower3b() {
            video2.playbackRate = 0.75;
        }

        function normal3() {
            video2.playbackRate = 1;

        }

    </script>

</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="">
