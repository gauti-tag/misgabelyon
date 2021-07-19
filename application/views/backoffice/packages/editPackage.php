




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

        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDatePackage') ?>">

            <input type="hidden" name="idPackageUpDate" value="<?php echo $package[0]['id_package'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="code">Code du Package</label>
                    <input type="text" class="form-control" id="code" name="code" value="<?php echo $package[0]['code_package'] ?>" placeholder="Entrer votre nom svp!">
                </div>
                <div class="form-group">
                    <label for="nom">Nom du Package</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $package[0]['nom_package'] ?>" placeholder="Entrer votre prénoms svp!">
                </div>
             <!--   <div class="form-group">
                    <label for="matiere">Matiere</label>
                    <input type="text" class="form-control" id="matiere" name="matiere" value="<?php //echo $package[0]['matiere_package'] ?>" placeholder="Entrer votre Numéro de Telephone svp!">
                </div> -->
                <div class="form-group">
                    <label for="matiere">Matiere</label>
                    <select type="text" class="form-control" id="matiere" name="matiere"<?php //echo $package[0]['matiere_package'] ?>>
                        <?php foreach ($allMatiere as $row):  ?>
                        <option <?php if($row->id_matiere == $package[0]['matiere_package']){echo 'selected="selected"';}?>><?php echo $row->nom_matiere;  ?></option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tarif">Tarif</label>
                    <input type="text" class="form-control" id="tarif" name="tarif" value="<?php echo $package[0]['tarif_package'] ?>" placeholder="Entrer votre email svp!">
                </div>


                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_package'))
                    {
                        echo $this->session->flashdata('error_edit_package');
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

