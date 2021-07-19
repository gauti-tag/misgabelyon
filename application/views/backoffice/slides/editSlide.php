


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
        <div class="box-header with-border">
            <h3 class="box-title">Modifier du contenu</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/updateSlide') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <input type="hidden" name="idSlideUpDate" value="<?php echo $editSlide[0]['id'] ?>">

                <div class="form-group">
                    <label for="slide">Type de slide</label>
                    <input type="text" class="form-control" id="slide" name="slide" value="<?php if($editSlide[0]['type'] == 1){echo 'Slide 1';}elseif ($editSlide[0]['type'] == 2){echo 'Slide 2';}elseif ($editSlide[0]['type'] == 3){echo 'Slide 3';} ?>" readonly>
                </div>
                <?php if($editSlide[0]['file']): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/slide/'.$editSlide[0]['file'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="texte1">Texte 1</label>
                    <input type="text" class="form-control" id="texte1" name="texte1" value="<?php echo $editSlide[0]['text1'] ?>" readonly >
                </div>
                <div class="form-group">
                    <label for="texte2">Texte 2</label>
                    <input type="text" class="form-control" id="texte2" name="texte2" value="<?php echo $editSlide[0]['text2'] ?>" readonly >
                </div>
                <div class="form-group">
                    <label for="reference">reference</label>
                    <input type="text" class="form-control" id="reference" name="reference" value="<?php echo $editSlide[0]['reference'] ?>" readonly >
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select class="form-control" name="status" id="status">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editSlide[0]['status']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset"  class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->



</div>



