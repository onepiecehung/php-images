<?php
require_once "../includes/session.php";
require_once "../includes/config.php";
$show_content = '';
$sql_lastid = 'SELECT id FROM photos ORDER BY id DESC LIMIT 1';
$result_lastid = $link->query($sql_lastid);
$row_lastid = mysqli_fetch_assoc($result_lastid);
$start_id = 1;
$end_id = $row_lastid["id"];
$sql_show_recommend = 'SELECT * FROM photos 
                WHERE id between ' . $start_id . ' and ' . $end_id . ' ORDER BY id DESC';
$result_recommend = $link->query($sql_show_recommend);
if (mysqli_num_rows($result_recommend) > 0) {
    while ($row_r = mysqli_fetch_assoc($result_recommend)) {
        $sql_getid = 'SELECT * FROM users WHERE id=(SELECT id_user FROM photos WHERE id= ' . $row_r["id"] . ') ';
        $result_getid = $link->query($sql_getid);
        $row_getid = mysqli_fetch_assoc($result_getid);
        if ($row_r["status_photo"] == 1) {
            $show_content = $show_content . '
            <div class="col-md-12 col-lg-4 pt-4 item">
                <div class="card ds-card">
                    <a class="lightbox" href="../home/newsfeed.php?id=' . $row_r["id"] . '">
                        <img class="img-fluid image scale-on-hover box-profile" src="../images/' . $row_r["images_url"] . '">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">' . $row_r["title"] . '</h5>';
            if ($row_r["status_photo"] == 0) {
                $show_content = $show_content . '<p class="card-text">Waiting for verify. <img src="images/delete.png" alt="" srcset=""></p>';
            } elseif ($row_r["status_photo"] == 1) {
                $show_content = $show_content . '<p class="card-text">Verify by Admin <img src="images/check-mark.png" alt="" srcset=""></p>';
            }
            $show_content = $show_content . '
                        <p class="card-text">ID#' . $row_r["id"] . ' Upload by 
                        <a href="../home/profile.php?id=' . $row_getid["id"] . '">
                        ' . $row_getid["username"] . '</a></p>
                    </div>
                </div>
            </div>          
        ';
        }
    }
}

$show_random = '<a href="../home/newsfeed.php?id=' . mt_rand(1, $end_id) . '" class="Linear-Gradient list-group-item list-group-item-action text-white">
<img class="pr-2 rounded float-left" src="images/sidebar/random.png" alt="Random">
Random</a>';
// ! todo: HOW TO FIX ADD LINK DONT WORKING ON OWL COURSES
$sql_slide = 'SELECT * FROM photos 
                WHERE id between 1 and 10 ORDER BY id DESC';
$result_slide = $link->query($sql_slide);
$show_silde = '';
if (mysqli_num_rows($result_recommend) > 0) {
    while ($row_r1 = mysqli_fetch_assoc($result_slide)) {
        $show_silde = $show_silde . '
                <div class="owl-item">
                    <a href="/home/newsfeed.php?id=' . $row_r1["id"] . '">
                    <img class="ds-owl-box img-thumbnail" src="../images/' . $row_r1["images_url"] . '" alt="" srcset="">
                    </a>
                </div>';
    }
} //TODO:href="../home/newsfeed.php?id=' . $row_r1["id"] . '"
// <div class="owl-item">
//     <img class="ds-owl-box img-thumbnail" src="images/Images/006.jpg" alt="" srcset="">
// </div>
// <div class="col-md-12 col-lg-2 item">
// <div class="card ds-card">
//     <a class="lightbox" href="../img/image1.jpg">
//         <img class="img-fluid image scale-on-hover" src="../img/image1.jpg">
//     </a>
//     <div class="card-body">
//         <h5 class="card-title">Title</h5>
//         <p class="card-text">Content</p>
//     </div>
// </div>
// </div>
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3RAW - Images</title>
    <link rel="stylesheet" href="css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/hover.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="grid-gallery.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/footer.css"> -->

</head>

<body>
    <!--TODO:Back to top-->
    <a id="button"></a>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="Linear-Gradient bg-light border-right position-fixed ds-fix-1" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <b>
                    <a href="../home/" class="Linear-Gradient list-group-item list-group-item-action text-white">
                        <img class="pr-2 rounded float-left" src="images/sidebar/home.png" alt="home">Home
                        <img class="rounded float-right ds-hover" src="images/unchecked.png" id="menu-toggle">
                    </a>
                    <a href="#" class="Linear-Gradient list-group-item list-group-item-action text-white">
                        <img class="pr-2 rounded float-left" src="images/sidebar/trend.png" alt="Trending">
                        Trending</a>
                    <a href="#" class="Linear-Gradient list-group-item list-group-item-action text-white">
                        <img class="pr-2 rounded float-left" src="images/sidebar/follow.png" alt="Follow">
                        Following</a>
                    <?php
                    //TODO: show random
                    echo $show_random;
                    ?>
                </b>
            </div>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!--TODO: This navigation-->
    <nav class="navbar navbar-expand-lg Linear-Gradient-nav fixed-top fix-z-1">

        <img class="ds-hover-icon rounded navbar-brand ml-4" src="images/list.png" id="menu-toggle-both" style="width:22px;height:auto;">
        <a class="navbar-brand ds-hover nav-link" href="../home/">
            <img src="images/7.png" width="20" height="auto" alt="logo">
            3RAW
        </a>
        <!--TODO:SEARCH-->
        <div class="search-navbar" id="search-navbar">
            <input class="" type="search" name="Search" id="search" placeholder="Search anything you need: images, #tag, @user, etc...">
        </div>

        <!--TODO:END SEARCH-->
        <!--TODO: upload image-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <!-- TODO: PHP USER -->
                <?php echo $log_reg; ?>
            </ul>
        </div>
    </nav>
    <!--TODO:This Header-->
    <header>
        <div class="owl-carousel owl-theme owl-loaded owl-fix">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <?php
                    echo $show_silde;
                    ?>
                </div>
            </div>
        </div>


        </div>
    </header>

    <!--TODO:Content-->
    <div class="pt-2"></div>
    <section class="gallery-block grid-gallery">
        <div class="container">
            <div class="row">
                <?php
                echo $show_content;
                ?>
            </div>
        </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.grid-gallery', {
            animation: 'slideIn'
        });
    </script>
    <!--TODO:test load <div id="LoadNewsFeed"></div> -->

    <footer class="d-inline-flex footer Linear-Gradient-nav fixed-bottom p-2">
        <div class="d-inline-flex float-left ds-footer-color-text pl-5">
            © 2019 3AT, Inc
        </div>

    </footer>
    <!--TODO: That's button upload-->
    <a href="upload.php">
        <div class="ds-upload position-fixed">
            <button class="" id="login" type=""> <img src="images/photo.png" alt="" srcset=""> Upload</button>
        </div>
    </a>
    <!--JS-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl/owl.carousel.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/owl/owl.js"></script>
    <!--TODO: load <script src="js/loadHTML.js"></script> -->
    <script id="dsq-count-scr" src="//127-0-0-1-5500.disqus.com/count.js" async></script>
    <script src="js/totop.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script> -->
</body>

</html>