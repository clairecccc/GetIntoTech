<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form page 1 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>         
    </head>
    
    <body>
        <div class="header text-center font-weight-bold">
            <h1> This is the login page</h1>
            <h2> Complete the fields below to log in</h2>  
        </div>
   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="jumbotron centre">
                        <form action="" method="post" >
                            Username: <input type="text" name="username"/> <br>
                            Password: <input type="password" name="password" /> <br>
                            Colour: <input type="text" name="color" /> <br>
                            Animal: <input type="text" name="animal" /> <br>
                            <input type="submit" value="Login" class=".btn btn-primary"/> <br>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </body>
</html>
        
<?php    
if(!empty($_POST)){
$_SESSION["username"] = $_POST['username'];  
$_SESSION["color"] = $_POST['color']; 
$_SESSION["animal"] = $_POST['animal']; 
}
if(!empty($_SESSION)){
 echo "Welcome " . $_SESSION['username'] . '<br>';
 echo "You favourite colour is " . $_SESSION['color'] . '<br>';
 echo "You favourite animal is " . $_SESSION['animal'] . '<br>';
 echo "<a href='SessionPostPage2.php'>Go to Page 2</a><br>";
}

