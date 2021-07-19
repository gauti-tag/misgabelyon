

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/addEvangelisationTvLive') ?>">

            <div class="box-body">
                <div class="form-group">
                    <label for="code">Code vidéo</label>
                    <input type="text" class="form-control" id="code" name="codeEvan" placeholder="Entrer le code svp!" required>
                </div>
                <div class="form-group">
                    <label for="libelle">Libellé du cour vidéo</label>
                    <input type="text" class="form-control" id="libelle" name="libelleEvan" placeholder="Entrer le nom svp!" required>
                </div>
                <div class="form-group">
                    <label for="lien">Lien vidéo</label>
                    <input type="text" class="form-control" id="lien" name="lienEvan" required placeholder="">
                </div>
                <div class="form-group">
                    <label for="dateD">Date de début</label>
                    <input type="date" class="form-control" id="dateD" name="dateDEvan" required>
                </div>
                <div class="form-group">
                    <label for="dateF">Date de fin</label>
                    <input type="date" class="form-control" id="dateF" name="dateFEvan" required>
                </div>
                <div class="form-group">
                    <label for="heure">Nombre d'heures</label>
                    <input type="time" class="form-control" id="heure" name="heureEvan" required>
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire</label>
                    <textarea type="text" class="form-control" id="comment" name="commentEvan" required rows="10" placeholder=""> </textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" class="form-control required" name="status">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?= $row_status->code_status ?>"><?= $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <?php if ($this->session->flashdata('error_new_evangelisationTvLive')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_evangelisationTvLive');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_evangelisationTvLive')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_evangelisationTvLive');?>
                    </div> <?php endif; ?>


            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>

