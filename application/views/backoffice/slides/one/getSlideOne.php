

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

                    <?php if ($this->session->flashdata('error_get_slide_one')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php  echo $this->session->flashdata('error_get_slide_one');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_slide_one')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_slide_one');?>
                        </div> <?php endif; ?>


                    <div class="box-header">
                        <h3 class="box-title">Liste des contenus</h3>
                    </div>
                    <div class="box-body">
                        <table  class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Section1</th>
                                <th>Section2</th>
                                <th>Section3</th>
                                <th>Section4</th>
                                <th>Section5</th>
                                <th>Reference</th>
                                <th>Image</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                                <th rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($allSlideOne as $row_slide_one):?>
                                <tr>
                                    <td><?= $row_slide_one->nom_slide_one; ?></td>
                                    <td><?= $row_slide_one->section1_slide_one; ?></td>
                                    <td><?= $row_slide_one->section2_slide_one; ?></td>
                                    <td><?= $row_slide_one->section3_slide_one; ?></td>
                                    <td><?= $row_slide_one->section4_slide_one; ?></td>
                                    <td><?= $row_slide_one->section5_slide_one; ?></td>
                                    <td><?= $row_slide_one->reference_slide_one; ?></td>
                                    <td><?= $row_slide_one->file_slide_one; ?></td>
                                    <td><?php if($row_slide_one->status_slide_one == 1){statusSuccess('Publier');}elseif ($row_slide_one->status_slide_one == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?= $row_slide_one->created_at_slide_one; ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editSlideOne/'.$row_slide_one->id_slide_one) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delSlideOne" href="javascript:void(0)" data-id="<?php echo $row_slide_one->id_slide_one ?>" data-text="<?php echo $this->encryption->encrypt($row_slide_one->id_slide_one) ?>">Suprimer</a></td>
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


