

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
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
                    <?php if ($this->session->flashdata('error_get_membre_accueil')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_membre_accueil');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_membre_accueil')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_membre_accueil');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Nom et prenoms</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Message</th>
                                <th>Date d'inscription</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allMembers as $row_member):?>
                                <tr>
                                    <td> <?php echo $row_member->name_volunteer ?></td>
                                    <td><?php echo $row_member->email_volunteer ?></td>
                                    <td><?php echo $row_member->phone_volunteer ?></td>
                                    <td><?php echo $row_member->message_volunteer ?></td>
                                    <td><?php echo $row_member->date_volunteer ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editAccueilEcouteAccompagnement/'.$row_member->id_volunteer) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delVolunteer" href="javascript:void(0)" data-id="<?php  echo $row_member->id_volunteer ?>" data-text="<?php  echo $this->encryption->encrypt($row_member->id_volunteer) ?>">Suprimer</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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

