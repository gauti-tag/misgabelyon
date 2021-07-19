  <!-- Start Hero Slider Area -->
  <section class="hero-slider-area">
    <div class="hero-slider owl-carousel owl-theme">


        <?php   foreach ($slide as $row_slide_one): //foreach ($allSlideOne as $row_slide_one):  ?>
            <?php  //var_dump($row_slide_one); die(); ?>
      <div class="row slider-item">  <!-- slider-item-bg-1 -->

        <div class="col-md-6 col-xs-12">
          <div class="d-table">
            <div class="d-table-cell">
              <div class="container">

                  <!-- other place -->



                <div class="slider-text wow fadeInRight" data-wow-delay="0.6">
                  <p class="livre"> <?php echo $row_slide_one->text1  ?><br>
                            <?php  echo $row_slide_one->text2 ?> <br>
                   <!-- Les fruits seront une nourriture, --><?php  echo $row_slide_one->reference ?> <br>
                   <!-- Et les feuilles un remède ! --> <?php //echo  $row_slide_one->section4_slide_one  ?> <br>
                  <!--  Et les feuilles un remède !--> <?php //echo  $row_slide_one->section5_slide_one  ?> <br>
                    <span><b><!--Ezechiel 47, 9 et 12--> <?php //echo $row_slide_one->reference_slide_one  ?></b></span>
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-delay="0.10">
          <img style="object-fit: cover" src="<?php echo site_url('assets/slide/'.$row_slide_one->file) ?>" alt="">
        </div>

        <div class="causes-shape-one">
          <img src="<?php echo site_url('assets/img/causes-shape-one.png'); ?>" alt="Image">
        </div>
      </div>
        <?php endforeach;  ?>

        <!--- ========================================= second slide =========================== -->

        <?php  //foreach ($allSlideTwo as $row_slide_two): ?>
  <!--    <div class="slider-item row">

        <div class="col-md-6 col-xs-12">
          <div class="d-table">
            <div class="d-table-cell">
              <div class="container">

                <div class="slider-text">
                  <p class="livre"> -->
                   <!-- Je n’ai de repos qu’en Dieu seul --> <?php //echo $row_slide_two->section1_slide_two ?> <!--<br> -->
                  <!--  Mon salut vient de lui. --><?php //echo $row_slide_two->section2_slide_two ?><!--<br> -->
                  <!--  LUI seul est Mon Rocher, Mon Salut, Ma CITADELLE.--><?php //echo $row_slide_two->section3_slide_two ?><!--<br> -->
                  <!--    Je suis Inébranlable ! --><?php //echo $row_slide_two->section4_slide_two ?><!--<br> -->
                  <!--    Je suis Inébranlable ! --><?php //echo $row_slide_two->section5_slide_two ?><!--<br> -->
                     <!--<span><b> --> <!--Psaume 61(62)--><?php //echo $row_slide_two->reference_slide_two  ?><!--</b></span> -->
            <!--      </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <img style="object-fit: cover" src="<?php // echo site_url('assets/slide/img2/'.$row_slide_two->file_slide_two) ?>" alt="">
        </div>

        <div class="causes-shape-one">
          <img src="<?php //echo site_url('assets/img/causes-shape-one.png'); ?>" alt="Image">
        </div>
      </div> -->
        <?php //endforeach;  ?>
    </div>
  </section>
  <!-- End Hero Slider Area -->
  <!-- Start About Area -->
  <section class="about-area about-area-two pt-100 pb-70">
    <div class="container">

        <?php  foreach ($allIntuition as $row):   ?>

      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-content wow fadeInLeftBig text-justify" style="">
            <!-- <span class="top-title">About</span> -->
            <h2><?php echo $row->title; ?><!--A propos de l’intuition ...--></h2>
            <p><?php echo $row->para1; ?><!--En 2014, après plus de 20 ans de vie communautaire, les autorités de la Communauté Catholique Mère du Divin Amour, reconnaissent en une de leurs religieuses, Sœur Annick Marie-Antoine de l’Amour Miséricordieux, un appel particulier, un ministère de prophète. Elle reçoit ainsi de ses supérieurs, un mandat missionnaire et une dispense de vie commune afin de pouvoir vivre et déployer pleinement cet appel. A cet effet, elle a également la latitude d’avoir une organisation propre.--></p>
            <p><?php echo $row->para2; ?><!--Vint ensuite le temps de la maturation suivi de la naissance en Décembre 2015, de la Citadelle de l’Amour Miséricordieux, œuvre de compassion, d’édification et d’évangélisation, le jour-même de l’ouverture de la Porte Sainte et de l’entrée dans l’année jubilaire de la Miséricorde Divine. --></p>
            <p><?php echo $row->para3; ?><!--Torrent d’Amour et de Grâce est le ministère du Saint Esprit dans la vie de Sœur Annick Marie Antoine de l’Amour Miséricordieux depuis sa conversion. Ce ministère de compassion, d’édification, de coaching, d’accompagnement, de soutien et d’évangélisation lui a été reconnu en 1997 par un mandat de prophète donné par sa Communauté. --></p>
            <p><?php echo $row->para4; ?><!--Torrent d’Amour et de Grâce et La Citadelle de l’Amour Miséricordieux sont l’expression d’un appel dans l’appel.--></p>
            <p><?php echo $row->para5; ?><!--Sœur Annick Marie Antoine de l’Amour Miséricordieux est soutenue dans ce ministère particulier par un prêtre gardien nommé par sa Supérieure Générale. Des membres laïcs, engagés au sein de La Citadelle de l’Amour Miséricordieux travaillent à la mise en œuvre de la vision.--></p>
            <!-- <a href="#" class="default-btn">
              <span>En savoir plus</span>
            </a> -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-img wow fadeInRightBig">
            <img src="<?php echo site_url('assets/uploads/intuition/'.$row->file); ?>" alt="Image">
            <!-- <div class="about-shape">
              <img src="<?php //echo site_url(); ?>assets/img/about-shape-2.png" alt="Image">
            </div> -->
          </div>
        </div>
      </div>

      <?php  endforeach; ?>

    </div>
  </section>
  <!-- End About Area -->
  <!-- Start Causes Area -->
  <section class="causes-area causes-area-two bg-blue pt-100 pb-70  wow fadeInUpBig" data-wow-offset="0" data-wow-delay="0.2s">
    <div class="container text-center">
      <div class="section-title">
        <!-- <span>What The Causes</span> -->
        <h2>Suivez-nous</h2>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, perferendis facilis! Magni explicabo nam velit nulla officiis dolorum? Ducimus illum</p> -->
      </div>
        <div class="mx-auto" style="">

                  <div class="causes-slider owl-theme owl-carousel pt-4" style="">
                    <div class="single-causes-box">
                      <img src="<?php echo site_url(); ?>assets/img/suivez-nous.jpg" alt="Image">
                      <div class="about-video">
                      <!--  <a href="#" class="video-btn popup-youtube">
                          <i class="bx bx-play"></i>
                        </a>  -->
                      </div>
                      <div class="single-causes-content">
                        <h3 class="livre">
                          <a href="#">Dakar 2018</a>
                        </h3>
                        <p>Le thème « Tout va bien »</p>
                        <a href="#" class="default-btn" data-toggle="modal" data-target="#dakar">
                          <span style="color: white"><!--Lire la suite-->Ecouter</span>
                        </a>
                          <a href="https://www.youtube.com/watch?v=g_NZRJDaWoo" class="default-btn popup-youtube">
                              <span style="color: white"><!--Lire la suite-->Lire Plus</span>
                          </a>
                      </div>
                    </div>
                    <div class="single-causes-box">
                      <img src="<?php echo site_url(); ?>assets/img/Paris-2019.jpg" alt="Image">
                      <div class="single-causes-content">
                        <h3 class="livre">
                          <a href="#">Cénacle des Nations Paris</a>
                        </h3>
                        <p>Le thème « vous serez mes témoins »</p>
                        <a href="#" class="default-btn" data-toggle="modal" data-target="#paris">
                          <span style="color: white"><!--Lire la suite-->Ecouter</span>
                        </a>
                          <a href="https://www.youtube.com/watch?v=lNtbLDi4IOA" class="default-btn popup-youtube">
                              <span style="color: white"><!--Lire la suite-->Lire Plus</span>
                          </a>
                      </div>
                    </div>
                    <div class="single-causes-box">
                      <img src="<?php echo site_url(); ?>assets/img/saint-esprit.jpg" alt="Image">
                      <div class="about-video">
                      <!--  <a href="#" class="video-btn popup-youtube">
                          <i class="bx bx-play"></i>
                        </a> -->
                      </div>
                      <div class="single-causes-content">
                        <h3 class="livre">
                          <a href="#">Votre plénitude </a>
                        </h3>
                        <p>Le thème « Cherchez dans l’Esprit »</p>
                        <a href="#" class="default-btn" data-toggle="modal" data-target="#plenitude">
                          <span style="color: white"><!--Lire la suite-->Ecouter</span>
                        </a>
                          <a href="https://www.youtube.com/watch?v=lNtbLDi4IOA" class="default-btn popup-youtube">
                              <span style="color: white"><!--Lire la suite-->Lire Plus</span>
                          </a>
                      </div>
                    </div>
                    <div class="single-causes-box">
                      <img src="<?php echo site_url(); ?>assets/img/Maria-2017.jpg" alt="Maria 2017">
                      <div class="single-causes-content">
                        <h3 class="livre">
                          <a href="#">Maria 2017</a>
                        </h3>
                        <p><!--Suivez l’enseignement --> Le thème « Bienheureuse celle qui a cru » </p>
                        <a href="#" class="default-btn" data-toggle="modal" data-target="#maria">
                          <span style="color: white"><!--Lire la suite-->Ecouter</span>
                        </a>
                          <a href="https://www.youtube.com/watch?v=lNtbLDi4IOA" class="default-btn popup-youtube">
                              <span style="color: white"><!--Lire la suite-->Lire Plus</span>
                          </a>
                      </div>
                    </div>
                  </div>
        </div>
    </div>
            <!-- <div class="causes-shape-one">
              <img src="<?php //echo site_url(); ?>assets/img/causes/causes-shape-one.png" alt="Image">
            </div> -->
  </section>


  <section class="events-area pt-100 pb-70 sousfiguier">
    <div class="container">
      <div class="section-title">
        <!-- <span>Our Events</span> -->
        <h2 class="wow zoomInDown" data-wow-offset="0" data-wow-delay="0.6s">Sous Le Figuier, <br> Espace d’Affermissement Spirituel </h2>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="single-events-box wow slideInLeft" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-lg-6 pr-0">
                <div class="events-img" style="background-image: url('<?php echo site_url(); ?>assets/img/ecole.png');"></div>
              </div>
              <div class="col-lg-6 pl-0">
                <div class="single-events-content overly-outside">
                  <div class="overly-inside">
                    <h3 style="">
                      <a href="<?php echo site_url('formation'); ?>">Découvrez notre Espace de formation et d’Affermissement</a>
                    </h3>
                    <p>Sous Le Figuier : Espace d’Affermissement et de partage, ouvert à tous.</p>
                    <a href="<?php echo site_url('formation'); ?>" class="read-more">
                      Lire la suite
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-events-box wow slideInRight" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-lg-6 pr-0">
                <div class="events-img" style="background-image: url('<?php echo site_url(); ?>assets/img/accueil/inscription_2_resize.jpg');"></div>
              </div>
              <div class="col-lg-6 pl-0">
                <div class="single-events-content overly-outside">
                  <div class="overly-inside">
                    <!-- <span>
                      <i class="flaticon-calendar"></i>
                      Nov 21,2020 - 11 AM
                    </span> -->
                    <h3>
                      <a href="<?php echo site_url('Inscription'); ?>">Inscrivez-vous</a>
                   </h3>
                    <p>Fiche D’inscription « Sous Le Figuier</p>
                    <a href="<?php echo site_url('Inscription'); ?>" class="read-more">
                      Lire la suite
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-events-box wow slideInLeft" data-wow-offset="0" data-wow-delay="0.7s">
            <div class="row">
              <div class="col-lg-6 pr-0">
                <div class="events-img" style="background-image: url('<?php echo site_url(); ?>assets/img/accueil/Conditions-générales-3.jfif');">
                </div>
              </div>
              <div class="col-lg-6 pl-0">
                <div class="single-events-content overly-outside">
                  <div class="overly-inside">
                    <h3>
                      <a href="<?php echo site_url('formation/conditions'); ?>">Nos conditions</a>
                    </h3>
                    <p>
                      Assiduité aux modules et exercices proposés <br>
                      Ponctualité aux rencontres <br>
                      Convivialité entre tous
                    </p>
                    <a href="<?php echo site_url('formation/conditions'); ?>" class="read-more">
                      Lire la suite
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-events-box wow slideInRight" data-wow-offset="0" data-wow-delay="0.7s">
            <div class="row">
              <div class="col-lg-6 pr-0">
                <div class="events-img" style="background-image: url('<?php echo site_url(); ?>assets/img/accueil/Programme.jfif');"></div>
              </div>
              <div class="col-lg-6 pl-0">
                <div class="single-events-content overly-outside">
                  <div class="overly-inside">
                    <h3>
                      <a href="<?php echo site_url('formation/programme'); ?>">Le programme <!--2021---></a>
                    </h3>
                    <p>« Mais vous, vous êtes une race élue, un sacerdoce royal, une nation sainte, un peuple acquis, pour proclamer les louanges de Celui qui vous a appelés...</p>
                    <a href="<?php echo site_url('formation/programme'); ?>" class="read-more">
                      Lire la suite
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="volunteer-join-area wow fadeIn" data-wow-delay="0.8s" style="display: block">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                      <form class="volunteer-join " method="post" id="inscriptionForm" action="<?php  echo site_url('home/volunteerProcess');?>">
                        <div class="volunteer-title">

                          <h2 style="">Accueil, Écoute, <!--Accompagnement--> Intention de prière </h2>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <input type="text" class="form-control requiredField" name="name" id="First-Name" placeholder="Nom et prénoms*">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <input type="email" class="form-control requiredField" name="email" id="Email" placeholder="Email*">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <input type="number" class="form-control requiredField" name="phone" id="text" placeholder="Téléphone*">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <textarea name="message" class="form-control requiredField" name="message" id="Message" cols="30" rows="5" placeholder="Message*"></textarea>
                            </div>
                          </div>
                        </div>
                        <button id="inscription-btn" type="submit" class="default-btn">
                          <span>Enregistrer</span>
                        </button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </form>
            </div>
        </div>
    </div>
  </section>

   <!--   <section class="events-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
         <span></span>
        <h2>Petit enfant, prophète du très haut</h2>
        <p>Notre espace pour les enfants et adolescents</p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="single-events-box">
            <div class="row">
              <div class="col-lg-6 pr-0">
                <div class="events-img bg-1"></div>
              </div>
              <div class="col-lg-6 pl-0">
                <div class="single-events-content overly-outside">
                  <div class="overly-inside">
                     <span>

                    </span>
                    <h3>
                      <a href="#">petit prophète </a>
                    </h3>
                    <p><strong>Petit Enfant, prophète du Très Haut :</strong> pensé pour et avec les enfants, en vue de leur donner un espace d’expression de leur foi.<br><strong>Petit Enfant, prophète du Très Haut :</strong> dès le plus jeune âge et à travers ...</p>
                    <a href="#" class="read-more">
                      Lire la suite
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-events-box">
            <div class="row">
              <div class="col-lg-6 pr-0">
                <div class="events-img bg-2"></div>
              </div>
              <div class="col-lg-6 pl-0">
                <div class="single-events-content overly-outside">
                  <div class="overly-inside">
                    <h3>
                      <a href="#">Prions ensemble </a>
                    </h3>
                    <p>Je vous choisis, aujourd'hui, ô Marie, en présence de toute la Cour Céleste, pour ma Mère et ma Reine. Je vous livre et consacre, en toute soumission et amour, mon corps et mon âme, mes biens intérieurs et extérieurs, et la valeur même de ...</p>
                    <a href="#" class="read-more">
                      Lire la suite
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-events-box">
            <div class="row">
              <div class="col-lg-6 pr-0">
                <div class="events-img bg-3"></div>
              </div>
              <div class="col-lg-6 pl-0">
                <div class="single-events-content overly-outside">
                  <div class="overly-inside">
                    <h3>
                      <a href="#">Fortifions notre foi en jouant</a>
                    </h3>
                    <p></p>
                    <a href="#" class="read-more">
                      Lire la suite
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-events-box">
            <div class="row">
              <div class="col-lg-6 pr-0">
                <div class="events-img bg-4"></div>
              </div>
              <div class="col-lg-6 pl-0">
                <div class="single-events-content overly-outside">
                  <div class="overly-inside">
                    <span>

                    </span>
                    <h3>
                      <a href="#">Célébrons Dieu ensemble</a>
                    </h3>
                    <p>Il tient le monde entier dans Ses mains <br>
                      Il tient le monde entier dans Ses mains<br>
                      Il tient le monde entier dans Ses mains<br>
                      Il tient le monde dans Ses mains <br>
                      Il tient le soleil et la pluie dans Ses mains<br>
                      Il tient la lune et les étoiles dans Ses mains<br>
                      Il tient le vent et les nuages dans ...
                    </p>
                    <a href="#" class="read-more">
                      Lire la suite
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  -->

  <section class="testimonials-area bg-color ptb-40 wow fadeInRight allMenuHistory">
    <div class="container">
      <div class="section-title">
        <h2>EL-ELYÔN dans mon histoire </h2>
        <p>Le passage de Dieu dans mon histoire….</p>
      </div>
      <div class="testimonials-slider0">
        <div class="row align-items-center p0">
          <div class="col-md-6 col-xs-12">
            <div class="elelyon-item">
              <div class="row">                  
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire')  ?>">
                  <img src="<?php echo site_url(); ?>assets/img/testimonials/testimonials-1.jpg" alt="Image">
                    </a>
                </div>

                <div class="col-lg-8 col-sm-6 col-xs-12">
                  <div class="testimonials-content">
                    <div class="testimonials-name">
                      <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire')  ?>"><h3 class="menu-histoire">Dans une vie spirituelle</h3></a>
                    </div>
                    <p>« Jésus Miséricordieux se révélait à moi, me faisant la grâce d’essuyer mes larmes, de me pardonner, me relever… »</p>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-md-6 col-xs-12">
            <div class="elelyon-item">
              <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire') ?>">
                  <img src="<?php echo site_url(); ?>assets/img/testimonials/testimonials-2.jpg" alt="Image">
                    </a>
                </div>
                <div class="col-lg-8 col-sm-6 col-xs-12">
                  <div class="testimonials-content">
                    <div class="testimonials-name">
                        <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire') ?>">
                          <h3 class="menu-histoire">Dans une vie professionnelle</h3>
                        </a>
                    </div>
                    <p>« Après 15 ans de parcours sans encombre, je venais de me faire licencier… »</p>
                  </div>
                </div>
              </div>
            </div>
          </div>    
        </div>

        <div class="row align-items-center p0">
          <div class="col-md-6 col-xs-12">
            <div class="elelyon-item">
              <div class="row">                  
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire') ?>">
                        <img src="<?php echo site_url(); ?>assets/img/testimonials/testimonials-3.jpg" alt="Image">
                    </a>
                </div>

                <div class="col-lg-8 col-sm-6 col-xs-12">
                  <div class="testimonials-content">
                    <div class="testimonials-name">
                        <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire') ?>">
                            <h3 class="menu-histoire">Dans une vie familiale</h3>
                        </a>

                    </div>
                    <p>« Eh ben, j’étais enceinte, moi à qui on avait dit que c’était impossible !! Toute la Gloire soit rendue à Dieu ! »</p>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-md-6 col-xs-12">
            <div class="elelyon-item">
              <div class="row">                  
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire') ?>">
                        <img src="<?php echo site_url(); ?>assets/img/testimonials/testimonials-4.jpg" alt="Image">
                    </a>
                </div>

                <div class="col-lg-8 col-sm-6 col-xs-12">
                  <div class="testimonials-content">
                    <div class="testimonials-name">
                        <a href="<?php echo site_url('evangelisation-edification/el-elyon-dans-mon-histoire') ?>">
                            <h3 class="menu-histoire">Dans une vie missionnaire </h3>
                        </a>
                    </div>
                    <p>«La disponibilité aux autres: une exigence quotidienne.... »</p>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>

        <!-- <div class="row align-items-center elelyon-item m0">
          <div class="col-lg-4">
            <img src="<?php echo site_url(); ?>assets/img/testimonials/testimonials-3.jpg" alt="Image">
          </div>

          <div class="col-lg-8">
            <div class="testimonials-content">
              <div class="testimonials-name">
                <h3>Dans une vie familiale</h3>
              </div>
              <p>« Eh ben, j’étais enceinte, moi à qui on avait dit que c’était impossible !! Toute la Gloire soit rendue à Dieu ! »</p>

            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <section class="events-area events-area-three pt-100 pb-70 wow fadeInLeft">
    <div class="container">
      <div class="section-title green-title">
        <h2>Ressourcez vous, pour aller un peu plus loin </h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">
          <div class="single-events-box">
            <img src="<?= site_url()?>assets/img/image-livres-dans-aller-plus-loin1.jpg" alt="Image">
            <div class="single-events-content" style="text-align: center">
              <h3 style="font-family: Arial">
                <a href="<?php echo site_url('formation/livre-numerique') ?>">Livres</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-events-box">
            <img src="<?= site_url() ?>assets/img/mp3.jpg" alt="Image">
            <div class="single-events-content" style="text-align: center">
              <h3 style="font-family: Arial">
                <a href="<?php echo site_url('boutique') ?>">MP3, Clés, CD d’enseignements</a>
              </h3>
            </div>
          </div>
        </div>
     <!--<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 col-xs-12 col-sm-6">
          <div class="single-events-box">
            <img src="<?php //site_url()?>assets/img/divers.jpg" alt="Image">
            <div class="single-events-content" style="text-align: center">
              <h3 style="font-family: Arial">
                <a href="#">Articles divers</a>
              </h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p> -->
              <!-- <a href="#" class="read-more">
                Voir les détails
              </a>
            </div>
          </div>
        </div> -->
          <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 col-xs-12 col-sm-6">
              <div class="single-events-box">
                  <img src="<?= site_url() ?>assets/img/image-bible-pour-espace-bible-dans-aller-plus-loin1.jpg" alt="Image">
                  <div class="single-events-content">
                      <h3 class="livre">
                          <a target="_blank" href="<?php echo site_url()?>assets/bible/Bible_de_Jerusalem.pdf">La Bible sous différentes formes</a>
                      </h3>
                      <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                       <a href="#" class="read-more">
                        Voir les détails
                      </a> -->
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>


  <!--- ========= Pop up audio ======================== --->

  <!-- Modal -->
  <div class="modal fade" id="maria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Maria 2017</h5>
                  <button type="button" onclick="enableControls1()" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body text-center">

                   <audio controls id="audio1"   src="<?php echo site_url()?>assets/suivez-nous/10_Bienheureuse_celle_qui_a_cru_1_entrée.mp3">

                  </audio>
              </div>
              <div class="modal-footer">
                  <button type="button" onclick="enableControls1()" class="default-btn" data-dismiss="modal"><span>Fermer</span></button>
                 </div>
          </div>
      </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="dakar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Dakar 2018</h5>
                  <button type="button" onclick="enableControls2()" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body text-center">

                  <audio id="audio2"  controls src="<?php echo site_url()?>assets/suivez-nous/tout_va_bien_dakar_3_OK.mp3">

                  </audio>
              </div>
              <div class="modal-footer">
                  <button type="button" onclick="enableControls2()" class="default-btn" data-dismiss="modal"><span>Fermer</span></button>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="plenitude" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Votre plénitude</h5>
                  <button type="button" onclick="enableControls3()" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body text-center">

                  <audio id="audio3" controls src="<?php echo site_url()?>assets/suivez-nous/Cherchez_dans_lEsprit_votre_plénitude_1.mp3">

                  </audio>
              </div>
              <div class="modal-footer">
                  <button type="button" onclick="enableControls3()" class="default-btn" data-dismiss="modal"><span>Fermer</span></button>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="paris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Cénacle des nations Paris</h5>
                  <button type="button" onclick="enableControls4()" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body text-center">

                  <audio id="audio4" controls src="<?php echo site_url()?>assets/suivez-nous/temoin_1.mp3">

                  </audio>
              </div>
              <div class="modal-footer">
                  <button type="button" onclick="enableControls4()" class="default-btn" data-dismiss="modal"><span>Fermer</span></button>
              </div>
          </div>
      </div>
  </div>