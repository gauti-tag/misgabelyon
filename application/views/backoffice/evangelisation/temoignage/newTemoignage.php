






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
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addEvangelisationTemoignages') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom du témoignant svp!" required>
                </div>
                <div class="form-group">
                    <label for="prenoms">Prénoms</label>
                    <input type="text" class="form-control" id="prenoms" name="prenoms" placeholder="Entrer le prénoms du témoignage svp!" required>
                </div>
                <div class="form-group">
                    <label for="audio">Audio (format Mp3)</label>
                    <input class="form-control" type="file" name="audio" id="audio" accept=".mp3" required>
                </div>
               <!-- <div class="form-group">
                    <label for="img">Ajouter une image (format gif|jpg|png|jpeg)</label>
                    <input class="form-control" type="file" name="img" id="img">
                </div> -->
                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input type="text" class="form-control" id="profession" name="profession" placeholder="Entrer la profession du témoignant svp!">
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select id="status" class="form-control required" name="status">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?= $row_status->code_status ?>"><?= $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <?php if ($this->session->flashdata('error_new_evangelisation_temoignages')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_evangelisation_temoignages');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_evangelisation_temoignages')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_evangelisation_temoignages');?>
                    </div> <?php endif; ?>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>
