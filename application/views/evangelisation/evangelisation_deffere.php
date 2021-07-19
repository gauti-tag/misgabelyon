
<style>

    .titre{

        border-radius: 23px;
    }

</style>

<?php  foreach ($bannerDiffere as $row): ?>

<div class="bg-15 banner-display-phone" style="margin-bottom: 5px; position: relative;
        overflow: hidden;
        padding-top: 70px;
        padding-bottom: 70px;
        text-align: center;
        z-index: 1;
        background-image: url('<?php echo site_url('assets/banniere/exhortation/'.$row->file_banner_exhortation) ?>');
        background-size: cover;
        background-position: center center;
        height: 500px;">
    <div class="container">
        <div class="page-title-content">

        </div>
    </div>

</div>

<?php endforeach; ?>

<!-- Start Causes Area -->
<section class="causes-area pt-3" style="background-color: #f7f7f7; background-image: none; padding-top: 5px; padding-bottom: 70px">
    <div class="container">
        <div class="section-title">
            <h2><!--Missions différées--> <!--Différés--> Exhortation</h2>
          <!-- <p>Commentaire</p>-->
        </div>
        <div class="row">
            <?php foreach ($tv_differe as $row): ?>
                <div class="col-xs-12 col-lg-6 col-md-6">
                    <div class="single-causes-box">
                        <iframe class="responsive-iframe resize-video-exhortation" width="560" height="315" src="<?php echo $row->lien_evangelisation_tv_differe;   ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="single-causes-content">
                            <h3 class="livre">
                                <?php echo $row->titre_evangelisation_tv_differe; ?>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php  endforeach;  ?>


       <!--     <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers">
                        <i class="bx bx-chevron-left"></i>
                    </a>

                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>

                    <a href="#" class="next page-numbers">
                        <i class="bx bx-chevron-right"></i>
                    </a>
                </div>
            </div> -->


        </div>
    </div>
</section>
