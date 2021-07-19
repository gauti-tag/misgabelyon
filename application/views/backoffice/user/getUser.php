
<div class="content-wrapper">
<!-- Main content -->
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

                    <?php if ($this->session->flashdata('error_get_user')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_user');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_user')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_user');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Mot de passe</th>
                                <th>Date de création</th>
                                <th rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($allUser as $row_user):?>
                            <tr>
                                <td><?= $row_user->name_user; ?></td>
                                <td><?= $row_user->phone_user; ?></td>
                                <td><?= $row_user->email_user; ?></td>
                                <td><?= $row_user->password_user; ?></td>
                                <td><?= $row_user->date_creation_user; ?></td>
                                <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editUser/'.$row_user->id_user) ?>">Editer</a></td>
                                <td style="text-align: center"><a class="btn btn-adn delUser" href="javascript:void(0)" data-id="<?php echo $row_user->id_user ?>" data-text="<?php echo $this->encryption->encrypt($row_user->id_user) ?>">Suprimer</a></td>
                             <!--   <td style="text-align: center"><a class="btn btn-adn delUser" href="javascript:void(0)">Suprimer</a></td> --><?php //echo site_url('backoffice/admin/delUser'); ?>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>

                                   </tfoot>
                               </table>
                           </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->


</div>

