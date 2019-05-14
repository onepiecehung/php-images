<!-- TODO: <?php echo htmlentities($result->email); ?> -->
<?php
require_once "../includes/session.php";
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
                    <a href="#" class="Linear-Gradient list-group-item list-group-item-action text-white">
                        <img class="pr-2 rounded float-left" src="images/sidebar/home.png" alt="home">Home
                        <img class="rounded float-right ds-hover" src="images/unchecked.png" id="menu-toggle">
                    </a>
                    <a href="#" class="Linear-Gradient list-group-item list-group-item-action text-white">
                        <img class="pr-2 rounded float-left" src="images/sidebar/trend.png" alt="Trending">
                        Trending</a>
                    <a href="#" class="Linear-Gradient list-group-item list-group-item-action text-white">
                        <img class="pr-2 rounded float-left" src="images/sidebar/follow.png" alt="Follow">
                        Following</a>
                    <a href="#" class="Linear-Gradient list-group-item list-group-item-action text-white">
                        <img class="pr-2 rounded float-left" src="images/sidebar/random.png" alt="Random">
                        Random</a>
                    <a href="#" class="Linear-Gradient list-group-item list-group-item-action text-white">Profile</a>
                    <a href="#" class="Linear-Gradient list-group-item list-group-item-action text-white">Status</a>
                </b>
            </div>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!--TODO: This navigation-->
    <nav class="navbar navbar-expand-lg Linear-Gradient-nav fixed-top fix-z-1">

        <img class="ds-hover-icon rounded navbar-brand ml-4" src="images/list.png" id="menu-toggle-both" style="width:22px;height:auto;">
        <a class="navbar-brand ds-hover nav-link" href="../home">
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
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/006.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/014.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/10.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/40534920_1920181574799697_4874050589694099456_n.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/41111462_265972034028025_1466627333245894656_n.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/41270698_2075618492461882_8864347173597216768_n.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/41368502_2053692934940900_597907040135806976_n.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/41380304_1458535600956711_6812352777574940672_n.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/41382457_146220186311853_4229486198835380224_n.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/41388443_1096891320466326_449729117940613120_n.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/41410692_2656379547920465_4043706546633310208_n.jpg" alt="" srcset="">
                    </div>
                    <div class="owl-item">
                        <img class="ds-owl-box img-thumbnail" src="images/Images/41421615_1096891283799663_6699789115040202752_n.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>


        </div>
    </header>

    <!--TODO:Content-->
    <section class="gallery-block grid-gallery">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image1.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image1.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image2.jpg">
                                <img class="img-fluid image" src="../img/image2.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image3.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image3.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image4.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image4.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image5.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image5.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image6.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image6.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image7.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image7.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image8.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image8.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image9.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image9.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image1.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image1.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image2.jpg">
                                <img class="img-fluid image" src="../img/image2.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image3.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image3.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image4.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image4.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image5.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image5.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image6.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image6.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image7.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image7.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image8.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image8.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image9.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image9.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image1.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image1.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image2.jpg">
                                <img class="img-fluid image" src="../img/image2.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image3.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image3.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image4.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image4.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image5.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image5.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image6.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image6.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image7.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image7.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image8.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image8.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image9.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image9.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image1.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image1.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image2.jpg">
                                <img class="img-fluid image" src="../img/image2.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image3.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image3.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image4.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image4.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image5.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image5.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image6.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image6.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image7.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image7.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image8.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image8.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-2 item">
                        <div class="card ds-card">
                            <a class="lightbox" href="../img/image9.jpg">
                                <img class="img-fluid image scale-on-hover" src="../img/image9.jpg">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-1">

                </div>
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