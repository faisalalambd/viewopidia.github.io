<?php
include('login.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
    header("location: dashboard.php"); // Redirecting To Profile Page
}
$text = $_GET['text'];
?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">

    <meta name="keywords" content="view, watchvideo,youtube,utube,best porn video, porn video, earning site, best earning site, earn online, earn by video,">
    <meta property="og:title" content="Online Earning || Viewopidia" />
    <meta property="og:type" content="video site" />
    <meta property="og:url" content="https://viewopidia.com/" />
    <meta property="og:description" content="Viewopidia is a online earning site from that general user can earn money by sharing the youtube embeded link and share the viewopidia link user will be paid depending on the views makes on the viewopidia page " />
    <meta property="og:image" content="../assets/img/logo-removebg-preview.png" />
    <meta name="description" content="Viewopidia is a online earning platform. It opens the door of the youtuber for increase their earning. General people can earn by sharing the embeded link form youtube.">
    <!--<meta name="keywords" content="HTML, CSS, JavaScript">-->
    <meta name="author" content="Viewopidia">
    <meta name="title" content="Viewopidia|| Online Earning Platform || Register">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login || Viewopidia User</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
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
    <!--<div class="loader"></div>-->

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">





                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4><?php if ($text == " ") {
                                        $text = "Login";
                                    } ?></h4><br>
                                <h4><?php echo $text ?></h4>

                            </div>

                            <div class="card-body">

                                <form method="POST" action="#" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email">Phone Number</label>
                                        <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please enter your phone number
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" name="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="forgot-password.php" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="submit" class="btn btn-primary btn-lg btn-block" type="submit" value="Log In">

                                    </div>

                                </form>



                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="register.php">Create One</a>
                        </div>

                    </div>
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-1 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <script type="text/javascript">
                            atOptions = {
                                'key': 'bdf97bd4a94d30a0f2467bb36efbb3ea',
                                'format': 'iframe',
                                'height': 90,
                                'width': 1728,
                                'params': {}
                            };
                            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplayformats.com/bdf97bd4a94d30a0f2467bb36efbb3ea/invoke.js"></scr' + 'ipt>');
                        </script>


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


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>