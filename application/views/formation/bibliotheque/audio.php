

<style>

</style>

<!-- Start Causes Area -->
<section class="causes-area" style="padding-bottom: 100px; padding-top: 20px">
    <div class="container">
        <div class="section-title">
             <!--  <span>What The Causes</span>   -->
            <h2>Enregistrement Audio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, perferendis facilis! Magni explicabo nam velit nulla officiis dolorum? Ducimus illum</p>
        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6">
             <?php foreach ($allAudio as $row):  ?>
                <div class="single-causes-box">

                    <div class="single-causes-content audio" style="width: 600px">
                        <h3>
                            <span><?php echo $row->titre_audio ?></span>
                        </h3>

                        <p><?php echo $row->description_audio ?></p>

                        <div class="all-skill-bar">

                            <div class="skill-bar" data-percentage="75%">

                                <h4 class="progress-title-holder">

                                    <audio style="width: 400px" src="<?php echo site_url('assets/records/')?><?php echo $row->file_audio ?>" controls="controls" preload="none"></audio>

                                   <!--         <span class="progress-title">$1800000 Raised Of $150000</span>
                                                <span class="progress-number-mark">
												<span class="percent"></span>
												<span class="down-arrow"></span>
									            </span>   -->
                                </h4>

                                   <!-- <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div> -->

                                </div>
                            </div>

                            <a href="<?php echo site_url('assets/records/')?><?php echo $row->file_audio ?>" class="default-btn">
                                <span>TELECHARGER</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach;  ?>
</section>
    <!-- End Causes Area -->
