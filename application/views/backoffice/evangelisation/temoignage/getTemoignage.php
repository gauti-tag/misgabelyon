

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

                    <?php if ($this->session->flashdata('error_get_evangelisation_temoignage')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_evangelisation_temoignage');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_evangelisation_temoignage')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_evangelisation_temoignage');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 10px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénoms</th>
                                <th>Profession</th>
                                <th>Audio</th>
                                <th>Image</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                                <th rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($allEvangelisationTemoignages as $row):?>
                                <tr>
                                    <td><?= $row->nom_evangelisation_temoignages; ?></td>
                                    <td><?= $row->prenoms_evangelisation_temoignages; ?></td>
                                    <td><?= $row->profession_evangelisation_temoignages; ?></td>
                                    <td><?= $row->temoignage_evangelisation_temoignages; ?></td>
                                    <td><?= $row->file_evangelisation_temoignages; ?></td>
                                    <td><?php if($row->status_evangelisation_temoignages == 1){statusSuccess('Publier');}elseif ($row->status_evangelisation_temoignages == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?= $row->created_at_evangelisation_temoignages; ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editEvangelisationTemoignages/'.$row->id_evangelisation_temoignages) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delEvangelisationTemoignages" href="javascript:void(0)" data-id="<?php echo $row->id_evangelisation_temoignages ?>" data-text="<?php echo $this->encryption->encrypt($row->id_evangelisation_temoignages) ?>">Suprimer</a></td>
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


