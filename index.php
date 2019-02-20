<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rock Paper Scissors</title>
    <!-- For media queries in Bootstrap. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootswatch CDN link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Personal stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <script type="text/javascript"> if (!window.console) console = {log:function() {}}; </script>

</head>
<body>
      <section class= "header">
        <h1>Martin's Rock Paper Scissors</h1>
      </section>
        <?php include 'php_pages/loginForm.php'; ?>





        <div class="game" style="display:none">
        <h2>Make your choice</h2>
        <form action="index.php" method="post">
            <div class = "rps_input">
            <label><input type="radio" name="user_choice" value="Rock" onclick="this.form.submit();"><img src="img/Rock.png"></label>
            <label><input type="radio" name="user_choice" value="Paper" onclick="this.form.submit();"><img src="img/Paper.png"></label>
            <label><input type="radio" name="user_choice" value="Scissors" onclick="this.form.submit();"><img src="img/Scissors.png"></label>
            </div>


        </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-1.10.1.min.js"></script>
        <script src="js/buttons/loginlogout.js"></script>
        <script src="js/buttons/register.js"></script>
        <script src="js/defs.js"></script>
        <script src="js/io.js"></script>
        <script src="js/board.js"></script>
        <script src="js/movegen.js"></script>
        <script src="js/makemove.js"></script>
        <script src="js/perft.js"></script>
        <script src="js/evaluate.js"></script>
        <script src="js/pvtable.js"></script>
        <script src="js/search.js"></script>
        <script src="js/protocol.js"></script>
        <script src="js/gui.js"></script>
        <script src="js/main.js"></script>
        <script src="js/buttons/loadSaveGame.js"></script>
    </body>
</html>
