<?php
$id=$_GET['id'];
include '../config.php';

// sql to delete a record
$sql = "DELETE FROM video WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
$text="Your Video Deleted Successfully";
header("Location:videos.php?key=1");
