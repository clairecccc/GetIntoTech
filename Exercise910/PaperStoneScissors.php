<?php

Echo "Select R, P or S: ", PHP_EOL;
$UserInput = stream_get_line(STDIN, 1, PHP_EOL);
$ComputerInput= mt_rand(0,2);

function gameinput($Input) {
    
    if($Input === "R" || $Input === "r" || $Input === 0) {
        return "Rock";
    }

    if($Input === "P" || $Input === "p" ||  $Input === 1){
        return "Paper";
    }
    
    if($Input === "S" || $Input === "s" || $Input === 2){
        return "Scissors";
    }  
}
echo "-------------------", PHP_EOL;

$UserInput = gameinput($UserInput);
$ComputerInput = gameinput($ComputerInput);
echo "You have selected ", $UserInput, PHP_EOL;
echo "Computer has selected ", $ComputerInput, PHP_EOL;

if ($UserInput === $ComputerInput){
    echo "There is a draw";
}

elseif ($UserInput === "Rock" && $ComputerInput === "Paper"){
echo "Computer has won";    
}
elseif ($UserInput === "Paper" && $ComputerInput === "Scissors"){
echo "Computer has won";
}
elseif ($UserInput === "Paper" && $ComputerInput === "Rock"){
echo "User has won";
}
elseif ($UserInput === "Scissors" && $ComputerInput === "Rock"){
echo "Computer has won";
}
elseif ($UserInput === "Scissors" && $ComputerInput === "Paper"){
echo "User has won";
}
elseif ($UserInput === "Rock" && $ComputerInput === "Scissors"){
echo "User has won";
}

//if ($UserInput === "Paper" && $ComputerInput === "Paper"){
//echo "There is a draw";
//}
//elseif ($UserInput === "Rock" && $ComputerInput === "Rock"){
//echo "There is a draw";
//}
//elseif ($UserInput === "Scissors" && $ComputerInput === "Scissors"){
//echo "There is a draw";
//}

//function comparison ($UserInput) {
//    if ($UserInput === "R") {
//        echo "You are winner";
//    }
//
//if ($UserInput === "R") {
//    $UserInput = "Rock";  
//}
//if($UserInput === "P") {
//    $UserInput = "Paper";
//}
//if($UserInput === "S") {
//   $UserInput = "Scissors"; 
//}

//$ComputerInput= mt_rand(0,2);
//
//if ($ComputerInput === 0) {
//    $ComputerInput = "Rock";
//}
//if ($ComputerInput === 1) {
//    $ComputerInput = "Paper";
//} 
//if ($ComputerInput === 2) {
//    $ComputerInput = "Scissors";
//}


