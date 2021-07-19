






<div class="content-wrapper">

    <!-- general form elements -->
    <div class="box box-primary" style=" width: 800px; margin: 0 auto">
        <div class="box-header with-border">
            <h3 class="box-title">Modifier un enregistrement</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateAudio') ?>">

            <input type="hidden" name="idAudioUpDate" value="<?php echo $editDataAudio[0]['id_audio'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $editDataAudio[0]['titre_audio'] ?>">
                </div>
                <div class="form-group">
                    <label for="describe">Description</label>
                    <textarea type="text" class="form-control" id="describe" name="describe"> <?php echo $editDataAudio[0]['description_audio'] ?> </textarea>
                </div>
             <!--   <div class="form-group">
                    <label for="file">fichier audio</label>
                    <input type="file" class="form-control" id="file" name="file" value="<?php //echo $editDataAudio[0]['file_audio'] ?>">
                </div>    -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?php echo $editDataAudio[0]['status_audio'] ?>">
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_audio'))
                    {
                        echo $this->session->flashdata('error_edit_audio');
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

