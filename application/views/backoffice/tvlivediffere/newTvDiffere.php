


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
        <form role="form" method="POST" action="<?php echo site_url('backoffice/admin/addTvDiffere') ?>" enctype="multipart/form-data">

            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom svp!">
                </div>
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrer le titre svp!">
                </div>
                <div class="form-group">
                    <label for="lien">Lien vidéo</label>
                    <input type="text" class="form-control" id="lien" name="lien" placeholder="Entrer le lien svp!">
                </div>
        <!--        <div class="form-group">
                    <label for="video">Ajouter une vidéo</label>
                    <input type="file" class="form-control" id="video" name="video">
                </div>  -->
                <div class="form-group">
                    <label for="status">status</label>
                    <select id="status" class="form-control required" name="status">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?= $row_status->code_status ?>"><?= $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <?php if ($this->session->flashdata('error_new_tvdiffere')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_tvdiffere');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_tvdiffere')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_tvdiffere');?>
                    </div> <?php endif; ?>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>