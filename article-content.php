<!DOCTYPE html>
<html lang="en">



<?php  
    require 'models/article.php';
    if ($res = $req->fetch(PDO::FETCH_OBJ)) {
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link href="assets/images/apple-icon.png" rel="icon" type="image/png">
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Efinance Title -->
    <title><?= $res->titre ?></title>

    <!-- css file -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Main Header Start -->
    <?php require 'views/header.php'; ?>
    <!-- Main Header end -->

    <!-- Inner page hedaing start -->
    <section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="irs-inner-heading">
                        <h2>Notre blog</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="home">Acceuil</a> > <a href="#">Blog</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner page hedaing end -->

    <!-- blog single start -->
    <section class="irs-blog-field irs-blog-single-field">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="irs-blog-single-col">
                        <div class="irs-blog-col">
                            <div class="irs-courses-img">
                                <img src="admins/assets/astuce/<?= $res->avatar ?>" alt="">
                            </div>
                            <div class="irs-info-text">
                                <ul class="clearfix">
                                    <li>
                                        <p><i class="icofont icofont-clock-time"></i> <a href="#"><?= $res->datepub ?></a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="irs-courses-content">
                                <h4><a href="#"><?= $res->titre ?></a></h4>
                                <?= $res->contenue ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog single end -->

    <!-- Footer start -->
    <?php require 'views/footer.php'; ?>

    <!-- script start from here -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="assets/js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="assets/js/isotope.js"></script>
    <script type="text/javascript" src="assets/js/stellar.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="assets/js/css3-animate-it.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="assets/js/classie.js"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="assets/js/script.js"></script>

</body>



<?php  
    }
?>

</html>