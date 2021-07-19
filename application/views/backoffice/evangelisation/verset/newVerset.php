




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

        <?php if ($this->session->flashdata('error_new_evangelisation_verset')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_evangelisation_verset');?>
            </div> <?php elseif ($this->session->flashdata('success_new_evangelisation_verset')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_evangelisation_verset');?>
            </div> <?php endif; ?>


        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addVerset') ?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="verset">Verset</label>
                    <input type="text" class="form-control" id="verset" name="verset" placeholder="Entrer un verset svp!" required>
                </div>
                <div class="form-group">
                    <label for="reference">Reference</label>
                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Entrer la reference svp!" required>
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
