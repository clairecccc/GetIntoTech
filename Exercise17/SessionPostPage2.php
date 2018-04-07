<?php
session_start();

if(!empty($_SESSION)){

    print_r($_SESSION);
    
    
    echo "Hello " . $_SESSION['username'] . '<br>';
    echo "You favourite colour is " . $_SESSION['color'] . '<br>';
    echo "You favourite animal is " . $_SESSION['animal'] . '<br>';
    echo "<a href='SessionPostPage3.php'>Logout</a><br>";
}
?>