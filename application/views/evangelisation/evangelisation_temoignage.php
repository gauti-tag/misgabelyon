
<?php foreach ($bannerElyon as $row):   ?>

<div class="bg-15 banner-display-phone" style="margin-bottom: 50px; position: relative;
        overflow: hidden;
        padding-top: 70px;
        padding-bottom: 70px;
        text-align: center;
        z-index: 1;
        background-image: url('<?php echo site_url('assets/banniere/elyon/'.$row->file_banner_elyon) ?>');
        background-size: cover;
        background-position: center center;
        height: 500px;">
    <div class="container">
        <div class="page-title-content">

        </div>
    </div>

</div>

<?php endforeach;  ?>

<!-- Start Testimonials Area -->
<section class="testimonials-area-two testimonials-area-page" style="padding-top: 10px; padding-bottom: 50px">

    <div class="container align-items-center">
        <div class="section-title" style="margin-bottom: 50px">
            <span></span>
            <h2><!--Temoignages-->El-Elyôn dans mon histoire</h2>
        </div>
        <!--<div class="row">
            <?php foreach ($allTemoignages as $row): ?>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"  style="margin-top: -80px">
                <div class="single-testimonials-two" style="border: 1px solid; box-shadow: 5px 10px #888888">
                    <i class="quotes bx bxs-quote-alt-left" style="color: #DDAF01; border: 1px solid"></i>
                   <div class="mb-3"><img src="<?php echo site_url('assets/evangelisation/temoignage/image/'.$row->file_evangelisation_temoignages) ?>"></div>
                    <p><audio controls src="<?php echo site_url('assets/evangelisation/temoignage/audio/'.$row->temoignage_evangelisation_temoignages); ?>"></audio></p>
                    <div class="" style=""> -->
            <!--     <img width="130" src="<?php //echo site_url() ?>assets/img/testimonials/testimonials-3.jpg" alt="Image">  -->
                        <!--<h3 style="font-size: 20px" class="livre"> <?php echo $row->prenoms_evangelisation_temoignages.' '.$row->nom_evangelisation_temoignages ?> </h3>
                        <span><?php echo $row->profession_evangelisation_temoignages ?></span>
                    </div>
                </div>
            </div>  <?php endforeach; ?>

        </div> -->

        <!--- ====  second proposition of template ==== -->

        <?php foreach ($allTemoignages as $row): ?>

        <div class="row mt-5 text-center box-g-temoins">
              <div class="col-md-4 img-box-temoins">
                  <img width="150" src="<?php echo site_url('assets/evangelisation/temoignage/image/'.$row->file_evangelisation_temoignages) ?>">
              </div>
              <div class="col-md-8 box-temoins">
                  <div class="row">
                        <div class="col-md-12">
                            <audio class="audio-temoins" controls src="<?php echo site_url('assets/evangelisation/temoignage/audio/'.$row->temoignage_evangelisation_temoignages); ?>"></audio>
                        </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <h3 style="font-size: 20px" class="livre"><?php echo $row->prenoms_evangelisation_temoignages.' '.$row->nom_evangelisation_temoignages ?> </h3>
                      </div>
                      <div class="col-md-12">
                          <?php echo $row->profession_evangelisation_temoignages ?>
                      </div>
                  </div>

              </div>
        </div>

        <?php endforeach; ?>



    </div>
</section>
<!-- End Testimonials Area -->
