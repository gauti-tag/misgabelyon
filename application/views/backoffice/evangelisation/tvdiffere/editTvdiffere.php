






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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateEvangelisationTvDiffere') ?>">

            <input type="hidden" name="idEvangelisationTvDiffereUpDate" value="<?php echo $editDataEvangelisation[0]['id_evangelisation_tv_differe'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $editDataEvangelisation[0]['nom_evangelisation_tv_differe'] ?>" >
                </div>
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $editDataEvangelisation[0]['titre_evangelisation_tv_differe'] ?>">
                </div>
                <div class="form-group">
                    <label for="lien">lien</label>
                    <input type="text" class="form-control" id="lien" name="lien" value="<?php echo $editDataEvangelisation[0]['lien_evangelisation_tv_differe'] ?>" >
                </div>
            <!--    <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?php  ?>">
                </div> -->

                <div class="form-group">
                    <label for="status">Statut</label>
                    <select name="status" class="form-control">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editDataEvangelisation[0]['status_evangelisation_tv_differe']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
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



