// <script type="text/javascript">
    // if(window.location.hash != '#mobile=off') {
    // if (screen.width <= 1023) {
    // document.location ="mobile";
    // }
    // }
    //  
</script>
<?php $title = "Viewopidia || A New Source of Earning Online ";
include_once 'config.php';
$sql = "SELECT * FROM video";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {


        $key = $row['keywords'];
        $category = $row['category'];
    }
}
?>

<?php include 'header.php';
?>


<!-- Main Content -->
<div class="main-content" style="padding-top: 4rem;">

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 style="text-align: center; text-decoration: underline;"><strong>24th Ramadan Timing 2022</strong></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="bootstrap snippet">
                                <section id="portfolio" class="gray-bg padding-top-bottom">
                                    <!-- ======= Portfolio items ===-->
                                    <div class="projects-container scrollimation in">
                                        <div class="row">

                                            <article class="col-md-6 col-sm-6 col-xs-6 portfolio-item apps">
                                                <div class="portfolio-thumb in">
                                                    <div style="text-align: center;">
                                                        <img class="img-responsive img-center" src="assets/img/SEHRI.jpg" alt="SEHRI" width="50%" height="70%">
                                                    </div>
                                                    <div style="text-align: center; margin: 1rem 0 0.5rem 0;">
                                                        <h6 style="width: 100%;">SEHRI <br> 04:04 AM</h6>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="col-md-6 col-sm-6 col-xs-6 portfolio-item apps">
                                                <div class="portfolio-thumb in">
                                                    <div style="text-align: center;">
                                                        <img class="img-responsive img-center" src="assets/img/IFTAR.jpg" alt="IFTAR" width="50%" height="70%">
                                                    </div>
                                                    <div style="text-align: center; margin: 1rem 0 0.5rem 0;">
                                                        <h6 style="width: 100%;">IFTAR <br> 6:29 PM</h6>
                                                    </div>
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3><a href="videos.php?name=Featured">Special Videos</a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="bootstrap snippet">
                                <section id="portfolio" class="gray-bg padding-top-bottom">
                                    <!-- ======= Portfolio items ===-->
                                    <div class="projects-container scrollimation in">
                                        <div class="row">
                                            <style>
                                                h5 {
                                                    /*width: 150px;*/
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    white-space: nowrap;
                                                }
                                            </style>

                                            <?php
                                            $sql = "SELECT * FROM video where feature='special' order by id desc Limit 4";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                                    <article class="col-md-3 col-sm-6 col-xs-6 portfolio-item apps">
                                                        <div class="portfolio-thumb in">
                                                            <a href="video.php?id=<?php echo $row['id'] ?>" class="main-link">
                                                                <img class="img-responsive img-center" src="assets/img/<?php echo $row['thumbnil'] ?>" alt="Viewopidia" width="100%" height="200">
                                                            </a>
                                                            <a class="link centered" href="video.php?id=<?php echo $row['id'] ?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                                                        </div>
                                                        <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
                                                    </article>
                                            <?php }
                                            } ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3><a href="new_videos.php ">New Videos</a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="bootstrap snippet">
                                <section id="portfolio" class="gray-bg padding-top-bottom">
                                    <!-- ======= Portfolio items ===-->
                                    <div class="projects-container scrollimation in">
                                        <div class="row">

                                            <?php
                                            $sql = "SELECT * FROM video order by id desc Limit 8";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                                    <article class="col-md-3 col-sm-6 col-xs-6 portfolio-item apps">
                                                        <div class="portfolio-thumb in">
                                                            <a href="video.php?id=<?php echo $row['id'] ?>" class="main-link">
                                                                <img class="img-responsive img-center" src="assets/img/<?php echo $row['thumbnil'] ?>" alt="Viewopidia" width="100%" height="200">
                                                            </a>
                                                            <a class="link centered" href="video.php?id=<?php echo $row['id'] ?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                                                        </div>
                                                        <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
                                                    </article>
                                            <?php }
                                            } ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <script async="async" data-cfasync="false" src="//pl17146998.safestgatetocontent.com/3a9d95a8e666ccdcbd49495c4d4dc747/invoke.js"></script>
    <div id="container-3a9d95a8e666ccdcbd49495c4d4dc747"></div>

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3><a href="videos.php?name=Featured">Featured Videos</a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="bootstrap snippet">
                                <section id="portfolio" class="gray-bg padding-top-bottom">
                                    <!-- ======= Portfolio items ===-->
                                    <div class="projects-container scrollimation in">
                                        <div class="row">

                                            <?php
                                            $sql = "SELECT * FROM video where feature='featured' order by id desc Limit 8";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                                    <article class="col-md-3 col-sm-6 col-xs-6 portfolio-item apps">
                                                        <div class="portfolio-thumb in">
                                                            <a href="video.php?id=<?php echo $row['id'] ?>" class="main-link">
                                                                <img class="img-responsive img-center" src="assets/img/<?php echo $row['thumbnil'] ?>" alt="Viewopidia" width="100%" height="200">
                                                            </a>
                                                            <a class="link centered" href="video.php?id=<?php echo $row['id'] ?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                                                        </div>
                                                        <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
                                                    </article>
                                            <?php }
                                            } ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3><a href="videos.php?name=Featured">Most Viewed Videos</a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="bootstrap snippet">
                                <section id="portfolio" class="gray-bg padding-top-bottom">
                                    <!-- ======= Portfolio items ===-->
                                    <div class="projects-container scrollimation in">
                                        <div class="row">

                                            <?php
                                            $count = 0;
                                            $sql = "SELECT * FROM video where category!='adult' order by views desc Limit 20";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    $count++;
                                            ?>
                                                    <article class="col-md-3 col-sm-6 col-xs-6 portfolio-item apps">
                                                        <div class="portfolio-thumb in">
                                                            <a href="video.php?id=<?php echo $row['id'] ?>" class="main-link">
                                                                <img class="img-responsive img-center" src="assets/img/<?php echo $row['thumbnil'] ?>" alt="Viewopidia" width="100%" height="200">
                                                            </a>
                                                            <a class="link centered" href="video.php?id=<?php echo $row['id'] ?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                                                        </div>
                                                        <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
                                                    </article>
                                                    <?php if ($count % 2 == 0) { ?>
                                                        <div>
                                                            <script async="async" data-cfasync="false" src="//trinitywishful.com/3a9d95a8e666ccdcbd49495c4d4dc747/invoke.js"></script>
                                                            <div id="container-3a9d95a8e666ccdcbd49495c4d4dc747">
                                                            </div>
                                                        </div>
                                            <?php }
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
<?php include 'footer.php' ?>