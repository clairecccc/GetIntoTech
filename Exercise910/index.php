<?php

echo 'What is your favourite colour? ';
$favourites[0] = stream_get_line(STDIN, 15, PHP_EOL);

echo 'What is your favourite food? ';
$favourites[1] = stream_get_line(STDIN, 15, PHP_EOL);

echo 'What is your favourite place? ';
$favourites [2] = stream_get_line(STDIN, 15, PHP_EOL);

echo 'What is your favourite cheese? ';
$favourites [3] = stream_get_line(STDIN, 15, PHP_EOL);

echo $favourites [0], PHP_EOL;
echo $favourites [1], PHP_EOL;
echo $favourites [2], PHP_EOL;

echo "==========", PHP_EOL;
//
//for($counter = 0; $counter < 3; $counter++){
//
//    echo $favourites[$counter], PHP_EOL;     
//}


for($counter = 0; $counter < count($favourites); $counter++){

    echo $favourites[$counter], PHP_EOL;     
}

echo "==========", PHP_EOL;

foreach ($favourites as $fav ){
    echo $fav, PHP_EOL;
}

//foreach ($favourites as $favouriteextra ){
    //echo $favouriteextra . "extra", PHP_EOL;
//}


//Add code to display the items of the array by using firstly a for loop and then a foreach loop


?>



