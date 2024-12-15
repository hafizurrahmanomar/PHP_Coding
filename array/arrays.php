<?php

// PHP Arrays
// In PHP, there are three types of arrays:

// Indexed arrays - Arrays with a numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays


$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."."<br />";

$cars = array("Volvo", "BMW", "Toyota");
// count
echo count($cars)."<br />";
// new way
$fruits = ["Apple", "Banana", "Orange","mango"];
echo $fruits[3]."<br/>";

//Loop Through an Indexed Array

$cars = ["Volvo", "BMW", "Toyota"];
$arrLength = count($cars);
echo $arrLength.'<br/>';

for($x = 0; $x < $arrLength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
// PHP Associative Arrays=>old array way

$age = ["Hafiz"=>"35", "Hakim"=>"37", "Joy"=>"43"];
echo "Hafiz is " . $age['Hafiz'] . " years old. <br/>";

foreach($age as $x => $y) {
    echo "Key=" . $x . ", Value=" . $y;
    echo "<br>";
}

// PHP - Two-dimensional Arrays

$cars = [
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
];

  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul> <br/>";
  }






?>