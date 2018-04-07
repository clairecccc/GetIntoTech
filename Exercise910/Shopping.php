<?php

$basket = [
    'White Bread' => 1.05,
    'Brown Bread' => 1.25,
    'Milk' => 1.00,
    'Cheese' => 2.75,
];

foreach ($basket as $nameofitem => $price) {
    echo $nameofitem, " costs £", $price, PHP_EOL;
}
        
/* 
 * Add a file called Shopping.php to the project.
Create an associative array called $basket using the new square bracket [ ] array syntax.
Add the following items and their prices to your basket:
White Bread, 1.05
Brown Bread, 1.25
Milk, 1.00
Cheese, 2.75
Use a foreach loop to iterate over the items in your basket and print the item’s name
and price to the terminal.T
 */

