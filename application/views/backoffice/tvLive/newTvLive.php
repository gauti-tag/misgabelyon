

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
      <!-- /.box-header -->
        <!-- form start -->
        <?php if ($this->session->flashdata('error_new_tv_video_live')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_tv_video_live');?>
            </div> <?php elseif ($this->session->flashdata('success_new_tv_video_live')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_tv_video_live');?>
            </div> <?php endif; ?>

        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/addTvLive') ?>">

            <div class="box-body">
                <div class="form-group">
                    <label for="code">Code vidéo</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Entrer le code svp!" required>
                </div>
                <div class="form-group">
                    <label for="libelle">Libellé du cour vidéo</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrer le nom svp!" required>
                </div>
                <div class="form-group">
                    <label for="lien">Lien vidéo</label>
                    <input type="text" class="form-control" id="lien" name="lien" required placeholder="Exemple:https://www.youtube.com/watch?v=ofnf7dZS7ck">
                </div>
                <div class="form-group">
                    <label for="dateD">Date de début</label>
                    <input type="date" class="form-control" id="dateD" name="dateD" required placeholder="../../..">
                </div>
                <div class="form-group">
                    <label for="dateF">Date de fin</label>
                    <input type="date" class="form-control" id="dateF" name="dateF" required placeholder="../../..">
                </div>
                <div class="form-group">
                    <label for="heure">Nombre d'heures</label>
                    <input type="time" class="form-control" id="heure" name="heure" required placeholder="..">
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire</label>
                    <textarea type="text" class="form-control" id="comment" name="comment" required rows="10" placeholder=""> </textarea>
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
