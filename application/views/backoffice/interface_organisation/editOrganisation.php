

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateInterfaceOrganisation') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <input type="hidden" name="idInterfaceOrganisationUpDate" value="<?php echo $editInterfaceOrganisation[0]['id_interface_organisation'] ?>">
                <input type="hidden" name="oldImageUpdate" value="<?php echo $editInterfaceOrganisation[0]['file_interface_organisation'] ?>">

                <div class="form-group">
                    <label for="editTitreOrganisation">Titre</label>
                    <input type="text" class="form-control" id="editTitreOrganisation" name="editTitreOrganisation" value="<?php echo $editInterfaceOrganisation[0]['titre_interface_organisation'] ?>">
                </div>
                <?php if(isset($editInterfaceOrganisation[0]['file_interface_organisation'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/organisation/img/'.$editInterfaceOrganisation[0]['file_interface_organisation'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="editImageOrganisation">Modifier l'image</label>
                    <input type="file" class="form-control" id="editImageOrganisation" name="editImageOrganisation">
                </div>

                <div class="form-group">
                    <label for="editParagraph1">Paragraphe 1</label>
                    <textarea type="text" class="form-control" id="editParagraph1" name="editParagraph1" required rows="5" placeholder=""> <?php echo $editInterfaceOrganisation[0]['paragraph1_interface_organisation'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editParagraph2">Paragraphe 2</label>
                    <textarea type="text" class="form-control" id="editParagraph2" name="editParagraph2" required rows="5" placeholder=""> <?php echo $editInterfaceOrganisation[0]['paragraph2_interface_organisation'] ?> </textarea>
                </div>

                <div class="form-group">
                    <label for="editStatus">Statut</label>
                    <select class="form-control" name="editStatus" id="editStatus">
                   <?php foreach ($status as $row_status):  ?>
                        <option <?php if($row_status->code_status == $editInterfaceOrganisation[0]['status_interface_organisation']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                    <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_interface_organisation'))
                    {
                        echo $this->session->flashdata('error_edit_interface_organisation');
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


