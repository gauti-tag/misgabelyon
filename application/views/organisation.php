  <!-- Start Page Title Area -->

  <?php  foreach ($bannerOrganisation as $row):  ?>

  <div class="bg-15 banner-display-phone" style="position: relative;
      overflow: hidden;
      padding-top: 70px;
      padding-bottom: 70px;
      text-align: center;
      z-index: 1;
      background-image: url('<?php echo site_url('assets/banniere/organisation/'.$row->file_banner_organisation) ?>');
      background-size: cover;
	  background-position: center center;
      height: 500px;">

    <div class="container">
      <div class="page-title-content">

      </div>
    </div>
  </div>

  <?php endforeach;  ?>




  <?php  foreach ($allOrganisation as $row):  ?>
    <section class="event-details pt-5 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="event-details-content">
            <div class="single-content text-justify">

              <h2> <?php echo $row->titre_interface_organisation; ?></h2>
              <p style="font-family: open sans, sans-serif; font-style: italic"> <?php echo $row->paragraph1_interface_organisation; ?> </p>
              <p style="font-family: open sans, sans-serif; font-style: italic"> <?php echo $row->paragraph2_interface_organisation; ?> </p>

              <p></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about-img" style="margin-top: 100px; justify-content: center">
            <img src="<?php echo site_url('assets/organisation/img/'.$row->file_interface_organisation); ?>" alt="Image">
          </div>
        </div>
      </div>
    </div>
  </section>
      <?php  endforeach; ?>