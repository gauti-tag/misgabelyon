




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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateUser') ?>">

            <input type="hidden" name="idUserUpDate" value="<?php echo $user[0]['id_user'] ?>">

            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $user[0]['name_user'] ?>" placeholder="Entrer votre nom svp!">
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo $user[0]['phone_user'] ?>" placeholder="Entrer votre Numéro de Telephone svp!">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user[0]['email_user'] ?>" placeholder="Entrer votre email svp!">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $user[0]['password_user'] ?>" placeholder="Password">
                </div>



                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_user'))
                    {
                        echo $this->session->flashdata('error_edit_user');
                    }
                    ?>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>


