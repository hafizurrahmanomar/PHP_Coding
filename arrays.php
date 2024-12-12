<?php

// PHP Arrays
// In PHP, there are three types of arrays:

// Indexed arrays - Arrays with a numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays


$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."."<br />";

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars)."<br />";
$fruits = array("Apple", "Banana", "Orange","mango");
echo $fruits[3]."<br/>";

//Loop Through an Indexed Array

$cars = array("Volvo", "BMW", "Toyota");
$arrLength = count($cars);

for($x = 0; $x < $arrLength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
// PHP Associative Arrays

$age = array("Hafiz"=>"35", "Hakim"=>"37", "Joy"=>"43");

echo "Hafiz is " . $age['Hafiz'] . " years old. <br/>";

foreach($age as $x => $y) {
    echo "Key=" . $x . ", Value=" . $y;
    echo "<br>";
}

// PHP - Two-dimensional Arrays

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul> <br/>";
  }

//   PHP - Sort Functions For Arrays

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$carLength = count($cars);
for($x = 0; $x < $carLength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
// sort() - sort arrays in ascending order
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$numLength = count($numbers);
for($x = 0; $x < $numLength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

// rsort() - sort arrays in descending order
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$numLength = count($numbers);
for($x = 0; $x < $numLength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

// ksort() - sort associative arrays in ascending order, according to the key
$age = array("Hanif"=>"35", "Abul"=>"37", "Joy"=>"43");
ksort($age);

foreach($age as $x => $y) {
    echo "Key=" . $x . ", Value=" . $y;
    echo "<br>";
}



?>