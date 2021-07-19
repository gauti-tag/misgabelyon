

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
            <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addUser') ?>">

                <div class="box-body">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter votre nom svp!">
                    </div>
                    <!-- <div class="form-group">
                        <label for="prenoms">Prenoms</label>
                        <input type="text" class="form-control" id="prenoms" name="prenoms" placeholder="Enter votre prénoms svp!">
                    </div>  -->
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Enter votre Numéro de Telephone svp!">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter votre email svp!">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <?php if ($this->session->flashdata('error_new_user')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_new_user');?>
                        </div> <?php elseif ($this->session->flashdata('success_new_user')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_new_user');?>
                        </div> <?php endif; ?>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="reset" class="btn btn-secondary">Annuler</button>
                </div>
            </form>
        </div><!-- /.box -->


     </div>