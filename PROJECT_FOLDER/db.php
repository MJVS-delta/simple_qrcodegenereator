<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "studentdb";

try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally, set the charset
    $conn->exec("set names utf8");

    // Connection successful message (optional)
    // echo "Connected successfully"; 
} catch (PDOException $e) {
    // If connection fails, display an error message
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?>
