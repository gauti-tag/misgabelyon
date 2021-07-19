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
                    <?php if ($this->session->flashdata('error_get_echange_ecoute')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_echange_ecoute');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_echange_ecoute')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_echange_ecoute');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 5px" class="table table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Paragraphe 1</th>
                                <th>Paragraphe 2</th>
                                <th>Image</th>
                                <th>date de création</th>
                                <th>Statut</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <?php  if(!empty($allEchangeEcoute)): ?>
                            <tbody>
                            <?php foreach ($allEchangeEcoute as $row):?>
                                <tr>
                                    <td> <?php echo $row->titre_echange_ecoute ?></td>
                                    <td><?php echo $row->paragraph1_echange_ecoute ?></td>
                                    <td><?php echo $row->paragraph2_echange_ecoute ?></td>
                                    <td><?php echo $row->file_echange_ecoute ?></td>
                                    <td><?php echo $row->created_at_echange_ecoute ?></td>
                                    <td><?php if($row->status_echange_ecoute == 1){statusSuccess('Publier');}elseif ($row->status_echange_ecoute == 0){statusFailed('sauvegarder');} ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editEchangeEcouteContent/'.$row->id_echange_ecoute) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delEchangeEcoute" href="javascript:void(0)" data-id="<?= $row->id_echange_ecoute ?>" data-text="<?= $this->encryption->encrypt($row->id_echange_ecoute) ?>">Suprimer</a></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <td colspan="10" style="text-align: center;">Aucune donnée disponible</td>
                            <?php endif; ?>
                            </tbody>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->






</div>


