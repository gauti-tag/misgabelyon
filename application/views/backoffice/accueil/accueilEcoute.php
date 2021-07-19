

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
                <div class="box">
                    <?php if ($this->session->flashdata('error_get_membre_accueil')):?>
                        <div id="error_info" class="alert-danger" role="alert" style="text-align: center">
                            <?php   echo $this->session->flashdata('error_get_membre_accueil');?>
                        </div> <?php elseif ($this->session->flashdata('success_get_membre_accueil')): ?>
                        <div id="success_info" class="alert-success" role="alert" style="text-align: center">
                            <?php echo $this->session->flashdata('success_get_membre_accueil');?>
                        </div> <?php endif; ?>
                    <div class="box-header">
                        <h3 class="box-title"><!--Liste des membres--></h3>
                    </div>
                    <div class="form-group">
                        <div class="input-group">

                            <span class="input-group-addon btn"> Recherche </span>
                            <input type="text" class="form-control" id="recherche" name="recherche" placeholder="Rechercher un membre">

                        </div>
                     <!--   <span class="btn btn-adn" id="test" > TEST </span> -->
                    </div>
                    <div id="resultAccueilMembers" class="box-body">

                  <!-- <table style="padding: 20px;" id="member_table" class="table table-bordered table-responsive">

                            <thead>
                            <tr>
                                <th>Nom et prenoms</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Message</th>
                                <th>Date d'inscription</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>

                        </table>  -->


                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->



</div>



