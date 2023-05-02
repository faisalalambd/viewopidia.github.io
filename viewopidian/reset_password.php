<?php $phone = $_GET['phone'] ?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Reset Password|| Viewopidia User</title>
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
                                <form method="POST" action="save_new_password.php?phone=<?php echo $phone ?>" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email">New Password</label>
                                        <input id="email" type="password" class="form-control" name="new_password" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please enter your phone number
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" name="password" class="control-label">Confirm New Password</label>
                                            <div class="float-right">

                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="c_password" tabindex="2" required>

                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">
                                        <input name="submit" class="btn btn-primary btn-lg btn-block" type="submit" value="Reset Password">

                                    </div>
                                </form>
                                <!-- <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div> -->
                                <!--  <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div> -->
                            </div>
                        </div>
                        <!--<div class="mt-5 text-muted text-center">-->
                        <!--  Don't have an account? <a href="register.php">Create One</a>-->
                        <!--</div>-->
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