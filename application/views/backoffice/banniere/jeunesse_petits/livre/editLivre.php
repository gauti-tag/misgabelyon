
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateBannerJeunessePetitsLivres') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idBannerJeunessePetitsLivres" value="<?php echo $editBannerJeunessePetitLivre[0]['id_banner_jeunesse_petits_livre'] ?>" >
            <input type="hidden" name="oldBannerJeunessePetitsLivres" value="<?php echo $editBannerJeunessePetitLivre[0]['file_banner_jeunesse_petits_livre'] ?>" >

            <div class="box-body">
                <?php if(($editBannerJeunessePetitLivre[0]['file_banner_jeunesse_petits_livre'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/banniere/jeunesse/petit/'.$editBannerJeunessePetitLivre[0]['file_banner_jeunesse_petits_livre'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="img"> Modifier l'image </label>
                    <input type="file" class="form-control" id="img" name="img" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editBannerJeunessePetitLivre[0]['status_banner_jeunesse_petits_livre']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
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

