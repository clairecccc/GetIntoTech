<?php 

$xmlNodes=simplexml_load_file ("Books.xml");
$format="£%0.2f\n";

foreach($xmlNodes as $book) {
echo"----------------", PHP_EOL;
echo "category: " . $book["category"], PHP_EOL;
echo "title: " . $book->title, PHP_EOL;
echo "language: " . $book->title["lang"], PHP_EOL;
echo "author: " . $book->author, PHP_EOL;
echo "price: " . sprintf($format, $book->price);
echo "year: " . $book->year, PHP_EOL;


}




//
//$path="Books.xml";
//
//$data= simplexml_load_file($path) or die("Error: can't create object");
//
//foreach($data as $book){
//   echo $book["category"], PHP_EOL;
//}