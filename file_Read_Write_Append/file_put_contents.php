<?php
$filename = "write.txt";
$data = "Quick write using file_put_contents.\n";

if (file_put_contents($filename, $data)) {
    echo "Data written successfully!";
} else {
    echo "Failed to write data.";
}
?>