

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateInterfaceBienvenue') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <input type="hidden" name="idInterfaceBienvenueUpDate" value="<?php echo $editInterfaceBienvenue[0]['id_interface_bienvenue'] ?>">
                <input type="hidden" name="oldImageUpdate" value="<?php echo $editInterfaceBienvenue[0]['file_interface_bienvenue'] ?>">

                <div class="form-group">
                    <label for="editTitre">Titre</label>
                    <input type="text" class="form-control" id="editTitre" name="editTitre" value="<?php echo $editInterfaceBienvenue[0]['titre_interface_bienvenue'] ?>">
                </div>
                <?php if(isset($editInterfaceBienvenue[0]['file_interface_bienvenue'])): ?>
                <div class="form-group">
                    <img width="120" height="120" src="<?php echo site_url('assets/bienvenue/img/'.$editInterfaceBienvenue[0]['file_interface_bienvenue'])?>" class="img-responsive">
                </div>
                <?php else: ?>
                <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="editImage">Modifier l'image</label>
                    <input type="file" class="form-control" id="editImage" name="editImage">
                </div>

                <div class="form-group">
                    <label for="editTexte1">Paragraphe 1</label>
                    <textarea type="text" class="form-control" id="editTexte1" name="editTexte1" required rows="5" placeholder=""> <?php echo $editInterfaceBienvenue[0]['texte1_interface_bienvenue'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editTexte2">Paragraphe 2</label>
                    <textarea type="text" class="form-control" id="editTexte2" name="editTexte2" required rows="5" placeholder=""> <?php echo $editInterfaceBienvenue[0]['texte2_interface_bienvenue'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editTexte3">Paragraphe 3</label>
                    <textarea type="text" class="form-control" id="editTexte3" name="editTexte3" required rows="5" placeholder=""> <?php echo $editInterfaceBienvenue[0]['texte3_interface_bienvenue'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editTexte4">Paragraphe 4</label>
                    <textarea type="text" class="form-control" id="editTexte4" name="editTexte4" required rows="5" placeholder=""> <?php echo $editInterfaceBienvenue[0]['texte4_interface_bienvenue'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editTexte5">Paragraphe 5</label>
                    <textarea type="text" class="form-control" id="editTexte5" name="editTexte5" required rows="5" placeholder=""> <?php echo $editInterfaceBienvenue[0]['texte5_interface_bienvenue'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editStatus">Statut</label>
                    <select class="form-control" name="editStatus" id="editStatus">
                    <?php foreach ($status as $row_status):  ?>
                        <option <?php if($row_status->code_status == $editInterfaceBienvenue[0]['status_interface_bienvenue']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                    <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_interface_bienvenue'))
                    {
                        echo $this->session->flashdata('error_edit_interface_bienvenue');
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

