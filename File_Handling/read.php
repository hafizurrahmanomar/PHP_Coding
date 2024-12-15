<?php


// Example 1: Reading the Entire File with file_get_contents
/*
$filename = "read.txt";

// Read file contents
$content = file_get_contents($filename);

if ($content !== false) {
    echo "File Content:\n";
    echo $content;
} else {
    echo "Failed to read the file.";
}
*/

// Example 2: Reading Line by Line with fgets
/*

$filename = "read.txt";

// Open the file for reading
$file = fopen($filename, "r");

if ($file) {
    echo "File Content:\n";
    while (($line = fgets($file)) !== false) {
        echo $line; // Output each line
    }
    fclose($file); // Close the file
} else {
    echo "Failed to open the file.";
}

*/


// Example 3: Reading the Entire File into an Array with file


/*
$filename = "read.txt";

// Read file into an array
$lines = file($filename);

if ($lines !== false) {
    echo "File Content:\n";
    foreach ($lines as $line) {
        echo $line;
    }
} else {
    echo "Failed to read the file.";
}

*/

// xample 4: Reading JSON Data from a File


/*
$filename = "user_data.json";

// Read JSON data
$jsonContent = file_get_contents($filename);

if ($jsonContent !== false) {
    // Decode JSON to an associative array
    $data = json_decode($jsonContent, true);
    echo "JSON Data:\n";
    print_r($data);
} else {
    echo "Failed to read the JSON file.";
}
    
*/

//Best Example 6: Checking File Existence Before Reading

$filename = "read.txt";

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "File Content:\n$content";
} else {
    echo "File does not exist.";
}









?>