

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
                    <?php if ($this->session->flashdata('error_get_banner_condition')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_banner_condition');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_banner_condition')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_banner_condition');?>
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
                            <?php foreach ($allBannerCondition as $row):?>
                                <tr>
                                    <td><img width="150" src="<?php echo site_url('assets/banniere/condition/'.$row->file_banner_condition)  ?>"></td>
                                    <td><?php if($row->status_banner_condition == 1){statusSuccess('Publier');}elseif ($row->status_banner_condition == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?php echo $row->created_at_banner_condition ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editBannerCondition/'.$row->id_banner_condition) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delBannerCondition" href="javascript:void(0)" data-id="<?php  echo $row->id_banner_condition ?>" data-text="<?php  echo $this->encryption->encrypt($row->id_banner_condition) ?>">Suprimer</a></td>
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




