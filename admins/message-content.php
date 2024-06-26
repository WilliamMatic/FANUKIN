<?php session_start(); ?>
<?php  
    if ( !isset($_SESSION['id']) || empty($_SESSION['id']) ) {
        header("Location: ../login-admin");
        exit();
    }
?>
<!DOCTYPE html>
<html
    lang="en"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="light"
    data-bs-theme="dark"
    data-sidebar-size="lg"
    data-sidebar-image="none"
    data-preloader="disable"
    data-theme="vintage"
    data-theme-colors="default"
    data-sidebar-user-show
>
    <head>
        <meta charset="utf-8" />
        <title>Messages</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Sous-traitance d'excellence, résultats probants" name="description" />
        <meta content="PitUp" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo.png" />

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.css
            "
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.css.map" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css.map" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" />

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/fontawesome.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/fontawesome.min.js"></script>

        <!--datatable css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <!--datatable responsive css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />
    </head>

    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <?php require 'views/header.php'; ?>

            <!-- ========== App Menu ========== -->
            <?php require 'views/nav.php'; ?>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <?php  
                            require 'models/view-message.php';
                            if ($res = $req->fetch(PDO::FETCH_OBJ)) {
                        ?>

                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card">
                                        <div class="bg-warning-subtle position-relative">
                                            <div class="card-body p-5">
                                                <div class="text-center">
                                                    <h3>Auteur : <b><?= $res->nom ?></b></h3>
                                                    <p class="mb-0 text-muted">Numéro telephone : <b><?= $res->phone ?></b></p>
                                                </div>
                                            </div>
                                            <div class="shape">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs"
                                                    width="1440"
                                                    height="60"
                                                    preserveAspectRatio="none"
                                                    viewBox="0 0 1440 60"
                                                >
                                                    <g mask='url("#SvgjsMask1001")' fill="none">
                                                        <path d="M 0,4 C 144,13 432,48 720,49 C 1008,50 1296,17 1440,9L1440 60L0 60z" style="fill: var(--vz-secondary-bg);"></path>
                                                    </g>
                                                    <defs>
                                                        <mask id="SvgjsMask1001">
                                                            <rect width="1440" height="60" fill="#ffffff"></rect>
                                                        </mask>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <i data-feather="check-circle" class="text-success icon-dual-success icon-xs"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5><?= $res->sujet ?></h5>
                                                    <p class="text-muted">
                                                        <?= $res->message ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="text-end">
                                                <a href="tel:<?= $res->phone ?>" class="btn btn-primary">Repondre par appel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                        <?php require 'models/status-message.php'; ?>

                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php require 'views/footer.php'; ?>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="assets/js/apexcharts.min.js"></script>

        <!-- projects js -->
        <script src="assets/js/dashboard-projects.init.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!--datatable js-->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

        <script src="assets/js/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
