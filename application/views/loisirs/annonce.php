
<?php foreach ($bannerAnnonces as $row_A): ?>

<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php echo site_url('assets/banniere/loisir/'.$row_A->file_banner_loisir_petites_annonces) ?>');
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

<!-- Start Blog Area -->
<section class="blog-area pt-4 pb-5">
    <div class="container">
        <div class="section-title">
            <h2>Petites Annonces</h2>
        </div>
        <div class="row">

            <?php foreach ($allAnnonces as $row):  ?>

            <div class="col-lg-6 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-img">
                        <a href="#">
                            <img class="img-fluid" style="opacity: 0.9" src="<?php echo site_url('assets/loisirs/annonce/'.$row->image_loisirs_annonce); ?>" alt="Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="flaticon-user"></i>
                                <a href="#"><?php echo $row->structure_loisirs_annonce; ?></a>
                            </li>
                            <li>
                                <i class="flaticon-class"></i>
                                <span><?php  echo $row->domaine_loisirs_annonce; ?></span>
                            </li>
                        </ul>
                        <h3 style="background-color: white; opacity: 0.6; padding: 5px; border-radius: 10px">
                         <?php echo $row->theme_loisirs_annonce;  ?>
                        </h3>
                        <p><?php echo $row->description_loisirs_annonce; ?></p>

                    </div>
                    <span class="date">
              <?php  echo $row->jour_loisirs_annonce; ?> <br> <?php foreach ($month as $row_month){ if($row_month->id == $row->mois_loisirs_annonce){echo $row_month->month;}}  ?>
            </span>
                </div>
            </div>

            <?php endforeach; ?>


        <!--    <div class="col-lg-6 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="<?php echo site_url() ?>assets/img/blog/blog-2.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="flaticon-user"></i>
                                <a href="#">By Admin</a>
                            </li>
                            <li>
                                <i class="flaticon-class"></i>
                                <span>Food</span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Save The Children’s Role In Fight Against Malnutrition Hailed</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                        </a>
                    </div>
                    <span class="date">
              18 <br> Oct
            </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="<?php echo site_url() ?>assets/img/blog/blog-3.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="flaticon-user"></i>
                                <a href="#">By Admin</a>
                            </li>
                            <li>
                                <i class="flaticon-class"></i>
                                <span>Food</span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Turning Your Emergency Donation Into Instant</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                        </a>
                    </div>
                    <span class="date">
              18 <br> Oct
            </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="<?php echo site_url() ?>assets/img/blog/blog-4.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="flaticon-user"></i>
                                <a href="#">By Admin</a>
                            </li>
                            <li>
                                <i class="flaticon-class"></i>
                                <span>Food</span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Join Campaign For Deprive People Of Rights</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                        </a>
                    </div>
                    <span class="date">
              18 <br> Oct
            </span>
                </div>
            </div> -->


        </div>
    </div>
</section>
<!-- End Blog Area -->