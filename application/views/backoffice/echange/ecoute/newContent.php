
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

        <?php if ($this->session->flashdata('error_interface_echange_ecoute')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_interface_echange_ecoute');?>
            </div> <?php elseif ($this->session->flashdata('success_interface_echange_ecoute')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_interface_echange_ecoute');?>
            </div> <?php endif; ?>
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addEchangeEcouteContent') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrer le titre svp!" required>
                </div>
                <div class="form-group">
                    <label for="texte1">Paragraphe 1</label>
                    <textarea type="text" class="form-control" id="texte1" name="texte1" rows="3" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="texte2">Paragraphe 2</label>
                    <textarea type="text" class="form-control" id="texte2" name="texte2" rows="3"> </textarea>
                </div>
                <div class="form-group">
                    <label for="img">Ajouter une image au format 600x670 pixels</label>
                    <input type="file" class="form-control" id="img" name="img" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" class="form-control required" name="status">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?= $row_status->code_status ?>"><?= $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>