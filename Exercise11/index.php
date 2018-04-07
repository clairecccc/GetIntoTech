<?php

$path = 'Library/Maths';
$existingpaths = get_include_path();

echo $existingpaths, PHP_EOL; 
set_include_path($existingpaths . PATH_SEPARATOR . $path);

echo get_include_path(), PHP_EOL;//returning path as a string

include 'mathsB.php';

use function bob\doMathsB;

    Echo "What is your first number. Choose 1 to 100? ", PHP_EOL;
    $first = stream_get_line(STDIN, 10, PHP_EOL);

    Echo "What is your second number. Choose 1 to 9? ", PHP_EOL;
    $second = stream_get_line(STDIN, 10, PHP_EOL);

    Echo "What is your operater choice. Choose +, /, - or *? ", PHP_EOL;
    $operator = stream_get_line(STDIN, 10, PHP_EOL);

$Answer = doMathsB($first, $second, $operator);

Echo "----------------------------------------", PHP_EOL;
Echo "Your sum is $first $operator $second ", PHP_EOL;
Echo "The answer is $Answer";

