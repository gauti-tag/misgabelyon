







<div class="content-wrapper">

    <!-- Content Header (Page header) -->
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
      <!--  <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>-->
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addAccueilEcouteAccompagnement') ?>">

            <div class="box-body">

                <div class="form-group">
                    <label for="fullName">Non et prenoms<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Entrer votre nom et prenoms svp!">
                </div>

                <div class="form-group">
                    <label for="email">Email<span style="color: red">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrer l'email svp!">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrer le numero de téléphone!">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" class="form-control" id="message" name="message" rows="4">

                    </textarea>
                </div>


                <?php if ($this->session->flashdata('error_new_membre_accueil')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_membre_accueil');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_membre_accueil')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_membre_accueil');?>
                    </div> <?php endif; ?>



            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


