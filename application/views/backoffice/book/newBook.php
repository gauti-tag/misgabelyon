



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
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addBook') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="titleBook">Titre du livre<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="titleBook" name="titleBook" placeholder="Entrer le titre du livre svp!">
                </div>

                <div class="form-group">
                    <label for="describeBook">Courte description du livre <span style="color: red">*</span></label>
                    <textarea type="text" class="form-control" id="describeBook" name="describeBook" rows="4">  </textarea>
                </div>
                <div class="form-group">
                    <label for="fichier">Ajouter l'image de type (gif|jpg|png|jpeg) au format (173 x 292)<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="fichier" name="fichier">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" class="form-control required" name="status">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?= $row_status->code_status ?>"><?= $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php if ($this->session->flashdata('error_new_book')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_book');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_book')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_book');?>
                    </div> <?php endif; ?>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


