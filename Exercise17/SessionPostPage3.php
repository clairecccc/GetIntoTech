<?php
session_start();
print_r($_SESSION);
$_SESSION =[];

session_destroy();

print_r($_SESSION);

if(empty($_SESSION)){
    echo "Welcome Guest";
}

echo "<a href='SessionPostPage1.php'>Go to Page 1: Click here to login</a><br>";
?>