<?php
//   PHP - Sort Functions For Arrays

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

$cars = ["Volvo", "BMW", "Toyota"];
sort($cars);

$carLength = count($cars);
for ($x = 0; $x < $carLength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
// sort() - sort arrays in ascending order
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$numLength = count($numbers);
for ($x = 0; $x < $numLength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

// rsort() - sort arrays in descending order
$numbers = [4, 6, 2, 22, 11];
rsort($numbers);

$numLength = count($numbers);
for ($x = 0; $x < $numLength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

// ksort() - sort associative arrays in ascending order, according to the key
$age = ["Hanif" => "35", "Abul" => "37", "Joy" => "43"];
ksort($age);

foreach ($age as $x => $y) {
    echo "Key=" . $x . ", Value=" . $y;
    echo "<br>";
}


?>