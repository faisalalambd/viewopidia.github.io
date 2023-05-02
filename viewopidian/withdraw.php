<?php
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Profile Page
}

?>

<?php
include 'session.php';
include '../config.php';

$sql = "SELECT * FROM user  where username='$login_session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $user_name = $row['user_name'];
        $id = $row['id'];
        $withdrawal = $row['withdrawal'];
    }
}
$balance = ($_REQUEST['balance']);

$withdraw = ($_REQUEST['withdraw']);

if ($withdraw > $balance) {
    $text = "you don't Have Sufficient Balance";
    header("Location:withdraw_request.php?text='$text'");
} elseif ($withdraw < 2) {
    $text = "Minimum Withdrawal Balance is $2 USD";
    header("Location:withdraw_request.php?text='$text'");
} else {

    $due = $balance - $withdraw;
    echo $withdrawal = $withdrawal + $withdraw;

    $sql = "UPDATE user SET withdrawal='$withdrawal', due='$due' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $status = "pending";

    $mydate = getdate(date("U"));
    $date = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

    $sql = "INSERT INTO withdraw (user_name,userid,phone,w_balance,status,date) VALUES ('$user_name','$id','$login_session','$withdraw','$status','$date')";
    if (mysqli_query($conn, $sql)) {
        echo "Records added successfully.";
    } else {
        $error = mysqli_error($conn);
        echo "ERROR: Could not able to execute  $error";
    }
    echo $text = "Your Payment Will Process in 24 hours ";
    header("Location:payment_history.php?text='$text'");
}


?>


