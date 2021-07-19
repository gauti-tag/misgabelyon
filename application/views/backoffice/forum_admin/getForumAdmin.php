
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
    <section class="content">
        <div class="row">

            <div class="col-xs-12">

                <div class="box">
                    <?php if ($this->session->flashdata('error_get_forumAdmin')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_forumAdmin');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_forumAdmin')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_forumAdmin');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Thème</th>
                                <th>Statut</th>
                                <th>Date d'inscription</th>
                                <!--<th>Profil</th> -->
                                <th style="text-align: right" rowspan="3">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allForumAdmin as $row_forum_admin):?>
                                <tr>
                                    <td><?php echo $row_forum_admin->titre_forum_admin ?></td>
                                    <td><?php echo $row_forum_admin->auteur_forum_admin ?></td>
                                    <td><?php echo $row_forum_admin->theme_forum_admin ?></td>
                                    <td><?php if($row_forum_admin->status_forum_admin == 1){statusSuccess('Publier');}elseif ($row_forum_admin->status_forum_admin == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_forum_admin->created_at_forum_admin ?></td>
                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-default" href="<?php echo site_url('backoffice/admin/viewCommentForumAdmin/'.$row_forum_admin->id_forum_admin) ?>">Commenataire(s)</a></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editForumAdmin/'.$row_forum_admin->id_forum_admin) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delForumAdmin" href="javascript:void(0)" data-id="<?php  echo $row_forum_admin->id_forum_admin ?>" data-text="<?php  echo $this->encryption->encrypt($row_forum_admin->id_forum_admin) ?>">Suprimer</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->



    <!-- <table class="table table-bordered" id="manager">
          <thead>
             <tr>
                  <th>nom</th>
                  <th>prenoms</th>
                  <th>age</th>
                  <th>date</th>
             </tr>
          </thead>
      </table> -->


</div>

