
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
                    <?php if ($this->session->flashdata('error_get_comment_forum_status')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_comment_forum_status');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_comment_forum_status')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_comment_forum_status');?>
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
                                    <td style="font-weight: bold"><?php echo $row->pseudo_comment_forum_admin ?></td>
                                    <td><?php echo $row->comment_comment_forum_admin ?></td>
                                    <td><?php if($row->status_comment_forum_admin == 1){statusSuccess('Activer');}elseif ($row->status_comment_forum_admin == 0){statusFailed('Desactiver');} ?></td>
                                    <td><?php echo $row->created_at_comment_forum_admin ?></td>
                                    <!--<td style="text-align: center"><a class="btn btn-primary" href="<?php // echo site_url('backoffice/admin/editSatusComment/'.$row->id_comment_forum_admin) ?>">Editer statut</a></td>-->
                                    <td style="text-align: center"><?php if($row->status_comment_forum_admin == 1):?><a class="btn btn-danger update-status-comment" style="width: 85px" data-status="<?php  echo $row->status_comment_forum_admin ?>" data-text="<?php  echo $this->encryption->encrypt($row->id_comment_forum_admin) ?>" href="javascript:void(0)">Desactiver</a><?php else: ?><a class="btn btn-success update-status-comment" style="width: 85px" data-status="<?php  echo $row->status_comment_forum_admin ?>" data-text="<?php  echo $this->encryption->encrypt($row->id_comment_forum_admin) ?>" href="javascript:void(0)">Activer</a><?php endif; ?></td>
                                    <td style="text-align: center"><a class="btn btn-adn delCommentForumAdmin" href="javascript:void(0)" data-id="<?php  echo $row->id_comment_forum_admin ?>" data-text="<?php  echo $this->encryption->encrypt($row->id_comment_forum_admin) ?>">Suprimer</a></td>
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

