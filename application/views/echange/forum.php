<?php foreach ($banner_echange_forum as $row): ?>
<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php  echo site_url('assets/banniere/echange_forum/'.$row->file_banner_echange_forum)  ?>');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
        <div class="page-title-content">

        </div>
    </div>
</div>
<?php endforeach;  ?>



<!-- Start Services Area -->
<section class="services-area services-area-page" style="background-image: none; background-color: #f7f7f7; padding-top: 10px; padding-bottom: 100px">

    <div class="container">
        <div class="section-title">

            <h2 style="font-family: Mailston">Forum</h2>
        </div>

        <div class="row" id="viewForumEchange">

            <?php //foreach ($echangeForum as $row_echange_forum):?>

         <!--       <div class="col-lg-12 col-sm-12">
                    <div class="single-services-box overly-outside">
                        <div class="overly-inside">
                            <i class="#"></i>
                            <h3><span><?php //echo $row_echange_forum->auteur_echange_forum ?></span> : <?php //echo $row_echange_forum->titre_echange_forum  ?></h3>
                            <p style="font-family: open sans, sans-serif; font-style: italic"><?php  //echo $row_echange_forum->theme_echange_forum  ?></p>
                            <p> <em>Publié le <span><?php // echo $row_echange_forum->created_at_echange_forum  ?></span></em> </p>

                            <a href="<?php // echo site_url('echange/Forum/details/'.$row_echange_forum->id_echange_forum); ?>" class="read-more">
                                Commenter
                            </a>
                            <a href="#" class="pull-right">Commentaire(s) <span style="font-size: 12px" class="badge">[<?php //echo $countAllMessage; ?>]</span></a>
                        </div>
                    </div>
                </div> -->

            <?php //endforeach; ?>

        </div>
</section>

