

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

        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addCarousel') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="image">Ajouter une image</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>


                <?php if ($this->session->flashdata('error_new_carousel')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_carousel');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_carousel')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_carousel');?>
                    </div> <?php endif; ?>



            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


