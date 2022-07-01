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
            <h1>Découverte de SolidJS</h1>
            <h2>c'est quoi Solid JS</h2>
            <p>si vous cherchez un solide
framework javascript solid.js est un
excellent choix j'ai adoré quand j'ai
je l'ai regardé il y a longtemps j'ai adoré
l'ergonomie du développeur qu'il a fourni et
ça prend de l'ampleur
ces dernières années donc si vous êtes comme moi
et j'aime apprendre de nouvelles technologies même si c'est
pas quelque chose que vous allez immédiatement
utiliser dans votre travail de jour cette leçon est pour
alors allons-y</p>
           <h2>comment mettre en place Solid JS</h2>
            <p> bienvenue dans ce nouveaux article aujourd'hui je vous propose de découvrir ensemble solide js quitte une librairie qui va vous permettre de créer
des interfaces web réactive pour le web et qui se veut finalement être une alternative à des choses comme react
welt ouf js alors pour l'utiliser c'est très simple vous avez une petite commande qui vous permet d'initialiser
un template cette commande va simplement clown et le template donc je vais commencer à me rentrer dedans et installer les différentes dépendances si
on regarde un petit peu le contenu de ce temple est ce n'est ni plus ni moins qu'un projet vite sauf qu'ils ont utilisés un plugin pour solide donc ça
veut dire que si jamais vous avez déjà un projet qui utilise vite j s il vous suffit simplement de rajouter ce plugin
pour le faire fonctionner ensuite ce que le jeu est fair c'est qu'une fois que les dépendances se sont installés je vais faire un coup de pnp m run dette
vous pouvez utiliser npm ou yard ça ne change absolument rien et je vais ouvrir la page ou sur mon navigateur par défaut
en à cette petite page d'accueil qui nous explique que solide et bien installée et bien fonctionnel alors histoire de découvrir ce framework là on
va ouvrir le fichier index princier 6 et on va supprimer ce qu'il ya par défaut donc la première grosse particularité de
solid js c'est que il utilise du g16 c'est un petit peu comme réac finalement mais derrière ce n'est pas du virtuel d'hommes qui est utilisé pour s'en
rendre compte il suffit de faire un petit console point log et de générer par exemple une simple div si je fais ça
et que je regarde au niveau de ma console ce qui se passe on voit que plutôt que de nous donner un objet particulier qui serait un élément qui
résulteraient d'une conversion gsx on a ici un élément dans le dom on pourrait tout à fait par exemple le faire un
document point body point appendchild est allé lui dire j'aimerais bien rajouté cet élément là et ça
fonctionnerait donc il n'ya pas de virtualdub au niveau de solid js lorsque l'on souhaite créer un composant
bas il suffit simplement de créer une fonction comme on le ferait dans les actes je peux créer ici une fonction que je vais appeler ap et dans cette
fonction je return mongie sx une fois que j'ai cette fonction qui est utilisé je peux utiliser la fonction
renders de solid js pour rendre ça quelque part dans un monde d'hommes donc je voulais dire je veux rendre mon composants ap et je veux le rendre dans
mon body pour l'instant ça revient un petit peu la même chose mais maintenant imaginons que l'on souhaite avoir
quelque chose de réactifs on aimerait bien avoir un système de conteur et lorsque l'on clique sur un bouton en l'agrémentent je sais c'est l'exemple
typique mais c'est un bon exemple pour se représenter les choses dans le cadre de solid js pour avoir des données qu'ils sont active on va utiliser la méthode
cruelle signal cette méthode prend une valeur initiale on va ici mettre en valeur 0 et va retourner un tableau de
taille 2 avec les guetteurs d'un côté et le secteur de l'autre donc pour le coup ça va être très proche de ce qu'on en a
avec le lieu the state direct par exemple donc ici je vais écrire et count et 7 count
ensuite d'en manger à 6 si je souhaite afficher la valeur du compteur on va pouvoir afficher koons et on ne va pas
utiliser directement la variable comme ceux ci mais on va utiliser le guetteur c'est à dire qu'on va utiliser une fonction pour récupérer la valeur c'est
déjà une première particularité par rapport à rect si ensuite je souhaite modifier la valeur est ce que je vais pouvoir faire
c'est créer un petit bouton donc si vous êtes habitué à durer actes c'est très classique est pour le coup donc je vais
créer un mouton et je vais lui dire lorsque l'on clique sur le bouton je veux faire un set compte et à
l'intérieur je peux lui dire simplement de faire un compte plus et automatiquement ils valent incrémenté et
ça attention c'est une fonction si j'essaie maintenant de réactualiser la page et que je clique sur mon bouton on
voit bien que le compteur s'incrémente alors en soit vous allez me dire ouais mais attends là c'est juste dur et actes ce qu'on a changé use the state par un
creux et si mais pas du tout première remarque c'est que si si je mets une console point log lots vous allez voir
que ce lots va être rappelé qu'une seule fois lorsque je vais incrémenté la valeur je vais mettre ici peut-être un petit texte automatiquement on n'a pas
le vélo qui ré appelé cette fonction n'est pas rée appelé à chaque fois qu'il ya un rendu comme ça peut être le cas par exemple dans le dans le cadre de riz
actes en fait qui se passe avec ce système de signal c'est qu'il est possible de s'abonner pour détecter les changements et c'est ce qui fait
automatiquement par le framework à ce niveau là pour détecter qu'il ya un changement ce qui se passe en fait c'est
que lorsque l'on accède à la valeur donc lorsque ici il nous affiche 0 il sait que 0 c'est une valeur qui
correspond à un signal et du coup il va détecter les changements et dès qu'il ya un changement il ne va mettre à jour que
ce contenu là dans le dom donc il va directement agir sur le dogme s'interface intermédiaires comme ça peut
être le cas avec vue directe avec le virtuel donne donc pour le coup on se retrouve avec un framework ya une
syntaxe qui est similaire un petit peu arrêt acte mais avec une approche qui est plus fidèle à celle de the belt par
exemple d'ailleurs il est important de noter que ce système de signal peut être utilisée complètement en dehors d'un composant et
népal lié spécifiquement un composant par exemple je peux ici créer notre signal et on va lui dire avec un petit
timer on va créer un cet intervalle et tout haut les seconds on va faire un set compte et on va incrémente écoute on
peut l'imprimante et comme je lé fais ici où on peut directement lui passer une fonction moi j'aime bien la proche fonctions parce que ça permet d'être
légèrement plus court à ce niveau là et on va lancer sa toutes les secondes maintenant je peux utiliser une méthode
qui s'appelle creed effect qui est une méthode de solid js js qui permet de lancer en code et qui va automatiquement
observer les choses donc si par exemple si je fais une console point blog de count up
automatiquement il va me donner la valeur ici 0 puis un puis deux puis
trois et ainsi de suite ainsi de suite en fait dans le cru et effect il va être capable de détecter qu'on a appelé un
guetteur donc il va s'adonner à ce guetteur là et du coup dès qu'on fait un changement de valeur ce que de là va
être ré exécuté c'est exactement ce qui se passe en interne de manière dynamique lorsque l'on utilise un composant alors
maintenant on peut se poser la question à quoi ressemble le code compilé ici donc je vais allez modifier mon fichier
vite point config pour désactiver la magnification c'est juste pour l'expérimentation et on va compiler le
code donc on fait un coup de pnp m rennes vide juste pour vous montrer à quoi ça
ressemble on va aller dans le fichier dist on va prendre notre fichier javascript et on va chercher compteur
donc on voit que par défaut il crée en fait avec cette méthode template des éléments on voit que à l'intérieur ici
il n'a pas injecté la valeur cette emplette là ne contient pas notre numéro et dans l'autre composant apithy il dit
ben je veux insérer un élément et je vais lui passer compte automatiquement le système insert va détecter que compte
est une valeur qui correspond à un signal eva s'abonner aux changements et dès qu'il ya des changements il va
mettre à jour la valeur le texte nod à l'intérieur de notre élément donc c'est fait de manière complètement dynamique et c'est ça qui est intéressant
la particularité c'est que du coup la conversion j ai 6 vers ce qu au delà n'est pas une conversion aussi facile
que celle que l'on attend les actes ou simplement un appel à dives comme ça donne un appel à une fonction dite
lassée quelque chose un petit peu plus poussée et c'est pour ça qu'on a de ce plugin au niveau de viviès pour pouvoir
compilé logistique ce qu'il fait une transformation un petit peu comme celle que ses fesses welt pour arriver à ses
fins et c'est ça qui est intéressant alors d'ailleurs vous avez aussi la possibilité d'avoir des valeurs qui vont
être confiées au titre c'est à dire des valeurs qui vont être dérivé d'une autre valeur par exemple on aimerait bien avoir le double mais dans ce cas là on
peut créer une variable que l'on va appeler double compte et il faudra lui dire c'est une fonction et à l'intérieur</p>
            
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