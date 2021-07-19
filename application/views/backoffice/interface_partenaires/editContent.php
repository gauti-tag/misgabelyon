

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateContentPartenaires') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <input type="hidden" name="idContentPartenairesUpDate" value="<?php echo $editContentPartenaires[0]['id_content_partenaires'] ?>">
                <input type="hidden" name="oldImageUpdate" value="<?php echo $editContentPartenaires[0]['file_content_partenaires'] ?>">

                <div class="form-group">
                    <label for="editTitreContentPartenaires">Titre</label>
                    <input type="text" class="form-control" id="editTitreContentPartenaires" name="editTitreContentPartenaires" value="<?php echo $editContentPartenaires[0]['titre_content_partenaires'] ?>">
                </div>
                <?php if(isset($editContentPartenaires[0]['file_content_partenaires'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/partenaires/content/img/'.$editContentPartenaires[0]['file_content_partenaires'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="editImageContentPartenaires">Modifier l'image</label>
                    <input type="file" class="form-control" id="editImageContentPartenaires" name="editImageContentPartenaires">
                </div>

                <div class="form-group">
                    <label for="editParagraph1">Paragraphe 1</label>
                    <textarea type="text" class="form-control" id="editParagraph1" name="editParagraph1" required rows="5" placeholder=""> <?php echo $editContentPartenaires[0]['paragraph1_content_partenaires'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editParagraph2">Paragraphe 2</label>
                    <textarea type="text" class="form-control" id="editParagraph2" name="editParagraph2" required rows="5" placeholder=""> <?php echo $editContentPartenaires[0]['paragraph2_content_partenaires'] ?> </textarea>
                </div>

                <div class="form-group">
                    <label for="editStatus">Status</label>
                    <select class="form-control" name="editStatus" id="editStatus">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editContentPartenaires[0]['status_content_partenaires']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
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


