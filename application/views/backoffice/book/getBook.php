
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
                    <?php if ($this->session->flashdata('error_get_book')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_book');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_book')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_book');?>
                        </div> <?php endif; ?>
                    <div class="box-header">
                        <h3 class="box-title">Liste des livres numériques</h3>
                    </div>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Images</th>
                                <th>Audios</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="3">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allBook as $row_book):?>
                                <tr>
                                    <td><?php echo $row_book->titre_numeric_book ?></td>
                                    <td><?php echo $row_book->description_numeric_book ?></td>
                                    <td><img width="50" height="50" src="<?php echo site_url('assets/book/image/'.$row_book->file_numeric_book)  ?>"></td>
                                    <td style="text-align: center"> <?php if($row_book->audio_numeric_book){ ?><audio controls src="<?php echo site_url('assets/book/audio/'.$row_book->audio_numeric_book)  ?>"><?php }else{ echo 'Aucun fichier audio';}?></audio></td>
                                    <td><?php if($row_book->status_numeric_book == 1){statusSuccess('Publier');}elseif ($row_book->status_numeric_book == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?php echo $row_book->created_at_numeric_book ?></td>
                                    <td style="text-align: center"><?php if(!$row_book->audio_numeric_book): ?><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editBook/'.$row_book->id_numeric_book) ?>">Ajouter l'audio</a><?php endif; ?></td>
                                    <td style="text-align: center"><?php if($row_book->status_numeric_book == 1):?><a class="btn btn-danger update-status-book" style="width: 85px" data-status="<?php  echo $row_book->status_numeric_book ?>" data-text="<?php  echo $this->encryption->encrypt($row_book->id_numeric_book) ?>" href="javascript:void(0)">Desactiver</a><?php else: ?><a class="btn btn-success update-status-book" style="width: 85px" data-status="<?php  echo $row_book->status_numeric_book ?>" data-text="<?php  echo $this->encryption->encrypt($row_book->id_numeric_book) ?>" href="javascript:void(0)">Activer</a><?php endif; ?></td>
                                    <td style="text-align: center"><a class="btn btn-adn delBook" href="javascript:void(0)" data-id="<?php  echo $row_book->id_numeric_book ?>" data-text="<?php  echo $this->encryption->encrypt($row_book->id_numeric_book) ?>">Suprimer</a></td>
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




