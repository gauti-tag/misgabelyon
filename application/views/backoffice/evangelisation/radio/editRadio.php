









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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateEvangelisationRadio') ?>">

            <input type="hidden" name="idEvangelisationRadioUpDate" value="<?php echo $editEvangelisationRadio[0]['id_evangelisation_radio'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $editEvangelisationRadio[0]['titre_evangelisation_radio'] ?>">
                </div>
                <div class="form-group">
                    <label for="describe">Description</label>
                    <textarea type="text" class="form-control" id="describe" name="describe"> <?php echo $editEvangelisationRadio[0]['description_evangelisation_radio'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="file">Nom du fichier radio</label>
                    <input type="text" class="form-control" value="<?php echo $editEvangelisationRadio[0]['file_evangelisation_radio'] ?>" readonly>
                </div>
            <!--    <div class="form-group">
                    <label for="file">fichier radio</label>
                    <input type="file" class="form-control" id="file" name="file" value="<?php echo $editEvangelisationRadio[0]['file_evangelisation_radio'] ?>">
                </div> -->

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editEvangelisationRadio[0]['status_evangelisation_radio']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_evangelisation_radio'))
                    {
                        echo $this->session->flashdata('error_edit_evangelisation_radio');
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

