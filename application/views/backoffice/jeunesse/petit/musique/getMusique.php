
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
                    <?php if ($this->session->flashdata('error_get_jeunesse_musique_petit')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_jeunesse_musique_petit');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_jeunesse_musique_petit')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_jeunesse_musique_petit');?>
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
                            <?php foreach ($allMusiquePetit as $row):?>
                                <tr>
                                    <td> <?php echo $row->title_jeunesse_musique_petit ?></td>
                                    <td><?php echo $row->file_jeunesse_musique_petit ?></td>
                                    <td><?php if($row->status_jeunesse_musique_petit == 1){statusSuccess('Publier');}elseif ($row->status_jeunesse_musique_petit == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row->created_at_jeunesse_musique_petit ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editPetitPropheteMusique/'.$row->id_jeunesse_musique_petit  ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delMusiquePetit" href="javascript:void(0)" data-id="<?php  echo $row->id_jeunesse_musique_petit   ?>" data-text="<?php  echo $this->encryption->encrypt($row->id_jeunesse_musique_petit  ) ?>">Suprimer</a></td>
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

