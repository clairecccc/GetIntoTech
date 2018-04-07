<?php        

$filename = 'people.txt';
$fp =fopen($filename,'r');

//echos line 1 
$lines =file($filename);
echo $lines[1], PHP_EOL;

//echos 10 bytes
$data =fread($fp, 10);
echo $data, PHP_EOL;

//echos whole file into a string - slurping
$datastring =file_get_contents($filename);
echo $datastring, PHP_EOL;

fclose($fp);
