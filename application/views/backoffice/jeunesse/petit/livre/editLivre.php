
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDatePetitPropheteLivre') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idPetitPropheteLivreUpDate" value="<?php echo $editPetitPropheteLivre[0]['id_jeunesse_livre_petit'] ?>" >
            <input type="hidden" name="oldPetitPropheteLivreUpDate" value="<?php echo $editPetitPropheteLivre[0]['file_jeunesse_livre_petit'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $editPetitPropheteLivre[0]['titre_jeunesse_livre_petit'] ?>">
                </div>
                <?php if(($editPetitPropheteLivre[0]['file_jeunesse_livre_petit'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/jeunesse/livre/petit/'.$editPetitPropheteLivre[0]['file_jeunesse_livre_petit'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="image"> Modifier l'image au format 510x512 pixels </label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editPetitPropheteLivre[0]['status_jeunesse_livre_petit']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>

                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_carousel'))
                    {
                        echo $this->session->flashdata('error_edit_carousel');
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

