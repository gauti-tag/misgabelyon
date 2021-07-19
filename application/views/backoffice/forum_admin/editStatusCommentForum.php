
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
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/updateStatusComment') ?>">

            <input type="hidden" class="form-control"  name="idUpDateStatusComment" value="<?php echo $editStatusComment[0]['id_comment_forum_admin'] ?>">
            <input type="hidden" class="form-control"  name="idPageComment" value="<?php echo $editStatusComment[0]['id_forum_admin'] ?>">
            <div class="box-body">
                <div class="form-group">
                    <label for="auteur">Auteur</label>
                    <input readonly type="text" class="form-control" id="auteur" name="auteur" value="<?php echo $editStatusComment[0]['pseudo_comment_forum_admin'] ?>">
                </div>
                <div class="form-group">
                    <label for="message">Mesaage</label>
                    <input readonly type="text" class="form-control" id="message" name="message" value="<?php echo $editStatusComment[0]['comment_comment_forum_admin'] ?>">
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editStatusComment[0]['status_comment_forum_admin']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div>


</div>


