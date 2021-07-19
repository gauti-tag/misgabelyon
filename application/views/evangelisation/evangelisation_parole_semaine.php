
<?php foreach ($bannerParole as $row):   ?>
<div class="bg-15 banner-display-phone" style="margin-bottom: 5px;
        position: relative;
        overflow: hidden;
        padding-top: 70px;
        padding-bottom: 70px;
        text-align: center;
        z-index: 1;
        background-image: url('<?php echo site_url('assets/banniere/parole/'.$row->file_banner_parole) ?>');
        background-size: cover;
        background-position: center center;
        height: 500px;">

    <div class="container">
        <div class="page-title-content">

        </div>
    </div>

</div>

<?php endforeach;  ?>
<!-- Start Hero Slider Area -->
<!--<section class="hero-slider-area">
    <div class="hero-slider owl-carousel owl-theme">
        <div class="slider-item slider-item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <span class="top-title">Welcome To Tians</span>
                            <h1>Raise Your Hand For Helpless People</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto laborum eaque! Deserunt maxime, minus quas molestiae reiciendis esse natus nisi iure.</p>

                            <div class="slider-btn">
                                <a class="default-btn" href="contact.html">
                                    <span>Join With Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item slider-item-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <span class="top-title">Welcome To Tians</span>
                            <h1>Lead The Helping Hand Get Involved</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto laborum eaque! Deserunt maxime, minus quas molestiae reiciendis esse natus nisi iure.</p>

                            <div class="slider-btn">
                                <a class="default-btn" href="contact.html">
                                    <span>Join With Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Hero Slider Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area" style="padding-top: 10px; padding-bottom: 200px; background-image: url('<?php echo site_url('assets/img/team/people-bg-1.jpg') ?>')">
    <div class="container">
        <div class="section-title">
            <h2>Parole de la semaine</h2>
        </div>

        <div class="testimonials-slider owl-theme owl-carousel" style="margin-top: -30px">
            <div class="row align-items-center text-center">
                <?php foreach ($parole as $row_parole):  ?>
               <div class="col-lg-12">

                    <div class="testimonials-content text-center">
                         <div>
                             <div style="width: 200px; display: block; margin-right: auto; margin-left: auto">
                                 <img style="display: block; margin-right: auto; margin-left: auto" class="" src="<?php echo site_url('assets/evangelisation/parole/image/'.$row_parole->image_evangelisation_parole);?>"> <br>
                             </div>
                                <audio controls class="player" preload="none" src="<?php echo site_url('assets/evangelisation/parole/audio/'.$row_parole->audio_evangelisation_parole) ?>">  </audio>
                         </div>
                        <div class="testimonials-name pt-4">
                            <h3><!--Auteur1--> <?php echo $row_parole->author_evangelisation_parole;  ?></h3>
                            <span><!--Commentaire1--> <?php echo  $row_parole->describe_evangelisation_parole;   ?></span>

                            <p><!--Jour1--><?php foreach ($jours as $row_jour){ if($row_jour->id_jour == $row_parole->day_evangelisation_parole){ echo $row_jour->name_jour; }}   ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;  ?>
            </div>
            <div class="row align-items-center">
                <?php  foreach ($parole_video as $video): ?>

                <div class="col-lg-12">
                    <div class="testimonials-content text-center" style="margin-top: -10px">
                        <div>
                            <iframe class="resize-video-exhortation" width="560" height="315" src="<?php echo $video->link_evangelisation_parole_video;  ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>

                        <div class="testimonials-name">
                            <h3><!--Auteur2--><?php echo $video->author_evangelisation_parole_video  ?></h3>
                            <span><!--Commentaire2--><?php echo $video->describe_evangelisation_parole_video  ?></span>
                            <p><!--Jour2--><?php  foreach ($jours as $row_jour){ if($row_jour->id_jour == $video->day_evangelisation_parole_video ){ echo $row_jour->name_jour; }}  ?></p>
                        </div>
                    </div>
                </div> <?php  endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Area -->

