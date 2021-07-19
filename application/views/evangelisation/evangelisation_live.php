
<?php foreach ($bannerTV as $row): ?>

<div class="bg-15 banner-display-phone" style="margin-bottom: 50px; position: relative;
        overflow: hidden;
        padding-top: 70px;
        padding-bottom: 70px;
        text-align: center;
        z-index: 1;
        background-image: url('<?php echo site_url('assets/banniere/enseignement/'.$row->file_banner_enseignement) ?>');
        background-size: cover;
        background-position: center center;
        height: 500px;">
    <div class="container">
        <div class="page-title-content">

        </div>
    </div>

</div>

<?php endforeach; ?>

<!--<section class="testimonials-area-two testimonials-area-page" style="">
    <div class="container">
        <div class="section-title" style="">
            <h2>--><!--Espace missions--><!--Directs--> <!--Enseignements</h2>
        </div>

        <div class="row">
            <?php // foreach ($lienTv as $row):  ?>
                <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 resize-enseignement-data-phone">
                    <div class="single-testimonials-two" style="border: 1px solid; box-shadow: 5px 10px grey; border-radius: 45%;">
                        <i style="color: #ffd700" class="quotes bx bx-book"></i>
                        <h3 style="font-family: Arial"> <?php //echo $row->libelle_evangelisation_tv_live   ?></h3>
                        <a href="<?php //echo $row->lien_evangelisation_tv_live?>" class="btn btn-secondary" target="_blank">Lire</a>

                    </div>
                </div>
            <?php //endforeach; ?>
        </div>
</section> -->


<!-- Start What We Do Area -->
<section class="what-we-do-area pt-4 pb-70">
    <div class="container">
        <div class="section-title">
            <h2><!--Enseignements-->Edification</h2>
           </div>

        <div class="row">

            <?php  foreach ($lienTv as $row):  ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-we-box overly-outside">
                    <div class="overly-inside">
                        <i style="color: #0131B4" class="flaticon-class"></i>
                        <h6><?php echo $row->libelle_evangelisation_tv_live   ?></h6>
                        <p></p>

                        <a href="<?php echo $row->lien_evangelisation_tv_live?>" class="read-more popup-youtube">
                            Lire
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- End What We Do Area -->
