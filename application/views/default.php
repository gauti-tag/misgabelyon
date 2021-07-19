
<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, shrink-to-fit=no">
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
  <link rel="stylesheet" href="<?php echo site_url()  ?>assets/css/all.css">

    <!-- ========= file CSS playlist musique (audio) ===========--->
  <link rel="stylesheet" href="<?php echo site_url()  ?>/assets/css/playlist_audio.css">

    <!--- design audio css -->

  <!--  <link rel="stylesheet" href="<?php // echo site_url() ?>assets/css/plyr.css"> -->
    <!-- Docs styles -->
  <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CDNSFree/Plyr/plyr.css" />-->

    <!-- ====== fontawesome STYLE ===-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



    <!-- Favicon -->
  <link rel="icon" type="" href="<?php echo site_url(); ?>assets/img/logo_misgabelyion.jpg">
   <!-- Title -->



    <title>MISGAB’ELYÔN, L’AMOUR MISERICORDIEUX</title>
    <!-- Start of misgabelyon Zendesk Widget script -->
    <!--  <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=3139ee38-27e1-47a0-871f-e47eecdf4706"> </script>-->
    <!-- End of misgabelyon Zendesk Widget script -->
</head>

<body>

<!--===============================================  chat   =================================================================--->




<button class="chatbox-open bttn">
    <i class="fa fa-comment fa-2x" aria-hidden="true"></i>
</button>

<button class="chatbox-close bttn">
    <i class="fa fa-times fa-2x" aria-hidden="true"></i>
</button>

<section class="chatbox-popup">

    <header class="chatbox-popup__header">
        <aside style="flex:3">
            <!--  <i class="fa fa-user-circle fa-4x chatbox-popup__avatar" aria-hidden="true"></i> -->
              <i class='bx bxs-user-circle chatbox-popup__avatar' style="font-size: 80px"></i>
          </aside>
        <aside style="flex:8; text-justify: auto">
            <h1 class="admin_name livre"> MISGABELYON </h1> &#128075; Nous sommes là pour vous aider, n'hésitez pas à nous écrire! <br>
        </aside>
        <!--<aside style="flex:1">
            <button class="chatbox-maximize"><i class="fa fa-window-maximize" aria-hidden="true"></i></button>
        </aside>-->
     </header>

    <main class="chatbox-popup__main" id="view_chat">

       <!-- <span style="background-color: grey; color: red; text-align: left">Default</span>-->
       <!-- We make it simple and seamless for<br> bussiness and people to talk to each other. Ask us anything. message ici-->
       <!-- <span style="background-color: red; color: black; margin-left: 30px">GAUTIER</span>
      <span style="background-color: blue; color: #00CC00; margin-right: 100px">TIEHOULE</span>-->
       <!-- <ul>
           <li style="background-color: red; color: black; margin-left: 30px">GAUTIER</li>
           <li style="background-color: blue; color: #00CC00; margin-right: 100px">TIEHOULE</li>
      </ul> -->

       <!--    <div align='right' style='padding: 1px'><span style="border-radius: 15px; font-size: 12px" class='btn btn-info'>Gautier</span><br><span style="font-size: 11px">2021-05-18</span></div>
        <div align='left' style='padding: 1px'><div><span style="border-radius: 15px; font-size: 12px" class='btn btn-dark'>TIEHOULE</span> <br> <span style="font-size: 11px">2021-05-18</span></div></div>-->

        <span id="scrolldownchatuser"></span>
    </main>


    <footer class="chatbox-popup__footer">

    <!--   <aside style="flex:1;color:#888;text-align:center">
          <label for="filesms">
              <i class="fa fa-link" aria-hidden="true" role="button"></i>
          </label>
               <input type="file" id="filesms" style="display: none;" onchange="getImage(this.value)">
        </aside>-->

          <aside style="flex:10">
              <textarea class="message" id="message" name="message" placeholder="Taper votre message ici..."></textarea>
        </aside>

        <aside style="flex:1;color:#888;text-align:center;">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
        </aside>

    </footer>
</section>



<!-- ============================================= / chat   =================================================================-->



<!---============================================ user to put the email before chating ==========================---->

