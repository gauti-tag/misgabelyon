
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
                    <div class="text-center">
                    <?php if($this->session->flashdata('get_priere_partage')){echo $this->session->flashdata('get_priere_partage');} ?>
                    </div>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Thème</th>
                                <th>Référence</th>
                                <th>Contenu</th>
                                <th>Statut</th>
                                <th>Date</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allPrierePartage as $row_priere_partage):?>
                                <tr>
                                    <td> <?php echo $row_priere_partage->theme_priere_partage ?></td>
                                    <td><?php echo $row_priere_partage->ref_priere_partage ?></td>
                                    <td><?php echo $row_priere_partage->content_priere_partage ?></td>
                                    <td><?php if($row_priere_partage->status_priere_partage == 1){statusSuccess('Publier');}elseif ($row_priere_partage->status_priere_partage == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_priere_partage->created_at_priere_partage ?></td>

                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editPrierePartage/'.$row_priere_partage->id_priere_partage ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delPrierePartage" href="javascript:void(0)" data-id="<?php  echo $row_priere_partage->id_priere_partage  ?>" data-text="<?php  echo $this->encryption->encrypt($row_priere_partage->id_priere_partage ) ?>">Suprimer</a></td>
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

