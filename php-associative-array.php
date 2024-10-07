<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
var_dump($car);

echo $car["brand"],  "\n";

$car["year"] = 2024;
var_dump($car);

// using foreach

// Loop PHP associative array

foreach($car as $property => $value ){
    echo "$property: $value \n";
}