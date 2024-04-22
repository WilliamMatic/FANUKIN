<!-- Footer start -->
<footer class="irs-footer-field">
    <div class="container">
        <div class="row animatedParent animateOnce animateOnce">
            <div class="col-md-3">
                <div class="irs-footer-about">
                    <img style="width: 120px;height: auto;object-fit: contain;image-rendering: auto;" class="irs-foooter-logo" src="assets/images/logo-fanukin.png" alt="" />
                    <p>
                        Plateforme créée dans le but ultime d’œuvrer en faveur de l’épanouissement, du rayonnement et du réseautage des anciens de la colline inspirée en RDC et à travers le monde, dans les milieux professionnels et socio-économiques. 
                    </p>
                    <div class="irs-social">
                        <a href="https://www.facebook.com/profile.php?id=61555865106588&mibextid=JRoKGi" target="_blank"><i class="icofont icofont-social-facebook"></i></a>
                        <a href="https://x.com/fanukinasbl?s=11" target="_blank"><i class="icofont icofont-social-twitter"></i></a>
                        <a href="https://whatsapp.com/channel/0029VaLeodb6xCSUIPIqhH0S" target="_blank"><i class="icofont icofont-social-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/company/fanukin-asbl/" target="_blank"><i class="icofont icofont-brand-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="irs-footer-link">
                    <h4 class="irs-footer-heading">Liens utiles</h4>
                    <ul>
                        <li><a href="home">Accueil</a></li>
                        <li><a href="about">Qui sommes-nous</a></li>
                        <li><a href="registered">Les alumni</a></li>
                        <li><a href="news">Actualités</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="irs-footer-tweets">
                    <h4 class="irs-footer-heading">Derniers news</h4>
                    <?php  
                        require 'models/articles-footer.php';
                        while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                    ?>
                        <div class="irs-tweets">
                            <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;<a href="article-<?= $res->id ?>"><?= $res->titre ?></a></p>
                            <span style="font-size: .8em;">Publiée le <?= $res->datepub ?></span>
                        </div>
                    <?php  
                        }$req->closeCursor();
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="irs-footer-contact">
                    <h4 class="irs-footer-heading">Contact</h4>
                    <img src="assets/images/footer.jpg" alt="" />
                    <div class="irs-mailbox">
                        <p><i class="zmdi zmdi-email"></i> Mail: asblfanukin@gmail.com</p>
                        <p><i class="fa fa-phone"></i> +243 81 99 56 364 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<section class="irs-copyright-field">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="irs-copyright">
                    <p>Copyright© <?= date('Y') ?>. Design by <a href="#">MastaGate</a></p>
                </div>
            </div>
        </div>
    </div>
</section>