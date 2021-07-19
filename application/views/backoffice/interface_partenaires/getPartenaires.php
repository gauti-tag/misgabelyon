



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
                    <?php if ($this->session->flashdata('error_get_interface_partenaires')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_interface_partenaires');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_interface_partenaires')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_interface_partenaires');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Nom du partenaire</th>
                                <th>Image</th>
                                <th>date de création</th>
                                <th>Statut</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <?php  if(!empty($allInterfacePartenaires)): ?>
                            <tbody>
                            <?php foreach ($allInterfacePartenaires as $row_partenaires):?>
                                <tr>
                                    <td> <?php echo $row_partenaires->nom_interface_partenaires ?></td>
                                    <td><?php echo $row_partenaires->file_interface_partenaires ?></td>
                                    <td><?php echo $row_partenaires->created_at_interface_partenaires ?></td>
                                    <td><?php if($row_partenaires->status_interface_partenaires == 1){statusSuccess('Publier');}elseif ($row_partenaires->status_interface_partenaires == 0){statusFailed('sauvegarder');} // echo $row_partenaires->status_interface_partenaires ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editInterfacePartenaires/'.$row_partenaires->id_interface_partenaires) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delInterfacePartenaires" href="javascript:void(0)" data-id="<?= $row_partenaires->id_interface_partenaires ?>" data-text="<?= $this->encryption->encrypt($row_partenaires->id_interface_partenaires) ?>">Suprimer</a></td>
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



