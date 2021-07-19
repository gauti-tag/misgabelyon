
<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap Min CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/bootstrap.min.css">
    <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/fonts.css">


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
  <!-- <link rel="stylesheet" href="assets/css/nice-select.min.css"> -->
  <!-- Odometer Min CSS-->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/odometer.min.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/custom.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/chat.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/jquery.bxslider.css">


    <!--- == live chat CSS ========================-->
    <link rel="stylesheet" href="<?php echo site_url()  ?>assets/css/livechat.css">

    <!-- ====== fontawesome STYLE ===-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>




  <!-- Favicon -->
  <link rel="icon" type="" href="<?php echo site_url(); ?>assets/img/logo_misgabelyion.jpg">
   <!-- Title -->
    <title>MISGAB’ELYÔN, L’AMOUR MISERICORDIEUX</title>
    <!--   style chat -->
</head>

<body>

<!--===============================================  chat   =================================================================--->



<!-- ============================================= / chat   =================================================================-->


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
        <div class="container-fluid">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand wow bounceInDown" href="<?php echo site_url(); ?>">
              <img src="<?php echo site_url(); ?>assets/img/logo_misgabelyion.jpg" alt="logo">
            </a>
            <div class="collapse navbar-collapse mean-menu" style="display: block !important; text-align: center">
              <div class="d-none d-sm-block">
                <div class="top-header">
                  <div class="row align-items-center">
                    <div class="col-lg-5 col-md-8">
                    <!--  <div class="top-header-social">
                        <a href="#" target="_blank">
                          <i class='bx bxl-facebook-circle'></i>
                        </a>
                        <a href="#" target="_blank">
                          <i class='bx bxl-twitter'></i>
                        </a>
                        <a href="#" target="_blank">
                          <i class='bx bxl-instagram-alt'></i>
                        </a>
                        <a href="#" target="_blank">
                          <i class='bx bxl-linkedin-square'></i>
                        </a>
                      </div>  -->
                    </div>
                    <div class="col-lg-7 col-md-4">
                      <div class="header-right-content">
                        <div class="others-option">

                            <?php if(studentLoggedIn()): ?>
                                 <div class="option-item">
                                          <a href="<?php echo site_url('connexion/Login/logOutStudent'); ?>" class="default-btn"><i class="bx bx-log-out icon-arrow after"></i>
                                              <span>Deconnection</span>
                                          </a>
                                      </div>
                            <?php  else: ?>
                          <div class="option-item">
                                <a href="<?php echo site_url('connexion/Login'); ?>" class="default-btn"><i class="bx bx-log-in icon-arrow after"></i>
                                  <span>Connexion</span>
                                </a>
                          </div>
                            <?php endif;  ?>

                          <div class="get-quote" style="">
                            <a href="<?php  echo site_url('faire-un-don') ?>" class="default-btn" style="background: #ffd700; color: #0131B4; font-weight: 600;">
                              <span>Faire un Don</span>
                            </a>
                          </div>

                            <input id="total_items_all_page" type="hidden" value="<?php if($this->cart->total_items()){echo $this->cart->total_items();}else{ echo '0';} ?>">

                           <div class="get-quote" style="">
                                <a href="<?php echo site_url('boutique/panier') ?>" class="default-btn"><i class="bx bx-basket"></i>
                                    <span>Panier </span><span class="badge badge-pill bg-light align-text-bottom mx-1" style="color: darkblue"><span class="total-count">0</span></span>
                                </a>
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
              </div>
              <div class="">
                <ul class="navbar-nav justify-content-center" style="">
                  <li class="nav-item">
                    <a style="text-align: center" href="<?php echo site_url(); ?>" class="nav-link">
                        Bienvenue
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="<?php echo site_url('presentation'); ?>" class="nav-link">Présentation</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo site_url('organisation'); ?>" class="nav-link">Organisation</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo site_url('partenaires'); ?>" class="nav-link">Partenaires</a>
                      </li>
                <!--      <li class="nav-item">
                        <a href="#" class="nav-link">Intranet</a>
                      </li>  -->
                    </ul>
                  </li>
                  <li class="nav-item" id="affermissement">
                    <a style="text-align: center" href="#" class="nav-link">
                      Evangélisation & Edification<!--Affermissement-->
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                    <!--  <li class="nav-item">
                        <a href="<?php // echo site_url('evangelisation/Tv')  ?>" class="nav-link">Télévision</a>
                      </li>  -->
                  <!--    <li class="nav-item">
                        <a href="<?php //echo site_url('evangelisation/Radio')  ?>" class="nav-link">Radio</a>
                      </li>  -->
                        <li class="nav-item">
                            <a href="<?php echo site_url('evangelisation-edification/parole-de-la-semaine') ?>" class="nav-link">Parole de la semaine</a>
                        </li>
                      <li class="nav-item">
                        <a href="<?php echo site_url('evangelisation-edification/enseignements')  ?>" class="nav-link">Enseignements<!--Direct/Live--></a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo site_url('evangelisation-edification/exhortation')  ?>" class="nav-link">Exhortation<!--Différé/Replay--></a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire')  ?>" class="nav-link">EL-ELYÔN dans mon histoire<!--Témoignages--></a>
                      </li>

                     <!--   <li class="nav-item">
                            <a href="<?php //echo site_url('evangelisation/Verset') ?>" class="nav-link">Verset quotidien</a>
                        </li> -->

                    </ul>
                  </li>
                  <li class="nav-item" id="formation">
                    <a style="text-align: center" href="<?php echo site_url('formation'); ?>" class="nav-link <?php echo $menu['formation']; ?>">
                      Formation<!--<span class="trait" style="font-weight: bold">-</span><span class="formation">formation</span> -->
                        <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                     <!-- <li class="nav-item">
                        <a href="<?php //echo site_url('formation'); ?>" class="nav-link">Ecole en ligne</a>
                      </li>-->
                      <li class="nav-item">
                            <a href="#" class="nav-link">
                                Espace d'affermissement
                              <i class="bx bx-chevron-right"></i>
                            </a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                                <a style="text-transform: none" href="<?php echo site_url('formation'); ?>" class="nav-link">Découvrez sous le figuier</a>
                              </li>
                             <li class="nav-item">
                                <a style="text-transform: none" href="<?php echo site_url('formation/directs');?>" class="nav-link">Cours en direct</a>
                              </li>
                              <li class="nav-item">
                                <a style="text-transform: none" href="<?php  echo site_url('formation/cours-en-differes');?>" class="nav-link">Cours en différé</a>
                              </li>
                                <li class="nav-item">
                                    <a style="text-transform: none" href="<?php echo site_url('formation/forum');?>" class="nav-link">Forum</a>
                                </li>
                        </ul>
                      </li>
                    </ul>
                  </li>


              <!--   <li class="nav-item">
                    <a style="text-align: center" href="#" class="nav-link">
                      Prière
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="<?php //echo site_url('priere/Priere') ?>" class="nav-link">Prières à partager</a>
                      </li>
                     <li class="nav-item">
                        <a href="<?php //echo site_url('priere/Priere/intention') ?>" class="nav-link">Intentions de prière</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php //echo site_url('priere/Priere/exercices') ?>" class="nav-link">Exercices</a>
                      </li>
                    </ul>
                  </li> -->


                  <li class="nav-item">
                    <a style="text-align: center" href="#" class="nav-link">
                      Echange
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="<?php echo site_url('echange/Ecoute')  ?>" class="nav-link">Ecoute</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php //echo site_url('echange/Chat')  ?>" class="nav-link">Chat</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo site_url('echange/Forum')  ?>" class="nav-link">Forum</a>
                      </li>
                    </ul>
                  </li>


                  <!--  <li class="nav-item">
                        <a style="text-align: center" href="#" class="nav-link">
                            Jeunesse
                            <i class="bx bx-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Nos petits prophètes
                                    <i class="bx bx-chevron-right"></i>
                                 </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="<?php //echo site_url('jeunesse/Prieres'); ?>" class="nav-link">Prière</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php // echo site_url('jeunesse/Livres');?>" class="nav-link">Livres</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php // echo site_url('jeunesse/Musique');?>" class="nav-link">Musique</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php //site_url('education_formation/bibliotheque/audio');?>" class="nav-link">Jeux</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Nos jeunes prophètes
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="<?php //echo site_url('jeunesse/Prieres/jeune'); ?>" class="nav-link">Prière</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php  //echo site_url('jeunesse/Livres/jeune'); ?>" class="nav-link">Livres</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php //echo site_url('jeunesse/Musique/jeune');?>" class="nav-link">Musique</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php //site_url('education_formation/bibliotheque/audio');?>" class="nav-link">Jeux</a>
                                    </li>
                                </ul>
                            </li>




                        </ul>
                    </li> -->



            <!--      <li class="nav-item">
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
                  </li> -->
               <!--   <li class="nav-item">
                    <a style="text-align: center" href="#" class="nav-link">
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
                        <a href="#" class="nav-link">Bien-être</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">Petites annonces</a>
                      </li>
                    </ul>
                  </li> -->
                 <li class="nav-item">
                    <a style="text-align: center" href="<?php  echo site_url('boutique'); ?>" class="nav-link">
                      Boutique
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <?php foreach ($categories as $row): ?>
                      <li class="nav-item">
                        <a href="<?php  echo site_url('boutique') ?>" class="nav-link"><?php echo $row->name ?></a>
                      </li>
                        <?php endforeach; ?>
                   <!--   <li class="nav-item">
                        <a href="<?php //echo site_url('boutique/Mp3') ?>" class="nav-link">MP3</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php //echo site_url('boutique/Cd') ?>" class="nav-link">CD</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php //echo site_url('boutique/Articles') ?>" class="nav-link">Articles divers</a>
                      </li>-->
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <a class="navbar-brand logo-right wow bounceInDown" href="<?php echo site_url(); ?>">
              <img src="<?php echo site_url(); ?>assets/img/logo_cdamh174.jpg" alt="logo">
            </a>
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
          <img src="<?php echo site_url(); ?>assets/img/logo_misgabelyion.jpg" alt="Image">
        </div>
        <span class="close-btn sidebar-modal-close-btn">
          <i class="bx bx-x"></i>
        </span>
      </div>
      <div class="sidebar-about">
        <div class="title">
        <!--  <p>En 2014, après plus de 20 ans de vie communautaire, les autorités de la Communauté Catholique Mère du Divin Amour, reconnaissent en une de leurs religieuses, Sœur Annick Marie-Antoine de l’Amour Miséricordieux, un appel particulier, un ministère de prophète...</p> -->
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
            <a href="mailto:contact@misgabelyon-amour-misericordieux.org">contact@misgabelyon-amour-misericordieux.org</a>
          </li>
          <li>
            <i class="bx bx-phone-call"></i>
            <a href="tel:+33644866930"><img src="<?php echo site_url('assets/img/france-flag.jpg') ?>" alt=""> Europe: +33 6 44 86 69 30</a>
                <a href="tel:+22540440000"><img src="<?php echo site_url('assets/img/ci-flag.jpg') ?>" alt=""> Afrique: +225 01 40 44 00 00</a>
          </li>
        </ul>
      </div>
      <div class="sidebar-follow-us">
        <h3>Nous suivre</h3>
        <ul class="social-wrap">
         <!-- <li>
            <a href="#" target="_blank">
              <i class="bx bxl-twitter"></i>
            </a>
          </li> -->
          <li>
            <a href="#" target="_blank">
              <i class="bx bxl-facebook"></i>
            </a>
          </li>
        <!--  <li>
            <a href="#" target="_blank">
              <i class="bx bxl-facebook"></i>
            </a>
          </li> -->
          <li>
            <a href="#" target="_blank">
              <i class="bx bxl-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>




  <?php echo $output; ?>



  <?php if(!isset($rub)): ?>
  <div class="partner-area ptb-40">
    <div class="container">
      <div class="">
        <div class="partner-item0">
          <img src="<?php echo site_url('assets/img/logos-partenaires.jpg') ?>" alt="">
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- Start Footer Area -->
  <footer class="footer-area bg-color ptb-40" style="background: #0131B4; color: #FFF">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="footer-widget">
            <h3>Nous contacter</h3>
            <ul class="address">
              <li class="location">
                <i class="bx bxs-location-plus"></i>
                Région Parisienne, France <br>
                Abidjan, Côte d’Ivoire
              </li>
              <li>
                <i class="bx bxs-envelope"></i>
                <a href="mailto:contact@misgabelyon-amour-misericordieux.org">contact@misgabelyon-amour-misericordieux.org</a>
                <!-- <a href="mailto:info@email.com">info@email.com</a> -->
              </li>
              <li>
                <i class="bx bxs-phone-call"></i>
                <a href="tel:+33644866930"><!-- <img src="<?php echo site_url('assets/img/france-flag.jpg') ?>" alt=""> --> Europe: +33 6 44 86 69 30</a>
                <a href="tel:+22540440000"><!-- <img src="<?php echo site_url('assets/img/ci-flag.jpg') ?>" alt=""> --> Afrique: +225 01 40 44 00 00</a>
              </li>
            </ul>
          </div>
            <div class="social_network" style="">

               <a href="#" target="_blank">
                    <i class='bx bxl-facebook-circle' style="color: #DDAF01; margin-left: 25px; font-size: 35px"></i>
                </a>
                <a href="#" target="_blank">
                    <i class='bx bxl-youtube' style="color: #DDAF01; margin-left: 25px; font-size: 35px"></i>
                </a>

                <!-- <a href="#" target="_blank">
                    <i class='bx bxl-instagram-alt' style="color: #DDAF01; margin-left: 25px; font-size: 40px"></i>
                </a>
                <a href="#" target="_blank">
                    <i class='bx bxl-linkedin-square' style="color: #DDAF01; margin-left: 25px; font-size: 40px"></i>
                </a> -->
            </div>
        </div>
        <div class="col-lg-5 col-sm-6">
          <div class="footer-widget">
            <h3>Liens utiles</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="link">
                  <li><i class="fa fa-chevron-right"></i><a href="<?php echo site_url('presentation'); ?>" title="">Présentation</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="<?php echo site_url('organisation'); ?>" title="">Organisation</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="<?php echo site_url('Formation'); ?>" title="">Formation</a></li>
                 <!-- <li><i class="fa fa-chevron-right"></i><a href="<?php echo site_url(''); ?>" title="">Prières</a></li>-->
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="link">
                  <li><i class="fa fa-chevron-right"></i><a href="<?php  echo site_url('Donate'); ?>" title="">Dons</a></li>
                  <!--<li><i class="fa fa-chevron-right"></i><a href="<?php //echo site_url(''); ?>" title="">Loisirs</a></li>-->
                  <li><i class="fa fa-chevron-right"></i><a href="<?php echo site_url('boutique/Boutique'); ?>" title="">Boutique</a></li>
                  <li><i class="fa fa-chevron-right"></i><a href="<?php echo site_url('Contact'); ?>" title="">Contacts</a></li>
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
                <a class="home-image" href="<?php echo site_url(); ?>assets/img/gallery/gallery-1.jpg">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-1.jpg" alt="image">
                </a>
              </li>
              <li>
                <a class="home-image" href="<?php echo site_url(); ?>assets/img/gallery/gallery-2.jpg">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-2.jpg" alt="image">
                </a>
              </li>
              <li>
                <a class="home-image" href="<?php echo site_url(); ?>assets/img/gallery/gallery-3.jpg">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-3.jpg" alt="image">
                </a>
              </li>
              <li>
                <a class="home-image" href="<?php echo site_url(); ?>assets/img/gallery/gallery-4.jpg">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-4.jpg" alt="image">
                </a>
              </li>
              <li>
                <a class="home-image" href="<?php echo site_url(); ?>assets/img/gallery/gallery-5.jpg">
                  <img src="<?php echo site_url(); ?>assets/img/gallery/gallery-5.jpg" alt="image">
                </a>
              </li>
              <li>
                <a class="home-image" href="<?php echo site_url(); ?>assets/img/gallery/gallery-6.jpg">
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
        <p>Copyright @2020 - <?= date('Y') ?> . Designed By <a href="https://ngser.ci" target="blank">NGSER</a></p>
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

  <script src="<?php echo site_url(); ?>assets/js/jquery-ui.js"></script>

  <script src="<?php echo site_url(); ?>assets/js/theia-sticky-sidebar.js"></script>
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
  <!-- Volunteer JS -->
  <script src="<?php echo site_url(); ?>assets/js/volunteer-form-script.js"></script>
  <!-- Login JS -->
  <script src="<?php echo site_url(); ?>assets/js/login-form-script.js"></script>
  <!-- ecercise form JS -->
  <script src="<?php echo site_url(); ?>assets/js/exercise-form-script.js"></script>
  <!-- forum form JS -->
  <script src="<?php echo site_url(); ?>assets/js/forum-form-script.js"></script>

  <!-- Ajaxchimp Min JS -->
  <script src="<?php echo site_url(); ?>assets/js/ajaxchimp.min.js"></script>
  <!-- Custom JS -->
  <script src="<?php echo site_url(); ?>assets/js/custom.js"></script>

  <script src="<?php echo site_url(); ?>assets/js/shopping_mp3.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/jquery.lettering.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/jquery.textillate.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/shopping.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/jquery.bxslider.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/sweetalert.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/gateway.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/cart.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/jquery.validate.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/registration_shopping.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/items_number.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/view-hide-password.js"></script>

  <!--========================   live chat JS ===================================-->

