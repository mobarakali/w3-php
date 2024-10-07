<?php
$fruits = ["apple", "babana", "mango"];
var_dump($fruits);
echo $fruits[1], "\n"; // banana

$fruits[1] = "Banana";

echo $fruits[1], "\n"; // Banana

foreach($fruits as $fruit){
    echo $fruit, "\n";
}
 // Adding new item with index

 $fruits[4] = "Pineapple";
 var_dump($fruits);

// adding new item at 
// the end of array with 
// array_push()

array_push($fruits, "Orange");
var_dump($fruits);

// adding new item at 
// the Beginning of array with 
// array_shift()

array_unshift($fruits, "Malta");
var_dump($fruits);