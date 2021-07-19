<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php echo site_url() ?>assets/img/banner/prayer.jpg');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
        <div class="page-title-content">


        </div>
    </div>
</div>



<!-- Start Projects Area -->
 <!--  ========= I remove this 'projects-area' from the class to change the style =========-->
<section class="pt-100 pb-70 mx-auto text-justify text-center">
    <div class="container-fluid">
        <div class="section-title green-title">
        <!--<span>Projects</span> -->
            <h2>Prières à partager</h2>
        </div>

        <div class="projects-slider owl-theme owl-carousel">

            <?php foreach ($allPrierePartage as $row):  ?>

            <div class="single-projects-box">
                <img src="<?php echo site_url() ?>/assets/img/banner/prayer.jpg" alt="Image">

                <div class="single-causes-content" style="top: 0;">

                    <h3>
                        <?php echo $row->theme_priere_partage  ?> <!--Implement Solar-->
                    </h3>

                    <p> <?php echo $row->content_priere_partage  ?> <!--Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,  consectetur adipiscing elit: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit--></p>
                    <p style="font-style: italic; color: #ffd700"><?php echo $row->ref_priere_partage  ?></p>
                </div>
            </div>

            <?php endforeach;  ?>
        <!--    <div class="single-projects-box">
                <img src="<?php echo site_url() ?>/assets/img/banner/prayer.jpg" alt="Image">

                <div class="single-causes-content">
                    <h3>
                        Save Wildlife & Their Cubes
                    </h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
            </div>

            <div class="single-projects-box">
                <img src="<?php echo site_url() ?>/assets/img/banner/prayer.jpg" alt="Image">

                <div class="single-causes-content">
                    <h3>
                        <a href="#">Save Plants & Forest</a>
                    </h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
            </div>

            <div class="single-projects-box">
                <img src="<?php echo site_url() ?>/assets/img/banner/prayer.jpg" alt="Image">

                <div class="single-causes-content">
                    <h3>
                        <a href="#">Supply Drinking Water For the People</a>
                    </h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
            </div> -->

        </div>
    </div>
</section>
<!-- End Project Area -->

<!--<div class="modal fade" id="priere_partage" tabindex="-1" aria-labelledby="partageLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border: 5px solid #ffd700;">
            <div class="modal-header">
                <h3 class="modal-title" id="partageLabel"> Titre </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="font-style: italic; font-family: open sans, sans-serif">Contenu complet.</p>
            </div>

        </div>
    </div>
</div>-->

