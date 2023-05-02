<?php $phone = $_GET['phone'] ?>

<!DOCTYPE html>
<html lang="en">


<!-- auth-forgot-password.html  21 Nov 2019 04:05:02 GMT -->

<head>
    <meta charset="UTF-8">
    <!----------------------propeller ads api--------------------------->
    <meta name="propeller" content="c67f32d60e8e9978b1bd32bc99dbf7c3">
    <!----------------------propeller ads api--------------------------->
    <meta name="keywords" content="view, watchvideo,youtube,utube,best porn video, porn video, earning site, best earning site, earn online, earn by video,">
    <meta property="og:title" content="Online Earning || Viewopidia" />
    <meta property="og:type" content="video site" />
    <meta property="og:url" content="https://viewopidia.com/" />
    <meta property="og:description" content="Viewopidia is a online earning site from that general user can earn money by sharing the youtube embeded link and share the viewopidia link user will be paid depending on the views makes on the viewopidia page " />
    <meta property="og:image" content="../assets/img/logo-removebg-preview.png" />
    <meta name="description" content="Viewopidia is a online earning platform. It opens the door of the youtuber for increase their earning. General people can earn by sharing the embeded link form youtube.">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Viewopidia">
    <meta name="title" content="Viewopidia|| Online Earning Platform || Register">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Viewopidia || Online Earning Platform || Forgot_Password</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MTMV0439DP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MTMV0439DP');
    </script>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Forgot Password</h4>
                            </div>
                            <div class="card-body">
                                <!--<p class="text-muted">We will send a link to reset your password</p>-->
                                <form method="POST" action="match_otp.php?phone=<?php echo $phone ?>">
                                    <div class="form-group">
                                        <label for="email">Please Check Your Mail For OTP</label>
                                        <input id="email" type="text" class="form-control" name="otp" tabindex="1" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Forgot Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- auth-forgot-password.html  21 Nov 2019 04:05:02 GMT -->

</html>