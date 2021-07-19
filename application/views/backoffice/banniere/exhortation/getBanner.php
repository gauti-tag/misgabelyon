

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
                    <?php if ($this->session->flashdata('error_get_banner_exhortation')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_banner_exhortation');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_banner_exhortation')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_banner_exhortation');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allBannerExhortation as $row_banner_exhortation):?>
                                <tr>
                                    <td><img width="150" src="<?php echo site_url('assets/banniere/exhortation/'.$row_banner_exhortation->file_banner_exhortation)  ?>"></td>
                                    <td><?php if($row_banner_exhortation->status_banner_exhortation == 1){statusSuccess('Publier');}elseif ($row_banner_exhortation->status_banner_exhortation == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?php echo $row_banner_exhortation->created_at_banner_exhortation ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editBannerExhortation/'.$row_banner_exhortation->id_banner_exhortation) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delBannerExhortation" href="javascript:void(0)" data-id="<?php  echo $row_banner_exhortation->id_banner_exhortation ?>" data-text="<?php  echo $this->encryption->encrypt($row_banner_exhortation->id_banner_exhortation) ?>">Suprimer</a></td>
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



