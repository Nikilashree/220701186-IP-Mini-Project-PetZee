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
$user = $_POST['username'];
$pass = $_POST['signup-password'];
$email = $_POST['email'];
$pname = $_POST['pet-name'];
$page = $_POST['age'];
$pbreed = $_POST['breed'];
$ph = $_POST['health-info'];
$ptype = $_POST['type'];


// Check if username already exists
$sql = "SELECT * FROM users WHERE Username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Username already exists.";
} else {
    // Hash password for security
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    
    // Insert user into the database
    $sql = "INSERT INTO users (Username, Password, Email, `P-Name`, `P-Age`, `P-Type`, `P-Breed`, `P-Health`) 
        VALUES ('$user', '$hashed_password', '$email', '$pname', '$page', '$ptype', '$pbreed', '$ph')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $user;
        // Redirect to home.html if registration is successful
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>