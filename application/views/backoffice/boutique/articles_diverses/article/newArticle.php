
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
            <h3 class="box-title">Ajouter un article</h3>
        </div><!-- /.box-header -->

        <?php if ($this->session->flashdata('error_new_articles_diverses_article')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_articles_diverses_article');?>
            </div> <?php elseif ($this->session->flashdata('success_new_articles_diverses_article')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_articles_diverses_article');?>
            </div> <?php endif; ?>

        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addArticlesDiversArticle') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="articleArticlesDiversName">Nom article<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="articleArticlesDiversName" name="articleArticlesDiversName" placeholder="Entrer le nom du produit svp!" required>
                </div>
                <div class="form-group">
                    <label for="articleArticlesDiversPrice">Prix article<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="articleArticlesDiversPrice" name="articleArticlesDiversPrice" placeholder="Entrer le prix du produit svp!" required>
                </div>
                <div class="form-group">
                    <label for="articleArticlesDiversDecribe">Description article<span style="color: red">*</span></label>
                    <textarea type="text" class="form-control" id="articleArticlesDiversDecribe" name="articleArticlesDiversDecribe" placeholder="Entrer une description!" rows="5" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="articleArticlesDiversImg">Ajouter une image article<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="articleArticlesDiversImg" name="articleArticlesDiversImg" required>
                </div>
                <div class="form-group">
                    <label for="articleArticlesDiversCategory">Ajouter la catégorie</label>
                    <select id="articleArticlesDiversCategory" name="articleArticlesDiversCategory" class="form-control">

                        <?php foreach ($allArticlesDiversCategories as $row):  ?>
                            <option value="<?= $row->id_articles_diverses_categorie; ?>"><?= $row->name_articles_diverses_categorie; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="form-group">
                    <label for="articleArticlesDiversStatus">status<span style="color: red">*</span></label>
                    <select id="articleArticlesDiversStatus" class="form-control" name="articleArticlesDiversStatus">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?php echo $row_status->code_status ?>"><?php echo $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>



