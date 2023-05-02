<?php
$user_name = $_GET['user_name']; ?>
// <script type="text/javascript">
    // if(window.location.hash != '#mobile=off') {
    // if (screen.width <= 1023) {
    // document.location ="mobile/user_video.php?user_name=<?php echo $user_name ?>";
    // }
    // }
    //  
</script>
<?php
$title = $user_name . " Viewopidian || A New Source of Earning Online";
include 'header.php';
?>
<!-- Main Content -->
<div class="main-content">


    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3><a href="videos.php?name=Featured"><?php echo $user_name ?></a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="bootstrap snippet">
                                <section id="portfolio" class="gray-bg padding-top-bottom">
                                    <!-- ======= Portfolio items ===-->
                                    <div class="projects-container scrollimation in">
                                        <div class="row">

                                            <?php
                                            $count = 0;
                                            $sql = "SELECT * FROM video where user_name='$user_name' order by id desc";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    $count++;
                                            ?>
                                                    <article class="col-md-3 col-sm-6 portfolio-item apps">
                                                        <div class="portfolio-thumb in">
                                                            <a href="#" class="main-link">
                                                                <img class="img-responsive img-center" src="assets/img/<?php echo $row['thumbnil'] ?>" alt="Viewopidia" width="100%" height="200">
                                                            </a>
                                                            <a class="link centered" href="video.php?id=<?php echo $row['id'] ?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                                                        </div>
                                                        <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
                                                    </article>
                                                    <?php if ($count % 4 == 0) { ?>
                                                        <script async="async" data-cfasync="false" src="//pl17146998.safestgatetocontent.com/3a9d95a8e666ccdcbd49495c4d4dc747/invoke.js"></script>
                                                        <div id="container-3a9d95a8e666ccdcbd49495c4d4dc747"></div>

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