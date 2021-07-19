






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

    <div class="box box-primary" style=" width: 800px; margin: 0 auto">
        <!-- form start -->
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateParoleVideo') ?>">

            <div class="box-body">
                <input type="hidden" name="idEvangelisationParoleVideo" value="<?php echo $editEvangelisationParoleVideo[0]['id_evangelisation_parole_video'] ?>">

                <div class="form-group">
                    <label for="auteur">Auteur</label>
                    <input type="text" class="form-control" id="auteur" name="auteur" value="<?php echo $editEvangelisationParoleVideo[0]['author_evangelisation_parole_video'] ?>">
                </div>
                <div class="form-group">
                    <label for="lienVideo">lien vidéo</label>
                    <input type="text" class="form-control" id="lienVideo" name="lienVideo" value="<?php echo $editEvangelisationParoleVideo[0]['link_evangelisation_parole_video'] ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"><?php echo $editEvangelisationParoleVideo[0]['describe_evangelisation_parole_video'] ?></textarea>
                </div>

                <div class="form-group">
                    <label for="jour">Jour</label>
                    <select name="jour" class="form-control">
                        <?php foreach ($jours as $row_day):  ?>
                            <option <?php if($row_day->id_jour == $editEvangelisationParoleVideo[0]['day_evangelisation_parole_video']){echo 'selected="selected"';}  ?> value="<?= $row_day->id_jour ?>"> <?= $row_day->name_jour ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="status">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editEvangelisationParoleVideo[0]['status_evangelisation_parole_video']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_new_evangelisation_parole_video'))
                    {
                        echo $this->session->flashdata('error_new_evangelisation_parole_video');
                    }
                    ?>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->

</div>
