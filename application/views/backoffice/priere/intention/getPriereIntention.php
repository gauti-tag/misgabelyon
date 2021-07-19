
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
                    <?php if ($this->session->flashdata('error_get_priere_intention')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_priere_intention');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_priere_intention')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_priere_intention');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Sujet</th>
                                <th>Prière</th>
                                <th>Statut</th>
                                <th>Date</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allPriereIntention as $row_priere_intention):?>
                                <tr>
                                    <td> <?php echo $row_priere_intention->sujet_priere_intention ?></td>
                                    <td><?php echo $row_priere_intention->priere_priere_intention ?></td>
                                    <td><?php if($row_priere_intention->status_priere_intention == 1){statusSuccess('Publier');}elseif ($row_priere_intention->status_priere_intention == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_priere_intention->created_at_priere_intention ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editPriereIntention/'.$row_priere_intention->id_priere_intention) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delPriereIntention" href="javascript:void(0)" data-id="<?php  echo $row_priere_intention->id_priere_intention ?>" data-text="<?php  echo $this->encryption->encrypt($row_priere_intention->id_priere_intention) ?>">Suprimer</a></td>
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

