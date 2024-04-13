<header class="irs-main-header">
    <div class="irs-header-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <div class="irs-header-top-col irs-center-2">
                        <p><i class="fa fa-phone"></i>&nbsp;&nbsp;+243 - 81 99 56 364 </p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="irs-header-top-col irs-center-2">
                        <p><i class="fa-solid fa-clock"></i>&nbsp;&nbsp;06:00 - 22:00</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-5 col-sm-4">
                    <div class="irs-header-top-col text-right irs-center-2">
                        <div class="irs-social text-right irs-center-2">
                            <a href="https://www.facebook.com/profile.php?id=61555865106588&mibextid=JRoKGi" target="_blank"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="https://x.com/fanukinasbl?s=11" target="_blank"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="https://whatsapp.com/channel/0029VaLeodb6xCSUIPIqhH0S" target="_blank"><i class="icofont icofont-social-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/company/fanukin-asbl/" target="_blank"><i class="icofont icofont-brand-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="irs-header-nav scrollingto-fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12">
                    <?php require 'nav.php'; ?>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="irs-log-reg">
                        <?php  
                            if (isset($_SESSION['candidatid']) && !empty($_SESSION['candidatid'])) {
                        ?>
                            <a href="inscrits/dashboard">Dashboard</a>
                        <?php }else{ ?>
                            <a href="authenticate">Nous rejoindre</a>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>