<script src="<?php echo site_url()  ?>assets/js/livechat.js"> </script>




  <script type="text/javascript">

        let sUrl = "<?php echo site_url(); ?>";

        wow = new WOW({}).init();


      /*  $(function () {


            $('.welcome').textillate({

                loop: true,
                in: {
                    effect: 'tada',
                    delayScale: 1,
                    delay: 150,
                    shuffle: true
                     },
                out: {
                    effect: 'flash',
                    reverse: true
                     }

            });

        })*/


        $(document).ready(function(){

            $('.slide:first-child').addClass("active");
        });

        $(document).ready(function() {

          /*  $('.home-image').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                width: 500,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }

            });*/

            $('.home-image').magnificPopup({

                type: 'image',
                closeOnContentClick: true,
                image: {
                    verticalFit: true
                }
            });
        });


        let x = document.getElementById('audio1');
        let x2 = document.getElementById('audio2');
        let x3 = document.getElementById('audio3');
        let x4 = document.getElementById('audio4');

        // stop the audio player

        function enableControls1() {

            x.controls = true;
            x.load();

        }

        function enableControls2() {

            x2.controls = true;
            x2.load();

        }
        function enableControls3() {

            x3.controls = true;
            x3.load();

        }
        function enableControls4() {

            x4.controls = true;
            x4.load();

        }


        // status of audio player

      /*  function checkControls()
        {
            alert(x.controls);
        } */


      /*function submitForm() {
            document.getElementById('apiGateWay').submit();
        }
        window.onload = submitForm;*/


        // add loading button to donation pages

       /* $("#button-don").on("click", function () {

            $(".spinner-don").removeClass('hide');
            $("#button-don").attr("disabled", true);
            $("#sms-don").text("Je valide mon don...");

        })*/

  </script>

  <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">-->

<!--===============  javascript for chat =================================-->



  </body>

  </html>