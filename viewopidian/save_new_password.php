<?php echo $phone=$_GET['phone'];
 echo $new_password = ( $_REQUEST['new_password']);
// echo $c_password = ( $_REQUEST['c_password']);
include '../config.php';

$sql = "UPDATE user SET password='$new_password' WHERE username='$phone'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  $text="Password Reset Complete!!Please Login";
header("Location:index.php?text=$text");
} else {
  echo "Error updating record: " . $conn->error;
}
