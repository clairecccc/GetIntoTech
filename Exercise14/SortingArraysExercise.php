<?php

// Sorting Arrays Exercise
// TODO: 1
// Attempt to directly sort an array with the values of [8,3,6,5,4]
echo "Question 1", PHP_EOL;
$childrenAges = [8,3,6,5,4];
sort($childrenAges);
print_r($childrenAges);
echo "This is the question 1 sorted array: " . join(", ", $childrenAges), PHP_EOL;
echo "------------------------------", PHP_EOL;
// TODO: 2 
// Run the file. Add a comment to describe the outcome 
//ARRAY SORTED, PRINT_R USED TO PRINT HUMAN READABLE INFO ON THE VARIABLE, ARRAY JOINED AS A STING AND ECHOED

// TODO: 3 
// Use the following array and sort as specified
echo "Question 2", PHP_EOL;
$numbers = [8, 6, 3, 0, 2, -4, 9];
echo "Original array values:\n";
var_dump($numbers);

echo "Sorting in ascending order\n";
sort($numbers);
var_dump($numbers);

echo "Sorting in descending order\n";
rsort($numbers);
var_dump($numbers);
echo "------------------------------", PHP_EOL;

// TODO: 4 
// Use the following array and sort as specified
echo "Question 4", PHP_EOL;
$ages = ['Mr. S. Holmes' => 27, 
         'Mr. M. Holmes' => 34, 
	   'Ms. Hudson' => 70];

// Sort an associative array by its values in descending order
echo "Sorted by values, descending\n";
arsort($ages);
var_dump($ages); 
echo "------------------------------", PHP_EOL;

// TODO: 5 
// Sort an associative array by its keys
echo "Question 5", PHP_EOL;
echo "Sorted by keys, ascending\n";
ksort($ages);
var_dump($ages);

echo "Sorted by keys, descending\n";
krsort($ages);
print_r($ages);
