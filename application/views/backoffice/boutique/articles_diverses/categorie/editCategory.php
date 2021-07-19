
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateArticlesDiversCategory') ?>" enctype="multipart/form-data">

            <input type="hidden" name="idCDCategoryUpDate" value="<?php echo $editArticlesDiversCategory[0]['id_articles_diverses_categorie'] ?>">

            <div class="box-body">
                <div class="form-group">
                    <label for="editArticlesDiversName">Nom catégorie</label>
                    <input type="text" class="form-control" id="editArticlesDiversName" name="editArticlesDiversName" value="<?php echo $editArticlesDiversCategory[0]['name_articles_diverses_categorie'] ?>">
                </div>
                <div class="form-group">
                    <label for="editArticlesDiversStatus">Status</label>
                    <select class="form-control" id="editArticlesDiversStatus" name="editArticlesDiversStatus">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editArticlesDiversCategory[0]['status_articles_diverses_categorie']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_cd_category'))
                    {
                        echo $this->session->flashdata('error_edit_cd_category');
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





