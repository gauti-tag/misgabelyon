


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
                    <?php if ($this->session->flashdata('error_get_evangelisation_radio')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_evangelisation_radio');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_evangelisation_radio')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_evangelisation_radio');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Fichier audio</th>
                                <th>Status</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allEvangelisationRadio as $row_radio):?>
                                <tr>
                                    <td><?php echo $row_radio->titre_evangelisation_radio ?></td>
                                    <td><?php echo $row_radio->description_evangelisation_radio ?></td>
                                    <td><?php echo $row_radio->file_evangelisation_radio ?></td>
                                    <td><?php if($row_radio->status_evangelisation_radio == 1){statusSuccess('Publier');}elseif ($row_radio->status_evangelisation_radio == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?php echo $row_radio->created_at_evangelisation_radio ?></td>

                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editEvangelisationRadio/'.$row_radio->id_evangelisation_radio) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delEvangelisationRadio" href="javascript:void(0)" data-id="<?php  echo $row_radio->id_evangelisation_radio ?>" data-text="<?php  echo $this->encryption->encrypt($row_radio->id_evangelisation_radio) ?>">Suprimer</a></td>
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





