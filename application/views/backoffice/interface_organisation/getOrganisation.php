

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
                    <?php if ($this->session->flashdata('error_get_interface_organisation')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_interface_organisation');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_interface_organisation')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_interface_organisation');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
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
                            <?php  if(!empty($allInterfaceOrganisation)): ?>
                            <tbody>
                            <?php foreach ($allInterfaceOrganisation as $row_organisation):?>
                                <tr>
                                    <td> <?php echo $row_organisation->titre_interface_organisation ?></td>
                                    <td><?php echo $row_organisation->paragraph1_interface_organisation ?></td>
                                    <td><?php echo $row_organisation->paragraph1_interface_organisation ?></td>
                                    <td><?php echo $row_organisation->file_interface_organisation ?></td>
                                    <td><?php echo $row_organisation->created_at_interface_organisation ?></td>
                                    <td><?php if($row_organisation->status_interface_organisation == 1){statusSuccess('Publier');}elseif ($row_organisation->status_interface_organisation == 0){statusFailed('sauvegarder');} ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editInterfaceOrganisation/'.$row_organisation->id_interface_organisation) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delInterfaceOrganisation" href="javascript:void(0)" data-id="<?= $row_organisation->id_interface_organisation ?>" data-text="<?= $this->encryption->encrypt($row_organisation->id_interface_organisation) ?>">Suprimer</a></td>
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



