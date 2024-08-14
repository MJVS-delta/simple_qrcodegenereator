<?php
require_once('db.php'); // Include the database configuration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $studentID = $_POST['studentID'];
    $course = $_POST['course'];
    $yearLevel = $_POST['yearLevel'];

    // Validate input (basic example)
    if (empty($fullName) || empty($studentID) || empty($course) || empty($yearLevel)) {
        echo "All fields are required.";
        exit();
    }

    // Prepare SQL statement
    $sql = "INSERT INTO tblsignup (fullName, studentID, course, yearLevel) VALUES (:fullName, :studentID, :course, :yearLevel)";
    
    try {
        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fullName', $fullName);
        $stmt->bindParam(':studentID', $studentID);
        $stmt->bindParam(':course', $course);
        $stmt->bindParam(':yearLevel', $yearLevel);
        $stmt->execute();
        
        // Optionally, redirect to a success page or display a success message
        echo "Record inserted successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
