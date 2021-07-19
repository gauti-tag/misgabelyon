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
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/upDateAccueilEcouteAccompagnement') ?>">

            <div class="box-body">
                <input type="hidden" name="idVolunteerUpDate" value="<?php echo $volunteer[0]['id_volunteer'] ?>" >
                <div class="form-group">
                    <label for="fullName">Non et prenoms</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $volunteer[0]['name_volunteer'] ?>" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $volunteer[0]['email_volunteer'] ?>" >
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $volunteer[0]['phone_volunteer'] ?>" >
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" class="form-control" id="message" name="message" rows="4">
                                <?php echo $volunteer[0]['message_volunteer'] ?>
                    </textarea>
                </div>


                <?php if ($this->session->flashdata('error_edit_membre_accueil')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_edit_membre_accueil');?>
                    </div> <?php elseif ($this->session->flashdata('success_edit_membre_accueil')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_edit_membre_accueil');?>
                    </div> <?php endif; ?>



            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>

