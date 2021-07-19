

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateEvangelisationTv') ?>">
            <?php // var_dump($editDataEvangelisation); die(); ?>
            <div class="box-body">
                <input type="hidden" name="idEvangelisationTvUpDate" value="<?php echo $editDataEvangelisation[0]['id_evangelisation_tv'] ?>">
                <div class="form-group">
                    <label for="libelle">Libellé télévision</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" value="<?php echo $editDataEvangelisation[0]['libelle_evangelisation_tv'] ?>">
                </div>
                <div class="form-group">
                    <label for="lien">Lien télévision</label>
                    <input type="text" class="form-control" id="lien" name="lien" value="<?php echo $editDataEvangelisation[0]['lien_evangelisation_tv'] ?>">
                </div>

                <div class="form-group">
                    <label for="comment">Commentaire</label>
                    <textarea type="text" class="form-control" id="comment" name="comment" required rows="10" placeholder=""> <?php echo $editDataEvangelisation[0]['commentaire_evangelisation_tv'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                       <select name="status" class="form-control">
                           <?php foreach ($status as $row_status):  ?>
                              <option <?php if($row_status->code_status == $editDataEvangelisation[0]['status_evangelisation_tv']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                           <?php endforeach;  ?>
                       </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_evangelisation_tv'))
                    {
                        echo $this->session->flashdata('error_edit_evangelisation_tv');
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

