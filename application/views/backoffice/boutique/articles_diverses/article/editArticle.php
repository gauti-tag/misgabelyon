

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateArticlesDiversArticle') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idArticlesDiversArticleUpDate" value="<?php echo $editArticlesDiversArticle[0]['id_articles_diverses_article'] ?>">
            <input type="hidden" name="oldImageUpdateArticlesDiversArticle" value="<?php echo $editArticlesDiversArticle[0]['file_articles_diverses_article'] ?>">


            <div class="box-body">
                <div class="form-group">
                    <label for="updateArticlesDiversArticleName">Nom article</label>
                    <input type="text" class="form-control" id="updateArticlesDiversArticleName" name="updateArticlesDiversArticleName" value="<?php echo $editArticlesDiversArticle[0]['name_articles_diverses_article'] ?>">
                </div>
                <div class="form-group">
                    <label for="updateArticlesDiversArticlePrice">Prix article</label>
                    <input type="text" class="form-control" id="updateArticlesDiversArticlePrice" name="updateArticlesDiversArticlePrice" value="<?php echo $editArticlesDiversArticle[0]['price_articles_diverses_article'] ?>">
                </div>
                <div class="form-group">
                    <label for="updateArticlesDiversArticleDescribe">Description article</label>
                    <textarea type="text" class="form-control" id="updateArticlesDiversArticleDescribe" rows="5" name="updateArticlesDiversArticleDescribe"> <?php echo $editArticlesDiversArticle[0]['describe_articles_diverses_article'] ?> </textarea>
                </div>
                <?php if(($editArticlesDiversArticle[0]['file_articles_diverses_article'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/boutique/articles_diverses/img/'.$editArticlesDiversArticle[0]['file_articles_diverses_article'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="updateArticlesDiversArticleImage"> Modifier l'image </label>
                    <input type="file" class="form-control" id="updateArticlesDiversArticleImage" name="updateArticlesDiversArticleImage">
                </div>
                <div class="form-group">
                    <label for="updateArticlesDiversArticleCategory">Catégorie</label>
                    <select id="updateArticlesDiversArticleCategory" name="updateArticlesDiversArticleCategory" class="form-control" type="text">
                        <?php //var_dump($allCategories[0]); die(); ?>
                        <?php foreach ($allArticlesDiversCategories as $row_articles_diverses_category): ?>
                            <?php //var_dump($row_articles_diverses_category); die(); ?>
                            <option <?php if($row_articles_diverses_category->id_articles_diverses_categorie == $editArticlesDiversArticle[0]['category_articles_diverses_article']){ echo 'selected="selected"';} ?>  value="<?php echo $row_articles_diverses_category->id_articles_diverses_categorie;?>"><?php echo $row_articles_diverses_category->name_articles_diverses_categorie;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="updateArticlesDiversArticleStatus">Status</label>
                    <input type="text" class="form-control" id="updateArticlesDiversArticleStatus" name="updateArticlesDiversArticleStatus" value="<?php echo $editArticlesDiversArticle[0]['status_articles_diverses_article'] ?>">
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_articles_diverses_article'))
                    {
                        echo $this->session->flashdata('error_edit_articles_diverses_article');
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





