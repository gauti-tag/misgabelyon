


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
                    <?php if ($this->session->flashdata('error_get_echange_forum')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_echange_forum');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_echange_forum')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_echange_forum');?>
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
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allEchangeForum as $row_echange_forum):?>
                                <tr>
                                    <td><?php echo $row_echange_forum->titre_echange_forum ?></td>
                                    <td><?php echo $row_echange_forum->auteur_echange_forum ?></td>
                                    <td><?php echo $row_echange_forum->theme_echange_forum ?></td>
                                    <td><?php if($row_echange_forum->status_echange_forum == 1){statusSuccess('Publier');}elseif ($row_echange_forum->status_echange_forum == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_echange_forum->created_at_echange_forum ?></td>
                                    <td style="text-align: center"><a class="btn btn-default" href="<?php echo site_url('backoffice/admin/viewCommentForumEchange/'.$row_echange_forum->id_echange_forum) ?>">Commenataire(s)</a></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editEchangeForum/'.$row_echange_forum->id_echange_forum) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delEchangeForum" href="javascript:void(0)" data-id="<?php  echo $row_echange_forum->id_echange_forum ?>" data-text="<?php  echo $this->encryption->encrypt($row_echange_forum->id_echange_forum) ?>">Suprimer</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->





</div>


