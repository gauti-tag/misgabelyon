
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
                    <?php if ($this->session->flashdata('error_get_jeunesse_petit')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_jeunesse_petit');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_jeunesse_petit')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_jeunesse_petit');?>
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
                            <?php foreach ($allPetitProphetePriere as $row_petit_prophete):?>
                                <tr>
                                    <td> <?php echo $row_petit_prophete->sujet_jeunesse_priere_petit ?></td>
                                    <td><?php echo $row_petit_prophete->content_jeunesse_priere_petit ?></td>
                                    <td><?php if($row_petit_prophete->status_jeunesse_priere_petit == 1){statusSuccess('Publier');}elseif ($row_petit_prophete->status_jeunesse_priere_petit == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_petit_prophete->created_at_jeunesse_priere_petit ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editPetitProphetePriere/'.$row_petit_prophete->id_jeunesse_priere_petit  ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delPetitProphetePriere" href="javascript:void(0)" data-id="<?php  echo $row_petit_prophete->id_jeunesse_priere_petit   ?>" data-text="<?php  echo $this->encryption->encrypt($row_petit_prophete->id_jeunesse_priere_petit  ) ?>">Suprimer</a></td>
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

