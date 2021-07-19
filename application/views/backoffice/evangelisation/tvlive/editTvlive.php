



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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateEvangelisationTvLive') ?>">

            <div class="box-body">
                <input type="hidden" name="idEvangelisationTvLiveUpDate" value="<?php echo $editEvangelisationTvLive[0]['id_evangelisation_tv_live'] ?>">
                <div class="form-group">
                    <label for="code">Code vidéo</label>
                    <input type="text" class="form-control" id="code" name="editCode" value="<?php echo $editEvangelisationTvLive[0]['code_evangelisation_tv_live'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="libelle">Libellé vidéo</label>
                    <input type="text" class="form-control" id="libelle" name="editLibelle" value="<?php echo $editEvangelisationTvLive[0]['libelle_evangelisation_tv_live'] ?>"  required>
                </div>
                <div class="form-group">
                    <label for="lien">Lien vidéo</label>
                    <input type="text" class="form-control" id="lien" name="editLien" value="<?php echo $editEvangelisationTvLive[0]['lien_evangelisation_tv_live'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="dateD">Date de début</label>
                    <input type="text" class="form-control" id="dateD" name="editDateD" value="<?php echo $editEvangelisationTvLive[0]['date_debut_evangelisation_tv_live'] ?>">
                </div>
                <div class="form-group">
                    <label for="dateF">Date de fin</label>
                    <input type="text" class="form-control" id="dateF" name="editDateF" value="<?php echo $editEvangelisationTvLive[0]['date_fin_evangelisation_tv_live'] ?>">
                </div>
                <div class="form-group">
                    <label for="heure">Nombre d'heures</label>
                    <input type="text" class="form-control" id="heure" name="editHeure" value="<?php echo $editEvangelisationTvLive[0]['heure_evangelisation_tv_live'] ?>">
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire</label>
                    <textarea type="text" class="form-control" id="comment" name="editComment" required rows="10" placeholder=""> <?php echo $editEvangelisationTvLive[0]['commentaire_evangelisation_tv_live'] ?> </textarea>
                </div>
            <!--    <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="editStatus" value="<?php echo $editEvangelisationTvLive[0]['status_evangelisation_tv_live'] ?>">
                </div>-->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="editStatus" class="form-control">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editEvangelisationTvLive[0]['status_evangelisation_tv_live']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_new_evangelisation_tv_live'))
                    {
                        echo $this->session->flashdata('error_new_evangelisation_tv_live');
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
