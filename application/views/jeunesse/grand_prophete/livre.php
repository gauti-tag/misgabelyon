
<?php foreach ($bannerLivreGrand as $row_g): ?>
<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php echo site_url('assets/banniere/jeunesse/grand/'.$row_g->file_banner_jeunesse_grand_livre) ?>');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
        <div class="page-title-content">


        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- Start Team Area -->
<section class="team-area pb-70" style="padding-top: 20px">
    <div class="container">
        <div class="section-title">
            <h2>Livres</h2>
        </div>

        <div class="row">

            <?php foreach ($allLivreGrand as $row_book): ?>

            <div class="col-lg-4 col-sm-6">
                <div class="single-team">
                    <div class="team-img">
                        <img src="<?php echo site_url('assets/jeunesse/livre/grand/'.$row_book->file_jeunesse_livre_jeune) ?>" alt="Image">

                        <ul class="team-link">

                        </ul>
                    </div>
                    <div class="team-content">
                        <h5><?php echo $row_book->titre_jeunesse_livre_jeune ?></h5>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>

           <!-- <div class="col-lg-4 col-sm-6">
                <div class="single-team">
                    <div class="team-img">
                        <img src="<?php //echo site_url() ?>assets/img/team/les-gens.jpg" alt="Image">

                            <ul class="team-link">
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-pinterest-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h5>Les gens les plus heureux sur terre</h5>
                        <span>Donate $256</span>
                    </div>
                </div>
            </div> -->

           <!-- <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-team">
                    <div class="team-img">
                        <img src="<?php // echo site_url() ?>assets/img/team/jesus.jpg" alt="Image">

                        <ul class="team-link">
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-pinterest-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h5>Que ferait Jésus à ma place</h5>
                        <span>Donate $420</span>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>