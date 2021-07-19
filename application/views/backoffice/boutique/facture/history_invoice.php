

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

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon btn"> Recherche </span>
                        <input type="text" class="form-control" id="recherche_factures" name="recherche_factures" placeholder="Rechercher par code, date & montant">
                    </div>
                </div>
                <div class="box">
                    <div id="resultListHistoryInvoice" class="box-body">


                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->




</div>


