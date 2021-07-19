
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

        <?php if ($this->session->flashdata('error_new_cd_article')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_cd_article');?>
            </div> <?php elseif ($this->session->flashdata('success_new_cd_article')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_cd_article');?>
            </div> <?php endif; ?>

        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addCDArticle') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="articleCDName">Nom article<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="articleCDName" name="articleCDName" placeholder="Entrer le nom du produit svp!" required>
                </div>
                <div class="form-group">
                    <label for="articleCDPrice">Prix article<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="articleCDPrice" name="articleCDPrice" placeholder="Entrer le prix du produit svp!" required>
                </div>
                <div class="form-group">
                    <label for="articleCDDecribe">Description article<span style="color: red">*</span></label>
                    <textarea type="text" class="form-control" id="articleCDDecribe" name="articleCDDecribe" placeholder="Entrer une description!" rows="5" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="articleCDImg">Ajouter une image article<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="articleCDImg" name="articleCDImg" required>
                </div>
                <div class="form-group">
                    <label for="articleCDCategory">Ajouter la catégorie</label>
                    <select id="articleCDCategory" name="articleCDCategory" class="form-control">

                        <?php foreach ($allCDCategories as $row):  ?>
                            <option value="<?= $row->id_cd_categorie; ?>"><?= $row->name_cd_categorie; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="form-group">
                    <label for="articleCDStatus">status<span style="color: red">*</span></label>
                    <select id="articleCDStatus" class="form-control" name="articleCDStatus">
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



