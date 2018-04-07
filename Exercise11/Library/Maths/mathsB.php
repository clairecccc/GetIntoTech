<?php
namespace bob; //defining the namespace
    
    function doMathsB($first, $second, $operator){
        
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
    }


