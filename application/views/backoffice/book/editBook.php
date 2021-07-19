
<div class="content-wrapper">

    <section class="content-header" style="margin-bottom: 15px">
        <h1>
            <?php echo $titre; ?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
            <?php foreach ($menu as $key => $data): ?>
                <li> <?php echo $data; ?></li>
            <?php endforeach; ?>
        </ol>
    </section>

    <!-- general form elements -->

    <div class="box box-primary" style=" width: 800px; margin: 0 auto">
        <div class="box-header with-border">
            <h3 class="box-title">Modifier un livre numérique</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/upDateBook') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idBookUpDate" value="<?php echo $editBook[0]['id_numeric_book'] ?>">

            <div class="box-body">
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input readonly type="text" class="form-control" id="titre" name="titre" value="<?php echo $editBook[0]['titre_numeric_book'] ?>">
                </div>
                <div class="form-group">
                    <label for="describe">Description</label>
                    <textarea readonly type="text" class="form-control" id="describe" name="describe"> <?php echo $editBook[0]['description_numeric_book'] ?> </textarea>
                </div>
                <?php if($editBook[0]['file_numeric_book']): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/book/image/'.$editBook[0]['file_numeric_book'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="audio">Ajouter un enregistrement audio<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="audio" name="audio" required>
                </div>

                <div class="form-group">
                    <label for="status">Statut</label>
                    <select readonly="" name="status" class="form-control">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editBook[0]['status_numeric_book']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_book'))
                    {
                        echo $this->session->flashdata('error_edit_book');
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


