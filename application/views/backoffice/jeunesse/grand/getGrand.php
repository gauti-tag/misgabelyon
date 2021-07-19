
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
                    <?php if ($this->session->flashdata('error_get_jeunesse_grand')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_jeunesse_grand');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_jeunesse_grand')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_jeunesse_grand');?>
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
                            <?php foreach ($allGrandProphetePriere as $row_grand_prophete):?>
                                <tr>
                                    <td> <?php echo $row_grand_prophete->sujet_jeunesse_priere_jeune ?></td>
                                    <td><?php echo $row_grand_prophete->content_jeunesse_priere_jeune ?></td>
                                    <td><?php if($row_grand_prophete->status_jeunesse_priere_jeune == 1){statusSuccess('Publier');}elseif ($row_grand_prophete->status_jeunesse_priere_jeune == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_grand_prophete->created_at_jeunesse_priere_jeune ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editGrandProphetePriere/'.$row_grand_prophete->id_jeunesse_priere_jeune ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delGrandProphetePriere" href="javascript:void(0)" data-id="<?php  echo $row_grand_prophete->id_jeunesse_priere_jeune  ?>" data-text="<?php  echo $this->encryption->encrypt($row_grand_prophete->id_jeunesse_priere_jeune ) ?>">Suprimer</a></td>
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

