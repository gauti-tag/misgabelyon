


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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateStudent') ?>">

            <input type="hidden" name="idStudentUpDate" value="<?php echo $student[0]['inscription_id'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $student[0]['name'] ?>" placeholder="Entrer votre nom svp!">
                </div>
                <div class="form-group">
                    <label for="prenoms">Prénoms</label>
                    <input type="text" class="form-control" id="prenoms" name="prenoms" value="<?php echo $student[0]['prenoms'] ?>" placeholder="Entrer votre prénoms svp!">
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo $student[0]['mobile'] ?>" placeholder="Entrer votre Numéro de Telephone svp!">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $student[0]['email'] ?>" placeholder="Entrer votre email svp!">
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select name="status" class="form-control">
                        <?php foreach ($status_student as $row_status):  ?>
                        <?php   ?>
                            <option <?php if($row_status->code_status_student == $student[0]['status']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status_student ?>"> <?= $row_status->name_status_student ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
             <!--   <div class="form-group">
                    <label for="pays">Pays de résidence</label>
                    <input type="text" class="form-control" name="pays" id="pays" value="<?php //echo $student[0]['pays'] ?>" placeholder="Entrer votre pays svp!">
                </div> -->
                <div class="form-group">
                    <label for="pays">Pays de résidence</label>
                    <select type="text" class="form-control" name="pays" id="pays" <?php // echo $student[0]['pays'] ?>>
                        <?php foreach ($pays as $row): ?>
                        <option <?php if($row->alpha2 == $student[0]['pays']){ echo 'selected="selected"'; }?> value="<?php echo $row->alpha2 ?>"><?php echo $row->nom_fr_fr; ?></option>
                        <?php endforeach;  ?>
                    </select>
                </div>

                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_student'))
                    {
                        echo $this->session->flashdata('error_edit_student');
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

