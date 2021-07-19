
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/updateLoisirsAnnonce') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idLoisirsAnnonce" value="<?php echo $editLoisirsAnnonce[0]['id_loisirs_annonce'] ?>" >
            <input type="hidden" name="oldLoisirsAnnonce" value="<?php echo $editLoisirsAnnonce[0]['image_loisirs_annonce'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="theme">Thème</label>
                    <input type="text" class="form-control" id="theme" name="theme" value="<?php echo $editLoisirsAnnonce[0]['theme_loisirs_annonce']?>">
                </div>
                <div class="form-group">
                    <?php if(($editLoisirsAnnonce[0]['image_loisirs_annonce'])): ?>
                        <div class="form-group">
                            <img width="120" height="120" src="<?php echo site_url('assets/loisirs/annonce/'.$editLoisirsAnnonce[0]['image_loisirs_annonce'])?>" class="img-responsive">
                        </div>
                    <?php else: ?>
                        <div>Aucune image disponible</div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="image">Modifier le fichier image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="domain">Domaine</label>
                    <input type="text" class="form-control" id="domain" name="domain" value="<?php echo $editLoisirsAnnonce[0]['domaine_loisirs_annonce']?>">
                </div>
                <div class="form-group">
                    <label for="structure">Structure</label>
                    <input type="text" class="form-control" id="structure" name="structure" value="<?php echo $editLoisirsAnnonce[0]['structure_loisirs_annonce']?>">
                </div>
                <div class="form-group">
                    <label for="describe">Modifier la description</label>
                    <textarea class="form-control" id="describe" name="describe" rows="3"><?php echo $editLoisirsAnnonce[0]['description_loisirs_annonce']?></textarea>
                </div>
                <div class="form-group">
                    <label for="day">Jour</label>
                    <input type="number" class="form-control" id="day" name="day" value="<?php echo $editLoisirsAnnonce[0]['jour_loisirs_annonce']?>">
                </div>
                <div class="form-group">
                    <label for="month">Mois</label>
                    <select class="form-control" id="month" name="month">
                        <?php foreach ($month as $row): ?>
                            <option <?php if($row->id == $editLoisirsAnnonce[0]['mois_loisirs_annonce']){ echo 'selected="selected"';} ?> value="<?php echo $row->id;?>"><?php echo $row->month; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editLoisirsAnnonce[0]['status_loisirs_annonce']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
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


