<?php
require $_SERVER['DOCUMENT_ROOT'].'/seolyzer.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P2QFDZ4');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom-style.css" />

    <title>Hexashop - Product Listing Page</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css" />

    <link rel="stylesheet" href="assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="assets/css/lightbox.css" />
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-P2QFDZ4" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img width="150px" height="150px" src="assets/images/logo.png" />
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="AProposDeNous.php">à propos de nous</a>
                            </li>

                            <li class="submenu">
                                <a href="javascript:;">Formations</a>
                                <ul>
                                    <li><a href="Backend.php">backend</a></li>
                                    <li><a href="Frontend.php">Frontend</a></li>
                                    <li><a href="CRM.php">CRM</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section">
                                <a href="Tutoriel.php">Tutoriels</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="Contact.php">Contact</a>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->

    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="detail-tuto">
            <h1>Découverte de Caddy Server</h1>
            <p>Si on regarde les premiers exemples de la documentation on peut penser que SolidJS n'est qu'un simple
                clone de React (un peu comme Preact).</p>
            <h4>Avantage par rapport à Nginx / Apache</h4>
            <p>Comme cet article est une introduction simplifiée à JavaScript, nous n'allons pas compliquer les choses à
                ce stade en entrant dans les détails sur les différences entre le coeur du langage JavaScript et les
                différents outils cités plus haut. Vous pourrez entrer dans ces détails plus tard grâce à notre centre
                d'apprentissage JavaScript, et le reste du MDN.</p>
            <h4>Installation</h4>
            <p>Caddy peut être utilisé sous forme de simple éxécutable (pratique pour une configuration docker ou dans
                le cas d'un serveur de développement) mais aussi sous forme de service. Dans le cadre d'Ubuntu
                l'installation de Caddy se fait de manière traditionnelle en l'ajoutant à la liste des dépôt.

                Une fois installée le service va démarrer automatiquement et répondra sur le port 80 (HTTP) avec la page
                d'accueil par défaut. Caddy peut ensuite être configuré à l'aide du fichier Caddyfile présent dans le
                dossier /etc/caddy/

                Config</p>
            <h4>Les points négatifsn</h4>
            <p>Evidemment tout n'est pas parfait et j'ai rencontré quelques problème (peut être par manque de
                connaissance donc n'hésitez pas à me corriger).

                Le format des logs en JSON est un peu moins lisible que le format d'nginx (peut être une question
                d'habitude), bien que plus facilement parsable par des outils tiers. Mais un module existe pour
                contrebalancer ce problème.
                Il n'y a pas de système anti burst préintégrés (un module tiers existe mais je ne l'ai pas testé).</p>
        </div>

    </section>
    <!-- ***** Products Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img width="150px" height="150px" src="assets/images/logo.png"
                                alt="hexashop ecommerce templatemo" />
                        </div>
                        <ul>
                            <li>
                                <a href="#">92150 Avenue Paris, Paris 7600, France</a>
                            </li>
                            <li><a href="#">dsp@school.fr</a></li>
                            <li><a href="#">0033 - 488 406 415</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="index.php">Formations</a></li>
                        <li><a href="Tutoriel.php">Tutoriel</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Liens interessants</h4>
                    <ul>
                        <li><a href="index.php">Acueill</a></li>
                        <li><a href="AProposDeNous.php">à propos de nous</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 eSchool Co. Fr. All Rights Reserved.</p>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div")
                    .not("." + selectedClass)
                    .fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>
</body>

</html>