
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateVerset2') ?>">

            <div class="box-body">
                <input type="hidden" name="idEvangelisationVerset2" value="<?php echo $editVerset[0]['id_evangelisation_verset2'] ?>">
                <div class="form-group">
                    <label for="verset2">verset</label>
                    <input type="text" class="form-control" id="verset2" name="verset2" value="<?php echo $editVerset[0]['verset_evangelisation_verset2'] ?>">
                </div>

                <div class="form-group">
                    <label for="reference2">Reference</label>
                    <textarea type="text" class="form-control" id="reference2" name="reference2"><?php echo $editVerset[0]['reference_evangelisation_verset2'] ?></textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editVerset[0]['status_evangelisation_verset2']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
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
