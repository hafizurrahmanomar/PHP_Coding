<?php 
// This is a single-line comment

# This is also a single-line comment

// Learn PHP:

//This is a multiple-lines comment block
/*
1.PHP is an acronym for "PHP: Hypertext Preprocessor"
2.PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
3.PHP scripts are executed on the server
4.PHP is free to download and use
.5PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.

 */

#What is a PHP File?

 /*

1.PHP files can contain text, HTML, CSS, JavaScript, and PHP code
2.PHP code is executed on the server, and the result is returned to the browser as plain HTML
3.PHP files have extension ".php"

 */

 //Basic PHP Syntax

 /*

 <?php

 PHP code goes here

?>
 */

echo "Alhamdulillah <br/>";

// PHP Case Sensitivity

// In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.

ECHO "Alhamdulillah <br/>";
EcHo "Alhamdulillah <br/>";

//Note: But; all variable names are case-sensitive!

$color = "red";
echo "My car is " . $color . "<br>";
//echo "My house is " . $COLOR . "<br>";
?>

<h1><?php echo "Alhamdulillah";?></h1>


<!-- PHP echo and print Statements
echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

 -->