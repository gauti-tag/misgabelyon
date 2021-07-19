


<style>
    .bared
    {

    }
    .livre{

        font-family: Arial;

    }
</style>
<!-- Start Causes Area -->



<section class="causes-area pt-3" style="background-color: #fefaf5; background-image: none; padding-bottom: 100px">

    <div class="container-fluid">
        <div class="section-title">
            <h2>Bibliothèque</h2>
        </div>

        <div class="row">

            <?php foreach ($allBook as $row_book): ?>

            <div class="col-lg-4 col-md-4">

                <div class="single-causes-box">

                    <!--<div class="row">

                        <div class="col-md-4">
                            <img style="width: 100px; height: 150px" src="<?php echo site_url('/assets/book/image/'.$row_book->file_numeric_book)?>" alt="Image">
                        </div>
                        <div class="col-md-8">

                            <div class="row">

                                <div class="col-md-12">
                                    <h4 class="progress-title-holder">
                                        <audio style="width: 400px" src="<?php echo site_url('assets/book/audio/')?><?php echo $row_book->audio_numeric_book ?>" controls="controls" preload="none"></audio>
                                    </h4>
                                </div>
                                <div class="col-md-12">
                                    <h3>
                                        <a class="livre" href="#"><?php echo $row_book->titre_numeric_book ?></a>
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <p><?php echo $row_book->description_numeric_book ?></p>
                                </div>

                            </div>

                        </div>

                    </div>  -->
                    <img style="width: 200px; height: 260px" src="<?php echo site_url('/assets/book/image/'.$row_book->file_numeric_book)?>" alt="Image">

                    <div class="single-causes-content bared">

                        <h3>
                            <a class="livre" href="#"><?php echo $row_book->titre_numeric_book ?></a>
                        </h3>

                        <p><?php echo $row_book->description_numeric_book ?></p>

                        <div class="skill-bar" data-percentage="75%">
                            <h4 class="progress-title-holder">
                                <audio style="" src="<?php echo site_url('assets/book/audio/')?><?php echo $row_book->audio_numeric_book ?>" controls="controls" preload="none"></audio>
                            </h4>
                        </div>

                         <!--<a target="_blank" href="<?php // echo site_url('/assets/pdf/'.$row_book->file_numeric_book) ?>" class="" aria-describedby="TELECHARGER">
                            <span style="background-color: #0131B4; padding: 10px"><b style="color: white">TELECHARGER</b></span>
                        </a> -->

                    </div>
                </div>
            </div>

            <?php endforeach; ?>

    </div>

</section>
<!-- End Causes Area -->