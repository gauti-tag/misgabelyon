<!-- Start Page Title Area -->

<?php foreach ($bannerPartenaires as $row):  ?>

<div class="bg-15 banner-display-phone" style=" position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php echo site_url('assets/banniere/partenaires/'.$row->file_banner_partenanires)  ?>');
    background-size: cover;
    background-position: center center;
    height: 500px;">
  <div class="container">
    <div class="page-title-content">



    </div>
  </div>
</div>

   <?php endforeach; ?>


  <!--  <section class=" pt-100 pb-70" style="padding-top: 35px !important;">
      <div class="container">
            <div class="section-title">
              <h2>Partenaires</h2>
            </div>
      </div>
    </section>-->

<?php foreach ($ContentPartenaires as $row):  ?>

    <section class="event-details pt-5 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="event-details-content">
                        <div class="single-content text-justify">

                            <h2> <?php echo $row->titre_content_partenaires; ?></h2>
                            <p style="font-family: open sans, sans-serif; font-style: italic">  <?php echo $row->paragraph1_content_partenaires; ?> </p>
                            <p style="font-family: open sans, sans-serif; font-style: italic">  <?php echo $row->paragraph2_content_partenaires; ?> </p>

                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-img" style="margin-top: 100px; justify-content: center">
                        <img src="<?php echo site_url('assets/partenaires/content/img/'.$row->file_content_partenaires); ?>" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  endforeach; ?>


<!-- Start Partner Area -->
<!--<div class="partner-area ptb-100 d-flex h-100">
    <div class="container">
        <div class="row align-self-center text-center">

            <?php // foreach ($allPartenaires as $row): ?>

            <div class="text-center" style="display: block; margin-left: auto; margin-right: auto">
                <a href="#">
                    <img class="img-fluid" width="200" src="<?php  //echo site_url('assets/img/'.$row->file_interface_partenaires) ?>" alt="Image">
                </a>
            </div>

            <?php// endforeach; ?>


        </div>
    </div>
</div> -->
<!-- End Partner Area -->