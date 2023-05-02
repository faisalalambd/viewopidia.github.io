<?php
$name = $_GET['name']; ?>
// <script type="text/javascript">
    // if(window.location.hash != '#mobile=off') {
    // if (screen.width <= 1023) {
    // document.location ="mobile/videos.php?name=<?php echo $name ?>";
    // }
    // }
</script>
<?php
$title = $name . "  || Viewopidia  A New Source of Earning Online";
include 'header.php' ?>
<!-- Main Content -->
<div class="main-content">



    <section class="section">
        <div class="section-body">
            <div class="row">



                <?php
                $count = 0;
                $sql = "SELECT * FROM video where ((feature='$name')|(category like '%$name%')) order by id desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $count++;
                ?>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="bootstrap snippet">
                                        <section id="portfolio" class="gray-bg padding-top-bottom">
                                            <!-- ======= Portfolio items ===-->
                                            <div class="projects-container scrollimation in">

                                                <div class="row">
                                                    <article class="col-md-3 col-sm-6 portfolio-item apps">
                                                        <div class="portfolio-thumb in">
                                                            <a href="#" class="main-link">
                                                                <img class="img-responsive img-center" src="assets/img/<?php echo $row['thumbnil'] ?>" alt="Viewopidia" width="100%" height="200">
                                                            </a>
                                                            <a class="link centered" href="video.php?id=<?php echo $row['id'] ?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                                                        </div>

                                                    </article>

                                                    <article class="col-md-8 col-sm-6 portfolio-item apps">


                                                        <h4 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h4>
                                                        <h5 Style="text-align:left"> <a href="channel.php?youtube_channel_name=<?php echo $row['youtube_channel_name'] ?>">Credit : <?php echo $row['youtube_channel_name'] ?></a></h5>
                                                        <h5 Style="text-align:left"><a href="user_video.php?user_name=<?php echo $row['user_name'] ?>">Posted By: <?php echo $row['user_name'] ?></a></h5>
                                                    </article>
                                                </div>


                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($count % 3 == 0) { ?>
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
                <?php }
                    }
                } ?>

            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>