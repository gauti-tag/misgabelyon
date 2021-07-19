


<!-- Start Services Area -->
<section class="services-area services-area-page" style="padding-top: 5px; padding-bottom: 100px">
    <div class="container">
        <div class="section-title">
          <!--  <span>Our Services</span>  -->
            <h2>Exercices</h2>
            <p>Ajouter un commentaire</p>
        </div>

        <div class="row">
          <?php foreach ($allExercice as $row):   ?>

            <div class="col-lg-4 col-sm-6">
                <div class="single-services-box overly-outside">
                    <div class="overly-inside">
                        <i class="flaticon-project-management"></i>
                        <h3><?php echo $row->titre_exercice ?></h3>
                        <p>Publié le <?php  echo $row->created_at_exercice ?></p>

                        <a href="<?php echo site_url('education_formation/Exercise_comment_display/exerciseCommentProcess/'.$row->id_exercice);?>" class="read-more">
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

        <div class="col-lg-12 col-md-12">
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
        </div>
    </div>
</section>
<!-- End Services Area -->
