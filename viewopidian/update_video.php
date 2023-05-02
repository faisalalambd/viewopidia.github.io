<?php
$id = $_GET['id'];
include('session.php');
include '../config.php';
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Home Page
}
?>
	<?php
    $sql = "SELECT * FROM user where username='$login_session' order by id desc";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $user_name = $row['user_name'];
        }
    }


    $keywords = ($_REQUEST['Keywords']);

    // echo $link = ( $_REQUEST['link']);

    echo $title = ($_REQUEST['title']);

    $description = ($_REQUEST['description']);

    // echo $sources = "youtube";

    echo $status = "video";

    echo $category = ($_REQUEST['category']);

    echo $feature = ($_REQUEST['feature']);

    $sql = "UPDATE video SET title='$title', category='$category', feature='$feature', keywords='$keywords' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location:edit_video.php?id=$id");
    } else {
        echo "Error updating record: " . $conn->error;
    }


    ?>