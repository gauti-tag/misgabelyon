
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateCours') ?>">

            <input type="hidden" name="idCoursUpDate" value="<?php echo $cours[0]['id_cours'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="code">Code Cours</label>
                    <input type="text" class="form-control" id="code" name="code" value="<?php echo $cours[0]['code_cours'] ?>" placeholder="Entrer votre nom svp!">
                </div>
                <div class="form-group">
                    <label for="nom">Nom du Cours</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $cours[0]['nom_cours'] ?>" placeholder="Entrer votre prénoms svp!">
                </div>
               <!-- <div class="form-group">
                    <label for="matiere">Matière</label>
                    <input type="text" class="form-control" id="matiere" name="matiere" value="<?php //echo $cours[0]['matiere_cours'] ?>" placeholder="Entrer votre Numéro de Telephone svp!">
                </div>-->
                <div class="form-group">
                    <label for="matiere">Matiere</label>
                    <select type="text" class="form-control" id="matiere" name="matiere"<?php // echo $cours[0]['matiere_cours'] ?>>
                        <?php foreach ($allMatiere as $row):  ?>
                            <option <?php if($row->id_matiere == $cours[0]['matiere_cours']){echo 'selected="selected"';}?>><?php echo $row->nom_matiere;  ?></option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dateD">date début</label>
                    <input type="text" class="form-control" id="dateD" name="dateD" value="<?php echo $cours[0]['date_debut'] ?>" placeholder="Entrer votre email svp!">
                </div>
                <div class="form-group">
                    <label for="dateF">date fin</label>
                    <input type="text" class="form-control" id="dateF" name="dateF" value="<?php echo $cours[0]['date_fin'] ?>" placeholder="Entrer votre email svp!">
                </div>
                <div class="form-group">
                    <label for="heure">nombre d'heure</label>
                    <input type="text" class="form-control" id="heure" name="heure" value="<?php echo $cours[0]['nombre_heurs'] ?>" placeholder="Entrer votre email svp!">
                </div>


                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_cours'))
                    {
                        echo $this->session->flashdata('error_edit_cours');
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

