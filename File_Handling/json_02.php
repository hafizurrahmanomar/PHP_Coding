<?php
// --Json data Read
$jsonData = file_get_contents("json_01.json");
// --no json array but convert to php object
$person = json_decode($jsonData);
// var_dump($person);
// //--run
// echo $person -> name;
// //not run
// echo $person['name'];
print_r($person);

// --json convert to php object cause add true
$person = json_decode($jsonData,true);
// var_dump($person);
// // -- not run
// echo $person->name;
// //--run
// echo $person['name'];
print_r($person);















?>