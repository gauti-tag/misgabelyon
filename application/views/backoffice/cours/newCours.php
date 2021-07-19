





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

        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addCours') ?>">

            <div class="box-body">

                <div class="form-group">
                    <label for="codeCours">Code cours</label>
                    <input type="text" class="form-control" id="codeCours" name="codeCours" placeholder="Entrer cours svp!">
                </div>

                <div class="form-group">
                    <label for="cours">Nom du cours<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="cours" name="cours" placeholder="Entrer le nom du cours svp!">
                </div>

                <div class="form-group">
                    <label for="matiere">Choix de matière<span style="color: red">*</span></label>
                    <select id="matiere" name="matiere" class="form-control">
                        <?php foreach ($matiere as $row_matiere):  ?>
                            <option value="<?php echo $row_matiere->id_matiere ?>"><?php  echo $row_matiere->nom_matiere ?></option>
                        <?php  endforeach;  ?>
                    </select>
                </div>

                   <div class="form-group">
                    <label for="date_debut">Date de début:</label>
                    <input type="date" class="form-control" id="date_debut" name="date_debut" placeholder="../../..">
                </div>
                <div class="form-group">
                    <label for="date_fin">Date de fin:</label>
                    <input type="date" class="form-control" id="date_fin" name="date_fin" placeholder="../../..">
                </div>
                <div class="form-group">
                    <label for="heures">Nombre d'heure(s):</label>
                    <input type="time" class="form-control" id="heures" name="heures" placeholder="..">
                </div>

                    <?php if ($this->session->flashdata('error_new_cours')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php   echo $this->session->flashdata('error_new_cours');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_cours')): ?>
                     <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                    <?php echo $this->session->flashdata('success_new_cours');?>
                     </div> <?php endif; ?>



            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


