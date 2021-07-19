
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
        <form role="form" method="post" action="<?php echo site_url('backoffice/admin/upDateProgram') ?>">

            <input type="hidden" name="idProgramUpDate" value="<?php echo $editProgram[0]['id_programme'] ?>" >

            <div class="box-body">
                <div class="form-group">
                    <label for="year">Année</label>
                    <input type="number" class="form-control" id="year" name="year" value="<?php echo $editProgram[0]['annee_programme']?>">
                </div>
                <div class="form-group">
                    <label for="month">Mois</label>
                    <select class="form-control" id="month" name="month">
                        <?php foreach ($month as $row_month):  ?>
                            <option <?php if($row_month->id == $editProgram[0]['mois_programme']){echo 'selected="selected"';}  ?> value="<?= $row_month->id ?>"> <?= $row_month->month ?> </option>
                        <?php endforeach;  ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="theme">thème</label>
                    <input type="text" class="form-control" id="theme" name="theme" value="<?php echo $editProgram[0]['theme_programme']?> ">
                </div>
                <div class="form-group">
                    <label for="comment">Commentaires</label>
                    <textarea type="text" class="form-control" id="comment" name="comment"><?php echo $editProgram[0]['commentaires_programme']?></textarea>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div><!-- /.box -->


</div>

