<?php
// Recursive Function

function RecursiveCountDown()
{
    static $count = 10;
    echo $count . "<br>";
    if ($count > 0) {
        $count--;
        RecursiveCountDown();
    }
}

RecursiveCountDown();// Call the function to start the countdown.




?>