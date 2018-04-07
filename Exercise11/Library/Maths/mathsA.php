<?php

function doMathsA($first, $second, $operator){
   
//    if ($first > 100) {
//        return 'ERROR:NUMBER ONE MUST BE LESS THAN 100';
//    }
//    if ($second > 100) {
//        return 'ERROR:NUMBER TWO MUST BE LESS THAN 100';
//    }          
    
    switch($operator) {
	case '+':
		return $first + $second;
		break;
	case '*':
		return $first * $second;
		break;
	case '-':
		return $first - $second;
		break;
	case '/':
		return $first / $second;
		break;
	default:
		return 'ERROR: you inputted an invalid operator!';
    }
      
    
//    if($first > 100) {
//	die('ERROR: NUMBER MUST BE LESS THAN 100' . PHP_EOL);
//}
    
}

