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
        <title>Se connceter étant admin</title>

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
        <div class="preloader"></div>
        <!-- Main Header Start -->
        <?php require 'views/header.php'; ?>
        <!-- Main Header end -->

        <!-- Inner page hedaing start -->
        <section class="irs-inner-page-heading irs-layer-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="irs-inner-heading">
                            <h2>S'authentifier</h2>
                            <i class="icofont icofont-education"></i>
                            <p><a href="home">Acceuil</a> > <a href="#">S'authentifier</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner page hedaing end -->

        <!-- Account start -->
        <section class="irs-account-field">

            <div class="container">
                
                <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['error'];unset($_SESSION['error']); ?>
                    </div>
                <?php endif ?>

                <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['success'];unset($_SESSION['success']); ?>
                    </div>
                <?php endif ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="irs-account-col">
                            <h3>Se connecter etant admin</h3>
                            <form action="models/call/admin/login.php" method="POST" novalidate="novalidate">
                                <input id="form_user_name" name="email" class="form-control" placeholder="Nom utilisateur*" required="required" data-error="User Name." type="text" />
                                <input id="user_password" name="password" type="password" class="form-control" placeholder="Mot de passe*" required="required" data-error="User Name." value="" />
                                <label> <input id="password_remember" name="rememberme" type="checkbox" value="" /> Se souvenir de moi</label>
                                <br />
                                <button class="btn btn-default irs-big-btn" type="submit">Se connecter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account end -->

        <!-- Footer start -->
        <?php require 'views/footer.php'; ?>
        <!-- Footer end -->

        <!-- script start from here -->
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-dropdownhover.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="assets/js/jquery-scrolltofixed-min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="assets/js/css3-animate-it.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-slider.js"></script>
        <script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script>
        <script type="text/javascript" src="assets/js/classie.js"></script>

        <!-- Custom script for all pages -->
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>
