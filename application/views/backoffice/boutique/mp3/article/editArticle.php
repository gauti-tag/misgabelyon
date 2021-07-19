

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
    <!-- general form elements -->
    <div class="box box-primary" style=" width: 800px; margin: 0 auto">
        <div class="box-header with-border">
            <h3 class="box-title">Modifier une catégorie</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateMp3Article') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idMp3ArticleUpDate" value="<?php echo $editMp3Article[0]['id_mp3_article'] ?>">
            <input type="hidden" name="oldImageUpdateMp3Article" value="<?php echo $editMp3Article[0]['file_mp3_article'] ?>">


            <div class="box-body">
                <div class="form-group">
                    <label for="updateMp3ArticleName">Nom article</label>
                    <input type="text" class="form-control" id="updateMp3ArticleName" name="updateMp3ArticleName" value="<?php echo $editMp3Article[0]['name_mp3_article'] ?>">
                </div>
                <div class="form-group">
                    <label for="updateMp3ArticlePrice">Prix article</label>
                    <input type="text" class="form-control" id="updateMp3ArticlePrice" name="updateMp3ArticlePrice" value="<?php echo $editMp3Article[0]['price_mp3_article'] ?>">
                </div>
                <div class="form-group">
                    <label for="updateMp3ArticleDescribe">Description article</label>
                    <textarea type="text" class="form-control" id="updateMp3ArticleDescribe" rows="5" name="updateMp3ArticleDescribe"> <?php echo $editMp3Article[0]['describe_mp3_article'] ?> </textarea>
                </div>
                <?php if(($editMp3Article[0]['file_mp3_article'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/boutique/mp3/img/'.$editMp3Article[0]['file_mp3_article'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="updateMp3ArticleImage"> Modifier l'image </label>
                    <input type="file" class="form-control" id="updateMp3ArticleImage" name="updateMp3ArticleImage">
                </div>
                <div class="form-group">
                    <label for="updateMp3ArticleCategory">Catégorie</label>
                    <select id="updateMp3ArticleCategory" name="updateMp3ArticleCategory" class="form-control" type="text">
                        <?php foreach ($allMp3Categories as $row_mp3_category): ?>
                            <option <?php if($row_mp3_category->id_mp3_categorie == $editMp3Article[0]['category_mp3_article']){ echo 'selected="selected"';} ?>  value="<?php echo $row_mp3_category->id_mp3_categorie;?>"><?php echo $row_mp3_category->name_mp3_categorie;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="updateMp3ArticleStatus">Status</label>
                  <!--  <input type="text" class="form-control" id="updateMp3ArticleStatus" name="updateMp3ArticleStatus" value="<?php //echo $editMp3Article[0]['status_mp3_article'] ?>"> -->
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editMp3Article[0]['status_mp3_article']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_mp3_article'))
                    {
                        echo $this->session->flashdata('error_edit_mp3_article');
                    }
                    ?>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>




