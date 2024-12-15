<?php
$num_01 = 20;
$num_02 = 10;


// Global Scope
function addTwo(){
    global $num_01, $num_02;
    $sum = $num_01 + $num_02;
    return $sum;
}

$result = addTwo();
echo $result;

echo "<br/>";
// Global Scope
function addThree()
{
    global $num_01, $num_02;
    $sum = $num_01 + $num_02+30;
    echo $sum;
}

echo addThree();
echo "<br/>";
function addArgument($a,$b)
{
   
    $sum = $a + $b;
    return $sum;
}

echo addArgument( 30,40);

?>