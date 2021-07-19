


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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateSlideOne') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <input type="hidden" name="idSlideOneUpDate" value="<?php echo $editSlideOne[0]['id_slide_one'] ?>">
                <input type="hidden" name="oldImageSlideOneUpdate" value="<?php echo $editSlideOne[0]['file_slide_one'] ?>">

                <div class="form-group">
                    <label for="editName">Nom</label>
                    <input type="text" class="form-control" id="editName" name="editName" value="<?php echo $editSlideOne[0]['nom_slide_one'] ?>">
                </div>
                <?php if($editSlideOne[0]['file_slide_one']): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/slide/img/'.$editSlideOne[0]['file_slide_one'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="editImageSlide">Modifier l'image</label>
                    <input type="file" class="form-control" id="editImageSlide" name="editImageSlide">
                </div>

                <div class="form-group">
                    <label for="editSection1">Section 1</label>
                    <input type="text" class="form-control" id="editSection1" name="editSection1" value="<?php echo $editSlideOne[0]['section1_slide_one'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="editSection2">Section 2</label>
                    <input type="text" class="form-control" id="editSection2" name="editSection2" value="<?php echo $editSlideOne[0]['section2_slide_one'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="editSection3">Section 3</label>
                    <input type="text" class="form-control" id="editSection3" name="editSection3" value="<?php echo $editSlideOne[0]['section3_slide_one'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="editSection4">Section 4</label>
                    <input type="text" class="form-control" id="editSection4" name="editSection4" value="<?php echo $editSlideOne[0]['section4_slide_one'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="editSection5">Section 5</label>
                    <input type="text" class="form-control" id="editSection5" name="editSection5" value="<?php echo $editSlideOne[0]['section5_slide_one'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="editReference">reference</label>
                    <input type="text" class="form-control" id="editReference" name="editReference" value="<?php echo $editSlideOne[0]['reference_slide_one'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="editStatus">Status</label>
                    <select class="form-control" name="editStatus" id="editStatus">
                        <?php foreach ($status as $row_status):  ?>
                            <option <?php if($row_status->code_status == $editSlideOne[0]['status_slide_one']){echo 'selected="selected"';}  ?> value="<?= $row_status->code_status ?>"> <?= $row_status->nom_status ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_slide_one'))
                    {
                        echo $this->session->flashdata('error_edit_slide_one');
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



