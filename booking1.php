<?php

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
$user = $_POST['userodaname'];
$email = $_POST['userodaemail'];
$date = $_POST['reservationdate'];
$time = $_POST['reservationtime'];
$service = $_POST['service'];
if($service=="1"){
    $service="Boarding";
}
elseif($service=="2"){
    $service="Treatment";
}
elseif($service=="3"){
    $service="Grooming";
}
else{
    $service="Training";
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO reservations (user_name, email, reservation_date, reservation_time, service) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $user, $email, $date, $time, $service);

// Execute the query
if ($stmt->execute()) {
    echo "<script>
            alert('Reservation successfully added!');
            window.location.href = 'index.php';
          </script>";
} else {
    echo "<script>
            alert('Error: Could not complete the reservation.');
            window.location.href = 'index.php';
          </script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
