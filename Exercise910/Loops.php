<?php
echo "--------------While Loop-------------", PHP_EOL;
$counter = 0;
$max = 12;

        
while ($counter <= $max) {
    
    echo "$counter  ";
    echo $counter * $counter, " ";
    echo PHP_EOL;
    $counter++;
            
}        

echo "----------For Loop----------------", PHP_EOL;

for($counter=0; $counter<= 12; $counter++){
    echo "$counter", " ";
    echo "$counter"*"$counter", PHP_EOL;
}


/* 
 * Write a loop that prints out pairs of numbers. The first number in the pair should be
between 0 and 12 and the second number in the pair should display the first number
squared
 */

