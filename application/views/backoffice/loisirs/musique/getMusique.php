
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
                    <?php if ($this->session->flashdata('error_get_loisirs_musique')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_loisirs_musique');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_loisirs_musique')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_loisirs_musique');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Nom du fichier</th>
                                <th>Statut</th>
                                <th>Date</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allLoisirsMusique as $row):?>
                                <tr>
                                    <td> <?php echo $row->title_loisirs_musique ?></td>
                                    <td><?php echo $row->file_loisirs_musique ?></td>
                                    <td><?php if($row->status_loisirs_musique == 1){statusSuccess('Publier');}elseif ($row->status_loisirs_musique == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row->created_at_loisirs_musique ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editLoisirsMusique/'.$row->id_loisirs_musique); ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delLoisirsMusique" href="javascript:void(0)" data-id="<?php  echo $row->id_loisirs_musique;?>" data-text="<?php  echo $this->encryption->encrypt($row->id_loisirs_musique); ?>">Suprimer</a></td>
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

