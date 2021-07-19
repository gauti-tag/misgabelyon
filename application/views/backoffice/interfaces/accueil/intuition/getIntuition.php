

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
                                <th>Titre</th>
                                <th>Image</th>
                                <th>Texte 1</th>
                                <th>Texte 2</th>
                                <th>Texte 3</th>
                                <th>Texte 4</th>
                                <th>Texte 5</th>
                                <th>Statut</th>
                                <th rowspan="2" style="text-align: right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($allIntuition as $row):?>
                                <tr>
                                    <td><?php echo $row->title;  ?></td>
                                    <td><img width="50" height="50" src="<?php echo site_url('assets/uploads/intuition/'.$row->file)  ?>"></td>
                                    <td><?= $row->para1; ?></td>
                                    <td><?= $row->para2; ?></td>
                                    <td><?= $row->para3; ?></td>
                                    <td><?= $row->para4; ?></td>
                                    <td><?= $row->para5; ?></td>
                                    <td><?php if($row->status == 1){statusSuccess('Publier');}elseif ($row->status == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td style="text-align: center"><?php if($row->status == 1):?><a class="btn btn-danger update-status-intuition" style="width: 85px" data-status="<?php  echo $row->status ?>" data-text="<?php  echo $this->encryption->encrypt($row->id) ?>" href="javascript:void(0)">Desactiver</a><?php else: ?><a class="btn btn-success update-status-intuition" style="width: 85px" data-status="<?php  echo $row->status ?>" data-text="<?php  echo $this->encryption->encrypt($row->id) ?>" href="javascript:void(0)">Activer</a><?php endif; ?></td>
                                    <td style="text-align: center"><a class="btn btn-adn delIntuition" href="javascript:void(0)" data-id="<?php echo $row->id?>" data-text="<?php echo $this->encryption->encrypt($row->id) ?>">Suprimer</a></td>
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


