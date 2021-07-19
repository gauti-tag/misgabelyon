





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

        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addProgram') ?>">

            <div class="box-body">

                <div class="form-group">
                    <label for="year" >Année<span style="color: red">*</span></label>
                    <input type="number" required class="form-control" id="year" name="year" placeholder="Entrer l'année svp">
                </div>

                <div class="form-group">
                    <label for="month">Mois<span style="color: red">*</span></label>
                    <select class="form-control" id="month" name="month">
                        <?php foreach ($month as $row):  ?>
                        <option  value="<?php echo $row->id; ?>"><?php echo $row->month; ?></option>
                        <?php endforeach;  ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="theme">Thème<span style="color: red">*</span></label>
                    <input type="text" required class="form-control" id="theme" name="theme" placeholder="Veillez entrer le thème svp!">
                </div>
                <div class="form-group">
                    <label for="comment">Commentaires</label>
                    <textarea id="comment" class="form-control"  name="comment" rows="3"></textarea>
                </div>

                <?php if ($this->session->flashdata('error_new_program')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_program');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_program')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_program');?>
                    </div> <?php endif; ?>



            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


