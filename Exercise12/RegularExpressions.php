<?php
//explode, 2nd in alphebetical order 
$words = 'jack*jill*up*went*hill*and*the';
$rhyme = explode ('*', $words);
echo "$rhyme[0]*$rhyme[5]*$rhyme[1]*$rhyme[3]*$rhyme[2]*$rhyme[6]*$rhyme[4]", PHP_EOL;
sort($rhyme);
echo "$rhyme[0]*$rhyme[1]*$rhyme[2]*$rhyme[3]*$rhyme[4]*$rhyme[5]*$rhyme[6]", PHP_EOL;

echo"----------------------------------", PHP_EOL;

//preg split - split a string into array elements, removing unwanted characters, echo elements 0 and 1 
$Input = 'Uma.John+Sam-Kat9Yvone5Dave';
$split = preg_split ('/[0123456789+.-]/', $Input);
var_dump($split);
echo "The best names are $split[0] and $split[1]", PHP_EOL;

echo"-----------------------------------", PHP_EOL;

//string split, splitting into an array with names as four characters, print r, echo array using join  
$shortpeople = "DavePhilAnneJohn";
$splitpeople = str_split($shortpeople, 4);
print_r($splitpeople);
echo join(", ",  $splitpeople), PHP_EOL;

