
<div class="content-wrapper">

    <p> <?php// var_dump($allStudents);?> </p>

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

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon btn"> Recherche </span>
                    <input type="text" class="form-control" id="recherche_student" name="recherche_student" placeholder="Rechercher ...">
                </div>
            </div>

                <div class="box">
                    <?php if ($this->session->flashdata('error_get_student')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_student');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_student')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_student');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénoms</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Statut</th>
                                <th>Pays</th>
                                <th>Code d'activation</th>
                             <!--<th>Mot de passe</th>-->
                                <th>Date d'inscription</th>
                                <!--<th>Profil</th>-->
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="resultStudent">
                            <?php //foreach ($allStudents as $row_student):?>
                          <!--  <tr>
                                <td> <?php //echo $row_student->name ?></td>
                                <td><?php //echo $row_student->prenoms ?></td>
                                <td><?php //echo $row_student->email ?></td>
                                <td><?php //echo $row_student->mobile ?></td>
                                <td><?php //if($row_student->status == 1){statusSuccess('actif');}elseif ($row_student->status == 0){statusFailed('inactif');}  ?></td>
                                <td><?php //foreach ($allPays as $row_pays){ if ($row_pays->alpha2  == $row_student->pays){ echo $row_pays->nom_fr_fr;}} ?></td>
                                <td style="text-align: center"><?php //if($row_student->link){ echo $row_student->link; }else{statusDefault('null');}   ?></td>
                                <td><?php //echo $row_student->dates ?></td>
                                <td style="text-align: center"><a class="btn btn-primary" href="<?php //echo site_url('backoffice/admin/editStudent/'.$row_student->inscription_id) ?>">Editer</a></td>
                                <td style="text-align: center"><a class="btn btn-adn delStudent" href="javascript:void(0)" data-id="<?php  //echo $row_student->inscription_id ?>" data-text="<?php  // echo $this->encryption->encrypt($row_student->inscription_id) ?>">Suprimer</a></td>
                            </tr> -->
                            <?php //endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->




</div>
