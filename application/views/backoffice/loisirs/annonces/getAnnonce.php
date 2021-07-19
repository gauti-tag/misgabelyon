
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
                    <?php if ($this->session->flashdata('error_get_loisirs_annonce')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_loisirs_annonce');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_loisirs_annonce')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_loisirs_annonce');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>thème</th>
                                <th>Domaine</th>
                                <th>structure</th>
                                <th>Description</th>
                                <th>Jour</th>
                                <th>Mois</th>
                                <th>Statut</th>
                                <th>Date</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allLoisirsAnnonce as $row):?>
                                <tr>
                                    <td> <?php echo $row->theme_loisirs_annonce ?></td>
                                    <td><?php echo $row->domaine_loisirs_annonce ?></td>
                                    <td><?php echo $row->structure_loisirs_annonce ?></td>
                                    <td><?php echo $row->description_loisirs_annonce ?></td>
                                    <td><?php echo $row->jour_loisirs_annonce ?></td>
                                    <td><?php foreach ($month as $row_month){if($row_month->id == $row->mois_loisirs_annonce){echo $row_month->month;}}  ?></td>
                                    <td><?php if($row->status_loisirs_annonce == 1){statusSuccess('Publier');}elseif ($row->status_loisirs_annonce == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row->created_at_loisirs_annonce ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editLoisirsAnnonce/'.$row->id_loisirs_annonce); ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delLoisirsAnnonce" href="javascript:void(0)" data-id="<?php  echo $row->id_loisirs_annonce;?>" data-text="<?php  echo $this->encryption->encrypt($row->id_loisirs_annonce); ?>">Suprimer</a></td>
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

