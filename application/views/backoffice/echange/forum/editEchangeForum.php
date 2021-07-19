
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
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/upDateEchangeForum') ?>">
            <input type="hidden" class="form-control"  name="idUpDateForumAdmin" value="<?php echo $editEchangeForum[0]['id_echange_forum'] ?>">
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $editEchangeForum[0]['titre_echange_forum'] ?>">
                </div>
                <div class="form-group">
                    <label for="author">Auteur</label>
                    <input type="text" class="form-control" id="author" name="author" value="<?php echo $editEchangeForum[0]['auteur_echange_forum'] ?>">
                </div>
                <div class="form-group">
                    <label for="theme">Thème</label>
                    <textarea rows="8" name="theme" id="theme" class="form-control" > <?php echo $editEchangeForum[0]['theme_echange_forum'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editEchangeForum[0]['status_echange_forum']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <?php if ($this->session->flashdata('error_edit_echange_forum')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_edit_echange_forum');?>
                    </div> <?php elseif ($this->session->flashdata('success_edit_echange_forum')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_edit_echange_forum');?>
                    </div> <?php endif; ?>


            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


