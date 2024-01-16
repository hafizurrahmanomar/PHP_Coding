<?php

// Function with no returns
 function message(){

    print "Function with no returns <br/>";
 }
message();

// function with arguments

function fullName($firstName,$lastName){
    print $firstName." ".$lastName."<br/>";


}

fullName("Hafizur","Rahman");

// function with default argument value

function myName($myName="Hafizur Rahman Omar"){
    print "Hello mr.".$myName."<br/>";

}

myName();
myName("Toha");


// function with returning value


function Name($firstName,$lastName){
    return $firstName." ".$lastName."<br/>";
}

print Name("Hafizur","Rahman");



// Return type declaration
function number(int $x=0, int $y=0):int{
    return $x+$y;
}
print number()."<br/>";
print number(5,9)."<br/>";
print number(3,8)."<br/>";
print number(7,8)."<br/>";

// function with referenced argument

function referencedArguments(&$addValue){
    $addValue+=5;

}
$countNumber = 20;
referencedArguments($countNumber);

print $countNumber."<br/>";

// Calculator

function calculator($result="add",int $num1,$num2){

    if($result=="add")
    return $num1+$num2;
    elseif($result=="sub")
    return $num1-$num2;
    elseif($result=="mul")
    return $num1*$num2;
    elseif($result=="div")
    return $num1/$num2;

}
print calculator("add" ,10,7)."<br/>";
print calculator("sub" ,5,7)."<br/>";
print calculator("mul" ,5,7)."<br/>";
print calculator("div" ,5,7)."<br/>";

?>
