<?php
// Associative arrays in ascending order, according to the key
$age = ["Hanif" => "35", "Abul" => "37", "Joy" => "43"];

echo $age ["Hanif"];
echo "<br/>";
echo $age ["Abul"];
echo "<br/>";
echo $age["Joy"];
echo "<br/>";

// item add
$age["Nayeem"] = "15";

print_r($age);

// item update

$age["Nayeem"] = "16";

print_r($age);

// item delete

foreach($age as $key=>$value){
    echo "Present $key is $value.<br/>";
    
}


















?>