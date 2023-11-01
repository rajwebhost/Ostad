<?php

// Database connection details
$host = "localhost";
$username = "ostad";
$password = "ostad";
$database = "my_ostad";

// Create a connection to the database
$db = new mysqli($host, $username, $password, $database);

// Check the connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$all_users = $db->query("SELECT * FROM users");
$user_row = $all_users->fetch_assoc();

if (isset($_SESSION['username'])) {
	$user = $_SESSION['username'];
}
if (isset($_SESSION['role'])) {
	$role = $_SESSION['role'];
}
if (isset($_SESSION['uid'])) {
	$uid = $_SESSION['uid'];
}

$refresh = '<meta http-equiv="refresh" content="1"/>';

?>
