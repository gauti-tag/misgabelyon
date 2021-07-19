



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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateEvangelisationTemoignages') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idEvangelisationTemoignagesUpDate" value="<?php echo $editDataEvangelisationTemoignage[0]['id_evangelisation_temoignages'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $editDataEvangelisationTemoignage[0]['nom_evangelisation_temoignages'] ?>">
                </div>
                <div class="form-group">
                    <label for="prenoms">Prénoms</label>
                    <input type="text" class="form-control" id="prenoms" name="prenoms" value="<?php echo $editDataEvangelisationTemoignage[0]['prenoms_evangelisation_temoignages'] ?>">
                </div>
                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input type="text" class="form-control" id="profession" name="profession" value="<?php echo $editDataEvangelisationTemoignage[0]['profession_evangelisation_temoignages'] ?>">
                </div>
                <div class="form-group">
                    <label for="lien">Audio</label>
                    <div class="text-left">
                         <audio controls src="<?php echo site_url('assets/evangelisation/temoignage/audio/'.$editDataEvangelisationTemoignage[0]['temoignage_evangelisation_temoignages']);?>"></audio>
                    </div>
                    <label for="temoignage">Ajouter une image 1280 x 960 (format gif|jpg|png|jpeg)</label>
                    <input class="form-control" type="file" name="temoignage" id="temoignage">
                </div>
                  <!--<div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?php //echo $editDataEvangelisationTemoignage[0]['status_evangelisation_temoignages'] ?>">
                  </div>-->
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select name="editStatus" class="form-control">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editDataEvangelisationTemoignage[0]['status_evangelisation_temoignages']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>

                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_tvdiffere'))
                    {
                        echo $this->session->flashdata('error_edit_tvdiffere');
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



