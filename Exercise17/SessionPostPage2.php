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
        <link rel="stylesheet" type="text/css" href="Exercise17.css"> 
    </head>

    <body>
        <div>
            
            <?php if(!empty($_SESSION)) { ?>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 jumbotron center">
                            <h3>Hello <?php echo $_SESSION['username']; ?></h3>
                            <h3>Your favourite colour is <?php echo $_SESSION['color']; ?></h3>
                            <h3>Your favourite animal is <?php echo $_SESSION['animal']; ?></h3>
                            <h2><a href='SessionPostPage3.php'>Logout</a></h2><br>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            
           <?php 
               // if(!empty($_SESSION)){

                //    print_r($_SESSION);


                   // echo "<h2>Hello " . $_SESSION['username'] . '</h2><br>';
                    //echo "You favourite colour is " . $_SESSION['color'] . '<br>';
                    //echo "You favourite animal is " . $_SESSION['animal'] . '<br>';
                   // echo "<a href='SessionPostPage3.php'>Logout</a><br>";

                //}
            //?>
        </div>
    </body>
</html>