
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDatePrierePartage') ?>">

            <input type="hidden" name="idPrierePartageUpDate" value="<?php echo $editPrierePartage[0]['id_priere_partage'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="theme">Thème</label>
                    <input type="text" class="form-control" id="theme" name="theme" value="<?php echo $editPrierePartage[0]['theme_priere_partage']?>">
                </div>
                <div class="form-group">
                    <label for="ref">Référence</label>
                    <input type="text" class="form-control" id="ref" name="ref" value="<?php echo $editPrierePartage[0]['ref_priere_partage']?>">
                </div>

                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea type="text" class="form-control" id="contenu" name="contenu"><?php echo $editPrierePartage[0]['content_priere_partage']?></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editPrierePartage[0]['status_priere_partage']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_exercice_priere'))
                    {
                        echo $this->session->flashdata('error_edit_exercice_priere');
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

