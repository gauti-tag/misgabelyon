
  <?php foreach ($bannerProgramme as $row_banner): ?>
  <!-- Start Page Title Area -->
  <div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php echo site_url('assets/banniere/programme/'.$row_banner->file_banner_programme) ?>');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
      <div class="page-title-content">


      </div>
    </div>
  </div>

  <?php endforeach; ?>

  <section class="services-area services-area-page pt-100 pb-70 our_causes">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="single-blog-post image-programme-display-phone">
            <div class="blog-img">
              <!-- <a href="#"> -->
                <img src="<?php echo site_url('assets/img/accueil/Programme.jfif') ?>" alt="Image">
              <!-- </a> -->
            </div>
            <!-- <div class="blog-content">
              <h3>
                <a href="#">Charity Can Help Make Smile
                  Of Poor People</a>
              </h3>
            </div> -->
          </div>
        </div>
        <div class="col-lg-8 col-md-8">
          <div class="single-blog-post">
            <h3>Le programme</h3>
            <p style="font-family: open sans, sans-serif; font-style: italic"><strong>« Mais vous, vous êtes une race élue, un sacerdoce royal, une nation sainte, un peuple acquis, pour proclamer les louanges de Celui qui vous a appelés des ténèbres à son admirable lumière. »</strong><br> (1Pierre 2, 9).</p>
                    <table class="table table-bordered" width="100%" style="font-family: open sans, sans-serif; font-style: italic">
                      <tr>
                        <td valign="top"><strong>DATES</strong></td>
                        <td valign="top"><strong>THÈMES</strong></td>
                        <td valign="top"><strong>COMMENTAIRES</strong></td>
                      </tr>
                        <?php foreach ($allProgramme as $row):  ?>
                      <tr>
                          <td valign="top" width="105"><strong><span><?php foreach ($month as $row_month){if($row_month->id == $row->mois_programme){ echo $row_month->month; }}?></span>  <span><?php echo $row->annee_programme; ?></span></strong></td>
                        <td valign="top"><?php echo $row->theme_programme;  ?><!--L&rsquo;Onction Sacerdotale ⇿ Le sacerdoce commun<br />
                          Le Triomphe par la prière et l&rsquo;attention à Dieu--></td>
                        <td valign="top"><?php echo $row->commentaires_programme;  ?><!--Des figures sacerdotales dans la Bible ⇿ Enseignements (De Melchisédech à Jésus, le Christ) ---></td>
                      </tr>
                        <?php endforeach;?>
                     <!-- <tr>
                        <td valign="top"><strong>Février 2021</strong></td>
                        <td rowspan="2" valign="top">L&rsquo;Onction Prophétique ⇿ «&nbsp;<em>Ah&nbsp;! Si le    Seigneur pouvait faire de tout son peuple un peuple de prophètes&nbsp;!&nbsp;</em>» (Nombres 11, 29)<br />
                          Le Triomphe par la Parole et par l&rsquo;annonce</td>
                        <td width="246" rowspan="2" valign="top">
                        Des figures prophétiques dans la Bible ⇿ Enseignements (De Moïse à Jésus, le Christ)</td>
                      </tr>
                      <tr>
                        <td valign="top"><strong>Mars 2021</strong></td>
                      </tr>
                      <tr>
                        <td valign="top"><strong>Avril 2021</strong></td>
                        <td valign="top">L&rsquo;Onction Royale<br />
                          Le Triomphe dans le quotidien d&rsquo;une vie laïque </td>
                        <td valign="top">Des figures Royales dans la Bible ⇿ Enseignements (De Saül à Jésus, le Christ) </td>
                      </tr>
                      <tr>
                        <td valign="top"><strong>Juin 2021</strong></td>
                        <td colspan="2" valign="top"><strong>Missions JUBILÉO (Animé par les étudiants)</strong></td>
                      </tr> -->
                    </table>
          </div>
        </div>
      </div>
      <p>&nbsp;</p>
      <div class="row">
        <div class="col-sm-4 recent_cause" style="">
          <div class="row m0 inner">
            <img src="<?php echo site_url('assets/img/banner/directs.jpg'); ?>" alt="">
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
              <h5>cours en différé</h5>
              <p>Chers étudiants de Sous Le Figuier, ici vous retrouverez les cours précédents.</p>
              <a href="<?php echo site_url('formation/cours-en-differes'); ?>" class="btn-primary btn-outline">En savoir plus</a>
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