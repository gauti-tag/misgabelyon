





<div class="content-wrapper">

    <!-- general form elements -->
    <div class="box box-primary" style=" width: 800px; margin: 0 auto">
        <div class="box-header with-border">
            <h3 class="box-title">Ajouter caractéristique(s)</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addBookSpecs') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="articleName">Article<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="articleName" name="articleName">
                    <select type="text" class="form-control" name="articleName" id="articleName">
                        <option></option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="articleName">Caratéristique(s)<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="articleName" name="articleName">
                    <input type="text" class="form-control" id="articleName" name="articleName">
                </div>

                <div class="form-group">
                    <label for="status">status<span style="color: red">*</span></label>
                    <select id="status" class="form-control" name="status">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>

                <?php if ($this->session->flashdata('error_new_book_specs')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_book_specs');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_book_specs')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_book_specs');?>
                    </div> <?php endif; ?>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


