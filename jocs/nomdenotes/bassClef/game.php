<!DOCTYPE html>
<html>

<head>
    <title>Responsive game screen tests</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../../../js/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="css/w3.css">
</head>
<style>
    @font-face {
        font-family: 'museo';
        src: url('fonts/museo.ttf');
    }

    h3 {
        font-family: 'museo';
        color: coral;
    }
    
    @media only screen and (max-width: 333px) {
        img {
            max-width: 60%;
        }
  #level {
    display: none;
  }
  #username {
    display: none;
  }
}
    #exit {
        padding-top: 5vh;
    }

</style>

<body>


    <div class="w3-row w3-animate-opacity">
        <div class="w3-third">
            <center>
                <h3></h3>
                <h3 id="level"></h3>
            </center>
        </div>

        <div class="w3-third" id="username">
            <center>
                <?php
                session_start();
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    echo "<h3 id='username'>" . $username . "</h3>";
                 
                } else {
                    header('Location: ../../../login.php');
                }
            
                ?>
            </center>
        </div>

        <div class="w3-third">
            <center>
                <h3 id="score">score </h3>

            </center>
        </div>

    </div>
    <center>
        <div class="w3-animate-right" id="notepic"></div>
    </center>
    <center>
        <div class="w3-padding w3-animate-bottom">
            <button class="w3-btn w3-khaki w3-xxlarge" id="button0">Do</button>
            <button class="w3-btn w3-indigo w3-xxlarge" id="button1">Re</button>
            <button class="w3-btn w3-teal w3-xxlarge" id="button2">Mi</button>
            <button class="w3-btn w3-blue w3-xxlarge" id="button3">Fa</button>
        </div>
        <div id="tryAgain"></div>


        <button class="w3-btn w3-grey w3-small" id="exitBtn">Surt</button>
    </center>

