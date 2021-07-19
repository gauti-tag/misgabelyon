

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

        <?php if ($this->session->flashdata('error_interface_intuition')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_interface_intuition');?>
            </div> <?php elseif ($this->session->flashdata('success_interface_intuition')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_interface_intuition');?>
            </div> <?php endif; ?>
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addIntuition') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Entrer le titre svp!" required>
                </div>
                <div class="form-group">
                    <label for="paragraph1">Paragraphe 1</label>
                    <textarea type="text" class="form-control" id="paragraph1" name="paragraph1" rows="2" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="paragraph2">Paragraphe 2</label>
                    <textarea type="text" class="form-control" id="paragraph2" name="paragraph2" rows="2"> </textarea>
                </div>
                <div class="form-group">
                    <label for="paragraph3">Paragraphe 3</label>
                    <textarea type="text" class="form-control" id="paragraph3" name="paragraph3" rows="2"> </textarea>
                </div>
                <div class="form-group">
                    <label for="paragraph4">Paragraphe 4</label>
                    <textarea type="text" class="form-control" id="paragraph4" name="paragraph4" rows="2"> </textarea>
                </div>
                <div class="form-group">
                    <label for="paragraph5">Paragraphe 5</label>
                    <textarea type="text" class="form-control" id="paragraph5" name="paragraph5" rows="2"> </textarea>
                </div>
                <div class="form-group">
                    <label for="image">Ajouter une image au format .jpg|.jpeg</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
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
