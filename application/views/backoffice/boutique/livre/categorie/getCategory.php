
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
                    <?php if ($this->session->flashdata('error_get_book_category')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_book_category');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_book_category')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_book_category');?>
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
                            <?php foreach ($allBookCategories as $row_book_category):?>
                                <tr>
                                    <td><?php echo $row_book_category->name_livre_categorie ?></td>
                                    <td><?php if($row_book_category->status_livre_categorie == 1){statusSuccess('Publier');}elseif ($row_book_category->status_livre_categorie == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?php echo $row_book_category->	created_at_livre_categorie ?></td>

                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editBookCategory/'.$row_book_category->id_livre_categorie ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delBookCategory" href="javascript:void(0)" data-id="<?php  echo $row_book_category->id_livre_categorie  ?>" data-text="<?php  echo $this->encryption->encrypt($row_book_category->id_livre_categorie ) ?>">Suprimer</a></td>
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





