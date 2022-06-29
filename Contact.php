<?php
require $_SERVER['DOCUMENT_ROOT'].'/seolyzer.php';
?>
<!DOCTYPE html>
<html>
  <head>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-P2QFDZ4');</script>
  <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css" />
    <link rel="stylesheet" href="assets/css/custom-style.css" />
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2QFDZ4"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <img
                  width="150px"
                  height="150px"
                  src="assets/images/logo.png"
                />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="AProposDeNous.html">à propos de nous</a>
                </li>

                <li class="submenu">
                  <a href="javascript:;">Formations</a>
                  <ul>
                    <li><a href="Backend.html">backend</a></li>
                    <li><a href="Frontend.html">Frontend</a></li>
                    <li><a href="CRM.html">CRM</a></li>
                  </ul>
                </li>
                <li class="scroll-to-section">
                  <a href="Tutoriel.html">Tutoriels</a>
                </li>
                <li class="scroll-to-section">
                  <a href="Contact.html">Contact</a>
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
    <div class="contact-clean contact-form">
      <form method="post">
        <h2 class="text-center">Contact us</h2>
        <div class="form-group">
          <input
            class="form-control"
            type="text"
            name="name"
            placeholder="Nom"
          />
        </div>
        <div class="form-group">
          <input
            class="form-control"
            type="email"
            name="email"
            placeholder="Email"
          />
        </div>
        <div class="form-group">
          <textarea
            class="form-control"
            rows="14"
            name="message"
            placeholder="Message"
          ></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
      </form>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="first-item">
              <div class="logo">
                <img
                  width="150px"
                  height="150px"
                  src="assets/images/logo.png"
                  alt="hexashop ecommerce templatemo"
                />
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
              <li><a href="Frontend.html">Formations</a></li>
              <li><a href="Tutoriel.html">Tutoriel</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h4>Liens interessants</h4>
            <ul>
              <li><a href="Index.html">Acueill</a></li>
              <li><a href="AProposDeNous.html">à propos de nous</a></li>
              <li><a href="Contact.html">Contact</a></li>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
