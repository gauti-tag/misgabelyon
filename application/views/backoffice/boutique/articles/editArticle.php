


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


        <!-- form start -->
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateArticle') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idArticleUpDate" value="<?php echo $editArticle[0]['id_articles'] ?>">
            <input type="hidden" name="oldImageUpdateArticle" value="<?php echo $editArticle[0]['file_articles'] ?>">


            <div class="box-body">
                <div class="form-group">
                    <label for="updateName">Nom article</label>
                    <input type="text" class="form-control" id="updateName" name="updateName" value="<?php echo $editArticle[0]['name_articles'] ?>">
                </div>
                <div class="form-group">
                    <label for="oldUpdatePrice">Ancien prix (CFA)</label>
                    <input type="text" class="form-control" id="oldUpdatePrice" name="oldUpdatePrice" value="<?php echo $editArticle[0]['old_price_articles'] ?>">
                </div>
                <div class="form-group">
                    <label for="newUpdatePrice">Nouveau prix (CFA)</label>
                    <input type="text" class="form-control" id="newUpdatePrice" name="newUpdatePrice" value="<?php echo $editArticle[0]['new_price_articles'] ?>">
                </div>
                <div class="form-group">
                    <label for="updatePercent">Pourcentage de réduction (%)</label>
                    <input type="text" class="form-control" id="updatePercent" name="updatePercent" value="<?php echo $editArticle[0]['percent_articles'] ?>">
                </div>
                <div class="form-group">
                    <label for="updateDescribe">Description article</label>
                    <textarea type="text" class="form-control" id="updateDescribe" rows="5" name="updateDescribe"> <?php echo $editArticle[0]['describe_articles'] ?> </textarea>
                </div>
                <?php // if(($editArticle[0]['file_articles'])): ?>
                <!--    <div class="form-group">
                        <img width="120" height="120" src="<?php //echo site_url('assets/boutique/articles/img/'.$editArticle[0]['file_articles'])?>" class="img-responsive">
                    </div>
                <?php //else: ?>
                    <div>Aucune image disponible</div>
                <?php //endif; ?>
                <div class="form-group">
                    <label for="updateImage"> Modifier l'image </label>
                    <input type="file" class="form-control" id="updateImage" name="updateImage">
                </div> -->
                <div class="form-group">
                    <label for="updateCategory">Catégorie</label>
                    <select id="updateCategory" name="updateCategory" class="form-control" type="text">
                        <?php foreach ($categories as $row_category): ?>
                            <option <?php if($row_category->id == $editArticle[0]['category_id']){ echo 'selected="selected"';} ?>  value="<?php echo $row_category->id;?>"><?php echo $row_category->name;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editArticle[0]['status_articles']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_article'))
                    {
                        echo $this->session->flashdata('error_edit_article');
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




