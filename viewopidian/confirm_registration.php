<?php
include '../config.php';
$user_name = ($_REQUEST['user_name']);

$username = ($_REQUEST['username']);

$email = ($_REQUEST['email']);

$password = ($_REQUEST['password']);

$country = ($_REQUEST['country']);

$city = ($_REQUEST['city']);


$sql = "INSERT INTO user (user_name,username,email,password,country,city) VALUES ('$user_name','$username','$email','$password','$country','$city')";
if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>

<?php
if ($error != "") {
    echo $text = "You Have An Account !! Please Login";
} else {
    echo $text = "Registration Successful !! Please Login ";
}

header("Location:index.php?text='$text'");

// /* Redirect browser */

// exit();
?>