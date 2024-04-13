<?php 
    session_start(); 

    if ( !isset($_SESSION['id']) || empty($_SESSION['id']) ) {
        header("Location: ../login-admin");
        exit();
    }

    $datedeb = date('Y-m-d');
    $datefin = date('Y-m-d');

    $_SESSION['datedeb'] = $datedeb;
    $_SESSION['datefin'] = $datefin;
?>
<!DOCTYPE html>
<html lang="en"  data-layout="vertical" data-topbar="light" data-sidebar="light" data-bs-theme="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="vintage" data-theme-colors="default" data-sidebar-user-show>
    <head>
        <meta charset="utf-8" />
        <title> Dashboard</title>
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


    </head>

    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <?php require 'views/header.php'; ?>

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width: 100px; height: 100px;"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
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
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                    <h4 class="mb-sm-0"><code>DU <?= $_SESSION['datedeb'] ?></code><code> Au <?= $_SESSION['datefin'] ?></code> </h4>

                                    <div class="page-title-right">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dépôts">Filtre</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row project-wrapper">
                           
                            <div class="col-xxl-8">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle text-primary rounded-2 fs-2">
                                                            <i class="fa-solid fa-users text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Les visiteurs</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825">0</span></h4>
                                                            <span class="badge bg-success-subtle text-success fs-12">5.02</span>
                                                        </div>
                                                        <p class="text-muted text-truncate mb-0">.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2">
                                                            <i class="fa-solid fa-users text-warning"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="text-uppercase fw-medium text-muted mb-3">
                                                            Nouveaux candidats
                                                        </p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522">0</span></h4>
                                                            <span class="badge bg-success-subtle text-success fs-12">3.58 %</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a href="candidates">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-2 fs-2">
                                                            <i class="fa-solid fa-users text-info"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Les profils visités</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522">0</span></h4>
                                                            <span class="badge bg-success-subtle text-success fs-12">10.35 %</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a href="visitedprofiles">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle text-primary rounded-2 fs-2">
                                                            <i class="fa-solid fa-blog text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Les astuces en vedette</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825">0</span></h4>
                                                            <span class="badge bg-success-subtle text-success fs-12">5.02 %</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a href="featuredtips">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2">
                                                            <i class="fa-solid fa-users text-warning"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="text-uppercase fw-medium text-muted mb-3">
                                                            Les abonnées
                                                        </p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522">0</span></h4>
                                                            <span class="badge bg-success-subtle text-success fs-12">3.58 %</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a href="followers">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-2 fs-2">
                                                            <i class="fa-solid fa-user-tie text-info"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Missions</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825">0</span></h4>
                                                            <span class="badge bg-danger-subtle text-danger fs-12">10.35 %</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a href="missions">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Les secteurs d'activité avec plus des candidats</h4>
                                            </div>
                                            <!-- end card header -->

                                            <div class="card-body p-0 pb-2">
                                                <div>
                                                    <div
                                                        id="projects-overview-chart"
                                                        data-colors='["--vz-primary", "--vz-warning", "--vz-success"]'
                                                        data-colors-minimal='["--vz-primary", "--vz-primary-rgb, 0.1", "--vz-primary-rgb, 0.50"]'
                                                        data-colors-interactive='["--vz-primary", "--vz-info", "--vz-warning"]'
                                                        data-colors-creative='["--vz-secondary", "--vz-warning", "--vz-success"]'
                                                        data-colors-corporate='["--vz-primary", "--vz-secondary", "--vz-danger"]'
                                                        data-colors-galaxy='["--vz-primary", "--vz-primary-rgb, 0.1", "--vz-primary-rgb, 0.50"]'
                                                        data-colors-classic='["--vz-primary", "--vz-secondary", "--vz-warning"]'
                                                        dir="ltr"
                                                        class="apex-charts"
                                                    ></div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->

                        </div>
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

        <div class="modal fade" id="dépôts" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/filter.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Filtrer le résultat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="mb-3">
                                <label for="datedeb-name" class="col-form-label">Date debut:</label>
                                <input type="date" value="<?= date('Y-m-d') ?>" class="form-control" name="datedeb" id="datedeb-name" required />
                            </div>

                            <div class="mb-3">
                                <label for="datefin-name" class="col-form-label">Date fin:</label>
                                <input type="date" value="<?= date('Y-m-d') ?>" class="form-control" name="datefin" id="datefin-name" required />
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Lancer la recherche</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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

        <!-- App js -->
        <script src="assets/js/app.js"></script>


        <script type="text/javascript">
            

            function getChartColorsArray(e) {
                if (null !== document.getElementById(e)) {
                    var t = "data-colors" + ("-" + document.documentElement.getAttribute("data-theme") ?? ""),
                        t = document.getElementById(e).getAttribute(t) ?? document.getElementById(e).getAttribute("data-colors");
                    if (t)
                        return (t = JSON.parse(t)).map(function (e) {
                            var t = e.replace(" ", "");
                            return -1 === t.indexOf(",")
                                ? getComputedStyle(document.documentElement).getPropertyValue(t) || t
                                : 2 == (e = e.split(",")).length
                                ? "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")"
                                : t;
                        });
                    console.warn("data-colors attributes not found on", e);
                }
            }
            var options,
                chart,
                linechartcustomerColors = getChartColorsArray("projects-overview-chart"),
                isApexSeriesData =
                    (linechartcustomerColors &&
                        ((options = {
                            series: [{ name: "Number of Projects", type: "bar", data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67] }],
                            chart: { height: 374, type: "line", toolbar: { show: !1 } },
                            stroke: { curve: "smooth", dashArray: [0, 3, 0], width: [0, 1, 0] },
                            fill: { opacity: [1, 0.1, 1] },
                            markers: { size: [0, 4, 0], strokeWidth: 2, hover: { size: 4 } },
                            xaxis: { categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], axisTicks: { show: !1 }, axisBorder: { show: !1 } },
                            grid: { show: !0, xaxis: { lines: { show: !0 } }, yaxis: { lines: { show: !1 } }, padding: { top: 0, right: -2, bottom: 15, left: 10 } },
                            legend: { show: !0, horizontalAlign: "center", offsetX: 0, offsetY: -5, markers: { width: 9, height: 9, radius: 6 }, itemMargin: { horizontal: 10, vertical: 0 } },
                            plotOptions: { bar: { columnWidth: "30%", barHeight: "70%" } },
                            colors: linechartcustomerColors,
                            tooltip: {
                                shared: !0,
                                y: [
                                    {
                                        formatter: function (e) {
                                            return void 0 !== e ? e.toFixed(0) : e;
                                        },
                                    },
                                    {
                                        formatter: function (e) {
                                            return void 0 !== e ? "$" + e.toFixed(2) + "k" : e;
                                        },
                                    },
                                    {
                                        formatter: function (e) {
                                            return void 0 !== e ? e.toFixed(0) : e;
                                        },
                                    },
                                ],
                            },
                        }),
                        (chart = new ApexCharts(document.querySelector("#projects-overview-chart"), options)).render()),
                    {}),
                isApexSeries = document.querySelectorAll("[data-chart-series]"),
                donutchartProjectsStatusColors =
                    (isApexSeries &&
                        Array.from(isApexSeries).forEach(function (e) {
                            var t,
                                e = e.attributes;
                            e["data-chart-series"] &&
                                ((isApexSeriesData.series = e["data-chart-series"].value.toString()),
                                (t = getChartColorsArray(e.id.value.toString())),
                                (t = {
                                    series: [isApexSeriesData.series],
                                    chart: { type: "radialBar", width: 36, height: 36, sparkline: { enabled: !0 } },
                                    dataLabels: { enabled: !1 },
                                    plotOptions: { radialBar: { hollow: { margin: 0, size: "50%" }, track: { margin: 1 }, dataLabels: { show: !1 } } },
                                    colors: t,
                                }),
                                new ApexCharts(document.querySelector("#" + e.id.value.toString()), t).render());
                        }),
                    getChartColorsArray("prjects-status")),
                currentChatId =
                    (donutchartProjectsStatusColors &&
                        ((options = {
                            series: [125, 42, 58, 89],
                            labels: ["Completed", "In Progress", "Yet to Start", "Cancelled"],
                            chart: { type: "donut", height: 230 },
                            plotOptions: { pie: { size: 100, offsetX: 0, offsetY: 0, donut: { size: "90%", labels: { show: !1 } } } },
                            dataLabels: { enabled: !1 },
                            legend: { show: !1 },
                            stroke: { lineCap: "round", width: 0 },
                            colors: donutchartProjectsStatusColors,
                        }),
                        (chart = new ApexCharts(document.querySelector("#prjects-status"), options)).render()),
                    "users-chat");

        </script>
    </body>
</html>
