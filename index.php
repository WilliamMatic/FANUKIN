<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Favicon -->
        <link href="assets/images/apple-icon.png" rel="icon" type="image/png" />
        <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png" />

        <!-- Efinance Title -->
        <title>FANUKIN - Accueil</title>

        <!-- css file -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <!-- Responsive stylesheet -->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        
        <!-- Fontawesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css"
            integrity="sha512-L+sMmtHht2t5phORf0xXFdTC0rSlML1XcraLTrABli/0MMMylsJi3XA23ReVQkZ7jLkOEIMicWGItyK4CAt2Xw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css"
            integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/regular.min.css"
            integrity="sha512-3YMBYASBKTrccbNMWlnn0ZoEOfRjVs9qo/dlNRea196pg78HaO0H/xPPO2n6MIqV6CgTYcWJ1ZB2EgWjeNP6XA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/solid.min.css"
            integrity="sha512-bdTSJB23zykBjGDvyuZUrLhHD0Rfre0jxTd0/jpTbV7sZL8DCth/88aHX0bq2RV8HK3zx5Qj6r2rRU/Otsjk+g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/svg-with-js.min.css"
            integrity="sha512-kykcz2VnxuCLnfiymkPqtsNceqEghEDiHWWYMa/nOwdutxeFGZsUi1+TEWT4MyesfxybNGpJNCVXzEPXSO8aKQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/v4-font-face.min.css"
            integrity="sha512-p0AmrzKP8l63xoFw9XB99oaYa40RUgDuMpdkrzFhi4HPHzO3bzyN2qP6bepe43OP3yj9+eGQEJGIGPcno1JdPw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/v4-shims.min.css"
            integrity="sha512-h2Z3EnLjRZp3KQxGYzT6SyqPrWIlmjnlJz/8q3BoZo2IN51insCNN7nmA4WHoe9eu1H5B3xLdLwKiVF8kF+Ewg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/v5-font-face.min.css"
            integrity="sha512-H2YXTLk5bs3DqvCfOEFsHmsjKW/qLp8SqsqVuPVwZzA5WFudPvPJisFKba2Km3sZNNBapYsZjSMTmRVcfxb5yw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
            integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/brands.min.js"
            integrity="sha512-3Zn/FU2NPNNFPn4888PtuSwAzZh7osT9728qBI3FcY33PywjzSM96QVjciohyurUKr6ketdyNYTdNvPauAnEmw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/conflict-detection.min.js"
            integrity="sha512-OnJZvIhwzjyobquHi0nGMAIx0iRfbZr7eyWKsSJerRfGFiv7Ed0CytP9I52on/S0XOMKiqEBCarlOEfuyVjokw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/fontawesome.min.js"
            integrity="sha512-36dJpwdEm9DCm3k6J0NZCbjf8iVMEP/uytbvaiOKECYnbCaGODuR4HSj9JFPpUqY98lc2Dpn7LpyPsuadLvTyw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/regular.min.js"
            integrity="sha512-JLKhm0RfxW/ni7SF0nf1G/0SLYF/y//3fZ53VTgjUkEkAGo3QtZkuDoNFQIlnyekVctAiImaKTAW4yqSP7asGw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/solid.min.js"
            integrity="sha512-Cw3lrAMFnu1XhNZB73mT27VptT/2szZ1sn2MLnPq+ATkY0qu16il+xEQdo4wDZCAVnO8QZ12547AfBZhO9M9cw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/v4-shims.min.js"
            integrity="sha512-7cs6q0x+QVwp7v0xeHb8DYY9IR41u+viyQgQEpEYqOxL9OHOVNeA/nfBt9i/U+TRdS/NJnEemUgFvDa4qMhACw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Main Header  -->
        <?php require 'views/header.php'; ?>
        <!-- Main Header end -->

        <!-- main slider  -->
        <section class="irs-main-slider">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                    <li data-target="#bs-carousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1"></div>
                        <div class="hero">
                          
                            <h1>
                                RESEAUTAGE, FORMATION ET INSERTION PROFESSIONNELLE
                            </h1>
                            <a href="authenticate" class="btn btn-default irs-big-btn" role="button">Nous rejoindre</a>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-2"></div>
                        <div class="hero">
                          
                            <h1>APPUI A L’ENSEIGNEMENT ET LA RECHERCHE DE QUALITE</strong>!</h1>
                            <a href="authenticate" class="btn btn-default irs-big-btn" role="button">Nous rejoindre</a>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-3"></div>
                        <div class="hero">
                          
                            <h1>PROMOTION DE L’ESPRIT ENTREPRENEURIAL</h1>
                            <a href="authenticate" class="btn btn-default irs-big-btn" role="button">Nous rejoindre</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main slider end -->

        <!-- Welcome  -->
        <section class="irs-welcome-field">

            <div style="margin-bottom: 50px;">
                <p class="text-center">
                    Initiative pour le rayonnement des anciens de la colline inspirée
                </p>

                <p class="text-center">
                    Contribuer au changement de la destinée de la colline inspirée et de ses ressortissants. C’est l’idée d’une grande fédération <br> des anciens pour un plus grand rayonnement en RDC et à travers le monde
                </p>

            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h1>Bienvenue dans  <br><span>FANUKIN</span></h1>
                        <i class="icofont icofont-education"></i>
                        <p>
                            Plateforme créée dans le but ultime d’œuvrer en faveur de l’épanouissement, du rayonnement et du réseautage des
                            anciens de la colline inspirée en RDC et à travers le monde,
                            dans les milieux professionnels et socio-économiques.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome end -->

        <!-- About  -->
        <section class="irs-about-field">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="irs-section-title">
                            <h2>Nos moyens <span>d’actions</span></h2>
                            <div class="irs-title-line">
                                <div class="irs-title-icon">
                                    <i class="icofont icofont-education"></i>
                                </div>
                            </div>
                            <p>
                                Nos moyens d'action s'appuient sur l'innovation, l'engagement et la collaboration pour créer un impact positif et durable dans notre communauté.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row animatedParent animateOnce">
                    <div class="col-md-4 col-sm-6">
                        <div class="irs-about-box animated fadeInLeftShort slow delay-250">
                            <div class="irs-about-icon">
                                <i class="icofont icofont-book"></i>
                            </div>
                            <h4>
                                <strong style="text-transform: initial;">
                                    Des programmes de formation et insertion
                                    professionnelles
                                </strong>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="irs-about-box animated fadeInUpShort slow delay-500">
                            <div class="irs-about-icon">
                                <i class="icofont icofont-read-book-alt"></i>
                            </div>
                            <h4>
                                <strong style="text-transform: initial;">
                                    Des programmes de coaching et accompagnement des jeunes
                                    entrepreneures de l’UNIKIN
                                </strong>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="irs-about-box animated fadeInRightShort slow delay-250">
                            <div class="irs-about-icon">
                                <i class="icofont icofont-spreadsheet"></i>
                            </div>
                            <h4>
                                <strong style="text-transform: initial;">
                                    Des projets de jumelage pour l’amélioration de la qualité et
                                    conditions d’enseignement à l’UNIKIN
                                </strong>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="irs-about-box animated fadeInRightShort slow delay-250">
                            <div class="irs-about-icon">
                                <i class="icofont icofont-users-alt-5"></i>
                            </div>
                            <h4>
                                <strong style="text-transform: initial;">
                                    Des séminaires, des ateliers, des colloques et des
                                    conférences de haut niveau sur des thématiques liées à nos
                                    piliers d’intervention
                                </strong>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="irs-about-box animated fadeInRightShort slow delay-250">
                            <div class="irs-about-icon">
                                <i class="icofont icofont-read-book"></i>
                            </div>
                            <h4>
                                <strong style="text-transform: initial;">
                                    Des campagnes de sensibilisation et de
                                    communication
                                </strong>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="irs-about-box animated fadeInRightShort slow delay-250">
                            <div class="irs-about-icon">
                                <i class="icofont icofont-university"></i>
                            </div>
                            <h4>
                                <strong style="text-transform: initial;">
                                    Des actions médiatiques et hors médiatiques de
                                    diverses natures
                                </strong>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About end -->

        <!-- Counter  -->
        <section class="irs-counter-field irs-layer-black" style="background: #2c3c93;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="irs-counter-col">
                            <i class="icofont icofont-users-alt-3" style="color: white;"></i>
                            <div class="irs-funfact">
                                <?php  
                                    require 'models/count-alumni.php';
                                    if ($res = $req->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                    <div class="-count">+<?= $res->nbralumnis ?></div>
                                <?php } ?>
                                <div class="clearfix"></div>
                                <h4>Alumnis</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="irs-counter-col">
                            <i class="icofont icofont-group-students" style="color: white;"></i>
                            <div class="irs-funfact">
                                <?php  
                                    require 'models/count-projet.php';
                                    if ($res = $req->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                    <div class="-count">+<?= $res->nbrprojets ?></div>
                                <?php } ?>
                                <div class="clearfix"></div>
                                <h4>Evènements</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="irs-counter-col">
                            <i class="icofont icofont-education" style="color: white;"></i>
                            <div class="irs-funfact">
                                <?php  
                                    require 'models/count-news.php';
                                    if ($res = $req->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                    <div class="-count">+<?= $res->nbrnews ?></div>
                                <?php } ?>
                                <div class="clearfix"></div>
                                <h4>ACTUALITES</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter end -->

        <!-- Gallery  -->
        <section class="irs-gallery-field">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="irs-section-title">
                            <h2>Nos <span>photos</span></h2>
                            <div class="irs-title-line">
                                <div class="irs-title-icon">
                                    <i class="icofont icofont-education"></i>
                                </div>
                            </div>
                            <p>
                                Nos photos de galerie reflètent notre engagement envers l'excellence et la diversité, capturant des moments uniques et inspirants à partager avec notre communauté.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <?php  
                        require 'models/galeries.php';
                        while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                    ?>
                        <div class="col-md-3 col-sm-6 irs-col-padd-less">
                            <div class="irs-img-hover">
                                <img src="admins/assets/gallerie/<?= $res->img ?>" alt="" />
                                <div class="irs-layer">
                                    <a class="lightbox-image" href="admins/assets/gallerie/<?= $res->img ?>" data-fancybox-group="DANS ALBUM DE FANUKIN" title="Gallery Photos">
                                        <i class="zmdi zmdi-loupe"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }$req->closeCursor(); ?>
                </div>
            </div>
        </section>
        <!-- Gallery end -->

        <!-- Alumni  -->
        <section class="irs-teachers-field">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="irs-section-title">
                            <h2>Nos <span>Alumnis</span></h2>
                            <div class="irs-title-line">
                                <div class="irs-title-icon">
                                    <i class="icofont icofont-education"></i>
                                </div>
                            </div>
                            <p>
                                Notre communauté d'Alumnis représente la diversité de talents et d'expériences qui enrichissent notre plateforme, créant ainsi un réseau solide et dynamique prêt à collaborer et à évoluer ensemble.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row animatedParent animateOnce">
                    <?php  
                        require 'models/alumnis-index.php';
                        while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                    ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="irs-teachers-col animated fadeInUpShort slow delay-250">
                                <a href="#"><img src="<?= $res->avatar ?>" alt="" /> </a>
                                <div class="irs-teachers-name">
                                    <h4><a href="#"><?= $res->name ?></a></h4>
                                    <p><?= $res->secteur ?></p>
                                </div>
                            </div>
                        </div>
                    <?php }$req->closeCursor(); ?>
                </div>
            </div>
        </section>
        <!-- Teachers  end -->

        <!-- Nous -->
        <section class="irs-testimonial-field irs-layer-black">
            <img src="ssets/images/students.png" alt="" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                        <div class="testimonial-carousel">
                            <div class="item">
                                <div class="irs-transparent-space"></div>
                                <div class="irs-testimonial-single">
                                    <div class="irs-comment-icon">
                                        <i class="icofont icofont-quote-right"></i>
                                    </div>
                                    <p>
                                        Etre la plateforme de référence et d’excellence fédérant tous les anciens diplômés de l’UNIKIN en RDC et dans le monde, ainsi qu’un pilier des initiatives de développement de la colline inspirée
                                    </p>
                                    <h4>Notre Vision</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="irs-transparent-space"></div>
                                <div class="irs-testimonial-single">
                                    <div class="irs-comment-icon">
                                        <i class="icofont icofont-quote-right"></i>
                                    </div>
                                    <p>
                                        Constituer le plus grand réseau des élites de la RDC sortant de l’UNIKIN au rayonnement international
                                    </p>
                                    <h4>Notre Mission</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!-- Blog  -->
        <section class="irs-blog-field">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="irs-section-title">
                            <h2>Nos <span>actualités</span></h2>
                            <div class="irs-title-line">
                                <div class="irs-title-icon">
                                    <i class="icofont icofont-education"></i>
                                </div>
                            </div>
                            <p>
                                Explorez nos actualités pour découvrir des contenus inspirants, informatifs et pertinents, conçus pour enrichir vos connaissances et nourrir votre passion pour l'apprentissage continu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row animatedParent animateOnce">

                    <?php  
                        require 'models/articles-index.php';
                        while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                    ?>

                        <div class="col-md-4 col-sm-6">
                            <div class="irs-courses-col irs-blog-col animated fadeInLeftShort slow delay-250">
                                <div class="irs-courses-img">
                                    <img src="admins/assets/astuce/<?= $res->avatar ?>" alt="" />
                                </div>
                                <div class="irs-info-text">
                                    <ul class="clearfix">
                                        <li>
                                            <p><i class="icofont icofont-clock-time"></i> <a href="article-<?= $res->id ?>"><?= $res->datepub ?></a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="irs-courses-content">
                                    <h4><a href="article-<?= $res->id ?>"><?= $res->titre ?></a></h4>
                                    <?= substr($res->contenue, 0, 115).'...' ?> <br>
                                    <a class="btn btn-default irs-btn-transparent-two" href="article-<?= $res->id ?>" role="button">Lire article</a>
                                </div>
                            </div>
                        </div>

                    <?php }$req->closeCursor(); ?>

                </div>
            </div>
        </section>
        <!-- Blog end -->

        <!-- Newsletter  -->
        <section class="irs-newsletter-field" id="feedfollow">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="irs-newsletter-col">
                            <img src="assets/images/newsletter.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="irs-newsletter-col">
                            <h2>Abonnez-vous à notre newsletter</h2>
                            <p>
                                Abonnez-vous à notre newsletter pour recevoir régulièrement des actualités exclusives, des conseils utiles et des opportunités passionnantes directement dans votre boîte de réception. Restez informé et connecté avec notre communauté!
                            </p>

                            <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])): ?>
                                <div id="feed" class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error'];unset($_SESSION['error']); ?>
                                </div>
                            <?php endif ?>

                            <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])): ?>
                                <div id="feed" class="alert alert-success" role="alert">
                                    <?php echo $_SESSION['success'];unset($_SESSION['success']); ?>
                                </div>
                            <?php endif ?>

                            <form method="POST" action="models/follow.php">
                                <div class="input-group">
                                    <input placeholder="Votre adresse e-mail" class="form-control" name="email" type="email" required />
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn">S'abonner</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter end -->

        <?php require 'views/footer.php'; ?>

        <!-- script  from here -->
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
        <script type="text/javascript" src="assetss/js/bootstrap-slider.js"></script>
        <script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script>
        <script type="text/javascript" src="assets/js/classie.js"></script>

        <!-- Custom script for all pages -->
        <script type="text/javascript" src="assets/js/script.js"></script>

        <!-- Funfact  -->
        <script type="text/javascript">
            $(document).ready(function ($) {
                $(".-count").each(function () {
                    var $this = $(this);
                    $this.data("target", parseInt($this.html()));
                    $this.data("counted", false);
                    $this.html("0");
                });

                $(window)
                    .bind("scroll", function () {
                        var speed = 3000;
                        $(".-count").each(function () {
                            var $this = $(this);
                            if (!$this.data("counted") && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                                $this.data("counted", true);
                                $this.animate(
                                    {
                                        dummy: 1,
                                    },
                                    {
                                        duration: speed,
                                        step: function (now) {
                                            var $this = $(this);
                                            var val = Math.round($this.data("target") * now);
                                            $this.html(val);
                                            if (0 < $this.parent(".value").length) {
                                                $this.parent(".value").css("width", val + "%");
                                            }
                                        },
                                    }
                                );
                            }
                        });
                    })
                    .triggerHandler("scroll");
            });
        </script>
    </body>
</html>
