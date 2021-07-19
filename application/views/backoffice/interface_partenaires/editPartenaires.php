

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateInterfacePartenaires') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <input type="hidden" name="idInterfacePartenairesUpDate" value="<?php echo $editInterfacePartenaires[0]['id_interface_partenaires'] ?>">
                <input type="hidden" name="oldImageUpdate" value="<?php echo $editInterfacePartenaires[0]['file_interface_partenaires'] ?>">

                <div class="form-group">
                    <label for="editNomPartenaires">Nom</label>
                    <input type="text" class="form-control" id="editNomPartenaires" name="editNomPartenaires" value="<?php echo $editInterfacePartenaires[0]['nom_interface_partenaires'] ?>">
                </div>
                <?php if(($editInterfacePartenaires[0]['file_interface_partenaires'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/partenaires/img/'.$editInterfacePartenaires[0]['file_interface_partenaires'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="editImagePartenaires">Modifier l'image</label>
                    <input type="file" class="form-control" id="editImagePartenaires" name="editImagePartenaires">
                </div>

                <div class="form-group">
                    <label for="editStatusPartenaires">Status</label>
                    <select class="form-control" id="editStatusPartenaires" name="editStatusPartenaires">
                    <?php foreach ($status as $row_status):  ?>
                        <option <?php if($row_status->code_status == $editInterfacePartenaires[0]['status_interface_partenaires']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                    <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_interface_partenaires'))
                    {
                        echo $this->session->flashdata('error_edit_interface_partenaires');
                    }
                    ?>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset"  class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->



</div>



