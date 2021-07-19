
<div class="content-wrapper">
    <section class="content-header" style="margin-bottom: 15px">
        <h1>
            <?php echo $titre; ?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
            <?php foreach ($menu as $key => $data): ?>
                <li> <?php echo $data ?></li>
            <?php endforeach; ?>
        </ol>
    </section>
    <!-- general form elements -->
    <div class="box box-primary" style=" width: 800px; margin: 0 auto">
        <!-- form start -->
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateCarousel') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idCarouselUpDate" value="<?php echo $editCarousel[0]['id_boutique_carousel'] ?>" >
            <input type="hidden" name="oldCarouselUpDate" value="<?php echo $editCarousel[0]['file_boutique_carousel'] ?>" >

            <div class="box-body">
                <?php if(($editCarousel[0]['file_boutique_carousel'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/boutique/carousel/'.$editCarousel[0]['file_boutique_carousel'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="imageCarousel"> Modifier l'image </label>
                    <input type="file" class="form-control" id="imageCarousel" name="imageCarousel" required>
                </div>

                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_carousel'))
                    {
                        echo $this->session->flashdata('error_edit_carousel');
                    }
                    ?>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>

