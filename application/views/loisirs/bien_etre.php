
<?php foreach ($bannerBienEtre as $row_b): ?>
<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php echo site_url('assets/banniere/loisir/'.$row_b->file_banner_loisir_bien_etre) ?>');
    background-size: cover;
    background-position: center center;
    height: 500px;
    margin: auto">
    <div class="container">
        <div class="page-title-content">


        </div>
    </div>
</div>

<?php endforeach; ?>






<!-- Start Events Area -->
<section class="events-area pt-3 pb-70">
    <div class="container">
        <div class="section-title">
            <span></span>
            <h2>Bien-être</h2>
        </div>

        <div class="row">
            <?php foreach ($allBienEtre as $row):  ?>
            <div class="col-lg-6 col-md-6">
                <div class="single-events-box">
                    <div class="row">
                        <div class="col-lg-6 pr-0">
                            <img style="width: 100%; height: 100%" src="<?php echo site_url('assets/loisirs/bien-etre/'.$row->image_loisirs_bien_etre) ?>">
                        </div>

                        <div class="col-lg-6 pl-0">
                            <div class="single-events-content overly-outside">
                                <div class="overly-inside">
											<span>
												<i class="flaticon-calendar"></i>
												<?php echo $row->date_loisirs_bien_etre; ?>
											</span>
                                    <h3>
                                        <a href="#"><?php echo $row->theme_loisirs_bien_etre; ?></a>
                                    </h3>
                                    <p><?php echo $row->description_loisirs_bien_etre; ?></p>

                                    <!--  <a href="#" class="read-more">
                                          Read More
                                      </a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

       <!--     <div class="col-lg-6 col-md-6">
                <div class="single-events-box">
                    <div class="row">
                        <div class="col-lg-6 pr-0">
                            <img style="width: 100%; height: 100%" src="<?php echo site_url() ?>assets/img/banner/bien-etre5.jpg">
                             <div class="events-img bg-2"></div>
                        </div>

                        <div class="col-lg-6 pl-0">
                            <div class="single-events-content overly-outside">
                                <div class="overly-inside">
											<span>
												<i class="flaticon-calendar"></i>
												Nov 21,2020 - 11 AM
											</span>
                                    <h3>
                                        <a href="event-details.html">Poor People Campaign Resources</a>
                                    </h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed reprehenderit dignissimos</p>

                                    <a href="event-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="single-events-box">
                    <div class="row">
                        <div class="col-lg-6 pr-0">
                              <div class="events-img bg-3"></div>
                            <img style="width: 100%; height: 100%" src="<?php echo site_url() ?>assets/img/banner/bien-etre3.jpg">
                        </div>

                        <div class="col-lg-6 pl-0">
                            <div class="single-events-content overly-outside">
                                <div class="overly-inside">
											<span>
												<i class="flaticon-calendar"></i>
												Nov 22,2020 - 12 AM
											</span>
                                    <h3>
                                        <a href="event-details.html">Campaign For Safe Water & Hygiene</a>
                                    </h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed reprehenderit dignissimos</p>

                                    <a href="event-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="single-events-box">
                    <div class="row">
                        <div class="col-lg-6 pr-0">
                                 <div class="events-img bg-4"></div>
                            <img style="width: 100%; height: 100%" src="<?php echo site_url() ?>assets/img/banner/bien-etre6.jpg">
                        </div>

                        <div class="col-lg-6 pl-0">
                            <div class="single-events-content overly-outside">
                                <div class="overly-inside">
											<span>
												<i class="flaticon-calendar"></i>
												Nov 20,2020 - 01 AM
											</span>
                                    <h3>
                                        <a href="event-details.html">Boosting Social For Charities</a>
                                    </h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed reprehenderit dignissimos</p>

                                    <a href="event-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End Events Area -->
