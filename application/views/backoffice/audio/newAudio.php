


<div class="content-wrapper">

    <!-- general form elements -->
    <div class="box box-primary" style=" width: 800px; margin: 0 auto">
        <div class="box-header with-border">
            <h3 class="box-title">Ajouter un enregistrement audio</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addAudio') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="title">Titre<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Entrer le titre de l'enregistrement audio svp!">
                </div>

                <div class="form-group">
                    <label for="describe">Description<span style="color: red">*</span></label>
                    <textarea type="text" class="form-control" id="describe" name="describe" rows="4">  </textarea>
                </div>
                <div class="form-group">
                    <label for="audio">Ajouter un fichier audio (.mp3)<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="audio" name="audio">
                </div>
                <div class="form-group">
                    <label for="status">status<span style="color: red">*</span></label>
                    <select id="status" class="form-control" name="status">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>

                    <?php if ($this->session->flashdata('error_new_audio')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_audio');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_audio')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_audio');?>
                    </div> <?php endif; ?>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>

