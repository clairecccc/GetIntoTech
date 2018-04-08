<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form page 2 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>         
    </head>

    <body>
        <div>
            
            <?php if(!empty($_SESSION)) { ?>
                <div class="jumbotron">
                    <h1>no thanks Clarkie</h1>
                    <h2>Hello <?php echo $_SESSION['username']; ?></h2>
                    <h3>Your favourite colour is Green</h3>
                    <h3>Your favourite animal is Dog</h3>
                </div>
            <?php } ?>
            
            
            <?php 
                if(!empty($_SESSION)){

                //    print_r($_SESSION);


                    echo "<h2>Hello " . $_SESSION['username'] . '</h2><br>';
                    echo "You favourite colour is " . $_SESSION['color'] . '<br>';
                    echo "You favourite animal is " . $_SESSION['animal'] . '<br>';
                    echo "<a href='SessionPostPage3.php'>Logout</a><br>";

                }
            ?>
        </div>
    </body>
</html>