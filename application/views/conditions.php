
 <?php foreach ($bannerCondition as $row_banner): ?>
  <!-- Start Page Title Area -->
  <div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php  echo site_url('assets/banniere/condition/'.$row_banner->file_banner_condition)  ?>');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
      <div class="page-title-content">

      </div>
    </div>
  </div>
 <?php endforeach;  ?>
  <section class="services-area services-area-page pt-100 pb-70 our_causes">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="single-blog-post image-programme-display-phone">
            <div class="blog-img">
              <!-- <a href="#"> -->
                <img src="<?php echo site_url('assets/img/accueil/Conditions-générales-2.jfif'); ?>" alt="Image">
              <!-- </a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-8">
          <div class="single-blog-post">
            <h3>Les conditions de participation</h3>
            <p style="font-family: open sans, sans-serif; font-style: italic">
                      Chers Étudiants-es, <br>
                    En vous inscrivant à la présente formation. vous vous engagez au respect : </p>
                    <ul style="font-family: open sans, sans-serif; font-style: italic">
                      <li>Du droit à l'image de l'intervenante et des autres participants;</li>
                      <li>Du caractère privé des enseignements dispensés et des échanges.</li>
                    </ul>
                    Il vous est par conséquent strictement interdit :
                    <ul style="font-family: open sans, sans-serif; font-style: italic">
                      <li>De capturer et de diffuser les images de l'intervenante et des participants quel que soit le support y compris internet et les réseaux sociaux.</li>
                      <li>D'enregistrer les enseignements dispensés et échanges,</li>
                    </ul>
                    <p style="font-family: open sans, sans-serif; font-style: italic">Vous notez que toute violation de ces interdictions entraînera des poursuites judiciaires.</p>

          </div>
        </div>
      </div>
      <p>&nbsp;</p>
      <div class="row">
        <div class="col-sm-4 recent_cause">
          <div class="row m0 inner">
            <img src="<?php echo site_url('assets/img/banner/directs.jpg'); ?>" alt="Image cours en direct">
            <div class="row m0 cause_desc">
              <h5>Cours en direct</h5>
              <p>Chers étudiants de Sous Le Figuier, ici vous pouvez vous connecter aux cours en directs, sous réserve de votre inscription effective au programme annuel.</p>
              <a href="<?php echo site_url('formation/directs'); ?>" class="btn-primary btn-outline">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 recent_cause">
          <div class="row m0 inner">
            <img src="<?php echo site_url('assets/img/banner/differe.jpg'); ?>" alt="">
            <div class="row m0 cause_desc">
              <h5>Cours en différé</h5>
              <p>Chers étudiants de Sous Le Figuier, ici vous retrouverez les cours précédents.</p>
              <a href="<?php echo site_url('formation/differes'); ?>" class="btn-primary btn-outline">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 recent_cause">
          <div class="row m0 inner">
            <img src="<?php echo site_url('assets/img/image-bibliotheque-pour-ecole-formation1.jpg'); ?>" alt="">
            <div class="row m0 cause_desc">
              <h5>Bibliothèque</h5>
              <p>Chers étudiants de Sous Le Figuier, nous mettons à votre disposition des propositions de lecture et des enseignements à suivre pour compléter votre formation.</p>
              <a href="<?php echo site_url('formation/livre-numerique'); ?>" class="btn-primary btn-outline">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 recent_cause">
          <div class="row m0 inner">
            <img src="<?php echo site_url('assets/img/banner/register.jpg'); ?>" alt="">
            <div class="row m0 cause_desc">
              <h5>Inscription des étudiants</h5>
              <p>FICHE D’INSCRIPTION « SOUS LE FIGUIER »</p>
              <a href="<?php echo site_url('inscription'); ?>" class="btn-primary btn-outline">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 recent_cause">
          <div class="row m0 inner">
            <img src="<?php echo site_url('assets/img/exercices3.jpg'); ?>" alt="">
            <div class="row m0 cause_desc">
              <h5>Plateforme d'exercices</h5>
              <p><strong><i>« SOUS LE FIGUIER »</i></strong> est un espace de partage ayant des exigences quelques peu académiques qui se traduisent par: Des contrôles continus (Recherches - Exercices écrits - Exposés oraux - Collaboration …)</p>
              <a href="<?php echo site_url('formation/exercices'); ?>" class="btn-primary btn-outline">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 recent_cause">
          <div class="row m0 inner">
            <img src="<?php echo site_url(); ?>assets/img/banner/forum_two.jpg" alt="">
            <div class="row m0 cause_desc">
              <h5>Forum</h5>
              <p>Chers étudiants de Sous Le Figuier, ce forum vous est réservé pour échanger et poser vos questions sur les cours.</p>
              <a href="<?= site_url('formation/forum') ?>" class="btn-primary btn-outline">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>