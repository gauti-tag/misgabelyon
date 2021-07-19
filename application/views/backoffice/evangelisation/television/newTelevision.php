



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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/addEvangelisation_tv') ?>">

            <div class="box-body">

                <div class="form-group">
                    <label for="libelle">Libellé télévision</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrer le libellé svp!" >
                </div>
                <div class="form-group">
                    <label for="lien">Lien télévision</label>
                    <input type="text" class="form-control" id="lien" name="lien"  placeholder="Exemple:https://www.youtube.com/watch?v=ofnf7dZS7ck">
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire</label>
                    <textarea type="text" class="form-control" id="comment" name="comment"  rows="10" placeholder=""> </textarea>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select id="status" class="form-control required" name="status">
                        <?php foreach ($status as $row_status): ?>
                            <option value="<?= $row_status->code_status ?>"><?= $row_status->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <?php if ($this->session->flashdata('error_new_evangelisation_tv')):?>
                    <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                        <?php   echo $this->session->flashdata('error_new_evangelisation_tv');?>
                    </div> <?php elseif ($this->session->flashdata('success_new_evangelisation_tv')): ?>
                    <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                        <?php echo $this->session->flashdata('success_new_evangelisation_tv');?>
                    </div> <?php endif; ?>


            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>
