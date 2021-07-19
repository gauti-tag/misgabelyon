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
                    <?php if ($this->session->flashdata('error_get_interface_bienvenue')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_interface_bienvenue');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_interface_bienvenue')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_interface_bienvenue');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 5px" class="table table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Paragraphe 1</th>
                                <th>Paragraphe 2</th>
                                <th>Paragraphe 3</th>
                                <th>Paragraphe 4</th>
                                <th>Paragraphe 5</th>
                                <th>Image</th>
                                <th>date de création</th>
                                <th>Statut</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                        <?php  if(!empty($allInterfaceBienvenue)): ?>
                            <tbody>
                            <?php foreach ($allInterfaceBienvenue as $row_bienvenue):?>
                                <tr>
                                    <td> <?php echo $row_bienvenue->titre_interface_bienvenue ?></td>
                                    <td><?php echo $row_bienvenue->texte1_interface_bienvenue ?></td>
                                    <td><?php echo $row_bienvenue->texte2_interface_bienvenue ?></td>
                                    <td><?php echo $row_bienvenue->texte3_interface_bienvenue ?></td>
                                    <td><?php echo $row_bienvenue->texte4_interface_bienvenue ?></td>
                                    <td><?php echo $row_bienvenue->texte5_interface_bienvenue ?></td>
                                    <td><?php echo $row_bienvenue->file_interface_bienvenue ?></td>
                                    <td><?php echo $row_bienvenue->created_at_interface_bienvenue ?></td>
                                    <td><?php if($row_bienvenue->status_interface_bienvenue == 1){statusSuccess('Publier');}elseif ($row_bienvenue->status_interface_bienvenue == 0){statusFailed('sauvegarder');} ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editInterfaceBienvenue/'.$row_bienvenue->id_interface_bienvenue) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delInterfaceBienvenue" href="javascript:void(0)" data-id="<?= $row_bienvenue->id_interface_bienvenue ?>" data-text="<?= $this->encryption->encrypt($row_bienvenue->id_interface_bienvenue) ?>">Suprimer</a></td>
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


