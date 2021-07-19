




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
                    <?php if ($this->session->flashdata('error_get_cours')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_cours');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_cours')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_cours');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>code Cours</th>
                                <th>Libellé package</th>
                                <th>Matières</th>
                                <th>Date de création</th>
                                <th>Date début</th>
                                <th>Date fin</th>
                                <th>Nombre d'heure(s)</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allCours as $row_cours):?>
                                <tr>
                                    <td><?php echo $row_cours->code_cours ?></td>
                                    <td><?php echo $row_cours->nom_cours ?></td>
                                    <td><?php foreach ($allMatiere as $row_matiere){ if($row_cours->matiere_cours == $row_matiere->id_matiere){ echo $row_matiere->nom_matiere; }}  ?></td>
                                    <td><?php echo $row_cours->date_creation_cours ?></td>
                                    <td><?php echo $row_cours->date_debut ?></td>
                                    <td><?php echo $row_cours->date_fin ?></td>
                                    <td><?php echo $row_cours->nombre_heurs ?></td>

                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editCours/'.$row_cours->id_cours) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delCours" href="javascript:void(0)" data-id="<?php  echo $row_cours->id_cours ?>" data-text="<?php  echo $this->encryption->encrypt($row_cours->id_cours) ?>">Suprimer</a></td>
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



