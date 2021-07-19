


  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image" style="height: 20px">
                <!--    <img src="#" class="img-circle" alt="User Image"> -->
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                      if($this->session->userdata['id_admin_session'])
                      {
                          echo $this->session->userdata['email_admin_session'];
                      }
                    ?>
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">NAVIGATION PRINCIPALE</li>
        <!-- <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li> -->
            <li>
                <a href="<?php echo site_url('backoffice/admin')?>">
                    <i class="fa fa-table"></i> <span>Dashboard</span>
                    <!--   <small class="label pull-right bg-red">3</small>  -->
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Panel Administration</span>
                    <span class="label label-primary pull-right"></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('backoffice/admin/newUser')?>"><i class="fa fa-circle-o"></i>Ajouter un utilisateur</a></li>
                    <li><a href="<?php echo site_url('backoffice/admin/getUser')?>"><i class="fa fa-circle-o"></i>Liste des utilisateurs</a></li>

                </ul>
            </li>

            <li>
                <a href="<?php// echo site_url('backoffice/admin/')?>">
                    <i class="fa fa-users"></i> <span>Accueil, Accompagnement</span>
                       <small class="label pull-right bg-light-blue"><?php echo $countVolunteer; ?></small>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('backoffice/admin/newAccueilEcouteAccompagnement')?>"><i class="fa fa-circle-o"></i>Ajouter un membre</a></li>
                    <li><a href="<?php echo site_url('backoffice/admin/getAccueilEcouteAccompagnement')?>"><i class="fa fa-circle-o"></i>Liste des membres</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-television"></i>
                    <span>TV live</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('backoffice/admin/newTvLive')?>"><i class="fa fa-circle-o"></i>Ajouter un lien TV</a></li>
                    <li><a href="<?php echo site_url('backoffice/admin/getTvLive')?>"><i class="fa fa-circle-o"></i>Liste des liens TV</a></li>


                </ul>
            </li>




            <li class="treeview">
                <a href="#">
                    <i class="fa fa-television"></i>
                    <span>TV en différé</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('backoffice/admin/newTvDiffere')?>"><i class="fa fa-circle-o"></i>Ajouter un lien TV différé</a></li>
                    <li><a href="<?php echo site_url('backoffice/admin/getTvDiffere')?>"><i class="fa fa-circle-o"></i>Liste des liens TV différé</a></li>


                </ul>
            </li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Panel Etudiants</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('backoffice/admin/newStudent')?>"><i class="fa fa-circle-o"></i> Ajouter un étudiant</a></li>
                    <li><a href="<?php echo site_url('backoffice/admin/getStudent')?>"><i class="fa fa-circle-o"></i> Liste des étudiants</a></li>
                    <!--   <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                           <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
                   </ul>
               </li>




            <li class="treeview">
                <a href="#">
                    <i class="fa fa-graduation-cap"></i> <span>Panel Cours</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">


                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Matière(s) <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newMatiere')?>"><i class="fa fa-asterisk"></i> Créer une matière  </a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getMatiere')?>"><i class="fa fa-asterisk"></i> liste des matières </a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Package(s) <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newPackage')?>"><i class="fa fa-asterisk"></i> Créer un package  </a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getPackage')?>"><i class="fa fa-asterisk"></i> liste des packages </a></li>

                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Cour(s) <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newCours')?>"><i class="fa fa-asterisk"></i> Créer un cours  </a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getCours')?>"><i class="fa fa-asterisk"></i> liste des cours </a></li>

                        </ul>
                    </li>



                </ul>
            </li>





               <li class="treeview">
                   <a href="#">
                       <i class="fa fa-laptop"></i>
                       <span>Boutique</span>
                       <i class="fa fa-angle-left pull-right"></i>
                   </a>
                   <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-circle-o"></i> 1 </a></li>
                       <li><a href="#"><i class="fa fa-circle-o"></i> 2 </a></li>
                       <li><a href="#"><i class="fa fa-circle-o"></i> 3 </a></li>
                       <li><a href="#"><i class="fa fa-circle-o"></i> 4 </a></li>
                       <li><a href="#"><i class="fa fa-circle-o"></i> 5 </a></li>
                       <li><a href="#"><i class="fa fa-circle-o"></i> 6 </a></li>
                   </ul>
               </li>
            <!-- <li class="treeview">
                   <a href="#">
                       <i class="fa fa-edit"></i> <span>Forms</span>
                       <i class="fa fa-angle-left pull-right"></i>
                   </a>
                   <ul class="treeview-menu">
                       <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                       <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                       <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                   </ul>
               </li> -->
            <!--   <li class="treeview">
                   <a href="#">
                       <i class="fa fa-table"></i> <span>Tables</span>
                       <i class="fa fa-angle-left pull-right"></i>
                   </a>
                   <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                       <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
                   </ul>
               </li>-->
               <li>
                   <a href="#">
                       <i class="fa fa-comments"></i> <span>Forum</span>
                       <!--   <small class="label pull-right bg-red">3</small>  -->
                      </a>
                  </li>
               <!-- <li>
                     <a href="pages/mailbox/mailbox.html">
                         <i class="fa fa-envelope"></i> <span>Mailbox</span>
                         <small class="label pull-right bg-yellow">12</small>
                     </a>
                 </li> -->
             <!-- <li class="treeview">
                  <a href="#">
                      <i class="fa fa-folder"></i> <span>Examples</span>
                      <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                      <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                      <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                      <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                      <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                      <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                      <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                      <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                  </ul>
              </li> -->
               <li class="treeview">
                   <a href="#">
                       <i class="fa fa-file-o"></i> <span>Interfaces</span>
                       <i class="fa fa-angle-left pull-right"></i>
                   </a>
                   <ul class="treeview-menu">

                       <li><a href="#"><i class="fa fa-circle-o"></i> Accueil </a></li>
                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Notre Espace <i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                               <li><a href="#"><i class="fa fa-asterisk"></i> Présentation</a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Organisation</a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Partenaires</a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Intranet</a></li>
                           </ul>
                       </li>

                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Evangélisation <i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                               <li><a href="#"><i class="fa fa-asterisk"></i> Télévision </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Radio </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Direct/live </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Différé/Replay</a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Témoignages</a></li>
                           </ul>
                       </li>

                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Education et Formation <i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                               <li><a href="#"><i class="fa fa-asterisk"></i> Ecole en ligne</a></li>
                               <li>
                                   <a href="#"><i class="fa fa-asterisk"></i> Bibliothèque <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                       <li><a href="#"><i class="fa fa-hand-o-right"></i> Livres numerisés</a></li>
                                       <li><a href="#"><i class="fa fa-hand-o-right"></i> Video</a></li>
                                       <li><a href="#"><i class="fa fa-hand-o-right"></i> Audio</a></li>
                                   </ul>
                               </li>
                           </ul>
                       </li>
                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Prière <i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                               <li><a href="#"><i class="fa fa-asterisk"></i> Textes </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Vidéo/Audio </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Intentions </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Exercices</a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Eglise</a></li>
                           </ul>
                       </li>
                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Echange <i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                               <li><a href="#"><i class="fa fa-asterisk"></i> Ecoute </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Appel </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Chat </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Forum</a></li>

                           </ul>
                       </li>
                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Jeunesse <i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                               <li><a href="#"><i class="fa fa-asterisk"></i> Musique </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Prière </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Livres </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Jeux </a></li>

                           </ul>
                       </li>

                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Loisirs <i class="fa fa-angle-left pull-right"></i></a>

                           <ul class="treeview-menu">

                               <li><a href="#"><i class="fa fa-asterisk"></i> Musique </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Humour </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Vidéo </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Sports </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Sports </a></li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Sports </a></li>


                           </ul>
                       </li>
                   </ul>
               </li>
               <!--<li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
               <li class="header">LABELS</li>
               <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
               <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
               <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
           </ul>
       </section>
       <!-- /.sidebar -->
</aside>


<!-- Content Header (Page header) -->
