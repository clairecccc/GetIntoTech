<?php

function filterOnAmount($items)
{
    if ($items>100){
        return true;
    }
    return false;
}

echo "Using a callback function\n";

$basket = ["Item1" => 75, "Item2" => 200, "Item3" => 125, "Item4" => 100];
print_r(array_filter($basket, "filterOnAmount"));

// Using a closure to close-over (capture) a variable
echo "Using a callback function with a captured variable\n";
function criteria_greater_than($min)
{
    return function($item) use ($min) {
        return $item > $min;
    };
}

$minimum = 95;
// Use array_filter on a input with a selected filter function
$output = array_filter($basket, criteria_greater_than($minimum));

print_r($output); // basket items > 95

// dereferencing functions
// functions that return functions can be used as functions directly

// calling the function directly within an if statement
if (criteria_greater_than($minimum)($basket['Item1'])) {
    echo "It's more than $minimum\n";
}
else
{
    echo "It's NOT more than $minimum\n";
}



//Question 1 (array filter function) = Takes an array and callback function, runs callback for each element in an array. If the callback function returns true returns array element if false removes element from array
//Question 2 How does the $min captured variable used with the criteria_greater_than function give you more flexibility than the filterArray callback?
//          = you can change the minimum value??
//What is the purpose of the ($basket['Item1']) code within the if statement at the bottom of the file?
//          = specifing the element within the array to pass over. 

?>