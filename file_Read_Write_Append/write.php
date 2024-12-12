<?php

// File name
$filename = "write.txt";

// Data to write
$data = "Hello, this is a test.\nWelcome to PHP file writing.";

// Open the file in write mode (or create it if it doesn't exist)
$file = fopen($filename, "w");

// Check if the file is open
if ($file) {
    // Write data to the file
    fwrite($file, $data);
    echo "Data written successfully!";

    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file.";
}












?>