<?php

// -- 1. Parse Error: Syntax Error
// -- Cause: Missing or incorrect syntax, such as missing a semicolon or mismatched parentheses.
/*
echo "Hello, World" // Missing semicolon

*/

echo "Hello, World <br/>"; // Corrected with a semicolon

// -- 2. Fatal Error: Undefined Function
// -- Cause: Calling a function that doesn’t exist.

/*
myFunction();

*/

function myFunction()
{
    echo "Function is defined! <br/>";
}
myFunction(); // Call the defined function


// --3. Fatal error: Uncaught DivisionByZero Error => Warning: Division by Zero
// --Cause: Attempting to divide a number by zero.

/*
echo 10 / 0;

*/


$divisor = 10;
if ($divisor != 0) {
    echo 10 / $divisor;
} else {
    echo "Cannot divide by zero.";
}
echo "<br/>";
// --4. Notice: Undefined Variable
// --Cause: Using a variable without initializing it.
/*
echo $name;

*/

$name = "Hafiz <br/>";
echo $name;


// --5. Fatal Error: Maximum Execution Time Exceeded
// --Cause: Script takes too long to execute (e.g., infinite loop).

/*
while (true) {
    echo "Infinite loop!";
}

*/

set_time_limit(10); // Increase execution time if needed
for ($i = 0; $i < 10; $i++) {
    echo "Loop: $i <br/>";
}



// --6. Warning: File Not Found
// --Cause: Trying to include or open a file that doesn’t exist.

/*
include 'myfile.php';
*/

// -- file not found
$filename = 'file.php';
if (file_exists($filename)) {
    include $filename;
} else {
    echo "File not found.";
}

echo "<br/>";
// -- file  found
$filename = 'intro.php';
if (file_exists($filename)) {
    include $filename;
} else {
    echo "File not found.";
}


// --7. Fatal Error: Call to a Member Function on Null
// --Cause: Trying to access a method on an uninitialized or null object.

/*
$object = null;
$object->method();
*/

echo "<br/>";
class MyClass
{
    public function method()
    {
        echo "Method called!";
    }
}
$object = new MyClass();
$object->method();

echo "<br/>";

// --8. Notice: Array Offset Undefined
// --Cause: Accessing an array element that doesn’t exist.

/*
$arr = [1, 2, 3];
echo $arr[3];
*/

$arr = [1, 2, 3];
if (isset($arr[5])) {
    echo $arr[5];
} else {
    echo "Array offset does not exist.";
}

echo "<br/>";


// --9. Warning: Headers Already Sent
// -- Cause: Sending output before modifying headers (e.g., header() or setcookie()).


/*
echo "Hello!";
header("Location: example.com");

*/

// header("Location: example.com");
// exit;


// --10. Error: Class Not Found
// --Cause: Trying to instantiate a class that hasn’t been included or defined.
/*
$obj = new MyClass();
*/

class newClass
{
    public function __construct()
    {
        echo "Class instantiated!";
    }
}
$obj = new newClass();

echo "<br/>";

// 1-Error Handling with error.log
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

try {
    echo divide(10, 2) . "<br>"; // Successful division
    echo divide(10, 0)."<br>"; // Will throw an exception
} catch (Exception $e) {
    // echo "Error: " . $e->getMessage();
    error_log($e->getMessage(),3,"error.log"); 
    // Log the error to error.log file
    echo "Please Try Again";
}


echo "<br/>";

// 1-Error Handling 
function myDivide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

try {
    echo divide(10, 2) . "<br>"; // Successful division
    echo divide(10, 0); // Will throw an exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    
}

echo "<br/>";



?>