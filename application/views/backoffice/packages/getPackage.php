


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
                    <?php if ($this->session->flashdata('error_get_package')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_package');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_package')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_package');?>
                        </div> <?php endif; ?>

                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>code package</th>
                                <th>Libellé package</th>
                                <th>Matières</th>
                                <th>Tarif</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allPackage as $row_package):?>
                                <tr>
                                    <td><?php echo $row_package->code_package ?></td>
                                    <td><?php echo $row_package->nom_package ?></td>

                                    <td><?php foreach ($allMatiere as $row_matiere){ if($row_package->matiere_package == $row_matiere->id_matiere){ echo $row_matiere->nom_matiere;}}?></td>

                                    <td><?php echo $row_package->tarif_package ?></td>
                                    <td><?php echo $row_package->date_package ?></td>

                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editPackage/'.$row_package->id_package) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delPackage" href="javascript:void(0)" data-id="<?php  echo $row_package->id_package ?>" data-text="<?php  echo $this->encryption->encrypt($row_package->id_package) ?>">Suprimer</a></td>
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


