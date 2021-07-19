

 <?php // var_dump($packages); die(); ?>

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
        <?php if ($this->session->flashdata('error_new_student')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_student');?>
            </div> <?php elseif ($this->session->flashdata('success_new_student')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_student');?>
            </div> <?php endif; ?>
        <!-- form start -->
        <form role="form" method="post"  action="<?php echo site_url('backoffice/admin/addStudent') ?>">

            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer votre nom svp!">
                </div>
                <div class="form-group">
                    <label for="prenoms">Prénoms</label>
                    <input type="text" class="form-control" id="prenoms" name="prenoms" placeholder="Entrer votre prénoms svp!">
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Entrer votre Numéro de Telephone svp!">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre email svp!">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrer votre mot de passe svp!">
                </div>
                <div class="form-group">
                    <label for="status">Status du compte</label>
                    <select id="status" class="form-control" name="status">
                        <?php foreach ($status_students as $row_status_student):  ?>
                        <option value="<?php echo $row_status_student->code_status_student; ?>"><?php echo $row_status_student->name_status_student; ?></option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="country">Pays de résidence</label>
                    <select id="country" name="country" class="form-control">

                        <?php foreach ($pays as $row):  ?>
                        <option <?php if($row->alpha2 == "CI"){echo 'selected="selected"';} ?> value="<?= $row->alpha2; ?>"><?= $row->nom_fr_fr; ?></option>
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
