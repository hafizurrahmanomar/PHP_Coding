<?php

$filename = "user_data.json";
$data = [
    "username" => "Hafiz",
    "password" => "pass123",
    "email" => "hafiz@example.com"
];

// Convert array to JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Write JSON to file
if (file_put_contents($filename, $jsonData)) {
    echo "JSON data written successfully!";
} else {
    echo "Failed to write JSON data.";
}

?>