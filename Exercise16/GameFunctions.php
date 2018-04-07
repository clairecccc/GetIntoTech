<?php

$userChoice = $_REQUEST["choice"];

//
//Echo "Select R, P or S: ", PHP_EOL;
//$userChoice = stream_get_line(STDIN, 1, PHP_EOL);
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
//echo "-------------------", PHP_EOL;

$userChoice = gameinput($userChoice);
$ComputerInput = gameinput($ComputerInput);
echo "The Result <br>";
echo "You have selected ", $userChoice, "<br>";
echo "Computer has selected ", $ComputerInput, "<br>";

if ($userChoice === $ComputerInput){
    echo "<b>There is a draw</b>";
}

elseif ($userChoice === "Rock" && $ComputerInput === "Paper"){
echo "Computer has won";    
}
elseif ($userChoice === "Paper" && $ComputerInput === "Scissors"){
echo "Computer has won";
}
elseif ($userChoice === "Paper" && $ComputerInput === "Rock"){
echo "User has won";
}
elseif ($userChoice === "Scissors" && $ComputerInput === "Rock"){
echo "Computer has won";
}
elseif ($userChoice === "Scissors" && $ComputerInput === "Paper"){
echo "User has won";
}
elseif ($userChoice === "Rock" && $ComputerInput === "Scissors"){
echo "User has won";
}