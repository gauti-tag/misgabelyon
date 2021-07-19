
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
                    <?php if ($this->session->flashdata('error_get_evangelisation_tv_live')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_evangelisation_tv_live');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_evangelisation_tv_live')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_evangelisation_tv_live');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 20px;" id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Libellé</th>
                                <th>Lien(s)</th>
                                <th>Commentaire(s)</th>
                                <th>Dates</th>
                                <th>Début</th>
                                <th>heure(s)</th>
                                <th>Statut</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allEvangelisationTvLive as $row_livetv):?>
                                <tr>
                                    <td><?php echo $row_livetv->code_evangelisation_tv_live ?></td>
                                    <td><?php echo $row_livetv->libelle_evangelisation_tv_live ?></td>
                                    <td><?php echo $row_livetv->lien_evangelisation_tv_live ?></td>
                                    <td><?php echo $row_livetv->commentaire_evangelisation_tv_live ?></td>
                                    <td><?php echo $row_livetv->date_debut_evangelisation_tv_live ?></td>
                                    <td><?php echo $row_livetv->date_fin_evangelisation_tv_live ?></td>
                                    <td><?php echo $row_livetv->heure_evangelisation_tv_live ?></td>
                                    <td><?php if($row_livetv->status_evangelisation_tv_live == 1){statusSuccess('Publier');}elseif ($row_livetv->status_evangelisation_tv_live == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editEvangelisationLiveTv/'.$row_livetv->id_evangelisation_tv_live) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn deleteEvangelisationTvLive" href="javascript:void(0)" data-id="<?= $row_livetv->id_evangelisation_tv_live ?>" data-text="<?= $this->encryption->encrypt($row_livetv->id_evangelisation_tv_live) ?>">Suprimer</a></td>
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