<!--<section class="chatbox-popup-email-">

    <header class="chatbox-popup__header">
        <aside style="flex:4">
            <i class='bx bx-mail-send chatbox-popup__avatar' style="font-size: 80px"></i>
        </aside>
        <aside style="flex:8">
            <h1 class="admin_name livre">Centre de service </h1> Veillez entrer votre email svp!
        </aside>
    </header>

    <footer class="chatbox-popup__footer">

        <aside style="color:#888;text-align:center;">
            <input type="email" class="input-lg form-control" placeholder="Merci d'entrer votre mail svp!">
        </aside>


    </footer>
</section> -->





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
   <!--   <div class="top-header button-modal-contact-mobile">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-6 col-md-4">
                      <div class="header-right-content">





                      </div>
                  </div>
              </div>
          </div>
      </div> -->


<!-- Start Top Header -->
    <!--===========================   Start Navbar Area top phone disolay ======================================= -->
    <div class="navbar-area">

      <div class="mobile-nav">
        <div class="container">

          <div class="mobile-menu" style="display: flex">

              <div class="logo">
               <a href="<?php  echo site_url(); ?>">
                <img src="<?php echo site_url(); ?>assets/img/logo_misgabelyion.jpg" alt="logo">
              </a>
              </div>
              <!--======  icon connection to device phone ====--->
              <?php if(studentLoggedIn()): ?>
                  <div class="logo mt-auto" style="margin-bottom: auto; margin-left: 10%">
                      <a href="<?php  echo site_url('connexion/Login/logOutStudent'); ?>" class="burger-menu" style="color: black; font-size: 35px">
                          <i class="bx bx-log-out"></i>
                      </a>
                  </div>
              <?php  else: ?>
                  <div class="logo mt-auto" style="margin-bottom: auto; margin-left: 10%">
                      <a href="<?php echo site_url('connexion/Login'); ?>" class="burger-menu" style="color: black; font-size: 35px">
                          <i class="bx bx-log-in"></i>
                      </a>
                  </div>
              <?php endif;  ?>

          <!--======  icon panier to device phone ====--->

              <div class="logo" style="margin-top: auto; margin-bottom: auto">
                  <a href="<?php  echo site_url('boutique/panier') ?>" class="burger-menu" style="color: black; font-size: 35px">
                      <i class="bx bx-cart"></i><span style="font-size: 20px">(</span><span style="font-size: 15px" class="total-count">0</span><span style="font-size: 20px">)</span>
                  </a>
              </div>

          <!-- ====   icon mail to device phone =====--->
              <div class="logo" style="margin-left: 3%; margin-top: auto; margin-bottom: auto">
                  <a href="#" class="burger-menu" style="color: black; font-size: 35px">
                      <i class="bx bx-mail-send"></i>
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

                        <!-- =====  menu top head desktop =======-->

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
                <ul class="navbar-nav navbar-center-for-desktop justify-content-md-center justify-content-lg-center" style="">

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

                        </ul>

                  </li>


                  <li class="nav-item" id="affermissement">
                    <a style="text-align: center" href="#" class="nav-link">
                        Témoin au visage pluriel <!-- Evangélisation & Edification--><!--Affermissement-->
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="<?php echo site_url('temoin-au-visage-pluriel/parole-de-la-semaine') ?>" class="nav-link">Parole de la semaine</a>
                        </li>
                    <!--  <li class="nav-item">
                        <a href="<?php //echo site_url('evangelisation-edification/enseignements')  ?>" class="nav-link">Enseignements --><!--Direct/Live--> <!--</a>
                      </li> -->
                        <li class="nav-item">
                            <a href="<?php echo site_url('temoin-au-visage-pluriel/edification')  ?>" class="nav-link">Edification</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('temoin-au-visage-pluriel/ecole');  ?>" class="nav-link">Ecole</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('temoin-au-visage-pluriel/exercices')  ?>" class="nav-link">Exercices</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php //echo site_url('')  ?>" class="nav-link">Entre Les Mailles</a>
                        </li>
                      <!--<li class="nav-item">
                        <a href="<?php echo site_url('evangelisation-edification/exhortation')  ?>" class="nav-link">Exhortation --><!--Différé/Replay--><!--</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire')  ?>" class="nav-link">EL-ELYÔN dans mon histoire --><!--Témoignages--><!--</a>
                      </li>-->
                    </ul>
                  </li>


                  <!--<li class="nav-item" id="formation">
                    <a style="text-align: center" href="<?php //echo site_url('formation'); ?>" class="nav-link <?php //echo $menu['formation']; ?>"> -->
                   <!--   Formation --><!--<span class="trait" style="font-weight: bold">-</span><span class="formation">formation</span> -->
                      <!--  <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu"> -->
                     <!-- <li class="nav-item">
                        <a href="<?php //echo site_url('formation'); ?>" class="nav-link">Ecole en ligne</a>
                      </li>-->
                    <!--  <li class="nav-item">
                            <a href="#" class="nav-link">
                                Espace d'affermissement
                              <i class="bx bx-chevron-right"></i>
                            </a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                                <a style="text-transform: none" href="<?php // echo site_url('formation'); ?>" class="nav-link">Découvrez sous le figuier</a>
                              </li>
                             <li class="nav-item">
                                <a style="text-transform: none" href="<?php //echo site_url('formation/directs');?>" class="nav-link">Cours en direct</a>
                              </li>
                              <li class="nav-item">
                                <a style="text-transform: none" href="<?php // echo site_url('formation/cours-en-differes');?>" class="nav-link">Cours en différé</a>
                              </li>
                                <li class="nav-item">
                                    <a style="text-transform: none" href="<?php // echo site_url('formation/forum');?>" class="nav-link">Forum</a>
                                </li>
                        </ul>
                      </li>
                    </ul>
                  </li>-->
                  <li class="nav-item">
                    <a style="text-align: center" href="#" class="nav-link">
                      <!--Prière --> Ressources
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="<?php echo site_url('ressources/bibliotheque') ?>" class="nav-link">bibliothèque</a>
                        </li>
                    <!--   <li class="nav-item">
                        <a href="<?php //echo site_url('priere-partager') ?>" class="nav-link">Prières à partager</a>
                      </li>
                     <li class="nav-item">
                        <a href="<?php //echo site_url('priere-intention') ?>" class="nav-link">Intentions de prière</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php //echo site_url('priere-exercices') ?>" class="nav-link">Exercices</a>
                      </li> -->
                    </ul>
                  </li>


                  <li class="nav-item">
                    <a style="text-align: center" href="#" class="nav-link">
                      Echange
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                       <!--<li class="nav-item">
                        <a href="<?php //echo site_url('echange-ecoute')  ?>" class="nav-link">Ecoute</a>
                      </li>-->
                       <!--<li class="nav-item">
                        <a href="<?php //echo site_url('echange/Chat')  ?>" class="nav-link">Chat</a>
                       </li> -->
                      <li class="nav-item">
                        <a href="<?php echo site_url('echange-forum')  ?>" class="nav-link">Forum</a>
                      </li>
                    </ul>
                  </li>


                    <li class="nav-item">
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
                                  <!--  <li class="nav-item">
                                        <a href="<?php //echo site_url('jeunesse/nos-petits-prophetes/prieres'); ?>" class="nav-link">Prières</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="<?php  echo site_url('jeunesse/nos-petits-prophetes/livres');?>" class="nav-link">Livres</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php  echo site_url('jeunesse/nos-petits-prophetes/musiques');?>" class="nav-link">Musiques</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php //site_url('');?>" class="nav-link">Jeux</a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="nav-item">
                                <a href="#" class="nav-link">
                                    Nos jeunes prophètes
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="<?php //echo site_url('jeunesse/nos-grands-prophetes/prieres'); ?>" class="nav-link">Prières</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php //echo site_url('jeunesse/nos-grands-prophetes/livres'); ?>" class="nav-link">Livres</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php //echo site_url('jeunesse/nos-grands-prophetes/musiques');?>" class="nav-link">Musiques</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php //echo site_url('');?>" class="nav-link">Jeux</a>
                                    </li>
                                </ul>
                            </li> -->

                        </ul>
                    </li>

                  <li class="nav-item">
                    <a style="text-align: center" href="#" class="nav-link">
                      Loisirs
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="<?php  echo site_url('loisirs/musique') ?>" class="nav-link">Musiques</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php  echo site_url('loisirs/humour') ?>" class="nav-link">Humour</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php  echo site_url('loisirs/bien-etre') ?>" class="nav-link">Bien-être</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php  echo site_url('loisirs/petites-annonces') ?>" class="nav-link">Petites annonces</a>
                      </li>
                    </ul>
                  </li>

                 <li class="nav-item">
                    <a style="text-align: center" href="<?php  echo site_url('boutique'); ?>" class="nav-link">
                      Boutique
                      <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" id="menuArticle">


                        <!-- =======  displaying menu of Articles In Javascript=======-->

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

        <!-- ========== puce 3 dots phone display ============--->

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

                <div class="get-quote justify-content-center" style="text-align: center">


                     <div class="get-quote center py-2">
                         <a href="<?php echo site_url('faire-un-don') ?>" class="default-btn" style="background: #ffd700; color: #0131B4;">
                             <span>Faire un don</span>
                         </a>
                     </div>

                    <?php if(studentLoggedIn()): ?>
                        <div class="get-quote ">
                            <a href="<?php echo site_url('connexion/Login/logOutStudent'); ?>" class="default-btn">
                                <span>Deconnection</span>
                            </a>
                        </div>
                    <?php  else: ?>
                    <div class="get-quote ">
                        <a href="<?php echo site_url('connexion/Login'); ?>" class="default-btn">
                            <span>Connection</span>
                        </a>
                    </div>
                    <?php endif;  ?>

          <!--      <div class="get-quote py-2">
                     <a href="<?php //echo site_url('boutique/panier') ?>" class="default-btn"><i class="bx bx-basket"></i>
                       <span>Panier</span><span class="badge badge-pill bg-light align-text-bottom mx-1" style="color: darkblue"><span class="total-count">0</span></span>
                    </a>
                </div> -->


                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

        <!--/ ========== puce 3 dots phone display ============--->





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
              <div class="col-xs-6 col-sm-6 col-md-6 link-bottom-display-phone-devices">
                <ul class="link">
                    <!-- fa-chevron-right -->
                  <li><i class="fa "></i><a href="<?php echo site_url('presentation'); ?>" title="">Présentation</a></li>
                  <li><i class="fa"></i><a href="<?php echo site_url('organisation'); ?>" title="">Organisation</a></li>
                  <li><i class="fa"></i><a href="<?php echo site_url('Formation'); ?>" title="">Formation</a></li>
                 <!-- <li><i class="fa"></i><a href="<?php echo site_url(''); ?>" title="">Prières</a></li>-->
                </ul>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <ul class="link">
                  <li><i class="fa"></i><a href="<?php  echo site_url('Donate'); ?>" title="">Dons</a></li>
                <!--  <li><i class="fa"></i><a href="<?php //echo site_url(''); ?>" title="">Loisirs</a></li>-->
                  <li><i class="fa"></i><a href="<?php echo site_url('boutique/Boutique'); ?>" title="">Boutique</a></li>
                  <li><i class="fa"></i><a href="<?php echo site_url('Contact'); ?>" title="">Contacts</a></li>
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




  <script type="text/javascript">

        let sUrl = "<?php echo site_url(); ?>"
        wow = new WOW({}).init();


        $(function () {


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

        })


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

        // hide the audio player

     /*   function disableControls()
        {
            x.controls = false;
            x.load();
        }*/

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


        /**
         * script to get image form the sms pup pop
         */



  </script>

