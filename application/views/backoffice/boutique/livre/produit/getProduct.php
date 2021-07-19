
<div class="content-wrapper">

    <p> <?php// var_dump($allStudents);?> </p>


    <section class="content">
        <div class="row">

            <div class="col-xs-12">

                <div class="box">
                    <?php if ($this->session->flashdata('error_get_book_article')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_book_article');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_book_article')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_book_article');?>
                        </div> <?php endif; ?>
                    <div class="box-header">
                        <h3 class="box-title">Liste des Articles</h3>
                    </div>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Catégorie</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allProducts as $row_book_product):?>
                                <tr>
                                    <td><?php echo $row_book_product->nom_livre_article ?></td>
                                    <td><?php echo $row_book_product->prix_livre_article ?></td>
                                    <td><?php foreach ($allCategory as $row_category){ if ($row_category->id_livre_categorie  == $row_book_product->category_livre_article){ echo $row_category->name_livre_categorie;}}//echo $row_book_product->category_livre_article ?></td>
                                    <td><?php echo $row_book_product->description_livre_article ?></td>
                                    <td><?php echo $row_book_product->file_livre_article ?></td>
                                    <td><?php if($row_book_product->status_livre_article == 1){statusSuccess('Publier');}elseif ($row_book_product->status_livre_article == 0){statusFailed('sauvegarder');} ?></td>
                                    <td><?php echo $row_book_product->created_at_livre_article ?></td>

                                    <!--             <td><i class="fa fa-eye" aria-hidden="true"></i></td>  -->
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editBookProduct/'.$row_book_product->id_livre_article ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delBookProduct" href="javascript:void(0)" data-id="<?php  echo $row_book_product->id_livre_article  ?>" data-text="<?php  echo $this->encryption->encrypt($row_book_product->id_livre_article ) ?>">Suprimer</a></td>
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






