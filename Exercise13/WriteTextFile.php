<?php

$filename = 'people.txt';
$fp = fopen($filename, 'a');

$dataName = "Marge Simpson";
$dataEmail = "marge@springfield.com";
$dataPhone = "555-332-221";

//$newLine = $dataName . $dataEmail . $dataPhone;
$newLine = "$dataName\t$dataEmail\t$dataPhone\n";

$addition= fwrite($fp, $newLine);

for($counter=0; $counter<5; $counter++){
    $newLine = "$counter\t$dataName\t$dataEmail\t$dataPhone\n";
    $addition= fwrite($fp, $newLine);
}

fclose($fp);


//$newInput1 = fwrite($filename, $dataName);
//$newInput2 = fwrite($filename, $dataEmail);
//$newInput3 = fwrite($filename, $dataPhone);
//
//$datastring =file_get_contents($filename);
//echo $datastring, PHP_EOL;


