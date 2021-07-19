


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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateSlideTwo') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <input type="hidden" name="idSlideTwo" value="<?php echo $editSlideTwo[0]['id_slide_two'] ?>">
                <input type="hidden" name="oldImageSlide2" value="<?php echo $editSlideTwo[0]['file_slide_two'] ?>">

                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $editSlideTwo[0]['nom_slide_two'] ?>">
                </div>
                <?php if($editSlideTwo[0]['file_slide_two']): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/slide/img2/'.$editSlideTwo[0]['file_slide_two'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="imageSlideTwo">Modifier l'image</label>
                    <input type="file" class="form-control" id="imageSlideTwo" name="imageSlideTwo">
                </div>

                <div class="form-group">
                    <label for="section1">Section 1</label>
                    <input type="text" class="form-control" id="section1" name="section1" value="<?php echo $editSlideTwo[0]['section1_slide_two'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="section2">Section 2</label>
                    <input type="text" class="form-control" id="section2" name="section2" value="<?php echo $editSlideTwo[0]['section2_slide_two'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="section3">Section 3</label>
                    <input type="text" class="form-control" id="section3" name="section3" value="<?php echo $editSlideTwo[0]['section3_slide_two'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="section4">Section 4</label>
                    <input type="text" class="form-control" id="section4" name="section4" value="<?php echo $editSlideTwo[0]['section4_slide_two'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="section5">Section 5</label>
                    <input type="text" class="form-control" id="section5" name="section5" value="<?php echo $editSlideTwo[0]['section5_slide_two'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="reference">reference</label>
                    <input type="text" class="form-control" id="reference" name="reference" value="<?php echo $editSlideTwo[0]['reference_slide_two'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editSlideTwo[0]['status_slide_two']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_slide_two'))
                    {
                        echo $this->session->flashdata('error_edit_slide_two');
                    }
                    ?>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset"  class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->



</div>



