


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
                    <?php if ($this->session->flashdata('error_get_evangelisation_parole')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_evangelisation_parole');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_evangelisation_parole')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_evangelisation_parole');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 20px;" id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Auteur</th>
                                <th>Fichier audio</th>
                                <th>Description</th>
                                <th>Le Jour</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allParole as $row_parole):?>
                                <tr>
                                    <td><?php echo $row_parole->author_evangelisation_parole ?></td>
                                    <td><?php echo $row_parole->audio_evangelisation_parole ?></td>
                                    <td><?php echo $row_parole->describe_evangelisation_parole ?></td>
                                    <td><?php foreach ($jours as $row_day){if($row_day->id_jour == $row_parole->day_evangelisation_parole){echo $row_day->name_jour;}}  ?></td>
                                    <td><?php if($row_parole->status_evangelisation_parole == 1){statusSuccess('Publier');}elseif ($row_parole->status_evangelisation_parole == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_parole->created_at_evangelisation_parole ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?= site_url('backoffice/admin/editParole/'.$row_parole->id_evangelisation_parole) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn deleteEvangelisationParole" href="javascript:void(0)" data-id="<?=$row_parole->id_evangelisation_parole ?>" data-text="<?= $this->encryption->encrypt($row_parole->id_evangelisation_parole) ?>">Suprimer</a></td>
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


