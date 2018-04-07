<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <body>
<form action="" method="post" >
 Username: <input type="text" name="username" />
 Password: <input type="password" name="password" />
 Colour: <input type="text" name="color" />
 Animal: <input type="text" name="animal" />
 <input type="submit" value="Login" />
</form>
    </body>
</html>
        
<?php    
if(!empty($_POST)){
$_SESSION["username"] = $_POST['username'];  
$_SESSION["color"] = $_POST['color']; 
$_SESSION["animal"] = $_POST['animal']; 

if(!empty($_SESSION)){
 echo "Welcome " . $_SESSION['username'] . '<br>';
 echo "You favourite colour is " . $_SESSION['color'] . '<br>';
 echo "You favourite animal is " . $_SESSION['animal'] . '<br>';
 echo "<a href='SessionPostPage2.php'>Go to Page 2</a><br>";
}


}
