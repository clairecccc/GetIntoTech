<?php

//Length of String
$OpeningLine = "Africa and Asia face some of the world’s greatest health challenges, but their research capacity is not yet sufficient to meet them.";      
$length = strlen($OpeningLine);
echo $OpeningLine, PHP_EOL;
echo "This opening line is $length characters", PHP_EOL;

echo"--------------------------", PHP_EOL;

//String manipulation - upper case
echo "1. String manipulation", PHP_EOL;
echo "Our key programme partners are " . strtoupper('India Alliance and African Academy of Sciences'), PHP_EOL;

//Position of Africa within a string (no of characters into the string)
echo "2. Postion within a string", PHP_EOL;
echo strpos ("We’re taking coordinated action to transform the research ecosystems in Africa and Asia.", "Africa"), PHP_EOL;

//String manipulation, replacement of 'Asia' with 'India'
echo "3. String manipulation", PHP_EOL;
$str  = "Africa and Asia face some of the world’s greatest health challenges,";
echo str_replace('Asia','India', $str). PHP_EOL;

//Printf - formating the number 4.13578 , indenting by 40 characters
$ExampleNumber = 4.13578;
$ExampleText = "Playing with Printf";
$format = "%d. %40s \n";
printf($format, $ExampleNumber, $ExampleText);

//Sprintf - formatting to 2 decimal places, taking the result and rounding to 8 decimal places
$ExampleNumber = 5.00004;
$ExampleText = "Playing with sprintf";
$format = "%0.2f";
$Result = sprintf($format, $ExampleNumber);
echo $Result, PHP_EOL;
$Finaloutput = sprintf("%0.8f %40s", $Result, $ExampleText);
echo $Finaloutput;
