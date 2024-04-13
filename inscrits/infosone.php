<?php session_start(); ?>
<?php  
    if ( !isset($_SESSION['candidatid']) || empty($_SESSION['candidatid']) ) {
        header("Location: ../");
        exit();
    }
?>
<!DOCTYPE html>
<html
     lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar="light" data-bs-theme="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="vintage" data-theme-colors="default" data-sidebar-user-show="" data-layout-width="fluid" data-layout-position="fixed" data-layout-style="default" data-body-image="none" data-sidebar-visibility="show" class="fontawesome-i2svg-active fontawesome-i2svg-complete"
>
    <head>
        <meta charset="utf-8" />
        <title>Infos personnels | Mwinda Holding - Sous-traitance d'excellence, résultats probants</title>
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
                        <div class="profile-foreground position-relative mx-n4 mt-n4">
                            <div class="profile-wid-bg">
                                <img src="assets/images/logo-white.png" alt="" class="profile-wid-img" />
                                <!-- <img src="assets/images/Drapeau_RDC.gif" alt="" class="profile-wid-img" /> -->
                            </div>
                        </div>
                        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                            <div class="row g-4">
                                <div class="col-auto">
                                    <div class="avatar-lg" style="position: relative;">
                                        <a data-bs-toggle="modal" data-bs-target="#infoavatar" href="text-danger" title="Modifier" style="position: ab;">
                                            <img src="assets/avatarcandidat/<?= $_SESSION['avatar'] ?>" alt="Click pour modifier le profil" class="img-thumbnail rounded-circle" />
                                        </a>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col">
                                    <div class="p-2">
                                        <h3 class="text-white mb-1"><?= $_SESSION['name'] ?></h3>
                                        <p class="text-white text-opacity-75">
                                            <?= $_SESSION['secteur'] ?>
                                        </p>
                                        <div class="hstack text-white-50 gap-1">
                                            <div class="me-2">
                                                
                                                <span style="margin-right: 15px;">
                                                    <?= $_SESSION['profil'] ?>
                                                </span>

                                                <button style="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#infoprofil" title="Modifier" col="profil">
                                                    <i class="fa-solid fa-pen"></i>&nbsp;
                                                    Rédiger votre à propos
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div class="row" style="margin-top: 45px;">
                            <div class="col-lg-12">
                                <div>
                                    <div class="d-flex profile-wrapper">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                    <i style="color: #1e499b;" class="fa-solid fa-user d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Profil</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#experience-tab" role="tab">
                                                    <i style="color: #1e499b;" class="fa-solid fa-user-tie d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Expériences</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a target="_blank" class="nav-link fs-14" data-bs-toggle="tab" href="#education-tab" role="tab">
                                                    <i style="color: #1e499b;" class="fa-solid fa-award d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Educations</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a target="_blank" class="nav-link fs-14" data-bs-toggle="tab" href="#competance-tab" role="tab">
                                                    <i style="color: #1e499b;" class="fa-solid fa-kitchen-set d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Compétences</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a target="_blank" class="nav-link fs-14" data-bs-toggle="tab" href="#portfolio-tab" role="tab">
                                                    <i style="color: #1e499b;" class="fa-solid fa-address-book d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Portfolio</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a target="_blank" class="nav-link fs-14" data-bs-toggle="tab" href="#langue-tab" role="tab">
                                                    <i style="color: #1e499b;" class="fa-solid fa-language d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Langues</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a target="_blank" class="nav-link fs-14" data-bs-toggle="tab" href="#tarif-tab" role="tab">
                                                    <i style="color: #1e499b;" class="fa-solid fa-money-bill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Tarification</span>
                                                </a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a target="_blank" class="nav-link fs-14"href="../reset" target="_blank">
                                                    <i style="color: #1e499b;" class="fa-solid fa-lock d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Changer le mot de passe</span>
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- Tab panes -->

                                        <div class="tab-content pt-4 text-muted">
                                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header" style="display: flex;justify-content: space-between;">
                                                                <h5 class="card-title mb-0">Infos personnels</h5>
                                                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="">
                                                                    <i class="fa-solid fa-trash"></i>&nbsp;
                                                                    <span>Supprimer mon compte</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="" class="display table table-bordered" style="width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    Nom complet
                                                                                    &nbsp;&nbsp;<a data-bs-toggle="modal" data-bs-target="#infoperson" href="text-warning" title="Modifier" col="Nom complet" name="name" value="<?= $_SESSION['name'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                                                </th>
                                                                                <th>
                                                                                    Date de naissance
                                                                                    &nbsp;&nbsp;<a data-bs-toggle="modal" data-bs-target="#infopersonnaissance" href="text-warning" title="Modifier" col="Date de naissance" name="datenaiss" value="<?= $_SESSION['datenaiss'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                                                </th>
                                                                                <th>
                                                                                    Telephone
                                                                                    &nbsp;&nbsp;<a data-bs-toggle="modal" data-bs-target="#infoperson" href="text-warning" title="Modifier" col="Telephone" name="phone" value="<?= $_SESSION['phone'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                                                </th>
                                                                                <th>
                                                                                    Email
                                                                                    &nbsp;&nbsp;<a data-bs-toggle="modal" data-bs-target="#infoperson" href="text-warning" title="Modifier" col="Email" name="email" value="<?= $_SESSION['email'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                                                </th>
                                                                                <th>
                                                                                    Valorisation
                                                                                    &nbsp;&nbsp;<a data-bs-toggle="modal" data-bs-target="#infoperson" href="text-warning" title="Modifier" col="Valorisation" name="salaire" value="<?= $_SESSION['salaire'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                                                </th>
                                                                                <th>
                                                                                    Secteur d'activité
                                                                                    &nbsp;&nbsp;<a data-bs-toggle="modal" data-bs-target="#infopersonsecteur" href="text-warning" title="Modifier" col="secteur" name="secteur" value="<?= $_SESSION['secteur'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?= $_SESSION['name'] ?></td>
                                                                                <td><?= $_SESSION['datenaiss'] ?></td>
                                                                                <td><?= $_SESSION['phone'] ?></td>
                                                                                <td><?= $_SESSION['email'] ?></td>
                                                                                <td><?= $_SESSION['salaire'] ?></td>
                                                                                <td><?= $_SESSION['secteur'] ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end row-->
                                            </div>

                                            <div class="tab-pane fade" id="experience-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header" style="display: flex;justify-content: space-between;">
                                                                <h5 class="card-title mb-0">Mes expériences</h5>
                                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#experiences">
                                                                    <i class="fa-solid fa-plus"></i>&nbsp;
                                                                    <span>Ajouter</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="" class="display table table-bordered" style="width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Société</th>
                                                                                <th>Poste occupé</th>
                                                                                <th>Type de contrant</th>
                                                                                <th>Date debut - Date fin</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php  
                                                                                require 'models/call/experience/mh_list.php';
                                                                                while ($res = $listAll->fetch(PDO::FETCH_OBJ)) {
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?= $res->societe ?></td>
                                                                                    <td><?= $res->poste ?></td>
                                                                                    <td><?= $res->contrant ?></td>
                                                                                    <td><?= $res->debut.' - '.$res->fin ?></td>
                                                                                    <td>
                                                                                        <a href="models/call/experience/delete-<?= $res->id ?>" class="text-danger">
                                                                                            Supprimer
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php }$listAll->closeCursor() ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="education-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header" style="display: flex;justify-content: space-between;">
                                                                <h5 class="card-title mb-0">Mes prix</h5>
                                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#education">
                                                                    <i class="fa-solid fa-plus"></i>&nbsp;
                                                                    <span>Ajouter</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="" class="display table table-bordered" style="width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Etablissement</th>
                                                                                <th>Prix gagné</th>
                                                                                <th>Date debut - Date fin</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php  
                                                                                require 'models/call/education/mh_list.php';
                                                                                while ($res = $listAll->fetch(PDO::FETCH_OBJ)) {
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?= $res->etablissement ?></td>
                                                                                    <td><?= $res->titre ?></td>
                                                                                    <td><?= $res->debut.' - '.$res->fin ?></td>
                                                                                    <td>
                                                                                        <a href="models/call/education/delete-<?= $res->id ?>" class="text-danger">
                                                                                            Supprimer
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php }$listAll->closeCursor() ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="competance-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header" style="display: flex;justify-content: space-between;">
                                                                <h5 class="card-title mb-0">Mes compétances</h5>
                                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#competance">
                                                                    <i class="fa-solid fa-plus"></i>&nbsp;
                                                                    <span>Ajouter</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="" class="display table table-bordered" style="width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Competance</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php  
                                                                                require 'models/call/competence/mh_list.php';
                                                                                while ($res = $listAll->fetch(PDO::FETCH_OBJ)) {
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?= $res->competences ?></td>
                                                                                    <td>
                                                                                        <a href="models/call/competence/delete-<?= $res->id ?>" class="text-danger">
                                                                                            Supprimer
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php }$listAll->closeCursor() ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="portfolio-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header" style="display: flex;justify-content: space-between;">
                                                                    <h5 class="card-title mb-0">Mon portfolio</h5>
                                                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#portfolio">
                                                                        <i class="fa-solid fa-plus"></i>&nbsp;
                                                                        <span>Ajouter</span>
                                                                    </button>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <table id="" class="display table table-bordered" style="width: 100%;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Images</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php  
                                                                                    require 'models/call/portfolio/mh_list.php';
                                                                                    while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                                                                                ?>
                                                                                    <tr>
                                                                                        <td style="vertical-align: middle;">
                                                                                            <a href="assets/portfolio/<?= $res->porfolio ?>">
                                                                                                <?php  
                                                                                                    if ($res->extension == 'mp4' || $res->extension == 'mp3') {
                                                                                                ?>
                                                                                                    <video style="width: 75px;" src="assets/portfolio/<?= $res->porfolio ?>"></video>
                                                                                                <?php }else{ ?>
                                                                                                    <img class="img-thumbnail" src="assets/portfolio/<?= $res->porfolio ?>" width="45">
                                                                                                <?php } ?>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td style="vertical-align: middle;">
                                                                                            <a href="models/call/portfolio/delete-<?= $res->id ?>" class="text-danger">
                                                                                                Supprimer
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php }$req->closeCursor() ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="langue-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header" style="display: flex;justify-content: space-between;">
                                                                <h5 class="card-title mb-0">Mes langues</h5>
                                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#langue">
                                                                    <i class="fa-solid fa-plus"></i>&nbsp;
                                                                    <span>Ajouter</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="" class="display table table-bordered" style="width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Langue</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php  
                                                                                require 'models/call/langue/mh_list.php';
                                                                                while ($res = $listAll->fetch(PDO::FETCH_OBJ)) {
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?= $res->langue ?></td>
                                                                                    <td>
                                                                                        <a href="models/call/langue/delete-<?= $res->id ?>" class="text-danger">
                                                                                            Supprimer
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php }$listAll->closeCursor() ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="tarif-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header" style="display: flex;justify-content: space-between;">
                                                                <h5 class="card-title mb-0">Mes tarifs</h5>
                                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tarif">
                                                                    <i class="fa-solid fa-plus"></i>&nbsp;
                                                                    <span>Ajouter</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="" class="display table table-bordered" style="width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Domaine</th>
                                                                                <th>Coût</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php  
                                                                                require 'models/call/tarif/mh_list.php';
                                                                                while ($res = $listAll->fetch(PDO::FETCH_OBJ)) {
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?= $res->domaine ?></td>
                                                                                    <td><?= $res->cout ?></td>
                                                                                    <td>
                                                                                        <a href="models/call/tarif/delete-<?= $res->id ?>" class="text-danger">
                                                                                            Supprimer
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php }$listAll->closeCursor() ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end tab-pane-->
                                        </div>
                                    </div>
                                    <!--end tab-content-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php require 'views/footer.php'; ?>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <div class="modal fade" id="infoavatar" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/candidat/avatar" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Completer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <label for="avatar" class="col-form-label">Avatar</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control" required>
                                    <p style="padding: 0;margin: 0;font-size: .8em;" class="help-block text-danger">PNG, JPG, JPEG</p>
                                    <p style="padding: 0;margin: 0;font-size: .8em;" class="help-block text-danger">MAX: 5M0</p>
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="infopersonnaissance" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/candidat/datenaiss" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Completer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <label for="date" class="col-form-label">Date de naissance</label>
                                    <input type="date" value="<?= date("d-m-Y", strtotime($_SESSION['datenaiss'])) ?>" name="date" id="date" class="form-control" required>
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="infopersonsecteur" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/candidat/secteur" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Completer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <label for="date" class="col-form-label">Secteur d'activité</label>
                                    <select class="form-select" name="secteur" required>
                                        <?php  
                                            require 'models/secteurs.php';
                                            while ($res= $req->fetch(PDO::FETCH_OBJ)) {
                                        ?>
                                            <option value="<?= $res->designation ?>" <?php echo ($res->designation == $_SESSION['secteur']) ? 'selected' : ''; ?> ><?= $res->designation ?></option>
                                        <?php }$req->closeCursor(); ?>
                                    </select>
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="infoprofil" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/candidat/profil">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Completer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <label for="profil" id="labelperso" class="col-form-label">Profil</label>
                                    <textarea rows="10" maxlength="500" class="form-control" name="profil" id="profil" required><?= $_SESSION['profil'] ?></textarea>
                                    <p class="help-block text-danger" style="font-size: .7em;">Moins de 500 caractères</p>
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="infoperson" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/candidat/update">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Completer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <label for="updateperso" id="labelpersoupdate" class="col-form-label"></label>
                                    <input type="hidden" name="culum" id="culum">
                                    <input type="text" class="form-control" name="updateperso" id="updateperso" required />
                                </div>

                            </div>

                            <script type="text/javascript">
                                let labelperso = document.getElementById('labelpersoupdate')
                                let updateperso = document.getElementById('updateperso')
                                let culum = document.getElementById('culum')
                                let links = document.querySelectorAll("a[data-bs-target='#infoperson']")

                                
                                for (var i = 0; i < links.length; i++) {
                                    links[i].addEventListener('click', function(e) {
                                        e.preventDefault()
                                        labelperso.textContent = this.getAttribute('col')
                                        updateperso.value = this.getAttribute('value')
                                        culum.value = this.getAttribute('name')
                                    })
                                }

                            </script>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="experiences" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/experience/add">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Ajouter une expérience</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-6">
                                    <label for="societe" class="col-form-label">Société</label>
                                    <input type="text" class="form-control" name="societe" id="societe" required />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="poste" class="col-form-label">Poste occupé</label>
                                    <input type="text" class="form-control" name="poste" id="poste" required />
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="contrant" class="col-form-label">Type de contrant</label>
                                    <input type="text" class="form-control" name="contrant" id="contrant" required />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="debut" class="col-form-label">Date début</label>
                                    <input type="date" class="form-control" name="debut" id="debut" required />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="fin" class="col-form-label">Date fin</label>
                                    <input type="date" class="form-control" name="fin" id="fin" required />
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="education" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/education/add">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Ajouter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-6">
                                    <label for="etab" class="col-form-label">Etablissement</label>
                                    <input type="text" class="form-control" name="etablissement" id="etab" required />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="titre" class="col-form-label">Titre</label>
                                    <input type="text" class="form-control" name="titre" id="titre" required />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="debut" class="col-form-label">Date début</label>
                                    <input type="date" class="form-control" name="debut" id="debut" required />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="fin" class="col-form-label">Date fin</label>
                                    <input type="date" class="form-control" name="fin" id="fin" required />
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="competance" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/competence/add">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Ajouter une compétance</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <label for="competance" class="col-form-label">Compétances</label>
                                    <input type="text" class="form-control" name="competences" id="competance" required />
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="portfolio" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/portfolio/add" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Ajouter des images dans le portfolio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <label for="cover" class="col-form-label">Image</label>
                                    <input type="file" class="form-control" id="cover" required name="files[]" required="" accept=".png,.PNG, .jpg, .jpeg, .JPG, .JPEG, .mp4, .mp3" multiple="">
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="langue" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/langue/add">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Ajouter une langue</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <label for="langue" class="col-form-label">Langue</label>
                                    <input type="text" class="form-control" name="langue" id="langue" required />
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="tarif" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="models/call/tarif/add">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Ajouter une tarification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="domaine" class="col-form-label">Domaine</label>
                                <input type="text" class="form-control" name="domaine" id="domaine" required />
                            </div>
                            
                            <div class="mb-3">
                                <label for="cout" class="col-form-label">Coût</label>
                                <input type="text" placeholder="ex: 330$" class="form-control" name="cout" id="cout" required />
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
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
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
