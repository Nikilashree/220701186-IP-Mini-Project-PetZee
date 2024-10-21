<?php
session_start();

// Unset all session values
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login.html
header("Location: login.html");
exit();
?>

