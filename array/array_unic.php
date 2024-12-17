<?php

$name = ["A", "B", "c", "L", "M", "K", "A", "B"];

$duplicatRemove = array_unique($name);
print_r($duplicatRemove);

// String Convert to array

$string = "Hello World";
$stringToArray = str_split($string);
print_r($stringToArray);

$string = "I love my Bangladesh";

$stringToArray = explode(" ",$string);
print_r($stringToArray);












?>