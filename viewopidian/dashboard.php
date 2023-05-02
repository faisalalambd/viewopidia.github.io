<!-- ############################## Header Section ############################## -->
<?php
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Profile Page
} ?>


<?php include 'header.php' ?>



<section class="section">

    <div class="section-body">

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">

                <div class="card">

                    <div class="card-body">

                        <style>
                            .header_marquee {
                                font-size: 19px;
                                font-weight: bold;
                                padding: 5px 0;
                                clear: both;
                                color: red;
                                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                            }
                        </style>

                        <div class="header_marquee">

                            <marquee>

                                <b>*</b><b>*</b><b>*</b> Viewopidia - A New Way Of Earnings

                                <b>*</b><b>*</b><b>*</b> Viewopidia only contacted via <span style="text-decoration: underline;">+8801795986985</span>

                                <b>*</b><b>*</b><b>*</b> Viewopidia does not require you to deposit money into bKash or other platforms

                                <b>*</b><b>*</b><b>*</b> Please do not do any kind of financial activities without concern of Viewopidia

                            </marquee>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="section">

    <div class="section-body">

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">

                <div class="card">

                    <div class="card-body">

                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <h2 style="text-align: center;">Full Work Procedure in Viewopidia</h2>

                                <a href="" data-sub-html="Demo Description" class="text-center">

                                    <video width="100%" height="400" controls autoplay>
                                        <source src="../Video/viewopidia tutorial.mp4" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>