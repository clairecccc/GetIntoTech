<?php

// Example 1
// slice the array starting at element 1
$path = array_slice(
	explode('/', 'example.com/blog/post/1'), 1);

//question 1= explode returns an array of elements each separated by /. Slice is from element 1 which is blog so example.com is removed.

// merge with this array
print_r(array_merge( ['yourdomain.tld'], $path ));

// question 2 - return array with just post 1 
$urlPath = array_slice(
	explode('/', 'example.com/blog/post/1'), 2);
print_r($urlPath);

//question 3 (difference between array merge & array addition
//=merge concatenates two arrays, addition 

print_r(['this does not make sense'] + $path);

echo"--------------------------", PHP_EOL;

// Example 2
$savedBasket = ['bread','milk','eggs'];

$extraBasketItems = ['pasta','eggs','garlic bread','salad', 'olive oil'];

$combinedBaskets = array_merge($savedBasket, $extraBasketItems);

print_r($savedBasket);
print_r($extraBasketItems);
echo "**********Array Merging**********\n";
print_r($combinedBaskets);

echo "**********Array Addition**********\n";
$AddedBasket = $savedBasket + $extraBasketItems;
print_r($AddedBasket);

//question 3 (difference between array merge & array addition
//            =merge concatenates two arrays, addition takes information from first array, so pasta, eggs & garlic bread from the second not used.
