

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateLiveTv') ?>">

            <div class="box-body">
                <input type="hidden" name="idTvLiveUpDate" value="<?php echo $Tv_Live[0]['id_tv'] ?>">
                <div class="form-group">
                    <label for="code">Code vidéo</label>
                    <input type="text" class="form-control" id="code" name="code" value="<?php echo $Tv_Live[0]['code_tv'] ?>">
                </div>
                <div class="form-group">
                    <label for="libelle">Libellé vidéo</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" value="<?php echo $Tv_Live[0]['libelle_tv'] ?>" placeholder="Enter votre nom svp!" required>
                </div>
                <div class="form-group">
                    <label for="lien">Lien vidéo</label>
                    <input type="text" class="form-control" id="lien" name="lien" value="<?php echo $Tv_Live[0]['lien_tv'] ?>" required placeholder="Exemple:https://www.youtube.com/watch?v=ofnf7dZS7ck">
                </div>
                <div class="form-group">
                    <label for="dateD">Date de début</label>
                    <input type="text" class="form-control" id="dateD" name="dateD" value="<?php echo $Tv_Live[0]['date_debut_tv'] ?>">
                </div>
                <div class="form-group">
                    <label for="dateF">Date de fin</label>
                    <input type="text" class="form-control" id="dateF" name="dateF" value="<?php echo $Tv_Live[0]['date_fin_tv'] ?>">
                </div>
                <div class="form-group">
                    <label for="heure">Nombre d'heures</label>
                    <input type="text" class="form-control" id="heure" name="heure" value="<?php echo $Tv_Live[0]['nb_heure_tv'] ?>">
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire</label>
                    <textarea type="text" class="form-control" id="comment" name="comment" required rows="10" placeholder=""> <?php echo $Tv_Live[0]['commentaire_tv'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                 <!--   <input type="text" class="form-control" id="status" name="status" value="<?php //echo $Tv_Live[0]['status_tv'] ?>"> -->
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $Tv_Live[0]['status_tv']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_new_tv_video_live'))
                    {
                        echo $this->session->flashdata('error_new_tv_video_live');
                    }
                    ?>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->

</div>
