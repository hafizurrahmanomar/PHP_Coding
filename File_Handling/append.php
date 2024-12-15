<?php

// Example 1: Appending Data Using fopen and fwrite

$filename = "write.txt";

/*
$data = "This is appended new data.\n";

// Open the file in append mode
$file = fopen($filename, "a");

if ($file) {
    // Write data to the file
    fwrite($file, $data);
    echo "Data appended successfully!";

    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file.";
}

*/
// Example 2: Appending Data Using file_put_contents


/*
$data = "This is another appended line.\n";

// Append data to the file
if (file_put_contents($filename, $data, FILE_APPEND)) {
    echo "Data appended successfully!";
} else {
    echo "Failed to append data.";
}


*/

// Example 3: Appending Array Data to a File


/*
$data = [
    "Line 1: This is a new entry.",
    "Line 2: Appending more data.",
    "Line 3: End of appended data."
];

// Open the file in append mode
$file = fopen($filename, "a");

if ($file) {
    foreach ($data as $line) {
        fwrite($file, $line . "\n"); // Add a new line after each array element
    }
    echo "Array data appended successfully!";
    fclose($file);
} else {
    echo "Failed to open the file.";
}
*/


/*
$_filename = "user_data.json";
$newData = ["username" => "JohnDoe", "Password" => "123example"];

// Convert new data to JSON
$jsonString = json_encode($newData,true) . "\n";

// Append JSON data to the file
if (file_put_contents($_filename, $jsonString, FILE_APPEND)) {
    echo "JSON data appended successfully!";
} else {
    echo "Failed to append JSON data.";
}

*/



$data = "Appending only if the file exists.\n";

if (file_exists($filename)) {
    if (file_put_contents($filename, $data, FILE_APPEND)) {
        echo "Data appended successfully!";
    } else {
        echo "Failed to append data.";
    }
} else {
    echo "File does not exist.";
}









?>