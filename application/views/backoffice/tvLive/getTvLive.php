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
                    <?php if ($this->session->flashdata('error_new_tv_video_live')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_new_tv_video_live');?>
                        </div> <?php elseif ($this->session->flashdata('success_new_tv_video_live')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_new_tv_video_live');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 10px;" id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>code</th>
                                <th>Libellé</th>
                                <th>lien(s)</th>
                                <th>commentaire(s)</th>
                                <th>dates</th>
                                <th>début</th>
                                <th>heure(s)</th>
                                <th>Statut</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allTvLive as $row_livetv):?>
                                <tr>
                                    <td> <?php echo $row_livetv->code_tv ?></td>
                                    <td> <?php echo $row_livetv->libelle_tv ?></td>
                                    <td><?php echo $row_livetv->lien_tv ?></td>
                                    <td><?php echo $row_livetv->commentaire_tv ?></td>
                                    <td><?php echo $row_livetv->date_creation_tv ?></td>
                                    <td><?php echo $row_livetv->date_debut_tv ?></td>
                                    <td><?php echo $row_livetv->nb_heure_tv ?></td>
                                    <td><?php if($row_livetv->status_tv == 1){statusSuccess('Publier');}elseif ($row_livetv->status_tv == 0){statusFailed('sauvegarder');} ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editLiveTv/'.$row_livetv->id_tv) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delTvLive" href="javascript:void(0)" data-id="<?= $row_livetv->id_tv ?>" data-text="<?= $this->encryption->encrypt($row_livetv->id_tv) ?>">Suprimer</a></td>
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

