


  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image" style="height: 20px">
                <!--    <img src="#" class="img-circle" alt="User Image"> -->
            </div>
         <!--   <div class="pull-left info">
                <p>
                    <?php
                  /*    if($this->session->userdata['id_admin_session'])
                      {
                          echo $this->session->userdata['email_admin_session'];
                      }*/
                    ?>
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>-->
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
                    <i class="fa fa-tachometer"></i> <span>Dashboard</span>
                    <!--   <small class="label pull-right bg-red">3</small>  -->
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('backoffice/admin/homeChat')?>">
                    <i class="fa fa-comments-o"></i> <span>Live chat</span>

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
                <a href="<?php // echo site_url('backoffice/admin/')?>">
                    <i class="fa fa-users"></i> <span>Accueil, Accompagnement</span>
                       <small class="label pull-right bg-light-blue"><?php echo $countVolunteer; ?></small>
                </a>
                <ul class="treeview-menu">

                       <li><a href="<?php echo site_url('backoffice/admin/newAccueilEcouteAccompagnement')?>"><i class="fa fa-circle-o"></i>Ajouter un membre</a></li>
                       <li><a href="<?php  echo site_url('backoffice/admin/getAccueilEcouteAccompagnement2')?>"><i class="fa fa-circle-o"></i>Liste des membres</a></li>
              <!--      <li><a href="<?php echo site_url('backoffice/admin/getAccueilEcouteAccompagnement')?>"><i class="fa fa-circle-o"></i>Liste des membres</a></li> -->

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-graduation-cap"></i> <span>Education et Formation</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i>Ecole en ligne <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Cours en direct<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newTvLive')?>"><i class="fa fa-hand-o-right"></i>Ajouter un lien</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getTvLive')?>"><i class="fa fa-hand-o-right"></i>Liste des liens</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Cours en différé<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newTvDiffere')?>"><i class="fa fa-hand-o-right"></i>Ajouter un lien</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getTvDiffere')?>"><i class="fa fa-hand-o-right"></i>Liste des liens</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Inscription des étudiants<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newStudent')?>"><i class="fa fa-hand-o-right"></i>Ajouter un étudiant</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getStudent')?>"><i class="fa fa-hand-o-right"></i>Liste des étudiants</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Plateforme d'exercices<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newExercice')?>"> <i class="fa fa-hand-o-right"></i>Ajouter un exercice</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getExercice') ?>"><i class="fa fa-hand-o-right"></i> Liste des exercices</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Forum<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newForumAdmin') ?>"><i class="fa fa-hand-o-right"></i> Ajouter un thème</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getForumAdmin') ?>"><i class="fa fa-hand-o-right"></i> Liste des thèmes</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Bibliothèque<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newBook') ?>"><i class="fa fa-hand-o-right"></i> Ajouter un thème</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getBook') ?>"><i class="fa fa-hand-o-right"></i> Liste des thèmes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                  <!-- ==================================== second menu   ========================================================================-->
                   <!-- <li>
                        <a href="#"><i class="fa fa-circle-o"></i>Bibliothèque <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Livre numérique<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newBook') ?>"><i class="fa fa-hand-o-right"></i>Ajouter livre</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getBook') ?>"><i class="fa fa-hand-o-right"></i>Liste des livres</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Audio<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newAudio') ?>"><i class="fa fa-hand-o-right"></i> Ajouter un audio</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getAUdio') ?>"><i class="fa fa-hand-o-right"></i> Liste des audio</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

               </ul>
            </li>


        <!--    <li class="treeview">
                <a href="#">
                    <i class="fa fa-television"></i>
                    <span>TV live</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i>Ajouter un lien TV</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Liste des liens TV</a></li>


                </ul>
            </li>  -->




            <!--     <li class="treeview">
                <a href="#">
                    <i class="fa fa-television"></i>
                    <span>TV en différé</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i>Ajouter un lien TV différé</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Liste des liens TV différé</a></li>


                </ul>
            </li> -->



            <!--  <li class="treeview">
                    <a href="#">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Panel Etudiants</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i> Ajouter un étudiant</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i> Liste des étudiants</a></li>
                           <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                               <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                   </ul>
               </li> -->




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



                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Programme <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newProgram')?>"><i class="fa fa-asterisk"></i> Ajouter  </a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getProgram')?>"><i class="fa fa-asterisk"></i> liste </a></li>

                        </ul>
                    </li>



                </ul>
            </li>




            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Evangélisation</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <!--    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Télévision <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newEvangelisation_tv') ?>"><i class="fa fa-asterisk"></i> Ajouter un lien</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getEvangelisation_tv') ?>"><i class="fa fa-asterisk"></i> Liste des liens</a>
                        </ul>
                    </li>  -->
                <!--    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Radio <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newEvangelisationRadio') ?>"><i class="fa fa-asterisk"></i> Ajouter un lien radio</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getEvangelisationRadio') ?>"><i class="fa fa-asterisk"></i> Liste des liens radio</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> <!--Direct/live-->Enseignements <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newEvangelisationTvLive') ?>"><i class="fa fa-asterisk"></i> Ajouter un lien </a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getEvangelisationTvLive') ?>"><i class="fa fa-asterisk"></i> Liste des liens </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> <!--Différé/Replay--> Exhortation <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newEvangelisation_tv_differe') ?>"><i class="fa fa-asterisk"></i> Ajouter une vidéo</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getEvangelisationTvDiffere') ?>"><i class="fa fa-asterisk"></i> Liste des vidéos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> <!--Témoignages--> El-elyôn dans mon histoire <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newEvangelisationTemoignages') ?>"><i class="fa fa-asterisk"></i> Ajouter un témoignage</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getEvangelisationTemoignages') ?>"><i class="fa fa-asterisk"></i> Liste des témoignages</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Parole de la semaine <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newParole') ?>"><i class="fa fa-asterisk"></i> Ajouter du contenu audio</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/newParoleVideo') ?>"><i class="fa fa-asterisk"></i> Ajouter du contenu vidéo</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getParole') ?>"><i class="fa fa-asterisk"></i> Liste des contenus audio</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getParoleVideo') ?>"><i class="fa fa-asterisk"></i> Liste des contenus vidéo</a></li>
                        </ul>
                    </li>
                   <!-- <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Verset quotidien <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newVerset') ?>"><i class="fa fa-asterisk"></i> Ajouter verset slide 1</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/newVerset2') ?>"><i class="fa fa-asterisk"></i> Ajouter verset slide 2</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getVerset') ?>"><i class="fa fa-asterisk"></i> Liste des versets slide 1</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getVerset2') ?>"><i class="fa fa-asterisk"></i> Liste des versets slide 2</a></li>
                        </ul>
                    </li>-->
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Faire un don</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('backoffice/admin/donationListing')?>"><i class="fa fa-circle-o"></i> consultation</i></a>
                    </li>
                    <!-- <li>
                        <a href="<?php //echo site_url('backoffice/admin/paymentHistory')?>"><i class="fa fa-circle-o"></i> Historique des paiements</i></a>
                    </li> -->
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>Boutique</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Catégorie <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newCategory') ?>"><i class="fa fa-asterisk"></i> Ajouter une catégorie</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getCategory') ?>"><i class="fa fa-asterisk"></i> Liste des catégories</a>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Article <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newArticle') ?>"><i class="fa fa-asterisk"></i> Ajouter un article</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getArticle') ?>"><i class="fa fa-asterisk"></i> Liste des articles</a>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Carousel <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newCarousel') ?>"><i class="fa fa-asterisk"></i> Ajouter une image</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getCarousel') ?>"><i class="fa fa-asterisk"></i> Liste des images</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo site_url('backoffice/admin/historyCommand') ?>"><i class="fa fa-circle-o"></i> commandes </a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i>
                            Contacts
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newContactService') ?>"><i class="fa fa-asterisk"></i> Ajouter contact</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getContactService') ?>"><i class="fa fa-asterisk"></i> Liste des contacts</a></li>
                        </ul>
                    </li>


                    <!--<li>
                        <a href="<?php  // echo site_url('backoffice/admin/historyInvoice') ?>"><i class="fa fa-circle-o"></i> historique des factures </a>
                    </li>-->

                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>Gestion des bannières</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> présentation <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerPresentation') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerPresentation') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Organisation <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerOrganisation') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerOrganisation') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Partenaires <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerPartners') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerPartners') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Parole de la semaine <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerSpeech') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerSpeech') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Enseignements <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerEnseignements') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerEnseignements') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Exhortation <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerExhortation') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerExhortation') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> El-elyon dans mon histoire <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerElelyon') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerElelyon') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Formation <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerFormation') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerFormation') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Faire un don <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerDonate') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerDonate') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Echange - Ecoute <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerEchangeEcoute') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerEchangeEcoute') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Echange - Forum <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerEchangeForum') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerEchangeForum') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> jeunesse petits prières <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerJeunessePetitsPrieres') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerJeunessePetitsPrieres') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> jeunesse petits livres <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerJeunessePetitsLivres') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerJeunessePetitsLivres') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> jeunesse petits musiques <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerJeunessePetitsMusiques') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerJeunessePetitsMusiques') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>

                    <!--<li>
                        <a href="#"><i class="fa fa-circle-o"></i> jeunesse petits jeux <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newBannerJeunessePetitsJeux') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getBannerJeunessePetitsJeux') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>-->


                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> jeunesse grands prières <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerJeunesseGrandsPrieres') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerJeunesseGrandsPrieres') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> jeunesse grands livres <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerJeunesseGrandsLivres') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerJeunesseGrandsLivres') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> jeunesse grands musiques <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerJeunesseGrandsMusiques') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerJeunesseGrandsMusiques') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>


                    <!--<li>
                        <a href="#"><i class="fa fa-circle-o"></i> jeunesse grands jeux <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newBannerJeunesseGrandsJeux') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getBannerJeunesseGrandsJeux') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li> -->



                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> loisir - musique <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerLoisirMusique') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerLoisirMusique') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> loisir - humour <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerLoisirHumour') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerLoisirHumour') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> loisir - bien-être <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerLoisirBienEtre') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerLoisirBienEtre') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> loisir - petites-annonces <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerLoisirPetitesAnnonces') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerLoisirPetitesAnnonces') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> nos conditions <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerCondition') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerCondition') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> programme <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newBannerProgram') ?>"><i class="fa fa-asterisk"></i> Ajouter une bannière</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getBannerProgram') ?>"><i class="fa fa-asterisk"></i> Liste des bannières</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i> <span><!--Prière--> Ressources</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Bibliothèque <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newPrierePartage')?>"><i class="fa fa-asterisk"></i> Ajouter une prière  </a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getPrierePartage')?>"><i class="fa fa-asterisk"></i> liste des prières </a></li>

                        </ul>
                    </li>
                <!--    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Prière à partager <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newPrierePartage')?>"><i class="fa fa-asterisk"></i> Ajouter une prière  </a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getPrierePartage')?>"><i class="fa fa-asterisk"></i> liste des prières </a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> intention de prière <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newPriereIntention')?>"><i class="fa fa-asterisk"></i> Ajouter une intention  </a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getPriereIntention')?>"><i class="fa fa-asterisk"></i> liste des intentions </a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Exercice <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newPriereExercice')?>"><i class="fa fa-asterisk"></i> Ajouter une intention  </a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getPriereExercice')?>"><i class="fa fa-asterisk"></i> liste des intentions </a></li>

                        </ul>
                    </li>-->
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Jeunesse</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!--  <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Nos jeunes prophètes <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Musique<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newGrandPropheteMusique')?>"><i class="fa fa-hand-o-right"></i>Ajouter une musique</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getGrandPropheteMusique')?>"><i class="fa fa-hand-o-right"></i>Liste des musiques</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Prière<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newGrandProphetePriere')?>"><i class="fa fa-hand-o-right"></i>Ajouter une prière</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getGrandProphetePriere')?>"><i class="fa fa-hand-o-right"></i>Liste des prières</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Livres<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newGrandPropheteLivre')?>"><i class="fa fa-hand-o-right"></i>Ajouter un livre</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getGrandPropheteLivre')?>"><i class="fa fa-hand-o-right"></i>Liste des livres</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Jeux<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newGrandPropheteJeux')?>"><i class="fa fa-hand-o-right"></i>Ajouter un jeux</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getGrandPropheteJeux')?>"><i class="fa fa-hand-o-right"></i>Liste des jeux</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Nos petits prophètes <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">

                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Musique<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newPetitPropheteMusique')?>"><i class="fa fa-hand-o-right"></i>Ajouter une musique</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getPetitPropheteMusique')?>"><i class="fa fa-hand-o-right"></i>Liste des musiques</a></li>
                                </ul>
                            </li>
                           <!--  <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Prière<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newPetitProphetePriere')?>"><i class="fa fa-hand-o-right"></i>Ajouter une prière</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getPetitProphetePriere')?>"><i class="fa fa-hand-o-right"></i>Liste des prières</a></li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Livres<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newPetitPropheteLivre')?>"><i class="fa fa-hand-o-right"></i>Ajouter un livre</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getPetitPropheteLivre')?>"><i class="fa fa-hand-o-right"></i>Liste des livres</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Jeux<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo site_url('backoffice/admin/newPetitPropheteJeux')?>"><i class="fa fa-hand-o-right"></i>Ajouter un jeux</a></li>
                                    <li><a href="<?php echo site_url('backoffice/admin/getPetitPropheteJeux')?>"><i class="fa fa-hand-o-right"></i>Liste des jeux</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-music"></i> <span>Loisirs</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Musique <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newLoisirsMusique')?>"><i class="fa fa-asterisk"></i> Ajouter du contenu  </a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getLoisirsMusique')?>"><i class="fa fa-asterisk"></i> liste des contenus  </a></li>

                        </ul>
                    </li>
                              <li>
                               <a href="#"><i class="fa fa-circle-o"></i> Humour <i class="fa fa-angle-left pull-right"></i></a>
                                       <ul class="treeview-menu">
                                           <li><a href="<?php echo site_url('backoffice/admin/newLoisirsHumour')?>"><i class="fa fa-asterisk"></i> Ajouter du contenu  </a></li>
                                           <li><a href="<?php echo site_url('backoffice/admin/getLoisirsHumour')?>"><i class="fa fa-asterisk"></i> liste des contenus  </a></li>
                                       </ul>
                                   </li>
                                <li>
                                   <a href="#"><i class="fa fa-circle-o"></i> Bien-être <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                       <li><a href="<?php echo site_url('backoffice/admin/newLoisirsBienEtre')?>"><i class="fa fa-asterisk"></i> Créer une matière  </a></li>
                                       <li><a href="<?php echo site_url('backoffice/admin/getLoisirsBienEtre')?>"><i class="fa fa-asterisk"></i> liste des matières </a></li>

                                   </ul>
                               </li>

                                <li>
                                    <a href="#"><i class="fa fa-circle-o"></i> Petites annonces <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo site_url('backoffice/admin/newLoisirsAnnonce')?>"><i class="fa fa-asterisk"></i> Créer une matière  </a></li>
                                        <li><a href="<?php echo site_url('backoffice/admin/getLoisirsAnnonce')?>"><i class="fa fa-asterisk"></i> liste des matières </a></li>

                                    </ul>
                                </li>
                </ul>
            </li>

            <!--   <li class="treeview">
                <a href="#">
                    <i class="fa fa fa-th"></i> <span>Boutique</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Article <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                          <li>
                                <a href=""><i class="fa fa-asterisk"></i>Catégories <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newArticle') ?>"><i class="fa fa-asterisk"></i> Ajouter un article</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getArticle') ?>"><i class="fa fa-asterisk"></i> Liste des articles</a></li>
                                </ul>
                            </li>
                            <li>


                           <li>
                                <a href=""><i class="fa fa-asterisk"></i>Catégories <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newBookCategory') ?>"><i class="fa fa-asterisk"></i> Ajouter une catégorie</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getBookCategory') ?>"><i class="fa fa-asterisk"></i> Liste des catégories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i> Articles  <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newBookProduct') ?>"><i class="fa fa-asterisk"></i> Ajouter un article</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getBookProduct') ?>"><i class="fa fa-asterisk"></i> Liste des articles</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i> Caractéristique Articles  <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/') ?>"><i class="fa fa-asterisk"></i> Ajouter </a></li>
                                    <li><a href="<?php // echo site_url('backoffice/admin/') ?>"><i class="fa fa-asterisk"></i> Liste </a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> MP3 <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href=""><i class="fa fa-asterisk"></i>Catégories <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newMp3Category') ?>"><i class="fa fa-asterisk"></i> Ajouter une catégorie</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getMp3Category') ?>"><i class="fa fa-asterisk"></i> Liste des catégories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i> Article  <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newMp3Article') ?>"><i class="fa fa-asterisk"></i> Ajouter un article</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getMp3Article') ?>"><i class="fa fa-asterisk"></i> Liste des articles</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> CD <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href=""><i class="fa fa-asterisk"></i>Catégories <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newCDCategory') ?>"><i class="fa fa-asterisk"></i> Ajouter une catégorie</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getCDCategory') ?>"><i class="fa fa-asterisk"></i> Liste des catégories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i> Article  <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newCDArticle') ?>"><i class="fa fa-asterisk"></i> Ajouter un article</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getCDArticle') ?>"><i class="fa fa-asterisk"></i> Liste des articles</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Articles divers <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href=""><i class="fa fa-asterisk"></i>Catégories <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newArticlesDiversCategory') ?>"><i class="fa fa-asterisk"></i>Ajouter une catégorie</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getArticlesDiversCategory') ?>"><i class="fa fa-asterisk"></i>Liste des catégories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i> Articles  <i class="fa fa-angle-left pull-right"></i></a>

                                <ul class="treeview-menu">
                                    <li><a href="<?php //echo site_url('backoffice/admin/newArticlesDiversArticle') ?>"><i class="fa fa-asterisk"></i> Ajouter un article</a></li>
                                    <li><a href="<?php //echo site_url('backoffice/admin/getArticlesDiversArticle') ?>"><i class="fa fa-asterisk"></i> Liste des articles</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>-->




               <li class="treeview">
                   <a href="#">
                       <i class="fa fa-file-o"></i> <span>Interfaces</span>
                       <i class="fa fa-angle-left pull-right"></i>
                   </a>
                   <ul class="treeview-menu">




                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Page d'accueil <i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                               <li>
                                   <a href=""><i class="fa fa-asterisk"></i>A propos de l'intuition <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                       <li><a href="<?php echo site_url('backoffice/admin/newIntuition') ?>"><i class="fa fa-asterisk"></i> Ajouter du contenu</a></li>
                                       <li><a href="<?php echo site_url('backoffice/admin/getIntuition') ?>"><i class="fa fa-asterisk"></i> Liste des contenus</a></li>
                                   </ul>
                               </li>


                           </ul>
                       </li>

                       <li>
                           <a href="#"><i class="fa fa-circle-o"></i> Bienvenue <i class="fa fa-angle-left pull-right"></i></a>
                           <ul class="treeview-menu">
                               <li>
                                   <a href=""><i class="fa fa-asterisk"></i>Présentation <i class="fa fa-angle-left pull-right"></i></a>

                                   <ul class="treeview-menu">
                                       <li><a href="<?php echo site_url('backoffice/admin/newInterfaceBienvenue') ?>"><i class="fa fa-asterisk"></i> Ajouter du contenu</a></li>
                                       <li><a href="<?php echo site_url('backoffice/admin/getInterfaceBienvenue') ?>"><i class="fa fa-asterisk"></i> Liste des contenus</a></li>
                                   </ul>
                               </li>
                               <li>
                                   <a href="#"><i class="fa fa-asterisk"></i> Organisation  <i class="fa fa-angle-left pull-right"></i></a>

                                   <ul class="treeview-menu">
                                       <li><a href="<?php echo site_url('backoffice/admin/newInterfaceOrganisation') ?>"><i class="fa fa-asterisk"></i> Ajouter du contenu</a></li>
                                       <li><a href="<?php echo site_url('backoffice/admin/getInterfaceOrganisation') ?>"><i class="fa fa-asterisk"></i> Liste des contenus</a></li>
                                   </ul>
                               </li>
                               <li><a href="#"><i class="fa fa-asterisk"></i> Partenaires <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                   <!--<li><a href="<?php // echo site_url('backoffice/admin/newInterfacePartenaires') ?>"><i class="fa fa-asterisk"></i> Ajouter un logo</a></li>
                                       <li><a href="<?php //echo site_url('backoffice/admin/getInterfacePartenaires') ?>"><i class="fa fa-asterisk"></i> Liste des logos</a></li> -->
                                       <li><a href="<?php echo site_url('backoffice/admin/newContentPartenaires') ?>"><i class="fa fa-asterisk"></i> Ajouter du contenu</a></li>
                                       <li><a href="<?php echo site_url('backoffice/admin/getContentPartenaires') ?>"><i class="fa fa-asterisk"></i> Liste des contenus</a></li>

                                   </ul>
                               </li>

                           </ul>
                       </li>
                       <li class="treeview">
                           <a href="#">
                               <i class="fa fa-th"></i> <span>Echange</span>
                               <i class="fa fa-angle-left pull-right"></i>
                           </a>
                           <ul class="treeview-menu">
                           <!-- <li>
                                   <a href="#"><i class="fa fa-circle-o"></i> Ecoute <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                       <li><a href="<?php //echo site_url('backoffice/admin/newEchangeEcouteContent')?>"><i class="fa fa-asterisk"></i> Ajouter du contenu  </a></li>
                                       <li><a href="<?php //echo site_url('backoffice/admin/getEchangeEcouteContent')?>"><i class="fa fa-asterisk"></i> liste des contenus  </a></li>

                                   </ul>
                               </li> -->
                           <!-- <li>
                                   <a href="#"><i class="fa fa-circle-o"></i> Chat <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                       <li><a href="<?php //echo site_url('backoffice/admin/newEchangeEcoute')?>"><i class="fa fa-asterisk"></i> Commenter  </a></li>
                                   </ul>
                               </li> -->
                               <li>
                                   <a href="#"><i class="fa fa-circle-o"></i> Forum <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                       <li><a href="<?php echo site_url('backoffice/admin/newEchangeForum')?>"><i class="fa fa-asterisk"></i> Ajouter   </a></li>
                                       <li><a href="<?php echo site_url('backoffice/admin/getEchangeForum')?>"><i class="fa fa-asterisk"></i> liste des contenus </a></li>

                                   </ul>
                               </li>
                           </ul>
                       </li>


                       <!--       <li>
                                   <a href="#"><i class="fa fa-circle-o"></i> Evangélisation <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                       <li><a href="#"><i class="fa fa-asterisk"></i> Télévision </a></li>
                                       <li><a href="#"><i class="fa fa-asterisk"></i> Radio </a></li>
                                       <li><a href="#"><i class="fa fa-asterisk"></i> Direct/live </a></li>
                                       <li><a href="#"><i class="fa fa-asterisk"></i> Différé/Replay</a></li>
                                       <li><a href="#"><i class="fa fa-asterisk"></i> Témoignages</a></li>
                                   </ul>
                               </li> -->

                           <!--        <li>
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
                           </li>-->

                           <!--   <li class="treeview">
                           <a href="#">
                               <i class="fa fa-th"></i> <span>Gestion des bannières</span>
                               <i class="fa fa-angle-left pull-right"></i>
                           </a>
                           <ul class="treeview-menu">
                               <li>
                                   <a href="#"><i class="fa fa-circle-o"></i> Bienvenue <i class="fa fa-angle-left pull-right"></i></a>
                                   <ul class="treeview-menu">
                                       <li>
                                           <a href="#"><i class="fa fa-asterisk"></i>Présentation<i class="fa fa-angle-left pull-right"></i></a>
                                           <ul class="treeview-menu">
                                               <li><a href="<?php ///echo site_url('backoffice/admin/newTvLive')?>"><i class="fa fa-hand-o-right"></i>Ajouter un lien</a></li>
                                               <li><a href="<?php ///echo site_url('backoffice/admin/getTvLive')?>"><i class="fa fa-hand-o-right"></i>Liste des liens</a></li>
                                           </ul>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-asterisk"></i>Organisation<i class="fa fa-angle-left pull-right"></i></a>
                                           <ul class="treeview-menu">
                                               <li><a href="<?php ///echo site_url('backoffice/admin/newTvDiffere')?>"><i class="fa fa-hand-o-right"></i>Ajouter un lien</a></li>
                                               <li><a href="<?php ///echo site_url('backoffice/admin/getTvDiffere')?>"><i class="fa fa-hand-o-right"></i>Liste des liens</a></li>
                                           </ul>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-asterisk"></i>Partenaires<i class="fa fa-angle-left pull-right"></i></a>
                                           <ul class="treeview-menu">
                                               <li><a href="<?php ///echo site_url('backoffice/admin/newStudent')?>"><i class="fa fa-hand-o-right"></i>Ajouter un étudiant</a></li>
                                               <li><a href="<?php ///echo site_url('backoffice/admin/getStudent')?>"><i class="fa fa-hand-o-right"></i>Liste des étudiants</a></li>
                                           </ul>
                                       </li>
                                   </ul>
                               </li>
                              <li>
                        <a href="#"><i class="fa fa-circle-o"></i>Evangélisation et édification <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Parole de la semaine<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php ///echo site_url('backoffice/admin/new') ?>"><i class="fa fa-hand-o-right"></i>Ajouter livre</a></li>
                                    <li><a href="<?php ///echo site_url('backoffice/admin/get') ?>"><i class="fa fa-hand-o-right"></i>Liste des livres</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Enseignements<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php ///echo site_url('backoffice/admin/new') ?>"><i class="fa fa-hand-o-right"></i> Ajouter un audio</a></li>
                                    <li><a href="<?php ///echo site_url('backoffice/admin/get') ?>"><i class="fa fa-hand-o-right"></i> Liste des audio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>Exortation<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php ///echo site_url('backoffice/admin/new') ?>"><i class="fa fa-hand-o-right"></i> Ajouter un audio</a></li>
                                    <li><a href="<?php ///echo site_url('backoffice/admin/get') ?>"><i class="fa fa-hand-o-right"></i> Liste des audio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-asterisk"></i>El-elyon dans mon histoire<i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php ///echo site_url('backoffice/admin/new') ?>"><i class="fa fa-hand-o-right"></i> Ajouter un audio</a></li>
                                    <li><a href="<?php ///echo site_url('backoffice/admin/get') ?>"><i class="fa fa-hand-o-right"></i> Liste des audio</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                         </ul>
                       </li> -->

           </ul>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Gestion des slides</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
               <!--     <li>
                        <a href="#"><i class="fa fa-circle-o"></i> slide N°1 <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newSlideOne') ?>"><i class="fa fa-asterisk"></i> Ajouter un contenu</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getSlideOne') ?>"><i class="fa fa-asterisk"></i> Liste des contenus</a>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> slide N°2 <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php //echo site_url('backoffice/admin/newSlideTwo') ?>"><i class="fa fa-asterisk"></i> Ajouter un contenu</a></li>
                            <li><a href="<?php //echo site_url('backoffice/admin/getSlideTwo') ?>"><i class="fa fa-asterisk"></i> Liste des contenus</a>
                        </ul>
                    </li> -->

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> slides <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('backoffice/admin/newSlide') ?>"><i class="fa fa-asterisk"></i> Ajouter un contenu</a></li>
                            <li><a href="<?php echo site_url('backoffice/admin/getSlide') ?>"><i class="fa fa-asterisk"></i> Liste des contenus</a>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                <a href="<?php echo site_url('backoffice/Admin/transactions')?>">
                    <i class="fa fa-money"></i> <span>historique des transactions</span>
                </a>
            </li>
       </section>
       <!-- /.sidebar -->
</aside>


<!-- Content Header (Page header) -->
