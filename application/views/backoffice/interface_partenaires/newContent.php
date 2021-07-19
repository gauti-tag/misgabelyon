

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

        <?php if ($this->session->flashdata('error_interface_content_partenaires')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_interface_content_partenaires');?>
            </div> <?php elseif ($this->session->flashdata('success_interface_content_partenaires')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_interface_content_partenaires');?>
            </div> <?php endif; ?>
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addContentPartenaires') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <div class="form-group">
                    <label for="titreContentPartenaires">Titre</label>
                    <input type="text" class="form-control" id="titreContentPartenaires" name="titreContentPartenaires" placeholder="Entrer le titre svp!" required>
                </div>
                <div class="form-group">
                    <label for="paragraph1">Paragraphe 1</label>
                    <textarea type="text" class="form-control" id="paragraph1" name="paragraph1" rows="4" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="paragraph2">Paragraphe 2</label>
                    <textarea type="text" class="form-control" id="paragraph2" name="paragraph2" rows="4"> </textarea>
                </div>
                <div class="form-group">
                    <label for="imgContentPartenaires">Ajouter une image au format 550x400 pixels</label>
                    <input type="file" class="form-control" id="imgContentPartenaires" name="imgContentPartenaires">
                </div>
                <div class="form-group">
                    <label for="statusContentPartenaires">Status</label>
                    <select id="statusContentPartenaires" class="form-control required" name="statusContentPartenaires">
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
