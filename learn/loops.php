<?php

$students = [
    "8547575" => [
        "name" => "Marc",
        "age" => 20
    ],
    "5757757" => [
        "name" => "Rafa",
        "age" => 25
    ]    
];

foreach($students as $id => $car) {
    echo $id . " - " .$car['age'] ."\n";
}