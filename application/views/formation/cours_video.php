


<style>

    .titre{

        border-radius: 23px;
    }

</style>

<!-- Start Causes Area -->
<section class="causes-area" style="background-color: #f7f7f7; background-image: none; padding-top: 0px; padding-bottom: 100px">
    <div class="container">
        <div class="section-title">

            <h2>Mission en différer</h2>
          <!--  <p>Commentaire</p> -->
        </div>

        <div class="row">
            <?php foreach ($tv_differe as $row):  ?>
            <div class="col-lg-6 col-md-6">
                <div class="single-causes-box">

                    <iframe width="560" height="315" src="<?php echo $row->lien_tv_differe;   ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <div class="single-causes-content">
                        <h3 class="livre">
                            <?php echo $row->titre_tv_differe; ?>
                        </h3>
                    </div>
                </div>
            </div>
            <?php  endforeach;  ?>
            <!--    <div class="col-lg-6 col-md-6">
                    <div class="single-causes-box">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/QYKEiw2Jeps" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <video src="https://www.youtube.com/embed/QYKEiw2Jeps"></video> -->
            <!--          <div class="single-causes-content">
                          <h3 class="livre">
                              Comment retrouver sa passion pour christ?
                          </h3>
                      </div>
                  </div>
              </div>


              <div class="col-lg-6 col-md-6">
                  <div class="single-causes-box">

                      <iframe width="560" height="315" src="https://www.youtube.com/embed/WfAqD0r1xG4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                      <div class="single-causes-content">
                          <h3 class="livre">
                              Le fondement de la vie chrétienne
                          </h3>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6">
                  <div class="single-causes-box">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/PhTeT75p15I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="single-causes-content">
                          <h3 class="livre">
                              Elle meurt, va en enfer puis au paradis, se réveille
                          </h3>
                      </div>
                  </div>
              </div>  -->






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
    </div>
</section>
