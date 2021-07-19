
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateBannerOrganisation') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idBannerOrganisationUpDate" value="<?php echo $editBannerOrganisation[0]['id_banner_organisation'] ?>" >
            <input type="hidden" name="oldBannerOrganisationUpDate" value="<?php echo $editBannerOrganisation[0]['file_banner_organisation'] ?>" >

            <div class="box-body">
                <?php if(($editBannerOrganisation[0]['file_banner_organisation'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/banniere/organisation/'.$editBannerOrganisation[0]['file_banner_organisation'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="img"> Modifier l'image </label>
                    <input type="file" class="form-control" id="img" name="img" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editBannerOrganisation[0]['status_banner_organisation']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
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

