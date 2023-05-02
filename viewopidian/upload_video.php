<?php
$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "../Video/" . $filename;



    // Add the image to the "image" folder"

    if (move_uploaded_file($tempname, $folder)) {

        echo $msg = "Image uploaded successfully";
    }
}

echo $video = $filename;
?>

<?php
$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];

    $folder = "../assets/img/" . $filename;



    // Add the image to the "image" folder"

    if (move_uploaded_file($tempname, $folder)) {

        echo $msg = "Image uploaded successfully";
    }
}

echo $image = $filename;
?>


<?php
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

    // echo $youtube_channel_name = ( $_REQUEST['youtube_channel_name']);
    $earnings = 0;
    $views = 0;

    $sql = "INSERT INTO video (video_name,title,status,user_name,category,feature,views,user_phone,keywords,thumbnil,earning,description) VALUES ('$video','$title','$status','$user_name','$category','$feature','$views','$login_session','$keywords','$image','$earnings','$description')";
    if (mysqli_query($conn, $sql)) {
        // echo "Records added successfully.";
        header("Location:videos.php?key=1");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        header("Location:add_video.php");
    }
    ?>

