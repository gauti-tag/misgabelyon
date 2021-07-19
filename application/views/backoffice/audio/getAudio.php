
<div class="content-wrapper">

    <p> <?php// var_dump($allStudents);?> </p>


    <section class="content">
        <div class="row">

            <div class="col-xs-12">

                <div class="box">
                    <?php if ($this->session->flashdata('error_get_audio')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_audio');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_audio')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_audio');?>
                        </div> <?php endif; ?>
                    <div class="box-header">
                        <h3 class="box-title">Liste des enregistrements audio</h3>
                    </div>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Fichier audio</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allAudio as $row_audio):?>
                                <tr>
                                    <td><?php echo $row_audio->titre_audio ?></td>
                                    <td><?php echo $row_audio->description_audio ?></td>
                                    <td><?php echo $row_audio->file_audio ?></td>
                                    <td><?php echo $row_audio->status_audio ?></td>
                                    <td><?php echo $row_audio->created_at_audio ?></td>

                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editAudio/'.$row_audio->id_audio) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delAudio" href="javascript:void(0)" data-id="<?php  echo $row_audio->id_audio ?>" data-text="<?php  echo $this->encryption->encrypt($row_audio->id_audio) ?>">Suprimer</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div>




