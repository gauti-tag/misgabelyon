

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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateCDArticle') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idCDArticleUpDate" value="<?php echo $editCDArticle[0]['id_cd_article'] ?>">
            <input type="hidden" name="oldImageUpdateCDArticle" value="<?php echo $editCDArticle[0]['file_cd_article'] ?>">


            <div class="box-body">
                <div class="form-group">
                    <label for="updateCDArticleName">Nom article</label>
                    <input type="text" class="form-control" id="updateCDArticleName" name="updateCDArticleName" value="<?php echo $editCDArticle[0]['name_cd_article'] ?>">
                </div>
                <div class="form-group">
                    <label for="updateCDArticlePrice">Prix article</label>
                    <input type="text" class="form-control" id="updateCDArticlePrice" name="updateCDArticlePrice" value="<?php echo $editCDArticle[0]['price_cd_article'] ?>">
                </div>
                <div class="form-group">
                    <label for="updateCDArticleDescribe">Description article</label>
                    <textarea type="text" class="form-control" id="updateCDArticleDescribe" rows="5" name="updateCDArticleDescribe"> <?php echo $editCDArticle[0]['describe_cd_article'] ?> </textarea>
                </div>
                <?php if(($editCDArticle[0]['file_cd_article'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/boutique/cd/img/'.$editCDArticle[0]['file_cd_article'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="updateCDArticleImage"> Modifier l'image </label>
                    <input type="file" class="form-control" id="updateCDArticleImage" name="updateCDArticleImage">
                </div>
                <div class="form-group">
                    <label for="updateCDArticleCategory">Catégorie</label>
                    <select id="updateCDArticleCategory" name="updateCDArticleCategory" class="form-control" type="text">
                        <?php foreach ($allCDCategories as $row_cd_category): ?>
                            <option <?php if($row_cd_category->id_cd_categorie == $editCDArticle[0]['category_cd_article']){ echo 'selected="selected"';} ?>  value="<?php echo $row_cd_category->name_cd_categorie;?>"><?php echo $row_cd_category->name_cd_categorie;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="updateCDArticleStatus">Status</label>
                     <select class="form-control" id="updateCDArticleStatus" name="updateCDArticleStatus">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editCDArticle[0]['status_cd_article']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_cd_article'))
                    {
                        echo $this->session->flashdata('error_edit_cd_article');
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





