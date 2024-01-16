<?php

echo "Hafizur Rahman Omar <br />";

//In PHP, a variable starts with the $ sign.
// A variable name must start with a letter or the underscore character
// A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// Variable names are case-sensitive ($age and $AGE are two different variables)
//Think of variables as containers for storing data.

$first_name = "Hafizur Rahman";
$last_name ="Rahman";

echo $first_name." ".$last_name."<br />";
print $first_name." ".$last_name."<br />";

$x = 7;
$y = 23;

echo $x." ".$y."<br />";
echo $x+$y."<br />";


//PHP has three different variable scopes:

    #local
    #global
    #static

    $num = 5; // global scope

    function myTest() {
      // using x inside this function will generate an error
      // echo $num;
    }

    myTest();
    
    echo "<p>Variable x outside function is: $num</p>";

 

    function myTestLocal() {

        $num1 = 15;  // local scope
        echo "<p>Variable x inside function is: $num1</p>";
      
    }

    myTestLocal();
    
// using x outside the function will generate an error
//echo "<p>Variable x outside function is: $num1</p>";


 #Note=========================
// The global keyword is used to access a global variable from within a function.

// To do this, use the global keyword before the variables (inside the function):

$x = 15;
$y = 10;

function Test() {
  global $x, $y;
  $y = $x + $y;
}

Test();
echo $y; // outputs 25

//PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
$a = 5;
$b = 10;

function globalTest() {
  $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}

globalTest();
echo $c; // outputs 15



#static variable

function staticTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  staticTest();
  echo "<br>";
  staticTest();
  echo "<br>";
  staticTest();

//array print
$animals = array("Cow","cat","Dog","goat");

print_r($animals);



?>