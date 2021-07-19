

<div class="content-wrapper">
    <!-- general form elements -->
    <div class="box box-primary" style=" width: 800px; margin: 0 auto">
        <div class="box-header with-border">
            <h3 class="box-title">Modifier une catégorie</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateBookProduct') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idBookProductUpDate" value="<?php echo $editBookProduct[0]['id_livre_article'] ?>">
            <input type="hidden" name="oldImageUpdateBookProduct" value="<?php echo $editBookProduct[0]['file_livre_article'] ?>">


            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom article</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $editBookProduct[0]['nom_livre_article'] ?>">
                </div>
                <div class="form-group">
                    <label for="prix">Prix article</label>
                    <input type="text" class="form-control" id="prix" name="prix" value="<?php echo $editBookProduct[0]['prix_livre_article'] ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description article</label>
                    <textarea type="text" class="form-control" id="description" rows="5" name="description"> <?php echo $editBookProduct[0]['description_livre_article'] ?> </textarea>
                </div>
                <?php if(($editBookProduct[0]['file_livre_article'])): ?>
                    <div class="form-group">
                        <img width="120" height="120" src="<?php echo site_url('assets/boutique/livre/img/'.$editBookProduct[0]['file_livre_article'])?>" class="img-responsive">
                    </div>
                <?php else: ?>
                    <div>Aucune image disponible</div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="img"> Modifier l'image </label>
                    <input type="file" class="form-control" id="img" name="img">
                </div>
                <div class="form-group">
                    <label for="category">Catégorie</label>
                    <select id="category" name="category" class="form-control" type="text">
                        <?php foreach ($allCategories as $row_product): ?>
                        <option <?php if($row_product->id_livre_categorie == $editBookProduct[0]['category_livre_article']){ echo 'selected="selected"';} ?>  value="<?php echo $row_product->name_livre_categorie;?>"><?php echo $row_product->name_livre_categorie;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?php echo $editBookProduct[0]['status_livre_article'] ?>">
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_book_product'))
                    {
                        echo $this->session->flashdata('error_edit_book_product');
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



