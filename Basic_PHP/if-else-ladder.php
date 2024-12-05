<?php


// if else ladder
$marks = 90;

if($marks<=100 && $marks>80){
    echo "Grade: A+";
}
 else if ($marks<80 && $marks>=70) {
    echo "Grade: A";
} else if ($marks < 70 && $marks >= 60) {
    echo "Grade: A-";
} else if ($marks < 60 && $marks >= 50) {
    echo "Grade: B";
} else if ($marks < 50 && $marks >= 40) {
    echo "Grade: c";
} else if ($marks < 40 && $marks >= 33) {
    echo "Grade: D";
}

else {
    echo "Grade: F";
}


// if else ladder same switch catch

$marks = 60;
// switch (true) 
switch ($marks) {
    case ($marks<=100 && $marks>80):
        echo "Grade: A+";
        break;
    case ($marks<80 && $marks>=70):
        echo "Grade: A";
        break;
    case ($marks < 70 && $marks>=60):
        echo "Grade: A-";
        break;
    case ($marks < 60 && $marks>=50):
        echo "Grade: B";
        break;
    case ($marks < 50 && $marks>=40):
        echo "Grade: C";
        break;
    case ($marks < 40 && $marks>=33):
        echo "Grade: D";
        break;
    default:
        echo "Grade: F";
        break;
}