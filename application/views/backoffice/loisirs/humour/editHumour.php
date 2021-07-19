
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateLoisirsHumour') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idLoisirsHumour" value="<?php echo $editLoisirsHumour[0]['id_loisirs_humour'] ?>" >
            <input type="hidden" name="oldLoisirsHumour" value="<?php echo $editLoisirsHumour[0]['image_loisirs_humour'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="theme">Thème</label>
                    <input type="text" class="form-control" id="theme" name="theme" value="<?php echo $editLoisirsHumour[0]['theme_loisirs_humour']?>">
                </div>
                <div class="form-group">
                    <?php if(($editLoisirsHumour[0]['image_loisirs_humour'])): ?>
                        <div class="form-group">
                            <img width="120" height="120" src="<?php echo site_url('assets/loisirs/humour/'.$editLoisirsHumour[0]['image_loisirs_humour'])?>" class="img-responsive">
                        </div>
                    <?php else: ?>
                        <div>Aucune image disponible</div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="image">Modifier le fichier image</label>
                    <input type="file" class="form-control" id="image" name="image"">
                </div>
                <div class="form-group">
                    <label for="describe">Modifier la description</label>
                    <textarea class="form-control" id="describe" name="describe" rows="3"><?php echo $editLoisirsHumour[0]['description_loisirs_humour']?></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editLoisirsHumour[0]['status_loisirs_humour']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


