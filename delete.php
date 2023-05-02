<?php
$servername = "localhost";
$username = "srsomgcd_adminwar";
$password = "123@jAmifree";
$dbname = "srsomgcd_war";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM video WHERE user_phone='01791028673'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
