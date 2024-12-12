<?php
// PHP Data Types
/*
Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

=>String
=>Integer
=>Float (floating point numbers - also called double)
=>Boolean
=>Array
=>Object
=>NULL
=>Resource
*/


//PHP String: A string is a sequence of characters, like "Hello world!".

$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";
//PHP Integer:

// An integer must have at least one digit
// An integer must not have a decimal point
// An integer can be either positive or negative
// Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
// In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

// Example:

$x = 85;
var_dump($x);
echo "<br>";

// PHP Float
// A float (floating point number) is a number with a decimal point or a number in exponential form.
// Example:
$x = 10.365;
var_dump($x);
echo "<br>";

// PHP Boolean
//A Boolean represents two possible states: TRUE or FALSE.
$x = true;
var_dump($x);
echo "<br>";
$y = false;
var_dump($y);
echo "<br>";

// PHP Array
// An array stores multiple values in one single variable.

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

// PHP Object

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " and model " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
  echo "<br>";
 
//   PHP NULL Value

$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>";

?>