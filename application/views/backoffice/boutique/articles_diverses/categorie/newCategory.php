




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
            <h3 class="box-title">Ajouter une catégorie</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addArticlesDiversCategory') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="categoryNameArticlesDivers">Nom catégorie<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="categoryNameArticlesDivers" name="categoryNameArticlesDivers" placeholder="Entrer le nom de la catégorie svp!" required>
                </div>

                <div class="form-group">
                    <label for="statusArticlesDivers">status<span style="color: red">*</span></label>
                    <select id="statusArticlesDivers" class="form-control" name="statusArticlesDivers">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?php echo $row_status->code_status ?>"><?php echo $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <?php if ($this->session->flashdata('error_new_article_divers_category')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_article_divers_category');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_article_divers_category')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_article_divers_category');?>
                    </div> <?php endif; ?>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>




