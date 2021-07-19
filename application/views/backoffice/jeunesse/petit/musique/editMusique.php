
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDatePetitPropheteMusique') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idMusiquePetit" value="<?php echo $editMusiquePetit[0]['id_jeunesse_musique_petit'] ?>" >
            <input type="hidden" name="oldMusiquePetit" value="<?php echo $editMusiquePetit[0]['file_jeunesse_musique_petit'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $editMusiquePetit[0]['title_jeunesse_musique_petit']?>">
                </div>
                <div class="form-group">
                    <label for="priere">fichier audio</label>
                    <?php if($editMusiquePetit[0]['file_jeunesse_musique_petit']): ?>
                    <div>
                    <audio controls src="<?php echo site_url('assets/jeunesse/musique/petit/'.$editMusiquePetit[0]['file_jeunesse_musique_petit']) ?>"></audio>
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
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editMusiquePetit[0]['status_jeunesse_musique_petit']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
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


