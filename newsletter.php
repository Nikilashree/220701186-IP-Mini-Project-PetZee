<?php
session_start();
// Database connection
$servername = "localhost";
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "petcare"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$user = $_POST['newsuser'];
$email = $_POST['newsemail'];




    // Hash password for security
    
    // Insert user into the database
    $sql = "INSERT INTO subscribers (name,email) 
        VALUES ('$user', '$email')";
    
    if ($conn->query($sql) === TRUE) {  
        // Redirect to home.html if registration is successful
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


$conn->close();
?>