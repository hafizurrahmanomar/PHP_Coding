<?php 
// php Array
$person = [
"name"=>"John",
"age"=>30,
"street"=>"123 Main St",
"city"=>"New York",
"state"=>"NY",
"hobbies"=>['Football',"cricket","Ha-du-du"]
];
//php Array convert to jason
$arrayToJson = json_encode($person,JSON_PRETTY_PRINT);
echo $arrayToJson;
// output-> Person.jason file create and jason data input this file
file_put_contents("json_01.json", $arrayToJson);