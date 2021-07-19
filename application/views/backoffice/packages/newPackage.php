


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
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addPackage') ?>">

            <div class="box-body">

                <div class="form-group">
                    <label for="code">Code du Package</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Entrer le code svp!">
                </div>
                <div class="form-group">
                    <label for="nom">Nom du Package <span style="color: red">*</span> </label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom du package svp!">
                </div>
                <div class="form-group">
                    <label for="matiere_package">Ajouter une matière <span style="color: red">*</span> </label>
                    <select id="matiere_package" name="matiere_package" class="form-control">
                        <?php //$matiereOptions = array();  ?>
                        <?php foreach ($matiere as $row_matiere) :  ?>
                        <option value="<?php  echo $row_matiere->id_matiere?>"><?php  echo $row_matiere->nom_matiere ?></option>
                        <?php  endforeach;  ?>
                    </select>
                </div>
               <div class="form-group">
                    <label for="tarif"> Tarif du package <span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="tarif" name="tarif" placeholder="Entrer le tarif svp!">
                </div>

                <?php if ($this->session->flashdata('error_new_package')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_package');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_package')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_package');?>
                    </div> <?php endif; ?>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>
