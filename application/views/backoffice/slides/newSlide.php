
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
        <?php if ($this->session->flashdata('error_new_slide')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_slide');?>
            </div> <?php elseif ($this->session->flashdata('success_new_slide')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_slide');?>
            </div> <?php endif; ?>
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addSlide') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <div class="form-group">
                    <label for="slide">Type de slide</label>
                     <select name="slide" id="slide" class="form-control">
                         <option value="1">Slide 1</option>
                         <option value="2">Slide 2</option>
                         <option value="3">Slide 3</option>
                     </select>
                </div>
                <div class="form-group date-slide">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="texte1">Texte 1</label>
                    <input type="text" class="form-control" id="texte1" name="texte1" required>
                </div>
                <div class="form-group">
                    <label for="texte2">Texte 2</label>
                    <input type="text" class="form-control" id="texte2" name="texte2">
                </div>
                <div class="form-group">
                    <label for="reference">La référence</label>
                    <input type="text" class="form-control" id="reference" name="reference" required>
                </div>
                <div class="form-group">
                    <label for="image">Ajouter une image au format 864x816 pixels</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>


                <div class="form-group">
                    <label for="status">Statut</label>
                    <select id="status" class="form-control required" name="status">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?= $row_status->code_status ?>"><?= $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>