<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">-->
<!--========================   live chat JS ===================================-->
  <script src="<?php echo site_url();  ?>assets/js/livechat.js"> </script>

  <script src="<?php echo site_url(); ?>assets/js/treatment_chat.js"></script>

  <!-- ======  file JS playlist Musique (audio)  ======--->
  <script src="<?php echo site_url(); ?>assets/js/playlist_audio.js"></script>

   <!-- ====== Afficher menu bputique ( article )  =======-->
  <script src="<?php echo site_url(); ?>assets/js/afficher-articles.js"></script>

  <!-- ======= script to send Image to sms ========== -->
  <script src="<?php echo site_url(); ?>assets/js/sendPhotosms.js"></script>


 <!-- ==== script pour echange forum ==== -->
  <script src="<?php echo site_url(); ?>assets/js/forum-form-echange-script.js"></script>


<!-- =====  display forum ===== ---->
  <script src="<?php echo site_url(); ?>assets/js/displayForum.js"></script>

<!--- ===== display forum echange ---->
  <script src="<?php echo site_url(); ?>assets/js/displayForumEchange.js"></script>





  <!-- === design of audio ===-->

<!-- <script src="<?php //echo site_url() ?>assets/js/plyr.js"></script>

 <script src="https://cdn.jsdelivr.net/gh/CDNSFree/Plyr/plyr.js"></script> -->

  </body>

  </html>