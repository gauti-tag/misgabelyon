

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
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-xs-12">

                <div class="box">

                    <?php if ($this->session->flashdata('error_get_slide')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php  echo $this->session->flashdata('error_get_slide');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_slide')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_slide');?>
                        </div> <?php endif; ?>


                    <div class="box-header">
                        <h3 class="box-title">Liste des contenus</h3>
                    </div>
                    <div class="box-body">
                        <table  class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Texte 1</th>
                                <th>Texte 2</th>
                                <th>Reference</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($allSlides as $row_slide):?>
                                <tr>
                                    <td><?php if($row_slide->type == 1){echo 'Slide 1';}elseif ($row_slide->type == 2){echo 'Slide 2';}elseif ($row_slide->type == 3){echo 'Slide 3';} ?></td>
                                    <td><img width="60" src="<?php echo site_url('assets/slide/'.$row_slide->file)  ?>"></td>
                                    <td><?= $row_slide->text1; ?></td>
                                    <td><?= $row_slide->text2; ?></td>
                                    <td><?= $row_slide->reference; ?></td>
                                    <td><?= $row_slide->date; ?></td>
                                    <td><?php if($row_slide->status == 1){statusSuccess('Publier');}elseif ($row_slide->status == 0){statusFailed('sauvegarder');}  ?></td>
                              <!--  <td style="text-align: center"><a class="btn btn-primary" href="<?php // echo site_url('backoffice/admin/editSlide/'.$row_slide->id) ?>">Editer statut</a></td> -->
                                    <td style="text-align: center"><?php if($row_slide->status == 1):?><a class="btn btn-danger update-status-slide" style="width: 85px" data-status="<?php  echo $row_slide->status ?>" data-text="<?php  echo $this->encryption->encrypt($row_slide->id) ?>" href="javascript:void(0)">Desactiver</a><?php else: ?><a class="btn btn-success update-status-slide" style="width: 85px" data-status="<?php  echo $row_slide->status ?>" data-text="<?php  echo $this->encryption->encrypt($row_slide->id) ?>" href="javascript:void(0)">Activer</a><?php endif; ?></td>
                                    <td style="text-align: center"><a class="btn btn-adn delSlide" href="javascript:void(0)" data-id="<?php echo $row_slide->id?>" data-text="<?php echo $this->encryption->encrypt($row_slide->id) ?>">Suprimer</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->


</div>


