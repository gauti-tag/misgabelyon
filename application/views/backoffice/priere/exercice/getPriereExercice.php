
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
                    <?php if ($this->session->flashdata('error_get_exercice_priere')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_exercice_priere');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_exercice_priere')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_exercice_priere');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Questions</th>
                                <th>Statut</th>
                                <th>Date</th>
                                <!--<th>Profil</th> -->
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allPriereExercices as $row_exercice):?>
                                <tr>
                                    <td> <?php echo $row_exercice->titre_exercice_priere ?></td>
                                    <td><?php echo $row_exercice->description_exercice_priere ?></td>
                                    <td><?php echo $row_exercice->question_exercice_priere ?></td>
                                    <td><?php if($row_exercice->status_exercice_priere == 1){statusSuccess('Publier');}elseif ($row_exercice->status_exercice_priere == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_exercice->created_at_exercice_priere ?></td>

                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editPriereExercice/'.$row_exercice->id_exercice_priere) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delPriereExercice" href="javascript:void(0)" data-id="<?php  echo $row_exercice->id_exercice_priere ?>" data-text="<?php  echo $this->encryption->encrypt($row_exercice->id_exercice_priere) ?>">Suprimer</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->



    <!-- <table class="table table-bordered" id="manager">
          <thead>
             <tr>
                  <th>nom</th>
                  <th>prenoms</th>
                  <th>age</th>
                  <th>date</th>
             </tr>
          </thead>
      </table> -->


</div>

