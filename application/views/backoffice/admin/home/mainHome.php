

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Tableau de bord
             <small></small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             <li class="active">Tableau de bord</li>
         </ol>
     </section>

     <!-- Main content -->
     <section class="content">
         <!-- Small boxes (Stat box) -->
         <div class="row">
                <div class="col-lg-3 col-xs-6">

                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo $countCommand  ?></h3>
                            <p>Commande(s)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?php echo site_url('backoffice/admin/historyCommand') ?>" class="small-box-footer">Plus d'info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
               <div class="col-lg-3 col-xs-6">

                 <div class="small-box bg-green">
                     <div class="inner">
                         <h3><?php echo $countTransaction ?><!--<sup style="font-size: 20px">%</sup>--></h3>
                         <p>Transaction(s)</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="<?php echo site_url('backoffice/Admin/transactions') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- ========== students ===============--->
                 <div class="col-lg-3 col-xs-6">

                     <div class="small-box bg-yellow">
                         <div align="left" class="inner">
                             <h3><?php echo $countStudent  ?></h3>
                             <p>Etudiant(s) inscrit(s)</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-person-add"></i>

                         </div>
                         <a href="<?php echo site_url('backoffice/admin/getStudent')?>" class="small-box-footer">Plus d'infos  </a>
                     </div>
                 </div>

             <!-- ======== Accueil , ecoute et accompagnements ======-->

             <div class="col-lg-3 col-xs-6">

                 <div class="small-box bg-blue">
                     <div align="left" class="inner">
                         <h3><?php echo $countVolunteer  ?></h3>
                         <p>Accueil, Ecoute, Accompagnement</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-person-add"></i>

                     </div>
                     <a href="<?php echo site_url('backoffice/admin/getAccueilEcouteAccompagnement2')?>" class="small-box-footer">Plus d'infos  </a>
                 </div>
             </div>


             <!-- <div class="col-lg-3 col-xs-6">

                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3></h3>
                            <p>Visiteur(s)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>  -->

         </div><!-- /.row -->
         <!-- Main row -->

     </section><!-- /.content -->



</div><!-- /.content-wrapper -->

