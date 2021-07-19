
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
                    <?php if ($this->session->flashdata('error_get_evangelisation_tv')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_evangelisation_tv');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_evangelisation_tv')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_evangelisation_tv');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Libellé Vidéo</th>
                                <th>lien vidéo</th>
                                <th>commentaire</th>
                                <th>Statut</th>
                                <th>date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allEvangelisationTv as $row_evangelisation_tv):?>
                                <tr>
                                    <td> <?php echo $row_evangelisation_tv->libelle_evangelisation_tv ?></td>
                                    <td><?php echo $row_evangelisation_tv->lien_evangelisation_tv ?></td>
                                    <td><?php echo $row_evangelisation_tv->commentaire_evangelisation_tv ?></td>
                                    <td><?php if($row_evangelisation_tv->status_evangelisation_tv == 1){statusSuccess('Publier');}elseif ($row_evangelisation_tv->status_evangelisation_tv == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?php echo $row_evangelisation_tv->created_at_evangelisation_tv ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editEvangelisationTv/'.$row_evangelisation_tv->id_evangelisation_tv) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delEvangelisationTv" href="javascript:void(0)" data-id="<?= $row_evangelisation_tv->id_evangelisation_tv ?>" data-text="<?= $this->encryption->encrypt($row_evangelisation_tv->id_evangelisation_tv) ?>">Suprimer</a></td>
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


