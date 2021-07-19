


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

        <?php if ($this->session->flashdata('error_new_evangelisation_parole')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_evangelisation_parole');?>
            </div> <?php elseif ($this->session->flashdata('success_new_evangelisation_parole')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_evangelisation_parole');?>
            </div> <?php endif; ?>


        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addParole') ?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom auteur</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le code svp!" required>
                </div>
                <div class="form-group">
                    <label for="audio">Fichier audio au format(.mp3)</label>
                    <input type="file" class="form-control" id="audio" name="audio">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" required rows="3" placeholder=""> </textarea>
                </div>
                <div class="form-group">
                    <label for="jour">Le jour</label>
                    <select class="form-control" id="jour" name="jour">
                        <?php foreach ($jours as $row_jour):   ?>
                        <option value="<?php echo $row_jour->id_jour ?>"><?php echo $row_jour->name_jour ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" class="form-control required" name="status">
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

