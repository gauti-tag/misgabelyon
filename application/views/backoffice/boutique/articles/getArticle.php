
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
                    <?php if ($this->session->flashdata('error_get_article')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_article');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_article')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_article');?>
                        </div> <?php endif; ?>
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>A-prix</th>
                                <th>N-prix</th>
                              <!--<th>%</th>-->
                                <th>Catégorie</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($articles as $row_article):?>

                                <tr>
                                    <td><?php echo $row_article->name_articles ?></td>
                                    <td><?php echo $row_article->old_price_articles ?>f CFA</td>
                                    <td><?php echo $row_article->new_price_articles ?>f CFA</td>
                                <!--<td><?php //echo $row_article->percent_articles ?>%</td> --->
                                    <td><?php foreach ($categories as $row_category){ if ($row_category->id == $row_article->category_id){ echo $row_category->name;}} ?></td>
                                    <td><?php echo $row_article->describe_articles ?></td>
                                    <td><img width="100" src="<?php echo site_url('assets/boutique/articles/img/'.$row_article->file_articles)  ?>"></td>
                                <!--<td><?php //echo $row_article->file_articles ?></td> -->
                                    <td><?php if($row_article->status_articles == 1){statusSuccess('Publier');}elseif ($row_article->status_articles == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?php echo $row_article->created_at_articles ?></td>


                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editArticle/'.$row_article->id_articles ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delArticle" href="javascript:void(0)" data-id="<?php  echo $row_article->id_articles  ?>" data-text="<?php  echo $this->encryption->encrypt($row_article->id_articles ) ?>">Suprimer</a></td>
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







