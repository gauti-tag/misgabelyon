

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
                    <?php if ($this->session->flashdata('error_get_cd_category')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_cd_category');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_cd_category')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_cd_category');?>
                        </div> <?php endif; ?>
                    <div class="box-header">
                        <h3 class="box-title">Liste des Catégories</h3>
                    </div>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Status</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allCDCategories as $row_cd_category):?>
                                <tr>
                                    <td><?php echo $row_cd_category->name_cd_categorie ?></td>
                                    <td><?php if($row_cd_category->status_cd_categorie == 1){statusSuccess('Publier');}elseif ( $row_cd_category->status_cd_categorie == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_cd_category->created_at_cd_categorie ?></td>

                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editCDCategory/'.$row_cd_category->id_cd_categorie ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delCDCategory" href="javascript:void(0)" data-id="<?php  echo $row_cd_category->id_cd_categorie  ?>" data-text="<?php  echo $this->encryption->encrypt($row_cd_category->id_cd_categorie) ?>">Suprimer</a></td>
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






