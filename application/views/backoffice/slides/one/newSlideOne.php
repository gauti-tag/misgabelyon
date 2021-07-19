





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
        <?php if ($this->session->flashdata('error_slide_one')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_slide_one');?>
            </div> <?php elseif ($this->session->flashdata('success_slide_one')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_slide_one');?>
            </div> <?php endif; ?>
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addSlideOne') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nom du slide</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrer un nom svp!" required>
                </div>
                <div class="form-group">
                    <label for="section1">Section 1</label>
                    <input type="text" class="form-control" id="section1" name="section1" required>
                </div>
                <div class="form-group">
                    <label for="section2">Section 2</label>
                   <input type="text" class="form-control" id="section2" name="section2" required>
                </div>
                <div class="form-group">
                    <label for="section3">Section 3</label>
                   <input type="text" class="form-control" id="section3" name="section3">
                </div>
                <div class="form-group">
                    <label for="section4">Section 4</label>
                   <input type="text" class="form-control" id="section4" name="section4">
                </div>
                <div class="form-group">
                    <label for="section5">Section 5</label>
                   <input type="text" class="form-control" id="section5" name="section5">
                </div>
                <div class="form-group">
                    <label for="reference">La référence</label>
                    <input type="text" class="form-control" id="reference" name="reference" required>
                </div>
                <div class="form-group">
                    <label for="image">Ajouter une image au format 864x816 pixels</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select id="status" class="form-control required" name="status">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?= $row_status->code_status ?>"><?= $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>