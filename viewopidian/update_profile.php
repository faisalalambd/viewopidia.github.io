<?php
include 'session.php';
echo $id=$_GET['id'];

  echo $user_name = ( $_REQUEST['user_name']);
  
//   echo $username = ( $_REQUEST['username']);
  
  echo $email = ( $_REQUEST['email']);
  
    echo $method = ( $_REQUEST['method']);
    echo $address = ( $_REQUEST['address']);
  
//   echo $password = ( $_REQUEST['password']);
  
  echo $country = ( $_REQUEST['country']);
  
  echo $city = ( $_REQUEST['city']);
  include '../config.php';
  $sql = "UPDATE user SET user_name='$user_name', email='$email',country='$country',city='$city', payment_method='$method', payment_address='$address' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE video SET user_name='$user_name' WHERE user_phone='$login_session'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$text="your profile updated successfully";
 header("Location:edit_profile.php?text='$text'");
