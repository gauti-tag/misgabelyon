
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
                    <?php if ($this->session->flashdata('error_get_comment_forum_echange_status')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_comment_forum_echange_status');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_comment_forum_echange_status')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_comment_forum_echange_status');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Auteur</th>
                                <th>Message</th>
                                <th>Statut</th>
                                <th>Date d'émission</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($comments as $row):?>
                                <tr>
                                    <td style="font-weight: bold"><?php echo $row->pseudo_comment_echange_forum ?></td>
                                    <td><?php echo $row->comment_comment_echange_forum ?></td>
                                    <td><?php if($row->status_comment_echange_forum == 1){statusSuccess('Activer');}elseif ($row->status_comment_echange_forum == 0){statusFailed('Desactiver');} ?></td>
                                    <td><?php echo $row->created_at_comment_echange_forum ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editSatusCommentEchange/'.$row->id_comment_echange_forum) ?>">Editer statut</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delCommentForumEchange" href="javascript:void(0)" data-id="<?php  echo $row->id_comment_echange_forum ?>" data-text="<?php  echo $this->encryption->encrypt($row->id_comment_echange_forum) ?>">Suprimer</a></td>
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