<script>
        $(document).ready(function() {

                    var score = 0;
                    var random;
                    var randomButton;
                    var timesRun = 0;
                    var randomOld;
                    var username = '<?php echo $username;?>';
                    chooseNotes();
                    getButtonClicks();

                    function chooseNotes() {

                        var level = localStorage.getItem("level");
                        console.log('level is ' + level);
                        
                        var level5notes = Array('do2.jpg', 're2.jpg', 'mi2.jpg', 'fa2.jpg');
                        var level6notes = Array('do2.jpg', 're2.jpg', 'mi2.jpg', 'fa2.jpg', 'sol2.jpg', 'la2.jpg', 'si2.jpg', 'do3.jpg');
                        var level7notes = Array('do2.jpg', 're2.jpg', 'mi2.jpg', 'fa2.jpg', 'sol2.jpg', 'la2.jpg', 'si2.jpg', 'do3.jpg', 're3.jpg', 'mi3.jpg', 'fa3.jpg', 'sol3.jpg', 'la3.jpg');
                        var level8notes = Array('do2.jpg', 're2.jpg', 'mi2.jpg', 'fa2.jpg', 'sol2.jpg', 'la2.jpg', 'si2.jpg', 'do3.jpg', 're3.jpg', 'mi3.jpg', 'fa3.jpg', 'sol3.jpg', 'la3.jpg', 'fa1.jpg', 'sol1.jpg', 'la1.jpg', 'si1.jpg', 'si0.jpg', 'la0.jpg');

                        var levelNotes = 0;
                        if (level == 5) {
                            levelNotes = level5notes;
                        } else if (level == 6) {
                            levelNotes = level6notes;
                        } else if (level == 7) {
                            levelNotes = level7notes;
                        } else if (level == 8) {
                            levelNotes = level8notes;
                        }
                        
                        random = Math.floor(Math.random() * levelNotes.length);
                        document.getElementById("notepic").innerHTML = '<img src=" ' + levelNotes[random] + '" class="w3-animate-bottom">';
                        
						// Play selected note
                        window.setTimeout(playNote, 500);

                        function playNote() {
                            var snd = new Audio("noteSound" + random + ".mp3");
                             snd.play();
                        }
						
                        if (timesRun == 0) {
                            randomOld = random;
                            console.log('randomOld at line 118 is ' + randomOld);
                        } else if (timesRun > 0) {
                            console.log('timesRun at line 120 is ' + timesRun);
                            if (randomOld == random) {
                                console.log('randomOld at line 122 is ' + randomOld);
                                chooseNotes();
                            }
                        }
                        document.getElementById("level").innerHTML = 'level ' + level;
                        document.getElementById("score").innerHTML = 'score ' + score;

                        // This works, but some code is needed here to check for a repeated note.

                        // Let's try getting a clean note name now.
                        var sampleNoteName = levelNotes[random];
                        var cleanName = sampleNoteName.replace(/[0-9]/g, '');
                        var cleanName = cleanName.replace(/['.jpg']/g, '');
                        var cleanName = cleanName.replace(/\b\w/g, c => c.toUpperCase());

                        // One of the four buttons is picked at random
                        randomButton = Math.floor(Math.random() * 4);
                        document.getElementById("button" + randomButton).innerHTML = cleanName;

                        // Other buttons are set to other note names
                        var allNoteNames = Array('Do', 'Re', 'Mi', 'Fa', 'Sol', 'La', 'Si');
                        var buttonNumbers = Array(0, 1, 2, 3);

                        // Taking out the button with the right answer
                        buttonNumbers.splice(randomButton, 1);

                        // Taking out the note name that's on screen
                        var index = allNoteNames.indexOf(cleanName);
                        allNoteNames.splice(index, 1);

                        // Assign each of the remaining note names to each of the remaining buttons
                        var button0NoteNumber = Math.floor(Math.random() * 6);
                        //console.log ('button0NoteNumber is ' + button0NoteNumber);
                        document.getElementById("button" + buttonNumbers[0]).innerHTML = allNoteNames[0];
                        document.getElementById("button" + buttonNumbers[1]).innerHTML = allNoteNames[1];
                        document.getElementById("button" + buttonNumbers[2]).innerHTML = allNoteNames[2];
                        timesRun++;
                        console.log('timesRun at line 163 is ' + timesRun);

                    };



                    function getButtonClicks() {

                        document.getElementById("button0").addEventListener("click", function() {
                            if (randomButton == 0) {
                                score++;
                                var snd = new Audio("correct.mp3");
                                //snd.play();
                                document.getElementById("tryAgain").innerHTML = '';

                            } else {
                                document.getElementById("tryAgain").innerHTML = 'Nop!';
                                var snd = new Audio("wrong.mp3");
                                snd.play();
                            }
                            chooseNotes();
                        });
                        document.getElementById("button1").addEventListener("click", function() {
                            if (randomButton == 1) {
                                score++;
                                var snd = new Audio("correct.mp3");
                                //snd.play();
                                document.getElementById("tryAgain").innerHTML = '';

                            } else {
                                document.getElementById("tryAgain").innerHTML = 'Prova-ho un altre cop!';
                                var snd = new Audio("wrong.mp3");
                                snd.play();
                            }


                            chooseNotes();
                        });
                        document.getElementById("button2").addEventListener("click", function() {
                            if (randomButton == 2) {
                                score++;
                                var snd = new Audio("correct.mp3");
                                //snd.play();
                                document.getElementById("tryAgain").innerHTML = '';

                            } else {
                                document.getElementById("tryAgain").innerHTML = 'De veritat?';
                                var snd = new Audio("wrong.mp3");
                                snd.play();
                            }
                            chooseNotes();
                        });

                        document.getElementById("button3").addEventListener("click", function() {
                            if (randomButton == 3) {
                                score++;
                                var snd = new Audio("correct.mp3");
                                //snd.play();
                                document.getElementById("tryAgain").innerHTML = '';

                            } else {
                                document.getElementById("tryAgain").innerHTML = 'Segur?';
                                var snd = new Audio("wrong.mp3");
                                snd.play();
                            }
                            chooseNotes();
                        });
                    }

                    document.getElementById("exitBtn").addEventListener("click", function() {
                            var level = localStorage.getItem("level");
                            localStorage.setItem("username", username);
                            sessionStorage.setItem("score", score);
                            console.log ('score at extBtn is ' + score);

                            $.ajax({
                                method: 'POST',
                                data: {
                                    score: score
                                },
                                url: 'endGame.php',
                                dataType: 'text',
                                success: function() {
                                    window.location.replace("highScores.php");
                                }
                            });
                        });

                    });

    </script>

</body>

</html>
