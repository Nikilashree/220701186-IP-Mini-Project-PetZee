<?php
session_start();
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petcare";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$user = $_POST['user-id'];
$pass = $_POST['password'];

// Check if username exists
$sql = "SELECT * FROM users WHERE Username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    $_SESSION['username'] = $user;
    if (password_verify($pass, $row['Password'])) {
        // Redirect to home.html if login is successful
        header('Location: index.php');
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that username.";
}

$conn->close();
?>