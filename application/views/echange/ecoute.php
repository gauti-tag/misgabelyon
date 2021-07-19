
<?php foreach ($bannerEcoute as $row):  ?>
<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php  echo site_url('assets/banniere/ecoute/'.$row->file_banner_ecoute)  ?>');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
        <div class="page-title-content">

        </div>
    </div>
</div>
<?php  endforeach; ?>

<!-- Start About Area -->

<?php  foreach ($dataEcoute as $row):  ?>

<?php   ?>
<section class="about-area about-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2><?php echo $row->titre_echange_ecoute ?><!--Ecoute--></h2>
                    <p><?php echo $row->paragraph1_echange_ecoute  ?><!--Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates voluptate aspernatur nam recusandae cumque assumenda, ea numquam repudiandae pariatur dolorum a accusamus unde. Fugit, laudantium facere neque ipsum nostrum natus amet consectetur adipisicing elit consectetur.--></p>

                    <p><?php echo $row->paragraph2_echange_ecoute ?><!--Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum architecto sapiente facere, officia totam dicta molestiae inventore minus perspiciatis id dignissimos laborum quo odit nulla iusto omnis mollitia, quidem distinctio.--></p>

                    <div class="row">

                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-img">
                    <img src="<?php echo site_url('assets/echange/ecoute/'.$row->file_echange_ecoute) ?>" alt="Image">

                    <div class="about-shape">
                        <img src="<?php echo site_url() ?>assets/img/about-shape-2.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
<?php endforeach; ?>