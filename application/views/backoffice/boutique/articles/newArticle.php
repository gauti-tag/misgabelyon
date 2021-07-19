
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
        <?php if ($this->session->flashdata('error_new_articles')):?>
            <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                <?php   echo $this->session->flashdata('error_new_articles');?>
            </div> <?php elseif ($this->session->flashdata('success_new_articles')): ?>
            <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                <?php echo $this->session->flashdata('success_new_articles');?>
            </div> <?php endif; ?>

        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addArticle') ?>" enctype="multipart/form-data">

            <div class="box-body">

                <div class="form-group">
                    <label for="name">Nom article<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrer le nom du produit svp!" required>
                </div>
                <div class="form-group">
                    <label for="oldPrix">Ancien prix (CFA)<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="oldPrix" name="oldPrix" placeholder="Entrer le prix du produit svp!" required>
                </div>
                <div class="form-group">
                    <label for="newPrix">Nouveau prix (CFA)<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="newPrix" name="newPrix" placeholder="Entrer le prix du produit svp!" required>
                </div>
             <!--   <div class="form-group">
                    <label for="percent">Pourcentage de réduction (%)<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="percent" name="percent" placeholder="Entrer le prix du produit svp!" required>
                </div> -->
                <div class="form-group">
                    <label for="description">Description article<span style="color: red">*</span></label>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Entrer une description!" rows="5" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="image">Ajouter une image article au format 400x500<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="Category">Ajouter la catégorie</label>
                    <select id="Category" name="Category" class="form-control">

                        <?php foreach ($categories as $row):  ?>
                        <?php //var_dump($row); die();  ?>
                            <option value="<?= $row->id; ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status<span style="color: red">*</span></label>
                    <select id="status" class="form-control" name="status">
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



