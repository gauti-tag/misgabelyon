

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateEchangeEcouteContent') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <input type="hidden" name="idEchangeEcouteUpDate" value="<?php echo $editEchangeEcoute[0]['id_echange_ecoute'] ?>">
                <input type="hidden" name="oldImageUpdate" value="<?php echo $editEchangeEcoute[0]['file_echange_ecoute'] ?>">

                <div class="form-group">
                    <label for="editTitre">Titre</label>
                    <input type="text" class="form-control" id="editTitre" name="editTitre" value="<?php echo $editEchangeEcoute[0]['titre_echange_ecoute'] ?>">
                </div>
                <?php if(isset($editEchangeEcoute[0]['file_echange_ecoute'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/echange/ecoute/'.$editEchangeEcoute[0]['file_echange_ecoute'])?>" class="img-responsive">
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
                    <textarea type="text" class="form-control" id="editTexte1" name="editTexte1" required rows="5" placeholder=""> <?php echo $editEchangeEcoute[0]['paragraph1_echange_ecoute'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editTexte2">Paragraphe 2</label>
                    <textarea type="text" class="form-control" id="editTexte2" name="editTexte2" required rows="5" placeholder=""> <?php echo $editEchangeEcoute[0]['paragraph2_echange_ecoute'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="editStatus">Status</label>
                    <select class="form-control" name="editStatus" id="editStatus">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editEchangeEcoute[0]['status_echange_ecoute']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset"  class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->



</div>

