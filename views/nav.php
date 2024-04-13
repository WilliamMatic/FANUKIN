<?php $pageUrl = $_SERVER['REQUEST_URI']; ?>
<nav class="navbar navbar-default irs-navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">
                <img src="assets/images/logo-fanukin.png" alt="" />
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="flipInY">
                
                <?php  
                    if ($pageUrl == "/FANUKIN/home") {
                ?>
                    <li class="dropdown active">
                        <a href="home">Accueil</a>
                    </li>
                <?php }else{ ?>
                    <li class="dropdown">
                        <a href="home">Accueil</a>
                    </li>
                <?php } ?>

                <?php  
                    if ($pageUrl == "/FANUKIN/about") {
                ?>
                    <li class="active"><a href="about" style="text-transform: initial;">Qui sommes-nous</a></li>
                <?php }else{ ?>
                    <li><a href="about" style="text-transform: initial;">Qui sommes-nous</a></li>
                <?php } ?>

                <?php  
                    if ($pageUrl == "/FANUKIN/registered") {
                ?>
                    <li class="dropdown active">
                        <a href="registered">
                            Les alumni
                        </a>
                    </li>
                <?php }else{ ?>
                    <li class="dropdown">
                        <a href="registered">
                            Les alumni
                        </a>
                    </li>
                <?php } ?>

                <?php  
                    if ($pageUrl == "/FANUKIN/news") {
                ?>
                    <li class="dropdown active">
                        <a href="news">
                            Actualités
                        </a>
                    </li>
                <?php }else{ ?>
                    <li class="dropdown">
                        <a href="news">
                            Actualités
                        </a>
                    </li>
                <?php } ?>

                <?php  
                    if ($pageUrl == "/FANUKIN/news") {
                ?>
                    <li class="dropdown active">
                        <a href="#">
                            Autres
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php  
                                if ($pageUrl == "/FANUKIN/news") {
                            ?>
                                <li class="dropdown active">
                                    <a href="projets" style="text-transform: initial;">
                                        Projets & programmes
                                    </a>
                                </li>
                            <?php }else{ ?>
                                <li class="dropdown">
                                    <a href="projets" style="text-transform: initial;">
                                        Projets & programmes
                                    </a>
                                </li>
                            <?php } ?>



                            <?php  
                                if ($pageUrl == "/FANUKIN/news") {
                            ?>
                                <li class="dropdown active">
                                    <a href="danation"  style="text-transform: initial;">
                                        Faire un don
                                    </a>
                                </li>
                            <?php }else{ ?>
                                <li class="dropdown">
                                    <a href="danation" style="text-transform: initial;">
                                        Faire un don
                                    </a>
                                </li>
                            <?php } ?>

                            <?php  
                                if ($pageUrl == "/FANUKIN/contact") {
                            ?>
                                <li class="dropdown active">
                                    <a href="contact" style="text-transform: initial;">
                                        Contact
                                    </a>
                                </li>
                            <?php }else{ ?>
                                <li class="dropdown">
                                    <a href="contact" style="text-transform: initial;">
                                        Contact
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php }else{ ?>
                    <li class="dropdown">
                        <a href="#">
                            Autres
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php  
                                if ($pageUrl == "/FANUKIN/news") {
                            ?>
                                <li class="dropdown active">
                                    <a href="projets" style="text-transform: initial;">
                                        Projets & programmes
                                    </a>
                                </li>
                            <?php }else{ ?>
                                <li class="dropdown">
                                    <a href="projets" style="text-transform: initial;">
                                        Projets & programmes
                                    </a>
                                </li>
                            <?php } ?>



                            <?php  
                                if ($pageUrl == "/FANUKIN/news") {
                            ?>
                                <li class="dropdown active">
                                    <a href="danation" style="text-transform: initial;">
                                        Faire un don
                                    </a>
                                </li>
                            <?php }else{ ?>
                                <li class="dropdown">
                                    <a href="danation" style="text-transform: initial;">
                                        Faire un don
                                    </a>
                                </li>
                            <?php } ?>

                            <?php  
                                if ($pageUrl == "/FANUKIN/contact") {
                            ?>
                                <li class="dropdown active">
                                    <a href="contact" style="text-transform: initial;">
                                        Contact
                                    </a>
                                </li>
                            <?php }else{ ?>
                                <li class="dropdown">
                                    <a href="contact" style="text-transform: initial;">
                                        Contact
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
            
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>