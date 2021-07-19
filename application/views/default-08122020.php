<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap Min CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/bootstrap.min.css">
  <!-- Owl Theme Default Min CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/owl.theme.default.min.css">
  <!-- Owl Carousel Min CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/owl.carousel.min.css">
  <!-- Animate Min CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/animate.min.css">
  <!-- Boxicons Min CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/boxicons.min.css">
  <!-- Magnific Popup Min CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/magnific-popup.min.css">
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/flaticon.css">
  <!-- Meanmenu Min CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/meanmenu.min.css">
  <!-- Nice Select Min CSS -->
  <!-- <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/nice-select.min.css"> -->
  <!-- Odometer Min CSS-->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/odometer.min.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/custom.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/img/favicon.png">
  <!-- Title -->
  <title>MISGAB’ELYÔN, L’AMOUR MISERICORDIEUX</title>
</head>

<body>
  <!-- Start Preloader Area -->
  <div class="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- End Preloader Area -->
  <!-- Start Header Area -->
  <header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-8">
            <ul class="header-left-content">
              <li>
                <i class="bx bx-envelope"></i>
                <a href="mailto:infos@email.com">infos@email.com</a>
              </li>
              <li>
                <i class="bx bx-phone-call"></i>
                <a href="tel:+225-456-7899">+33 6 44 86 69 30</a>
              </li>
              <li>
                <i class="bx bx-phone-call"></i>
                <a href="tel:+225-456-7899">+225 40 44 00 00</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-4">
            <div class="header-right-content">
              <div class="option-item">
                <a href="#" class="default-btn"><i class="bx bx-log-in icon-arrow after"></i>
                  <span>Connexion</span>
                </a>
                <i class="search-btn bx bx-search"></i>
                <i class="close-btn bx bx-x"></i>
                <div class="search-overlay search-popup">
                  <div class="search-box">
                    <form class="search-form">
                      <input class="search-input" name="search" placeholder="Recherche" type="text">
                      <button class="search-button" type="submit">
                        <i class="bx bx-search"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="sidebar-menu">
                <a href="#" class="burger-menu">
                  <i class="bx bx-menu"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Top Header -->
    <!-- Start Navbar Area -->
    <div class="navbar-area">
      <div class="mobile-nav">
        <div class="container">
          <div class="mobile-menu">
            <div class="logo">
              <a href="#">
                <img src="<?php echo site_url(); ?>assets/img/logo_misgabelyion.jpg" alt="logo">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="desktop-nav">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
              <img src="<?php echo site_url(); ?>assets/img/logo_misgabelyion.jpg" alt="logo">
            </a>
            <div class="collapse navbar-collapse mean-menu">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Le ministère
                    <i class="bx bx-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Présentation</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Organisation</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Partenaires</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Intranet</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Evangélisation
                    <i class="bx bx-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="" class="nav-link">Télévision</a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">Radio</a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">Direct/Live</a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">Différé/Replay</a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">Témoignages</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link <?php echo $menu['formation']; ?>">
                    Education-formation
                    <i class="bx bx-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="<?php echo site_url('formation'); ?>" class="nav-link">Ecole en ligne</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Bibliothèque
                        <i class="bx bx-chevron-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a href="" class="nav-link">Livres numérisés</a>
                        </li>
                        <li class="nav-item">
                          <a href="" class="nav-link">Vidéo</a>
                        </li>
                        <li class="nav-item">
                          <a href="" class="nav-link">Audio</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Prière
                    <i class="bx bx-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Textes</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Vidéo/Audio</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Intentions</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Exercices</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Eglise</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Echange
                    <i class="bx bx-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Ecoute</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Appel</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Chat</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Forum</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Jeunesse
                    <i class="bx bx-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Musique</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Prières</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Livres</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Jeux</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Loisirs
                    <i class="bx bx-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Musique</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Humour</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Vidéo</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Sports</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Astuces</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Pratique</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Boutique
                    <i class="bx bx-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Livre</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">MP3</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">CD</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Articles divers</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="others-option">
                <div class="get-quote">
                  <a href="#" class="default-btn">
                    <span>Dons</span>
                  </a>
                </div>
              </div>
                <a class="navbar-brand logo-right" href="<?php echo site_url(); ?>">
                  <img src="<?php echo site_url(); ?>assets/img/logo_CDAM.jpg" alt="logo">
                </a>
            </div>
          </nav>
        </div>
      </div>
      <div class="others-option-for-responsive">
        <div class="container">
          <div class="dot-menu">
            <div class="inner">
              <div class="circle circle-one"></div>
              <div class="circle circle-two"></div>
              <div class="circle circle-three"></div>
            </div>
          </div>
          <div class="container">
            <div class="option-inner">
              <div class="others-option justify-content-center d-flex align-items-center">
                <div class="get-quote">
                  <a href="#" class="default-btn">
                    <span>DONS</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Navbar Area -->
  </header>
  <!-- End Header Area -->
  <!-- Start Sidebar Modal -->
  <div class="sidebar-modal">
    <div class="sidebar-modal-inner">
      <div class="sidebar-header">
        <div class="sidebar-logo">
          <img src="<?php echo site_url(); ?>assets/img/logo_CDAM.jpg" alt="Image">
        </div>
        <span class="close-btn sidebar-modal-close-btn">
          <i class="bx bx-x"></i>
        </span>
      </div>
      <div class="sidebar-about">
        <div class="title">
          <p>Tians is a high quality video production house. We make a awesome branded videos. It is the analogical of film making, but the images are digitally recorded instead of film stock.</p>
        </div>
      </div>
      <div class="contact-us">
        <h3>Nous contacter</h3>
        <ul>
          <li>
            <i class="bx bx-location-plus"></i>
            Abidjan Côte d'Ivoire
          </li>
          <li>
            <i class="bx bx-envelope"></i>
            <a href="mailto:hello@email.com">hello@email.com</a>
            <a href="mailto:info@email.com">info@email.com</a>
          </li>
          <li>
            <i class="bx bx-phone-call"></i>
            <a href="tel:+1-(123)-456-7899">+1 (123) 456 7899</a>
            <a href="tel:+1-(514)-312-6688">+1 (514) 312-6688</a>
          </li>
        </ul>
      </div>
      <div class="sidebar-follow-us">
        <h3>Nous suivre</h3>
        <ul class="social-wrap">
          <li>
            <a href="#" target="_blank">
              <i class="bx bxl-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <i class="bx bxl-instagram"></i>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <i class="bx bxl-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <i class="bx bxl-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar Modal -->

  <?php echo $output; ?>

  <section class="subscribe-area">
    <div class="container bg-color">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="subscribe-content">
            <h2>S'inscrire à la newsletter</h2>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <form class="newsletter-form" data-toggle="validator">
            <input type="email" class="form-control" placeholder="Votre Email" name="EMAIL" required autocomplete="off">
            <button class="default-btn" type="submit">
              <span>Je m'inscris</span>
            </button>
            <div id="validator-newsletter" class="form-result"></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Subscribe Area -->

    <div class="partner-area ptb-40">
      <div class="container">
        <div class="">
          <div class="partner-item0">
            <img src="<?php echo site_url('assets/img/logos-partenaires.jpg') ?>" alt="">
          </div>
        </div>
      </div>
    </div>

  <!-- Start Footer Area -->
  <footer class="footer-area bg-color ptb-40" style="background: #0131B4; color: #FFF">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget">
            <h3>Nous contacter</h3>
            <ul class="address">
              <li class="location">
                <i class="bx bxs-location-plus"></i>
                Abidjan, Côte d'Ivoire
              </li>
              <li>
                <i class="bx bxs-envelope"></i>
                <a href="mailto:hello@email.com">hello@email.com</a>
                <a href="mailto:info@email.com">info@email.com</a>
              </li>
              <li>
                <i class="bx bxs-phone-call"></i>
                <a href="tel:+33644866930">Europe: +33 6 44 86 69 30</a>
                <a href="tel:+22540440000">Afrique: +225 40 44 00 00</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="footer-widget">
            <h3>Liens utiles</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="link">
                  <li><i class="fa fa-chevron-right"></i><a href="#" title="">Présentation</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="#" title="">Organisation</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="#" title="">Education-formation</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="#" title="">Prières</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="link">
                  <li><i class="fa fa-chevron-right"></i><a href="#" title="">Dons</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="#" title="">Loisrs</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="#" title="">Boutique</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="#" title="">Contacts</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget">
            <h3>Nos photos</h3>
            <ul class="photo-galler">
              <li>
                <a href="#">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-1.jpg" alt="image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-2.jpg" alt="image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-3.jpg" alt="image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-4.jpg" alt="image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-5.jpg" alt="image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-6.jpg" alt="image">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Area -->
  <!-- Start Copyright Area -->
  <div class="copyright-area">
    <div class="container">
      <div class="copyright-content">
        <p>Copyright @2020 . Designed By <a href="https://ngser.ci" target="blank">NGSER</a></p>
      </div>
    </div>
  </div>
  <!-- End Copyright Area -->
  <!-- Start Go Top Area -->
  <div class="go-top">
    <i class="bx bx-chevrons-up"></i>
    <i class="bx bx-chevrons-up"></i>
  </div>
  <!-- End Go Top Area -->
  <!-- Jquery Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/jquery.min.js"></script>
  <!-- Popper Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/popper.min.js"></script>
  <!-- Bootstrap Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/bootstrap.min.js"></script>
  <!-- Meanmenu Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/meanmenu.min.js"></script>
  <!-- Wow Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/wow.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/owl.carousel.min.js"></script>
  <!-- Nice Select Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/nice-select.min.js"></script>
  <!-- Magnific Popup Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/magnific-popup.min.js"></script>
  <!-- Parallax Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/parallax.min.js"></script>
  <!-- Appear Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/appear.min.js"></script>
  <!-- Odometer Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/odometer.min.js"></script>
  <!-- Smoothscroll Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/smoothscroll.min.js"></script>
  <!-- Form Validator Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/form-validator.min.js"></script>
  <!-- Contact JS -->
  <script src="<?php echo site_url(); ?>assets/js/contact-form-script.js"></script>
  <!-- Ajaxchimp Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/ajaxchimp.min.js"></script>
  <!-- Custom JS -->
  <script src="<?php echo site_url(); ?>assets/js/custom.js"></script>
</body>

</html>