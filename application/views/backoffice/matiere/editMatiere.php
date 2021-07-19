
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
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/upDateMatiere') ?>">
            <input type="hidden" class="form-control"  name="idUpDateMatiere" value="<?php echo $editDataMatiere[0]['id_matiere'] ?>">
            <div class="box-body">
                <div class="form-group">
                    <label for="code">Code matière</label>
                    <input type="text" class="form-control" id="code" name="code" value="<?php echo $editDataMatiere[0]['code_matiere'] ?>">
                </div>
                <div class="form-group">
                    <label for="matiere">Nom de matière  </label>
                    <input type="text" class="form-control" id="matiere" name="matiere" value="<?php echo $editDataMatiere[0]['nom_matiere'] ?>">
                </div>
                <!--   <div class="form-group">
                    <label for="package">Choix du package</label>
                    <select id="package" name="package" class="form-control">
                      <?php //foreach ($package as $row_package) :  ?>
                        <option value=""><?php // echo $row_package->nom_package ?></option>
                        <?php//  endforeach;  ?>
                    </select>
                </div> -->
                <?php if ($this->session->flashdata('error_edit_matiere')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_edit_matiere');?>
                    </div> <?php elseif ($this->session->flashdata('success_edit_matiere')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_edit_matiere');?>
                    </div> <?php endif; ?>


            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


