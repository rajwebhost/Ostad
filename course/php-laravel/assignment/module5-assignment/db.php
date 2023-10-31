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

$query = $db->query("SELECT * FROM users");
$row = $query->fetch_assoc();

?>
