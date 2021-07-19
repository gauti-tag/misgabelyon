




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

        <?php if ($this->session->flashdata('error_new_evangelisation_verset2')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_evangelisation_verset2');?>
            </div> <?php elseif ($this->session->flashdata('success_new_evangelisation_verset2')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_evangelisation_verset2');?>
            </div> <?php endif; ?>


        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addVerset2') ?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="verset2">Verset</label>
                    <input type="text" class="form-control" id="verset2" name="verset2" placeholder="Entrer un verset svp!" required>
                </div>
                <div class="form-group">
                    <label for="reference2">Reference</label>
                    <input type="text" class="form-control" id="reference2" name="reference2" placeholder="Entrer la reference svp!" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
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


