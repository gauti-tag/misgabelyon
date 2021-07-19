

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

        <?php if ($this->session->flashdata('error_new_loisirs_annonce')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_loisirs_annonce');?>
            </div> <?php elseif ($this->session->flashdata('success_new_loisirs_annonce')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_loisirs_annonce');?>
            </div> <?php endif; ?>

        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addLoisirsAnnonce') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <div class="form-group">
                    <label for="theme">Thème</label>
                    <input type="text" class="form-control" id="theme" name="theme" placeholder="Entrer le thème svp!" required>
                </div>
                <div class="form-group">
                    <label for="image">Ajouter une image (600 x 600)</label>
                    <input type="file" id="image" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="domain">Domaine</label>
                    <input type="text" class="form-control" id="domain" name="domain" placeholder="Entrer le domaine d'activité svp!" required>
                </div>
                <div class="form-group">
                    <label for="structure">Structure</label>
                    <input type="text" class="form-control" id="structure" name="structure" placeholder="Entrer le nom de la structure svp!" required>
                </div>
                <div class="form-group">
                    <label for="describe">Description</label>
                    <textarea name="describe" id="describe" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="day">Jour</label>
                    <input type="number" class="form-control" id="day" name="day" required>
                </div>
                <div class="form-group">
                    <label for="month">mois </label>
                 <!--   <input type="month" class="form-control" id="month" name="month" required> -->
                    <select id="month" name="month" class="form-control">
                        <?php foreach ($month as $row): ?>
                            <option value="<?= $row->id ?>"><?= $row->month ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select id="status" class="form-control" name="status">
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
