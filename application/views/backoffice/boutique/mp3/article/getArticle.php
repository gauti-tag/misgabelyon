
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
                    <?php if ($this->session->flashdata('error_get_mp3_article')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_mp3_article');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_mp3_article')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_mp3_article');?>
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
                            <?php foreach ($allMp3Article as $row_mp3_article):?>

                                <tr>
                                    <td><?php echo $row_mp3_article->name_mp3_article ?></td>
                                    <td><?php echo $row_mp3_article->price_mp3_article ?>f CFA</td>
                                    <td><?php foreach ($allCategory as $row_category){ if ($row_category->id_mp3_categorie  == $row_mp3_article->category_mp3_article){ echo $row_category->name_mp3_categorie;}} ?></td>
                                    <td><?php echo $row_mp3_article->describe_mp3_article ?></td>
                                    <td><?php echo $row_mp3_article->file_mp3_article ?></td>
                                    <td><?php if($row_mp3_article->status_mp3_article == 1){statusSuccess('Publier');}elseif ($row_mp3_article->status_mp3_article == 0){statusFailed('sauvegarder');}  ?></td>
                                    <td><?php echo $row_mp3_article->created_at_mp3_article ?></td>


                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editMp3Article/'.$row_mp3_article->id_mp3_article ) ?>">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delMp3Article" href="javascript:void(0)" data-id="<?php  echo $row_mp3_article->id_mp3_article  ?>" data-text="<?php  echo $this->encryption->encrypt($row_mp3_article->id_mp3_article ) ?>">Suprimer</a></td>
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







