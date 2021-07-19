
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateLoisirsMusique') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idLoisirsMusique" value="<?php echo $editLoisirsMusique[0]['id_loisirs_musique'] ?>" >
            <input type="hidden" name="oldLoisirsMusique" value="<?php echo $editLoisirsMusique[0]['file_loisirs_musique'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $editLoisirsMusique[0]['title_loisirs_musique']?>">
                </div>
                <div class="form-group">
                    <label for="#">fichier audio</label>
                    <?php if($editLoisirsMusique[0]['file_loisirs_musique']): ?>
                        <div>
                            <audio controls src="<?php echo site_url('assets/loisirs/musique/'.$editLoisirsMusique[0]['file_loisirs_musique']) ?>"></audio>
                        </div>
                    <?php  else: ?>
                        <div>Aucun fichier audio disponible</div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="audio">Modifier le fichier audio</label>
                    <input type="file" class="form-control" id="audio" name="audio">
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editLoisirsMusique[0]['status_loisirs_musique']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_exercice_priere'))
                    {
                        echo $this->session->flashdata('error_edit_exercice_priere');
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


