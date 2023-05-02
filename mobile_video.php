<?php $id = $_GET['id'];

$ip = $_SERVER['REMOTE_ADDR'];
include_once 'config.php';
$sql = "SELECT * FROM video where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title = $row['title'];
        $image = $row['thumbnil'];
        $key = $row['keywords'];
        $category = $row['category'];
    }
}
?>

<?php include 'header.php' ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row ">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3">
                                    <?php
                                    $sql = "SELECT * FROM video where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $category = $row['category'];
                                            $views = $row['views'];
                                            $channel = $row['youtube_channel_name'];
                                            $user_name = $row['user_name'];
                                            $user_phone = $row['user_phone'];
                                    ?>
                                            <div class="card-content">
                                                <h4><?php echo $row['title'] ?></h4>
                                                <video width="300" height="320" controls autoplay>
                                                    <source src="Video/<?php echo $row['video_name'] ?>" type="video/mp4">
                                                    <source src="movie.ogg" type="video/ogg">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                            <h6 Style="text-align:left;margin-top:15px">Views : <?php echo $views ?></h6>
                                            <h4 Style="text-align:left">Posted By :<a href="user_video.php?user_name=<?php echo $row['user_name'] ?>"> <?php echo $row['user_name'] ?></a></h4>


                                            <?php
                                            //Earning Calculation
                                            if ($views > 50) {
                                                $earning_view = $views - 50;
                                                $earning = 1 / 1300;
                                                $your_earning = $earning_view * $earning;
                                            } else {
                                                $your_earning = 0;
                                            }
                                            $sql = "UPDATE video SET earning='$your_earning' where id=$id";

                                            if ($conn->query($sql) === TRUE) {
                                                // echo "Record updated successfully";
                                            } else {
                                                // echo "Error updating record: " . $conn->error;
                                            }

                                            //Earning Calculation
                                            ?>

                                            <div class="text-center">
                                                <script type="text/javascript">
                                                    atOptions = {
                                                        'key': 'bdf97bd4a94d30a0f2467bb36efbb3ea',
                                                        'format': 'iframe',
                                                        'height': 90,
                                                        'width': 728,
                                                        'params': {}
                                                    };
                                                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplayformats.com/bdf97bd4a94d30a0f2467bb36efbb3ea/invoke.js"></scr' + 'ipt>');
                                                </script>
                                            </div>
                                            <div>
                                                <h4 class="text-left mt-15px">Description :</h4>
                                                <p style="text-align: justify;"><?php echo $row['description'] ?></p>
                                            </div>
                                </div>
                        <?php }
                                    } ?>

                        <?php
                        $keys = 0;
                        $sql = "SELECT * FROM views_ip where video_id=$id";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                //   echo $row['user_ip'];
                                if ($ip == $row['user_ip']) {
                                    echo $keys = 1;
                                }
                            }
                        }
                        if ($keys == 0) {
                            $views++;
                            $sql = "UPDATE video SET views='$views' WHERE id=$id";

                            if ($conn->query($sql) === TRUE) {
                                //   echo "Record updated successfully";
                            } else {
                                //   echo "Error updating record: " . $conn->error;
                            }
                        }


                        ?>
                            </div>
                        </div>
                    </div>
                </div>




                <section class="section">
                    <div class="row ">
                        <style>
                            h6 {
                                width: 150px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                white-space: nowrap;
                            }
                        </style>

                        <?php
                        $sql = "SELECT * FROM video where user_phone='$user_phone' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $category = $row['category'];
                                $views = $row['views'];
                                $channel = $row['youtube_channel_name'];
                                $user_name = $row['user_name'];
                                $user_phone = $row['user_phone'];
                        ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="card">
                                        <div class="card-statistic-4">
                                            <div class="align-items-center justify-content-between">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3">
                                                        <article class="col-md-12 col-sm-12 col-xs-12 portfolio-item apps">
                                                            <div class="portfolio-thumb in">
                                                                <a href="video.php?id=<?php echo $row['id'] ?>" class="main-link">
                                                                    <img class="img-responsive img-center" src="assets/img/<?php echo $row['thumbnil'] ?>" alt="Viewopidia" width="100%" height="150">
                                                                </a>
                                                                <a class="link centered" href="video.php?id=<?php echo $row['id'] ?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                                                            </div>
                                                            <h6 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h6>
                                                        </article>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>


                    </div>




                </section>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <?php
                                $count = 0;
                                $sql = "SELECT * FROM video where id!=$id order by id Desc Limit 15";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $category = $row['category'];
                                        $views = $row['views'];
                                        $channel = $row['youtube_channel_name'];
                                        $user_name = $row['user_name'];
                                        $user_phone = $row['user_phone'];
                                        $count++
                                ?>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3">
                                            <div class="card-content">
                                                <article class="col-md-12 col-sm-12 col-xs-12 portfolio-item apps">
                                                    <div class="portfolio-thumb in">
                                                        <a href="video.php?id=<?php echo $row['id'] ?>" class="main-link">
                                                            <img class="img-responsive img-center" src="assets/img/<?php echo $row['thumbnil'] ?>" alt="Viewopidia" width="100%" height="150">
                                                        </a>
                                                        <a class="link centered" href="video.php?id=<?php echo $row['id'] ?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                                                    </div>
                                                    <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
                                                </article>
                                            </div>
                                        </div>
                                        <?php if ($count % 4 == 0) { ?>
                                            <div style="text-align:center">
                                                <script type="text/javascript" class="text-center">
                                                    atOptions = {
                                                        'key': '4449f032121570968ce8c023373ac7a6',
                                                        'format': 'iframe',
                                                        'height': 300,
                                                        'width': 160,
                                                        'params': {}
                                                    };
                                                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplayformats.com/4449f032121570968ce8c023373ac7a6/invoke.js"></scr' + 'ipt>');
                                                </script>
                                            </div>
                                        <?php } ?>
                                <?php }
                                } ?>

                                <?php

                                echo $ip;
                                $sql = "INSERT INTO views_ip (user_ip,video_id) VALUES ('$ip','$id')";
                                if (mysqli_query($conn, $sql)) {
                                    //echo "Records added successfully.";
                                } else {
                                    $error = mysqli_error($conn);
                                    //echo "ERROR: Could not able to execute  $error" ;
                                }


                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </section>


</div>
<? include 'footer.php' ?>