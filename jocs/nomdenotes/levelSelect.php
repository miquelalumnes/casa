<html>

<head>
    <title>Level Select</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../../js/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="css/w3.css">
</head>
<style>
    @font-face {
        font-family: 'museo';
        src: url('fonts/museo.ttf');
    }
    .w3-btn {
        width: 50vw;
    }

    h3 {
        font-family: 'museo';
        color: coral;
    }
    
    @media only screen and (max-width: 333px) {
        .w3-btn {
            width: 70vw;
            }
    }
    
    #exit {
        padding-top: 5vh;
    }

</style>

<body>

<?php
include 'auth.php';

        if(isset($_POST['level1'])) { 
            $_SESSION['level'] = 1;
            header("Location: game.php");
            
        } 
        if(isset($_POST['level2'])) { 
            $_SESSION['level'] = 2;
            header("Location: game.php");
        }
        if(isset($_POST['level3'])) { 
            $_SESSION['level'] = 3;
            header("Location: game.php");
        } 
        if(isset($_POST['level4'])) { 
            $_SESSION['level'] = 4;
            header("Location: game.php");
        }
        
        if(isset($_POST['level5'])) { 
            $_SESSION['level'] = 5;
            header("Location: bassClef/game.php");
            
        } 
        if(isset($_POST['level6'])) { 
            $_SESSION['level'] = 6;
            header("Location: bassClef/game.php");
        }
        if(isset($_POST['level7'])) { 
            $_SESSION['level'] = 7;
            header("Location: bassClef/game.php");
        } 
        if(isset($_POST['level8'])) { 
            $_SESSION['level'] = 8;
            header("Location: bassClef/game.php");
        }
    ?> 
    <center>
    <h3>*noms a notes*</h3>
        <div class="w3-container w3-padding">
            <form method="post" class="w3-half">
                <input type="submit" name="level1" value="Nivell 1" class="w3-btn w3-block w3-sand w3-xxlarge w3-border w3-round-large"  id="level1">
                <input type="submit" name="level1" value="Nivell 2" class="w3-btn w3-block w3-light-gray w3-xxlarge w3-border w3-round-large" id="level2">
                <input type="submit" name="level3" value="Nivell 3" class="w3-btn w3-block w3-pale-green w3-xxlarge w3-border w3-round-large"  id="level3">
                <input type="submit" name="level4" value="Nivell 4" class="w3-btn w3-block w3-khaki w3-xxlarge w3-border w3-round-large" id="level4">

            </form>
            
            <form method="post" class="w3-half">
                <input type="submit" name="level5" value="Nivell 5" class="w3-btn w3-block w3-light-blue w3-xxlarge w3-border w3-round-large"  id="level5">
                <input type="submit" name="level6" value="Nivell 6" class="w3-btn w3-block w3-lime w3-xxlarge w3-border w3-round-large" id="level6">
                <input type="submit" name="level7" value="Nivell 7" class="w3-btn w3-block w3-amber w3-xxlarge w3-border w3-round-large"  id="level7">
                <input type="submit" name="level8" value="Nivell 8" class="w3-btn w3-block w3-orange w3-xxlarge w3-border w3-round-large" id="level8">
            </form>


        </div>
                <div id="exit">
            <a href="../../index.php" class="w3-btn w3-grey w3-small w3-center">Torna al principi</a></div>
    </div>
    </center>

    
    <script>
        $(document).ready(function() {

            var score = localStorage.setItem("score", 0);
            var level;

            document.getElementById("level1").addEventListener("click", function() {

                level = localStorage.setItem("level", 1);
                level = sessionStorage.setItem("level", 1);
                var snd = new Audio("levelChoice.mp3");
                snd.play();
                //window.location.href = "game.php";
            });
            document.getElementById("level2").addEventListener("click", function() {
                level = localStorage.setItem("level", 2);
                level = sessionStorage.setItem("level", 2);
                var snd = new Audio("levelChoice.mp3");
                snd.play();
                console.log(level);
                //window.location.href = "game.php";
            });
            document.getElementById("level3").addEventListener("click", function() {
                level = localStorage.setItem("level", 3);
                level = sessionStorage.setItem("level", 3);
                var snd = new Audio("levelChoice.mp3");
                snd.play();
                //window.location = "game.php";
            });
            document.getElementById("level4").addEventListener("click", function() {
                level = localStorage.setItem("level", 4);
                level = sessionStorage.setItem("level", 4);
                var snd = new Audio("levelChoice.mp3");
                snd.play();
                //window.location = "game.php";
            });
            
            document.getElementById("level5").addEventListener("click", function() {

                level = localStorage.setItem("level", 5);
                level = sessionStorage.setItem("level", 5);
                var snd = new Audio("levelChoice.mp3");
                snd.play();
                //window.location.href = "game.php";
            });
            document.getElementById("level6").addEventListener("click", function() {
                level = localStorage.setItem("level", 6);
                level = sessionStorage.setItem("level", 6);
                var snd = new Audio("levelChoice.mp3");
                snd.play();
                console.log(level);
                //window.location.href = "game.php";
            });
            document.getElementById("level7").addEventListener("click", function() {
                level = localStorage.setItem("level", 7);
                level = sessionStorage.setItem("level", 7);
                var snd = new Audio("levelChoice.mp3");
                snd.play();
                //window.location = "game.php";
            });
            document.getElementById("level8").addEventListener("click", function() {
                level = localStorage.setItem("level", 8);
                level = sessionStorage.setItem("level", 8);
                var snd = new Audio("levelChoice.mp3");
                snd.play();
                //window.location = "game.php";
            });
        });
        

    </script>
          
</body>


    

</html>
