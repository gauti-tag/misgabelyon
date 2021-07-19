

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
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">

                    <?php if ($this->session->flashdata('error_get_tvdiffere')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_tvdiffere');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_tvdiffere')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_tvdiffere');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Titre</th>
                                <th>Lien</th>
                                <th>Statut</th>
                                <th>Date</th>
                                <th rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($allTvDiffere as $row_tv_differe):?>
                                <tr>
                                    <td><?= $row_tv_differe->nom_tv_differe; ?></td>
                                    <td><?= $row_tv_differe->titre_tv_differe; ?></td>
                                    <td><?= $row_tv_differe->lien_tv_differe; ?></td>
                                    <td><?php if($row_tv_differe->status == 1){statusSuccess('Publier');}elseif ($row_tv_differe->status == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?= $row_tv_differe->created_at_tv_differe; ?></td>
                                     <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editTvDiffere/'.$row_tv_differe->id_tv_differe) ?>">Editer</a></td>
                                     <td style="text-align: center"><a class="btn btn-adn delTvDiffere" href="javascript:void(0)" data-id="<?php echo $row_tv_differe->id_tv_differe ?>" data-text="<?php echo $this->encryption->encrypt($row_tv_differe->id_tv_differe) ?>">Suprimer</a></td>
                                    <!-- <td style="text-align: center"><a class="btn btn-adn delUser" href="<?php // site_url('backoffice/admin/delUser'); ?>">Suprimer</a></td>-->
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

