<?php
require $_SERVER['DOCUMENT_ROOT'].'/seolyzer-e7bdf29c38c13de794e8d1df64aa9105.php';
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
    <meta name="description" content="Les serveurs de caddy sont utilisés pour le développement web. Les serveurs de caddy permettent de prendre en charge des domaines et des sites web avec une facilité accrue" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom-style.css" />

    <title>Découverte de Caddy Serve</title>

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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z5WSPT3J4C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z5WSPT3J4C');
</script>
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
            <p>Les serveurs de caddy sont utilisés pour le développement web. Les serveurs de caddy permettent de prendre en charge des domaines et des sites web avec une facilité accrue grâce à une interface utilisateur, un serveur automatique et un assistant. Les serveurs de caddy offrent des fonctionnalités avancées d'administration, telles que les certificats SSL et les réglages d'accès par IP.</p>
            <h2>Avantage par rapport à Nginx / Apache</h2>
            <p>Bienvenue dans cette nouveau
tutoriel aujourd'hui je vous propose de
découvrir ensemble le serveur web cad
donc à 10 et se veut être une
alternative à ngx waha pages qui a comme
particularité d'avoir une configuration
qui est simplifié vous allez le voir on
peut très rapidement configurer un nom
de domaine et en plus il va avoir la
gestion du certificat ssl automatique
donc lorsque l'on va configurer le nom
de domaine pas besoin de s'embêter avec
les 100 script est certes bottes et tout
ça automatiquement ces cas dits qui va
gérer ça pour pour nous donc lorsque
l'on souhaite déployer une application
est un site c'est très rapide alors
c'est ce que je vous propose aujourd'hui
j'ai pris un petit nom de domaine que
j'ai relié à un serveur qui fait tourner
actuellement ubuntu donc mon objectif
pour commencer c'est d'installer caddie
donc si on se rend au niveau de la
documentation up et on a une partie
installation ici on a différents types
d'installations donc moi je suis sur un
ubuntu donc je vais prendre la version
stable donc on doit commencer par
installer le système de clé donc ça
c'est ce qui va permettre de rajouter
des éléments au dépôt est de faire en
sorte que ça fonctionne correctement
donc ça s'est relativement classique
ensuite on va venir télécharger la clé
ça correspond la seconde ligne voilà une
fois qu'elle est téléchargé on va
rajouter les dépôts à la liste de nos
dépôts donc ça c'est ce que fait cette
commande c'est la commande de ti
et une fois que c'est fait on peut faire
un à péter à beit histoire de mettre à
jour la liste des dépôts et une fois que
ça a fini on va pouvoir faire un appétit
installe et on va installer cadic donc
évidemment faudra adapter en fonction de
votre système une fois que s'est
installée dans le cadre du blue tooth il
va automatiquement démarrer le service
qui va faire fonctionner qu'à 10
serveurs donc dès lors lorsque je me
rendre sur mon nom de domaine ou si je
tape lippé de mon serveur lorsque je
réactualise je me retrouve avec la page
d'accueil de caddy un petit peu comme
la page d'accueil de nginx donc sur
cette page on a différentes instructions
sur commande configurer qu'a dit on nous
dit que ça a bien fonctionné et s'il ya
des problèmes on nous explique un petit
peu ce qu'il faut regarder à moi ce qui
va m'intéresser c'est cette commande là
cette commande elle va permettre de voir
le log qui sort de ce service là
je vais faire c'est que sur un terminal
je vais laisser cette commande de
tourner ça nous permettra de voir ce qui
se passe lorsque l'on configure caddy
donc je vais le faire ici sur la colonne
de droite je vais faire un coup de
journal s'était elle tire et irène open
je retirais eu donc eu ça va permet de
choisir l'unité on va ici regardez les
log de caddy et je vais rajouter un tir
et f pour qu'il continue à les afficher
au fur et à mesure donc comme il est dit
dans cette petite partie accueil en a la
possibilité de modifier la configuration
de code caddie en modifiant ce fichier.</p>
            <h2>Installation de Caddy</h2>
            <p>C
La première chose à faire est de trouver un emplacement pour votre caddy. C'est là que vous devez le fixer. Pour réaliser cette étape, vous devrez d'abord déterminer si votre caddy sera fixé au mur ou sur un support comme un meuble ou une étagère. Les supports sont beaucoup plus pratiques, car ils ne nécessitent pas d'entretien et peuvent être déplacés facilement. Après avoir pris la décision, vous devez choisir la position de votre caddy

</p>
            <h2>Les points négatif</h2>
            <p>Vous pourriez être amené à installer un serveur caddy afin de permettre à votre entreprise de gérer les fichiers de sauvegarde et d'autres informations, comme les mots de passe et les adresses IP. Les serveurs caddy sont faciles à installer, mais ils ont besoin d'un administrateur ayant une certaine expérience pour les gérer correctement.</p>
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