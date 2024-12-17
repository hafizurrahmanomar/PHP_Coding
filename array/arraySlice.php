<?php
// Array Merge
$fruits = ["Apple", "Orange", "Banana", "Mango"];
$new_fruits = ["Grapes", "Watermelon"];
$allFruits = array_merge($fruits,$new_fruits);
print_r ($allFruits);


$student = ["Hafiz", "karim", "Kalam","Jaber"];

$teacher = ["Mahmoud", "Jamal", "Hafiz", "karim","Rohim"];

$CommonName = array_intersect($student,$teacher);
print_r($CommonName);

$unicStudentName = array_diff($student, $teacher);
print_r($unicName);

$unicTeacherName=array_diff($teacher,$student);
print_r($unicTeacherName);







?>