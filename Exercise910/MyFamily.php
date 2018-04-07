<?php
$family = [
    0 => ['Name' => 'Claire', 'Hair' => 'red', 'Age' => 33 ],
    1 => ['Name' => 'Clarkie', 'Hair' => 'blond,', 'Age' => 33],
    2 => ['Name' => 'Chris', 'Hair' => 'blond', 'Age' => 32],
    3 => ['Name' => 'Tia', 'Hair' => 'brown', 'Age' => 8],
    ];

     foreach ($family as $memberid => $member){
    //echo  $member['Hair'], ' ', $member ['Name'], PHP_EOL;
    
     foreach ($member as $description => $fact){
         echo $description, ': ', $fact, PHP_EOL;
        
     }
    
    }   

for($i = 0; $i < count($family); $i++) {
    echo  $family[$i]['Name'];
    echo  $family[$i]['Age'];
    echo  $family[$i]['Hair'];
}



$family = [
    0 => ['Name' => 'Claire', 'Hair' => 'red', 'Age' => 33 ],
    1 => ['Name' => 'Clarkie', 'Hair' => 'blond,', 'Age' => 33],
    2 => ['Name' => 'Chris', 'Hair' => 'blond', 'Age' => 32],
    3 => ['Name' => 'Tia', 'Hair' => 'brown', 'Age' => 8],
];

for($i = 0; $i < count($family); $i++) {
    $member = $family[$i];
    
    
     foreach ($member as $description => $fact){
         echo 'new - ', $description, ': ', $fact, PHP_EOL;
     }
}
/* 
 * Add a file called MyFamily.php to the project.
Create a multidimensional array called $family that stores your family members’ name,
age and hair colour.
Fill the array with at least 3 family members and then choose a looping technique to
display its contents in the output.
 */

