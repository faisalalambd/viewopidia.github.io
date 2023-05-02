<?php 
 $phone = ( $_REQUEST['phone']);

 $num=(rand(100000,999999));
include '../config.php';

$sql = "UPDATE user SET otp='$num' WHERE username='$phone'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


$sql = "SELECT * FROM user where username='$phone'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $email=$row['email'];  
  }}
  
  // the message
$msg = "Your Recovery code is ".$num;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("$email","recovery code",$msg);
header("Location:get_otp.php?phone=$phone");
