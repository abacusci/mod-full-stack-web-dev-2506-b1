<?php

$a = 2;
$b = 3.3; // assign
$c = $a + $b; // expression

$name = "Marc $c"; // interpolation
$hasACar = true; // boolean var

$firstName = "Marc";
$lastName = "Adriaans";

$fullName = $firstName . " " . $lastName . "\n";
$fullName = "{$firstName}s {$lastName}\n";

//echo $fullName;

// arrays

$student = (object) [
    "name" => "Peter", 
    "age" => 12, 
    "hasCar" => false
];

print_r($student);

function sum($a, $b)
{
    return $a + $b;
}

$total = sum(10,20);

$myFunction = function() {
    echo "hello";
};

//$myFunction();

var_dump((string) 5);


echo "\n";

