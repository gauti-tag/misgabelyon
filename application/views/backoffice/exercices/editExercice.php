
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateExercice') ?>">

            <input type="hidden" name="idExerciceUpDate" value="<?php echo $editExercice[0]['id_exercice'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $editExercice[0]['titre_exercice']?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"> <?php echo $editExercice[0]['description_exercice']?> </textarea>
                </div>
                <div class="form-group">
                    <label for="question">Questions</label>
                    <textarea type="text" class="form-control" id="question" name="question"><?php echo $editExercice[0]['questions_exercice']?></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                <!--    <input type="text" class="form-control" id="status" name="status" value="<?php //echo $editExercice[0]['status_exercice'] ?>"> -->
                    <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $row): ?>
                            <option <?php if($row->code_status == $editExercice[0]['status_exercice']){ echo 'selected="selected"';} ?> value="<?php echo $row->code_status?>"><?php echo $row->nom_status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                    <?php
                    if($this->session->flashdata('error_edit_exercice'))
                    {
                        echo $this->session->flashdata('error_edit_exercice');
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

