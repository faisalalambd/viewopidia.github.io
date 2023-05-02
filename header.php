<?php $id = $_GET['id']; ?>

<?php include 'config.php';
if ($image == " ") {
    $image = "logo.png";
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Viewopidia is a online earning site from that general user can earn money by sharing the youtube embeded link and share the viewopidia link user will be paid depending on the views makes on the viewopidia page">
    <meta name="keywords" content="viewopidia,view, make money online,earn money online,how to earn money online,earn money,how to make money online,app earn money, earn money app,online earning, best app to earn money,online earning sites,how can i earn money onlline,how to income money,video,porn, best porn video,youtube,youtube video,news,<?php echo $key ?>,<?php echo $title ?>,<?php echo $category ?>">
    <meta name="author" content="Viewopidia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:type" content="Videography" />
    <meta property="og:url" content="viewopidia.com" />
    <meta property="og:image" content="assets/img/<?php echo $image ?>" />
    <title><?php echo $title; ?></title>
    <script type=”text/javascript” src=”//cdn.jsdelivr.net/afterglow/latest/afterglow.min.js”></script>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!----------------------propeller ads api--------------------------->
    <meta name="propeller" content="c67f32d60e8e9978b1bd32bc99dbf7c3">
    <!----------------------propeller ads api--------------------------->

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/logo.png' />

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
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "106176085348263");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--<div class="loader"></div>-->
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto" action="search.php" method="POST">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" name="search" aria-label="Search" data-width="500">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>

            </nav>

            <!--<h1 style="color: red; margin: 11rem 0 0 18rem; text-align: center; font-size: 3.3rem;">-->
            <!--    The Server is in Maintenance mode.-->
            <!--    <br><br>-->
            <!--    It will be available from Sunday onwards.-->
            <!--</h1>-->

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">

                    <div class="sidebar-brand">
                        <a href="/"> <img alt="image" src="assets/img/logo.png" height="100px" width="200px" /></a>
                    </div>


                    <ul class="sidebar-menu">

                        <li class="menu-header">Main</li>

                        <li class="dropdown active">
                            <a href="viewopidian" class="nav-link"><i data-feather="log-in"></i><span>Goto Viewopidian Panel</span></a>
                        </li>

                        <li class="dropdown active">
                            <a href="viewopidian/register.php" class="nav-link"><i data-feather="at-sign"></i><span>Be a Viewopidian</span></a>
                        </li>

                        <li class="dropdown active">
                            <a href="viewopidian/user_guide.php" class="nav-link"><i data-feather="dollar-sign"></i><span>How to Earn Viewopidian</span></a>
                        </li>

                        <li class="dropdown active">
                            <a href="viewopidian/terms_conditions.php" class="nav-link"><i data-feather="terminal"></i><span>Terms And Conditions</span></a>
                        </li>

                        <li class="menu-header mt-4">Category</li>
                        <?php
                        $sql = "SELECT * FROM category where category_name!='adult'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <li class="dropdown active">
                                    <a href="videos.php?name=<?php echo $row['category_link'] ?>" class="nav-link"><i data-feather="<?php echo $row['icon'] ?>"></i><span><?php echo $row['category_name'] ?></span></a>
                                </li>
                        <?php }
                        } ?>

                        <!--<li class="dropdown active">-->
                        <!--  <a href="videos.php?name=travel" class="nav-link"><i data-feather="navigation"></i><span>Travel</span></a>-->
                        <!--</li>-->

                        <!--<li class="dropdown active">-->
                        <!--  <a href="videos.php?name=Special" class="nav-link"><i data-feather="cloud-rain"></i><span>Special </span></a>-->
                        <!--</li>-->

                        <!--<li class="dropdown active">-->
                        <!--  <a href="videos.php?name=Featured" class="nav-link"><i data-feather="feather"></i><span>Featured </span></a>-->
                        <!--</li>-->

                        <!--<li class="dropdown active">-->
                        <!--  <a href="videos.php?name=Movie" class="nav-link"><i data-feather="film"></i><span>Movie </span></a>-->
                        <!--</li>-->

                        <!--<li class="dropdown active">-->
                        <!--  <a href="videos.php?name=learning" class="nav-link"><i data-feather="align-justify"></i><span>Learn </span></a>-->
                        <!--</li>-->


                    </ul>
                </aside>
            </div>
            // <script>
                //     (function(s, u, z, p) {
                //         s.src = u, s.setAttribute('data-zone', z), p.appendChild(s);
                //     })(document.createElement('script'), 'https://iclickcdn.com/tag.min.js', 4959111, document.body || document.documentElement)
                // 
            </script>