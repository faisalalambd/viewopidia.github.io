<?php

$servername     = "localhost";
$username       = "viewcqmr_admin";
$password       = "123@jAmifree";
$db             = "viewcqmr_viewopidia";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// echo "connected";
// Check connection
if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
} 

// echo 'website maintance is running';
