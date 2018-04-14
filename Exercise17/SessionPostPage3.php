<?php
session_start();
//print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form page 3 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>         
        <link rel="stylesheet" type="text/css" href="Exercise17.css"> 
    </head>
    <body>
        <div class="text-white h1">
            <?php

//            $_SESSION =[];

            session_destroy();

            //print_r($_SESSION);

            if(empty($_SESSION)){
                echo "Welcome Guest";
            }

            echo "<a href='SessionPostPage1.php'> <h4>Go to Page 1: Click here to log in</h4></a><br>";
            ?>
        </div>
    </body>
</html>