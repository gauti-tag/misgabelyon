
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
                    <?php if ($this->session->flashdata('error_get_evangelisation_verset2')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_evangelisation_verset2');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_evangelisation_verset2')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_evangelisation_verset2');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 20px;" id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Verset</th>
                                <th>Reference</th>
                                <th>Status</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allVerset as $row_verset):?>
                                <tr>
                                    <td><?php echo $row_verset->verset_evangelisation_verset2 ?></td>
                                    <td><?php echo $row_verset->reference_evangelisation_verset2 ?></td>
                                    <td><?php if($row_verset->status_evangelisation_verset2 == 1){statusSuccess('Publier');}elseif ($row_verset->status_evangelisation_verset2 == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_verset->created_at_evangelisation_verset2 ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editVerset2/'.$row_verset->id_evangelisation_verset2) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn deleteEvangelisationVerset2" href="javascript:void(0)" data-id="<?=$row_verset->id_evangelisation_verset2 ?>" data-text="<?= $this->encryption->encrypt($row_verset->id_evangelisation_verset2) ?>">Suprimer</a></td>
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



