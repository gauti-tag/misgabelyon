<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php echo site_url() ?>assets/img/banner/homework.jpg');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
        <div class="page-title-content">


        </div>
    </div>
</div>


<!-- Start Services Area -->
<section class="services-area services-area-page pt-3" style="padding-top: 5px; padding-bottom: 100px">
    <div class="container">
        <div class="section-title">
            <!--  <span>Our Services</span>  -->
            <h2>Exercices</h2>
        <!--    <p>Ajouter un commentaire</p> -->
        </div>

        <div class="row">
            <?php foreach ($all_exercises_priere as $row):   ?>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services-box overly-outside">
                        <div class="overly-inside">
                            <i class="flaticon-project-management"></i>
                            <h3><?php echo $row->titre_exercice_priere ?></h3>
                            <p>Publié le <?php  echo $row->created_at_exercice_priere ?></p>

                            <a href="<?php echo site_url('priere/Priere/exercisePost/'.$row->id_exercice_priere);?>" class="read-more">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

            <?php endforeach;   ?>
            <!--    <div class="col-lg-4 col-sm-6">
                    <div class="single-services-box overly-outside">
                        <div class="overly-inside">
                            <i class="flaticon-project-management"></i>
                            <h3>Better Water Environment</h3>
                            <p>Publié le 28/12/2020 à 12h32min15s</p>

                            <a href="#" class="read-more">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services-box overly-outside">
                        <div class="overly-inside">
                            <i class="flaticon-project-management"></i>
                            <h3>Save Energy</h3>
                            <p>Publié le 28/12/2020 à 12h32min15s</p>

                            <a href="#" class="read-more">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services-box overly-outside">
                        <div class="overly-inside">
                            <i class="flaticon-project-management"></i>
                            <h3>Efficient Technology</h3>
                            <p>Publié le 28/12/2020 à 12h32min15s</p>

                            <a href="#" class="read-more">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services-box overly-outside">
                        <div class="overly-inside">
                            <i class="flaticon-project-management"></i>
                            <h3>Water Quality  Standard</h3>
                            <p>Publié le 28/12/2020 à 12h32min15s</p>

                            <a href="#" class="read-more">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services-box overly-outside">
                        <div class="overly-inside">
                            <i class="flaticon-project-management"></i>
                            <h3>Tree Plantation</h3>
                            <p>Publié le 28/12/2020 à 12h32min15s</p>

                           <a href="#" class="read-more">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>-->

        </div>

      <!--  <div class="col-lg-12 col-md-12">
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
</section>
<!-- End Services Area -->

