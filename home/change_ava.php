<?php
require_once "../includes/session.php";
$id = $_GET["id"];
if (isset($_SESSION['id']) && $_SESSION['id'] ==  $id) { } else {
    echo '<script language="javascript">';
    echo 'alert("Website not available.")';
    echo '</script>';
    echo '<script language="javascript">';
    echo 'window.location.href = "../home/profile.php?id=' . $id . '"';
    echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3RAW - Change avatar</title>
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
    <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <!--TODO:Back to top-->
    <a id="button"></a>

    <!-- /#sidebar-wrapper -->
    <!--TODO: This navigation-->
    <nav class="navbar navbar-expand-lg Linear-Gradient-nav fixed-top fix-z-1">
        <div class="container">
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
                    <?php echo $log_reg; ?>
                </ul>
            </div>
        </div>

    </nav>

    <footer class="d-inline-flex footer Linear-Gradient-nav fixed-bottom p-2">
        <div class="d-inline-flex float-left ds-footer-color-text pl-5">
            © 2019 3AT, Inc
        </div>

    </footer>
    <!--TODO: That's button upload-->
    <div class="container pt-5 pb-5">
        <form action="change_ava_true.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <input type="file" name="image" onchange="readURL(this);" required />
                </div>
                <div class="col-sm-12 col-lg-6">
                    <button class="btn ds-modal-button float-right" id="upload" type="submit">Change avatar</button>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <img class="ds-img-upload" id="blah" src="images/bilibili.jpeg" alt="your image" />
                </div>
            </div>

        </form>
    </div>
    <!-- <div class="ds-upload position-fixed">
        <button class="" id="upload" type=""> <img src="images/photo.png" alt="" srcset=""> Upload</button>
    </div>
    <form method="get" action="" >
        <div class="modal fade" id="myModalUpload">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <!-- Modal body --
                    <div class="modal-body">
                        <!-- <img class="ds-img-upload" id="image_upload_preview" src="images/bilibili.jpeg"> --
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Only image</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="form-control-file" id="inputFile" accept="image/*">
                                <label class="custom-file-label" for="inputFile">Choose file...</label>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer --
                    <div class="modal-footer">
                        <button class="btn ds-modal-button" id="upload" type="submit">Upload</button>
                        <button type="button" class="btn ds-modal-button-close" data-dismiss="modal">CLOSE</button>

                    </div>

                </div>
            </div>
        </div>
    </form> -->
    <!--JS-->
    <script src="js/upload.change.image.js"></script>
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