<?php

// Write an Array to a File
// You can write array content to a file, converting it to a string format.

$filename = "array_data.txt";
$data = ["Name: Hafiz", "Role: Developer", "Skills: PHP, JavaScript"];

// Open the file in write mode
$file = fopen($filename, "w");

if ($file) {
    foreach ($data as $line) {
        fwrite($file, $line . "\n");
    }
    echo "Array data written successfully!";
    fclose($file);
} else {
    echo "Failed to open the file.";
}
?>