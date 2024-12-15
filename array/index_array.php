<?php
// index array
$fruits = ["Apple", "Banana", "Orange", "mango"];

print_r ($fruits);
// Array Data Add Essay Way=> add to last index

$fruits[] = "Grapes";
print_r($fruits);

// Array Data Add Essay Way=> add to first index
array_unshift($fruits, "Strawberry");

print_r($fruits);

array_push($fruits, "Pineapple");
print_r($fruits);

// array_pop => data delete to last index

$lastItem=array_pop($fruits);

print_r(value: $lastItem);

print_r($fruits);

// array_shift => data delete to first index

$firstItem=array_shift($fruits);

print_r(value: $firstItem);

print_r($fruits);



?>