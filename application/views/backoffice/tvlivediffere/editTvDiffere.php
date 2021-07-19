




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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateTvDiffere') ?>">

            <input type="hidden" name="idTvDiffereUpDate" value="<?php echo $editTvDiffere[0]['id_tv_differe'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $editTvDiffere[0]['nom_tv_differe'] ?>" placeholder="Entrer votre nom svp!">
                </div>
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $editTvDiffere[0]['titre_tv_differe'] ?>" placeholder="Entrer votre prénoms svp!">
                </div>
                <div class="form-group">
                    <label for="lien">lien</label>
                    <input type="text" class="form-control" id="lien" name="lien" value="<?php echo $editTvDiffere[0]['lien_tv_differe'] ?>" placeholder="Entrer votre Numéro de Telephone svp!">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                <!--    <input type="text" class="form-control" id="status" name="status" value="<?php // echo $editTvDiffere[0]['status'] ?>" placeholder="Entrer votre email svp!"> -->
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editTvDiffere[0]['status']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_tvdiffere'))
                    {
                        echo $this->session->flashdata('error_edit_tvdiffere');
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


