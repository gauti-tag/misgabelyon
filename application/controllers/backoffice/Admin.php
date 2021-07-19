<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('security');

        $this->load->helper('custum');
        $this->load->model('User_model', 'user');
        $this->load->model('Inscriptions_model', 'inscription');
        $this->load->model('Utilisateur_model', 'utilisateur');
        $this->load->model('LiveTv_model', 'livetv');
        $this->load->model('Package_model', 'package');
        $this->load->model('Matiere_model', 'matiere');
        $this->load->model('Cours_model', 'cours');
        $this->load->model('Volunteer_model', 'volunteer');
        $this->load->model('TvDiffere_model', 'tvdiffere');
        $this->load->model('ForumAdmin_model', 'forumA');
        $this->load->model('Audio_model', 'audio');
        $this->load->model('Exercices_model', 'exercice');
        $this->load->model('NumericBook_model', 'book');
        $this->load->model('Evangelisation_television_model', 'evangelisation_tv');
        $this->load->model('Evangelisation_tv_differe_model', 'evangelisation_tv_differe');
        $this->load->model('Evangelisation_temoignages_model', 'evangelisation_temoignages');
        $this->load->model('Evangelisation_radio_model', 'evangelisation_radio');
        $this->load->model('Evangelisation_tv_live_model', 'evangelisation_tv_live');
        $this->load->model('Interface_bienvenue', 'bienvenue');
        $this->load->model('Interface_organisation_model', 'organisation');
        $this->load->model('Interface_partenaires_model', 'partenaires');
        $this->load->model('Slide_one_model', 'slide_one');
        $this->load->model('Slide_two_model', 'slide_two');
        $this->load->model('Pays_model', 'pays');
        $this->load->model('Boutique_livre_categorie_model', 'categoryBook');
        $this->load->model('Boutique_livre_article_model', 'articleBook');
        $this->load->model('Boutique_mp3_categorie_model', 'categoryMp3');
        $this->load->model('Boutique_mp3_article_model', 'articleMp3');
        $this->load->model('Boutique_cd_categorie_model', 'categoryCD');
        $this->load->model('Boutique_cd_article_model', 'articleCD');
        $this->load->model('Boutique_articles_diverses_categorie_model', 'categoryArticlesDivers');
        $this->load->model('Boutique_articles_diverses_article_model', 'articleArticlesDivers');
        $this->load->model('Status_model', 'status');
        $this->load->model('Status_student_model', 'status_student');
        $this->load->model('Jours_model', 'jours');
        $this->load->model('Evangelisation_parole_model', 'parole');
        $this->load->model('Evangelisation_verset_model', 'verset');
        $this->load->model('Evangelisation_verset_two_model', 'verset2');
        $this->load->model('Evangelisation_parole_video_model', 'parole_video');
        $this->load->model('Articles_model', 'article');
        $this->load->model('Categories_model','categories');
        $this->load->model('Boutique_carousel_model','carousel');
        $this->load->model('Echange_forum_model','echange_forum');
        $this->load->model('Priere_excercice_model','priere_exercice');
        $this->load->model('Priere_partage_model','priere_partage');
        $this->load->model('Priere_intention_model','priere_intention');
        $this->load->model('Banner_presentation_model','banner_presentation');
        $this->load->model('Banner_organisation_model','banner_organisation');
        $this->load->model('Banner_partners_model','banner_partners');
        $this->load->model('Banner_parole_model','banner_parole');
        $this->load->model('Banner_enseignement_model','banner_enseignement');
        $this->load->model('Banner_exhortation_model','banner_exhortation');
        $this->load->model('Banner_elyon_model','banner_elyon');
        $this->load->model('Banner_formation_model','banner_formation');
        $this->load->model('Banner_don_model','banner_don');
        $this->load->model('Content_partenaire_model','content_partenaire');
        $this->load->model('Don_model', 'don');
        $this->load->model('Payment_history_model', 'payment_history');
        $this->load->model('Exercice_priere_model', 'exercice_priere');
        $this->load->model('Jeunesse_priere_jeune_model', 'jeunesse_priere_jeune');
        $this->load->model('Jeunesse_priere_petit_model', 'jeunesse_priere_petit');
        $this->load->model('Jeunesse_livre_jeune_model', 'jeunesse_livre_jeune');
        $this->load->model('Jeunesse_livre_petit_model', 'jeunesse_livre_petit');
        $this->load->model('Clients_model','clients');
        $this->load->model('Details_command_model','details_commands');
        $this->load->model('Command_model','command');
        $this->load->model('Addresses_clients_model','address_client');
        $this->load->model('History_transaction_model','transaction');
        $this->load->model('Echange_ecoute_model','echange_ecoute');
        $this->load->model('Banner_echange_ecoute_model','banner_ecoute');
        $this->load->model('Banner_echange_forum_model','banner_echange_forum');
        $this->load->model('Jeunesse_musique_petit_model','musique_petit');
        $this->load->model('Jeunesse_musique_grand_model','musique_grand');
        $this->load->model('Loisirs_musique_model','loisirs_musique');
        $this->load->model('Chat_model','chat');
        $this->load->model('Loisirs_humour_model','humour');
        $this->load->model('Loisirs_bien_etre_model','bien_etre');
        $this->load->model('Loisirs_annonce_model','annonce');
        $this->load->model('Month_model','month');
        $this->load->model('Programme_model','program');
        $this->load->model('Total_amount_commande_model','total_amount');
        $this->load->model('Banner_jeunesse_petits_priere_model','banner_jeunesse_petits_priere');
        $this->load->model('Banner_jeunesse_petits_livre_model','banner_jeunesse_petits_livre');
        $this->load->model('Banner_jeunesse_petits_musique_model','banner_jeunesse_petits_musique');
        $this->load->model('Banner_jeunesse_grands_priere_model','banner_jeunesse_grands_priere');
        $this->load->model('Banner_jeunesse_grand_livre_model','banner_jeunesse_grands_livre');
        $this->load->model('Banner_jeunesse_grand_musique_model','banner_jeunesse_grands_musique');
        $this->load->model('Banner_loisir_musique_model','banner_loisir_musique');
        $this->load->model('Banner_loisir_humour_model','banner_loisir_humour');
        $this->load->model('Banner_loisir_bien_etre_model','banner_loisir_bien_etre');
        $this->load->model('Banner_loisir_petites_annonces_model','banner_loisir_petites_annonce');
        $this->load->model('Banner_condition_model','banner_condition');
        $this->load->model('Banner_programme_model','banner_program');
        $this->load->model('Shop_number_service_model','number_service');
        $this->load->model('Slide_model','slide');
        $this->load->model('CommentForumAdmin_model','commentForumA');
        $this->load->model('Comment_echange_forum_model','comment_echange_forum');
        $this->load->model('Interface_intuition_model','intuition');


    }

  /*  public function menuLink4($label_menu, $label_sous_menu, $label_sous_sous_menu, $label_sous_sous_sous_menu)
    {
        $this->data['menu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_menu . '</span>';
        $this->data['sousMenu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_sous_menu . '</span>';
        $this->data['sousSousMenu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_sous_sous_menu . '</span>';
        $this->data['sousSousSousMenu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_sous_sous_sous_menu . '</span>';
    }

    public function menuLink3($label_menu, $label_sous_menu, $label_sous_sous_menu)
    {
        $this->data['menu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_menu . '</span>';
        $this->data['sousMenu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_sous_menu . '</span>';
        $this->data['sousSousMenu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_sous_sous_menu . '</span>';

    }

    public function menuLink2($label_menu, $label_sous_menu)
    {
        $this->data['menu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_menu . '</span>';
        $this->data['sousMenu'] = '<i style="font-size: 20px; padding-left: 10px; padding-right: 10px" class="fa fa-arrow-circle-right"></i><span style="color: white; font-size: 20px; margin-top: 20px">' . $label_sous_menu . '</span>';

    }*/


    public function index()
    {
        if ($this->session->userdata('id_admin_session')) {

            // count students
            $data['countStudent'] = $this->inscription->compter(array('inscription_id'));

            // count volunteer
            $data['countVolunteer'] = $this->volunteer->compter(array('id_volunteer'));

            //count command
            $data['countCommand'] = $this->command->compter(array('id'));

            //count transaction
            $data['countTransaction'] = $this->transaction->compter(array('id'));

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft', $data);
            $this->load->view('backoffice/admin/home/mainHome', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'veillez vous connectez svp!');
            $this->index();

        }

    }

    public function login()
    {
        $this->load->view('backoffice/admin/login');
    }

    public function checkLogin()
    {

        $data['email_user'] = $this->input->post('email', true);
        $data['password_user'] = $this->input->post('password', true);


        $data['password_user'] = hash('md5',$data['password_user']);


        if (!empty($data['email_user']) and !empty($data['password_user'])) {

            $admin = $this->user->checkUser($data);

            if (count($admin) == 1) {

                $admin_session = array(
                    "id_admin_session" => $admin[0]['id_user'],
                    "email_admin_session" => $admin[0]['email_user'],
                    "name_admin_session" => $admin[0]['name_user']
                );

                $this->session->set_userdata($admin_session);

                $data['infoUser'] = $this->session->userdata('id_admin_session');

                if ($data['infoUser']) {

                    $this->index();

                } else {

                    $this->session->set_flashdata('error', 'votre session est desactivé');
                    redirect('administration/connectez-vous');

                }

            } else {

                $this->session->set_flashdata('error', 'Email ou mot de passe incorrect');
                redirect('administration/connectez-vous');
            }

        } else {

            $this->session->set_flashdata('error', 'veillez remplir correctement les champs');
            redirect('administration/connectez-vous');

        }
    }

    public function logOut()
    {
        if ($this->session->userdata('id_admin_session')) {
            $this->session->unset_userdata('id_admin_session');
            $this->session->sess_destroy();
            $this->login();

        } else {
            $this->login();
        }

    }

    public function newUser()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un utilisateur';
            $data['menu'] = array('Panel administration');
            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/user/newUser',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addUser()
    {
        if (adminLoggedIn()) {

            $data['nom_new_user'] = $this->input->post('nom', true);
            // $data['prenoms_new_user'] = $this->input->post('prenoms',true);
            $data['telephone_new_user'] = $this->input->post('telephone', true);
            $data['email_new_user'] = $this->input->post('email', true);
            $data['password_new_user'] = $this->input->post('password', true);


            $data['password_new_user'] = hash('md5',$data['password_new_user']);


            if (!empty($data['nom_new_user']) and !empty($data['telephone_new_user']) and !empty($data['email_new_user']) and !empty($data['password_new_user'])) {

                if (filter_var($data['email_new_user'], FILTER_VALIDATE_EMAIL)) {
                    /**
                     * Verify, configuration and  upload picture from user
                     */

                    // code here to upload image profile

                    $addUser = array(
                        "name_user" => $data['nom_new_user'],
                        "phone_user" => $data['telephone_new_user'],
                        "email_user" => $data['email_new_user'],
                        "password_user" => $data['password_new_user']
                    );

                    /**
                     * check user information
                     */

                    $checkUserInfo = $this->user->checkUser(array('email_user'=>$addUser['email_user']));


                    if(count($checkUserInfo) == 1)
                    {


                        $this->session->set_flashdata('error_new_user', 'Désolé! vous êtes déjà inscrit!');
                        $this->newUser();


                    }else{

                        $resultAddStudent = $this->user->create($addUser);

                        if ($resultAddStudent) {

                            $this->session->set_flashdata('success_new_user', 'Inscription éffectuée!');
                            $this->newUser();

                        } else {

                            $this->session->set_flashdata('error_new_user', 'Inscription echouée!');
                            $this->newUser();

                        }

                    }


                } else {

                    $this->session->set_flashdata('error_new_user', 'Veillez verifier l\'adresse email svp!');
                    $this->newUser();

                }


            } else {


                $this->session->set_flashdata('error_new_user', 'Veillez remplir correctement le formulaire svp!');
                $this->newUser();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getUser()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des utilisateurs';
            $data['menu'] = array('Panel administration');
            $data['allUser'] = $this->user->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/user/getUser', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }


    }

    public function editUser($id_user)
    {

        if (adminLoggedIn()) {

            if (isset($id_user) and !empty($id_user)) {

                $data['user'] = $this->user->checkDataByKey($id_user, 'id_user');
                $data['titre'] = 'Modifier un utilisateur';
                $data['menu'] = array('Panel administration');

                if (count($data['user']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/user/editUser',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                } else {

                    // $this->session->set_flashdata('error_get_user','Erreur donnée indisponible!');
                    // $this->getUser();

                }


            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function upDateUser()
    {

        if (adminLoggedIn()) {

            $data['upDateUserNom'] = $this->input->post('nom', true);
            $data['upDateUserTelephone'] = $this->input->post('telephone', true);
            $data['upDateUserEmail'] = $this->input->post('email', true);
            $data['upDateUserPassword'] = $this->input->post('password', true);

            $idUserUpDate = $this->input->post('idUserUpDate', true);

            if (!empty($data['upDateUserNom']) and !empty($data['upDateUserTelephone']) and !empty($data['upDateUserEmail']) and !empty($data['upDateUserPassword'])) {

                $updateUser = array(

                    "name_user" => $data['upDateUserNom'],
                    "phone_user" => $data['upDateUserTelephone'],
                    "email_user" => $data['upDateUserEmail'],
                    "password_user" => $data['upDateUserPassword'],
                    "date_modif_user" => date('Y-m-d h:s:i')
                );

                $resultModifUser = $this->user->update(array('id_user' => $idUserUpDate), $updateUser);

                if ($resultModifUser) {


                    $this->session->set_flashdata('success_get_user', 'Modification effectuée avec success');
                    $this->getUser();


                } else {


                    $this->session->set_flashdata('error_get_user', 'Modification échouée');
                    $this->getUser();

                }

            } else {


                $this->session->set_flashdata('error_edit_user', 'Veillez remplir correctement le formulaire');
                $this->editUser();
            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function delUser()
    {

       /*$this->session->set_flashdata('error_get_user', 'impossible de supprimer l\'utilisateur!');
        $this->getUser();*/

          if(adminLoggedIn()){

              if($this->input->is_ajax_request()){

                  $this->input->post('id',true);
                  $idDelUser = $this->input->post('text',true);

                  if(!empty($idDelUser))

                      $idDelUserDecrypt = $this->encryption->decrypt($idDelUser);

                       $delUser = $this->user->delete(array('id_user'=>$idDelUserDecrypt));

                       if($delUser){

                                  echo 'suppression avec succes';
                       }else{

                               echo 'suppression echouée';
                       }

              }

        }else{
            $this->session->set_flashdata('error','Connectez vous svp!');
            $this->login();
        }
    }

    public function newTvLive()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un lien';
            $data['menu'] = array('Education et formation','Ecole en ligne','Cours live direct');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/tvLive/newTvLive',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addTvLive()
    {

        if (adminLoggedIn()) {

            $data['code_video_live'] = $this->input->post('code', true);
            $data['label_video_live'] = $this->input->post('libelle', true);
            $data['lien_video_live'] = $this->input->post('lien', true);
            $data['dateD_video_live'] = $this->input->post('dateD', true);
            $data['dateF_video_live'] = $this->input->post('dateF', true);
            $data['heure_video_live'] = $this->input->post('heure', true);
            $data['comment_video_live'] = $this->input->post('comment', true);
            $data['status_video_live'] = (int)$this->input->post('status', true);

            if (!empty($data['label_video_live']) and !empty($data['lien_video_live']) and !empty($data['comment_video_live'])) {

                if (filter_var($data['lien_video_live'], FILTER_VALIDATE_URL)) {

                    $addLiveTv = array(
                        "code_tv" => $data['code_video_live'],
                        "libelle_tv" => $data['label_video_live'],
                        "lien_tv" => $data['lien_video_live'],
                        "date_debut_tv" => $data['dateD_video_live'],
                        "date_fin_tv" => $data['dateF_video_live'],
                        "nb_heure_tv" => $data['heure_video_live'],
                        "commentaire_tv" => $data['comment_video_live'],
                        "status_tv" => (int)$data['status_video_live'],
                        "created_by_tv" => getAdminId()
                    );

                    // var_dump($addLiveTv); die;
                    /**
                     * check data by the link if it's already exist in database
                     */
                    //   $checkLiveTvData = $this->livetv->checkDataByKey($addLiveTv['lien_tv'], 'lien_tv');

                    $checkLiveTvData = $this->livetv->checkUser($addLiveTv);

                    if (count($checkLiveTvData) == 1) {

                        $this->session->set_flashdata('error_new_tv_video_live', 'cour déjà enregistré!');
                        $this->newTvLive();

                    } else {

                        $insertLiveTvData = $this->livetv->create($addLiveTv);

                        if ($insertLiveTvData) {

                            $this->session->set_flashdata('success_new_tv_video_live', 'Ajout affectué!');
                            $this->newTvLive();

                        } else {

                            $this->session->set_flashdata('error_new_tv_video_live', 'Ajout non effectué!');
                            $this->newTvLive();

                        }


                    }


                } else {

                    $this->session->set_flashdata('error_new_tv_video_live', 'Veillez verifier le lien vidéo svp!');
                    $this->newTvLive();
                }


            } else {

                $this->session->set_flashdata('error_new_tv_video_live', 'Veillez remplir correctement le formulaire svp!');
                $this->newTvLive();
            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function getTvLive()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des liens';
            $data['menu'] = array('Education et formation','Ecole en ligne','Cours live direct');

            $data['allTvLive'] = $this->livetv->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/tvLive/getTvLive', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        }
    }

    public function editLiveTv($id_Tv_Live)
    {

        if (adminLoggedIn()) {

            if (isset($id_Tv_Live) and !empty($id_Tv_Live)) {

                $data['Tv_Live'] = $this->livetv->checkDataByKey($id_Tv_Live, 'id_tv');

                if (count($data['Tv_Live']) == 1) {
                    $data['status'] = $this->status->read();
                    $data['titre'] = 'Modifier un lien';
                    $data['menu'] = array('Education et formation','Ecole en ligne','Cours live direct');


                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/tvLive/editTvLive', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                } else {

                    //  $this->session->set_flashdata('error_get_user','Erreur donnée indisponible!');
                    //  $this->getTvLive();

                }

            } else {


            }


        }

    }

    public function upDateLiveTv()
    {
        if (adminLoggedIn()) {

            $data['upDateTvLiveCode'] = $this->input->post('code', true);
            $data['upDateTvLiveLabel'] = $this->input->post('libelle', true);
            $data['upDateTvLiveLink'] = $this->input->post('lien', true);
            $data['upDateTvLiveDateDebut'] = $this->input->post('dateD', true);
            $data['upDateTvLiveDateFin'] = $this->input->post('dateF', true);
            $data['upDateTvLiveNombreHeure'] = $this->input->post('heure', true);
            $data['upDateTvLiveComment'] = $this->input->post('comment', true);
            $data['upDateTvLiveSatuts'] = (int)$this->input->post('status', true);

            $idTvLiveUpDate = $this->input->post('idTvLiveUpDate', true);
            //$this->livetv->checkDataByKey()
            if (!empty($data['upDateTvLiveLabel']) and !empty($data['upDateTvLiveLink']) and !empty($data['upDateTvLiveComment'])) {

                $upDate = array(

                    "code_tv" => $data['upDateTvLiveCode'],
                    "libelle_tv" => $data['upDateTvLiveLabel'],
                    "lien_tv" => $data['upDateTvLiveLink'],
                    "date_debut_tv" => $data['upDateTvLiveDateDebut'],
                    "date_fin_tv" => $data['upDateTvLiveDateFin'],
                    "nb_heure_tv" => $data['upDateTvLiveNombreHeure'],
                    "commentaire_tv" => $data['upDateTvLiveComment'],
                    "status_tv" => (int)$data['upDateTvLiveSatuts'],
                    "date_modif_tv" => date('Y-M-d h:i:sa'),
                    "modified_by_tv" => getAdminId()
                );

                $result = $this->livetv->update(array('id_tv' => $idTvLiveUpDate), $upDate);

                if ($result) {

                    $this->session->set_flashdata('success_new_tv_video_live', 'Modification effectuée avec success');
                    $this->getTvLive();

                } else {

                    $this->session->set_flashdata('error_new_tv_video_live', 'Modification échouée');
                    $this->getTvLive();

                }


            } else {

                $this->session->set_flashdata('error_new_tv_video_live', 'Veillez remplir tout les champs pour modifier!');
                $this->getTvLive();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteTvLive()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDelLiveTv = $this->input->post('text', true);

                if ($idDelLiveTv) {

                    $idDelLiveTvDecrypt = $this->encryption->decrypt($idDelLiveTv);

                    $delLiveTv = $this->livetv->delete(array('id_tv' => $idDelLiveTvDecrypt));

                    if ($delLiveTv) {


                    } else {


                    }

                } else {


                }


            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }

    public function newStudent()
    {
        if (adminLoggedIn()) {

            $data['pays'] = $this->pays->read();
            $data['titre'] = 'Ajouter étudiant';
            $data['menu'] = array('Education et formation','Ecole en ligne','Inscription des étudiants');

            $data['status_students'] = $this->status_student->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/students/newStudent', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addStudent()
    {

        if (adminLoggedIn()) {


            $data['nom_student'] = $this->input->post('nom', true);
            $data['prenoms_student'] = $this->input->post('prenoms', true);
            $data['telephone_student'] = $this->input->post('telephone', true);
            $data['email_student'] = $this->input->post('email', true);
            $data['status_student'] = (int)$this->input->post('status', true);
            $data['country_student'] = $this->input->post('country', true);
            $data['password_student'] = $this->input->post('password', true);


            $data['password_student'] = hash('md5',$data['password_student']);


            if (!empty($data['nom_student']) and !empty($data['prenoms_student']) and !empty($data['telephone_student']) and !empty($data['email_student']) and !empty($data['country_student'])) {

                if (filter_var($data['email_student'], FILTER_VALIDATE_EMAIL)) {

                    $addStudent = array(

                        "name" => $data['nom_student'],
                        "prenoms" => $data['prenoms_student'],
                        "mobile" => $data['telephone_student'],
                        "email" => $data['email_student'],
                        "status"=> $data['status_student'],
                        "password"=> $data['password_student'],
                        "pays" => $data['country_student'],
                        "created_by_user" => getAdminId()

                    );

                    $checkStudentInfo = $this->inscription->checkUser(array('email'=>$addStudent['email']));


                    if (count($checkStudentInfo) == 1) {

                        $this->session->set_flashdata('error_new_student', 'Etudiant déjà inscrit!');
                        $this->newStudent();


                    } else {

                        $resultAddStudent = $this->inscription->create($addStudent);

                        if ($resultAddStudent) {


                            $this->session->set_flashdata('success_new_student', 'Inscription validée');
                            $this->newStudent();


                        } else {


                            $this->session->set_flashdata('error_new_student', 'Inscription échouée');
                            $this->newStudent();


                        }
                    }


                } else {

                    $this->session->set_flashdata('error_new_student', 'email incorrect!');
                    $this->newStudent();

                }


            } else {

                $this->session->set_flashdata('error_new_student', 'Veillez remplir le formulaire svp!');
                $this->newStudent();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }


    }

    public function getStudent()
    {
        if (adminLoggedIn()) {


                $data['titre'] = 'Liste des étudiants';
                $data['menu'] = array('Education et formation','Ecole en ligne','Inscription des étudiants');
              /*  $data['allPays'] = $this->pays->read();
                $data['allStudents'] = $this->inscription->read();*/

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/students/getStudent', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function searchStudent()
    {

        $allPays = $this->pays->read();
        $query = ' ';

        if ($this->input->is_ajax_request()) {

            $query = $this->input->post('query', true);

        }

        $data = $this->inscription->searchQueryData($query,'inscription_id', 'name', 'email','pays');

        if ($data->num_rows() > 0):

            foreach ($data->result() as $row_student):

                ?>
                <tr>
                    <td> <?php echo $row_student->name ?></td>
                    <td><?php  echo $row_student->prenoms ?></td>
                    <td><?php  echo $row_student->email ?></td>
                    <td><?php  echo $row_student->mobile ?></td>
                    <td><?php  if($row_student->status == 1){statusSuccess('actif');}elseif ($row_student->status == 0){statusFailed('inactif');}  ?></td>
                    <td><?php  foreach ($allPays as $row_pays){ if ($row_pays->alpha2  == $row_student->pays){ echo $row_pays->nom_fr_fr;}} ?></td>
                    <td style="text-align: center"><?php if($row_student->link){ echo $row_student->link; }else{statusDefault('null');}   ?></td>
                    <td><?php  echo $row_student->dates ?></td>
                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/editStudent/'.$row_student->inscription_id) ?>">Editer</a></td>
                    <td style="text-align: center"><a class="btn btn-adn delStudent" href="javascript:void(0)" data-id="<?php  echo $row_student->inscription_id ?>" data-text="<?php echo $this->encryption->encrypt($row_student->inscription_id) ?>">Suprimer</a></td>
                </tr>
            <?php
            endforeach;
        else:
            ?>

            <tr>
                <td colspan="8" style="text-align: center">Aucune donnée trouvée</td>
            </tr>
        <?php
        endif;



    }

    public function editStudent($id_student)
    {
        if (adminLoggedIn()) {

            if (!empty($id_student) && isset($id_student)) {

                $data['titre'] = 'Modifier un étudiant';
                $data['menu'] = array('Education et formation','Ecole en ligne','Inscription des étudiants');

                $data['student'] = $this->inscription->checkDataByKey($id_student, 'inscription_id');
                $data['pays'] = $this->pays->read();
                $data['status_student'] = $this->status_student->read();

                if (count($data['student']) == 1){

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/students/editStudent', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }else{

                 //   $this->session->set_flashdata('error_get_student', 'Erreur donnée indisponible!');
                //    $this->getStudent();


                }


            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }


    }

    public function upDateStudent()
    {
        if (adminLoggedIn()) {
            $data['upDateStudentNom'] = $this->input->post('nom', true);
            $data['upDateStudentPrenoms'] = $this->input->post('prenoms', true);
            $data['upDateStudentTelephone'] = $this->input->post('telephone', true);
            $data['upDateStudentEmail'] = $this->input->post('email', true);
            $data['upDateStudentPays'] = $this->input->post('pays', true);
            $data['upDateStudentStatus'] = $this->input->post('status', true);

            $idStudentUpDate = $this->input->post('idStudentUpDate', true);

            if (!empty($data['upDateStudentNom']) and !empty($data['upDateStudentPrenoms']) and !empty($data['upDateStudentTelephone']) and !empty($data['upDateStudentEmail']) and !empty($data['upDateStudentPays'])) {

                $update = array(

                    "name" => $data['upDateStudentNom'],
                    "prenoms" => $data['upDateStudentPrenoms'],
                    "mobile" => $data['upDateStudentTelephone'],
                    "email" => $data['upDateStudentEmail'],
                    "pays" => $data['upDateStudentPays'],
                    "status" => $data['upDateStudentStatus'],
                    "date_modif_student" => date('Y-M-d h:i:sa'),
                    "modified_by_user" => getAdminId()
                );

                $result = $this->inscription->update(array("inscription_id" => $idStudentUpDate), $update);

                if ($result) {

                    $this->session->set_flashdata('success_get_student','Modification effectuée avec success');
                  // messageSuccess('success_get_student', 'Modification effectué avec success');
                    $this->getStudent();

                } else {

                    $this->session->set_flashdata('error_get_student', 'Modification échouée');
                    $this->getStudent();

                }

            } else {

                $this->session->set_flashdata('error_get_student', 'Veillez remplir tout les champs pour modifier!');
                $this->getStudent();


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteStudent()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDelStudent = $this->input->post('text', true);

                if (!empty($idDelStudent)) {
                    //  echo ('found');
                    $idDelStudentDecrypt = $this->encryption->decrypt($idDelStudent);

                    $checkStudent =  $this->inscription->delete(array('inscription_id' => $idDelStudentDecrypt));

                    if ($checkStudent) {

                        // $this->getStudent();

                    } else {

                        echo 'not deleted';

                    }

                } else {

                    echo('not found');

                }

            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function newPackage()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un package';
            $data['menu'] = array('Panel cours','Package(s)');

            $data['matiere'] = $this->matiere->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/packages/newPackage', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addPackage()
    {

        if (adminLoggedIn()) {

            $data['codePackage'] = $this->input->post('code', true);
            $data['nomPackage'] = strtoupper($this->input->post('nom', true));
            $data['matierePackage'] = $this->input->post('matiere_package', true);
            $data['tarifPackage'] = $this->input->post('tarif', true);

            if (isset($data['nomPackage'])) {

                $package = array(
                    'code_package' => $data['codePackage'],
                    'nom_package' => $data['nomPackage'],
                    'matiere_package' => $data['matierePackage'],
                    'tarif_package' => $data['tarifPackage'],
                    'admin_id' => getAdminId()
                );

                //  var_dump($package); die();

                //  $checkPackage = $this->package->checkDataByKey($data['nomPackage'],'nom_package');
                $checkPackage = $this->package->checkUser($package);

                if (!count($checkPackage) == 1) {

                    $insertPackage = $this->package->create($package);

                    if ($insertPackage) {

                        $this->session->set_flashdata('success_new_package', 'Package enregistré!');
                        $this->newPackage();


                    } else {

                        $this->session->set_flashdata('error_new_package', 'records échoué!');
                        $this->newPackage();
                    }


                } else {


                    $this->session->set_flashdata('error_new_package', 'Package déjà enregistré!');
                    $this->newPackage();

                }


            } else {


                $this->session->set_flashdata('error_new_package', 'Veillez remplir le formulaire svp!');
                $this->newPackage();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function getPackage()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des packages';
            $data['menu'] = array('Panel cours','Package(s)');
            $data['allPackage'] = $this->package->read();
            $data['allMatiere'] = $this->matiere->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/packages/getPackage', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editPackage($id_package)
    {
        if (adminLoggedIn()) {

            if (isset($id_package) and !empty($id_package)) {

                $data['titre'] = 'Modifier un package';
                $data['menu'] = array('Panel cours','Package(s)');

                $data['package'] = $this->package->checkDataByKey($id_package, 'id_package');

                $data['allMatiere'] = $this->matiere->read();

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop', $this->data);
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/packages/editPackage', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');


            }

        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDatePackage()
    {
        if (adminLoggedIn()) {

            $data['upDatePackageCode'] = $this->input->post('code', true);
            $data['upDatePackageNom'] = $this->input->post('nom', true);
            $data['upDatePackageMatiere'] = $this->input->post('matiere', true);
            $data['upDatePackageTarif'] = $this->input->post('tarif', true);

            $idUpDatePackage = $this->input->post('idPackageUpDate', true);

            if (!empty($data['upDatePackageCode']) and !empty($data['upDatePackageNom']) and !empty($data['upDatePackageMatiere']) and !empty($data['upDatePackageTarif'])) {


                $dataPackage = array(

                    'code_package' => $data['upDatePackageCode'],
                    'nom_package' => $data['upDatePackageNom'],
                    'matiere_package' => $data['upDatePackageMatiere'],
                    'tarif_package' => $data['upDatePackageTarif'],
                    'date_modif_package' => date('Y-m-d h:i:s'),
                    'modified_by_package' => getAdminId()

                );


                $upDatePackage = $this->package->update(array("id_package" => $idUpDatePackage), $dataPackage);

                if ($upDatePackage) {


                    $this->session->set_flashdata('success_get_package', 'Modification effectuée avec success');
                    $this->getPackage();


                } else {


                    $this->session->set_flashdata('error_get_package', 'Modification échouée');
                    $this->getPackage();


                }

            }

        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deletePackage()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDelPackage = $this->input->post('text', true);

                if (!empty($idDelPackage)) {

                    $idDelPackageDecrypt = $this->encryption->decrypt($idDelPackage);

                    $delPackage = $this->package->delete(array('id_package' => $idDelPackageDecrypt));


                    if ($delPackage) {


                    } else {


                    }


                } else {


                }


            }


        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function newMatiere()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une matière';
            $data['menu'] = array('Panel cours','Matière(s)');
            $data['package'] = $this->package->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/matiere/newMatiere', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addMatiere()
    {
        if (adminLoggedIn()) {

            $data['nomMatiere'] = strtoupper($this->input->post('matiere', true));
            $data['codeMatiere'] = $this->input->post('code', true);

            if (!empty($data['nomMatiere'])) {


                $matiere = array(

                    'nom_matiere' => $data['nomMatiere'],
                    'code_matiere' => $data['codeMatiere'],
                    'admin_id' => getAdminId()
                );

                //  $checkMatiere = $this->matiere->checkDataByKey($data['nomMatiere'],'nom_matiere');

                $checkMatiere = $this->matiere->checkUser($matiere);

                if (!count($checkMatiere) == 1) {

                    $insertMatiere = $this->matiere->create($matiere);

                    if ($insertMatiere) {

                        $this->session->set_flashdata('success_new_matiere', 'Matière enregistrée!');
                        $this->newMatiere();

                    } else {

                        $this->session->set_flashdata('success_new_matiere', 'records echoué!');
                        $this->newMatiere();
                    }

                } else {

                    $this->session->set_flashdata('error_new_matiere', 'matière déjà enregistrée!');
                    $this->newMatiere();

                }


            } else {

                $this->session->set_flashdata('error_new_matiere', 'Veillez remplir le champ matière svp!');
                $this->newMatiere();


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function getMatiere()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des matières';
            $data['menu'] = array('Panel cours','Matière(s)');
            $data['allMatiere'] = $this->matiere->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/matiere/getMatiere', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editMatiere($id_matiere)
    {

        if (adminLoggedIn()) {

            if (isset($id_matiere) and !empty($id_matiere)) {
                $data['titre'] = 'Modifier une matière';
                $data['menu'] = array('Panel cours','Matière(s)');
                $data['editDataMatiere'] = $this->matiere->checkDataByKey($id_matiere, 'id_matiere');

                if (count($data['editDataMatiere']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/matiere/editMatiere', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                } else {

                    //   $this->session->set_flashdata('error_get_matiere','Erreur donnée indisponible!');
                    //  $this->getMatiere();

                    echo 'not working ';
                }


            }


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateMatiere()
    {

        if (adminLoggedIn()) {

            $data['upDateMatiereCode'] = $this->input->post('code', true);
            $data['upDateMatiereNom'] = $this->input->post('matiere', true);
            $idUpDateMatiere = $this->input->post('idUpDateMatiere', true);

            if (!empty($data['upDateMatiereCode']) and !empty($data['upDateMatiereNom'])) {

                $dataMatiere = array(

                    'code_matiere' => $data['upDateMatiereCode'],
                    'nom_matiere' => $data['upDateMatiereNom'],
                    'date_modif_matiere' => date('Y-m-d h:s:i'),
                    'modified_by_matiere' => getAdminId()

                );



                $upDateMatiere = $this->matiere->update(array('id_matiere' => $idUpDateMatiere), $dataMatiere);

                if ($upDateMatiere) {


                    $this->session->set_flashdata('success_get_matiere', 'Modification effectuée avec success');
                    $this->getMatiere();

                } else {

                    $this->session->set_flashdata('error_get_matiere', 'Modification échouée');
                    $this->getMatiere();


                }

            } else {


            }

        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteMatiere()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDelMatiere = $this->input->post('text', true);

                if (!empty($idDelMatiere)) {

                    $idDelMatiereDecrypt = $this->encryption->decrypt($idDelMatiere);

                    $delMatiere = $this->matiere->delete(array('id_matiere' => $idDelMatiereDecrypt));

                    if ($delMatiere) {


                    } else {

                        echo('not deleted');
                    }

                } else {

                    echo 'not found ';
                }

            }

        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function newCours()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un cours';
            $data['menu'] = array('Panel cours','Cours');
            $data['matiere'] = $this->matiere->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/cours/newCours', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addCours()
    {

        if (adminLoggedIn()) {

            $data['codeCours'] = $this->input->post('codeCours', true);
            $data['nomCours'] = strtoupper($this->input->post('cours', true));
            $data['matiereCours'] = $this->input->post('matiere', true);
            $data['dateDebutCours'] = $this->input->post('date_debut', true);
            $data['dateFinCours'] = $this->input->post('date_fin', true);
            $data['heuresCours'] = $this->input->post('heures', true);

            if (!empty($data['nomCours']) and !empty($data['matiereCours'])) {

                $cours = array(

                    'code_cours' => $data['codeCours'],
                    'nom_cours' => $data['nomCours'],
                    'matiere_cours' => $data['matiereCours'],
                    'date_debut' => $data['dateDebutCours'],
                    'date_fin' => $data['dateFinCours'],
                    'nombre_heurs' => $data['heuresCours'],
                    'id_admin' => getAdminId()

                );

                //   $checkCours = $this->cours->checkDataByKey($data['nomCours'], 'nom_cours');
                $checkCours = $this->cours->checkUser($cours);

                if (count($checkCours) == 1) {


                    $this->session->set_flashdata('error_new_cours', 'le cours déjà enregistré!');
                    $this->newCours();

                } else {

                    $insertCours = $this->cours->create($cours);

                    if ($insertCours) {

                        $this->session->set_flashdata('success_new_cours', 'Cours enregistré!');
                        $this->newCours();

                    } else {

                        $this->session->set_flashdata('error_new_cours', 'records echoué!');
                        $this->newCours();

                    }


                }

            } else {


                $this->session->set_flashdata('error_new_cours', 'Veillez remplir le formulaire svp!');
                $this->newCours();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function getCours()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des cours';
            $data['menu'] = array('Panel cours','Cours');
            $data['allCours'] = $this->cours->read();
            $data['allMatiere'] = $this->matiere->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/cours/getCours', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

     public function editCours($id_cours)
    {
        if (adminLoggedIn()) {

            if (isset($id_cours) and !empty($id_cours)) {

                $data['cours'] = $this->cours->checkDataByKey($id_cours, 'id_cours');
                $data['allMatiere'] = $this->matiere->read();

                if (count($data['cours']) == 1) {

                    $data['titre'] = 'Modifier un cours';
                    $data['menu'] = array('Panel cours','Cours');

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/cours/editCours', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                } else {


                    echo 'not found edit page';


                }


            } else {

                echo 'not found id';
            }

        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateCours()
    {
        if (adminLoggedIn()) {

            $data['upDateCoursCode'] = $this->input->post('code', true);
            $data['upDateCoursNom'] = $this->input->post('nom', true);
            $data['upDateCoursMatiere'] = $this->input->post('matiere', true);
            $data['upDateCoursDateD'] = $this->input->post('dateD', true);
            $data['upDateCoursDateF'] = $this->input->post('dateF', true);
            $data['upDateCoursHeure'] = $this->input->post('heure', true);

            $idUpDateCours = (int)$this->input->post('idCoursUpDate', true);

            if (!empty($data['upDateCoursCode']) and !empty($data['upDateCoursNom']) and !empty($data['upDateCoursMatiere']) and !empty($data['upDateCoursDateD']) and !empty($data['upDateCoursDateF']) and !empty($data['upDateCoursHeure'])) {

                $dataCours = array(

                    'code_cours' => $data['upDateCoursCode'],
                    'nom_cours' => $data['upDateCoursNom'],
                    'matiere_cours' => $data['upDateCoursMatiere'],
                    'date_debut' => $data['upDateCoursDateD'],
                    'date_fin' => $data['upDateCoursDateF'],
                    'nombre_heurs' => $data['upDateCoursHeure'],
                    'modified_at' => date('Y-m-d h:s:i'),
                    'modified_by' => getAdminId()
                );

                // var_dump($dataCours); die();

                $upDateCours = $this->cours->update(array('id_cours' => (int)$idUpDateCours), $dataCours);

                // var_dump($upDateCours); die();

                if ($upDateCours) {

                    $this->session->set_flashdata('success_get_cours', 'Modification effectuée avec success');
                    $this->getCours();


                } else {


                    $this->session->set_flashdata('error_get_cours', 'Modification échouée');
                    $this->getCours();


                }

            } else {


            }
        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteCours()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDelCours = $this->input->post('text', true);

                if (!empty($idDelCours)) {

                    $idDelCoursDecrypt = $this->encryption->decrypt($idDelCours);


                    $delCours = $this->cours->delete(array('id_cours' => $idDelCoursDecrypt));

                    if ($delCours) {


                    } else {


                    }

                }


            } else {


            }

        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    /**
     * program of students
     */

    public function newProgram()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un programme';
            $data['menu'] = array('Panel cours','programme');

            $data['month'] = $this->month->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/cours/programme/newProgram', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addProgram()
    {
        if (adminLoggedIn()) {

            $data['addProgramYear'] = $this->input->post('year', true);
            $data['addProgramMonth'] = $this->input->post('month', true);
            $data['addProgramTheme'] = $this->input->post('theme', true);
            $data['addProgramComment'] = $this->input->post('comment', true);

                $dataAddProgram = array(

                    'annee_programme' => $data['addProgramYear'],
                    'mois_programme' => $data['addProgramMonth'],
                    'theme_programme' => $data['addProgramTheme'],
                    'commentaires_programme' => $data['addProgramComment'],
                    'created_by_programme' => getAdminId()

                );

               // var_dump($dataAddProgram); die();

                $checkProgram = $this->program->checkUser($dataAddProgram);



                if (count($checkProgram) == 1) {


                    $this->session->set_flashdata('error_new_program', 'Ces données existent en base!');
                    $this->newProgram();

                } else {

                    $insertProgram = $this->program->create($dataAddProgram);

                    //  var_dump($insertProgram); die();

                    if ($insertProgram) {

                        $this->session->set_flashdata('success_new_program', 'Enregistrement effectué');
                        $this->newProgram();

                    } else {

                        $this->session->set_flashdata('error_new_program', 'Enregistrement non effectué');
                        $this->newProgram();

                    }


                }



        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getProgram()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des programme';
            $data['menu'] = array('Panel cours','Programme');
            $data['month'] = $this->month->read();
            $data['allPrograms'] = $this->program->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/cours/programme/getProgram', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editProgram($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['editProgram'] = $this->program->checkDataByKey($id, 'id_programme');
                $data['month'] = $this->month->read();

                if (count($data['editProgram']) == 1) {

                    $data['titre'] = 'Modifier un programme';
                    $data['menu'] = array('Panel cours', 'Programme');

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/cours/programme/editProgram', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }
            }


        }else{
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateProgram()
    {
        if (adminLoggedIn()) {

            $data['upDateProgramYear'] = $this->input->post('year', true);
            $data['upDateProgramMonth'] = $this->input->post('month', true);
            $data['upDateProgramTheme'] = $this->input->post('theme', true);
            $data['upDateProgramComment'] = $this->input->post('comment', true);


            $idUpDateProgram = $this->input->post('idProgramUpDate', true);

                    $dataProgram = array(

                    'annee_programme' => $data['upDateProgramYear'],
                    'mois_programme' => $data['upDateProgramMonth'],
                    'theme_programme' => $data['upDateProgramTheme'],
                    'commentaires_programme' => $data['upDateProgramComment'],
                    'modified_at_programme' => date('d-m-Y h:s:i'),
                    'modified_by_programme' => getAdminId()
                );

                // var_dump($dataCours); die();

                $upDateCours = $this->program->update(array('id_programme' =>$idUpDateProgram), $dataProgram);

                // var_dump($upDateCours); die();

                if ($upDateCours) {

                    $this->session->set_flashdata('success_get_program', 'Modification effectuée avec success');
                    $this->getProgram();


                } else {


                    $this->session->set_flashdata('error_get_program', 'Modification échouée');
                    $this->getProgram();


                }


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteProgram()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDelProgram = $this->input->post('text', true);

                if (!empty($idDelProgram)) {

                    $idDelProgramDecrypt = $this->encryption->decrypt($idDelProgram);


                    $delProgram = $this->program->delete(array('id_programme' => $idDelProgramDecrypt));

                    if($delProgram){


                        echo 'ok';


                    } else {


                        echo 'non ok';

                    }

                }


            } else {


            }

        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function newAccueilEcouteAccompagnement()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un membre';
            $data['menu'] = array('Accueil, Ecoute, Acoompagnement');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/accueil/newAccueilEcoute',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addAccueilEcouteAccompagnement()
    {

        if (adminLoggedIn()) {

            $data['fullName_Acceuil'] = $this->input->post('fullName', true);
            $data['email_Acceuil'] = $this->input->post('email', true);
            $data['phone_Acceuil'] = $this->input->post('phone', true);
            $data['message_Acceuil'] = $this->input->post('message', true);

            if (!empty($data['fullName_Acceuil']) and !empty($data['email_Acceuil']) and !empty($data['phone_Acceuil']) and !empty($data['message_Acceuil'])) {

                $membreAccueil = array(

                    'name_volunteer' => $data['fullName_Acceuil'],
                    'email_volunteer' => $data['email_Acceuil'],
                    'phone_volunteer' => $data['phone_Acceuil'],
                    'message_volunteer' => $data['message_Acceuil'],
                    'created_by_volunteer' => getAdminId()

                );

                $checkMembre = $this->volunteer->checkDataByKey($data['email_Acceuil'], 'email_volunteer');

                if (count($checkMembre) == 1) {

                    $this->session->set_flashdata('error_new_membre_accueil', 'Adresse email déjà utilisé!');
                    $this->newAccueilEcouteAccompagnement();


                } else {


                    $insertMembre = $this->volunteer->create($membreAccueil);

                    if ($insertMembre) {

                        $this->session->set_flashdata('success_new_membre_accueil', 'Ajout de membre effectué!');
                        $this->newAccueilEcouteAccompagnement();

                    } else {

                        $this->session->set_flashdata('error_new_membre_accueil', 'Ajout echoué!');
                        $this->newAccueilEcouteAccompagnement();

                    }
                }


            } else {

                $this->session->set_flashdata('error_new_membre_accueil', 'Veillez remplir le formulaire svp!');
                $this->newAccueilEcouteAccompagnement();

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

   /* public function getAccueilEcouteAccompagnement()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des membres';
            $data['menu'] = array('Accueil, Ecoute, Acoompagnement');
            $data['allMembers'] = $this->volunteer->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/accueil/getAccueilEcoute',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }*/

    public function getAccueilEcouteAccompagnement2()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des membres';
            $data['menu'] = array('Accueil, Ecoute, Acoompagnement');


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/accueil/accueilEcoute',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

   public function searchData()
    {
        $output ='';
        $query ='';

        if ($this->input->is_ajax_request()) {
            $query = $this->input->post('query', true);
        }

        $data = $this->volunteer->searchQueryData($query,'id_volunteer', 'name_volunteer', 'email_volunteer','phone_volunteer');

         $output .= '
         <div class="table-responsive">

                        <table style="padding: 10px;" id="member_table" class="table table-bordered table-responsive">

                            <thead>
                            <tr>
                                <th>Nom et prenoms</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Message</th>
                                <th>Date d\'inscription</th>
                                <th style="text-align: right" rowspan="2">Actions</th>
                            </tr>
                            </thead>
                          <tbody>
         </div>
        
        ';

        if ($data->num_rows() > 0) {

            foreach ($data->result() as $row_member) {
                $output .= '
                        <tr>
                                    <td>' . $row_member->name_volunteer . '</td>
                                    <td>' . $row_member->email_volunteer . '</td>
                                    <td>' . $row_member->phone_volunteer . '</td>
                                    <td>' . $row_member->message_volunteer . '</td>
                                    <td>' . $row_member->date_volunteer . '</td>
                                    
                                    <td style="text-align: center"><a class="btn btn-primary" href="' . site_url('backoffice/admin/editAccueilEcouteAccompagnement/' . $row_member->id_volunteer) . '">Editer</a></td>
                                    <td style="text-align: center"><a class="btn btn-adn delVolunteerAccueil" href="javascript:void(0)" data-id="' . $row_member->id_volunteer . '" data-text="' . $this->encryption->encrypt($row_member->id_volunteer) . '">Suprimer</a></td>
                                </tr>
                     ';
            }


        } else {

            $output .= '<tr>
                          <td colspan="6" class="text-center">Aucune donnée trouvée</td>
                       </tr>';
        }

        $output .= '
                   </tbody>
               </table> ';

        echo $output;

        //echo 'testing ...';

        // echo json_encode($output);

    }

    public function editAccueilEcouteAccompagnement($id_volunteer)
    {


        if (adminLoggedIn()) {

            if (isset($id_volunteer) and !empty($id_volunteer)) {

                $data['volunteer'] = $this->volunteer->checkDataByKey($id_volunteer, 'id_volunteer');

                if (count($data['volunteer']) == 1) {

                    $data['titre'] = 'Modifier un membre';
                    $data['menu'] = array('Accueil, Ecoute, Acoompagnement');

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/accueil/editAccueilEcoute', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                } else {

                    //  $this->session->set_flashdata('error_new_membre_accueil','Erreur donnée indisponible!');
                    //  $this->getAccueilEcouteAccompagnement();
                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }

    public function upDateAccueilEcouteAccompagnement()
    {

        //echo 'test';

        if (adminLoggedIn()) {

            $data['upDateVolunteerName'] = $this->input->post('fullName', true);
            $data['upDateVolunteerEmail'] = $this->input->post('email', true);
            $data['upDateVolunteerPhone'] = $this->input->post('phone', true);
            $data['upDateVolunteerMessage'] = $this->input->post('message', true);

            $data['upDateVolunteerId'] = $this->input->post('idVolunteerUpDate', true);


                $dataUpDateVolunteeur = array(

                    'name_volunteer' => $data['upDateVolunteerName'],
                    'email_volunteer' => $data['upDateVolunteerEmail'],
                    'phone_volunteer' => $data['upDateVolunteerPhone'],
                    'message_volunteer' => $data['upDateVolunteerMessage'],
                    'date_modif_volunteer' => date('Y-m-j h:s:i'),
                    'modified_by_volunteer' => getAdminId()
                );

                //var_dump($dataUpDateVolunteeur); die();

                $upDateVolunteer = $this->volunteer->update(array("id_volunteer" => $data['upDateVolunteerId']), $dataUpDateVolunteeur);

                if ($upDateVolunteer) {

                    $this->session->set_flashdata('success_get_membre_accueil', 'Modification effectuée avec success');
                    $this->getAccueilEcouteAccompagnement2();

                } else {

                    $this->session->set_flashdata('error_get_membre_accueil', 'Modification échouée');
                    $this->getAccueilEcouteAccompagnement2();


                }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function deleteAccueilEcouteAccompagnement()
    {

        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDelVolunteer = $this->input->post('text', true);

                if (!empty($idDelVolunteer)) {

                    $idDelVolunteerDecrypt = $this->encryption->decrypt($idDelVolunteer);

                    $checkVolunteer = $this->volunteer->delete(array('id_volunteer' => $idDelVolunteerDecrypt));

                    if ($checkVolunteer) {


                    } else {

                        echo 'not deleted';

                    }

                } else {

                    echo('not found');

                }

            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function newTvDiffere()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une vidéo';
            $data['menu'] = array('Education et formation','Ecole en ligne','Cours en différé');
            $data['status'] = $this->status->read();
            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/tvlivediffere/newTvDiffere',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addTvDiffere()
    {
        if (adminLoggedIn()) {

            /* $path = realpath(APPPATH.'../assets/uploads/');
            $config['upload_path']            =  $path;
            $config['allowed_types']          = 'gif|jpg|png';
            $config['allowed_types']          = 'mp4';
            $config['max_size']               = 300000;
            $this->load->library('upload', $config); */

            $data['tvDiffereNom'] = $this->input->post('nom', true);
            $data['tvDiffereTitre'] = $this->input->post('titre', true);
            $data['tvDiffereLien'] = $this->input->post('lien', true);
            $data['tvDiffereStatus'] = (int)$this->input->post('status', true);

            if (!empty($data['tvDiffereNom']) and !empty($data['tvDiffereTitre'])) {

                if (!empty($data['tvDiffereLien']) and filter_var($data['tvDiffereLien'], FILTER_VALIDATE_URL)) {

                    $tvWithLink = array(

                        'nom_tv_differe' => $data['tvDiffereNom'],
                        'titre_tv_differe' => $data['tvDiffereTitre'],
                        'lien_tv_differe' => $data['tvDiffereLien'],
                        'status' => (int)$data['tvDiffereStatus'],
                        'created_by_tv_differe' => getAdminId()

                    );

                    $checkTvWithLink = $this->tvdiffere->checkUser($tvWithLink);
                    //  $checkTvWithLink = $this->tvdiffere->checkDataByKey($tvWithLink['lien_tv_differe'],'lien_tv_differe');

                    if (!count($checkTvWithLink) == 1) {

                        $insertTvWithLink = $this->tvdiffere->create($tvWithLink);

                        if ($insertTvWithLink) {

                            $this->session->set_flashdata('success_new_tvdiffere', 'Cours enregistré!');
                            $this->newTvDiffere();

                        } else {

                            $this->session->set_flashdata('error_new_tvdiffere', 'Enregistrement échoué!');
                            $this->newTvDiffere();

                        }

                    } else {

                        $this->session->set_flashdata('error_new_tvdiffere', 'l\'records exist !');
                        $this->newTvDiffere();

                    }


                } else {

                    $this->session->set_flashdata('error_new_tvdiffere', 'le lien vidéo est incorrect');
                    $this->newTvDiffere();

                }


                /*       if($this->upload->do_upload('video'))
                    {

                      $fileName = $this->upload->data();

                      $tvWithVideo = array(
                          'nom_tv_differe'=> $data['tvDiffereNom'],
                          'titre_tv_differe'=> $data['tvDiffereTitre'],
                          'video_tv_differe'=> $fileName['file_name'],
                          'status' => (int)$data['tvDiffereStatus'],
                          'created_by_tv_differe' => getAdminId()
                      );

                     // var_dump($tvWithVideo); die();

                      $checkTvWithVideo = $this->tvdiffere->checkUser($tvWithVideo);



                      if(count($checkTvWithVideo) == 1){

                          $insertTvWithVideo = $this->tvdiffere->create($tvWithVideo);

                          if($insertTvWithVideo){

                              $this->session->set_flashdata('success_new_tvdiffere','Cours enregistré!');
                              $this->newTvDiffere();

                          }else{

                              $this->session->set_flashdata('error_new_tvdiffere','Enregistrement échoué!');
                              $this->newTvDiffere();

                          }

                          }else{

                          $this->session->set_flashdata('error_new_tvdiffere','l\'records exist !');
                          $this->newTvDiffere();

                      }


                     }else{


                      $error =  $this->upload->display_errors();
                      $this->session->set_flashdata('error_new_tvdiffere',$error);
                      $this->newTvDiffere();

                  } */


            } else {

                $this->session->set_flashdata('error_new_tvdiffere', 'Veillez remplir le formulaire svp!');
                $this->newTvDiffere();
            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getTvDiffere()
    {
        if (adminLoggedIn()) {

            $data['allTvDiffere'] = $this->tvdiffere->read();
            $data['titre'] = 'Liste des vidéos';
            $data['menu'] = array('Education et formation','Ecole en ligne','Cours en différé');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/tvlivediffere/getTvDiffere', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editTvDiffere($idTvDiffere)
    {
        if (adminLoggedIn()) {

            if (isset($idTvDiffere)) {

                $data['editTvDiffere'] = $this->tvdiffere->checkDataByKey($idTvDiffere, 'id_tv_differe');
                $data['status'] = $this->status->read();
                if (count($data['editTvDiffere']) == 1) {
                    $data['titre'] = 'Modifier une vidéo';
                    $data['menu'] = array('Education et formation','Ecole en ligne','Cours en différé');

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/tvlivediffere/editTvDiffere', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function upDateTvDiffere()
    {

        if (adminLoggedIn()) {

            $data['upDateTvDiffereNom'] = $this->input->post('nom', true);
            $data['upDateTvDiffereTitre'] = $this->input->post('titre', true);
            $data['upDateTvDiffereLien'] = $this->input->post('lien', true);
            $data['upDateTvDiffereStatus'] = (int)$this->input->post('status', true);

            $idUpDateTvDiffere = $this->input->post('idTvDiffereUpDate', true);

            if (!empty($data['upDateTvDiffereNom']) and !empty($data['upDateTvDiffereTitre']) and !empty($data['upDateTvDiffereLien'])) {

                $dataTvDiffere = array(

                    'nom_tv_differe' => $data['upDateTvDiffereNom'],
                    'titre_tv_differe' => $data['upDateTvDiffereTitre'],
                    'lien_tv_differe' => $data['upDateTvDiffereLien'],
                    'status' => (int)$data['upDateTvDiffereStatus'],
                    'modified_at_tv_differe' => date('Y-m-j h:s:i'),
                    'modified_by_tv_differe' => getAdminId()

                );

                $upDateDataTvDiffere = $this->tvdiffere->update(array('id_tv_differe' => $idUpDateTvDiffere), $dataTvDiffere);

                if ($upDateDataTvDiffere) {

                    $this->session->set_flashdata('success_get_tvdiffere', 'Modification effectuée avec success');
                    $this->getTvDiffere();

                } else {

                    $this->session->set_flashdata('error_get_tvdiffere', 'Modification échouée');
                    $this->getTvDiffere();


                }

            } else {


                //  $this->session->set_flashdata('error_edit_tvdiffere','Veillez remplir correctement le formulaire');
                //  redirect('backoffice/admin/editTvDiffere');

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteTvDiffere()
    {

        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {


                $this->input->post('id', true);
                $idDelTvDiffere = $this->input->post('text', true);

                if (!empty($idDelTvDiffere)) {


                    $idDelTvDiffereDecrypt = $this->encryption->decrypt($idDelTvDiffere);


                    $delTvDiffere = $this->tvdiffere->delete(array('id_tv_differe' => $idDelTvDiffereDecrypt));


                    if ($delTvDiffere) {


                    } else {


                    }

                } else {


                }


            } else {


            }


        } else {


        }

    }

    public function newForumAdmin()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un thème';
            $data['menu'] = array('Education et formation','Ecole en ligne','Forum');
            $data['status'] = $this->status->read();
            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/forum_admin/newForumAdmin',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addForumAdmin()
    {
        if (adminLoggedIn()) {

            $data['addForumAdminTitle'] = $this->input->post('title', true);
            $data['addForumAdminAuthor'] = $this->input->post('author', true);
            $data['addForumAdminTheme'] = $this->input->post('theme', true);
            $data['addForumAdminStatus'] = (int)$this->input->post('status', true);


            if (!empty($data['addForumAdminTitle']) and !empty($data['addForumAdminAuthor']) and !empty($data['addForumAdminTheme'])) {

                $forumAdminData = array(

                    'titre_forum_admin' => $data['addForumAdminTitle'],
                    'auteur_forum_admin' => $data['addForumAdminAuthor'],
                    'theme_forum_admin' => $data['addForumAdminTheme'],
                    'status_forum_admin' => $data['addForumAdminStatus'],
                    'created_at_forum_admin' => strftime('%d %B %Y'),
                    'created_by_forum_admin' => getAdminId()

                );

                $checkForumAdminData = $this->forumA->checkUser($forumAdminData);

                if (count($checkForumAdminData) == 1) {

                    $this->session->set_flashdata('error_new_forumAdmin', 'Ces données existent en base!');
                    $this->newForumAdmin();


                } else {

                    $insertForumAdmin = $this->forumA->create($forumAdminData);

                    if ($insertForumAdmin) {

                        $this->session->set_flashdata('success_new_forumAdmin', 'Enregistrement effectué');
                        $this->newForumAdmin();


                    } else {

                        $this->session->set_flashdata('error_new_forumAdmin', 'Enregistrement non effectué');
                        $this->newForumAdmin();

                    }

                }


            } else {

                $this->session->set_flashdata('error_new_forumAdmin', 'Veillez remplir correctement le formulaire');
                $this->newForumAdmin();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getForumAdmin()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des thèmes';
            $data['menu'] = array('Education et formation','Ecole en ligne','Forum');
            $data['allForumAdmin'] = $this->forumA->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/forum_admin/getForumAdmin', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function viewCommentForumAdmin($id)
    {
        if (adminLoggedIn()) {


            if (isset($id)) {

                $data['titre'] = 'liste des commentaires';
                $data['menu'] = array('Education et formation','Ecole en ligne','Forum','commentaire(s)');

                $data['comments'] = $this->commentForumA->read('*',array('id_forum_admin'=>$id));

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/forum_admin/commentForum', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function editSatusComment($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {


                $data['status'] = $this->status->read();

                $data['titre'] = 'Editer statut commenataire';
                $data['menu'] = array('Education et formation','Ecole en ligne','Forum','commentaire(s)');

                $data['editStatusComment'] = $this->commentForumA->checkDataByKey($id, 'id_comment_forum_admin');

                if (count($data['editStatusComment']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/forum_admin/editStatusCommentForum', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function editForumAdmin($idForumAdmin)
    {
        if (adminLoggedIn()) {

            if (isset($idForumAdmin)) {
                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier un thème';
                $data['menu'] = array('Education et formation','Ecole en ligne','Forum');

                $data['editForumAdmin'] = $this->forumA->checkDataByKey($idForumAdmin, 'id_forum_admin');

                if (count($data['editForumAdmin']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/forum_admin/editForumAdmin', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function updateStatusComment()
    {
        if (adminLoggedIn()) {


            $data['upDateForumAdminCommentStatus'] = (int)$this->input->post('status', true);

            $idUpDateForumAdminCommentStatus = $this->input->post('idUpDateStatusComment', true);
            $idPage = $this->input->post('idPageComment', true);

                $dataForumAdminStatusComment = array(
                    'status_comment_forum_admin' => $data['upDateForumAdminCommentStatus']
                );

               // var_dump($dataForumAdminStatusComment); die();

                $upDateForumAdminStatusComment = $this->commentForumA->update(array('id_comment_forum_admin' => $idUpDateForumAdminCommentStatus), $dataForumAdminStatusComment);

                if ($upDateForumAdminStatusComment) {

                    $this->session->set_flashdata('success_get_comment_forum_status', 'Modification effectuée avec success!');
                    $this->viewCommentForumAdmin($idPage);

                } else {
                    $this->session->set_flashdata('error_get_comment_forum_status', 'Modification échouée !');
                    $this->viewCommentForumAdmin($idPage);

                }



        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function updateStatus()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

               $status =  $this->input->post('status', true);

                $idText = $this->input->post('text', true);

                if (!empty($idText)) {

                    $idTextDecrypt = $this->encryption->decrypt($idText);

                    if($status == 1)
                    {
                        $dataStatus = array('status_comment_forum_admin'=>0);

                    }elseif ($status == 0)
                    {
                        $dataStatus = array('status_comment_forum_admin'=>1);

                    }else{

                        return false;

                    }

                    $updateStatus =  $this->commentForumA->update(array('id_comment_forum_admin' => $idTextDecrypt), $dataStatus);

                    if($updateStatus)
                    {

                        return true;

                    }else{

                        return false;
                    }

                }
            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateForumAdmin()
    {
        if (adminLoggedIn()) {

            $data['upDateForumAdminTitle'] = $this->input->post('title', true);
            $data['upDateForumAdminAuthor'] = $this->input->post('author', true);
            $data['upDateForumAdminTheme'] = $this->input->post('theme', true);
            $data['upDateForumAdminStatus'] = (int)$this->input->post('status', true);

            $idUpDateForumAdmin = $this->input->post('idUpDateForumAdmin', true);


            if (!empty($data['upDateForumAdminTitle']) and !empty($data['upDateForumAdminAuthor']) and !empty($data['upDateForumAdminTheme'])) {

                $dataForumAdmin = array(

                    'titre_forum_admin' => $data['upDateForumAdminTitle'],
                    'auteur_forum_admin' => $data['upDateForumAdminAuthor'],
                    'theme_forum_admin' => $data['upDateForumAdminTheme'],
                    'status_forum_admin' => $data['upDateForumAdminStatus'],
                    'modified_at_forum_admin' => date('Y-m-d h:i:s'),
                    'modified_by_forum_admin' => getAdminId()

                );


                $upDateForumAdmin = $this->forumA->update(array('id_forum_admin' => $idUpDateForumAdmin), $dataForumAdmin);

                if ($upDateForumAdmin) {

                    $this->session->set_flashdata('success_get_forumAdmin', 'Modification effectuée avec success!');
                    $this->getForumAdmin();

                } else {
                    $this->session->set_flashdata('error_get_forumAdmin', 'Modification échouée !');
                    $this->getForumAdmin();

                }


            } else {


                $this->session->set_flashdata('error_get_forumAdmin', 'le formulaire de modifiaction doit être rempli svp!');
                $this->getForumAdmin();
            }


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteForumAdmin()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);

                $ipDelForumAdmin = $this->input->post('text', true);

                if (!empty($ipDelForumAdmin)) {

                    $ipDelForumAdminDecrypt = $this->encryption->decrypt($ipDelForumAdmin);

                     $this->forumA->delete(array('id_forum_admin' => $ipDelForumAdminDecrypt));

                }
            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function newAudio()
    {
        if (adminLoggedIn()) {
            $this->menuLink4('Education et formation', 'Bibliothèque', 'Audio', 'Ajouter un enregistrement');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/audio/newAudio');
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addAudio()
    {
        if (adminLoggedIn()) {

            /**
             * upload file audio from the admin in dashboard
             */

            $path = realpath(APPPATH . '../assets/records/');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';
            $this->load->library('upload', $config);

            /**
             * receive data from form by input
             */

            $data['audioTitle'] = $this->input->post('title', true);
            $data['audioDescribe'] = $this->input->post('describe', true);
            $data['audioStatus'] = (int)$this->input->post('status', true);


            if (!empty($data['audioTitle']) and !empty($data['audioDescribe'])) {


                //   var_dump($this->upload->do_upload('audio')); die();

                if ($this->upload->do_upload('audio')) {

                    $fileName = $this->upload->data();

                    //   var_dump($this->upload->data());

                    $dataAudio = array(

                        'titre_audio' => $data['audioTitle'],
                        'description_audio' => $data['audioDescribe'],
                        'file_audio' => $fileName['file_name'],
                        'status_audio' => $data['audioStatus'],
                        'created_by_audio' => getAdminId()

                    );

                    $checkData = $this->audio->checkUser($dataAudio);

                    if (count($checkData) == 1) {


                        $this->session->set_flashdata('error_new_audio', 'les données existent en base!');
                        $this->newAudio();

                    } else {

                        $insertDataAudio = $this->audio->create($dataAudio);

                        if ($insertDataAudio) {

                            $this->session->set_flashdata('success_new_audio', 'Enregistrement effectué avec success');
                            $this->newAudio();

                        } else {

                            $this->session->set_flashdata('error_new_audio', 'Enregistrement echoué');
                            $this->newAudio();

                        }


                    }

                } else {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_new_audio', $error);
                    $this->newAudio();

                }

            } else {


                $this->session->set_flashdata('error_new_audio', 'Veillez remplir correctement le formulaire svp!');
                $this->newAudio();


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getAudio()
    {
        if (adminLoggedIn()) {
            $this->menuLink4('Education et formation', 'Bibliothèque', 'Audio', 'Liste des enregistrements');

            $data['allAudio'] = $this->audio->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/audio/getAudio', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editAudio($id_audio)
    {
        if (adminLoggedIn()) {

            if (isset($id_audio) and !empty($id_audio)) {

                $data['editDataAudio'] = $this->audio->checkDataByKey($id_audio, 'id_audio');

                if (count($data['editDataAudio']) == 1) {
                    $this->menuLink4('Education et formation', 'Bibliothèque', 'Audio', 'Editer un enregistrement');

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/audio/editAudio', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function upDateAudio()
    {
        if (adminLoggedIn()) {

            /**
             * upload file audio from the admin in dashboard
             */

            //   $path = realpath(APPPATH.'../assets/records/');
            //   $config['upload_path']      = $path;
            //   $config['allowed_types']    = 'mp3';
            //   $this->load->library('upload',$config);

            /**
             * receive data from form by input
             */

            $data['upDateAudioTitle'] = $this->input->post('titre', true);
            $data['upDateAudioDescribe'] = $this->input->post('describe', true);
            $data['upDateAudioStatus'] = $this->input->post('status', true);

            $idUpDateAudio = $this->input->post('idAudioUpDate', true);

            //   $this->upload->do_upload('file');

            //    $fileNme = $this->upload->data();

            $editDataAudio = array(

                'titre_audio' => $data['upDateAudioTitle'],
                'description_audio' => $data['upDateAudioDescribe'],
                // 'file_audio'=> $fileNme['file_name'],
                'status_audio' => $data['upDateAudioStatus'],
                'modified_at_audio' => date('Y-m-d h:i:s'),
                'modified_by_audio' => getAdminId()

            );


            $upDateAudio = $this->audio->update(array('id_audio' => $idUpDateAudio), $editDataAudio);

            if ($upDateAudio) {

                $this->session->set_flashdata('success_get_audio', 'Modification effectuée');
                $this->getAudio();

            } else {

                $this->session->set_flashdata('error_get_audio', 'Modification échouée');
                $this->getAudio();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteAudio()
    {

        if (adminLoggedIn()) {
            $this->input->post('id', true);
            $idDelAudio = $this->input->post('text', true);

            if (!empty($idDelAudio)) {

                $idDelAudioDecrypt = $this->encryption->decrypt($idDelAudio);

                $delAudio = $this->audio->delete(array('id_audio' => $idDelAudioDecrypt));

                if ($delAudio) {

                } else {


                }


            } else {


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function newExercice()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un exercice';
            $data['menu'] = array('Education et formation','Ecole en ligne','Plateforme d\' exercices');
            $data['status'] = $this->status->read();
            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/exercices/newExercice',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addExercice()
    {
        if (adminLoggedIn()) {

            $data['addExerciceTitle'] = $this->input->post('titre', true);
            $data['addExerciceDescription'] = $this->input->post('description', true);
            $data['addExerciceQuestion'] = $this->input->post('question', true);
            $data['addExerciceStatus'] = (int)$this->input->post('status', true);

            if (!empty($data['addExerciceTitle']) and !empty($data['addExerciceDescription'])) {

                $addExercice = array(

                    'titre_exercice' => $data['addExerciceTitle'],
                    'description_exercice' => $data['addExerciceDescription'],
                    'questions_exercice' => $data['addExerciceQuestion'],
                    'status_exercice' => $data['addExerciceStatus'],
                    'created_by_exercice' => getAdminId()
                );

                $checkDataExercice = $this->exercice->checkUser($addExercice);

                if (count($checkDataExercice) == 1) {

                    $this->session->set_flashdata('error_new_exercice', 'les données existent en base!');
                    $this->newExercice();

                } else {

                    $insertDataExercice = $this->exercice->create($addExercice);

                    if ($insertDataExercice) {
                        $this->session->set_flashdata('success_new_exercice', 'Enregistrement effectué avec success');
                        $this->newExercice();
                    } else {

                        $this->session->set_flashdata('error_new_exercice', 'Enregistrement echoué!');
                        $this->newExercice();

                    }

                }


            } else {

                $this->session->set_flashdata('error_new_exercice', 'Veillez remplir correctement le formulaire svp!');
                $this->newExercice();
            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getExercice()
    {

        if (adminLoggedIn()) {

            $data['allExercices'] = $this->exercice->read();
            $data['titre'] = 'Liste des exercices';
            $data['menu'] = array('Education et formation','Ecole en ligne','Plateforme d\' exercices');


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/exercices/getExercice', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function editExercice($idEditExercice)
    {

        if (adminLoggedIn()) {
            if (isset($idEditExercice)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier un exercice';
                $data['menu'] = array('Education et formation','Ecole en ligne','Plateforme d\' exercices');

                $data['editExercice'] = $this->exercice->checkDataByKey($idEditExercice, 'id_exercice');

                if (count($data['editExercice']) == 1) {



                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/exercices/editExercice', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                } else {


                }


            } else {


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function upDateExercice()
    {

        if (adminLoggedIn()) {

            $data['upDateExerciceTitle'] = $this->input->post('titre', true);
            $data['upDateExerciceDescribe'] = $this->input->post('description', true);
            $data['upDateExerciceQuestion'] = $this->input->post('question', true);
            $data['upDateExerciceStatus'] = (int)$this->input->post('status', true);

            $idUpDateExercice = $this->input->post('idExerciceUpDate', true);

            if (!empty($data['upDateExerciceTitle']) and !empty($data['upDateExerciceDescribe']) and !empty($data['upDateExerciceQuestion'])) {

                $upDateDataExercice = array(

                    'titre_exercice' => $data['upDateExerciceTitle'],
                    'description_exercice' => $data['upDateExerciceDescribe'],
                    'questions_exercice' => $data['upDateExerciceQuestion'],
                    'status_exercice' => $data['upDateExerciceStatus'],
                    'modified_at_exercice' => date('Y-m-d h:i:s'),
                    'modified_by_exercice' => getAdminId()

                );

                $upDateExercice = $this->exercice->update(array('id_exercice' => $idUpDateExercice), $upDateDataExercice);


                if ($upDateExercice) {

                    $this->session->set_flashdata('success_get_exercice', 'Modification effectuée!');
                    $this->getExercice();


                } else {

                    $this->session->set_flashdata('error_get_exercice', 'Modification échouée!');
                    $this->getExercice();
                }


            } else {


                $this->session->set_flashdata('error_get_exercice', 'Veillez remplir correctement le formulaire svp!');
                $this->getExercice();
            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function newBook()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un livre';
            $data['menu'] = array('Education et formation','Bibliothèque','Livres numériques');
            
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/book/newBook',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBook()
    {
        if (adminLoggedIn()) {

            $pathBook = realpath(APPPATH . '../assets/book/image');

            $config['upload_path'] = $pathBook;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload', $config);

            $data['addBookTitle'] = $this->input->post('titleBook', true);
            $data['addBookDescribe'] = $this->input->post('describeBook', true);
            $data['addBookStatus'] = (int)$this->input->post('status', true);

            if (!empty($data['addBookTitle']) and !empty($data['addBookDescribe'])) {

                if ($this->upload->do_upload('fichier')) {

                    $fileName = $this->upload->data();

                    $addDataBook = array(

                        'titre_numeric_book' => $data['addBookTitle'],
                        'description_numeric_book' => $data['addBookDescribe'],
                        'file_numeric_book' => $fileName['file_name'],
                        'status_numeric_book' => $data['addBookStatus'],
                        'created_by_numeric_book' => getAdminId()

                    );

                    $checkDataBook = $this->book->checkDataByKey($data['addBookTitle'], 'titre_numeric_book');


                    if (count($checkDataBook) == 1) {

                        $this->session->set_flashdata('error_new_book', 'les données existent en base!');
                        $this->newBook();

                    } else {


                        $insertDataBook = $this->book->create($addDataBook);

                        if ($insertDataBook){

                            $this->session->set_flashdata('success_new_book', 'Enregistrement effectué avec success!');
                            $this->newBook();

                        }else{


                            $this->session->set_flashdata('error_new_book', 'Enregistrement echoué');
                            $this->newBook();

                        }
                    }

                } else {

                    $error = $this->upload->display_errors();

                    $this->session->set_flashdata('error_new_book', $error);
                    $this->newBook();


                }

            } else {

                $this->session->set_flashdata('error_new_book', 'Veillez remplir correctement le formulaire svp!');
                $this->newBook();
            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBook()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'liste des livres numériques';
            $data['menu'] = array('Education et formation','Bibliothèque','Livres numériques');
            $data['allBook'] = $this->book->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/book/getBook', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function editBook($idBook)
    {
        if (adminLoggedIn()) {

            if (isset($idBook)) {

                $data['titre'] = 'Modifier un livre numérique';
                $data['menu'] = array('Education et formation','Bibliothèque','Livres numériques');
                $data['status'] = $this->status->read();
                $data['editBook'] = $this->book->checkDataByKey($idBook, 'id_numeric_book');

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop', $data);
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/book/editBook', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function upDateBook()
    {

        if (adminLoggedIn()) {

            $path = realpath(APPPATH . '../assets/book/audio/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';

            $this->load->library('upload', $config);

            $idUpDateBook = $this->input->post('idBookUpDate', true);

                if ($this->upload->do_upload('audio')) {

                    $fileImg = $this->upload->data();

                    $upDateDataBook = array(
                        'audio_numeric_book' => $fileImg['file_name'],
                    );

                   // var_dump($upDateDataBook); die();

                    $upDateBook = $this->book->update(array('id_numeric_book' => $idUpDateBook), $upDateDataBook);

                    if ($upDateBook) {

                        $this->session->set_flashdata('success_get_book', 'Modification effectuée!');
                        $this->getBook();


                    }else{

                        $this->session->set_flashdata('error_get_book', 'Modification échouée!');
                        $this->getBook();

                    }


                }else{

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_get_book', $error);
                    $this->getBook();

                }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function updateStatusBook()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $status =  $this->input->post('status', true);

                $idText = $this->input->post('text', true);

                if (!empty($idText)) {

                    $idTextDecrypt = $this->encryption->decrypt($idText);

                    if($status == 1)
                    {
                        $dataStatus = array('status_numeric_book'=>0);

                    }elseif ($status == 0)
                    {
                        $dataStatus = array('status_numeric_book'=>1);

                    }else{

                        return false;

                    }

                    $updateStatus =  $this->book->update(array('id_numeric_book' => $idTextDecrypt), $dataStatus);

                    if($updateStatus)
                    {

                        return true;

                    }else{

                        return false;
                    }

                }
            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function deleteBook()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {


                $this->input->post('id', true);
                $idDelBook = $this->input->post('text', true);

                if (!empty($idDelBook)) {

                    $idDelBookDescrypt = $this->encryption->decrypt($idDelBook);

                    $imgBookToDel = $this->book->getImageById('file_numeric_book',array('id_numeric_book'=>$idDelBookDescrypt));
                    $audioBookToDel = $this->book->getImageById('audio_numeric_book',array('id_numeric_book'=>$idDelBookDescrypt));

                    if(!empty($imgBookToDel) and count($imgBookToDel) == 1)
                    {
                        $realImage = $imgBookToDel[0]['file_numeric_book'];
                    }

                    if(!empty($audioBookToDel) and count($audioBookToDel) == 1)
                    {
                        $realAudio = $audioBookToDel[0]['audio_numeric_book'];
                    }

                    $delBook = $this->book->delete(array('id_numeric_book' => $idDelBookDescrypt));

                    if($delBook){

                        if(!empty($realImage) and isset($realImage))
                        {
                            $path = realpath(APPPATH.'../assets/book/image/');

                            if(file_exists($path.'/'.$realImage))
                            {
                                unlink($path.'/'.$realImage);
                            }

                        }

                        if(!empty($realAudio) and isset($realAudio))
                        {
                            $pathAudio = realpath(APPPATH.'../assets/book/audio/');

                            if(file_exists($pathAudio.'/'.$realAudio))
                            {
                                unlink($pathAudio.'/'.$realAudio);
                            }

                        }

                    }else{


                        echo 'failed to delete data';


                    }
                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    /* ================= EVANGELISATION ==============================*/


    public function newEvangelisation_tv()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un lien';
            $data['menu'] = array('Evangélisation','Télévision');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/television/newTelevision',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addEvangelisation_tv()
    {
        if (adminLoggedIn()) {
            $data['addEvangelisationLabel'] = $this->input->post('libelle', true);
            $data['addEvangelisationLink'] = $this->input->post('lien', true);
            $data['addEvangelisationComment'] = $this->input->post('comment', true);
            $data['addEvangelisationStatus'] = (int)$this->input->post('status', true);

            if (!empty($data['addEvangelisationLabel']) and !empty($data['addEvangelisationLink']) and !empty($data['addEvangelisationComment'])) {

                $dataEvangelisationTv = array(
                    'libelle_evangelisation_tv' => $data['addEvangelisationLabel'],
                    'lien_evangelisation_tv' => $data['addEvangelisationLink'],
                    'commentaire_evangelisation_tv' => $data['addEvangelisationComment'],
                    'status_evangelisation_tv' => $data['addEvangelisationStatus'],
                );

                $checkDataEvangelisation = $this->evangelisation_tv->checkUser($dataEvangelisationTv);


                if (count($checkDataEvangelisation) == 1) {


                    $this->session->set_flashdata('error_new_evangelisation_tv', 'les données existent en base!');
                    $this->newEvangelisation_tv();

                } else {


                    $insertDataEvangelisation = $this->evangelisation_tv->create($dataEvangelisationTv);

                    if ($insertDataEvangelisation) {


                        $this->session->set_flashdata('success_new_evangelisation_tv', 'lien enregistré avec success!');
                        $this->newEvangelisation_tv();

                    } else {


                        $this->session->set_flashdata('error_new_evangelisation_tv', 'enregistrement echoué!');
                        $this->newEvangelisation_tv();

                    }


                }

                //  var_dump($checkDataEvangelisation); die();

            } else {

                $this->session->set_flashdata('error_new_evangelisation_tv', 'Veillez remplir correctement le formulaire svp!');
                $this->newEvangelisation_tv();
            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getEvangelisation_tv()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des liens télévision';
            $data['menu'] = array('Evangélisation','Télévision');

            $data['allEvangelisationTv'] = $this->evangelisation_tv->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/television/getTelevision', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editEvangelisationTv($id_evangelisation_tv)
    {
        if (adminLoggedIn()) {

            if (isset($id_evangelisation_tv)) {

                $data['titre'] = 'Modifier un lien télévision';
                $data['menu'] = array('Evangélisation','Télévision');
                $data['editDataEvangelisation'] = $this->evangelisation_tv->checkDataByKey($id_evangelisation_tv, 'id_evangelisation_tv');
                $data['status'] = $this->status->read();

                if (count($data['editDataEvangelisation']) == 1) {
                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/evangelisation/television/editTelevision', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');
                }

            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateEvangelisationTv()
    {
        if (adminLoggedIn()) {

            $data['upDateDataEvangelisationLabel'] = $this->input->post('libelle', true);
            $data['upDateDataEvangelisationLink'] = $this->input->post('lien', true);
            $data['upDateDataEvangelisationComment'] = $this->input->post('comment', true);
            $data['upDateDataEvangelisationStatus'] = $this->input->post('status', true);


            $idUpDateEvangelisation = $this->input->post('idEvangelisationTvUpDate', true);

            if (!empty($data['upDateDataEvangelisationLabel']) and !empty($data['upDateDataEvangelisationLink']) and !empty($data['upDateDataEvangelisationComment'])) {

                $upDateDataEvangelisation = array(

                    'libelle_evangelisation_tv' => $data['upDateDataEvangelisationLabel'],
                    'lien_evangelisation_tv' => $data['upDateDataEvangelisationLink'],
                    'commentaire_evangelisation_tv' => $data['upDateDataEvangelisationComment'],
                    'status_evangelisation_tv' => $data['upDateDataEvangelisationStatus'],
                    'modified_at_evangelisation_tv' => date('Y-m-d h:i:s'),
                    '	modified_by_evangelisation_tv' => getAdminId()

                );

                $upDateEvangelisation = $this->evangelisation_tv->update(array('id_evangelisation_tv' => $idUpDateEvangelisation), $upDateDataEvangelisation);

                if ($upDateEvangelisation) {

                    $this->session->set_flashdata('success_get_evangelisation_tv', 'Modification effectuée!');
                    $this->getEvangelisation_tv();


                } else {

                    $this->session->set_flashdata('error_get_evangelisation_tv', 'Modification échouée!');
                    $this->getEvangelisation_tv();

                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteEvangelisationTv()
    {
        if (adminLoggedIn()) {
            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDeleteEvangelisation = $this->input->post('text', true);

                if (!empty($idDeleteEvangelisation)) {

                    $idDeleteEvangelisationDecrypt = $this->encryption->decrypt($idDeleteEvangelisation);

                    $delEvangelisation = $this->evangelisation_tv->delete(array('id_evangelisation_tv' => $idDeleteEvangelisationDecrypt));

                    if ($delEvangelisation) {

                    } else {


                    }

                }


            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }
    
    public function newEvangelisation_tv_differe()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une exhortation';
            $data['menu'] = array('Evangélisation','Exhortation');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/tvdiffere/newTvdiffere',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addEvangelisationTvDiffere()
    {
        if (adminLoggedIn()) {
            $data['evangelisationTvDiffereNom'] = $this->input->post('nom', true);
            $data['evangelisationTvDiffereTitre'] = $this->input->post('titre', true);
            $data['evangelisationTvDiffereLien'] = $this->input->post('lien', true);
            $data['evangelisationTvDiffereStatus'] = (int)$this->input->post('status', true);


            if (!empty($data['evangelisationTvDiffereNom']) and !empty($data['evangelisationTvDiffereTitre']) and !empty($data['evangelisationTvDiffereLien'])) {

                $dataEvangelisation = array(

                    'nom_evangelisation_tv_differe' => $data['evangelisationTvDiffereNom'],
                    'titre_evangelisation_tv_differe' => $data['evangelisationTvDiffereTitre'],
                    'lien_evangelisation_tv_differe' => $data['evangelisationTvDiffereLien'],
                    'status_evangelisation_tv_differe' => $data['evangelisationTvDiffereStatus'],
                    'created_by_evangelisation_tv_differe' => getAdminId()

                );

                $checkEvangelisationTvDiffere = $this->evangelisation_tv_differe->checkUser($dataEvangelisation);

                if (count($checkEvangelisationTvDiffere) == 1) {

                    $this->session->set_flashdata('error_new_evangelisation_tvdiffere', 'Les données existent en base!');
                    $this->newEvangelisation_tv_differe();

                } else {


                    $insertDataEvangelisation = $this->evangelisation_tv_differe->create($dataEvangelisation);

                    if ($insertDataEvangelisation) {

                        $this->session->set_flashdata('success_new_evangelisation_tvdiffere', 'enregistrement effectué');
                        $this->newEvangelisation_tv_differe();

                    } else {
                        $this->session->set_flashdata('error_new_evangelisation_tvdiffere', 'enregistrement non effectué');
                        $this->newEvangelisation_tv_differe();

                    }


                }


                //  var_dump($dataEvangelisation); die();

            } else {

                $this->session->set_flashdata('error_new_evangelisation_tvdiffere', 'Veillez remplir correctement le formulaire svp!');
                $this->newEvangelisation_tv_differe();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getEvangelisationTvDiffere()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des exhortations';
            $data['menu'] = array('Evangélisation','Exhortation');

            $data['allEvangelisationTvDiffere'] = $this->evangelisation_tv_differe->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/tvdiffere/getTvdiffere', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editEvangelisationTvDiffere($idEvangelisationTvDiddere)
    {
        if (adminLoggedIn()) {

            if (isset($idEvangelisationTvDiddere)) {


                $data['titre'] = 'Modifier une exhortation';
                $data['menu'] = array('Evangélisation','Exhortation');

                $data['editDataEvangelisation'] = $this->evangelisation_tv_differe->checkDataByKey($idEvangelisationTvDiddere, 'id_evangelisation_tv_differe');

                $data['status'] = $this->status->read();

                if (count($data['editDataEvangelisation']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/evangelisation/tvdiffere/editTvdiffere', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            } else {


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateEvangelisationTvDiffere()
    {
        if (adminLoggedIn()) {

            $data['upDateEvangelisationNom'] = $this->input->post('nom', true);
            $data['upDateEvangelisationTitre'] = $this->input->post('titre', true);
            $data['upDateEvangelisationLien'] = $this->input->post('lien', true);
            $data['upDateEvangelisationStatus'] = (int)$this->input->post('status', true);

            $idUpDateEvangelisation = $this->input->post('idEvangelisationTvDiffereUpDate', true);

            if (!empty($data['upDateEvangelisationNom']) and !empty($data['upDateEvangelisationTitre']) and !empty($data['upDateEvangelisationLien'])) {

                $dataEvangelisation = array(

                    'nom_evangelisation_tv_differe' => $data['upDateEvangelisationNom'],
                    'titre_evangelisation_tv_differe' => $data['upDateEvangelisationTitre'],
                    'lien_evangelisation_tv_differe' => $data['upDateEvangelisationLien'],
                    'status_evangelisation_tv_differe' => (int)$data['upDateEvangelisationStatus'],
                    'modified_at_evangelisation_tv_differe' => date('Y-m-d h:i:s'),
                    'modified_by_evangelisation_tv_differe' => getAdminId()
                );


                $upDateDataEvangelisation = $this->evangelisation_tv_differe->update(array('id_evangelisation_tv_differe' => $idUpDateEvangelisation), $dataEvangelisation);


                if ($upDateDataEvangelisation) {

                    $this->session->set_flashdata('success_get_evangelisationtvdiffere', 'Modification éffectuée');
                    $this->getEvangelisationTvDiffere();

                } else {

                    $this->session->set_flashdata('error_get_evangelisationtvdiffere', 'Modification échouée!');
                    $this->getEvangelisationTvDiffere();

                }

            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteEvangelisationTvDiffere()
    {
        if (adminLoggedIn()) {
            if ($this->input->is_ajax_request()) {


                $this->input->post('id', true);

                $idDelEvangelisationTVDiffere = $this->input->post('text', true);

                if (!empty($idDelEvangelisationTVDiffere)) {

                    $idDelEvangelisationTVDiffereDecrypt = $this->encryption->decrypt($idDelEvangelisationTVDiffere);

                    $delEvangelisationTvDiffere = $this->evangelisation_tv_differe->delete(array('id_evangelisation_tv_differe' => $idDelEvangelisationTVDiffereDecrypt));

                    if ($delEvangelisationTvDiffere) {

                        echo 'suppression effectuée';

                    } else {

                        echo 'suppression non effectuée';


                    }

                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function newEvangelisationTemoignages()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un témoignage';
            $data['menu'] = array('Evangélisation','El-elyôn dans mon histoire');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/temoignage/newTemoignage',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }

    public function addEvangelisationTemoignages()
    {
        if (adminLoggedIn()) {


            $path = realpath(APPPATH.'../assets/evangelisation/temoignage/audio');

         //   $pathImage = realpath(APPPATH.'../assets/evangelisation/temoignage/image');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';
            $config['remove_spaces'] = true;
            $config['max_size'] = 10000000;


         /*   $configImage['upload_path'] = $pathImage;
            $configImage['allowed_types'] = 'gif|jpg|png|jpeg';
            $configImage['remove_spaces'] = true;
            $configImage['max_size'] = 0;*/

            $this->load->library('upload', $config);

          //  $this->load->library('upload', $configImage);


            $data['evangelisationTemoignagesNom'] = $this->input->post('nom', true);
            $data['evangelisationTemoignagesPrenoms'] = $this->input->post('prenoms', true);
            $data['evangelisationTemoignagesProfession'] = $this->input->post('profession', true);
         // $data['evangelisationTemoignagesTemoignage'] = $this->input->post('temoignage', true);
            $data['evangelisationTemoignagesStatus'] = $this->input->post('status', true);



                if(!$this->upload->do_upload('audio'))
                {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_new_evangelisation_temoignages', $error);
                    $this->newEvangelisationTemoignages();

                }else{

                    $fileName = $this->upload->data();
                    $data['evangelisationTemoignagesAudio'] = $fileName['file_name'];

                }



                $dataEvangelisationTemoignages = array(

                    'nom_evangelisation_temoignages' => strtoupper($data['evangelisationTemoignagesNom']),
                    'prenoms_evangelisation_temoignages' => strtoupper($data['evangelisationTemoignagesPrenoms']),
                    'profession_evangelisation_temoignages' => $data['evangelisationTemoignagesProfession'],
                    'temoignage_evangelisation_temoignages' => $data['evangelisationTemoignagesAudio'],
                    'status_evangelisation_temoignages' => $data['evangelisationTemoignagesStatus'],
                    'created_by_evangelisation_temoignages' => getAdminId()

                );

               // var_dump($dataEvangelisationTemoignages); die();


                $checkEvangelisationTemoignages = $this->evangelisation_temoignages->checkUser($dataEvangelisationTemoignages);

                if (count($checkEvangelisationTemoignages) == 1) {

                    $this->session->set_flashdata('error_new_evangelisation_temoignages', 'Les données existent en base!');
                    $this->newEvangelisationTemoignages();

                } else {

                    $insertEvangelisationTemoignage = $this->evangelisation_temoignages->create($dataEvangelisationTemoignages);

                    if ($insertEvangelisationTemoignage) {

                        $this->session->set_flashdata('success_new_evangelisation_temoignages', 'Enregistrement effectué');
                        $this->newEvangelisationTemoignages();

                    } else {

                        $this->session->set_flashdata('error_new_evangelisation_temoignages', 'Enregistrement echoué!');
                        $this->newEvangelisationTemoignages();

                    }

                }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getEvangelisationTemoignages()
    {
        if (adminLoggedIn()) {


            $data['titre'] = 'Liste des témoignages';
            $data['menu'] = array('Evangélisation','El-elyôn dans mon histoire');
            $data['allEvangelisationTemoignages'] = $this->evangelisation_temoignages->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/temoignage/getTemoignage', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editEvangelisationTemoignages($id)
    {

        if (adminLoggedIn()) {

            if (isset($id)) {
                $data['titre'] = 'Modifier un témoignage';
                $data['menu'] = array('Evangélisation','El-elyôn dans mon histoire');

                $data['editDataEvangelisationTemoignage'] = $this->evangelisation_temoignages->checkDataByKey($id, 'id_evangelisation_temoignages');
                $data['status'] = $this->status->read();
                if (count($data['editDataEvangelisationTemoignage']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/evangelisation/temoignage/editTemoignage', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }


            } else {


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function upDateEvangelisationTemoignages()
    {
        if (adminLoggedIn()) {


            $path = realpath(APPPATH.'../assets/evangelisation/temoignage/image');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;
            $config['max_size'] = 10000000;

            $this->load->library('upload', $config);


            $data['upDateEvangelisationTemoignagesNom'] = $this->input->post('nom', true);
            $data['upDateEvangelisationTemoignagesPrenoms'] = $this->input->post('prenoms', true);
            $data['upDateEvangelisationTemoignagesProfession'] = $this->input->post('profession', true);
            $data['upDateEvangelisationTemoignagesStatus'] = (int)$this->input->post('editStatus', true);


            $idUpDateEvangelisationTemoignage = $this->input->post('idEvangelisationTemoignagesUpDate', true);

              //var_dump($idUpDateEvangelisationTemoignage); die();
             if($this->upload->do_upload('temoignage'))
             {
                 $fileName = $this->upload->data();
                 $data['upDateEvangelisationTemoignagesImage'] = $fileName['file_name'];

             }


                $dataEvangelisationTemoignage = array(

                    'nom_evangelisation_temoignages' => $data['upDateEvangelisationTemoignagesNom'],
                    'prenoms_evangelisation_temoignages' => $data['upDateEvangelisationTemoignagesPrenoms'],
                    'profession_evangelisation_temoignages' => $data['upDateEvangelisationTemoignagesProfession'],
                    'file_evangelisation_temoignages' => $data['upDateEvangelisationTemoignagesImage'],
                    'status_evangelisation_temoignages' => $data['upDateEvangelisationTemoignagesStatus'],
                    'modified_at_evangelisation_temoignages' => date('Y-m-d h:i:s'),
                    'modified_by_evangelisation_temoignages' => getAdminId()

                );

                // var_dump($dataEvangelisationTemoignage); die();

                $upDateDataEvangelisationTemoignage = $this->evangelisation_temoignages->update(array('id_evangelisation_temoignages'=>$idUpDateEvangelisationTemoignage), $dataEvangelisationTemoignage);

                //var_dump($upDateDataEvangelisationTemoignage); die();

                if ($upDateDataEvangelisationTemoignage) {

                    $this->session->set_flashdata('success_get_evangelisation_temoignage', 'Modification effectuée');
                    $this->getEvangelisationTemoignages();


                } else {


                    $this->session->set_flashdata('error_get_evangelisation_temoignage', 'Modification échouée');
                    $this->getEvangelisationTemoignages();


                }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteEvangelisationTemoignages()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);

                $idDelEvangelisationTemoignage = $this->input->post('text', true);

                if (!empty($idDelEvangelisationTemoignage)) {

                    $idDelEvangelisationTemoignageDecrypt = $this->encryption->decrypt($idDelEvangelisationTemoignage);

                    $delEvangelisationTemoignage = $this->evangelisation_temoignages->delete(array('id_evangelisation_temoignages' => $idDelEvangelisationTemoignageDecrypt));

                    if ($delEvangelisationTemoignage) {

                    } else {


                    }

                }


            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function newEvangelisationRadio()
    {
        if (adminLoggedIn()) {
            $data['titre'] = 'Ajouter une radio';
            $data['menu'] = array('Evangélisation','Radio');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/radio/newRadio',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addEvangelisationRadio()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH . '../assets/radio/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';

            $this->load->library('upload', $config);


            $data['evangelisationRadioTitle'] = $this->input->post('title', true);
            $data['evangelisationRadioDescribe'] = $this->input->post('describe', true);
            // $data['evangelisationRadioLienRadio'] = $this->input->post('lienRadio',true);
            $data['evangelisationRadioStatus'] = (int)$this->input->post('status', true);


            if (!empty($data['evangelisationRadioTitle']) and !empty($data['evangelisationRadioDescribe'])) {

                if ($this->upload->do_upload('audio')) {

                    $fileName = $this->upload->data();

                    $dataEvangelisationRadio = array(

                        'titre_evangelisation_radio' => $data['evangelisationRadioTitle'],
                        'description_evangelisation_radio' => $data['evangelisationRadioDescribe'],
                        'file_evangelisation_radio' => $fileName['file_name'],
                        'status_evangelisation_radio' => $data['evangelisationRadioStatus'],
                        'created_by_evangelisation_radio' => getAdminId()

                    );


                    $checkDataEvangelisationRadio = $this->evangelisation_radio->checkUser($dataEvangelisationRadio);

                    if (count($checkDataEvangelisationRadio) == 1) {

                        $this->session->set_flashdata('error_new_evangelisationRadio', 'Les données existent en base!');
                        $this->newEvangelisationRadio();


                    } else {


                        $insertDataEvangelisation = $this->evangelisation_radio->create($dataEvangelisationRadio);

                        if ($insertDataEvangelisation) {
                            $this->session->set_flashdata('success_new_evangelisationRadio', 'Enregistrement effectué avec success!');
                            $this->newEvangelisationRadio();

                        } else {

                            $this->session->set_flashdata('error_new_evangelisationRadio', 'Enregistrement echoué!');
                            $this->newEvangelisationRadio();

                        }

                    }


                } else {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_new_evangelisationRadio', $error);
                    $this->newEvangelisationRadio();

                }

            } else {


                $this->session->set_flashdata('error_new_evangelisationRadio', 'Veillez remplir correctement le formulaire svp!');
                $this->newEvangelisationRadio();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getEvangelisationRadio()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des radios';
            $data['menu'] = array('Evangélisation','Radio');
            $data['allEvangelisationRadio'] = $this->evangelisation_radio->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/radio/getRadio', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editEvangelisationRadio($id_radio)
    {
        if (adminLoggedIn()) {
            if ($id_radio) {

                $data['titre'] = 'Modifier une radio';
                $data['menu'] = array('Evangélisation','Radio');

                $data['editEvangelisationRadio'] = $this->evangelisation_radio->checkDataByKey($id_radio, 'id_evangelisation_radio');

                $data['status'] = $this->status->read();

                if (count($data['editEvangelisationRadio'])) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/evangelisation/radio/editRadio', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateEvangelisationRadio()
    {
        if (adminLoggedIn()) {
            $data['updateEvangelisationRadioTitle'] = $this->input->post('titre', true);
            $data['updateEvangelisationRadioDescribe'] = $this->input->post('describe', true);
            $data['updateEvangelisationRadioStatus'] = (int)$this->input->post('status', true);


            $idUpDateEvangelisationRadio = $this->input->post('idEvangelisationRadioUpDate', true);

            if (!empty($data['updateEvangelisationRadioTitle']) and !empty($data['updateEvangelisationRadioDescribe'])) {

                $updateDataEvangelisationRadio = array(
                    'titre_evangelisation_radio' => $data['updateEvangelisationRadioTitle'],
                    'description_evangelisation_radio' => $data['updateEvangelisationRadioDescribe'],
                    'status_evangelisation_radio' => $data['updateEvangelisationRadioStatus'],
                );


                $updateEvangelisationRadio = $this->evangelisation_radio->update(array('id_evangelisation_radio' => $idUpDateEvangelisationRadio), $updateDataEvangelisationRadio);

                if ($updateEvangelisationRadio) {

                    $this->session->set_flashdata('success_get_evangelisation_radio', 'Modification effectuée');
                    $this->getEvangelisationRadio();

                } else {


                    $this->session->set_flashdata('error_get_evangelisation_radio', 'Modification échouée!');
                    $this->getEvangelisationRadio();
                }


            } else {


                //  $this->session->set_flashdata('error_edit_evangelisation_radio','Les données existent en base!');
                //  $this->editEvangelisationRadio();

                echo "<script> 
                              alert('Formulaire incomplet, Veillez le remplir pour modifier!');
                      </script>";

                // redirect('backoffice/admin/editEvangelisationRadio/');


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteEvangelisationRadio()
    {
        if (adminLoggedIn()) {
            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);

                $idDelEvangelisationRadio = $this->input->post('text', true);

                if ($idDelEvangelisationRadio) {

                    $idDelEvangelisationRadioDecrypt = $this->encryption->decrypt($idDelEvangelisationRadio);

                    $delEvangelisationRadio = $this->evangelisation_radio->delete(array('id_evangelisation_radio' => $idDelEvangelisationRadioDecrypt));

                    if ($delEvangelisationRadio) {

                    } else {


                    }

                }


            } else {


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function newEvangelisationTvLive()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un enseignement';
            $data['menu'] = array('Evangélisation','Enseignements');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/tvlive/newTvlive',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addEvangelisationTvLive()
    {
        if (adminLoggedIn()) {
            $data['evangelisationTvLiveCode'] = $this->input->post('codeEvan', true);
            $data['evangelisationTvLiveLabel'] = $this->input->post('libelleEvan', true);
            $data['evangelisationTvLiveLien'] = $this->input->post('lienEvan', true);
            $data['evangelisationTvLiveDateDebut'] = $this->input->post('dateDEvan', true);
            $data['evangelisationTvLiveDateFin'] = $this->input->post('dateFEvan', true);
            $data['evangelisationTvLiveHeure'] = $this->input->post('heureEvan', true);
            $data['evangelisationTvLiveComment'] = $this->input->post('commentEvan', true);
            $data['evangelisationTvLiveStatus'] = (int)$this->input->post('statusEvan', true);

            $dataEvangelisationTvLive = array(

                'code_evangelisation_tv_live' => $data['evangelisationTvLiveCode'],
                'libelle_evangelisation_tv_live' => $data['evangelisationTvLiveLabel'],
                'lien_evangelisation_tv_live' => $data['evangelisationTvLiveLien'],
                'date_debut_evangelisation_tv_live' => $data['evangelisationTvLiveDateDebut'],
                'date_fin_evangelisation_tv_live' => $data['evangelisationTvLiveDateFin'],
                'heure_evangelisation_tv_live' => $data['evangelisationTvLiveHeure'],
                'commentaire_evangelisation_tv_live' => $data['evangelisationTvLiveComment'],
                'status_evangelisation_tv_live' => $data['evangelisationTvLiveStatus'],
                'created_by_evangelisation_tv_live' => getAdminId()

            );
            //  var_dump($dataEvangelisationTvLive); die();

            $checkEvangelisationTvLive = $this->evangelisation_tv_live->checkUser($dataEvangelisationTvLive);

            //  var_dump($checkEvangelisationTvLive); die();

            if (count($checkEvangelisationTvLive) == 1) {

                $this->session->set_flashdata('error_new_evangelisationTvLive', 'Les données existent en base!');
                $this->newEvangelisationTvLive();

            } else {

                //  var_dump($dataEvangelisationTvLive);die();

                $insertDataEvangelisationTvLive = $this->evangelisation_tv_live->create($dataEvangelisationTvLive);

                //  var_dump($insertDataEvangelisationTvLive); die();

                if ($insertDataEvangelisationTvLive) {

                    $this->session->set_flashdata('success_new_evangelisationTvLive', 'Enregistrement effectué!');
                    $this->newEvangelisationTvLive();

                } else {

                    $this->session->set_flashdata('error_new_evangelisationTvLive', 'Enregistrement échoué!');
                    $this->newEvangelisationTvLive();
                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getEvangelisationTvLive()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des enseignements';
            $data['menu'] = array('Evangélisation','Enseignements');

            $data['allEvangelisationTvLive'] = $this->evangelisation_tv_live->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/tvlive/getTvlive', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function editEvangelisationLiveTv($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {
                $data['titre'] = 'Modifier un enseignement';
                $data['menu'] = array('Evangélisation','Enseigneents');

                $data['editEvangelisationTvLive'] = $this->evangelisation_tv_live->checkDataByKey($id, 'id_evangelisation_tv_live');

                $data['status'] = $this->status->read();

                if (count($data['editEvangelisationTvLive']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/evangelisation/tvlive/editTvlive', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }


            }


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateEvangelisationTvLive()
    {
        if (adminLoggedIn()) {

            $data['upDateEvangelisationCode'] = $this->input->post('editCode', true);
            $data['upDateEvangelisationLabel'] = $this->input->post('editLibelle', true);
            $data['upDateEvangelisationLink'] = $this->input->post('editLien', true);
            $data['upDateEvangelisationDateD'] = $this->input->post('editDateD', true);
            $data['upDateEvangelisationDateF'] = $this->input->post('editDateF', true);
            $data['upDateEvangelisationHeure'] = $this->input->post('editHeure', true);
            $data['upDateEvangelisationComment'] = $this->input->post('editComment', true);
            $data['upDateEvangelisationStatus'] = (int)$this->input->post('editStatus', true);

            $idUpDateEvangelisationTvLive = $this->input->post('idEvangelisationTvLiveUpDate', true);

            $dataEvangelisationTvLive = array(

                'code_evangelisation_tv_live' => $data['upDateEvangelisationCode'],
                'libelle_evangelisation_tv_live' => $data['upDateEvangelisationLabel'],
                'lien_evangelisation_tv_live' => $data['upDateEvangelisationLink'],
                'date_debut_evangelisation_tv_live' => $data['upDateEvangelisationDateD'],
                'date_fin_evangelisation_tv_live' => $data['upDateEvangelisationDateF'],
                'heure_evangelisation_tv_live' => $data['upDateEvangelisationHeure'],
                'commentaire_evangelisation_tv_live' => $data['upDateEvangelisationComment'],
                'status_evangelisation_tv_live' => $data['upDateEvangelisationStatus'],
                'modified_at_evangelisation_tv_live' => date('Y-m-d h:i:s'),
                'modified_by_evangelisation_tv_live' => getAdminId()

            );


            //   var_dump($dataEvangelisationTvLive); die();


            $upDateDataEvangelisationTvLive = $this->evangelisation_tv_live->update(array('id_evangelisation_tv_live ' => $idUpDateEvangelisationTvLive), $dataEvangelisationTvLive);

            if ($upDateDataEvangelisationTvLive) {

                $this->session->set_flashdata('success_get_evangelisation_tv_live', 'Modification effectuée!');
                $this->getEvangelisationTvLive();

            } else {

                $this->session->set_flashdata('error_get_evangelisation_tv_live', 'Modification échouée!');
                $this->getEvangelisationTvLive();


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteEvangelisationTvLive()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);

                $idDelEvangelisationTvLive = $this->input->post('text', true);

                if (!empty($idDelEvangelisationTvLive)) {

                    $idDelEvangelisationTvLiveDecrypt = $this->encryption->decrypt($idDelEvangelisationTvLive);

                    $deleteEvangelisationTvLive = $this->evangelisation_tv_live->delete(array('id_evangelisation_tv_live ' => $idDelEvangelisationTvLiveDecrypt));

                    if ($deleteEvangelisationTvLive) {


                    } else {


                    }

                }

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }


    /* ================= BIenvenue ==============================*/

    public function newInterfaceBienvenue()
    {
        if (adminLoggedIn()){

            $data['titre'] = 'Ajouter un contenu';
            $data['menu'] = array('Interface','Bienvenue','Présentation');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/interface_bienvenue/newBienvenue',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addInterfaceBienvenue()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH . '../assets/bienvenue/img/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;
            $config['max_size'] = 10000000;


            $this->load->library('upload', $config);


            $data['addInterfaceBienvenueTitle'] = $this->input->post('titre', true);
            $data['addInterfaceBienvenueText1'] = $this->input->post('texte1', true);
            $data['addInterfaceBienvenueText2'] = $this->input->post('texte2', true);
            $data['addInterfaceBienvenueText3'] = $this->input->post('texte3', true);
            $data['addInterfaceBienvenueText4'] = $this->input->post('texte4', true);
            $data['addInterfaceBienvenueText5'] = $this->input->post('texte5', true);
            $data['addInterfaceBienvenueStatus'] = (int)$this->input->post('status', true);


            if (!$this->upload->do_upload('img')) {

                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_interface_bienvenue', $error);
                $this->newInterfaceBienvenue();


            } else {

                $fileName = $this->upload->data();

            }


            $dataInterfaceBienvenue = array(

                'titre_interface_bienvenue' => $data['addInterfaceBienvenueTitle'],
                'texte1_interface_bienvenue' => $data['addInterfaceBienvenueText1'],
                'texte2_interface_bienvenue' => $data['addInterfaceBienvenueText2'],
                'texte3_interface_bienvenue' => $data['addInterfaceBienvenueText3'],
                'texte4_interface_bienvenue' => $data['addInterfaceBienvenueText4'],
                'texte5_interface_bienvenue' => $data['addInterfaceBienvenueText5'],
                'file_interface_bienvenue' => $fileName['file_name'],
                'status_interface_bienvenue' => $data['addInterfaceBienvenueStatus'],
                'created_by_interface_bienvenue' => getAdminId()

            );
            //  var_dump($dataInterfaceBienvenue); die();


            $checkDataInterfaceBienvenue = $this->bienvenue->checkUser($dataInterfaceBienvenue);

            if (count($checkDataInterfaceBienvenue) == 1) {

                $this->session->set_flashdata('error_interface_bienvenue', 'Les données existent en base');
                $this->newInterfaceBienvenue();

            } else {


                $insertDataInterfaceBienvenue = $this->bienvenue->create($dataInterfaceBienvenue);

                if ($insertDataInterfaceBienvenue) {
                    $this->session->set_flashdata('success_interface_bienvenue', 'Enregistrment effectué');
                    $this->newInterfaceBienvenue();

                } else {

                    $this->session->set_flashdata('error_interface_bienvenue', 'Enregistrement échoué');
                    $this->newInterfaceBienvenue();

                }


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getInterfaceBienvenue()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des contenus';
            $data['menu'] = array('Interface','Bienvenue','Présentation');

            $data['allInterfaceBienvenue'] = $this->bienvenue->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/interface_bienvenue/getBienvenue', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');
        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editInterfaceBienvenue($id)
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Modifier du contenu';
            $data['menu'] = array('Interface','Bienvenue','Présentation');
            $data['status'] = $this->status->read();

            $data['editInterfaceBienvenue'] = $this->bienvenue->checkDataByKey($id, 'id_interface_bienvenue');

            if (count($data['editInterfaceBienvenue']) == 1) {

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop', $this->data);
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/interface_bienvenue/editBienvenue', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateInterfaceBienvenue()
    {
        if (adminLoggedIn()) {

            $data['upDateInterfaceBienvenueTitle'] = $this->input->post('editTitre', true);
            $data['upDateInterfaceBienvenueText1'] = $this->input->post('editTexte1', true);
            $data['upDateInterfaceBienvenueText2'] = $this->input->post('editTexte2', true);
            $data['upDateInterfaceBienvenueText3'] = $this->input->post('editTexte3', true);
            $data['upDateInterfaceBienvenueText4'] = $this->input->post('editTexte4', true);
            $data['upDateInterfaceBienvenueText5'] = $this->input->post('editTexte5', true);
            $data['upDateInterfaceBienvenueStatus'] = (int)$this->input->post('editStatus', true);

            $idUpDateInterfaceBienvenue = $this->input->post('idInterfaceBienvenueUpDate', true);

            /**
             * Update image , we receive by post method the name of the old image
             */

            $oldImage = $this->input->post('oldImageUpdate', true);


            if (isset($_FILES['editImage']) && is_uploaded_file($_FILES['editImage']['tmp_name'])) {

                $path = realpath(APPPATH . '../assets/bienvenue/img/');
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $config['max_size'] = 10000000;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('editImage')) {
                    $error = $this->upload->display_errors();

                    //  echo ('<script> alert('.$error.')</script>');

                    $this->session->set_flashdata('error_get_interface_bienvenue', $error);
                    $this->getInterfaceBienvenue();

                } else {

                    $fileName = $this->upload->data();
                    $data['upDateInterfaceBienvenueFile'] = $fileName['file_name'];

                }

            }

            $dataInterfaceBienvenue = array(

                'titre_interface_bienvenue' => $data['upDateInterfaceBienvenueTitle'],
                'file_interface_bienvenue' => $data['upDateInterfaceBienvenueFile'],
                'texte1_interface_bienvenue' => $data['upDateInterfaceBienvenueText1'],
                'texte2_interface_bienvenue' => $data['upDateInterfaceBienvenueText2'],
                'texte3_interface_bienvenue' => $data['upDateInterfaceBienvenueText3'],
                'texte4_interface_bienvenue' => $data['upDateInterfaceBienvenueText4'],
                'texte5_interface_bienvenue' => $data['upDateInterfaceBienvenueText5'],
                'status_interface_bienvenue' => $data['upDateInterfaceBienvenueStatus'],
                'modified_at_interface_bienvenue' => date('Y-m-d h:i:s'),
                'modified_by_interface_bienvenue' => getAdminId()

            );


            //   var_dump($dataInterfaceBienvenue); die();

            $upDateData = $this->bienvenue->update(array('id_interface_bienvenue' => $idUpDateInterfaceBienvenue), $dataInterfaceBienvenue);

            if ($upDateData) {
                if (!empty($data['upDateInterfaceBienvenueFile']) and isset($data['upDateInterfaceBienvenueFile'])) {

                    if (file_exists($path . '/' . $oldImage)) {
                        unlink($path . '/' . $oldImage);
                    }

                }

                $this->session->set_flashdata('success_get_interface_bienvenue', 'Modification effectuée');
                $this->getInterfaceBienvenue();

            } else {

                $this->session->set_flashdata('error_get_interface_bienvenue', 'Modification échouée');
                $this->getInterfaceBienvenue();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteInterfaceBienvenue()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idUpDateInterfaceBienvenue = $this->input->post('text', true);


                if (!empty($idUpDateInterfaceBienvenue)) {

                    $idUpDateInterfaceBienvenueDecrypt = $this->encryption->decrypt($idUpDateInterfaceBienvenue);

                    /**
                     * Delete Image, we get the image by id from database
                     */

                    $oldImage = $this->bienvenue->getImageById('file_interface_bienvenue', array('id_interface_bienvenue' => $idUpDateInterfaceBienvenueDecrypt));

                    //var_dump($oldImage); die();
                    /**
                     * we check and define the realImage
                     */
                    if (!empty($oldImage) and count($oldImage) == 1) {
                        $realImage = $oldImage[0]['file_interface_bienvenue'];
                    }
                    // var_dump($realImage); die();

                    $delete = $this->bienvenue->delete(array('id_interface_bienvenue' => $idUpDateInterfaceBienvenueDecrypt));

                    if ($delete) {
                        /**
                         * we delete the realImage from the path
                         */
                        $path = realpath(APPPATH . '../assets/bienvenue/img/');

                        if (!empty($realImage) and isset($realImage)) {
                            if (file_exists($path . '/' . $realImage)) {
                                unlink($path . '/' . $realImage);
                            }

                        }

                        echo 'success';

                    } else {


                        echo 'failed';

                    }

                }

            } else {


            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }


    /* ================= Organisation ==============================*/


    public function newInterfaceOrganisation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un contenu';
            $data['menu'] = array('Interface','Bienvenue','Organisation');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/interface_organisation/newOrganisation',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function addInterfaceOrganisation()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH .'../assets/organisation/img/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;
            $config['max_size'] = 10000000;

            $this->load->library('upload', $config);

            $data['addIntefaceOrganisationTitle'] = $this->input->post('titreOrganisation', true);
            $data['addIntefaceOrganisationParagraph1'] = $this->input->post('paragraph1', true);
            $data['addIntefaceOrganisationParagraph2'] = $this->input->post('paragraph2', true);
            $data['addIntefaceOrganisationStatus'] = (int)$this->input->post('statusOrganisation', true);


            if (!$this->upload->do_upload('imgOrganisation')) {

                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_interface_organisation', $error);
                $this->newInterfaceOrganisation();

            } else {


                $fileName = $this->upload->data();
                $data['addIntefaceOrganisationFile'] = $fileName['file_name'];

            }


            $dataInterfaceOrganisation = array(

                'titre_interface_organisation' => $data['addIntefaceOrganisationTitle'],
                'paragraph1_interface_organisation' => $data['addIntefaceOrganisationParagraph1'],
                'paragraph2_interface_organisation' => $data['addIntefaceOrganisationParagraph2'],
                'file_interface_organisation' => $data['addIntefaceOrganisationFile'],
                'status_interface_organisation' => $data['addIntefaceOrganisationStatus'],
                'created_by_interface_organisation' => getAdminId()
            );


            $checkDataInterfaceOrganisation = $this->organisation->checkUser($dataInterfaceOrganisation);


            if (count($checkDataInterfaceOrganisation) == 1) {
                $this->session->set_flashdata('error_interface_organisation', 'les données existent en base!');
                $this->newInterfaceOrganisation();
            } else {

                $insertDataInterfaceOrganisation = $this->organisation->create($dataInterfaceOrganisation);

                // var_dump($insertDataInterfaceOrganisation); die();

                if ($insertDataInterfaceOrganisation) {
                    $this->session->set_flashdata('success_interface_organisation', 'Enregistrement effectué avec success');
                    $this->newInterfaceOrganisation();
                } else {

                    $this->session->set_flashdata('error_interface_organisation', 'Enregistrement échoué');
                    $this->newInterfaceOrganisation();
                }

            }

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function getInterfaceOrganisation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des contenus';
            $data['menu'] = array('Interface','Bienvenue','Organisation');

            $data['allInterfaceOrganisation'] = $this->organisation->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/interface_organisation/getOrganisation', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editInterfaceOrganisation($id)
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Modifier des contenus';
            $data['menu'] = array('Interface','Bienvenue','Organisation');

            $data['editInterfaceOrganisation'] = $this->organisation->checkDataByKey($id, 'id_interface_organisation');

            if (count($data['editInterfaceOrganisation']) == 1) {

                $data['status'] = $this->status->read();

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/interface_organisation/editOrganisation', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function upDateInterfaceOrganisation()
    {
        if (adminLoggedIn()) {

            $data['upDateInterfaceOrganisationTitle'] = $this->input->post('editTitreOrganisation', true);
            $data['upDateInterfaceOrganisationParagraph1'] = $this->input->post('editParagraph1', true);
            $data['upDateInterfaceOrganisationParagraph2'] = $this->input->post('editParagraph2', true);
            $data['upDateInterfaceOrganisationStatus'] = (int)$this->input->post('editStatus', true);


            $idUpDateInterfaceOrganisation = $this->input->post('idInterfaceOrganisationUpDate', true);
            $oldImageOrganisation = $this->input->post('oldImageUpdate', true);

           // if (isset($_FILES['editImageOrganisation']) && is_uploaded_file($_FILES['editImageOrganisation']['tmp_name'])) {

                $path = realpath(APPPATH.'../assets/organisation/img/');

                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $config['max_size'] = 10000000;

                $this->load->library('upload', $config);


                if (!$this->upload->do_upload('editImageOrganisation')) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_get_interface_organisation', $error);
                    $this->getInterfaceOrganisation();

                } else {

                    $fileName = $this->upload->data();
                    $data['upDateInterfaceOrganisationFile'] = $fileName['file_name'];

                }
            //}


            $dataInterfaceOrganisation = array(

                'titre_interface_organisation' => $data['upDateInterfaceOrganisationTitle'],
                'paragraph1_interface_organisation' => $data['upDateInterfaceOrganisationParagraph1'],
                'paragraph2_interface_organisation' => $data['upDateInterfaceOrganisationParagraph2'],
                'file_interface_organisation' => $data['upDateInterfaceOrganisationFile'],
                'status_interface_organisation' => $data['upDateInterfaceOrganisationStatus'],
                'modified_at_interface_organisation' => date('Y-m-d h:i:s'),
                'modified_by_interface_organisation' => getAdminId()
            );

            //  var_dump($dataInterfaceOrganisation); die();

            $upDateDataInterfaceOrganisation = $this->organisation->update(array('id_interface_organisation' => $idUpDateInterfaceOrganisation), $dataInterfaceOrganisation);

            if ($upDateDataInterfaceOrganisation) {
                if (!empty($data['upDateInterfaceOrganisationFile']) and isset($data['upDateInterfaceOrganisationFile'])) {
                    if (file_exists($path . '/' . $oldImageOrganisation)) {
                        unlink($path . '/' . $oldImageOrganisation);
                    }
                }


                $this->session->set_flashdata('success_get_interface_organisation', 'Modification effectuée');
                $this->getInterfaceOrganisation();

            } else {

                $this->session->set_flashdata('error_get_interface_organisation', 'Modification échouée');
                $this->getInterfaceOrganisation();

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function deleteInterfaceOrganisation()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);

                $idDelInterfaceOrganisation = $this->input->post('text', true);

                if (!empty($idDelInterfaceOrganisation)) {

                    $idDelInterfaceOrganisationDecrypt = $this->encryption->decrypt($idDelInterfaceOrganisation);

                    $delOldImage = $this->organisation->getImageById('file_interface_organisation', array('id_interface_organisation' => $idDelInterfaceOrganisationDecrypt));

                    if (!empty($delOldImage) and count($delOldImage) == 1) {
                        $realImage = $delOldImage[0]['file_interface_organisation'];
                    }

                    $delInterfaceOrganisation = $this->organisation->delete(array('id_interface_organisation' => $idDelInterfaceOrganisationDecrypt));

                    if ($delInterfaceOrganisation) {

                        if (!empty($realImage) and isset($realImage)) {
                            $path = realpath(APPPATH . '../assets/organisation/img');

                            if (file_exists($path . '/' . $realImage)) {
                                unlink($path . '/' . $realImage);
                            }

                        }

                    } else {


                    }
                }

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }


    /* ================= Partenaires ==============================*/


    public function newInterfacePartenaires()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un logo';
            $data['menu'] = array('Interface','Bienvenue','Partenaires');
            $data['status'] = $this->status->read();
            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/interface_partenaires/newPartenaires',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');
        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addInterfacePartenaires()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH . '../assets/partenaires/img/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;
            $config['max_size'] = 10000000;


            $this->load->library('upload', $config);

            $data['addInterfacePartenairesName'] = $this->input->post('name', true);
            $data['addInterfacePartenairesStatus'] = (int)$this->input->post('status', true);


            if (!$this->upload->do_upload('logo')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_interface_parteanaires', $error);
                $this->newInterfacePartenaires();

            } else {

                $fileName = $this->upload->data();
                $data['addInterfacePartenairesFile'] = $fileName['file_name'];

            }


            $dataInterfacePartenaires = array(

                'nom_interface_partenaires' => $data['addInterfacePartenairesName'],
                'file_interface_partenaires' => $data['addInterfacePartenairesFile'],
                'status_interface_partenaires' => $data['addInterfacePartenairesStatus'],
                'created_by_interface_partenaires' => getAdminId()

            );

            $checkInterfacePartenaires = $this->partenaires->checkUser($dataInterfacePartenaires);

            if (count($checkInterfacePartenaires) == 1) {
                $this->session->set_flashdata('error_new_interface_parteanaires', 'les données existent en base!');
                $this->newInterfacePartenaires();
            } else {


                $insertInterfacePartenaires = $this->partenaires->create($dataInterfacePartenaires);

                if ($insertInterfacePartenaires) {

                    $this->session->set_flashdata('success_new_interface_parteanaires', 'Enregistrement éffectué!');
                    $this->newInterfacePartenaires();

                } else {

                    $this->session->set_flashdata('error_new_interface_parteanaires', 'Enregistrement échoué!');
                    $this->newInterfacePartenaires();
                }

            }


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getInterfacePartenaires()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des logos';
            $data['menu'] = array('Interface','Bienvenue','Partenaires');
            $data['allInterfacePartenaires'] = $this->partenaires->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/interface_partenaires/getPartenaires', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editInterfacePartenaires($id)
    {
        if (adminLoggedIn()) {


            $data['titre'] = 'Modifier un logo';
            $data['menu'] = array('Interface','Bienvenue','Partenaires');
            $data['status'] = $this->status->read();
            $data['editInterfacePartenaires'] = $this->partenaires->checkDataByKey($id, 'id_interface_partenaires');

            if (count($data['editInterfacePartenaires']) == 1) {

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop', $this->data);
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/interface_partenaires/editPartenaires', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }

        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateInterfacePartenaires()
    {
        if (adminLoggedIn()) {

            $data['upDateInterfacePartenairesName'] = $this->input->post('editNomPartenaires', true);
            $data['upDateInterfacePartenairesStatus'] = $this->input->post('editStatusPartenaires', true);


            $idUpDateinterfacePartenaires = $this->input->post('idInterfacePartenairesUpDate', true);
            $oldImageinterfacePartenaires = $this->input->post('oldImageUpdate', true);


            if (isset($_FILES['editImagePartenaires']) and is_uploaded_file($_FILES['editImagePartenaires']['tmp_name'])) {
                $path = realpath(APPPATH . '../assets/partenaires/img/');

                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $config['max_size'] = 10000000;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('editImagePartenaires')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_get_interface_organisation', $error);
                    $this->getInterfaceOrganisation();

                } else {

                    $fileName = $this->upload->data();
                    $data['upDateInterfacePartenairesFile'] = $fileName['file_name'];

                }
            }

            $dataInterfaceParteneires = array(

                'nom_interface_partenaires' => $data['upDateInterfacePartenairesName'],
                'file_interface_partenaires' => $data['upDateInterfacePartenairesFile'],
                'status_interface_partenaires' => $data['upDateInterfacePartenairesStatus'],
                'modified_at_interface_partenaires' => date('Y-m-d h:i:s'),
                'modified_by_interface_partenaires' => getAdminId()

            );

            //   var_dump($dataInterfaceParteneires); die;

            $upDateInterfacePartenaires = $this->partenaires->update(array('id_interface_partenaires' => $idUpDateinterfacePartenaires), $dataInterfaceParteneires);

            if ($upDateInterfacePartenaires) {
                if (!empty($data['upDateInterfacePartenairesFile']) and isset($data['upDateInterfacePartenairesFile'])) {
                    if (file_exists($path . '/' . $oldImageinterfacePartenaires)) {
                        unlink($path . '/' . $oldImageinterfacePartenaires);
                    }

                }

                $this->session->set_flashdata('success_get_interface_partenaires', 'Modification effectuée');
                $this->getInterfacePartenaires();

            } else {

                $this->session->set_flashdata('error_get_interface_partenaires', 'Modification echouée');
                $this->getInterfacePartenaires();
            }


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteInterfacePartenaires()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);
                $idDelInterfacePartenaires = $this->input->post('text', true);

                if (!empty($idDelInterfacePartenaires)) {

                    $idDelInterfacePartenairesDecrypt = $this->encryption->decrypt($idDelInterfacePartenaires);

                    $oldImage = $this->partenaires->getImageById('file_interface_partenaires', array('id_interface_partenaires' => $idDelInterfacePartenairesDecrypt));


                    if (!empty($oldImage) and count($oldImage) == 1) {
                        $realImage = $oldImage[0]['file_interface_partenaires'];
                    }


                    $delInterfacePartenaires = $this->partenaires->delete(array('id_interface_partenaires' => $idDelInterfacePartenairesDecrypt));

                    if ($delInterfacePartenaires) {
                        if (!empty($realImage)) {
                            $path = realpath(APPPATH . '../assets/partenaires/img/');

                            if (file_exists($path . '/' . $realImage)) {
                                unlink($path . '/' . $realImage);

                            }
                        }

                        echo('success');

                    } else {

                        echo('failed');

                    }

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    /* ================= Slide One  ==============================*/

    public function newSlideOne()
    {
        if (adminLoggedIn()) {
            $data['titre'] = 'Ajouter du contenu';
            $data['menu'] = array('Gestion des slides','Slide N°1','Plateforme d\' exercices');
            $data['status'] = $this->status->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/slides/one/newSlideOne',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addSlideOne()
    {
        if (adminLoggedIn()) {
            $data['addSlideName'] = $this->input->post('name', true);
            $data['addSlideSection1'] = $this->input->post('section1', true);
            $data['addSlideSection2'] = $this->input->post('section2', true);
            $data['addSlideSection3'] = $this->input->post('section3', true);
            $data['addSlideSection4'] = $this->input->post('section4', true);
            $data['addSlideSection5'] = $this->input->post('section5', true);
            $data['addSlideReference'] = $this->input->post('reference', true);
            $data['addSlideStatus'] = (int)$this->input->post('status', true);

            $path = realpath(APPPATH . '../assets/slide/img/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;
            $config['max_size'] = 10000000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_slide_one', $error);
                $this->newSlideOne();

            } else {

                $fileName = $this->upload->data();
                $data['addSlideFile'] = $fileName['file_name'];

            }


            $dataSlideOne = array(

                'nom_slide_one' => $data['addSlideName'],
                'section1_slide_one' => $data['addSlideSection1'],
                'section2_slide_one' => $data['addSlideSection2'],
                'section3_slide_one' => $data['addSlideSection3'],
                'section4_slide_one' => $data['addSlideSection4'],
                'section5_slide_one' => $data['addSlideSection5'],
                'reference_slide_one' => $data['addSlideReference'],
                'file_slide_one' => $data['addSlideFile'],
                'status_slide_one' => $data['addSlideStatus'],
                'created_by_slide_one' => getAdminId()

            );


            // var_dump($dataSlideOne); die();

            $checkDataSlideOne = $this->slide_one->checkUser($dataSlideOne);

            if (count($checkDataSlideOne) == 1) {
                $this->session->set_flashdata('error_slide_one', 'désolé! les données existent en base');
                $this->newSlideOne();

            } else {

                $insertDataSlideOne = $this->slide_one->create($dataSlideOne);

                if ($insertDataSlideOne) {
                    $this->session->set_flashdata('success_slide_one', 'Enregistrement effectué!');
                    $this->newSlideOne();

                } else {

                    $this->session->set_flashdata('error_slide_one', 'Enregistrement échoué!');
                    $this->newSlideOne();
                }

            }


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function getSlideOne()
    {
        if (adminLoggedIn()) {
            $data['titre'] = 'Liste des contenus';
            $data['menu'] = array('Gestion des slides','Slide N°1');

            $data['allSlideOne'] = $this->slide_one->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/slides/one/getSlideOne', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');
        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editSlideOne($id)
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Modifier le contenu';
            $data['menu'] = array('Gestion des slides','Slide N°1','Plateforme d\' exercices');
            $data['status'] = $this->status->read();

            $data['editSlideOne'] = $this->slide_one->checkDataByKey($id, 'id_slide_one');

            if (count($data['editSlideOne']) == 1) {

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/slides/one/editSlideOne', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateSlideOne()
    {
        if (adminLoggedIn())
        {

            $data['upDateSlideOneName'] = $this->input->post('editName', true);
            $data['upDateSlideOneSection1'] = $this->input->post('editSection1', true);
            $data['upDateSlideOneSection2'] = $this->input->post('editSection2', true);
            $data['upDateSlideOneSection3'] = $this->input->post('editSection3', true);
            $data['upDateSlideOneSection4'] = $this->input->post('editSection4', true);
            $data['upDateSlideOneSection5'] = $this->input->post('editSection5', true);
            $data['upDateSlideOneReference'] = $this->input->post('editReference', true);
            $data['upDateSlideOneStatus'] = (int)$this->input->post('editStatus', true);


            $idUpDateSlideOne = $this->input->post('idSlideOneUpDate', true);
            $UpDateImageSlideOne = $this->input->post('oldImageSlideOneUpdate', true);


            $path = realpath(APPPATH . '../assets/slide/img/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;
            $config['max_size'] = 10000000;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('editImageSlide')) {

                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_slide_one', $error);
                $this->getSlideOne();

            } else {

                $fileName = $this->upload->data();
                $data['upDateSlideOneFile'] = $fileName['file_name'];

            }

            $dataSlideOne = array(

                'nom_slide_one' => $data['upDateSlideOneName'],
                'section1_slide_one' => $data['upDateSlideOneSection1'],
                'section2_slide_one' => $data['upDateSlideOneSection2'],
                'section3_slide_one' => $data['upDateSlideOneSection3'],
                'section4_slide_one' => $data['upDateSlideOneSection4'],
                'section5_slide_one' => $data['upDateSlideOneSection5'],
                'reference_slide_one' => $data['upDateSlideOneReference'],
                'file_slide_one' => $data['upDateSlideOneFile'],
                'status_slide_one' => $data['upDateSlideOneStatus'],
                'modification_at_slide_one' => date('Y-m-d h:i:s'),
                'modification_by_slide_one' => getAdminId()

            );

            //var_dump($dataSlideOne); die();

            $upDateSlideOne = $this->slide_one->update(array('id_slide_one' => $idUpDateSlideOne), $dataSlideOne);

            if ($upDateSlideOne) {
                if (!empty($data['upDateSlideOneFile']) and isset($data['upDateSlideOneFile'])) {
                    if (file_exists($path . '/' . $UpDateImageSlideOne)) {
                        unlink($path . '/' . $UpDateImageSlideOne);
                    }
                }

                $this->session->set_flashdata('success_get_slide_one', 'Modification effectuée');
                $this->getSlideOne();

            } else {

                $this->session->set_flashdata('error_get_slide_one', 'Modification échouée');
                $this->getSlideOne();
            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteSlideOne()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelSlideOne  = $this->input->post('text',true);



                if(!empty($idDelSlideOne))
                {
                      $idDelSlideOneDecrypt = $this->encryption->decrypt($idDelSlideOne);
                      $imgDelSlideOne  = $this->slide_one->getImageById('file_slide_one', array('id_slide_one'=>$idDelSlideOneDecrypt));


                    if(!empty($imgDelSlideOne) and count($imgDelSlideOne) == 1)
                    {
                        $realImage = $imgDelSlideOne[0]['file_slide_one'];

                    }

                    $delSlideOne = $this->slide_one->delete(array('id_slide_one'=>$idDelSlideOneDecrypt));


                    if($delSlideOne)
                    {
                        if(!empty($realImage))
                        {
                            $path = realpath(APPPATH.'../assets/slide/img/');

                            if(file_exists($path.'/'.$realImage))
                            {
                                unlink($path.'/'.$realImage);
                            }
                        }

                        echo 'success';

                    }else{

                        echo 'failed';
                    }

                }

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    /* ================= Slide Two  ==============================*/



    public function newSlideTwo()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter du contenu';
            $data['menu'] = array('Gestion des slides','Slide N°2');
            $data['status'] = $this->status->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/slides/two/newSlideTwo',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addSlideTwo()
    {
        if (adminLoggedIn()) {
            $data['addSlideTwoName'] = $this->input->post('name', true);
            $data['addSlideTwoSection1'] = $this->input->post('section1', true);
            $data['addSlideTwoSection2'] = $this->input->post('section2', true);
            $data['addSlideTwoSection3'] = $this->input->post('section3', true);
            $data['addSlideTwoSection4'] = $this->input->post('section4', true);
            $data['addSlideTwoSection5'] = $this->input->post('section5', true);
            $data['addSlideTwoReference'] = $this->input->post('reference', true);
            $data['addSlideTwoStatus'] = (int)$this->input->post('status', true);

            $path = realpath(APPPATH . '../assets/slide/img2/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_slide_two', $error);
                $this->newSlideOne();

            } else {

                $fileName = $this->upload->data();
                $data['addSlideTwoFile'] = $fileName['file_name'];

            }


            $dataSlideTwo = array(

                'nom_slide_two' => $data['addSlideTwoName'],
                'section1_slide_two' => $data['addSlideTwoSection1'],
                'section2_slide_two' => $data['addSlideTwoSection2'],
                'section3_slide_two' => $data['addSlideTwoSection3'],
                'section4_slide_two' => $data['addSlideTwoSection4'],
                'section5_slide_two' => $data['addSlideTwoSection5'],
                'reference_slide_two' => $data['addSlideTwoReference'],
                'file_slide_two' => $data['addSlideTwoFile'],
                'status_slide_two' => $data['addSlideTwoStatus'],
                'created_by_slide_two' => getAdminId()

            );


            //     var_dump($dataSlideTwo); die();

            $checkDataSlideTwo = $this->slide_two->checkUser($dataSlideTwo);

            if (count($checkDataSlideTwo) == 1) {
                $this->session->set_flashdata('error_slide_two', 'désolé! les données existent en base');
                $this->newSlideTwo();

            } else {

                $insertDataSlideOne = $this->slide_two->create($dataSlideTwo);

                if ($insertDataSlideOne) {
                    $this->session->set_flashdata('success_slide_two', 'Enregistrement effectué!');
                    $this->newSlideTwo();

                } else {

                    $this->session->set_flashdata('error_slide_two', 'Enregistrement échoué!');
                    $this->newSlideTwo();
                }

            }
        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getSlideTwo()
    {
        if (adminLoggedIn()) {


            $data['titre'] = 'Liste des contenus';
            $data['menu'] = array('Gestion des slides','Slide N°2');

            $data['allSlideTwo'] = $this->slide_two->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/slides/two/getSlideTwo', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');
        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editSlideTwo($id)
    {
        if(adminLoggedIn())
        {
           $data['titre'] = 'Modifier le contenu';
            $data['menu'] = array('Gestion des slides','Slide N°2');

            $data['editSlideTwo'] = $this->slide_two->checkDataByKey($id,'id_slide_two');
            $data['status'] = $this->status->read();

            if(count($data['editSlideTwo']) == 1)
            {

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/slides/two/editSlideTwo',$data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }

        }else{

            $this->session->set_flashdata('error','Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateSlideTwo()
    {
        if (adminLoggedIn()) {

            $data['upDateSlideTwoName'] = $this->input->post('name', true);
            $data['upDateSlideTwoSection1'] = $this->input->post('section1', true);
            $data['upDateSlideTwoSection2'] = $this->input->post('section2', true);
            $data['upDateSlideTwoSection3'] = $this->input->post('section3', true);
            $data['upDateSlideTwoSection4'] = $this->input->post('section4', true);
            $data['upDateSlideTwoSection5'] = $this->input->post('section5', true);
            $data['upDateSlideTwoReference'] = $this->input->post('reference', true);
            $data['upDateSlideTwoStatus'] = (int)$this->input->post('status', true);


            $idUpDateSlideTwo = (int)$this->input->post('idSlideTwo', true);
            $UpDateImageSlideTwo = $this->input->post('oldImageSlide2', true);

          //  var_dump($UpDateImageSlideTwo); die();


            $path = realpath(APPPATH.'../assets/slide/img2/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('imageSlideTwo')) {

                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_slide_two', $error);
                $this->getSlideTwo();

            }else{

                $fileName = $this->upload->data();
                $data['upDateSlideTwoFile'] = $fileName['file_name'];

            }


            $dataSlideTwo = array(

                'nom_slide_two' => $data['upDateSlideTwoName'],
                'section1_slide_two' => $data['upDateSlideTwoSection1'],
                'section2_slide_two' => $data['upDateSlideTwoSection2'],
                'section3_slide_two' => $data['upDateSlideTwoSection3'],
                'section4_slide_two' => $data['upDateSlideTwoSection4'],
                'section5_slide_two' => $data['upDateSlideTwoSection5'],
                'reference_slide_two' => $data['upDateSlideTwoReference'],
                'file_slide_two' => $data['upDateSlideTwoFile'],
                'status_slide_two' => $data['upDateSlideTwoStatus'],
                'modified_at_slide_two' => date('Y-m-d h:i:s'),
                'modified_by_slide_two' => getAdminId()

            );


             //  var_dump($dataSlideTwo);die();

               $upDateSlideTwo = $this->slide_two->update(array('id_slide_two'=>$idUpDateSlideTwo),$dataSlideTwo);

            //  var_dump($upDateSlideTwo);die();

            if ($upDateSlideTwo) {

                if (!empty($data['upDateSlideTwoFile']))
                {

                    if (file_exists($path.'/'.$UpDateImageSlideTwo)) {

                        unlink($path.'/'.$UpDateImageSlideTwo);
                    }
                }

                $this->session->set_flashdata('success_get_slide_two', 'Modification effectuée');
                $this->getSlideTwo();


            }else{


                $this->session->set_flashdata('error_get_slide_two', 'Modification échouée');
                $this->getSlideTwo();

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }

    public function deleteSlideTwo()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {
                 $this->input->post('id',true);
                 $idDelSlideTwo = $this->input->post('text',true);

                 if(!empty($idDelSlideTwo))
                 {

                     $idDelSlideTwoDecrypt = $this->encryption->decrypt($idDelSlideTwo);
                     $oldImageSlideTwo = $this->slide_two->getImageById('file_slide_two',array('id_slide_two '=>$idDelSlideTwoDecrypt));

                     if(!empty($oldImageSlideTwo) and count($oldImageSlideTwo) == 1)
                     {
                         $realImageSlideTwo = $oldImageSlideTwo[0]['file_slide_two'];
                     }

                     $delSlideTwo = $this->slide_two->delete(array('id_slide_two'=>$idDelSlideTwoDecrypt));

                     if($delSlideTwo)
                     {
                         if(!empty($realImageSlideTwo) and isset($realImageSlideTwo))
                         {
                             $path = realpath(APPPATH.'../assets/slide/img2/');

                             if(file_exists($path.'/'.$realImageSlideTwo))
                             {
                                 unlink($path.'/'.$realImageSlideTwo);
                             }
                         }
                     }


                   //  var_dump($delSlideTwo); die();


                 }




            }else{


            }
        }
    }



    /* ================= Boutique Livre ==============================*/


    public function newBookCategory()
    {
        if(adminLoggedIn())
        {


            $data['titre'] = 'Ajouter une catégorie';
            $data['menu'] = array('Boutique','Livre','Catégorie');
            $data['status'] = $this->status->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/livre/categorie/newCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBookCategory()
    {
        if(adminLoggedIn())
        {

            $data['addBookCategoryName'] = verifyInput($this->input->post('categoryName',true));
            $data['addBookCategoryStatus'] = (int)verifyInput($this->input->post('status',true));

            $dataBookCategory = array(
                'name_livre_categorie'=>$data['addBookCategoryName'],
                'status_livre_categorie'=>$data['addBookCategoryStatus'],
                'created_by_livre_categorie'=> getAdminId()
            );

            $checkBookCategory = $this->categoryBook->checkUser($dataBookCategory);


            if(count($checkBookCategory) == 1)
            {
                $this->session->set_flashdata('error_new_book_category','Cette catégorie existe en base');
                $this->newBookCategory();
            }else{

                $insertBookCategory = $this->categoryBook->create($dataBookCategory);

                if($insertBookCategory)
                {

                    $this->session->set_flashdata('success_new_book_category','Enregistrement éffectué!');
                    $this->newBookCategory();

                }else{

                    $this->session->set_flashdata('error_new_book_category','Enregistrement échoué!');
                    $this->newBookCategory();


                }

            }





        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBookCategory()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Liste des catégories';
            $data['menu'] = array('Boutique','Livre','Catégorie');
          //  $data['status'] = $this->status->read();


            $data['allBookCategories'] = $this->categoryBook->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/livre/categorie/getCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editBookCategory($id)
    {
        if(adminLoggedIn())
        {
            if(!empty($id))
            {

                $data['titre'] = 'Modifier une catégorie';
                $data['menu'] = array('Boutique','Livre','Catégorie');
                $data['status'] = $this->status->read();

                $data['editBookCategory'] = $this->categoryBook->checkDataByKey($id,'id_livre_categorie ');

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/boutique/livre/categorie/editCategorie',$data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBookCategory()
    {
        if(adminLoggedIn())
        {

            $data['upDateBookCategoryName'] = verifyInput($this->input->post('name',true));
            $data['upDateBookCategoryStatus'] = verifyInput($this->input->post('status',true));

            $idUpDateBookCategory = $this->input->post('idBookCategoryUpDate',true);


            $dataUpDateBookCategory = array(

                'name_livre_categorie'=>$data['upDateBookCategoryName'],
                'status_livre_categorie'=>$data['upDateBookCategoryStatus'],
                'modified_at_livre_categorie'=>date('Y-m-d h:i:s'),
                'modified_by_livre_categorie'=> getAdminId()
            );

          //  var_dump($dataUpDateBookCategory); die();

            $upDateBookCategory = $this->categoryBook->update(array('id_livre_categorie'=>$idUpDateBookCategory),$dataUpDateBookCategory);

         //  var_dump($upDateBookCategory); die();

            if($upDateBookCategory)
            {

                $this->session->set_flashdata('success_get_book_category','Modification éffectuée!');
                $this->getBookCategory();

            }else{


                $this->session->set_flashdata('error_get_book_category','Modification échouée!');
                $this->getBookCategory();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBookCategory()
    {
        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelBookCategory = $this->input->post('text',true);

                if(!empty($idDelBookCategory))
                {

                    $idDelBookCategoryDecrypt = $this->encryption->decrypt($idDelBookCategory);

                    $delBookCategory = $this->categoryBook->delete(array('id_livre_categorie'=>$idDelBookCategoryDecrypt));

                    if($delBookCategory)
                    {
                        echo 'success';

                    }else{

                        echo 'failed';
                    }

                }


            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }


    /* ================= Boutique Produit ==============================*/


    public function newBookProduct()
    {
        if(adminLoggedIn())
        {
            $data['titre'] = 'Ajouter un article';
            $data['menu'] = array('Boutique','Livre','Article');
            $data['status'] = $this->status->read();


            $data['allCategory'] = $this->categoryBook->readWhere('*', array('status_livre_categorie'=>1));

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/livre/produit/newProduct',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBookProduct()
    {

        if(adminLoggedIn())
        {

            $data['addBookProductName'] = verifyInput($this->input->post('productName',true));
            $data['addBookProductPrice'] = verifyInput($this->input->post('prix',true));
            $data['addBookProductDescribe'] = verifyInput($this->input->post('description',true));
            $data['addBookProductCategory'] = verifyInput($this->input->post('category',true));
            $data['addBookProductStatus'] = (int)verifyInput($this->input->post('status',true));


            $path = realpath(APPPATH.'../assets/boutique/livre/img');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('image'))
            {

                $error  = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_book_product',$error);
                $this->newBookProduct();

            }else{

                $fileName  = $this->upload->data();
                $data['addBookProductFile'] = $fileName['file_name'];

            }


            $dataBookProduct = array(

                'nom_livre_article'=>$data['addBookProductName'],
                'prix_livre_article'=>$data['addBookProductPrice'],
                'description_livre_article'=>$data['addBookProductDescribe'],
                'file_livre_article'=>$data['addBookProductFile'],
                'category_livre_article'=>(int)$data['addBookProductCategory'],
                'status_livre_article'=>$data['addBookProductStatus'],
                'created_by_livre_article'=>getAdminId()
            );

             //  var_dump($dataBookProduct); die();

            $checkBookProduct = $this->articleBook->checkUser($dataBookProduct);


            if(count($checkBookProduct) == 1)
            {
                $this->session->set_flashdata('error_new_book_product','l\' article existe en base!');
                $this->newBookProduct();

            }else{

                $insertBookProduct = $this->articleBook->create($dataBookProduct);


                if($insertBookProduct)
                {

                    $this->session->set_flashdata('success_new_book_product','Enregistrement éffectué avec success!');
                    $this->newBookProduct();


                }else{


                    $this->session->set_flashdata('error_new_book_product','Enregistrement échoué!');
                    $this->newBookProduct();

                }

            }





        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function getBookProduct()
    {
        if(adminLoggedIn())
        {
            $data['titre'] = 'Ajouter un exercice';
            $data['menu'] = array('Education et formation','Ecole en ligne','Plateforme d\' exercices');

            $data['allCategory'] = $this->categoryBook->read();

            $data['allProducts'] = $this->articleBook->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/livre/produit/getProduct',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editBookProduct($id)
    {
        if(adminLoggedIn())
        {


            $this->menuLink4('Boutique', 'Livre', 'Article','Modifier un article');

            $data['editBookProduct'] = $this->articleBook->checkDataByKey($id,'id_livre_article');

            $data['allCategories'] = $this->categoryBook->read();


              if(count($data['editBookProduct']) == 1)
              {
                  $this->load->view('backoffice/admin/header/header');
                  $this->load->view('backoffice/admin/header/css');
                  $this->load->view('backoffice/admin/header/navTop', $this->data);
                  $this->load->view('backoffice/admin/header/navLeft');
                  $this->load->view('backoffice/boutique/livre/produit/editProduct',$data);
                  $this->load->view('backoffice/admin/header/footer');
                  $this->load->view('backoffice/admin/header/htmlClose');
              }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBookProduct()
    {

        if(adminLoggedIn())
        {

            $data['upDateBookProductName'] = verifyInput($this->input->post('nom',true));
            $data['upDateBookProductPrice'] = verifyInput($this->input->post('prix',true));
            $data['upDateBookProductDescribe'] = verifyInput($this->input->post('description',true));
            $data['upDateBookProductCategory'] = verifyInput($this->input->post('category',true));
            $data['upDateBookProductStatus'] = (int)verifyInput($this->input->post('status',true));


            $idUpDateProduct = $this->input->post('idBookProductUpDate',true);
            $OldImage = $this->input->post('oldImageUpdateBookProduct',true);

           // var_dump($OldImage); die();

            $path = realpath(APPPATH.'../assets/boutique/livre/img');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {

                $error  = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_book_article',$error);
                $this->getBookProduct();

            }else{

                $fileName  = $this->upload->data();
                $data['upDateBookProductFile'] = $fileName['file_name'];

            }


            $UpDateDataBookProduct = array(

                'nom_livre_article'=>$data['upDateBookProductName'],
                'prix_livre_article'=>$data['upDateBookProductPrice'],
                'description_livre_article'=>$data['upDateBookProductDescribe'],
                'file_livre_article'=>$data['upDateBookProductFile'],
                'category_livre_article'=>$data['upDateBookProductCategory'],
                'status_livre_article'=>$data['upDateBookProductStatus'],
                'modified_at_livre_article'=>date('Y-m-d h:i:s'),
                'modified_by_livre_article'=>getAdminId()

            );

               //  var_dump($UpDateDataBookProduct); die();

            $UpDateBookProduct = $this->articleBook->update(array('id_livre_article '=>$idUpDateProduct),$UpDateDataBookProduct);

            if($UpDateBookProduct)
            {
                if(!empty($data['upDateBookProductFile']) and isset($data['upDateBookProductFile']))
                {
                    if(file_exists($path.'/'.$OldImage))
                    {
                        unlink($path.'/'.$OldImage);
                    }
                }

                $this->session->set_flashdata('success_get_book_article','Modification effectuée');
                $this->getBookProduct();


            }else{

                    $this->session->set_flashdata('error_get_book_article','Modification échouée!');
                    $this->getBookProduct();
            }

        }else{


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function deleteBookProduct()
    {

        if($this->input->is_ajax_request())
        {

            $this->input->post('id',true);
            $idDelBookProduct = $this->input->post('text',true);

            if(!empty($idDelBookProduct))
            {

                $idDelBookProductDecrypt = $this->encryption->decrypt($idDelBookProduct);

                $oldImage = $this->articleBook->getImageById('file_livre_article',array('id_livre_article',$idDelBookProductDecrypt));

                if(!empty($oldImage) and isset($oldImage))
                {
                    $realImage = $oldImage[0]['file_livre_article'];
                }

                $delBookProduct = $this->articleBook->delete(array('id_livre_article'=>$idDelBookProductDecrypt));

                if($delBookProduct)
                {
                     if(!empty($realImage) and isset($realImage))
                     {

                         $path = realpath(APPPATH.'../assets/boutique/livre/img');

                         if(file_exists($path.'/'.$realImage))
                         {
                             unlink($path.'/'.$realImage);
                         }

                     }

                    echo 'success';

                }else{

                    echo 'failed';
                }

            }

        }
    }


    /* ================= Boutique Produit caractéristique ==============================*/

    public function newBookSpecs()
    {
        if(adminLoggedIn())
        {

            $this->menuLink4('Boutique', 'Livre', 'Caratéristique','Ajouter caratéristique');

            $data['allCategory'] = $this->categoryBook->readWhere('*', array('status_livre_categorie'=>1));

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/livre/produit/newProduct',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBookSpecs()
    {
        if(adminLoggedIn())
        {

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBookSpecs()
    {
        if(adminLoggedIn())
        {

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editBookSpecs()
    {
        if(adminLoggedIn())
        {

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBookSpecs()
    {
        if(adminLoggedIn())
        {

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBookSpecs()
    {
        if(adminLoggedIn())
        {

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    /* ================= Boutique Mp3 categorie ==============================*/

    public function newMp3Category()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter une catégorie';
            $data['menu'] = array('Boutique','Mp3','Catégorie');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/mp3/categorie/newCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addMp3Category()
    {
        if(adminLoggedIn())
        {
             $data['addMp3CategoryName'] = verifyInput($this->input->post('categoryNameMp3',true));
             $data['addMp3CategoryStatus'] = verifyInput($this->input->post('statusMp3',true));

             $dataMp3Category = array(

                 'name_mp3_categorie'=>$data['addMp3CategoryName'],
                 'status_mp3_categorie'=>$data['addMp3CategoryStatus'],
                 'created_by_mp3_categorie'=>getAdminId()

             );

             $checkCategoryMp3 = $this->categoryMp3->checkUser($dataMp3Category);

             if(count($checkCategoryMp3) == 1)
             {

                  $this->session->set_flashdata('error_new_mp3_category','cette catégorie existe en base!');
                  $this->newMp3Category();

             }else{


                 $insertMp3Category = $this->categoryMp3->create($dataMp3Category);

                 if($insertMp3Category)
                 {

                     $this->session->set_flashdata('success_new_mp3_category','Enregistrement éffectué!');
                     $this->newMp3Category();

                 }else{

                     $this->session->set_flashdata('error_new_mp3_category','Enregistrement échoué!');
                     $this->newMp3Category();


                 }



             }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getMp3category()
    {
         if(adminLoggedIn())
         {
             $data['titre'] = 'liste des catégories';
             $data['menu'] = array('Boutique','Mp3','Catégorie');

             $data['allMp3Categories'] = $this->categoryMp3->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/boutique/mp3/categorie/getCategory',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
    }

    public function editMp3Category($id)
    {
        if(adminLoggedIn())
        {

            if(!empty($id))
            {

                $data['titre'] = 'liste des catégories';
                $data['menu'] = array('Boutique','Mp3','Catégorie');
                $data['status'] = $this->status->read();


                $data['editMp3Category'] = $this->categoryMp3->checkDataByKey($id,'id_mp3_categorie');

                if(count($data['editMp3Category']) == 1)
                {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/boutique/mp3/categorie/editCategory',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateMp3Category()
    {
        if(adminLoggedIn())
        {

            $data['upDateMp3CategoryName'] = $this->input->post('name',true);
            $data['upDateMp3CategoryStatus'] = (int)$this->input->post('status',true);


            $idUpDateMp3Category =  $this->input->post('idMp3CategoryUpDate',true);

            $dataMp3Category = array(
                'name_mp3_categorie'=> $data['upDateMp3CategoryName'],
                'status_mp3_categorie'=> $data['upDateMp3CategoryStatus'],
                'modified_at_mp3_categorie'=> date('Y-m-d h:i:s'),
                'modified_by_mp3_categorie'=> getAdminId()
            );


            $upDateMp3Category = $this->categoryMp3->update(array('id_mp3_categorie'=>$idUpDateMp3Category),$dataMp3Category);

            if($upDateMp3Category)
            {

                $this->session->set_flashdata('success_get_mp3_category','Modification éffectué!');
                $this->getMp3Category();


            }else{

                $this->session->set_flashdata('error_get_mp3_category','Modification échoué!');
                $this->getMp3Category();

            }





        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteMp3Category()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelMp3Category = $this->input->post('text',true);

                if(!empty($idDelMp3Category))
                {

                    $idDelMp3CategoryDecrypt = $this->encryption->decrypt($idDelMp3Category);
                    $delMp3Category = $this->categoryMp3->delete(array('id_mp3_categorie'=>$idDelMp3CategoryDecrypt));


                    if($delMp3Category)
                    {
                        echo 'success';

                    }else{

                        echo 'failed';
                    }

                }


            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    /* ================= Boutique Mp3 article ==============================*/

    public function newMp3Article()
    {

        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter un article';
            $data['menu'] = array('Boutique','Mp3','Article');
            $data['status'] = $this->status->read();

            $data['allMp3Categories'] = $this->categoryMp3->readWhere('*',array('status_mp3_categorie'=>1));

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/mp3/article/newArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addMp3Article()
    {

        if(adminLoggedIn())
        {

            $data['addMp3ArticleName'] = $this->input->post('articleName',true);
            $data['addMp3ArticlePrice'] = $this->input->post('articlePrice',true);
            $data['addMp3ArticleDescribe'] = $this->input->post('articleDecribe',true);
            $data['addMp3ArticleCategory'] = $this->input->post('articleCategory',true);
            $data['addMp3ArticleStatus'] = (int)$this->input->post('articleStatus',true);


            $path = realpath(APPPATH.'../assets/boutique/mp3/img');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;


             $this->load->library('upload',$config);


             if(!$this->upload->do_upload('articleImg'))
             {

              $error = $this->upload->display_errors();

              $this->session->set_flashdata('error_new_mp3_article',$error);
              $this->newMp3Article();

             }else{


                 $fileNameImageArticle = $this->upload->data();
                 $data['addMp3ArticleFile'] = $fileNameImageArticle['file_name'];

             }


             $dataMp3Article = array(

                 'name_mp3_article'=>$data['addMp3ArticleName'],
                 'price_mp3_article'=>$data['addMp3ArticlePrice'],
                 'describe_mp3_article'=>$data['addMp3ArticleDescribe'],
                 'file_mp3_article'=>$data['addMp3ArticleFile'],
                 'category_mp3_article'=>$data['addMp3ArticleCategory'],
                 'status_mp3_article'=>$data['addMp3ArticleStatus'],
                 'created_by_mp3_article'=> getAdminId()

             );

             $checkDataMp3Article = $this->articleMp3->checkUser($dataMp3Article);


             if(count($checkDataMp3Article) == 1)
             {

                 $this->session->set_flashdata('error_new_mp3_article','cet aticle existe en base!');
                 $this->newMp3Article();

             }else{


                 $insertDataMp3Article = $this->articleMp3->create($dataMp3Article);


                 if($insertDataMp3Article)
                 {


                     $this->session->set_flashdata('success_new_mp3_article','Enregistrement éffectué!');
                     $this->newMp3Article();

                 }else{


                     $this->session->set_flashdata('error_new_mp3_article','Enregistrement échoué!');
                     $this->newMp3Article();

                 }



             }



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }

    public function getMp3Article()
    {

        if(adminLoggedIn())
        {

            $data['titre'] = 'Liste des articles';
            $data['menu'] = array('Boutique','Mp3','Article');


            $data['allCategory'] = $this->categoryMp3->read();

            $data['allMp3Article'] = $this->articleMp3->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/mp3/article/getArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function editMp3Article($idMp3article)
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Liste des articles';
            $data['menu'] = array('Boutique','Mp3','Article');
            $data['status'] = $this->status->read();

            $data['allMp3Categories'] = $this->categoryMp3->readWhere('*',array('status_mp3_categorie'=>1));

            $data['editMp3Article'] = $this->articleMp3->checkDataByKey($idMp3article,'id_mp3_article');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/mp3/article/editArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateMp3Article()
    {
        if(adminLoggedIn())
        {

            $data['upDateMp3ArticleName'] = $this->input->post('updateMp3ArticleName',true);
            $data['upDateMp3ArticlePrice'] = $this->input->post('updateMp3ArticlePrice',true);
            $data['upDateMp3ArticleDescribe'] = $this->input->post('updateMp3ArticleDescribe',true);
            $data['upDateMp3ArticleCategory'] = $this->input->post('updateMp3ArticleCategory',true);
            $data['upDateMp3ArticleStatus'] = (int)$this->input->post('updateMp3ArticleStatus',true);


            $idUpDateMp3Article =  $this->input->post('idMp3ArticleUpDate',true);
            $oldImageMp3Article = $this->input->post('oldImageUpdateMp3Article',true);


            $path = realpath(APPPATH.'../assets/boutique/mp3/img');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            if(!$this->upload->do_upload('updateMp3ArticleImage'))
            {

                $error = $this->upload->display_errors();

                $this->session->set_flashdata('error_get_mp3_article',$error);
                $this->newMp3Article();

            }else{


                $upDateFileNameImageArticle = $this->upload->data();
                $data['upDateMp3ArticleFile'] = $upDateFileNameImageArticle['file_name'];

            }


            $dataUpDateMp3Article = array(

                'name_mp3_article'=>$data['upDateMp3ArticleName'],
                'price_mp3_article'=>$data['upDateMp3ArticlePrice'],
                'describe_mp3_article'=>$data['upDateMp3ArticleDescribe'],
                'file_mp3_article'=>$data['upDateMp3ArticleFile'],
                'category_mp3_article'=>$data['upDateMp3ArticleCategory'],
                'status_mp3_article'=>$data['upDateMp3ArticleStatus'],
                'modified_at_mp3_article'=>date('Y-m-d h:i:s'),
                'modified_by_mp3_article'=> getAdminId()

            );

            $upDateDataMp3Article = $this->articleMp3->update(array('id_mp3_article'=>$idUpDateMp3Article),$dataUpDateMp3Article);

            if($upDateDataMp3Article)
            {
                if(!empty($data['upDateMp3ArticleFile']) and isset($data['upDateMp3ArticleFile']))
                {

                    if(file_exists($path.'/'.$oldImageMp3Article))
                    {

                        unlink($path.'/'.$oldImageMp3Article);

                        $this->session->set_flashdata('success_get_mp3_article','Modification éffectuée!');
                        $this->getMp3Article();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_mp3_article','Modification échouée!');
                $this->getMp3Article();


            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteMp3Article()
    {
        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelMp3Article = $this->input->post('text',true);

                if(!empty($idDelMp3Article))
                {

                    $idDelMp3ArticleDecrypt = $this->encryption->decrypt($idDelMp3Article);

                    $oldImageMp3Article = $this->articleMp3->getImageById('file_mp3_article',array('id_mp3_article'=>$idDelMp3ArticleDecrypt));

                    if(!empty($oldImageMp3Article) and isset($oldImageMp3Article))
                    {
                        $realImageMp3Article = $oldImageMp3Article['file_mp3_article'];
                    }


                    $deleteMp3Article = $this->articleMp3->delete(array('id_mp3_article'=>$idDelMp3ArticleDecrypt));

                    if($deleteMp3Article)
                    {
                        if(!empty($realImageMp3Article))
                        {
                            $path = realpath(APPPATH.'../assets/boutique/mp3/img');

                            if(file_exists($path.'/'.$realImageMp3Article))
                            {
                                unlink($path.'/'.$realImageMp3Article);

                                echo 'success';
                            }
                        }


                    }else{

                        echo 'failed';

                    }


                }

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    /* ================= Boutique CD Categorie ==============================*/

    public function newCDCategory()
    {

        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter une catégorie';
            $data['menu'] = array('Boutique','CD','Catégorie');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/cd/categorie/newCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addCDCategory()
    {
        if(adminLoggedIn())
        {
            $data['addCDCategoryName'] = verifyInput($this->input->post('categoryNameCD',true));
            $data['addCDCategoryStatus'] = (int)verifyInput($this->input->post('statusCD',true));

            $dataCDCategory = array(

                'name_cd_categorie'=>$data['addCDCategoryName'],
                'status_cd_categorie'=>$data['addCDCategoryStatus'],
                'created_by_cd_categorie'=>getAdminId()

            );

            $checkCategoryCD = $this->categoryCD->checkUser($dataCDCategory);

            if(count($checkCategoryCD) == 1)
            {

                $this->session->set_flashdata('error_new_cd_category','cette catégorie existe en base!');
                $this->newCDCategory();

            }else{


                $insertMp3Category = $this->categoryCD->create($dataCDCategory);

                if($insertMp3Category)
                {

                    $this->session->set_flashdata('success_new_cd_category','Enregistrement éffectué!');
                    $this->newCDCategory();

                }else{

                    $this->session->set_flashdata('error_new_cd_category','Enregistrement échoué!');
                    $this->newCDCategory();


                }



            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getCDCategory()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'liste des catégories';
            $data['menu'] = array('Boutique','CD','Catégorie');


            $data['allCDCategories'] = $this->categoryCD->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/cd/categorie/getCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editCDCategory($idCDCategory)
    {
        if(adminLoggedIn())
        {

            if(!empty($idCDCategory))
            {
                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une catégorie';
                $data['menu'] = array('Boutique','CD','Catégorie');

                $data['editCDCategory'] = $this->categoryCD->checkDataByKey($idCDCategory,'id_cd_categorie');

                if(count($data['editCDCategory']) == 1)
                {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/boutique/cd/categorie/editCategory',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateCDCategory()
    {
        if(adminLoggedIn())
        {

            $data['upDateCDCategoryName'] = $this->input->post('editCDName',true);
            $data['upDateCDCategoryStatus'] = (int)$this->input->post('editCDStatus',true);


            $idUpDateCDCategory =  $this->input->post('idCDCategoryUpDate',true);

            $dataCDCategory = array(
                'name_cd_categorie'=> $data['upDateCDCategoryName'],
                'status_cd_categorie'=> $data['upDateCDCategoryStatus'],
                'modified_at_cd_categorie'=> date('Y-m-d h:i:s'),
                'modified_by_cd_categorie'=> getAdminId()
            );


            $upDateMp3Category = $this->categoryCD->update(array('id_cd_categorie'=>$idUpDateCDCategory),$dataCDCategory);

            if($upDateMp3Category)
            {

                $this->session->set_flashdata('success_get_cd_category','Modification éffectué!');
                $this->getCDCategory();


            }else{

                $this->session->set_flashdata('error_get_cd_category','Modification échoué!');
                $this->getCDCategory();

            }





        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteCDCategory()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelCDCategory = $this->input->post('text',true);

                if(!empty($idDelCDCategory))
                {

                    $idDelCDCategoryDecrypt = $this->encryption->decrypt($idDelCDCategory);
                    $delCDCategory = $this->categoryCD->delete(array('id_cd_categorie'=>$idDelCDCategoryDecrypt));


                    if($delCDCategory)
                    {
                        echo 'success';

                    }else{

                        echo 'failed';
                    }

                }


            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    /* ================= Boutique CD article ==============================*/

    public function newCDArticle()
    {

        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter un article';
            $data['menu'] = array('Boutique','CD','Article');
            $data['status'] = $this->status->read();

            $data['allCDCategories'] = $this->categoryCD->readWhere('*',array('status_cd_categorie'=>1));

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/cd/article/newArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addCDArticle()
    {

        if(adminLoggedIn())
        {

            $data['addCDArticleName'] = $this->input->post('articleCDName',true);
            $data['addCDArticlePrice'] = $this->input->post('articleCDPrice',true);
            $data['addCDArticleDescribe'] = $this->input->post('articleCDDecribe',true);
            $data['addCDArticleCategory'] = $this->input->post('articleCDCategory',true);
            $data['addCDArticleStatus'] = (int)$this->input->post('articleCDStatus',true);


            $path = realpath(APPPATH.'../assets/boutique/cd/img');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            if(!$this->upload->do_upload('articleCDImg'))
            {

                $error = $this->upload->display_errors();

                $this->session->set_flashdata('error_new_cd_article',$error);
                $this->newCDArticle();

            }else{


                $fileNameImageArticle = $this->upload->data();
                $data['addCDArticleFile'] = $fileNameImageArticle['file_name'];

            }


            $dataCDArticle = array(

                'name_cd_article'=>$data['addCDArticleName'],
                'price_cd_article'=>$data['addCDArticlePrice'],
                'describe_cd_article'=>$data['addCDArticleDescribe'],
                'file_cd_article'=>$data['addCDArticleFile'],
                'category_cd_article'=>$data['addCDArticleCategory'],
                'status_cd_article'=>$data['addCDArticleStatus'],
                'created_by_cd_article'=> getAdminId()

            );

            $checkDataCDArticle = $this->articleCD->checkUser($dataCDArticle);


            if(count($checkDataCDArticle) == 1)
            {

                $this->session->set_flashdata('error_new_cd_article','cet article existe en base!');
                $this->newCDArticle();

            }else{


                $insertDataCDArticle = $this->articleCD->create($dataCDArticle);


                if($insertDataCDArticle)
                {


                    $this->session->set_flashdata('success_new_cd_article','Enregistrement éffectué!');
                    $this->newCDArticle();

                }else{


                    $this->session->set_flashdata('error_new_cd_article','Enregistrement échoué!');
                    $this->newCDArticle();

                }



            }



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function getCDArticle()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Liste des articles';
            $data['menu'] = array('Boutique','CD','Article');
            $data['status'] = $this->status->read();
            $data['allCategory'] = $this->categoryCD->read();

            $data['allCDArticle'] = $this->articleCD->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/cd/article/getArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editCDArticle($idCDArticle)
    {
        if(adminLoggedIn())
        {

            $this->menuLink4('Boutique', 'CD', 'Article','Modifier un article');

            $data['allCDCategories'] = $this->categoryCD->readWhere('*',array('status_cd_categorie'=>1));

            $data['editCDArticle'] = $this->articleCD->checkDataByKey($idCDArticle,'id_cd_article');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop', $this->data);
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/cd/article/editArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateCDArticle()
    {

        if(adminLoggedIn())
        {

            $data['upDateCDArticleName'] = $this->input->post('updateCDArticleName',true);
            $data['upDateCDArticlePrice'] = $this->input->post('updateCDArticlePrice',true);
            $data['upDateCDArticleDescribe'] = $this->input->post('updateCDArticleDescribe',true);
            $data['upDateCDArticleCategory'] = $this->input->post('updateCDArticleCategory',true);
            $data['upDateCDArticleStatus'] = (int)$this->input->post('updateCDArticleStatus',true);


            $idUpDateCDArticle =  $this->input->post('idCDArticleUpDate',true);
            $oldImageCDArticle = $this->input->post('oldImageUpdateCDArticle',true);


            $path = realpath(APPPATH.'../assets/boutique/cd/img');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            if(!$this->upload->do_upload('updateCDArticleImage'))
            {

                $error = $this->upload->display_errors();

                $this->session->set_flashdata('error_get_cd_article',$error);
                $this->getCDArticle();

            }else{


                $upDateFileNameImageArticle = $this->upload->data();
                $data['upDateCDArticleFile'] = $upDateFileNameImageArticle['file_name'];

            }


            $dataUpDateCDArticle = array(

                'name_cd_article'=>$data['upDateCDArticleName'],
                'price_cd_article'=>$data['upDateCDArticlePrice'],
                'describe_cd_article'=>$data['upDateCDArticleDescribe'],
                'file_cd_article'=>$data['upDateCDArticleFile'],
                'category_cd_article'=>$data['upDateCDArticleCategory'],
                'status_cd_article'=>$data['upDateCDArticleStatus'],
                'modified_at_cd_article'=>date('Y-m-d h:i:s'),
                'modified_by_cd_article'=> getAdminId()

            );

            $upDateDataCDArticle = $this->articleCD->update(array('id_cd_article'=>$idUpDateCDArticle),$dataUpDateCDArticle);

            if($upDateDataCDArticle)
            {
                if(!empty($data['upDateCDArticleFile']) and isset($data['upDateCDArticleFile']))
                {

                    if(file_exists($path.'/'.$oldImageCDArticle))
                    {

                        unlink($path.'/'.$oldImageCDArticle);

                        $this->session->set_flashdata('success_get_cd_article','Modification éffectuée!');
                        $this->getCDArticle();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_cd_article','Modification échouée!');
                $this->getCDArticle();


            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function deleteCDArticle()
    {
        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelCDArticle = $this->input->post('text',true);

                if(!empty($idDelCDArticle))
                {

                    $idDelCDArticleDecrypt = $this->encryption->decrypt($idDelCDArticle);

                    $oldImageCDArticle = $this->articleCD->getImageById('file_cd_article',array('id_cd_article'=>$idDelCDArticleDecrypt));

                    if(!empty($oldImageCDArticle) and isset($oldImageCDArticle))
                    {
                        $realImageCDArticle = $oldImageCDArticle['file_cd_article'];
                    }


                    $deleteCDArticle = $this->articleCD->delete(array('id_cd_article'=>$idDelCDArticleDecrypt));

                    if($deleteCDArticle)
                    {
                        if(!empty($realImageCDArticle))
                        {
                            $path = realpath(APPPATH.'../assets/boutique/cd/img');

                            if(file_exists($path.'/'.$realImageCDArticle))
                            {
                                unlink($path.'/'.$realImageCDArticle);

                                echo 'success';
                            }
                        }
                    }else{

                        echo 'failed';

                    }


                }

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    /* ================= Boutique Article Divers Categories ==============================*/

    public function newArticlesDiversCategory()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter une catégorie';
            $data['menu'] = array('Boutique','Articles Divers','Catégorie');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/articles_diverses/categorie/newCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addArticlesDiversCategory()
    {

        if(adminLoggedIn())
        {
            $data['addArticlesDiversCategoryName'] = verifyInput($this->input->post('categoryNameArticlesDivers',true));
            $data['addArticlesDiversCategoryStatus'] = (int)verifyInput($this->input->post('statusArticlesDivers',true));

            $dataArticlesDiversCategory = array(

                'name_articles_diverses_categorie'=>$data['addArticlesDiversCategoryName'],
                'status_articles_diverses_categorie'=>$data['addArticlesDiversCategoryStatus'],
                'created_by_articles_diverses_categorie'=>getAdminId()

            );

            $checkCategoryArticlesDivers = $this->categoryArticlesDivers->checkUser($dataArticlesDiversCategory);

            if(count($checkCategoryArticlesDivers) == 1)
            {

                $this->session->set_flashdata('error_new_article_divers_category','cette catégorie existe en base!');
                $this->newArticlesDiversCategory();

            }else{


                $insertMp3Category = $this->categoryArticlesDivers->create($dataArticlesDiversCategory);

                if($insertMp3Category)
                {

                    $this->session->set_flashdata('success_new_article_divers_category','Enregistrement éffectué!');
                    $this->newArticlesDiversCategory();

                }else{

                    $this->session->set_flashdata('error_new_article_divers_category','Enregistrement échoué!');
                    $this->newArticlesDiversCategory();


                }



            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function getArticlesDiversCategory()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'liste des catégories';
            $data['menu'] = array('Boutique','Articles Divers','Catégorie');

            $data['allArticlesDiversCategories'] = $this->categoryArticlesDivers->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/articles_diverses/categorie/getCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editArticlesDiversCategory($idArticlesDiversCategory)
    {

        if(adminLoggedIn())
        {

            if(!empty($idArticlesDiversCategory))
            {
                $data['titre'] = 'Modifier une catégorie';
                $data['menu'] = array('Boutique','Articles Divers','Catégorie');
                $data['status'] = $this->status->read();

                $data['editArticlesDiversCategory'] = $this->categoryArticlesDivers->checkDataByKey($idArticlesDiversCategory,'id_articles_diverses_categorie ');

                if(count($data['editArticlesDiversCategory']) == 1)
                {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/boutique/articles_diverses/categorie/editCategory',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function upDateArticlesDiversCategory()
    {
        if(adminLoggedIn())
        {

            $data['upDateCDCategoryName'] = $this->input->post('editCDName',true);
            $data['upDateCDCategoryStatus'] = (int)$this->input->post('editCDStatus',true);


            $idUpDateCDCategory =  $this->input->post('idCDCategoryUpDate',true);

            $dataCDCategory = array(
                'name_cd_categorie'=> $data['upDateCDCategoryName'],
                'status_cd_categorie'=> $data['upDateCDCategoryStatus'],
                'modified_at_cd_categorie'=> date('Y-m-d h:i:s'),
                'modified_by_cd_categorie'=> getAdminId()
            );


            $upDateMp3Category = $this->categoryCD->update(array('id_cd_categorie'=>$idUpDateCDCategory),$dataCDCategory);

            if($upDateMp3Category)
            {

                $this->session->set_flashdata('success_get_cd_category','Modification éffectué!');
                $this->getCDCategory();


            }else{

                $this->session->set_flashdata('error_get_cd_category','Modification échoué!');
                $this->getCDCategory();

            }





        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteArticlesDiversCategory()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelArticlesDiversCategory = $this->input->post('text',true);

                if(!empty($idDelArticlesDiversCategory))
                {

                    $idDelArticlesDiversCategoryDecrypt = $this->encryption->decrypt($idDelArticlesDiversCategory);
                    $delArticlesDiversCategory = $this->categoryArticlesDivers->delete(array('id_articles_diverses_categorie'=>$idDelArticlesDiversCategoryDecrypt));


                    if($delArticlesDiversCategory)
                    {
                        echo 'success';

                    }else{

                        echo 'failed';
                    }

                }


            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    /* ================= Boutique Article Divers Articles ==============================*/

    public function newArticlesDiversArticle()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter un article';
            $data['menu'] = array('Boutique','Articles Divers','Article');
            $data['status'] = $this->status->read();

            $data['allArticlesDiversCategories'] = $this->categoryArticlesDivers->readWhere('*',array('status_articles_diverses_categorie'=>1));

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/articles_diverses/article/newArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addArticlesDiversArticle()
    {

       // echo 'ok';

        if(adminLoggedIn())
        {

            $data['addArticlesDiversArticleName'] = $this->input->post('articleArticlesDiversName',true);
            $data['addArticlesDiversArticlePrice'] = $this->input->post('articleArticlesDiversPrice',true);
            $data['addArticlesDiversArticleDescribe'] = $this->input->post('articleArticlesDiversDecribe',true);
            $data['addArticlesDiversArticleCategory'] = $this->input->post('articleArticlesDiversCategory',true);
            $data['addArticlesDiversArticleStatus'] = (int)$this->input->post('articleArticlesDiversStatus',true);


            $path = realpath(APPPATH.'../assets/boutique/articles_diverses/img');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            if(!$this->upload->do_upload('articleArticlesDiversImg'))
            {

                $error = $this->upload->display_errors();

                $this->session->set_flashdata('error_new_articles_diverses_article',$error);
                $this->newArticlesDiversArticle();

            }else{


                $fileNameImageArticle = $this->upload->data();
                $data['addArticlesDiversArticleFile'] = $fileNameImageArticle['file_name'];

            }

            $dataArticlesDiversArticle = array(

                'name_articles_diverses_article'=>$data['addArticlesDiversArticleName'],
                'price_articles_diverses_article'=>$data['addArticlesDiversArticlePrice'],
                'describe_articles_diverses_article'=>$data['addArticlesDiversArticleDescribe'],
                'file_articles_diverses_article'=>$data['addArticlesDiversArticleFile'],
                'category_articles_diverses_article'=>$data['addArticlesDiversArticleCategory'],
                'status_articles_diverses_article'=>$data['addArticlesDiversArticleStatus'],
                'created_by_articles_diverses_article'=> getAdminId()

            );


            $checkDataArticlesDiversArticle = $this->articleArticlesDivers->checkUser($dataArticlesDiversArticle);


            if(count($checkDataArticlesDiversArticle) == 1)
            {

                $this->session->set_flashdata('error_new_articles_diverses_article','cet article existe en base!');
                $this->newArticlesDiversArticle();

            }else{

                $insertDataArticlesDiversArticle = $this->articleArticlesDivers->create($dataArticlesDiversArticle);

                if($insertDataArticlesDiversArticle)
                {


                    $this->session->set_flashdata('success_new_articles_diverses_article','Enregistrement éffectué!');
                    $this->newArticlesDiversArticle();

                }else{


                    $this->session->set_flashdata('error_new_articles_diverses_article','Enregistrement échoué!');
                    $this->newArticlesDiversArticle();

                }



            }



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function getArticlesDiversArticle()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Liste des articles';
            $data['menu'] = array('Boutique','Articles Divers','Article');

            $data['allArticlesDiversArticle'] = $this->articleArticlesDivers->read();
            $data['allCategory'] = $this->categoryArticlesDivers->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/articles_diverses/article/getArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editArticlesDiversArticle($idArticlesDiversArticle)
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Modifier un article';
            $data['menu'] = array('Boutique','Articles Divers','Article');

            $data['status'] = $this->status->read();

         if(!empty($idArticlesDiversArticle)){

          $data['allArticlesDiversCategories'] = $this->categoryArticlesDivers->readWhere('*',array('status_articles_diverses_categorie'=>1));

          $data['editArticlesDiversArticle'] = $this->articleArticlesDivers->checkDataByKey($idArticlesDiversArticle,'id_articles_diverses_article');

          $this->load->view('backoffice/admin/header/header');
          $this->load->view('backoffice/admin/header/css');
          $this->load->view('backoffice/admin/header/navTop', $this->data);
          $this->load->view('backoffice/admin/header/navLeft');
          $this->load->view('backoffice/boutique/articles_diverses/article/editArticle',$data);
          $this->load->view('backoffice/admin/header/footer');
          $this->load->view('backoffice/admin/header/htmlClose');

      }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateArticlesDiversArticle()
    {

        if(adminLoggedIn())
        {

            $data['upDateArticlesDiversArticleName'] = $this->input->post('updateArticlesDiversArticleName',true);
            $data['upDateArticlesDiversArticlePrice'] = $this->input->post('updateArticlesDiversArticlePrice',true);
            $data['upDateArticlesDiversArticleDescribe'] = $this->input->post('updateArticlesDiversArticleDescribe',true);
            $data['upDateArticlesDiversArticleCategory'] = $this->input->post('updateArticlesDiversArticleCategory',true);
            $data['upDateArticlesDiversArticleStatus'] = (int)$this->input->post('updateArticlesDiversArticleStatus',true);


            $idUpDateArticlesDiversArticle =  $this->input->post('idArticlesDiversArticleUpDate',true);
            $oldImageArticlesDiversArticle = $this->input->post('oldImageUpdateArticlesDiversArticle',true);


            $path = realpath(APPPATH.'../assets/boutique/articles_diverses/img');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            if(!$this->upload->do_upload('updateArticlesDiversArticleImage'))
            {

                $error = $this->upload->display_errors();

                $this->session->set_flashdata('error_get_articles_diverses_article',$error);
                $this->getArticlesDiversArticle();

            }else{


                $upDateFileNameImageArticle = $this->upload->data();
                $data['upDateArticlesDiversArticleFile'] = $upDateFileNameImageArticle['file_name'];

            }


            $dataUpDateArticlesDiversArticle = array(

                'name_articles_diverses_article'=>$data['upDateArticlesDiversArticleName'],
                'price_articles_diverses_article'=>$data['upDateArticlesDiversArticlePrice'],
                'describe_articles_diverses_article'=>$data['upDateArticlesDiversArticleDescribe'],
                'file_articles_diverses_article'=>$data['upDateArticlesDiversArticleFile'],
                'category_articles_diverses_article'=>$data['upDateArticlesDiversArticleCategory'],
                'status_articles_diverses_article'=>$data['upDateArticlesDiversArticleStatus'],
                'modified_at_articles_diverses_article'=>date('Y-m-d h:i:s'),
                'modified_by_articles_diverses_article'=> getAdminId()

            );

            $upDateDataArticlesDiversArticle = $this->articleArticlesDivers->update(array('id_articles_diverses_article'=>$idUpDateArticlesDiversArticle),$dataUpDateArticlesDiversArticle);

            if($upDateDataArticlesDiversArticle)
            {
                if(!empty($data['upDateArticlesDiversArticleFile']) and isset($data['upDateArticlesDiversArticleFile']))
                {

                    if(file_exists($path.'/'.$oldImageArticlesDiversArticle))
                    {

                        unlink($path.'/'.$oldImageArticlesDiversArticle);

                        $this->session->set_flashdata('success_get_articles_diverses_article','Modification éffectuée!');
                        $this->getArticlesDiversArticle();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_articles_diverses_article','Modification échouée!');
                $this->getArticlesDiversArticle();


            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }

    }

    public function deleteArticlesDiversArticle()
    {
        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelArticlesDiversArticle = $this->input->post('text',true);

                if(!empty($idDelArticlesDiversArticle))
                {

                    $idDelArticlesDiversArticleDecrypt = $this->encryption->decrypt($idDelArticlesDiversArticle);

                    $oldImageArticlesDiversArticle = $this->articleArticlesDivers->getImageById('file_articles_diverses_article',array('id_articles_diverses_article'=>$idDelArticlesDiversArticleDecrypt));

                    if(!empty($oldImageArticlesDiversArticle) and isset($oldImageArticlesDiversArticle))
                    {
                        $realImageArticlesDiversArticle = $oldImageArticlesDiversArticle['file_articles_diverses_article'];
                    }


                    $deleteArticlesDiversArticle = $this->articleArticlesDivers->delete(array('id_articles_diverses_article'=>$idDelArticlesDiversArticleDecrypt));

                    if($deleteArticlesDiversArticle)
                    {
                        if(!empty($realImageArticlesDiversArticle))
                        {
                            $path = realpath(APPPATH.'../assets/boutique/articles_diverses/img');

                            if(file_exists($path.'/'.$realImageArticlesDiversArticle))
                            {
                                unlink($path.'/'.$realImageArticlesDiversArticle);

                                echo 'success';
                            }
                        }
                    }else{

                        echo 'failed';

                    }


                }

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    /* ================= Parole de la semaine ==============================*/

    public function newParole()
    {
        if(adminLoggedIn())
        {
            $data['titre'] = 'Ajouter du contenu audio';
            $data['menu'] = array('Education et formations', 'parole de la semaine');

            $data['status'] = $this->status->read();
            $data['jours'] = $this->jours->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/parole/newParole',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');
        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addParole()
    {

        if(adminLoggedIn())
        {
            $path = realpath(APPPATH.'../assets/evangelisation/parole/audio/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';
            $config['remove_spaces'] = true;
            $config['max_size'] = '1000000';


            $this->load->library('upload',$config);

            $data['addEvangelisationParoleAuthor'] = $this->input->post('nom',true);
            $data['addEvangelisationParoleDescribe'] = $this->input->post('description',true);
            $data['addEvangelisationParoleDay'] = $this->input->post('jour',true);
            $data['addEvangelisationParoleStatus'] = (int)$this->input->post('status',true);


            if(!$this->upload->do_upload('audio'))
            {

                   $error = $this->upload->display_errors();
                   $this->session->set_flashdata('error_new_evangelisation_parole',$error);
                   $this->newParole();

            }else{

                 $fileName = $this->upload->data();
                 $data['addEvangelisationParoleFile'] = $fileName['file_name'];

            }

            $dataEvangelisationParole = array(

                'author_evangelisation_parole'=>$data['addEvangelisationParoleAuthor'],
                'audio_evangelisation_parole'=>$data['addEvangelisationParoleFile'],
                'describe_evangelisation_parole'=>$data['addEvangelisationParoleDescribe'],
                'day_evangelisation_parole'=>$data['addEvangelisationParoleDay'],
                'status_evangelisation_parole'=>$data['addEvangelisationParoleStatus'],
                'created_by_evangelisation_parole'=> getAdminId()

            );

           // var_dump($dataEvangelisationParole); die();

            $checkDataEvangelisationParole = $this->parole->checkUser($dataEvangelisationParole);


            if(count($checkDataEvangelisationParole) == 1)
            {

                  $this->session->set_flashdata('error_new_evangelisation_parole','Désolé, le contenu existe en Base!');
                  $this->newParole();


            }else{

                   $insertDataEvangelisationParole = $this->parole->create($dataEvangelisationParole);

                   if($insertDataEvangelisationParole)
                   {


                       $this->session->set_flashdata('success_new_evangelisation_parole','Enregistrement effectué avec success');
                       $this->newParole();


                   }else{

                       $this->session->set_flashdata('error_new_evangelisation_parole','Enregistrement echoué!');
                       $this->newParole();

                   }
            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getParole()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Liste des contenus audio';
            $data['menu'] = array('Education et formations', 'parole de la semaine');

            $data['status'] = $this->status->read();
            $data['jours'] = $this->jours->read();

            $data['allParole'] = $this->parole->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/parole/getParole',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editParole($id)
    {
        if(adminLoggedIn())
        {

            if(!empty($id))
            {

                $data['editEvangelisationParole'] = $this->parole->checkDataByKey($id,'id_evangelisation_parole');
                $data['titre'] = 'Modifier un contenu audio';
                $data['menu'] = array('Education et formations', 'parole de la semaine');

                $data['status'] = $this->status->read();
                $data['jours'] = $this->jours->read();

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/evangelisation/parole/editParole',$data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');


            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateParole()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/evangelisation/parole/image/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;


              $this->load->library('upload',$config);

              $data['updateParoleAuthor'] = $this->input->post('auteur',true);
              $data['updateParoleDescribe'] = $this->input->post('description',true);
              $data['updateParoleDay'] = $this->input->post('jour',true);
              $data['updateParoleStatus'] = (int)$this->input->post('status',true);


              $idUpDateParole = $this->input->post('idEvangelisationParole',true);
             // $oldAudioParole = $this->input->post('oldAudioEvangelisationParole',true);


            /*  if(!$this->upload->do_upload('audio'))
              {
                  $error  =  $this->upload->display_errors();
                  $this->session->set_flashdata('error_get_evangelisation_parole',$error);
                  $this->getParole();

              }else{*/

                  if($this->upload->do_upload('image'))
                  {

                      $fileName = $this->upload->data();
                      $data['updateParoleFile'] = $fileName['file_name'];
                  }


          //    }


              $upDateDataParole = array(

                  'author_evangelisation_parole'=>$data['updateParoleAuthor'],
                  'image_evangelisation_parole'=>$data['updateParoleFile'],
                  'describe_evangelisation_parole'=>$data['updateParoleDescribe'],
                  'day_evangelisation_parole'=>$data['updateParoleDay'],
                  'status_evangelisation_parole'=>$data['updateParoleStatus'],
                  'modified_at_evangelisation_parole'=> date('Y-m-d h:i:s'),
                  'modified_by_evangelisation_parole '=> getAdminId()
              );


              //    var_dump($upDateDataParole); die();


              $updateParole = $this->parole->update(array('id_evangelisation_parole'=>$idUpDateParole),$upDateDataParole);

              if($updateParole)
              {
                  //   if(!empty($data['updateParoleFile']) and isset($data['updateParoleFile']))
                  //   {


                   //         if(file_exists($path.'/'.$oldAudioParole))
                    //        {
                                //unlink($path.'/'.$oldAudioParole);
                                $this->session->set_flashdata('success_get_evangelisation_parole','Modification effectuée');
                                $this->getParole();
                    //        }


                    // }



              }else{


                  $this->session->set_flashdata('error_get_evangelisation_parole','Modification échouée');
                  $this->getParole();

              }





        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteParole()
    {
        if(adminLoggedIn())
        {

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }


    /* ================= Parole de la semaine ==============================*/

    public function newParoleVideo()
    {
        if(adminLoggedIn())
        {
            $data['titre'] = 'Ajouter du contenu vidéo';
            $data['menu'] = array('Evangelisation', 'parole de la semaine');

            $data['status'] = $this->status->read();
            $data['jours'] = $this->jours->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/parole/newParoleVideo',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');
        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addParoleVideo()
    {


        if(adminLoggedIn())
        {
            $data['addEvangelisationParoleVideoAuthor'] = $this->input->post('nom',true);
            $data['addEvangelisationParoleVideoLink'] = $this->input->post('lienVideo',true);
            $data['addEvangelisationParoleVideoDescribe'] = $this->input->post('description',true);
            $data['addEvangelisationParoleVideoDay'] = $this->input->post('jour',true);
            $data['addEvangelisationParoleVideoStatus'] = (int)$this->input->post('status',true);


            $dataEvangelisationParoleVideo = array(

                'author_evangelisation_parole_video'=>$data['addEvangelisationParoleVideoAuthor'],
                'link_evangelisation_parole_video'=>$data['addEvangelisationParoleVideoLink'],
                'describe_evangelisation_parole_video'=>$data['addEvangelisationParoleVideoDescribe'],
                'day_evangelisation_parole_video'=>$data['addEvangelisationParoleVideoDay'],
                'status_evangelisation_parole_video'=>$data['addEvangelisationParoleVideoStatus'],
                'created_by_evangelisation_parole_video'=> getAdminId()

            );


            $checkDataEvangelisationParoleVideo = $this->parole_video->checkUser($dataEvangelisationParoleVideo);


            if(count($checkDataEvangelisationParoleVideo) == 1)
            {

                $this->session->set_flashdata('error_new_evangelisation_parole_video','Désolé, le contenu existe en Base!');
                $this->newParoleVideo();


            }else{

                $insertDataEvangelisationParoleVideo = $this->parole_video->create($dataEvangelisationParoleVideo);

                if($insertDataEvangelisationParoleVideo)
                {


                    $this->session->set_flashdata('success_new_evangelisation_parole_video','Enregistrement effectué avec success');
                    $this->newParoleVideo();


                }else{

                    $this->session->set_flashdata('error_new_evangelisation_parole_video','Enregistrement echoué!');
                    $this->newParoleVideo();

                }
            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getParoleVideo()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Liste des contenus';
            $data['menu'] = array('Education et formations', 'parole de la semaine');

            $data['status'] = $this->status->read();
            $data['jours'] = $this->jours->read();

            $data['allParole'] = $this->parole_video->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/parole/getParoleVideo',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editParoleVideo($id)
    {
        if(adminLoggedIn())
        {

            if(!empty($id))
            {

                $data['editEvangelisationParoleVideo'] = $this->parole_video->checkDataByKey($id,'id_evangelisation_parole_video');
                $data['titre'] = 'Modifier un contenu vidéo';
                $data['menu'] = array('Evangelisation', 'parole de la semaine');

                $data['status'] = $this->status->read();
                $data['jours'] = $this->jours->read();

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/evangelisation/parole/editParoleVideo',$data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');


            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateParoleVideo()
    {
        if(adminLoggedIn())
        {

            $data['updateParoleVideoAuthor'] = $this->input->post('auteur',true);
            $data['updateParoleVideoLink'] = $this->input->post('lienVideo',true);
            $data['updateParoleVideoDescribe'] = $this->input->post('description',true);
            $data['updateParoleVideoDay'] = $this->input->post('jour',true);
            $data['updateParoleVideoStatus'] = (int)$this->input->post('status',true);


            $idUpDateParoleVideo = $this->input->post('idEvangelisationParoleVideo',true);


            $upDateDataParoleVideo = array(

                'author_evangelisation_parole_video'=>$data['updateParoleVideoAuthor'],
                'link_evangelisation_parole_video'=>$data['updateParoleVideoLink'],
                'describe_evangelisation_parole_video'=>$data['updateParoleVideoDescribe'],
                'day_evangelisation_parole_video'=>$data['updateParoleVideoDay'],
                'status_evangelisation_parole_video'=>$data['updateParoleVideoStatus'],
                'modified_at_evangelisation_parole_video'=> date('Y-m-d h:i:s'),
                'modified_by_evangelisation_parole_video '=> getAdminId()
            );


         //   print_r($upDateDataParoleVideo); die();

            $updateParoleVideo = $this->parole_video->update(array('id_evangelisation_parole_video'=>$idUpDateParoleVideo),$upDateDataParoleVideo);

            if($updateParoleVideo)
            {
                $this->session->set_flashdata('success_get_evangelisation_parole','Modification effectuée');
                $this->getParoleVideo();

            }else{

                $this->session->set_flashdata('error_get_evangelisation_parole','Modification échouée');
                $this->getParoleVideo();
            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteParoleVideo()
    {
        if(adminLoggedIn())
        {

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    /* ================= Verset Quotiden ==============================*/

    public function newVerset()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter un verset';
            $data['menu'] = array('Education et formations', 'Verset quotidien');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/verset/newVerset',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addVerset()
    {
        if(adminLoggedIn())
        {

                 $data['addVersetVerset'] = $this->input->post('verset',true);
                 $data['addVersetReference'] = $this->input->post('reference',true);
                 $data['addVersetStatus'] = $this->input->post('status',true);


                 $dataVerset = array(

                     'verset_evangelisation_verset'=> $data['addVersetVerset'],
                     'reference_evangelisation_verset'=> $data['addVersetReference'],
                     'status_evangelisation_verset'=> $data['addVersetStatus'],
                     'created_by_evangelisation_verset '=> getAdminId()

                 );


                 $checkVerset = $this->verset->checkUser($dataVerset);

                 if(count($checkVerset) == 1)
                 {

                    $this->session->set_flashdata('error_new_evangelisation_verset','Désolé, le verset exite en base!');
                    $this->newVerset();

                 }else{

                     $insert = $this->verset->create($dataVerset);

                     if($insert)
                     {

                         $this->session->set_flashdata('success_new_evangelisation_verset','Enregistrement effectué');
                         $this->newVerset();

                     }else{

                         $this->session->set_flashdata('error_new_evangelisation_verset','Enregistrement échoué');
                         $this->newVerset();
                     }


                 }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getVerset()
    {
        if(adminLoggedIn())
        {


            $data['titre'] = 'Liste des versets';
            $data['menu'] = array('Education et formations', 'verset quotidien');

            $data['allVerset'] = $this->verset->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/verset/getVerset',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editVerset($id)
    {
        if(adminLoggedIn())
        {

           if(!empty($id))
           {


               $data['titre'] = 'Modifier un verset';
               $data['menu'] = array('Education et formations', 'Verset quotidien');

               $data['editVerset'] = $this->verset->checkDataByKey($id,'id_evangelisation_verset');

               if(count($data['editVerset']) == 1)
               {

                   $data['status'] = $this->status->read();

                   $this->load->view('backoffice/admin/header/header');
                   $this->load->view('backoffice/admin/header/css');
                   $this->load->view('backoffice/admin/header/navTop');
                   $this->load->view('backoffice/admin/header/navLeft');
                   $this->load->view('backoffice/evangelisation/verset/editVerset',$data);
                   $this->load->view('backoffice/admin/header/footer');
                   $this->load->view('backoffice/admin/header/htmlClose');

               }

           }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateVerset()
    {
        if(adminLoggedIn())
        {

            $data['upDateVerset'] = $this->input->post('verset',true);
            $data['upDateReference'] = $this->input->post('reference',true);
            $data['upDateStatus'] = (int)$this->input->post('status',true);

            $idVerset = $this->input->post('idEvangelisationVerset',true);


            $dataVerset = array(

                'verset_evangelisation_verset'=> $data['upDateVerset'],
                'reference_evangelisation_verset'=> $data['upDateReference'],
                'status_evangelisation_verset'=> $data['upDateStatus'],
                'modified_at_evangelisation_verset '=> date('Y-m-d h:i:s'),
                'modified_by_evangelisation_verset '=> getAdminId()

            );


            $updateDataVerset = $this->verset->update(array('id_evangelisation_verset'=>$idVerset),$dataVerset);

            if($updateDataVerset)
            {

                $this->session->set_flashdata('success_get_evangelisation_verset','Modification effectuée');
                $this->getVerset();

            }else{

                $this->session->set_flashdata('error_get_evangelisation_verset','Modification echoué');
                $this->getVerset();
            }




        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteVerset()
    {
        if(adminLoggedIn())
        {




        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }


    /* ================= Verset 2 Quotiden ==============================*/

    public function newVerset2()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter un verset au slide 2 ';
            $data['menu'] = array('Education et formations', 'Verset quotidien');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/verset/newVerset2',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function addVerset2()
    {
        if(adminLoggedIn())
        {

            $data['addVerset2Verset'] = $this->input->post('verset2',true);
            $data['addVerset2Reference'] = $this->input->post('reference2',true);
            $data['addVerset2Status'] = $this->input->post('status',true);


            $dataVerset2 = array(

                'verset_evangelisation_verset2'=> $data['addVerset2Verset'],
                'reference_evangelisation_verset2'=> $data['addVerset2Reference'],
                'status_evangelisation_verset2'=> $data['addVerset2Status'],
                'created_by_evangelisation_verset2 '=> getAdminId()

            );


           //  var_dump($dataVerset2); die();

            $checkVerset2 = $this->verset2->checkUser($dataVerset2);

            if(count($checkVerset2) == 1)
            {

                $this->session->set_flashdata('error_new_evangelisation_verset2','Désolé, le verset exite en base!');
                $this->newVerset2();

            }else{

                $insert = $this->verset2->create($dataVerset2);

                //var_dump($insert);

                if($insert)
                {

                    $this->session->set_flashdata('success_new_evangelisation_verset2','Enregistrement effectué');
                    $this->newVerset2();

                }else{

                    $this->session->set_flashdata('error_new_evangelisation_verset2','Enregistrement échoué');
                    $this->newVerset2();
                }


            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function getVerset2()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Listes des versets au slide 2 ';
            $data['menu'] = array('Education et formations', 'Verset quotidien');

            $data['allVerset'] = $this->verset2->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/evangelisation/verset/getVerset2',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editVerset2($id)
    {
        if(adminLoggedIn())
        {

            if(!empty($id))
            {

                $data['titre'] = 'Modifier un verset du slide 2';
                $data['menu'] = array('Education et formations', 'Verset quotidien');

                $data['editVerset'] = $this->verset2->checkDataByKey($id,'id_evangelisation_verset2');

                if(count($data['editVerset']) == 1)
                {

                    $data['status'] = $this->status->read();

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/evangelisation/verset/editVerset2',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateVerset2()
    {
        if(adminLoggedIn())
        {

            $data['upDate2Verset'] = $this->input->post('verset2',true);
            $data['upDate2Reference'] = $this->input->post('reference2',true);
            $data['upDate2Status'] = (int)$this->input->post('status',true);

            $idVerset2 = $this->input->post('idEvangelisationVerset2',true);


            $dataVerset2 = array(

                'verset_evangelisation_verset2'=> $data['upDate2Verset'],
                'reference_evangelisation_verset2'=> $data['upDate2Reference'],
                'status_evangelisation_verset2'=> $data['upDate2Status'],
                'modified_at_evangelisation_verset2 '=> date('Y-m-d h:i:s'),
                'modified_by_evangelisation_verset2 '=> getAdminId()

            );


            $updateDataVerset = $this->verset2->update(array('id_evangelisation_verset2'=>$idVerset2),$dataVerset2);

            if($updateDataVerset)
            {

                $this->session->set_flashdata('success_get_evangelisation_verset2','Modification effectuée');
                $this->getVerset2();

            }else{

                $this->session->set_flashdata('error_get_evangelisation_verset2','Modification echoué');
                $this->getVerset2();
            }




        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }


    /* ================= Boutique Article==============================*/

    public function newCategory()
    {

        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter une catégorie';
            $data['menu'] = array('Boutique');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/categorie/newCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addCategory()
    {

        if(adminLoggedIn())
        {

            $data['addCategoryName'] = verifyInput($this->input->post('category',true));
            $data['addCategoryStatus'] = (int)verifyInput($this->input->post('status',true));

            $dataCategory = array(

                'name'=>$data['addCategoryName'],
                'status'=>$data['addCategoryStatus'],
                'created_by'=>getAdminId()

            );

            $checkCategory = $this->categories->checkUser($dataCategory);

            if(count($checkCategory) == 1)
            {

                $this->session->set_flashdata('error_new_category','Cette catégorie existe en base!');
                $this->newCategory();

            }else{


                $insertCategory = $this->categories->create($dataCategory);

                if($insertCategory)
                {

                    $this->session->set_flashdata('succes_new_category','Enregistrement éffectué!');
                    $this->newCategory();

                }else{

                    $this->session->set_flashdata('error_new_category','Enregistrement échoué!');
                    $this->newCategory();


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function getCategory()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'liste des catégories';
            $data['menu'] = array('Boutique');

            $data['categories'] = $this->categories->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/categorie/getCategory',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function editCategory($id)
    {
        if(adminLoggedIn())
        {


            if(!empty($id))
            {
                $data['titre'] = 'Modifier une catégorie';
                $data['menu'] = array('Boutique','Catégorie');
                $data['status'] = $this->status->read();

                $data['editCategory'] = $this->categories->checkDataByKey($id,'id');

                if(count($data['editCategory']) == 1)
                {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/boutique/categorie/editCategory',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateCategory()
    {
        if(adminLoggedIn())
        {

            $data['upDateCategoryName'] = $this->input->post('category',true);
            $data['upDateCategoryStatus'] = (int)$this->input->post('status',true);


            $idUpDateCategory =  $this->input->post('idCategoryUpDate',true);

            $dataCategory = array(
                'name'=> $data['upDateCategoryName'],
                'status'=> $data['upDateCategoryStatus'],
                'modified_at'=> date('Y-m-d h:i:s'),
                'modified_by'=> getAdminId()
            );


            $upDateCategory = $this->categories->update(array('id'=>$idUpDateCategory),$dataCategory);

            if($upDateCategory)
            {

                $this->session->set_flashdata('success_get_category','Modification éffectué!');
                $this->getCategory();


            }else{

                $this->session->set_flashdata('error_get_category','Modification échoué!');
                $this->getCategory();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteCategory()
    {
        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idDelCategory = $this->input->post('text',true);

                if(!empty($idDelCategory))
                {

                    $idDelCategoryDecrypt = $this->encryption->decrypt($idDelCategory);
                    $delCategory =  $this->categories->delete(array('id'=>$idDelCategoryDecrypt));


                    if($delCategory)
                    {
                        echo 'success';

                    }else{

                        echo 'failed';
                    }

                }


            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    /* ================= Boutique Article==============================*/

    public function newArticle()
    {

        if(adminLoggedIn())
        {

            $data['titre'] = 'Ajouter un article';
            $data['menu'] = array('Boutique');
            $data['status'] = $this->status->read();

            $data['categories'] = $this->categories->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/articles/newArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function addArticle()
    {

          if(adminLoggedIn())
          {

                 $path = realpath(APPPATH.'../assets/boutique/articles/img/');
                 $config['upload_path'] = $path;
                 $config['allowed_types'] = 'gif|jpg|png|jpeg';
                 $config['remove_spaces'] = true;

                 $this->load->library('upload',$config);

                 $data['addArticleName'] = strtoupper($this->input->post('name',true));
                 $data['addArticleOldPrice'] = (int)$this->input->post('oldPrix',true);
                 $data['addArticleNewPrice'] = (int)$this->input->post('newPrix',true);
              // $data['addArticlePercent'] = (int)$this->input->post('percent',true);
                 $data['addArticleDescribe'] = $this->input->post('description',true);
                 $data['addArticleCategory'] = $this->input->post('Category',true);
                 $data['addArticleStatus'] = (int)$this->input->post('status',true);


                 
                 if(!$this->upload->do_upload('image'))
                 {
                     $error = $this->upload->display_errors();
                     $this->session->set_flashdata('error_new_articles',$error);
                     $this->newArticle();
                 }else{

                     $fileName = $this->upload->data();

                     $data['addArticleFile'] = $fileName['file_name'];

                 }

                 $dataArticle = array(

                     'name_articles'=> $data['addArticleName'],
                     'old_price_articles'=> $data['addArticleOldPrice'],
                     'new_price_articles'=> $data['addArticleNewPrice'],
                     'describe_articles'=> $data['addArticleDescribe'],
                     'file_articles'=> $data['addArticleFile'],
                     'category_id'=> $data['addArticleCategory'],
                     'status_articles'=> $data['addArticleStatus'],
                     'created_by_articles'=> getAdminId()

                 );


                // var_dump($dataArticle); die();



                 $checkDataArticle = $this->article->checkUser($dataArticle);

                 if(count($checkDataArticle) == 1)
                 {

                  $this->session->set_flashdata('error_new_articles','Désolé, le verset exite en base!');
                  $this->newArticle();

                 }else{


                     $insertArticle = $this->article->create($dataArticle);


                     if($insertArticle)
                     {

                         $this->session->set_flashdata('success_new_articles','Enregistrement effectué avec success');
                         $this->newArticle();

                     }else{

                         $this->session->set_flashdata('error_new_articles','Enregistrement échoué');
                         $this->newArticle();


                     }

                 }

          }else{

              $this->session->set_flashdata('error', 'Connectez vous svp!');
              $this->login();

          }

    }

    public function getArticle()
    {
        if(adminLoggedIn())
        {

            $data['titre'] = 'Liste des articles';
            $data['menu'] = array('Boutique');

            $data['articles'] = $this->article->read();

            $data['categories'] = $this->categories->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/boutique/articles/getArticle',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');



        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editArticle($id)
    {
        if(adminLoggedIn())
        {

            if(!empty($id))
            {

                $data['titre'] = 'Modifier un articles';
                $data['menu'] = array('Boutique');

                $data['editArticle'] = $this->article->checkDataByKey($id,'id_articles');

                if(count($data['editArticle']) == 1)
                {

                    $data['status'] = $this->status->read();
                    $data['categories'] = $this->categories->read();

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/boutique/articles/editArticle',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateArticle()
    {
        if (adminLoggedIn()) {

        /*    $path = realpath(APPPATH . '../assets/boutique/articles/img/');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;*/

          //  $this->load->library('upload', $config);

            $data['updateArticleName'] = strtoupper($this->input->post('updateName', true));
            $data['updateArticleOldPrice'] = (int)$this->input->post('oldUpdatePrice', true);
            $data['updateArticleNewPrice'] = (int)$this->input->post('newUpdatePrice', true);
            $data['updateArticlePercent'] = (int)$this->input->post('updatePercent', true);
            $data['updateArticleDescribe'] = $this->input->post('updateDescribe', true);
            $data['updateArticleCategory'] = $this->input->post('updateCategory', true);
            $data['updateArticleStatus'] = $this->input->post('status', true);


            $idUploadArticle = $this->input->post('idArticleUpDate', true);
            $oldImageUploadArticle = $this->input->post('oldImageUpdateArticle', true);


          /*  if (!$this->upload->do_upload('updateImage')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_article', $error);
                $this->getArticle();
            } else {

                $fileName = $this->upload->data();
                $data['updateArticleFile'] = $fileName['file_name'];
            }*/


            $dataUpdateArticle = array(

                'name_articles' => $data['updateArticleName'],
                'old_price_articles' => $data['updateArticleOldPrice'],
                'new_price_articles' => $data['updateArticleNewPrice'],
                'percent_articles' => $data['updateArticlePercent'],
                'describe_articles' => $data['updateArticleDescribe'],
                /*'file_articles' => $data['updateArticleFile'],*/
                'category_id' => $data['updateArticleCategory'],
                'status_articles' => $data['updateArticleStatus'],
                'modified_at_articles' => date('Y-m-d h:i:s'),
                'modified_by_articles' => getAdminId()

            );


            $upDateArticle = $this->article->update(array('id_articles' => $idUploadArticle), $dataUpdateArticle);

            if ($upDateArticle) {


                /*if(!empty($data['updateArticleFile']) and isset($data['updateArticleFile'])) {

                    if (file_exists($path . '/' . $oldImageUploadArticle)) {
                        unlink($path . '/' . $oldImageUploadArticle);*/

                        $this->session->set_flashdata('success_get_article', 'Modification effectuée');
                        $this->getArticle();

                        /*}
                }*/

                }else {

                $this->session->set_flashdata('error_get_article', 'Modification échouée!');
                $this->getArticle();
            }


        }else{

                $this->session->set_flashdata('error', 'Connectez vous svp!');
                $this->login();

            }

    }

    public function deleteArticle()
    {
         if(adminLoggedIn())
         {

             if($this->input->is_ajax_request())
             {

                          $this->input->post('id',true);
                          $idDelArticle = $this->input->post('text',true);

                          if(!empty($idDelArticle))
                          {

                              $idDelArticleDecrypt = $this->encryption->decrypt($idDelArticle);

                              $imageToDel = $this->article->getImageById('file_articles',array('id_articles'=>$idDelArticleDecrypt));
                              
                              if(!empty($imageToDel) and count($imageToDel) == 1)
                              {
                                  
                                  $realImage = $imageToDel[0]['id_articles'];
                                  
                              }

                              $deleteArticle = $this->article->delete(array('id_articles'=>$idDelArticleDecrypt));

                              if($deleteArticle)
                              {
                                  if(!empty($realImage) and isset($realImage))
                                  {
                                      $path = realpath(APPPATH.'../assets/boutique/articles/img/');

                                      if(file_exists($path.'/'.$realImage))
                                      {
                                          unlink($path.'/'.$realImage);
                                      }


                                  }
                              }
                              

                          }

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
    }


    /* ================= Boutique carousel ==============================*/


    public function newCarousel()
    {
        if(adminLoggedIn())
        {
            $data['titre'] = 'Ajouter une image';
            $data['menu'] = array('Boutique','Carousel');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/carousel/newCarousel',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addCarousel()
    {
        if(adminLoggedIn())
        {

             $path = realpath(APPPATH.'../assets/boutique/carousel/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'gif|jpg|png|jpeg';
             $config['remove_spaces'] = true;


             $this->load->library('upload',$config);


             if(!$this->upload->do_upload('image'))
             {
                   $error  = $this->upload->display_errors();
                   $this->session->set_flashdata('error_new_carousel',$error);
                   $this->newCarousel();

             }else{

                 $fileName = $this->upload->data();
                 $data['addImage'] = $fileName['file_name'];

             }


             $dataCarousel = array(

                 'file_boutique_carousel'=> $data['addImage'],
                 'created_by_boutique_carousel'=> getAdminId()

             );

             $checkCarousel = $this->carousel->checkUser($dataCarousel);


             if(count($checkCarousel) == 1)
             {

                 $this->session->set_flashdata('error_new_carousel','Désolé, cette image exite en base!');
                 $this->newCarousel();

             }else{


                 $insertImage = $this->carousel->create($dataCarousel);


                 if($insertImage)
                 {

                     $this->session->set_flashdata('success_new_carousel','Enregistrement effectué');
                     $this->newCarousel();

                 }else{

                     $this->session->set_flashdata('error_new_carousel','Enregistrement échoué');
                     $this->newCarousel();


                 }


             }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getCarousel()
    {
        if(adminLoggedIn())
        {
            $data['titre'] = 'Ajouter une image';
            $data['menu'] = array('Boutique','Carousel');

            $data['carousel'] = $this->carousel->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/carousel/getCarousel',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editCarousel($id)
    {
        if(adminLoggedIn())
        {

            if(!empty($id))
            {

                $data['titre'] = 'Modifier un articles';
                $data['menu'] = array('Boutique');

                $data['editCarousel'] = $this->carousel->checkDataByKey($id,'id_boutique_carousel');

                if(count($data['editCarousel']) == 1)
                {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/carousel/editCarousel',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateCarousel()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/boutique/carousel/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idCarouselUpDate',true);
            $oldImage = $this->input->post('oldCarouselUpDate',true);



            if(!$this->upload->do_upload('imageCarousel'))
            {
                   $error = $this->upload->display_errors();
                   $this->session->set_flashdata('error_get_carousel',$error);
                   $this->getCarousel();

            }else{

               $fileName =  $this->upload->data();
               $data['updateCarouselImage'] = $fileName['file_name'];

            }
            $dataCarousel  =  array(

                'file_boutique_carousel'=> $data['updateCarouselImage'],
                'modified_at_boutique_carousel'=> date('Y-m-d h:s:i'),
                'modified_by_boutique_carousel'=> getAdminId()
            );



            $upDateCarouselData = $this->carousel->update(array('id_boutique_carousel'=>$id), $dataCarousel);


            if($upDateCarouselData)
            {

                  if(!empty($data['updateCarouselImage']) and isset($data['updateCarouselImage']))
                  {

                      if(file_exists($path.'/'.$oldImage))
                      {
                          unlink($path.'/'.$oldImage);

                          $this->session->set_flashdata('success_get_carousel','Modification effectuée');
                          $this->getCarousel();
                      }

                  }

            }else{

                $this->session->set_flashdata('error_get_carousel','Modification échouée');
                $this->getCarousel();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteCarousel()
    {

        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idCarousel = $this->input->post('text',true);


                if(!empty($idCarousel))
                {

                    $idCarouselDecrypt = $this->encryption->decrypt($idCarousel);


                    $imgCarouselToDel = $this->carousel->getImageById('file_boutique_carousel',array('id_boutique_carousel'=>$idCarouselDecrypt));

                    if(!empty($imgCarouselToDel) and count($imgCarouselToDel) == 1)
                    {
                        $realImage = $imgCarouselToDel[0]['id_boutique_carousel'];
                    }


                    $delCarousel = $this->carousel->delete(array('id_boutique_carousel'=>$idCarouselDecrypt));


                    if($delCarousel)
                    {

                           if(!empty($realImage) and isset($realImage))
                           {
                               $path = realpath(APPPATH.'../assets/boutique/carousel/');

                               if(file_exists($path.'/'.$realImage))
                               {
                                   unlink($path.'/'.$realImage);
                               }

                           }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }


    /* ================= Echange Forum ==============================*/

    public function newEchangeForum()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un thème';
            $data['menu'] = array('Echange','Forum');
            $data['status'] = $this->status->read();
            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/echange/forum/newEchangeForum',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addEchangeForum()
    {
        if (adminLoggedIn()) {

            $data['addForumAdminTitle'] = $this->input->post('title', true);
            $data['addForumAdminAuthor'] = $this->input->post('author', true);
            $data['addForumAdminTheme'] = $this->input->post('theme', true);
            $data['addForumAdminStatus'] = (int)$this->input->post('status', true);


            if (!empty($data['addForumAdminTitle']) and !empty($data['addForumAdminAuthor']) and !empty($data['addForumAdminTheme'])) {

                $forumAdminData = array(

                    'titre_echange_forum' => $data['addForumAdminTitle'],
                    'auteur_echange_forum' => $data['addForumAdminAuthor'],
                    'theme_echange_forum' => $data['addForumAdminTheme'],
                    'status_echange_forum' => $data['addForumAdminStatus'],
                    'created_at_echange_forum' => strftime('%d %B %Y'),
                    'created_by_echange_forum' => getAdminId()

                );

                $checkForumAdminData = $this->echange_forum->checkUser($forumAdminData);

                if (count($checkForumAdminData) == 1) {

                    $this->session->set_flashdata('error_new_echange_forum', 'Ces données existent en base!');
                    $this->newEchangeForum();


                } else {

                    $insertForumAdmin = $this->echange_forum->create($forumAdminData);

                    if ($insertForumAdmin) {

                        $this->session->set_flashdata('success_new_echange_forum', 'Enregistrement effectué');
                        $this->newEchangeForum();


                    } else {

                        $this->session->set_flashdata('error_new_echange_forum', 'Enregistrement non effectué');
                        $this->newEchangeForum();

                    }

                }


            } else {

                $this->session->set_flashdata('error_new_forumAdmin', 'Veillez remplir correctement le formulaire');
                $this->newEchangeForum();

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getEchangeForum()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des thèmes';
            $data['menu'] = array('Echange','Forum');
            $data['allEchangeForum'] = $this->echange_forum->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/echange/forum/getEchangeForum', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function viewCommentForumEchange($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['titre'] = 'liste des commentaires';
                $data['menu'] = array('Echange','Forum','commentaire(s)');

                $data['comments'] = $this->comment_echange_forum->read('*',array('echange_forum_id'=>$id));

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/echange/forum/commentForum', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }
    
    public function editSatusCommentEchange($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();

                $data['titre'] = 'Editer statut commenataire';
                $data['menu'] = array('Echange','Forum','commentaire(s)');

                $data['editStatusCommentForumEchange'] = $this->comment_echange_forum->checkDataByKey($id, 'id_comment_echange_forum');

                if (count($data['editStatusCommentForumEchange']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop', $this->data);
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/echange/forum/editStatusCommentForumEchange', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editEchangeForum($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {
                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier un thème';
                $data['menu'] = array('Echange','Forum');

                $data['editEchangeForum'] = $this->echange_forum->checkDataByKey($id,'id_echange_forum ');

                if (count($data['editEchangeForum']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/echange/forum/editEchangeForum', $data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function updateStatusCommentEchange()
    {
        if (adminLoggedIn()) {


            $data['upDateForumEchangeCommentStatus'] = (int)$this->input->post('status', true);

            $idUpDateForumEchangeCommentStatus = $this->input->post('idUpDateStatusCommentEchange', true);
            $idPage = $this->input->post('idPageCommentEchange', true);

            $dataForumEchangeStatusComment = array(
                'status_comment_echange_forum' => $data['upDateForumEchangeCommentStatus']
            );

            // var_dump($dataForumAdminStatusComment); die();

            $upDateForumEchangeStatusComment = $this->comment_echange_forum->update(array('id_comment_echange_forum' => $idUpDateForumEchangeCommentStatus), $dataForumEchangeStatusComment);

            if ($upDateForumEchangeStatusComment) {

                $this->session->set_flashdata('success_get_comment_forum_status', 'Modification effectuée avec success!');
                $this->viewCommentForumEchange($idPage);

            } else {
                $this->session->set_flashdata('error_get_comment_forum_status', 'Modification échouée !');
                $this->viewCommentForumEchange($idPage);

            }



        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateEchangeForum()
    {
        if (adminLoggedIn()) {

            $data['upDateForumAdminTitle'] = $this->input->post('title', true);
            $data['upDateForumAdminAuthor'] = $this->input->post('author', true);
            $data['upDateForumAdminTheme'] = $this->input->post('theme', true);
            $data['upDateForumAdminStatus'] = (int)$this->input->post('status', true);

            $idUpDateEchangeForum = $this->input->post('idUpDateForumAdmin', true);


            if (!empty($data['upDateForumAdminTitle']) and !empty($data['upDateForumAdminAuthor']) and !empty($data['upDateForumAdminTheme'])) {

                $dataEchangeForum = array(

                    'titre_echange_forum' => $data['upDateForumAdminTitle'],
                    'auteur_echange_forum' => $data['upDateForumAdminAuthor'],
                    'theme_echange_forum' => $data['upDateForumAdminTheme'],
                    'status_echange_forum' => $data['upDateForumAdminStatus'],
                    'modified_at_echange_forum' => date('Y-m-d h:i:s'),
                    'modified_by_echange_forum' => getAdminId()

                );


                $upDateEchangeForum = $this->echange_forum->update(array('id_echange_forum' => $idUpDateEchangeForum), $dataEchangeForum);

                if ($upDateEchangeForum) {

                    $this->session->set_flashdata('success_get_echange_forum', 'Modification effectuée avec success!');
                    $this->getEchangeForum();

                } else {
                    $this->session->set_flashdata('error_get_echange_forum', 'Modification échouée !');
                    $this->getEchangeForum();

                }


            } else {


                $this->session->set_flashdata('error_get_echange_forum', 'le formulaire de modifiaction doit être rempli svp!');
                $this->getEchangeForum();
            }


        } else {
            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function deleteEchangeForum()
    {
        if (adminLoggedIn()) {

            if ($this->input->is_ajax_request()) {

                $this->input->post('id', true);

                $ipDelForumEchange = $this->input->post('text', true);

                if (!empty($ipDelForumEchange)) {

                    $ipDelForumEchangeDecrypt = $this->encryption->decrypt($ipDelForumEchange);

                    $delDataForumEchange = $this->echange_forum->delete(array('id_echange_forum' => $ipDelForumEchangeDecrypt));

                    if ($delDataForumEchange) {

                        echo 'success';

                    } else {

                        echo 'failed';
                    }


                }


            } else {

                echo 'id does not exist';

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    /**
     * ===============================  banner pages ===========================================
     */

    public function newBannerPresentation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Présenatation');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/presentation/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerPresentation()
    {
        if (adminLoggedIn()) {


            $path = realpath(APPPATH.'../assets/banniere/presentation/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_presentation',$error);
                $this->newBannerPresentation();

            }else{

                 $fileName = $this->upload->data();
                 $data['imgPresentation'] = $fileName['file_name'];
                 $data['status'] = $this->input->post('status',true);

            }

            $dataPresentation = array(

                'file_banner_presentation'=> $data['imgPresentation'],
                'status_banner_presentation'=> $data['status'],
                'created_by_banner_presentation'=>getAdminId()

            );


            $checkImgPresentation = $this->banner_presentation->checkUser($dataPresentation);


            if(count($checkImgPresentation) == 1)
            {

                $this->session->set_flashdata('error_new_banner_presentation', 'Ces données existent en base!');
                $this->newBannerPresentation();



            }else{


                $insertBannerPresentation = $this->banner_presentation->create($dataPresentation);

                if($insertBannerPresentation)
                {

                    $this->session->set_flashdata('success_new_banner_presentation', 'Enregistrement effectué');
                    $this->newBannerPresentation();

                }else{

                    $this->session->set_flashdata('error_new_banner_presentation', 'Enregistrement non effectué');
                    $this->newBannerPresentation();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerPresentation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Présenatation');
            $data['allBannerPresentation'] = $this->banner_presentation->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/presentation/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerPresentation($id)
    {

        if (adminLoggedIn()) {

            if (isset($id)) {
                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Présenatation');

                $data['editBannerPresentation'] = $this->banner_presentation->checkDataByKey($id,'id_banner_presentation');

                if (count($data['editBannerPresentation']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/presentation/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }

    public function upDateBannerPresentation()
    {

        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/presentation/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerPresentationUpDate',true);
            $oldImage = $this->input->post('oldBannerPresentationUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_presentation',$error);
                $this->getBannerPresentation();

            }else{

                $fileName =  $this->upload->data();
                $data['updateBannerPresentation'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }




            $dataBannerPresentation  =  array(

                'file_banner_presentation'=> $data['updateBannerPresentation'],
                'status_banner_presentation'=> $data['status'],
                'modified_at_banner_presentation'=> date('Y-m-d h:s:i'),
                'modified_by_banner_presentation'=> getAdminId()
            );



            $upDateBannerPresentation = $this->banner_presentation->update(array('id_banner_presentation'=>$id), $dataBannerPresentation);


            if($upDateBannerPresentation)
            {

                if(!empty($data['updateBannerPresentation']) and isset($data['updateBannerPresentation']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_presentation','Modification effectuée');
                        $this->getBannerPresentation();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_presentation','Modification échouée');
                $this->getBannerPresentation();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function deleteBannerPresentation()
    {

        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idBannerPresentation = $this->input->post('text',true);


                if(!empty($idBannerPresentation))
                {

                    $idBannerPresentationDecrypt = $this->encryption->decrypt($idBannerPresentation);

                    $imgBannerPresentationToDel = $this->banner_presentation->getImageById('file_banner_presentation',array('id_banner_presentation'=>$idBannerPresentationDecrypt));

                    if(!empty($imgBannerPresentationToDel) and count($imgBannerPresentationToDel) == 1)
                    {
                        $realImage = $imgBannerPresentationToDel[0]['file_banner_presentation'];
                    }


                    $delBannerPresentation = $this->banner_presentation->delete(array('id_banner_presentation'=>$idBannerPresentationDecrypt));


                    if($delBannerPresentation)
                    {

                        if(!empty($realImage) and isset($realImage))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/presentation/');

                            if(file_exists($path.'/'.$realImage))
                            {
                                unlink($path.'/'.$realImage);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }


    public function newBannerOrganisation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Organisation');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/organisation/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerOrganisation()
    {
        if (adminLoggedIn()) {


            $path = realpath(APPPATH.'../assets/banniere/organisation/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_organisation',$error);
                $this->newBannerOrganisation();

            }else{

                $fileName = $this->upload->data();
                $data['imgOrganisation'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataOrganisation = array(

                'file_banner_organisation'=> $data['imgOrganisation'],
                'status_banner_organisation'=> $data['status'],
                'created_by_banner_organisation'=>getAdminId()

            );


            $checkImgOrganisation = $this->banner_organisation->checkUser($dataOrganisation);


            if(count($checkImgOrganisation) == 1)
            {

                $this->session->set_flashdata('error_new_banner_organisation', 'Ces données existent en base!');
                $this->newBannerOrganisation();



            }else{


                $insertBannerOrganisation = $this->banner_organisation->create($dataOrganisation);

                if($insertBannerOrganisation)
                {

                    $this->session->set_flashdata('success_new_banner_organisation', 'Enregistrement effectué');
                    $this->newBannerOrganisation();

                }else{

                    $this->session->set_flashdata('error_new_banner_organisation', 'Enregistrement non effectué');
                    $this->newBannerOrganisation();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerOrganisation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Organisation');
            $data['allBannerOrganisation'] = $this->banner_organisation->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/organisation/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerOrganisation($id)
    {

        if (adminLoggedIn()) {

            if (isset($id)) {
                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Organisation');

                $data['editBannerOrganisation'] = $this->banner_organisation->checkDataByKey($id,'id_banner_organisation');

                if (count($data['editBannerOrganisation']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/organisation/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function upDateBannerOrganisation()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/organisation/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerOrganisationUpDate',true);
            $oldImage = $this->input->post('oldBannerOrganisationUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_organisation',$error);
                $this->getBannerOrganisation();

            }else{

                $fileName =  $this->upload->data();
                $data['updateBannerOrganisation'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerOrganisation  =  array(

                'file_banner_organisation'=> $data['updateBannerOrganisation'],
                'status_banner_organisation'=> $data['status'],
                'modified_at_banner_organisation'=> date('Y-m-d h:s:i'),
                'modified_by_banner_organisation'=> getAdminId()
            );



            $upDateBannerOrganisation = $this->banner_organisation->update(array('id_banner_organisation'=>$id), $dataBannerOrganisation);


            if($upDateBannerOrganisation)
            {

                if(!empty($data['updateBannerOrganisation']) and isset($data['updateBannerOrganisation']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_organisation','Modification effectuée');
                        $this->getBannerOrganisation();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_organisation','Modification échouée');
                $this->getBannerOrganisation();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerOrganisation()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idBannerOrganisation = $this->input->post('text',true);


                if(!empty($idBannerOrganisation))
                {

                    $idBannerOrganisationDecrypt = $this->encryption->decrypt($idBannerOrganisation);

                    $imgBannerOrganisationToDel = $this->banner_organisation->getImageById('file_banner_organisation',array('id_banner_organisation'=>$idBannerOrganisationDecrypt));

                    if(!empty($imgBannerOrganisationToDel) and count($imgBannerOrganisationToDel) == 1)
                    {
                        $realImageBannerPresentation = $imgBannerOrganisationToDel[0]['file_banner_organisation'];
                    }


                    $delBannerOrganisation =  $this->banner_organisation->delete(array('id_banner_organisation'=>$idBannerOrganisationDecrypt));


                    if($delBannerOrganisation)
                    {

                        if(isset($realImageBannerPresentation))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/organisation/');

                            if(file_exists($path.'/'.$realImageBannerPresentation))
                            {
                                unlink($path.'/'.$realImageBannerPresentation);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }



    public function newBannerPartners()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Partenaires');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/partenaires/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerPartners()
    {
        if (adminLoggedIn()) {


            $path = realpath(APPPATH.'../assets/banniere/partenaires/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_partners',$error);
                $this->newBannerPartners();

            }else{

                $fileName = $this->upload->data();
                $data['imgPartners'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataPartners = array(

                'file_banner_partenanires'=> $data['imgPartners'],
                'status_banner_partenanires'=> $data['status'],
                'created_by_banner_partenanires'=>getAdminId()

            );


            $checkImgPartners = $this->banner_partners->checkUser($dataPartners);


            if(count($checkImgPartners) == 1)
            {

                $this->session->set_flashdata('error_new_banner_partners', 'Ces données existent en base!');
                $this->newBannerPartners();



            }else{


                $insertBannerPartners = $this->banner_partners->create($dataPartners);

                if($insertBannerPartners)
                {

                    $this->session->set_flashdata('success_new_banner_partners', 'Enregistrement effectué');
                    $this->newBannerPartners();

                }else{

                    $this->session->set_flashdata('error_new_banner_partners', 'Enregistrement non effectué');
                    $this->newBannerPartners();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerPartners()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Partenaires');
            $data['allBannerPartners'] = $this->banner_partners->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/partenaires/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerPartners($id)
    {

        if (adminLoggedIn()) {

            if (isset($id)) {
                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Partenaires');

                $data['editBannerPartners'] = $this->banner_partners->checkDataByKey($id,'id_banner_partenanires');

                if (count($data['editBannerPartners']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/partenaires/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function upDateBannerPartners()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/partenaires/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerPartnersUpDate',true);
            $oldImage = $this->input->post('oldBannerPartnersUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_partners',$error);
                $this->getBannerOrganisation();

            }else{

                $fileName =  $this->upload->data();
                $data['updateBannerPartners'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerPartners  =  array(

                'file_banner_partenanires'=> $data['updateBannerPartners'],
                'status_banner_partenanires'=> $data['status'],
                'modified_at_banner_partenanires'=> date('Y-m-d h:s:i'),
                'modified_by_banner_partenanires'=> getAdminId()

            );



            $upDateBannerOrganisation = $this->banner_partners->update(array('id_banner_partenanires '=>$id), $dataBannerPartners);


            if($upDateBannerOrganisation)
            {

                if(!empty($data['updateBannerPartners']) and isset($data['updateBannerPartners']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_partners','Modification effectuée');
                        $this->getBannerPartners();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_partners','Modification échouée');
                $this->getBannerPartners();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerPartners()
    {

        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idBannerPartners = $this->input->post('text',true);


                if(!empty($idBannerPartners))
                {

                    $idBannerPartnersDecrypt = $this->encryption->decrypt($idBannerPartners);

                    $imgBannerPartnersToDel = $this->banner_partners->getImageById('file_banner_partenanires',array('id_banner_partenanires'=>$idBannerPartnersDecrypt));

                    if(!empty($imgBannerPartnersToDel) and count($imgBannerPartnersToDel) == 1)
                    {
                        $realImageBannerPartners = $imgBannerPartnersToDel[0]['file_banner_partenanires'];
                    }


                    $delBannerPartners =  $this->banner_partners->delete(array('id_banner_partenanires'=>$idBannerPartnersDecrypt));


                    if($delBannerPartners)
                    {

                        if(isset($realImageBannerPartners))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/partenaires/');

                            if(file_exists($path.'/'.$realImageBannerPartners))
                            {
                                unlink($path.'/'.$realImageBannerPartners);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }


    public function newBannerSpeech()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Parole de la semaine');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/parole/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerSpeech()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/banniere/parole/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_parole',$error);
                $this->newBannerSpeech();

            }else{

                $fileName = $this->upload->data();
                $data['imgParole'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataParole = array(

                'file_banner_parole'=> $data['imgParole'],
                'status_banner_parole'=> $data['status'],
                'created_by_banner_parole'=>getAdminId()

            );


            //var_dump($dataParole); die();


            $checkImgParole = $this->banner_parole->checkUser($dataParole);


            if(count($checkImgParole) == 1)
            {

                $this->session->set_flashdata('error_new_banner_parole', 'Ces données existent en base!');
                $this->newBannerSpeech();



            }else{


                $insertBannerParole = $this->banner_parole->create($dataParole);

                if($insertBannerParole)
                {

                    $this->session->set_flashdata('success_new_banner_parole', 'Enregistrement effectué');
                    $this->newBannerSpeech();

                }else{

                    $this->session->set_flashdata('error_new_banner_parole', 'Enregistrement non effectué');
                    $this->newBannerSpeech();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerSpeech()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Parole de la semaine');
            $data['allBannerParole'] = $this->banner_parole->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/parole/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerSpeech($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Parole de la semaine');

                $data['editBannerParole'] = $this->banner_parole->checkDataByKey($id,'id_banner_parole');

                if (count($data['editBannerParole']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/parole/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function upDateBannerSpeech()
    {

        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/parole/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerParoleUpDate',true);
            $oldImage = $this->input->post('oldBannerParoleUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_parole',$error);
                $this->getBannerOrganisation();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerParole'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerParole  =  array(

                'file_banner_parole'=> $data['updateBannerParole'],
                'status_banner_parole'=> $data['status'],
                'modified_at_banner_parole'=> date('Y-m-d h:s:i'),
                'modified_by_banner_parole'=> getAdminId()

            );


            $upDateBannerOrganisation = $this->banner_parole->update(array('id_banner_parole'=>$id), $dataBannerParole);


            if($upDateBannerOrganisation)
            {

                if(!empty($data['updateBannerParole']) and isset($data['updateBannerParole']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_parole','Modification effectuée');
                        $this->getBannerSpeech();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_parole','Modification échouée');
                $this->getBannerSpeech();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function deleteBannerSpeech()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idBannerSpeech = $this->input->post('text',true);


                if(!empty($idBannerSpeech))
                {

                    $idBannerSpeechDecrypt = $this->encryption->decrypt($idBannerSpeech);

                    $imgBannerSpeechToDel = $this->banner_parole->getImageById('file_banner_parole',array('id_banner_parole'=>$idBannerSpeechDecrypt));

                    if(!empty($imgBannerSpeechToDel) and count($imgBannerSpeechToDel) == 1)
                    {
                        $realImageBannerPartners = $imgBannerSpeechToDel[0]['file_banner_parole'];
                    }

                    $delBannerPartners =  $this->banner_parole->delete(array('id_banner_parole'=>$idBannerSpeechDecrypt));


                    if($delBannerPartners)
                    {

                        if(isset($realImageBannerPartners))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/partenaires/');

                            if(file_exists($path.'/'.$realImageBannerPartners))
                            {
                                unlink($path.'/'.$realImageBannerPartners);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }



    public function newBannerEnseignements()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Enseignements');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/enseignement/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerEnseignements()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/banniere/enseignement/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_enseignement',$error);
                $this->newBannerEnseignements();

            }else{

                $fileName = $this->upload->data();
                $data['imgEnseignement'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataEnseignement = array(

                'file_banner_enseignement'=> $data['imgEnseignement'],
                'status_banner_enseignement'=> $data['status'],
                'created_by_banner_enseignement'=>getAdminId()

            );


            $checkImgEnseignement = $this->banner_enseignement->checkUser($dataEnseignement);


            if(count($checkImgEnseignement) == 1)
            {

                $this->session->set_flashdata('error_new_banner_enseignement', 'Ces données existent en base!');
                $this->newBannerEnseignements();



            }else{


                $insertBannerEnseignement = $this->banner_enseignement->create($dataEnseignement);

                if($insertBannerEnseignement)
                {

                    $this->session->set_flashdata('success_new_banner_enseignement', 'Enregistrement effectué');
                    $this->newBannerEnseignements();

                }else{

                    $this->session->set_flashdata('error_new_banner_enseignement', 'Enregistrement non effectué');
                    $this->newBannerEnseignements();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerEnseignements()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Enseignement');
            $data['allBannerEnseignements'] = $this->banner_enseignement->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/enseignement/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }
    
    public function editBannerEnseignements($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Enseignement');

                $data['editBannerEnseignement'] = $this->banner_enseignement->checkDataByKey($id,'id_banner_enseignement ');

                if (count($data['editBannerEnseignement']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/enseignement/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerEnseignements()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/enseignement/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerEnseignementUpDate',true);
            $oldImage = $this->input->post('oldBannerEnseignementUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_enseignement',$error);
                $this->getBannerEnseignements();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerEnseignement'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerEnseignement  =  array(

                'file_banner_enseignement'=> $data['updateBannerEnseignement'],
                'status_banner_enseignement'=> $data['status'],
                'modified_at_banner_enseignement'=> date('Y-m-d h:s:i'),
                'modified_by_banner_enseignement'=> getAdminId()

            );


            $upDateBannerEnseignement = $this->banner_enseignement->update(array('id_banner_parole'=>$id), $dataBannerEnseignement);


            if($upDateBannerEnseignement)
            {

                if(!empty($data['updateBannerEnseignement']) and isset($data['updateBannerEnseignement']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_enseignement','Modification effectuée');
                        $this->getBannerEnseignements();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_enseignement','Modification échouée');
                $this->getBannerEnseignements();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerEnseignements()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idBannerEnseignements = $this->input->post('text',true);


                if(!empty($idBannerEnseignements))
                {

                    $idBannerEnseignementsDecrypt = $this->encryption->decrypt($idBannerEnseignements);
                    $imgBannerEnseignementsToDel = $this->banner_enseignement->getImageById('file_banner_enseignement',array('id_banner_enseignement'=>$idBannerEnseignementsDecrypt));

                    if(!empty($imgBannerEnseignementsToDel) and count($imgBannerEnseignementsToDel) == 1)
                    {
                        $realImageBannerEnseignements = $imgBannerEnseignementsToDel[0]['file_banner_enseignement'];
                    }

                    $delBannerEnseignement = $this->banner_enseignement->delete(array('id_banner_enseignement'=>$idBannerEnseignementsDecrypt));


                    if($delBannerEnseignement)
                    {

                        if(isset($realImageBannerEnseignements))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/enseignement/');

                            if(file_exists($path.'/'.$realImageBannerEnseignements))
                            {
                                unlink($path.'/'.$realImageBannerEnseignements);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }



    public function newBannerExhortation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Exhortation');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/exhortation/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerExhortation()
    {

        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/banniere/exhortation/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_exhortation',$error);
                $this->newBannerExhortation();

            }else{

                $fileName = $this->upload->data();
                $data['imgExhortation'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataExhortation = array(

                'file_banner_exhortation'=> $data['imgExhortation'],
                'status_banner_exhortation'=> $data['status'],
                'created_by_banner_exhortation'=>getAdminId()

            );


            $checkImgExhortation = $this->banner_exhortation->checkUser($dataExhortation);


            if(count($checkImgExhortation) == 1)
            {

                $this->session->set_flashdata('error_new_banner_exhortation', 'Ces données existent en base!');
                $this->newBannerExhortation();



            }else{


                $insertBannerExhortation = $this->banner_exhortation->create($dataExhortation);

                if($insertBannerExhortation)
                {

                    $this->session->set_flashdata('success_new_banner_exhortation', 'Enregistrement effectué');
                    $this->newBannerExhortation();

                }else{

                    $this->session->set_flashdata('error_new_banner_exhortation', 'Enregistrement non effectué');
                    $this->newBannerExhortation();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerExhortation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Exhortation');
            $data['allBannerExhortation'] = $this->banner_exhortation->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/exhortation/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerExhortation($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Exhortation');

                $data['editBannerExhortation'] = $this->banner_exhortation->checkDataByKey($id,'id_banner_exhortation');

                if (count($data['editBannerExhortation']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/exhortation/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerExhortation()
    {

        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/exhortation/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerExhortationUpDate',true);
            $oldImage = $this->input->post('oldBannerExhortationUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_exhortation',$error);
                $this->getBannerExhortation();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerExhortation'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerExhortation  =  array(

                'file_banner_exhortation'=> $data['updateBannerExhortation'],
                'status_banner_exhortation'=> $data['status'],
                'modified_at_banner_exhortation'=> date('Y-m-d h:s:i'),
                'modified_by_banner_exhortation'=> getAdminId()

            );


            $upDateBannerExhortation = $this->banner_exhortation->update(array('id_banner_exhortation'=>$id), $dataBannerExhortation);


            if($upDateBannerExhortation)
            {

                if(!empty($data['updateBannerExhortation']) and isset($data['updateBannerExhortation']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_exhortation','Modification effectuée');
                        $this->getBannerExhortation();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_exhortation','Modification échouée');
                $this->getBannerExhortation();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerExhortation()
    {

        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idBannerExhortation = $this->input->post('text',true);


                if(!empty($idBannerExhortation))
                {

                    $idBannerExhortationDecrypt = $this->encryption->decrypt($idBannerExhortation);
                    $imgBannerExhortationToDel = $this->banner_exhortation->getImageById('file_banner_exhortation',array('id_banner_exhortation'=>$idBannerExhortationDecrypt));

                    if(!empty($imgBannerExhortationToDel) and count($imgBannerExhortationToDel) == 1)
                    {
                        $realImageBannerExhortation = $imgBannerExhortationToDel[0]['file_banner_exhortation'];
                    }

                    $delBannerExhortation =  $this->banner_exhortation->delete(array('id_banner_exhortation'=>$idBannerExhortationDecrypt));


                    if($delBannerExhortation)
                    {

                        if(isset($realImageBannerExhortation))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/exhortation/');

                            if(file_exists($path.'/'.$realImageBannerExhortation))
                            {
                                unlink($path.'/'.$realImageBannerExhortation);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    /**
     * management banner for 'Elyon dans mon histoire' page
     */

    public function newBannerElelyon()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','El-elyon dans mon histoire');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/elelyon/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerElelyon()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/banniere/elyon/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_elyon',$error);
                $this->newBannerExhortation();

            }else{

                $fileName = $this->upload->data();
                $data['imgElyon'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataElyon = array(

                'file_banner_elyon'=> $data['imgElyon'],
                'status_banner_elyon'=> $data['status'],
                'created_by_banner_elyon'=>getAdminId()

            );


            $checkImgElyon = $this->banner_elyon->checkUser($dataElyon);


            if(count($checkImgElyon) == 1)
            {

                $this->session->set_flashdata('error_new_banner_elyon', 'Ces données existent en base!');
                $this->newBannerElelyon();



            }else{


                $insertBannerElyon = $this->banner_elyon->create($dataElyon);

                if($insertBannerElyon)
                {

                    $this->session->set_flashdata('success_new_banner_elyon', 'Enregistrement effectué');
                    $this->newBannerElelyon();

                }else{

                    $this->session->set_flashdata('error_new_banner_elyon', 'Enregistrement non effectué');
                    $this->newBannerElelyon();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerElelyon()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','El-elyon dans mon histoire');
            $data['allBannerElyon'] = $this->banner_elyon->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/elelyon/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerElelyon($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','El-elyon dans mon histoire');

                $data['editBannerElyon'] = $this->banner_elyon->checkDataByKey($id,'id_banner_elyon');

                if (count($data['editBannerElyon']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/elelyon/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function upDateBannerElelyon()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/elyon/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerElyonUpDate',true);
            $oldImage = $this->input->post('oldBannerElyonUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_elyon',$error);
                $this->getBannerElelyon();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerElyon'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerElyon  =  array(

                'file_banner_elyon'=> $data['updateBannerElyon'],
                'status_banner_elyon'=> $data['status'],
                'modified_at_banner_elyon'=> date('Y-m-d h:s:i'),
                'modified_by_banner_elyon'=> getAdminId()

            );


            $upDateBannerElyon = $this->banner_elyon->update(array('id_banner_elyon'=>$id), $dataBannerElyon);


            if($upDateBannerElyon)
            {

                if(!empty($data['updateBannerElyon']) and isset($data['updateBannerElyon']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_elyon','Modification effectuée');
                        $this->getBannerElelyon();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_elyon','Modification échouée');
                $this->getBannerElelyon();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerElelyon()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idBannerElyon = $this->input->post('text',true);

                if(!empty($idBannerElyon))
                {
                    $idBannerElyonDecrypt = $this->encryption->decrypt($idBannerElyon);
                    $imgBannerElyonToDel = $this->banner_elyon->getImageById('file_banner_elyon',array('id_banner_elyon'=>$idBannerElyonDecrypt));

                    if(!empty($imgBannerElyonToDel) and count($imgBannerElyonToDel) == 1)
                    {
                        $realImageBannerElyon = $imgBannerElyonToDel[0]['file_banner_elyon'];
                    }

                    $delBannerElyon = $this->banner_elyon->delete(array('id_banner_elyon'=>$idBannerElyonDecrypt));


                    if($delBannerElyon)
                    {

                        if(isset($realImageBannerElyon))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/elyon/');

                            if(file_exists($path.'/'.$realImageBannerElyon))
                            {
                                unlink($path.'/'.$realImageBannerElyon);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }


    /**
     * management banner for formation page
     */

    public function newBannerFormation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Formation');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/formation/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerFormation()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/banniere/formation/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_formation',$error);
                $this->newBannerExhortation();

            }else{

                $fileName = $this->upload->data();
                $data['imgFormation'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataFormation = array(

                'file_banner_formation'=> $data['imgFormation'],
                'status_banner_formation'=> $data['status'],
                'created_by_banner_formation'=>getAdminId()

            );


            $checkImgFormation = $this->banner_formation->checkUser($dataFormation);


            if(count($checkImgFormation) == 1)
            {

                $this->session->set_flashdata('error_new_banner_formation', 'Ces données existent en base!');
                $this->newBannerFormation();



            }else{


                $insertBannerFormation = $this->banner_formation->create($dataFormation);

                if($insertBannerFormation)
                {

                    $this->session->set_flashdata('success_new_banner_formation', 'Enregistrement effectué');
                    $this->newBannerFormation();

                }else{

                    $this->session->set_flashdata('error_new_banner_formation', 'Enregistrement non effectué');
                    $this->newBannerFormation();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerFormation()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Formation');
            $data['allBannerFormation'] = $this->banner_formation->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/formation/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerFormation($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Formation');

                $data['editBannerFormation'] = $this->banner_formation->checkDataByKey($id,'id_banner_formation');

                if (count($data['editBannerFormation']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/formation/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerFormation()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/formation/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerFormationUpDate',true);
            $oldImage = $this->input->post('oldBannerFormationUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_formation',$error);
                $this->getBannerFormation();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerFormation'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerFormation  =  array(

                'file_banner_formation'=> $data['updateBannerFormation'],
                'status_banner_formation'=> $data['status'],
                'modified_at_banner_formation'=> date('Y-m-d h:s:i'),
                'modified_by_banner_formation'=> getAdminId()

            );


            $upDateBannerFormation = $this->banner_formation->update(array('id_banner_formation'=>$id), $dataBannerFormation);


            if($upDateBannerFormation)
            {

                if(!empty($data['updateBannerFormation']) and isset($data['updateBannerFormation']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_formation','Modification effectuée');
                        $this->getBannerFormation();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_formation','Modification échouée');
                $this->getBannerFormation();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerFormation()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {
                $this->input->post('id',true);
                $idBannerFormation = $this->input->post('text',true);

                if(!empty($idBannerFormation))
                {
                    $idBannerFormationDecrypt = $this->encryption->decrypt($idBannerFormation);
                    $imgBannerFormationToDel = $this->banner_formation->getImageById('file_banner_formation',array('id_banner_formation'=>$idBannerFormationDecrypt));

                    if(!empty($imgBannerFormationToDel) and count($imgBannerFormationToDel) == 1)
                    {
                        $realImageBannerFormation = $imgBannerFormationToDel[0]['file_banner_formation'];
                    }

                    $delBannerFormation = $this->banner_formation->delete(array('id_banner_formation'=>$idBannerFormationDecrypt));


                    if($delBannerFormation)
                    {

                        if(isset($realImageBannerFormation))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/formation/');

                            if(file_exists($path.'/'.$realImageBannerFormation))
                            {
                                unlink($path.'/'.$realImageBannerFormation);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }

    /**
     * management banner for 'donate' page
     */

    public function newBannerDonate()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Faire un Don');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/don/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerDonate()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/banniere/don/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_don',$error);
                $this->newBannerDonate();

            }else{

                $fileName = $this->upload->data();
                $data['imgDon'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataDon = array(

                'file_banner_don'=> $data['imgDon'],
                'status_banner_don'=> $data['status'],
                'created_by_banner_don'=>getAdminId()

            );


            $checkImgDon = $this->banner_don->checkUser($dataDon);


            if(count($checkImgDon) == 1)
            {

                $this->session->set_flashdata('error_new_banner_don', 'Ces données existent en base!');
                $this->newBannerDonate();



            }else{


                $insertBannerDon = $this->banner_don->create($dataDon);

                if($insertBannerDon)
                {

                    $this->session->set_flashdata('success_new_banner_don', 'Enregistrement effectué');
                    $this->newBannerDonate();

                }else{

                    $this->session->set_flashdata('error_new_banner_don', 'Enregistrement non effectué');
                    $this->newBannerDonate();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerDonate()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Faire un don');
            $data['allBannerDon'] = $this->banner_don->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/don/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerDonate($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Faire un don');

                $data['editBannerDon'] = $this->banner_don->checkDataByKey($id,'id_banner_don');

                if (count($data['editBannerDon']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/don/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerDon()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/don/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;


            $this->load->library('upload',$config);


            $id = $this->input->post('idBannerDonUpDate',true);
            $oldImage = $this->input->post('oldBannerDonUpDate',true);




            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_don',$error);
                $this->getBannerDonate();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerDon'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerDon  =  array(

                'file_banner_don'=> $data['updateBannerDon'],
                'status_banner_don'=> $data['status'],
                'modified_at_banner_don'=> date('Y-m-d h:s:i'),
                'modified_by_banner_don'=> getAdminId()

            );


            $upDateBannerDon = $this->banner_don->update(array('id_banner_don'=>$id), $dataBannerDon);


            if($upDateBannerDon)
            {

                if(!empty($data['updateBannerDon']) and isset($data['updateBannerDon']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_don','Modification effectuée');
                        $this->getBannerDonate();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_don','Modification échouée');
                $this->getBannerDonate();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerDon()
    {
        if(adminLoggedIn())
        {
            if($this->input->is_ajax_request())
            {
                $this->input->post('id',true);
                $idBannerFormation = $this->input->post('text',true);

                if(!empty($idBannerFormation))
                {
                    $idBannerFormationDecrypt = $this->encryption->decrypt($idBannerFormation);
                    $imgBannerFormationToDel = $this->banner_formation->getImageById('file_banner_formation',array('id_banner_formation'=>$idBannerFormationDecrypt));

                    if(!empty($imgBannerFormationToDel) and count($imgBannerFormationToDel) == 1)
                    {
                        $realImageBannerFormation = $imgBannerFormationToDel[0]['file_banner_formation'];
                    }

                    $delBannerFormation = $this->banner_formation->delete(array('id_banner_formation'=>$idBannerFormationDecrypt));


                    if($delBannerFormation)
                    {

                        if(isset($realImageBannerFormation))
                        {
                            $path = realpath(APPPATH.'../assets/banniere/formation/');

                            if(file_exists($path.'/'.$realImageBannerFormation))
                            {
                                unlink($path.'/'.$realImageBannerFormation);
                            }

                        }

                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }


    }


    /**
     *
     * management banner Echange Ecoute
     */

    public function newBannerEchangeEcoute()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Echange - Ecoute');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/ecoute/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerEchangeEcoute()
    {

        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/banniere/ecoute/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_ecoute',$error);
                $this->newBannerEchangeEcoute();

            }else{

                $fileName = $this->upload->data();
                $data['imgEcoute'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataEcoute = array(

                'file_banner_ecoute'=> $data['imgEcoute'],
                'status_banner_ecoute'=> $data['status'],
                'created_by_banner_ecoute'=>getAdminId()

            );


            $checkImgEcoute = $this->banner_ecoute->checkUser($dataEcoute);


            if(count($checkImgEcoute) == 1)
            {

                $this->session->set_flashdata('error_new_banner_ecoute', 'Ces données existent en base!');
                $this->newBannerEchangeEcoute();



            }else{


                $insertBannerEcoute = $this->banner_ecoute->create($dataEcoute);

                if($insertBannerEcoute)
                {

                    $this->session->set_flashdata('success_new_banner_ecoute', 'Enregistrement effectué');
                    $this->newBannerEchangeEcoute();

                }else{

                    $this->session->set_flashdata('error_new_banner_ecoute', 'Enregistrement non effectué');
                    $this->newBannerEchangeEcoute();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function getBannerEchangeEcoute()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Echange - Ecoute');
            $data['allBannerEcoute'] = $this->banner_ecoute->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/ecoute/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerEchangeEcoute($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Echange - Ecoute');

                $data['editBannerEcoute'] = $this->banner_ecoute->checkDataByKey($id,'id_banner_ecoute');

                if (count($data['editBannerEcoute']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/ecoute/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerEchangeEcoute()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/ecoute/');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerEcouteUpDate',true);
            $oldImage = $this->input->post('oldBannerEcouteUpDate',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_ecoute',$error);
                $this->getBannerEchangeEcoute();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerEcoute'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerEcoute  =  array(

                'file_banner_ecoute'=> $data['updateBannerEcoute'],
                'status_banner_ecoute'=> $data['status'],
                'modified_at_banner_ecoute'=> date('Y-m-d h:s:i'),
                'modified_by_banner_ecoute'=> getAdminId()

            );


            $upDateBannerEcoute = $this->banner_ecoute->update(array('id_banner_ecoute'=>$id), $dataBannerEcoute);


            if($upDateBannerEcoute)
            {

                if(!empty($data['updateBannerEcoute']) and isset($data['updateBannerEcoute']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_ecoute','Modification effectuée');
                        $this->getBannerEchangeEcoute();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_ecoute','Modification échouée');
                $this->getBannerEchangeEcoute();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerEchangeEcoute()
    {

    }


    /**
     * management Banner Exhange Forum
     */


    public  function newBannerEchangeForum()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Echange - Forum');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/echange_forum/newBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerEchangeForum()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/banniere/echange_forum/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_echange_forum',$error);
                $this->newBannerEchangeForum();

            }else{

                $fileName = $this->upload->data();
                $data['imgEchangeForum'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataEchangeForum = array(

                'file_banner_echange_forum'=> $data['imgEchangeForum'],
                'status_banner_echange_forum'=> $data['status'],
                'created_by_banner_echange_forum'=>getAdminId()

            );


            $checkImgEchangeForum = $this->banner_echange_forum->checkUser($dataEchangeForum);


            if(count($checkImgEchangeForum) == 1)
            {

                $this->session->set_flashdata('error_new_banner_echange_forum', 'Ces données existent en base!');
                $this->newBannerEchangeForum();



            }else{


                $insertBannerEchangeForum = $this->banner_echange_forum->create($dataEchangeForum);

                if($insertBannerEchangeForum)
                {

                    $this->session->set_flashdata('success_new_banner_echange_forum', 'Enregistrement effectué');
                    $this->newBannerEchangeForum();

                }else{

                    $this->session->set_flashdata('error_new_banner_echange_forum', 'Enregistrement non effectué');
                    $this->newBannerEchangeForum();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerEchangeForum()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Echange - Forum');
            $data['allBannerEchangeForum'] = $this->banner_echange_forum->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/echange_forum/getBanner',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerEchangeForum($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Echange - Forum');

                $data['editBannerEchangeForum'] = $this->banner_echange_forum->checkDataByKey($id,'id_banner_echange_forum');

                if (count($data['editBannerEchangeForum']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/echange_forum/editBanner',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerEchangeForum()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/echange_forum/');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerEchangeForumUpDate',true);
            $oldImage = $this->input->post('oldBannerEchangeForumUpDate',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_echange_forum',$error);
                $this->getBannerEchangeForum();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerEchangeForum'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerEchangeForum =  array(

                'file_banner_echange_forum'=> $data['updateBannerEchangeForum'],
                'status_banner_echange_forum'=> $data['status'],
                'modified_at_banner_echange_forum'=> date('Y-m-d h:s:i'),
                'modified_by_banner_echange_forum'=> getAdminId()

            );


            $upDateBannerEchangeForum = $this->banner_echange_forum->update(array('id_banner_echange_forum'=>$id), $dataBannerEchangeForum);


            if($upDateBannerEchangeForum)
            {

                if(!empty($data['updateBannerEchangeForum']) and isset($data['updateBannerEchangeForum']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_echange_forum','Modification effectuée');
                        $this->getBannerEchangeForum();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_echange_forum','Modification échouée');
                $this->getBannerEchangeForum();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerEchangeForum()
    {

    }


    /**
     * management Banner Jeunesse (priere)
     */

    public function newBannerJeunessePetitsPrieres()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','prière');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_petits/priere/newPriere',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerJeunessePetitsPrieres()
    {
        if (adminLoggedIn()) {

            $data = array();

              $path = realpath(APPPATH.'../assets/banniere/jeunesse/petit/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_jeunesse_petits_priere',$error);
                $this->newBannerJeunessePetitsPrieres();

            }else{

                $fileName = $this->upload->data();
                $data['imgJeunessePetitsPriere'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }



            $dataJeunessePetitsPriere = array(

                'file_banner_jeunesse_petits_priere'=> $data['imgJeunessePetitsPriere'],
                'status_banner_jeunesse_petits_priere'=> $data['status'],
                'created_at_banner_jeunesse_petits_priere'=>getAdminId()

            );

         // var_dump($dataJeunessePetitsPriere); die();


            $checkImgJeunessePetitsPriere = $this->banner_jeunesse_petits_priere->checkUser($dataJeunessePetitsPriere);


            if(count($checkImgJeunessePetitsPriere) == 1)
            {

                $this->session->set_flashdata('error_new_banner_jeunesse_petits_priere', 'Ces données existent en base!');
                $this->newBannerJeunessePetitsPrieres();



            }else{


                $insertBannerJeunessePetitsPriere = $this->banner_jeunesse_petits_priere->create($dataJeunessePetitsPriere);

               // var_dump($insertBannerJeunessePetitsPriere); die();

                if($insertBannerJeunessePetitsPriere)
                {

                    $this->session->set_flashdata('success_new_banner_jeunesse_petits_priere', 'Enregistrement effectué');
                    $this->newBannerJeunessePetitsPrieres();

                }else{

                    $this->session->set_flashdata('error_new_banner_jeunesse_petits_priere', 'Enregistrement non effectué');
                    $this->newBannerJeunessePetitsPrieres();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerJeunessePetitsPrieres()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','prière');
            $data['allBannerJeunessePetitsPriere'] = $this->banner_jeunesse_petits_priere->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_petits/priere/getPriere',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerJeunessePetitsPrieres($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','prière');

                $data['editBannerJeunessePetit'] = $this->banner_jeunesse_petits_priere->checkDataByKey($id,'id_banner_jeunesse_petits_priere');

                if (count($data['editBannerJeunessePetit']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/jeunesse_petits/priere/editPriere',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerJeunessePetitsPrieres()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/petit');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerJeunessePetitsPrieres',true);
            $oldImage = $this->input->post('oldBannerJeunessePetitsPrieres',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_jeunesse_petits_priere',$error);
                $this->getBannerJeunessePetitsPrieres();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerJeunessePetitsPriere'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerJeunessePetitsPriere =  array(

                'file_banner_jeunesse_petits_priere'=> $data['updateBannerJeunessePetitsPriere'],
                'status_banner_jeunesse_petits_priere'=> $data['status'],
                'modified_at_banner_jeunesse_petits_priere'=> date('Y-m-d h:s:i'),
                'modified_by_banner_jeunesse_petits_priere'=> getAdminId()

            );

            //var_dump();


            $upDateBannerJeunessePetitsPriere = $this->banner_jeunesse_petits_priere->update(array('id_banner_jeunesse_petits_priere'=>$id), $dataBannerJeunessePetitsPriere);


            if($upDateBannerJeunessePetitsPriere)
            {

                if(!empty($data['updateBannerJeunessePetitsPriere']) and isset($data['updateBannerJeunessePetitsPriere']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_jeunesse_petits_priere','Modification effectuée');
                        $this->getBannerJeunessePetitsPrieres();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_jeunesse_petits_priere','Modification échouée');
                $this->getBannerJeunessePetitsPrieres();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerJeunessePetitsPrieres()
    {

    }

    /**
     * management banner Juenesse (livre)
     */

    public function newBannerJeunessePetitsLivres()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','Livres');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_petits/livre/newLivre',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerJeunessePetitsLivres()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/petit/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_jeunesse_petits_livre',$error);
                $this->newBannerJeunessePetitsLivres();

            }else{

                $fileName = $this->upload->data();
                $data['imgJeunessePetitsLivre'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }



            $dataJeunessePetitsLivre = array(

                'file_banner_jeunesse_petits_livre'=> $data['imgJeunessePetitsLivre'],
                'status_banner_jeunesse_petits_livre'=> $data['status'],
                'created_at_banner_jeunesse_petits_livre'=>getAdminId()

            );

            // var_dump($dataJeunessePetitsLivre); die();


            $checkImgJeunessePetitsLivre = $this->banner_jeunesse_petits_livre->checkUser($dataJeunessePetitsLivre);


            if(count($checkImgJeunessePetitsLivre) == 1)
            {

                $this->session->set_flashdata('error_new_banner_jeunesse_petits_livre', 'Ces données existent en base!');
                $this->newBannerJeunessePetitsLivres();



            }else{


                $insertBannerJeunessePetitsLivre = $this->banner_jeunesse_petits_livre->create($dataJeunessePetitsLivre);

                // var_dump($insertBannerJeunessePetitsLivre); die();

                if($insertBannerJeunessePetitsLivre)
                {

                    $this->session->set_flashdata('success_new_banner_jeunesse_petits_livre', 'Enregistrement effectué');
                    $this->newBannerJeunessePetitsLivres();

                }else{

                    $this->session->set_flashdata('error_new_banner_jeunesse_petits_livre', 'Enregistrement non effectué');
                    $this->newBannerJeunessePetitsLivres();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerJeunessePetitsLivres()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','Livres');
            $data['allBannerJeunessePetitsLivre'] = $this->banner_jeunesse_petits_livre->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_petits/livre/getLivre',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerJeunessePetitsLivres($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','Livres');

                $data['editBannerJeunessePetitLivre'] = $this->banner_jeunesse_petits_livre->checkDataByKey($id,'id_banner_jeunesse_petits_livre');

                if (count($data['editBannerJeunessePetitLivre']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/jeunesse_petits/livre/editLivre',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerJeunessePetitsLivres()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/petit');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerJeunessePetitsLivres',true);
            $oldImage = $this->input->post('oldBannerJeunessePetitsLivres',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_jeunesse_petits_livres',$error);
                $this->getBannerJeunessePetitsLivres();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerJeunessePetitsLivres'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerJeunessePetitsLivres =  array(

                'file_banner_jeunesse_petits_livre'=> $data['updateBannerJeunessePetitsLivres'],
                'status_banner_jeunesse_petits_livre'=> $data['status'],
                'modified_at_banner_jeunesse_petits_livre'=> date('Y-m-d h:s:i'),
                'modified_by_banner_jeunesse_petits_livre'=> getAdminId()

            );

            //var_dump();


            $upDateBannerJeunessePetitsLivres = $this->banner_jeunesse_petits_livre->update(array('id_banner_jeunesse_petits_livre'=>$id), $dataBannerJeunessePetitsLivres);


            if($upDateBannerJeunessePetitsLivres)
            {

                if(!empty($data['updateBannerJeunessePetitsLivres']) and isset($data['updateBannerJeunessePetitsLivres']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_jeunesse_petits_livres','Modification effectuée');
                        $this->getBannerJeunessePetitsLivres();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_jeunesse_petits_livres','Modification échouée');
                $this->getBannerJeunessePetitsLivres();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerJeunessePetitsLivres()
    {

    }

    /**
     * management banner jeunesse (Musique)
     */

    public function newBannerJeunessePetitsMusiques()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','Musique');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_petits/musique/newMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerJeunessePetitsMusiques()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/petit/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_jeunesse_petits_musique',$error);
                $this->newBannerJeunessePetitsMusiques();

            }else{

                $fileName = $this->upload->data();
                $data['imgJeunessePetitsMusique'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataJeunessePetitsMusique = array(

                'file_banner_jeunesse_petits_musique'=> $data['imgJeunessePetitsMusique'],
                'status_banner_jeunesse_petits_musique'=> $data['status'],
                'created_by_banner_jeunesse_petits_musique'=>getAdminId()

            );

            // var_dump($dataJeunessePetitsMusique); die();

            $checkImgJeunessePetitsMusique = $this->banner_jeunesse_petits_musique->checkUser($dataJeunessePetitsMusique);


            if(count($checkImgJeunessePetitsMusique) == 1)
            {

                $this->session->set_flashdata('error_new_banner_jeunesse_petits_musique', 'Ces données existent en base!');
                $this->newBannerJeunessePetitsMusiques();



            }else{


                $insertBannerJeunessePetitsMusique = $this->banner_jeunesse_petits_musique->create($dataJeunessePetitsMusique);

                // var_dump($insertBannerJeunessePetitsMusique); die();

                if($insertBannerJeunessePetitsMusique)
                {

                    $this->session->set_flashdata('success_new_banner_jeunesse_petits_musique', 'Enregistrement effectué');
                    $this->newBannerJeunessePetitsMusiques();

                }else{

                    $this->session->set_flashdata('error_new_banner_jeunesse_petits_musique', 'Enregistrement non effectué');
                    $this->newBannerJeunessePetitsMusiques();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerJeunessePetitsMusiques()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','Musiques');
            $data['allBannerJeunessePetitsMusique'] = $this->banner_jeunesse_petits_musique->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_petits/musique/getMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerJeunessePetitsMusiques($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','jeunesse petits prophètes','Musique');

                $data['editBannerJeunessePetitMusique'] = $this->banner_jeunesse_petits_musique->checkDataByKey($id,'id_banner_jeunesse_petits_musique');

                if (count($data['editBannerJeunessePetitMusique']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/jeunesse_petits/musique/editMusique',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function updateBannerJeunessePetitsMusiques()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/petit');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerJeunessePetitsMusique',true);
            $oldImage = $this->input->post('oldBannerJeunessePetitsMusique',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_jeunesse_petits_musique',$error);
                $this->getBannerJeunessePetitsMusiques();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerJeunessePetitsMusique'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerJeunessePetitsMusique =  array(

                'file_banner_jeunesse_petits_musique'=> $data['updateBannerJeunessePetitsMusique'],
                'status_banner_jeunesse_petits_musique'=> $data['status'],
                'modified_at_banner_jeunesse_petits_musique'=> date('Y-m-d h:s:i'),
                'modified_by_banner_jeunesse_petits_musique'=> getAdminId()

            );

            //var_dump();


            $upDateBannerJeunessePetitsMusique = $this->banner_jeunesse_petits_musique->update(array('id_banner_jeunesse_petits_musique'=>$id), $dataBannerJeunessePetitsMusique);


            if($upDateBannerJeunessePetitsMusique)
            {

                if(!empty($data['updateBannerJeunessePetitsMusique']) and isset($data['updateBannerJeunessePetitsMusique']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_jeunesse_petits_musique','Modification effectuée');
                        $this->getBannerJeunessePetitsMusiques();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_jeunesse_petits_musique','Modification échouée');
                $this->getBannerJeunessePetitsMusiques();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerJeunessePetitsMusiques()
    {

    }


    /**
     * management banner jeunesse grand (priere)
     *
     */

    public function newBannerJeunesseGrandsPrieres()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','jeunesse grands prophètes','prière');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_grands/priere/newPriere',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerJeunesseGrandsPrieres()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/grand/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_jeunesse_grands_priere',$error);
                $this->newBannerJeunesseGrandsPrieres();

            }else{

                $fileName = $this->upload->data();
                $data['imgJeunesseGrandPriere'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }



            $dataJeunesseGrandPriere = array(

                'file_banner_jeunesse_grand_priere'=> $data['imgJeunesseGrandPriere'],
                'status_banner_jeunesse_grand_priere'=> $data['status'],
                'created_by_banner_jeunesse_grand_priere'=>getAdminId()

            );

            // var_dump($dataJeunessePetitsPriere); die();


            $checkImgJeunesseGrandsPriere = $this->banner_jeunesse_grands_priere->checkUser($dataJeunesseGrandPriere);


            if(count($checkImgJeunesseGrandsPriere) == 1)
            {

                $this->session->set_flashdata('error_new_banner_jeunesse_grands_priere', 'Ces données existent en base!');
                $this->newBannerJeunesseGrandsPrieres();



            }else{


                $insertBannerJeunesseGrandPriere = $this->banner_jeunesse_grands_priere->create($dataJeunesseGrandPriere);

                // var_dump($insertBannerJeunesseGrandPriere); die();

                if($insertBannerJeunesseGrandPriere)
                {

                    $this->session->set_flashdata('success_new_banner_jeunesse_grands_priere', 'Enregistrement effectué');
                    $this->newBannerJeunesseGrandsPrieres();

                }else{

                    $this->session->set_flashdata('error_new_banner_jeunesse_grands_priere', 'Enregistrement non effectué');
                    $this->newBannerJeunesseGrandsPrieres();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerJeunesseGrandsPrieres()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','jeunesse grands prophètes','prière');
            $data['allBannerJeunesseGrandsPriere'] = $this->banner_jeunesse_grands_priere->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_grands/priere/getPriere',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerJeunesseGrandsPrieres($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','jeunesse grands prophètes','prière');

                $data['editBannerJeunesseGrandPriere'] = $this->banner_jeunesse_grands_priere->checkDataByKey($id,'id_banner_jeunesse_grand_priere');

                if (count($data['editBannerJeunesseGrandPriere']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/jeunesse_grands/priere/editPriere',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerJeunesseGrandsPrieres()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/grand');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerJeunesseGrandPrieres',true);
            $oldImage = $this->input->post('oldBannerJeunesseGrandPrieres',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_jeunesse_grand_priere',$error);
                $this->getBannerJeunesseGrandsPrieres();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerJeunesseGrandPriere'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerJeunesseGrandPriere =  array(

                'file_banner_jeunesse_grand_priere'=> $data['updateBannerJeunesseGrandPriere'],
                'status_banner_jeunesse_grand_priere'=> $data['status'],
                'modified_at_banner_jeunesse_grand_priere'=> date('Y-m-d h:s:i'),
                'modified_by_banner_jeunesse_grand_priere'=> getAdminId()

            );


            $upDateBannerJeunesseGrandPriere = $this->banner_jeunesse_grands_priere->update(array('id_banner_jeunesse_grand_priere'=>$id), $dataBannerJeunesseGrandPriere);


            if($upDateBannerJeunesseGrandPriere)
            {

                if(!empty($data['updateBannerJeunesseGrandPriere']) and isset($data['updateBannerJeunesseGrandPriere']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_jeunesse_grand_priere','Modification effectuée');
                        $this->getBannerJeunesseGrandsPrieres();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_jeunesse_grand_priere','Modification échouée');
                $this->getBannerJeunesseGrandsPrieres();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerJeunesseGrandsPrieres()
    {

    }


    /**
     * management banner jeunesse grand (livre)
     */

    public function newBannerJeunesseGrandsLivres()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','jeunesse grands prophètes','Livres');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_grands/livre/newLivre',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerJeunesseGrandsLivres()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/grand/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_jeunesse_grand_livre',$error);
                $this->newBannerJeunesseGrandsLivres();

            }else{

                $fileName = $this->upload->data();
                $data['imgJeunesseGrandLivre'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }



            $dataJeunesseGrandLivre = array(

                'file_banner_jeunesse_grand_livre'=> $data['imgJeunesseGrandLivre'],
                'status_banner_jeunesse_grand_livre'=> $data['status'],
                'created_at_banner_jeunesse_grand_livre'=>getAdminId()

            );

            // var_dump($dataJeunesseGrandLivre); die();


            $checkImgJeunesseGrandLivre = $this->banner_jeunesse_grands_livre->checkUser($dataJeunesseGrandLivre);


            if(count($checkImgJeunesseGrandLivre) == 1)
            {

                $this->session->set_flashdata('error_new_banner_jeunesse_grand_livre', 'Ces données existent en base!');
                $this->newBannerJeunesseGrandsLivres();



            }else{


                $insertBannerJeunesseGrandLivre = $this->banner_jeunesse_grands_livre->create($dataJeunesseGrandLivre);

                // var_dump($insertBannerJeunesseGrandLivre); die();

                if($insertBannerJeunesseGrandLivre)
                {

                    $this->session->set_flashdata('success_new_banner_jeunesse_grand_livre', 'Enregistrement effectué');
                    $this->newBannerJeunesseGrandsLivres();

                }else{

                    $this->session->set_flashdata('error_new_banner_jeunesse_grand_livre', 'Enregistrement non effectué');
                    $this->newBannerJeunesseGrandsLivres();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerJeunesseGrandsLivres()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','jeunesse grand prophètes','Livres');
            $data['allBannerJeunesseGrandLivre'] = $this->banner_jeunesse_grands_livre->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_grands/livre/getLivre',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerJeunesseGrandsLivres($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','jeunesse grand prophètes','Livres');

                $data['editBannerJeunesseGrandLivre'] = $this->banner_jeunesse_grands_livre->checkDataByKey($id,'id_banner_jeunesse_grand_livre');

                if (count($data['editBannerJeunesseGrandLivre']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/jeunesse_grands/livre/editLivre',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerJeunesseGrandsLivres()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/grand');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerJeunesseGrandLivres',true);
            $oldImage = $this->input->post('oldBannerJeunesseGrandLivres',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_jeunesse_grand_livres',$error);
                $this->getBannerJeunesseGrandsLivres();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerJeunesseGrandMusique'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerJeunesseGrandMusique =  array(

                'file_banner_jeunesse_grand_livre'=> $data['updateBannerJeunesseGrandMusique'],
                'status_banner_jeunesse_grand_livre'=> $data['status'],
                'modified_at_banner_jeunesse_grand_livre'=> date('Y-m-d h:s:i'),
                'modified_by_banner_jeunesse_grand_livre'=> getAdminId()

            );

          //  var_dump($dataBannerJeunesseGrandMusique); die();



            $upDateBannerJeunesseGrandMusique = $this->banner_jeunesse_grands_livre->update(array('id_banner_jeunesse_grand_livre'=>$id), $dataBannerJeunesseGrandMusique);


            if($upDateBannerJeunesseGrandMusique)
            {

                if(!empty($data['updateBannerJeunesseGrandMusique']) and isset($data['updateBannerJeunesseGrandMusique']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_jeunesse_grand_livres','Modification effectuée');
                        $this->getBannerJeunesseGrandsLivres();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_jeunesse_grand_livres','Modification échouée');
                $this->getBannerJeunesseGrandsLivres();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerJeunesseGrandsLivres()
    {

    }

    /**
     * management banner jeunesse grand (musique)
     *
     */


    public function newBannerJeunesseGrandsMusiques()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','jeunesse grands prophètes','Musique');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_grands/musique/newMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerJeunesseGrandsMusiques()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/grand/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_jeunesse_grand_musique',$error);
                $this->newBannerJeunesseGrandsMusiques();

            }else{

                $fileName = $this->upload->data();
                $data['imgJeunesseGrandMusique'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataJeunesseGrandMusique = array(

                'file_banner_jeunesse_grand_musique'=> $data['imgJeunesseGrandMusique'],
                'status_banner_jeunesse_grand_musique'=> $data['status'],
                'created_by_banner_jeunesse_grand_musique'=>getAdminId()

            );

            // var_dump($dataJeunessePetitsMusique); die();

            $checkImgJeunesseGrandMusique = $this->banner_jeunesse_grands_musique->checkUser($dataJeunesseGrandMusique);


            if(count($checkImgJeunesseGrandMusique) == 1)
            {

                $this->session->set_flashdata('error_new_banner_jeunesse_grand_musique', 'Ces données existent en base!');
                $this->newBannerJeunesseGrandsMusiques();



            }else{


                $insertBannerJeunesseGrandMusique = $this->banner_jeunesse_grands_musique->create($dataJeunesseGrandMusique);

                // var_dump($insertBannerJeunesseGrandMusique); die();

                if($insertBannerJeunesseGrandMusique)
                {

                    $this->session->set_flashdata('success_new_banner_jeunesse_grand_musique', 'Enregistrement effectué');
                    $this->newBannerJeunesseGrandsMusiques();

                }else{

                    $this->session->set_flashdata('error_new_banner_jeunesse_grand_musique', 'Enregistrement non effectué');
                    $this->newBannerJeunesseGrandsMusiques();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerJeunesseGrandsMusiques()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','jeunesse grands prophètes','Musiques');
            $data['allBannerJeunesseGrandMusique'] = $this->banner_jeunesse_grands_musique->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/jeunesse_grands/musique/getMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerJeunesseGrandsMusiques($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','jeunesse grand prophètes','Musique');

                $data['editBannerJeunesseGrandMusique'] = $this->banner_jeunesse_grands_musique->checkDataByKey($id,'id_banner_jeunesse_grand_musique');

                if (count($data['editBannerJeunesseGrandMusique']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/jeunesse_grands/musique/editMusique',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerJeunesseGrandsMusiques()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/jeunesse/grand');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerJeunesseGrandMusique',true);
            $oldImage = $this->input->post('oldBannerJeunesseGrandMusique',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_jeunesse_grand_musique',$error);
                $this->getBannerJeunesseGrandsMusiques();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerJeunesseGrandMusique'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerJeunesseGrandMusique =  array(

                'file_banner_jeunesse_grand_musique'=> $data['updateBannerJeunesseGrandMusique'],
                'status_banner_jeunesse_grand_musique'=> $data['status'],
                'modified_at_banner_jeunesse_grand_musique'=> date('Y-m-d h:s:i'),
                'modified_by_banner_jeunesse_grand_musique '=> getAdminId()

            );


            $upDateBannerJeunesseGrandMusique = $this->banner_jeunesse_grands_musique->update(array('id_banner_jeunesse_grand_musique'=>$id), $dataBannerJeunesseGrandMusique);


            if($upDateBannerJeunesseGrandMusique)
            {

                if(!empty($data['updateBannerJeunesseGrandMusique']) and isset($data['updateBannerJeunesseGrandMusique']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_jeunesse_grand_musique','Modification effectuée');
                        $this->getBannerJeunesseGrandsMusiques();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_jeunesse_grand_musique','Modification échouée');
                $this->getBannerJeunesseGrandsMusiques();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function daleteBannerJeunesseGrandsMusiques()
    {

    }


    /**
     * management banner loisirs (musique)
     */


    public function newBannerLoisirMusique()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','loisirs','Musique');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/loisirs/musique/newMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerLoisirMusique()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/loisir/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_loisirs_musique',$error);
                $this->newBannerLoisirMusique();

            }else{

                $fileName = $this->upload->data();
                $data['imgBannerLoisirMusique'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerLoisirMusique = array(

                'file_banner_loisir_musique'=> $data['imgBannerLoisirMusique'],
                'status_banner_loisir_musique'=> $data['status'],
                'created_by_banner_loisir_musique'=>getAdminId()

            );

            // var_dump($dataJeunessePetitsMusique); die();

            $checkImgBannerLoisirMusique = $this->banner_loisir_musique->checkUser($dataBannerLoisirMusique);


            if(count($checkImgBannerLoisirMusique) == 1)
            {

                $this->session->set_flashdata('error_new_banner_loisirs_musique', 'Ces données existent en base!');
                $this->newBannerLoisirMusique();



            }else{


                $insertBannerLoisirMusique = $this->banner_loisir_musique->create($dataBannerLoisirMusique);


                if($insertBannerLoisirMusique)
                {

                    $this->session->set_flashdata('success_new_banner_loisirs_musique', 'Enregistrement effectué');
                    $this->newBannerLoisirMusique();

                }else{

                    $this->session->set_flashdata('error_new_banner_loisirs_musique', 'Enregistrement non effectué');
                    $this->newBannerLoisirMusique();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerLoisirMusique()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','loisirs','Musique');
            $data['allBannerLoisirMusique'] = $this->banner_loisir_musique->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/loisirs/musique/getMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerLoisirMusique($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','loisirs','Musique');

                $data['editBannerLoisirMusique'] = $this->banner_loisir_musique->checkDataByKey($id,'id_banner_loisir_musique ');

                if (count($data['editBannerLoisirMusique']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/loisirs/musique/editMusique',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerLoisirMusique()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/loisir');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerLoisirMusique',true);
            $oldImage = $this->input->post('oldBannerLoisirMusique',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_loisir_musique',$error);
                $this->getBannerLoisirMusique();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerLoisirMusique'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerLoisirMusique =  array(

                'file_banner_loisir_musique'=> $data['updateBannerLoisirMusique'],
                'status_banner_loisir_musique'=> $data['status'],
                'modified_at_banner_loisir_musique'=> date('Y-m-d h:s:i'),
                'modified_by_banner_loisir_musique'=> getAdminId()

            );


            $upDateBannerLoisirMusique = $this->banner_loisir_musique->update(array('id_banner_loisir_musique'=>$id), $dataBannerLoisirMusique);


            if($upDateBannerLoisirMusique)
            {

                if(!empty($data['updateBannerLoisirMusique']) and isset($data['updateBannerLoisirMusique']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_loisir_musique','Modification effectuée');
                        $this->getBannerLoisirMusique();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_loisir_musique','Modification échouée');
                $this->getBannerLoisirMusique();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerLoisirMusique()
    {

    }


    /**
     * management banner loisirs (humour   banner_loisir_humour
     */

    public function newBannerLoisirHumour()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','loisirs','humour');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/loisirs/humour/newHumour',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerLoisirHumour()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/loisir/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_loisirs_humour',$error);
                $this->newBannerLoisirHumour();

            }else{

                $fileName = $this->upload->data();
                $data['imgBannerLoisirHumour'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerLoisirHumour = array(

                'file_banner_loisir_humour'=> $data['imgBannerLoisirHumour'],
                'status_banner_loisir_humour'=> $data['status'],
                'created_by_banner_loisir_humour'=>getAdminId()

            );

            // var_dump($dataJeunessePetitsHumour); die();

            $checkImgBannerLoisirHumour = $this->banner_loisir_humour->checkUser($dataBannerLoisirHumour);


            if(count($checkImgBannerLoisirHumour) == 1)
            {

                $this->session->set_flashdata('error_new_banner_loisirs_humour', 'Ces données existent en base!');
                $this->newBannerLoisirHumour();



            }else{


                $insertBannerLoisirHumour = $this->banner_loisir_humour->create($dataBannerLoisirHumour);


                if($insertBannerLoisirHumour)
                {

                    $this->session->set_flashdata('success_new_banner_loisirs_humour', 'Enregistrement effectué');
                    $this->newBannerLoisirHumour();

                }else{

                    $this->session->set_flashdata('error_new_banner_loisirs_humour', 'Enregistrement non effectué');
                    $this->newBannerLoisirHumour();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerLoisirHumour()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','loisirs','humour');
            $data['allBannerLoisirHumour'] = $this->banner_loisir_humour->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/loisirs/humour/getHumour',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerLoisirHumour($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','loisirs','Humour');

                $data['editBannerLoisirHumour'] = $this->banner_loisir_humour->checkDataByKey($id,'id_banner_loisir_humour');

                if (count($data['editBannerLoisirHumour']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/loisirs/humour/editHumour',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerLoisirHumour()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/loisir');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerLoisirHumour',true);
            $oldImage = $this->input->post('oldBannerLoisirHumour',true);


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_loisir_humour',$error);
                $this->getBannerLoisirHumour();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerLoisirHumour'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerLoisirHumour =  array(

                'file_banner_loisir_humour'=> $data['updateBannerLoisirHumour'],
                'status_banner_loisir_humour'=> $data['status'],
                'modified_at_banner_loisir_humour'=> date('Y-m-d h:s:i'),
                'modified_by_banner_loisir_humour'=> getAdminId()

            );

           // var_dump($dataBannerLoisirHumour); die();


            $upDateBannerLoisirHumour = $this->banner_loisir_humour->update(array('id_banner_loisir_humour'=>$id), $dataBannerLoisirHumour);


            if($upDateBannerLoisirHumour)
            {

                if(!empty($data['updateBannerLoisirHumour']) and isset($data['updateBannerLoisirHumour']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_loisir_humour','Modification effectuée');
                        $this->getBannerLoisirHumour();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_loisir_humour','Modification échouée');
                $this->getBannerLoisirHumour();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerLoisirHumour()
    {

    }


    /**
     * management banner loisirs (bien - être   detabase = banner_loisir_bien_etre
     *
     */


    public function newBannerLoisirBienEtre()
    {
        if (adminLoggedIn()) {

        $data['titre'] = 'Ajouter une bannière';
        $data['menu'] = array('Gestion des Bannières','loisirs','bien-être');
        $data['status'] = $this->status->read();

        $this->load->view('backoffice/admin/header/header');
        $this->load->view('backoffice/admin/header/css');
        $this->load->view('backoffice/admin/header/navTop');
        $this->load->view('backoffice/admin/header/navLeft');
        $this->load->view('backoffice/banniere/loisirs/bien_etre/newBienEtre',$data);
        $this->load->view('backoffice/admin/header/footer');
        $this->load->view('backoffice/admin/header/htmlClose');

    } else {

        $this->session->set_flashdata('error', 'Connectez vous svp!');
        $this->login();

    }
    }

    public function addBannerLoisirBienEtre()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/loisir/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_loisirs_bienetre',$error);
                $this->newBannerLoisirBienEtre();

            }else{

                $fileName = $this->upload->data();
                $data['imgBannerLoisirBienEtre'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerLoisirBienEtre = array(

                'file_banner_loisir_bien_etre'=> $data['imgBannerLoisirBienEtre'],
                'status_banner_loisir_bien_etre'=> $data['status'],
                'created_by_banner_loisir_bien_etre'=>getAdminId()

            );

            // var_dump($dataJeunessePetitsHumour); die();

            $checkImgBannerLoisirBienEtrer = $this->banner_loisir_bien_etre->checkUser($dataBannerLoisirBienEtre);


            if(count($checkImgBannerLoisirBienEtrer) == 1)
            {

                $this->session->set_flashdata('error_new_banner_loisirs_bienetre', 'Ces données existent en base!');
                $this->newBannerLoisirBienEtre();



            }else{


                $insertBannerLoisirHumour = $this->banner_loisir_bien_etre->create($dataBannerLoisirBienEtre);


                if($insertBannerLoisirHumour)
                {

                    $this->session->set_flashdata('success_new_banner_loisirs_bienetre', 'Enregistrement effectué');
                    $this->newBannerLoisirBienEtre();

                }else{

                    $this->session->set_flashdata('error_new_banner_loisirs_bienetre', 'Enregistrement non effectué');
                    $this->newBannerLoisirBienEtre();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerLoisirBienEtre()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','loisirs','bien - être');
            $data['allBannerLoisirBienEtre'] = $this->banner_loisir_bien_etre->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/loisirs/bien_etre/getBienEtre',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerLoisirBienEtre($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','loisirs','bien - être');

                $data['editBannerLoisirBienEtre'] = $this->banner_loisir_bien_etre->checkDataByKey($id,'id_banner_loisir_bien_etre');

                if (count($data['editBannerLoisirBienEtre']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/loisirs/bien_etre/editBienEtre',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function updateBannerLoisirBienEtre()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/loisir');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerLoisirBienEtre',true);
            $oldImage = $this->input->post('oldBannerLoisirBienEtre',true);


           // var_dump($oldImage); die();


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_loisir_bien_etre',$error);
                $this->getBannerLoisirBienEtre();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerLoisirBienEtre'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerLoisirBienEtre =  array(

                'file_banner_loisir_bien_etre'=> $data['updateBannerLoisirBienEtre'],
                'status_banner_loisir_bien_etre'=> $data['status'],
                'modified_at_banner_loisir_bien_etre'=> date('Y-m-d h:s:i'),
                'modified_by_banner_loisir_bien_etre'=> getAdminId()

            );

             //var_dump($dataBannerLoisirBienEtre); die();


            $upDateBannerLoisirBienEtre = $this->banner_loisir_bien_etre->update(array('id_banner_loisir_bien_etre'=>$id), $dataBannerLoisirBienEtre);

             // var_dump($upDateBannerLoisirBienEtre); die();

            if($upDateBannerLoisirBienEtre)
            {

                if(!empty($data['updateBannerLoisirBienEtre']) and isset($data['updateBannerLoisirBienEtre']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_loisir_bien_etre','Modification effectuée');
                        $this->getBannerLoisirBienEtre();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_loisir_bien_etre','Modification échouée');
                $this->getBannerLoisirBienEtre();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerLoisirBienEtre()
    {

    }




    /**
     * management banner loisirs (petites annonces)   detabase = banner_loisir_petites_annonce
     *
     */

    public function newBannerLoisirPetitesAnnonces()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','loisirs','petites annonces');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/loisirs/petites_annonces/newPetiteAnnonce',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerLoisirPetitesAnnonces()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/loisir/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_loisirs_petites_annonces',$error);
                $this->newBannerLoisirPetitesAnnonces();

            }else{

                $fileName = $this->upload->data();
                $data['imgBannerLoisirPetitesAnnonces'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerLoisirPetitesAnnonces = array(

                'file_banner_loisir_petites_annonces'=> $data['imgBannerLoisirPetitesAnnonces'],
                'status_banner_loisir_petites_annonces'=> $data['status'],
                'created_by_banner_loisir_petites_annonces'=>getAdminId()

            );

            // var_dump($dataJeunessePetitsHumour); die();

            $checkImgBannerPetitesAnnonces = $this->banner_loisir_petites_annonce->checkUser($dataBannerLoisirPetitesAnnonces);


            if(count($checkImgBannerPetitesAnnonces) == 1)
            {

                $this->session->set_flashdata('error_new_banner_loisirs_petites_annonces', 'Ces données existent en base!');
                $this->newBannerLoisirPetitesAnnonces();



            }else{


                $insertBannerPetitesAnnonces = $this->banner_loisir_petites_annonce->create($dataBannerLoisirPetitesAnnonces);


                if($insertBannerPetitesAnnonces)
                {

                    $this->session->set_flashdata('success_new_banner_loisirs_petites_annonces', 'Enregistrement effectué');
                    $this->newBannerLoisirPetitesAnnonces();

                }else{

                    $this->session->set_flashdata('error_new_banner_loisirs_petites_annonces', 'Enregistrement non effectué');
                    $this->newBannerLoisirPetitesAnnonces();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }
    
    public function getBannerLoisirPetitesAnnonces()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','loisirs','petites annonces');
            $data['allBannerPetitesAnnonces'] = $this->banner_loisir_petites_annonce->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/loisirs/petites_annonces/getPetiteAnnonce',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerLoisirPetitesAnnonces($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','loisirs','petites annonces');

                $data['editBannerPetitesAnnonces'] = $this->banner_loisir_petites_annonce->checkDataByKey($id,'id_banner_loisir_petites_annonces');

                if (count($data['editBannerPetitesAnnonces']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/loisirs/petites_annonces/editPetiteAnnonce',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerLoisirPetitesAnnonces()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/loisir');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerLoisirPetitesAnnonces',true);
            $oldImage = $this->input->post('oldBannerLoisirPetitesAnnonces',true);


            // var_dump($oldImage); die();


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_loisir_petites_annonces',$error);
                $this->getBannerLoisirPetitesAnnonces();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerLoisirPetitesAnnonces'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerLoisirPetitesAnnonces =  array(

                'file_banner_loisir_petites_annonces'=> $data['updateBannerLoisirPetitesAnnonces'],
                'status_banner_loisir_petites_annonces'=> $data['status'],
                'modified_at_banner_loisir_petites_annonces'=> date('Y-m-d h:s:i'),
                'modified_by_banner_loisir_petites_annonces'=> getAdminId()

            );

            //var_dump($dataBannerLoisirPetitesAnnonces); die();


            $upDateBannerLoisirPetitesAnnonces = $this->banner_loisir_petites_annonce->update(array('id_banner_loisir_petites_annonces'=>$id), $dataBannerLoisirPetitesAnnonces);

            // var_dump($upDateBannerLoisirPetitesAnnonces); die();

            if($upDateBannerLoisirPetitesAnnonces)
            {

                if(!empty($data['updateBannerLoisirPetitesAnnonces']) and isset($data['updateBannerLoisirPetitesAnnonces']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_loisir_petites_annonces','Modification effectuée');
                        $this->getBannerLoisirPetitesAnnonces();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_loisir_petites_annonces','Modification échouée');
                $this->getBannerLoisirPetitesAnnonces();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerLoisirPetitesAnnonces()
    {

    }


    /**
     * management banner condition   detabase = banner_condition
     *
     */


    public function newBannerCondition()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','Nos conditions');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/condition/newCondition',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerCondition()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/condition/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_condition',$error);
                $this->newBannerCondition();

            }else{

                $fileName = $this->upload->data();
                $data['imgBannerCondition'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerCondition = array(

                'file_banner_condition'=> $data['imgBannerCondition'],
                'status_banner_condition'=> $data['status'],
                'created_by_banner_condition'=>getAdminId()

            );

            // var_dump($dataBannerCondition); die();

            $checkImgBannerCondition = $this->banner_condition->checkUser($dataBannerCondition);


            if(count($checkImgBannerCondition) == 1)
            {

                $this->session->set_flashdata('error_new_banner_condition', 'Ces données existent en base!');
                $this->newBannerCondition();



            }else{


                $insertBannerCondition = $this->banner_condition->create($dataBannerCondition);


                if($insertBannerCondition)
                {

                    $this->session->set_flashdata('success_new_banner_condition', 'Enregistrement effectué');
                    $this->newBannerCondition();

                }else{

                    $this->session->set_flashdata('error_new_banner_condition', 'Enregistrement non effectué');
                    $this->newBannerCondition();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerCondition()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','Nos conditions');
            $data['allBannerCondition'] = $this->banner_condition->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/condition/getCondition',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerCondition($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','Nos conditions');

                $data['editBannerCondition'] = $this->banner_condition->checkDataByKey($id,'id_banner_condition');

                if (count($data['editBannerCondition']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/condition/editCondition',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateBannerCondition()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/condition');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerCondition',true);
            $oldImage = $this->input->post('oldBannerCondition',true);


            // var_dump($oldImage); die();


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_condition',$error);
                $this->getBannerCondition();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerCondition'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerCondition =  array(

                'file_banner_condition'=> $data['updateBannerCondition'],
                'status_banner_condition'=> $data['status'],
                'modified_at_banner_condition'=> date('Y-m-d h:s:i'),
                'modified_by_banner_condition'=> getAdminId()

            );

            //var_dump($dataBannerCondition); die();


            $upDateBannerCondition = $this->banner_condition->update(array('id_banner_condition'=>$id), $dataBannerCondition);

            // var_dump($upDateBannerCondition); die();

            if($upDateBannerCondition)
            {

                if(!empty($data['updateBannerCondition']) and isset($data['updateBannerCondition']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_condition','Modification effectuée');
                        $this->getBannerCondition();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_condition','Modification échouée');
                $this->getBannerCondition();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerCondition()
    {

    }

    /**
     * management banner programme   detabase = banner_program
     *
     */

    public function newBannerProgram()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une bannière';
            $data['menu'] = array('Gestion des Bannières','le programme');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/programme/newProgram',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addBannerProgram()
    {
        if (adminLoggedIn()) {

            $data = array();

            $path = realpath(APPPATH.'../assets/banniere/programme/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_banner_program',$error);
                $this->newBannerProgram();

            }else{

                $fileName = $this->upload->data();
                $data['imgBannerProgram'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerProgram = array(

                'file_banner_programme'=> $data['imgBannerProgram'],
                'status_banner_programme'=> $data['status'],
                'created_by_banner_programme'=>getAdminId()

            );

            // var_dump($dataBannerProgram); die();

            $checkImgBannerProgram = $this->banner_program->checkUser($dataBannerProgram);


            if(count($checkImgBannerProgram) == 1)
            {

                $this->session->set_flashdata('error_new_banner_program', 'Ces données existent en base!');
                $this->newBannerProgram();



            }else{


                $insertBannerProgram = $this->banner_program->create($dataBannerProgram);


                if($insertBannerProgram)
                {

                    $this->session->set_flashdata('success_new_banner_program', 'Enregistrement effectué');
                    $this->newBannerProgram();

                }else{

                    $this->session->set_flashdata('error_new_banner_program', 'Enregistrement non effectué');
                    $this->newBannerProgram();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getBannerProgram()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des bannières';
            $data['menu'] = array('Gestion des Bannières','le programme');
            $data['allBannerProgram'] = $this->banner_program->read();


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/banniere/programme/getProgram',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function editBannerProgram($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une bannières';
                $data['menu'] = array('Gestion des Bannières','le programme');

                $data['editBannerProgram'] = $this->banner_program->checkDataByKey($id,'id_banner_programme');

                if (count($data['editBannerProgram']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/banniere/programme/editProgram',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


                }


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }


    public function upDateBannerProgram()
    {
        if(adminLoggedIn())
        {

            $path = realpath(APPPATH.'../assets/banniere/programme');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            $id = $this->input->post('idBannerProgram',true);
            $oldImage = $this->input->post('oldBannerProgram',true);


            // var_dump($oldImage); die();


            if(!$this->upload->do_upload('img'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_banner_program',$error);
                $this->getBannerProgram();

            }else{

                $fileName = $this->upload->data();
                $data['updateBannerProgram'] = $fileName['file_name'];
                $data['status'] = $this->input->post('status',true);

            }

            $dataBannerPrgram =  array(

                'file_banner_programme'=> $data['updateBannerProgram'],
                'status_banner_programme'=> $data['status'],
                'modified_at__banner_programme'=> date('Y-m-d h:s:i'),
                'modified_by_banner_programme'=> getAdminId()

            );

            //var_dump($dataBannerPrgram); die();


            $upDateBannerPrgram = $this->banner_program->update(array('id_banner_programme'=>$id), $dataBannerPrgram);

            // var_dump($upDateBannerPrgram); die();

            if($upDateBannerPrgram)
            {

                if(!empty($data['updateBannerProgram']) and isset($data['updateBannerProgram']))
                {

                    if(file_exists($path.'/'.$oldImage))
                    {
                        unlink($path.'/'.$oldImage);

                        $this->session->set_flashdata('success_get_banner_program','Modification effectuée');
                        $this->getBannerProgram();
                    }

                }

            }else{

                $this->session->set_flashdata('error_get_banner_program','Modification échouée');
                $this->getBannerProgram();

            }


        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deleteBannerProgram()
    {

    }


    public function newContentPartenaires()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un contenu';
            $data['menu'] = array('Interface','Bienvenue','Partenaire');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/interface_partenaires/newContent',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function addContentPartenaires()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH .'../assets/partenaires/content/img/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = true;

            $this->load->library('upload', $config);

            $data['addContentPartenairesTitle'] = $this->input->post('titreContentPartenaires', true);
            $data['addContentPartenairesParagraph1'] = $this->input->post('paragraph1', true);
            $data['addContentPartenairesParagraph2'] = $this->input->post('paragraph2', true);
            $data['addContentPartenairesStatus'] = (int)$this->input->post('statusContentPartenaires', true);


            if (!$this->upload->do_upload('imgContentPartenaires')) {

                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_interface_content_partenaires', $error);
                $this->newContentPartenaires();

            } else {


                $fileName = $this->upload->data();
                $data['addContentPartenairesFile'] = $fileName['file_name'];

            }


            $dataContentPartenaires = array(

                'titre_content_partenaires' => $data['addContentPartenairesTitle'],
                'paragraph1_content_partenaires' => $data['addContentPartenairesParagraph1'],
                'paragraph2_content_partenaires' => $data['addContentPartenairesParagraph2'],
                'file_content_partenaires' => $data['addContentPartenairesFile'],
                'status_content_partenaires' => $data['addContentPartenairesStatus'],
                'created_by_content_partenaires' => getAdminId()
            );


            $checkDataContentPartenaires = $this->content_partenaire->checkUser($dataContentPartenaires);


            if (count($checkDataContentPartenaires) == 1) {
                $this->session->set_flashdata('error_interface_content_partenaires', 'les données existent en base!');
                $this->newContentPartenaires();
            } else {

                $insertDataContentPartenaires = $this->content_partenaire->create($dataContentPartenaires);


                if ($insertDataContentPartenaires) {
                    $this->session->set_flashdata('success_interface_content_partenaires', 'Enregistrement effectué avec success');
                    $this->newContentPartenaires();
                } else {

                    $this->session->set_flashdata('error_interface_content_partenaires', 'Enregistrement échoué');
                    $this->newContentPartenaires();
                }

            }

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function getContentPartenaires()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Liste des contenus';
            $data['menu'] = array('Interface','Bienvenue','Parteanires');

            $data['allContentPartenaires'] = $this->content_partenaire->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/interface_partenaires/getContent', $data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editContentPartenaires($id)
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Modifier des contenus';
            $data['menu'] = array('Interface','Bienvenue','Parteanires');

            $data['editContentPartenaires'] = $this->content_partenaire->checkDataByKey($id, 'id_content_partenaires');

            if (count($data['editContentPartenaires']) == 1) {

                $data['status'] = $this->status->read();

                $this->load->view('backoffice/admin/header/header');
                $this->load->view('backoffice/admin/header/css');
                $this->load->view('backoffice/admin/header/navTop');
                $this->load->view('backoffice/admin/header/navLeft');
                $this->load->view('backoffice/interface_partenaires/editContent', $data);
                $this->load->view('backoffice/admin/header/footer');
                $this->load->view('backoffice/admin/header/htmlClose');

            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();
        }
    }

    public function upDateContentPartenaires()
   {
       if (adminLoggedIn()) {

           $data['upDateContentPartenaireTitle'] = $this->input->post('editTitreContentPartenaires', true);
           $data['upDateContentPartenaireParagraph1'] = $this->input->post('editParagraph1', true);
           $data['upDateContentPartenaireParagraph2'] = $this->input->post('editParagraph2', true);
           $data['upDateContentPartenaireStatus'] = (int)$this->input->post('editStatus', true);


           $idUpDateContentPartenaires = $this->input->post('idContentPartenairesUpDate', true);
           $oldIContentParteniare = $this->input->post('oldImageUpdate', true);

           $path = realpath(APPPATH .'../assets/partenaires/content/img/');

           $config['upload_path'] = $path;
           $config['allowed_types'] = 'gif|jpg|png|jpeg';
           $config['remove_spaces'] = true;

           $this->load->library('upload', $config);


           if (!$this->upload->do_upload('editImageContentPartenaires')) {

               $error = $this->upload->display_errors();
               $this->session->set_flashdata('error_get_content_partenaires', $error);
               $this->getContentPartenaires();

           } else {

               $fileName = $this->upload->data();
               $data['upDateContentPartenaireFile'] = $fileName['file_name'];

           }



           $dataIContentPartenaire = array(

               'titre_content_partenaires' => $data['upDateContentPartenaireTitle'],
               'paragraph1_content_partenaires' => $data['upDateContentPartenaireParagraph1'],
               'paragraph2_content_partenaires' => $data['upDateContentPartenaireParagraph2'],
               'file_content_partenaires' => $data['upDateContentPartenaireFile'],
               'status_content_partenaires' => $data['upDateContentPartenaireStatus'],
               'modified_at_content_partenaires' => date('Y-m-d h:i:s'),
               'modified_by_content_partenaires' => getAdminId()
           );


           $upDateDataIContentPartenaire = $this->content_partenaire->update(array('id_content_partenaires' => $idUpDateContentPartenaires), $dataIContentPartenaire);

           if ($upDateDataIContentPartenaire) {
               if (!empty($data['upDateContentPartenaireFile']) and isset($data['upDateContentPartenaireFile'])) {
                   if (file_exists($path . '/' . $oldIContentParteniare)) {
                       unlink($path . '/' . $oldIContentParteniare);
                   }
               }


               $this->session->set_flashdata('success_get_content_partenaires', 'Modification effectuée');
               $this->getContentPartenaires();

           } else {

               $this->session->set_flashdata('error_get_content_partenaires', 'Modification échouée');
               $this->getContentPartenaires();

           }

       } else {

           $this->session->set_flashdata('error', 'Connectez vous svp!');
           $this->login();


       }
   }

    public function deleteContentPartenaires()
    {

    }


   /**
    *  function to listing of the donor
    */


   public function donationListing()
   {
       if (adminLoggedIn()) {

           $data['titre'] = 'Consultation des dons';
           $data['menu'] = array('Faire un don');


           $this->load->view('backoffice/admin/header/header');
           $this->load->view('backoffice/admin/header/css');
           $this->load->view('backoffice/admin/header/navTop');
           $this->load->view('backoffice/admin/header/navLeft');
           $this->load->view('backoffice/don/listing',$data);
           $this->load->view('backoffice/admin/header/footer');
           $this->load->view('backoffice/admin/header/htmlClose');

       } else {


           $this->session->set_flashdata('error', 'Connectez vous svp!');
           $this->login();


       }
   }

   public function donationCheckListing()
   {
       $output = ' ';
       $query = ' ';

       if ($this->input->is_ajax_request()) {

           $query = $this->input->post('query', true);

       }

       $data_don = $this->don->searchQueryData($query,'id','nom','email','montant');

       ?>
    <table style="padding: 10px;" id="member_table" class="table table-bordered table-responsive">

        <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Montant</th>
            <th>Order id</th>
            <th>Statut</th>
            <th>Date de creation</th>
            <th style="text-align: right" rowspan="2">Actions</th>
        </tr>
        </thead>
        <tbody>

        <?php
        if ($data_don->num_rows() > 0):

            foreach ($data_don->result() as $row):

               ?>
        <tr>
            <td><?php echo $row->nom ?></td>
            <td><?php echo $row->email ?></td>
            <td><?php echo $row->telephone ?></td>
            <td><?php echo $row->montant ?></td>
            <td><?php echo $row->order_id ?></td>
            <td><?php if($row->status == 1){statusSuccess('Payé');}elseif ($row->status == 0){statusFailed('Annulé');} ?></td>
            <td><?php echo $row->created_at ?></td>


            <td style="text-align: center"><a id="delDon" class="btn btn-adn" href="javascript:void(0)" data-id="<?php echo $row->id ?>" data-text="<?php echo $this->encryption->encrypt($row->id) ?>">Suprimer</a></td>
        </tr>
  <?php
      endforeach;
      else:
   ?>

        <tr>
            <td colspan="8" style="text-align: center">Aucune donnée trouvée</td>
        </tr>
        </tbody>
    </table>

<?php
    endif;
   }

   public function deleteDonationlisting()
   {
       if(adminLoggedIn())
       {

           if($this->input->is_ajax_request())
           {

               $this->input->post('id',true);
               $idDon = $this->input->post('text',true);


               if(!empty($idDon))
               {

                   $idDonDecrypt = $this->encryption->decrypt($idDon);

                   $delDon = $this->don->delete(array('id'=>$idDonDecrypt));


                   if($delDon)
                   {


                   }


               }

           }

       }else{

           $this->session->set_flashdata('error', 'Connectez vous svp!');
           $this->login();

       }
   }


   /**
    * ====================================== BackEnd priere rubrique page ======================================
    */


    public function newPrierePartage()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une prière';
            $data['menu'] = array('Prière','Prière à partager');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/priere/partage/newPrierePartage',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addPrierePartage()
    {
        if (adminLoggedIn()) {

            $data['addPrierePartageTheme'] = $this->input->post('theme', true);
            $data['addPrierePartageRef'] = $this->input->post('ref', true);
            $data['addPrierePartageContent'] = $this->input->post('content', true);
            $data['addExercicePriereStatus'] = (int)$this->input->post('status', true);


            $addPrierePartage = array(

                'theme_priere_partage' => $data['addPrierePartageTheme'],
                'ref_priere_partage' => $data['addPrierePartageRef'],
                'content_priere_partage' => $data['addPrierePartageContent'],
                'status_priere_partage' => $data['addExercicePriereStatus'],
                'created_by_priere_partage' => getAdminId()
            );



            $checkDataPrierePartage = $this->priere_partage->checkUser($addPrierePartage);

            if (count($checkDataPrierePartage) == 1) {

                $this->session->set_flashdata('error_new_priere_partage', 'les données existent en base!');
                $this->newPrierePartage();

            } else {

                $insertDataPrierePartage = $this->priere_partage->create($addPrierePartage);

                if ($insertDataPrierePartage) {
                    $this->session->set_flashdata('success_new_priere_partage', 'Enregistrement effectué avec success');
                    $this->newPrierePartage();
                } else {

                    $this->session->set_flashdata('error_new_priere_partage', 'Enregistrement echoué!');
                    $this->newPrierePartage();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function getPrierePartage()
    {

        if (adminLoggedIn()) {

            $data['allPrierePartage'] = $this->priere_partage->read();
            $data['titre'] = 'Liste des prères partagées';
            $data['menu'] = array('Prière','Prères à partager');


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/priere/partage/getPrierePartage',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editPrierePartage($id)
    {

        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une prière';
                $data['menu'] = array('Prière','Prères à partager');

                $data['editPrierePartage'] = $this->priere_partage->checkDataByKey($id, 'id_priere_partage');

                if (count($data['editPrierePartage']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/priere/partage/editPrierePartage',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDatePrierePartage()
    {
        if (adminLoggedIn()) {
            $data['upDatePrierePartageTheme'] = $this->input->post('theme', true);
            $data['upDatePrierePartageRef'] = $this->input->post('ref', true);
            $data['upDatePrierePartageContenu'] = $this->input->post('contenu', true);
            $data['upDatePrierePartageStatus'] = (int)$this->input->post('status', true);

            $idUpDatePrierePartage = $this->input->post('idPrierePartageUpDate', true);

            $upDateDataPrierePartage = array(

                'theme_priere_partage' => $data['upDatePrierePartageTheme'],
                'ref_priere_partage' => $data['upDatePrierePartageRef'],
                'content_priere_partage' => $data['upDatePrierePartageContenu'],
                'status_priere_partage' => $data['upDatePrierePartageStatus'],
                'modified_at_priere_partage' => date('Y-m-d h:i:s'),
                'modified_by_priere_partage' => getAdminId()

            );


            $upDatePrierePartage = $this->priere_partage->update(array('id_priere_partage'=>$idUpDatePrierePartage),$upDateDataPrierePartage);


            if ($upDatePrierePartage) {

                messageSuccess('get_priere_partage','Modification effectuée!');
                $this->getPrierePartage();

            } else {

                messageFailed('get_priere_partage','Modification échouée!');
                $this->getPrierePartage();
            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function deletePrierePartage()
    {
        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idPrierePartage = $this->input->post('text',true);


                if(!empty($idPrierePartage))
                {

                    $idPrierePartageDecrypt = $this->encryption->decrypt($idPrierePartage);

                    $delPrierePartage =  $this->priere_partage->delete(array('id_priere_partage'=>$idPrierePartageDecrypt));


                    if($delPrierePartage)
                    {


                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }


    public function newPriereIntention()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter une intention de prière';
            $data['menu'] = array('Prière','Intention de prière');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/priere/intention/newPriereIntention',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addPriereIntention()
    {
        if (adminLoggedIn()) {

            $data['addExerciceIntentionSubject'] = $this->input->post('sujet', true);
            $data['addExerciceIntentionPriere'] = $this->input->post('priere', true);
            $data['addExerciceIntentionStatus'] = (int)$this->input->post('status', true);


            $addPriereIntention = array(

                'sujet_priere_intention' => $data['addExerciceIntentionSubject'],
                'priere_priere_intention' => $data['addExerciceIntentionPriere'],
                'status_priere_intention' => $data['addExerciceIntentionStatus'],
                'created_by_priere_intention' => getAdminId()
            );



            $checkDataPriereIntention = $this->priere_intention->checkUser($addPriereIntention);

            if (count($checkDataPriereIntention) == 1) {

                $this->session->set_flashdata('error_new_priere_intention', 'les données existent en base!');
                $this->newPriereIntention();

            } else {

                $insertDataPriereIntention = $this->priere_intention->create($addPriereIntention);

                if ($insertDataPriereIntention) {

                    $this->session->set_flashdata('success_new_priere_intention', 'Enregistrement effectué avec success');
                    $this->newPriereIntention();

                }else{

                    $this->session->set_flashdata('error_new_priere_intention', 'Enregistrement echoué!');
                    $this->newPriereIntention();

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getPriereIntention()
    {
        if (adminLoggedIn()) {

            $data['allPriereIntention'] = $this->priere_intention->read();
            $data['titre'] = 'Liste des intention de prière';
            $data['menu'] = array('Prière','Intention de prière');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/priere/intention/getPriereIntention',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editPriereIntention($id)
    {

        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier une intention de prière';
                $data['menu'] = array('Priere','Intention de prière');

                $data['editPriereIntention'] = $this->priere_intention->checkDataByKey($id,'id_priere_intention');

                if (count($data['editPriereIntention']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/priere/intention/editPriereIntention',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDatePriereIntention()
    {
        if (adminLoggedIn()) {

            $data['upDatePriereIntentionSubject'] = $this->input->post('sujet', true);
            $data['upDatePriereIntentionPriere'] = $this->input->post('priere', true);
            $data['upDatePriereIntentionStatus'] = (int)$this->input->post('status', true);

            $idUpDatePriereIntention = $this->input->post('idPriereIntentionUpDate', true);

            $upDateDataPriereIntention = array(

                'sujet_priere_intention' => $data['upDatePriereIntentionSubject'],
                'priere_priere_intention' => $data['upDatePriereIntentionPriere'],
                'status_priere_intention' => $data['upDatePriereIntentionStatus'],
                'modified_at_priere_intention' => date('Y-m-d h:i:s'),
                'modified_by_priere_intention' => getAdminId()

            );


            $upDatePriereIntenttion = $this->priere_intention->update(array('id_priere_intention'=>$idUpDatePriereIntention),$upDateDataPriereIntention);


            if ($upDatePriereIntenttion) {

                $this->session->set_flashdata('success_get_priere_intention', 'Modification effectuée!');
                $this->getPriereIntention();


            } else {

                $this->session->set_flashdata('error_get_priere_intention', 'Modification échouée!');
                $this->getPriereIntention();
            }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function deletePriereIntention()
    {
        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idPriereIntention = $this->input->post('text',true);


                if(!empty($idPriereIntention))
                {

                    $idPriereIntentionDecrypt = $this->encryption->decrypt($idPriereIntention);

                    $delPriereIntention =  $this->priere_intention->delete(array('id_priere_intention'=>$idPriereIntentionDecrypt));


                    if($delPriereIntention)
                    {


                    }else{



                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }


    public function newPriereExercice()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter un exercice';
            $data['menu'] = array('Prière','exercice');
            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/priere/exercice/newPriereExercice',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function addPriereExercice()
    {
            if (adminLoggedIn()) {

                $data['addExercicePriereTitle'] = $this->input->post('titre', true);
                $data['addExercicePriereDescription'] = $this->input->post('description', true);
                $data['addExercicePriereQuestion'] = $this->input->post('question', true);
                $data['addExercicePriereStatus'] = (int)$this->input->post('status', true);


                    $addExercicePriere = array(

                        'titre_exercice_priere' => $data['addExercicePriereTitle'],
                        'description_exercice_priere' => $data['addExercicePriereDescription'],
                        'question_exercice_priere' => $data['addExercicePriereQuestion'],
                        'status_exercice_priere' => $data['addExercicePriereStatus'],
                        'created_by_exercice_priere' => getAdminId()
                    );


                    $checkDataExercicePriere = $this->exercice_priere->checkUser($addExercicePriere);

                    if (count($checkDataExercicePriere) == 1) {

                        $this->session->set_flashdata('error_new_exercice_priere', 'les données existent en base!');
                        $this->newPriereExercice();

                    } else {

                        $insertDataExercicePriere = $this->exercice_priere->create($addExercicePriere);

                        if ($insertDataExercicePriere) {
                            $this->session->set_flashdata('success_new_exercice_priere', 'Enregistrement effectué avec success');
                            $this->newPriereExercice();
                        } else {

                            $this->session->set_flashdata('error_new_exercice_priere', 'Enregistrement echoué!');
                            $this->newPriereExercice();

                        }

                    }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function getPriereExercice()
    {
        if (adminLoggedIn()) {

            $data['allPriereExercices'] = $this->exercice_priere->read();
            $data['titre'] = 'Liste des exercices';
            $data['menu'] = array('Prière','exercices');


            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/priere/exercice/getPriereExercice',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function editPriereExercice($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier un exercice';
                $data['menu'] = array('Priere','Exercices');

                $data['editPriereExercice'] = $this->exercice_priere->checkDataByKey($id, 'id_exercice_priere');

                if (count($data['editPriereExercice']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/priere/exercice/editPriereExercice',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDatePriereExercice()
    {
        if (adminLoggedIn()) {

            $data['upDateExercicePriereTitle'] = $this->input->post('titre', true);
            $data['upDateExercicePriereDescribe'] = $this->input->post('description', true);
            $data['upDateExercicePriereQuestion'] = $this->input->post('question', true);
            $data['upDateExercicePriereStatus'] = (int)$this->input->post('status', true);

            $idUpDateExercicePriere = $this->input->post('idExercicePriereUpDate', true);

                $upDateDataExercicePriere = array(

                    'titre_exercice_priere' => $data['upDateExercicePriereTitle'],
                    'description_exercice_priere' => $data['upDateExercicePriereDescribe'],
                    'question_exercice_priere' => $data['upDateExercicePriereQuestion'],
                    'status_exercice_priere' => $data['upDateExercicePriereStatus'],
                    'modified_at_exercice_priere' => date('Y-m-d h:i:s'),
                    'modified_by_exercice_priere' => getAdminId()

                );


                $upDateExercicePriere = $this->exercice_priere->update(array('id_exercice_priere'=>$idUpDateExercicePriere),$upDateDataExercicePriere);


                if ($upDateExercicePriere) {

                    $this->session->set_flashdata('success_get_exercice_priere', 'Modification effectuée!');
                    $this->getPriereExercice();


                } else {

                    $this->session->set_flashdata('error_get_exercice_priere', 'Modification échouée!');
                    $this->getPriereExercice();
                }


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }

    }

    public function deletePriereExercice()
    {
        if(adminLoggedIn())
        {

            if($this->input->is_ajax_request())
            {

                $this->input->post('id',true);
                $idPriereExercice = $this->input->post('text',true);


                if(!empty($idPriereExercice))
                {

                    $idPriereExerciceDecrypt = $this->encryption->decrypt($idPriereExercice);

                    $delPriereExercice =  $this->exercice_priere->delete(array('id_priere_exercice'=>$idPriereExerciceDecrypt));


                    if($delPriereExercice)
                    {


                    }


                }

            }

        }else{

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }


   /**
    *  ============================  backend jeunesse (jeune) page
    */


     public function newGrandProphetePriere()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter une prière';
             $data['menu'] = array('Jeunesse','Nos jeunes prophètes','prière');
             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/grand/newGrand',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function addGrandProphetePriere()
     {
         if (adminLoggedIn()) {

             $data['addGrandPropheteSubject'] = $this->input->post('sujet', true);
             $data['addGrandProphetePriere'] = $this->input->post('priere', true);
             $data['addGrandPropheteStatus'] = (int)$this->input->post('status', true);


             $addGrandProphete = array(

                 'sujet_jeunesse_priere_jeune' => $data['addGrandPropheteSubject'],
                 'content_jeunesse_priere_jeune' => $data['addGrandProphetePriere'],
                 'status_jeunesse_priere_jeune' => $data['addGrandPropheteStatus'],
                 'created_by_jeunesse_priere_jeune' => getAdminId()
             );

            // var_dump($addGrandProphete); die();

             $checkDataGrandProphete = $this->jeunesse_priere_jeune->checkUser($addGrandProphete);

             if (count($checkDataGrandProphete) == 1) {

                 $this->session->set_flashdata('error_new_jeunesse_grand', 'les données existent en base!');
                 $this->newGrandProphetePriere();

             } else {

                 $insertDataGrandProphete = $this->jeunesse_priere_jeune->create($addGrandProphete);

                 if ($insertDataGrandProphete) {
                     $this->session->set_flashdata('success_new_jeunesse_grand', 'Enregistrement effectué avec success');
                     $this->newGrandProphetePriere();
                 }else{
                     $this->session->set_flashdata('error_new_jeunesse_grand', 'Enregistrement echoué!');
                     $this->newGrandProphetePriere();
                 }
             }
         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function getGrandProphetePriere()
     {
         if (adminLoggedIn()) {

             $data['allGrandProphetePriere'] = $this->jeunesse_priere_jeune->read();
             $data['titre'] = 'Liste des prières';
             $data['menu'] = array('Jeunesse','Nos jeunes prophètes','prière');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/grand/getGrand',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editGrandProphetePriere($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier une prère';
                 $data['menu'] = array('Jeunesse','Nos jeunes prophètes','prière');

                 $data['editGrandProphetePriere'] = $this->jeunesse_priere_jeune->checkDataByKey($id,'id_jeunesse_priere_jeune ');

                 if (count($data['editGrandProphetePriere']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/jeunesse/grand/editGrand',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function upDateGrandProphetePriere()
     {
         if (adminLoggedIn()) {

             $data['upDateGrandProphetePriereSubject'] = $this->input->post('sujet', true);
             $data['upDateGrandProphetePrierePriere'] = $this->input->post('priere', true);
             $data['upDateGrandProphetePriereStatus'] = (int)$this->input->post('status', true);

             $idUpDateGrandProphetePriere = $this->input->post('idGrandProphetePriereUpDate', true);

             //var_dump($idUpDateGrandProphetePriere); die();
             $upDateDataGrandProphetePriere = array(

                 'sujet_jeunesse_priere_jeune' => $data['upDateGrandProphetePriereSubject'],
                 'content_jeunesse_priere_jeune' => $data['upDateGrandProphetePrierePriere'],
                 'status_jeunesse_priere_jeune' => $data['upDateGrandProphetePriereStatus'],
                 'modified_at_jeunesse_priere_jeune' => date('Y-m-d h:i:s'),
                 'modified_by_jeunesse_priere_jeune ' => getAdminId()

             );

             //var_dump($upDateDataGrandProphetePriere); die();


             $upDateGrandProphetePriere = $this->jeunesse_priere_jeune->update(array('id_jeunesse_priere_jeune'=>$idUpDateGrandProphetePriere),$upDateDataGrandProphetePriere);

             // var_dump($upDateGrandProphetePriere); die();

             if ($upDateGrandProphetePriere) {

                 $this->session->set_flashdata('success_get_jeunesse_grand', 'Modification effectuée!');
                 $this->getGrandProphetePriere();


             } else {

                 $this->session->set_flashdata('error_get_jeunesse_grand', 'Modification échouée!');
                 $this->getGrandProphetePriere();
             }


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function deleteGrandProphetePriere()
     {

         if(adminLoggedIn())
         {

             if($this->input->is_ajax_request())
             {

                 $this->input->post('id',true);
                 $idGrandProphetePriere = $this->input->post('text',true);


                 if(!empty($idGrandProphetePriere))
                 {

                     $idGrandProphetePriereDecrypt = $this->encryption->decrypt($idGrandProphetePriere);

                     $delGrandProphetePriere = $this->jeunesse_priere_jeune->delete(array('id_jeunesse_priere_jeune'=>$idGrandProphetePriereDecrypt));


                     if($delGrandProphetePriere)
                     {


                     }else{



                     }


                 }

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

    // ==========================  livre =====================================

     public function newGrandPropheteLivre()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter un livre';
             $data['menu'] = array('Jeunesse','Nos jeunes prophètes','livres');
             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/grand/livre/newLivre',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function addGrandPropheteLivre()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/jeunesse/livre/grand/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg|png';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);

             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_new_jeunesse_livre',$error);
                 $this->newGrandPropheteLivre();

             }else{

                 $fileName = $this->upload->data();
                 $data['addGrandPropheteLivreFileName'] = $fileName['file_name'];
                 $data['addGrandPropheteLivreTitle'] = $this->input->post('title',true);
                 $data['status'] = $this->input->post('status',true);

             }

             $dataGrandPropheteLivre = array(

                 'titre_jeunesse_livre_jeune'=> $data['addGrandPropheteLivreTitle'],
                 'file_jeunesse_livre_jeune'=> $data['addGrandPropheteLivreFileName'],
                 'status_jeunesse_livre_jeune'=> $data['status'],
                 'created_by_jeunesse_livre_jeune'=>getAdminId()

             );


             $checkGrandPropheteLivre = $this->jeunesse_livre_jeune->checkUser($dataGrandPropheteLivre);


             if(count($checkGrandPropheteLivre) == 1)
             {

                 $this->session->set_flashdata('error_new_jeunesse_livre', 'Ces données existent en base!');
                 $this->newGrandPropheteLivre();



             }else{


                 $insertGrandPropheteLivre = $this->jeunesse_livre_jeune->create($dataGrandPropheteLivre);

                 if($insertGrandPropheteLivre)
                 {

                     $this->session->set_flashdata('success_new_jeunesse_livre', 'Enregistrement effectué');
                     $this->newGrandPropheteLivre();

                 }else{

                     $this->session->set_flashdata('error_new_jeunesse_livre', 'Enregistrement non effectué');
                     $this->newGrandPropheteLivre();

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function getGrandPropheteLivre()
     {
         if (adminLoggedIn()) {

             $data['allGrandPropheteLivre'] = $this->jeunesse_livre_jeune->read();
             $data['titre'] = 'Liste des livres';
             $data['menu'] = array('Jeunesse','Nos jeunes prophètes','Livres');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/grand/livre/getLivre',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editGrandPropheteLivre($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier un livre';
                 $data['menu'] = array('Jeunesse','Nos jeunes prophètes','Livres');

                 $data['editGrandPropheteLivre'] = $this->jeunesse_livre_jeune->checkDataByKey($id,'id_jeunesse_livre_jeune');

                 if (count($data['editGrandPropheteLivre']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/jeunesse/grand/livre/editLivre',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function upDateGrandPropheteLivre()
     {

        if(adminLoggedIn())
         {
             $path = realpath(APPPATH.'../assets/jeunesse/livre/grand/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;


             $this->load->library('upload',$config);


             $data['updateGrandProphetelivreTitle'] = $this->input->post('title',true);
             $data['status'] = $this->input->post('status',true);

             $id = $this->input->post('idGrandPropheteLivreUpDate',true);
             $oldImage = $this->input->post('oldGrandPropheteLivreUpDate',true);




             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_get_grand_livre',$error);
                 $this->getGrandPropheteLivre();

             }else{

                 $fileName =  $this->upload->data();
                 $data['updateGrandProphetelivreFile'] = $fileName['file_name'];


             }

             $dataGrandPropheteLivre  =  array(

                 'titre_jeunesse_livre_jeune'=> $data['updateGrandProphetelivreTitle'],
                 'file_jeunesse_livre_jeune'=> $data['updateGrandProphetelivreFile'],
                 'status_jeunesse_livre_jeune'=> $data['status'],
                 'modified_at_jeunesse_livre_jeune'=> date('Y-m-d h:s:i'),
                 'modified_by_jeunesse_livre_jeune'=> getAdminId()

             );



             $upDateGrandPropheteLivre  = $this->jeunesse_livre_jeune->update(array('id_jeunesse_livre_jeune'=>$id), $dataGrandPropheteLivre );


             if($upDateGrandPropheteLivre)
             {

                 if(!empty($data['updateGrandProphetelivreFile']) and isset($data['updateGrandProphetelivreFile']))
                 {

                     if(file_exists($path.'/'.$oldImage))
                     {
                         unlink($path.'/'.$oldImage);

                         $this->session->set_flashdata('success_get_grand_livre','Modification effectuée');
                         $this->getGrandPropheteLivre();
                     }

                 }

             }else{

                 $this->session->set_flashdata('error_get_grand_livre','Modification échouée');
                 $this->getGrandPropheteLivre();

             }


         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }

     }

     public function deleteGrandPropheteLivre()
     {
         if(adminLoggedIn())
         {

             if($this->input->is_ajax_request())
             {

                 $this->input->post('id',true);
                 $idGrandPropheteLivre = $this->input->post('text',true);


                 if(!empty($idGrandPropheteLivre))
                 {

                     $idGrandPropheteLivreDecrypt = $this->encryption->decrypt($idGrandPropheteLivre);

                     $imgGrandPropheteLivreToDel = $this->jeunesse_livre_jeune->getImageById('file_jeunesse_livre_jeune',array('id_jeunesse_livre_jeune'=>$idGrandPropheteLivreDecrypt));

                     if(!empty($imgGrandPropheteLivreToDel) and count($imgGrandPropheteLivreToDel) == 1)
                     {
                         $realImage = $imgGrandPropheteLivreToDel[0]['file_jeunesse_livre_jeune'];
                     }


                     $delGrandPropheteLivre =  $this->jeunesse_livre_jeune->delete(array('id_jeunesse_livre_jeune'=>$idGrandPropheteLivreDecrypt));


                     if($delGrandPropheteLivre)
                     {

                         if(!empty($realImage) and isset($realImage))
                         {
                             $path = realpath(APPPATH.'../assets/jeunesse/livre/grand/');

                             if(file_exists($path.'/'.$realImage))
                             {
                                 unlink($path.'/'.$realImage);
                             }

                         }

                     }


                 }

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

    /**
     *  ============================  backend jeunesse (petie) page
     */

     public function newPetitProphetePriere()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter une prière';
             $data['menu'] = array('Jeunesse','Nos petits prophètes','prière');
             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/petit/newPetit',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function addPetitProphetePriere()
     {
         if (adminLoggedIn()) {

             $data['addPetitPropheteSubject'] = $this->input->post('sujet', true);
             $data['addPetitProphetePriere'] = $this->input->post('priere', true);
             $data['addPetitPropheteStatus'] = (int)$this->input->post('status', true);


             $addPetitProphete = array(

                 'sujet_jeunesse_priere_petit' => $data['addPetitPropheteSubject'],
                 'content_jeunesse_priere_petit' => $data['addPetitProphetePriere'],
                 'status_jeunesse_priere_petit' => $data['addPetitPropheteStatus'],
                 'created_by_jeunesse_priere_petit' => getAdminId()
             );

             // var_dump($addPetitProphete); die();

             $checkDataPetitProphete = $this->jeunesse_priere_petit->checkUser($addPetitProphete);

             if (count($checkDataPetitProphete) == 1) {

                 $this->session->set_flashdata('error_new_jeunesse_petit', 'les données existent en base!');
                 $this->newPetitProphetePriere();

             } else {

                 $insertDataPetitProphete = $this->jeunesse_priere_petit->create($addPetitProphete);

                 if ($insertDataPetitProphete) {
                     $this->session->set_flashdata('success_new_jeunesse_petit', 'Enregistrement effectué avec success');
                     $this->newPetitProphetePriere();
                 }else{
                     $this->session->set_flashdata('error_new_jeunesse_petit', 'Enregistrement echoué!');
                     $this->newPetitProphetePriere();
                 }
             }
         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function getPetitProphetePriere()
     {
         if (adminLoggedIn()) {

             $data['allPetitProphetePriere'] = $this->jeunesse_priere_petit->read();
             $data['titre'] = 'Liste des prières';
             $data['menu'] = array('Jeunesse','Nos petits prophètes','prière');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/petit/getPetit',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editPetitProphetePriere($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier une prère';
                 $data['menu'] = array('Jeunesse','Nos petits prophètes','prière');

                 $data['editPetitProphetePriere'] = $this->jeunesse_priere_petit->checkDataByKey($id,'id_jeunesse_priere_petit');

                 if (count($data['editPetitProphetePriere']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/jeunesse/petit/editPetit',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function upDatePetitProphetePriere()
     {
         if (adminLoggedIn()) {

             $data['upDatePetitProphetePriereSubject'] = $this->input->post('sujet', true);
             $data['upDatePetitProphetePrierePriere'] = $this->input->post('priere', true);
             $data['upDatePetitProphetePriereStatus'] = (int)$this->input->post('status', true);

             $idUpDatePetitProphetePriere = $this->input->post('idPetitProphetePriereUpDate', true);

            // var_dump($idUpDatePetitProphetePriere); die();
             $upDateDataPetitProphetePriere = array(

                 'sujet_jeunesse_priere_petit' => $data['upDatePetitProphetePriereSubject'],
                 'content_jeunesse_priere_petit' => $data['upDatePetitProphetePrierePriere'],
                 'status_jeunesse_priere_petit' => $data['upDatePetitProphetePriereStatus'],
                 'modified_at_jeunesse_priere_petit' => date('Y-m-d h:i:s'),
                 'modified_by_jeunesse_priere_petit  ' => getAdminId()

             );

             //var_dump($upDateDataPetitProphetePriere); die();


             $upDatePetitProphetePriere = $this->jeunesse_priere_petit->update(array('id_jeunesse_priere_petit'=>$idUpDatePetitProphetePriere),$upDateDataPetitProphetePriere);

              //var_dump($upDatePetitProphetePriere); die();

             if ($upDatePetitProphetePriere) {

                 $this->session->set_flashdata('success_get_jeunesse_petit', 'Modification effectuée!');
                 $this->getPetitProphetePriere();


             } else {

                 $this->session->set_flashdata('error_get_jeunesse_petit', 'Modification échouée!');
                 $this->getPetitProphetePriere();
             }


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function deletePetitProphetePriere()
     {

     }


     // ==========================  livre =====================================

     public function newPetitPropheteLivre()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter un livre';
             $data['menu'] = array('Jeunesse','Nos petits prophètes','Livre');
             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/petit/livre/newLivre',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function addPetitPropheteLivre()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/jeunesse/livre/petit/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg|png';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);

             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_new_jeunesse_petit_livre',$error);
                 $this->newPetitPropheteLivre();

             }else{

                 $fileName = $this->upload->data();
                 $data['addPetitPropheteLivreFileName'] = $fileName['file_name'];
                 $data['addPetitPropheteLivreTitle'] = $this->input->post('title',true);
                 $data['status'] = $this->input->post('status',true);

             }

             $dataPetitPropheteLivre = array(

                 'titre_jeunesse_livre_petit'=> $data['addPetitPropheteLivreTitle'],
                 'file_jeunesse_livre_petit'=> $data['addPetitPropheteLivreFileName'],
                 'status_jeunesse_livre_petit'=> $data['status'],
                 'created_by_jeunesse_livre_petit'=>getAdminId()

             );


             $checkPetitPropheteLivre = $this->jeunesse_livre_petit->checkUser($dataPetitPropheteLivre);


             if(count($checkPetitPropheteLivre) == 1)
             {

                 $this->session->set_flashdata('error_new_jeunesse_petit_livre', 'Ces données existent en base!');
                 $this->newPetitPropheteLivre();



             }else{

                 $insertPetitPropheteLivre = $this->jeunesse_livre_petit->create($dataPetitPropheteLivre);

                 if($insertPetitPropheteLivre)
                 {

                     $this->session->set_flashdata('success_new_jeunesse_petit_livre', 'Enregistrement effectué');
                     $this->newPetitPropheteLivre();

                 }else{

                     $this->session->set_flashdata('error_new_jeunesse_petit_livre', 'Enregistrement non effectué');
                     $this->newPetitPropheteLivre();

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function getPetitPropheteLivre()
     {
         if (adminLoggedIn()) {

             $data['allPetitPropheteLivre'] = $this->jeunesse_livre_petit->read();
             $data['titre'] = 'Liste des livres';
             $data['menu'] = array('Jeunesse','Nos petits prophètes','Livres');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/petit/livre/getLivre',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editPetitPropheteLivre($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier un livre';
                 $data['menu'] = array('Jeunesse','Nos petits prophètes','Livres');

                 $data['editPetitPropheteLivre'] = $this->jeunesse_livre_petit->checkDataByKey($id,'id_jeunesse_livre_petit');

                 if (count($data['editPetitPropheteLivre']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/jeunesse/petit/livre/editLivre',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function upDatePetitPropheteLivre()
     {
         if(adminLoggedIn())
         {
             $path = realpath(APPPATH.'../assets/jeunesse/livre/petit/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;


             $this->load->library('upload',$config);


             $data['updatePetitProphetelivreTitle'] = $this->input->post('title',true);
             $data['status'] = $this->input->post('status',true);

             $id = $this->input->post('idPetitPropheteLivreUpDate',true);
             $oldImage = $this->input->post('oldPetitPropheteLivreUpDate',true);

            // var_dump($id); die();

             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_get_petit_livre',$error);
                 $this->getPetitPropheteLivre();

             }else{

                 $fileName =  $this->upload->data();
                 $data['updatePetitProphetelivreFile'] = $fileName['file_name'];


             }

             $dataPetitPropheteLivre  =  array(

                 'titre_jeunesse_livre_petit'=> $data['updatePetitProphetelivreTitle'],
                 'file_jeunesse_livre_petit'=> $data['updatePetitProphetelivreFile'],
                 'status_jeunesse_livre_petit'=> $data['status'],
                 'modified_at_jeunesse_livre_petit'=> date('d-m-Y h:s:i'),
                 'modified_by_jeunesse_livre_petit'=> getAdminId()

             );


             //var_dump($dataPetitPropheteLivre); die();




             $upDatePetitPropheteLivre  = $this->jeunesse_livre_petit->update(array('id_jeunesse_livre_petit'=>$id), $dataPetitPropheteLivre);


             if($upDatePetitPropheteLivre)
             {

                 if(!empty($data['updatePetitProphetelivreFile']) and isset($data['updatePetitProphetelivreFile']))
                 {

                     if(file_exists($path.'/'.$oldImage))
                     {
                         unlink($path.'/'.$oldImage);

                         $this->session->set_flashdata('success_get_petit_livre','Modification effectuée');
                         $this->getPetitPropheteLivre();
                     }

                 }

             }else{

                 $this->session->set_flashdata('error_get_petit_livre','Modification échouée');
                 $this->getPetitPropheteLivre();

             }


         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function deletePetitPropheteLivre()
     {
         if(adminLoggedIn())
         {

             if($this->input->is_ajax_request())
             {

                 $this->input->post('id',true);
                 $idPetitPropheteLivre = $this->input->post('text',true);


                 if(!empty($idPetitPropheteLivre))
                 {

                     $idPetitPropheteLivreDecrypt = $this->encryption->decrypt($idPetitPropheteLivre);

                     $imgPetitPropheteLivreToDel = $this->jeunesse_livre_petit->getImageById('file_jeunesse_livre_petit',array('id_jeunesse_livre_petit'=>$idPetitPropheteLivreDecrypt));

                     if(!empty($imgPetitPropheteLivreToDel) and count($imgPetitPropheteLivreToDel) == 1)
                     {
                         $realImage = $imgPetitPropheteLivreToDel[0]['file_jeunesse_livre_petit'];
                     }


                     $delPetitPropheteLivre = $this->jeunesse_livre_petit->delete(array('id_jeunesse_livre_petit'=>$idPetitPropheteLivreDecrypt));


                     if($delPetitPropheteLivre)
                     {

                         if(!empty($realImage) and isset($realImage))
                         {
                             $path = realpath(APPPATH.'../assets/jeunesse/livre/petit/');

                             if(file_exists($path.'/'.$realImage))
                             {
                                 unlink($path.'/'.$realImage);
                             }

                         }

                     }


                 }

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }



     /**
      * history for the command
      */

     public function historyCommand()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'liste des commandes';
             $data['menu'] = array('Consultation des commandes');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/boutique/commande/history_command',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }

     }

    /**
     * check list of command
     */
     public function checkListHistoryCommand()
     {
         $query = '';

         if ($this->input->is_ajax_request()) {

             $query = $this->input->post('query', true);

         }

         $data_command = $this->command->searchQueryData($query,'id','code','status','created_at');

        // var_dump($data_command); die();

         ?>
         <table style="padding: 10px;" id="member_table" class="table table-bordered table-responsive">
         <thead>
         <tr>
             <th>Date & Heure</th>
             <th>Code</th>
             <th>Etat</th>
             <th style="text-align: center" rowspan="2">Actions</th>
         </tr>
         </thead>
         <tbody>

         <?php
         if ($data_command->num_rows() > 0):
             foreach ($data_command->result() as $row):
                 ?>
                 <tr>
                     <td><?php echo $row->created_at ?></td>
                     <td><?php echo $row->code  ?></td>
                     <td><?php  if($row->status == 0){statusFailed('Annulée');}elseif ($row->status == 1){statusSuccess('Validée');}?></td>
                     <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/detailsCommand/'.$row->id ) ?>">Facture</a></td>
                     <td style="text-align: center"><a id="deleteHistoryCommandInfo" class="btn btn-adn" href="javascript:void(0)" data-id="<?php echo $row->id ?>" data-text="<?php echo $this->encryption->encrypt($row->id) ?>">Suprimer</a></td>
                 </tr>
             <?php
             endforeach;
         else:
             ?>

             <tr>
                 <td colspan="8" style="text-align: center">Aucune donnée trouvée</td>
             </tr>
             </tbody>
             </table>

         <?php
         endif;
     }



     public function deleteHistoryCommand()
     {
         if(adminLoggedIn())
         {

             if($this->input->is_ajax_request())
             {

                 $this->input->post('id',true);
                 $idCommand = $this->input->post('text',true);


                 if(!empty($idCommand))
                 {

                     $idCommandDecrypt = $this->encryption->decrypt($idCommand);


                     $delCommand =  $this->command->delete(array('id'=>$idCommandDecrypt));


                     if($delCommand)
                     {

                         echo 'ok';

                     }else{

                         echo 'non ok';

                     }


                 }

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }


     /**
      * details command
      */

     public function detailsCommand($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {


                 /**
                  * get the code command according to the id command
                  */
                 $codeCommand = $this->command->getImageById('code',array('id'=>$id));
                 /**
                  * get the code command in the array according to the id command
                  */
                 $data['codeCommand'] = $this->command->getImageById('code',array('id'=>$id));


                 /**
                  *  get the id client from the id command
                  */
                 $getIdclientfromCommand = $this->command->getImageById('client_id',array('id'=>$id));


                 /**
                  * information about the page
                  */
                 $data['titre'] = 'Details de la commande '.$codeCommand[0]['code'];
                 $data['menu'] = array('Historiques','commandes');


                 /**
                  * informations about the current clients
                  */
                 $data['infoClient'] = $this->clients->checkDataByKey($getIdclientfromCommand[0]['client_id'],'id');

                 /**
                  * get the last adresse entered by the current client
                  */
                 $data['lastAdress'] = $this->address_client->getLastAdress();

                 /**
                  * get the total amount  of the cart according to the current clients
                  */
                 $data['total_amount'] = $this->total_amount->readWhere('*',array('command_id'=>$id));

                 /**
                  * get the list of items of the cart
                  */
                 $data['infoItems'] = $this->details_commands->readWhere('nom_article,prix_article,qty_article',array('id_commande'=>$id));


                  $data['date'] = date('d-m-Y');

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/boutique/commande/details_command',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');


             }


         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }


     }



    /**
     * generated pdf invoices
     */

     public function pdf()
     {
          echo 'affichage de pdf';
     }



     /**
      * histoty for invoices
      */

     public function historyInvoice()
     {

         if (adminLoggedIn()) {

             $data['titre'] = 'Factures';
             $data['menu'] = array('Consultation des factures');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/boutique/facture/history_invoice',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }


     /**
      * details for invoice
      */

     public function checkListHistoryInvoice()
     {

         $query = '';

         if ($this->input->is_ajax_request()) {

             $query = $this->input->post('query', true);

         }

         $data_factures = $this->facture->searchQueryData($query,'id','code','status','created_at');

         // var_dump($data_factures); die();

         ?>
         <table style="padding: 10px;" id="member_table" class="table table-bordered table-responsive">
         <thead>
         <tr>
             <th>Date & Heure</th>
             <th>Code</th>
             <th>Emission</th>
             <th>Etat</th>
             <th>Mode de paiement</th>
             <th>Montant</th>
             <th style="text-align: center" rowspan="2">Actions</th>
         </tr>
         </thead>
         <tbody>

         <?php
         if ($data_factures->num_rows() > 0):
             foreach ($data_factures->result() as $row):
                 ?>
                 <tr>
                     <td><?php echo $row->created_at ?></td>
                     <td><?php echo $row->code  ?></td>
                     <td><?php  if($row->status == 0){statusSuccess('Annulée');}?></td>
                     <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/detailsCommand/'.$row->id ) ?>">facture</a></td>
                     <!-- <td style="text-align: center"><a id="delHistoryCommand" class="btn btn-adn" href="javascript:void(0)" data-id="<?php //echo $row->id ?>" data-text="<?php //echo $this->encryption->encrypt($row->id) ?>">Suprimer</a></td>-->
                 </tr>
             <?php
             endforeach;
         else:
             ?>

             <tr>
                 <td colspan="8" style="text-align: center">Aucune donnée trouvée</td>
             </tr>
             </tbody>
             </table>

         <?php
         endif;

     }


     /**
      * history of transaction
      */

     public function transactions()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Factures';
             $data['menu'] = array('Consultation des factures');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/boutique/transaction/history',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }


     /**
      * check inside history transaction
      */

     public function checkListHistoryTransaction()
     {
             // dataBase : 'transaction'

         $query = '';

         if ($this->input->is_ajax_request()) {

             $query = $this->input->post('query', true);

         }

         $data_history_payement = $this->transaction->searchQueryData($query,'id','order_id','status_id','created_at');

         // var_dump($data_factures); die();

         ?>
         <table style="padding: 10px;" id="member_table" class="table table-bordered table-responsive">
         <thead>
         <tr>
             <th>Date & Heure</th>
             <th>Order ID</th>
             <th>statut</th>
             <th>transactionID</th>
             <th>transactionA</th>
             <th>currency</th>
          <!--<th>paid_transaction</th>
             <th>paid_currency</th>-->
             <th>moyen de paiement</th>
         </tr>
         </thead>
         <tbody>

         <?php
         if ($data_history_payement->num_rows() > 0):
             foreach ($data_history_payement->result() as $row):
                 ?>
                 <tr>
                     <td><?php echo $row->created_at ?></td>
                     <td><?php echo $row->order_id  ?></td>
                     <td><?php  if($row->status_id == 0){statusSuccess('Annulée');}elseif ($row->status_id == 1){statusSuccess('validé');}?></td>
                     <td><?php echo $row->transaction_id  ?></td>
                     <td><?php echo $row->transaction_amount  ?></td>
                     <td><?php echo $row->currency  ?></td>
                     <td><?php echo $row->wallet  ?></td>
                     <!-- <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/detailsCommand/'.$row->id ) ?>">facture</a></td>-->
                     <!-- <td style="text-align: center"><a id="delHistoryCommand" class="btn btn-adn" href="javascript:void(0)" data-id="<?php //echo $row->id ?>" data-text="<?php //echo $this->encryption->encrypt($row->id) ?>">Suprimer</a></td>-->
                 </tr>
             <?php
             endforeach;
         else:
             ?>

             <tr>
                 <td colspan="8" style="text-align: center">Aucune donnée trouvée</td>
             </tr>
             </tbody>
             </table>

         <?php
         endif;
     }




    /**
     * interface echange page -> ecoute
     */

     public function newEchangeEcouteContent()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter du contenu';
             $data['menu'] = array('Echange','Ecoute');

             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/echange/ecoute/newContent',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function addEchangeEcouteContent()
     {

         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/echange/ecoute/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg|png';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);

             if(!$this->upload->do_upload('img'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_interface_echange_ecoute',$error);
                 $this->newPetitPropheteLivre();

             }else{

                 $fileName = $this->upload->data();
                 $data['addEchangeEcouteFileName'] = $fileName['file_name'];
                 $data['addEchangeEcouteTitle'] = $this->input->post('titre',true);
                 $data['addEchangeEcouteTextOne'] = $this->input->post('texte1',true);
                 $data['addEchangeEcouteTextTwo'] = $this->input->post('texte2',true);
                 $data['addEchangeEcouteStatus'] = $this->input->post('status',true);

             }


             $dataEchangeEcoute =  array(

                     'titre_echange_ecoute'=>$data['addEchangeEcouteTitle'],
                     'paragraph1_echange_ecoute'=>$data['addEchangeEcouteTextOne'],
                     'paragraph2_echange_ecoute'=>$data['addEchangeEcouteTextTwo'],
                     'file_echange_ecoute'=>$data['addEchangeEcouteFileName'],
                     'status_echange_ecoute'=>$data['addEchangeEcouteStatus'],
                     'created_by_echange_ecoute'=> getAdminId()
             );


            // var_dump($dataEchangeEcoute); die();


             $checkDataEchangeEcoute = $this->echange_ecoute->checkUser($dataEchangeEcoute);


             if(count($checkDataEchangeEcoute) == 1)
             {



                 $this->session->set_flashdata('error_interface_echange_ecoute', 'Ces données existent en base!');
                 $this->newEchangeEcouteContent();



             }else{

                 $insertDataEchangeEcoute = $this->echange_ecoute->create($dataEchangeEcoute);

                 if($insertDataEchangeEcoute)
                 {

                     $this->session->set_flashdata('success_interface_echange_ecoute', 'Enregistrement effectué');
                     $this->newEchangeEcouteContent();

                 }else{

                     $this->session->set_flashdata('error_interface_echange_ecoute', 'Enregistrement non effectué');
                     $this->newEchangeEcouteContent();

                 }



             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }

     }

     public function getEchangeEcouteContent()
     {

         if (adminLoggedIn()) {

             $data['allEchangeEcoute'] = $this->echange_ecoute->read();
             $data['titre'] = 'liste des contenus';
             $data['menu'] = array('Echange','Ecoute');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/echange/ecoute/getContent',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }

     }

     public function editEchangeEcouteContent($id)
     {

         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier un contenu';
                 $data['menu'] = array('Echange','Ecoute');

                 $data['editEchangeEcoute'] = $this->echange_ecoute->checkDataByKey($id,'id_echange_ecoute');

                 if (count($data['editEchangeEcoute']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/echange/ecoute/editContent',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }

     }

     public function upDateEchangeEcouteContent()
     {

         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/echange/ecoute/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg|png';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);

             if(!$this->upload->do_upload('editImage'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_get_echange_ecoute',$error);
                 $this->getEchangeEcouteContent();

             }else{

                 $fileName = $this->upload->data();
                 $data['upDateEchangeEcouteFileName'] = $fileName['file_name'];
                 $data['upDateEchangeEcouteTitle'] = $this->input->post('editTitre',true);
                 $data['upDateEchangeEcouteTextOne'] = $this->input->post('editTexte1',true);
                 $data['upDateEchangeEcouteTextTwo'] = $this->input->post('editTexte2',true);
                 $data['upDateEchangeEcouteStatus'] = $this->input->post('editStatus',true);

                 $idEchangeEcoute = $this->input->post('idEchangeEcouteUpDate',true);
                 $oldImageEchangeEcoute = $this->input->post('oldImageUpdate',true);

             }


             $dataEchangeEcoute =  array(

                 'titre_echange_ecoute'=>$data['upDateEchangeEcouteTitle'],
                 'paragraph1_echange_ecoute'=>$data['upDateEchangeEcouteTextOne'],
                 'paragraph2_echange_ecoute'=>$data['upDateEchangeEcouteTextTwo'],
                 'file_echange_ecoute'=>$data['upDateEchangeEcouteFileName'],
                 'status_echange_ecoute'=>$data['upDateEchangeEcouteStatus'],
                 'modified_at_echange_ecoute'=> date('Y-m-d h:s:i'),
                 'modified_by_echange_ecoute'=> getAdminId()
             );

             $upDateDataEchangeEcoute = $this->echange_ecoute->update(array('id_echange_ecoute'=>$idEchangeEcoute),$dataEchangeEcoute);


             if($upDateDataEchangeEcoute)
             {



                 if(!empty($data['upDateEchangeEcouteFileName']) and isset($data['upDateEchangeEcouteFileName']))
                 {

                     if(file_exists($path.'/'.$oldImageEchangeEcoute))
                     {
                         unlink($path.'/'.$oldImageEchangeEcoute);

                         $this->session->set_flashdata('success_get_echange_ecoute', 'Modification effectuée');
                         $this->getEchangeEcouteContent();
                     }

                 }



             }else{

                 $this->session->set_flashdata('error_get_echange_ecoute', 'Modification échouée');
                 $this->getEchangeEcouteContent();

             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }

     }

     public function deleteEchangeEcouteContent()
     {

     }

     /**
      * prophete Musique petit
      */


     public function newPetitPropheteMusique()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter du contenu';
             $data['menu'] = array('Jeunesse','nos petits prphètes','musique');

             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/petit/musique/newMusique',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function addPetitPropheteMusique()
     {

         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/jeunesse/musique/petit/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'mp3';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);



             if(!$this->upload->do_upload('audio'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_new_jeunesse_petit_musique',$error);
                 $this->newPetitPropheteMusique();

             }else{

                 $fileName = $this->upload->data();
                 $data['addPetitMusiqueFileName'] = $fileName['file_name'];
                 $data['addPetitMusiqueTitle'] = $this->input->post('title',true);
                 $data['addPetitMusiqueStatus'] = $this->input->post('status',true);

             }


             $dataMusiquePetit =  array(

                 'title_jeunesse_musique_petit'=>$data['addPetitMusiqueTitle'],
                 'file_jeunesse_musique_petit'=>$data['addPetitMusiqueFileName'],
                 'status_jeunesse_musique_petit'=>$data['addPetitMusiqueStatus'],
                 'created_by_jeunesse_musique_petit'=> getAdminId()
             );


              //var_dump($dataMusiquePetit); die();


             $checkDataMusiquePetit = $this->musique_petit->checkUser($dataMusiquePetit);


             if(count($checkDataMusiquePetit) == 1)
             {



                 $this->session->set_flashdata('error_new_jeunesse_petit_musique', 'Ces données existent en base!');
                 $this->newPetitPropheteMusique();



             }else{

                 $insertDataMusiquePetit = $this->musique_petit->create($dataMusiquePetit);

                 if($insertDataMusiquePetit)
                 {

                     $this->session->set_flashdata('success_new_jeunesse_petit_musique', 'Enregistrement effectué');
                     $this->newPetitPropheteMusique();

                 }else{

                     $this->session->set_flashdata('error_new_jeunesse_petit_musique', 'Enregistrement non effectué');
                     $this->newPetitPropheteMusique();

                 }



             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function getPetitPropheteMusique()
     {

         if (adminLoggedIn()) {

             $data['allMusiquePetit'] = $this->musique_petit->read();
             $data['titre'] = 'liste des contenus';
             $data['menu'] = array('Jeunesse','nos petits prphètes','musique');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/jeunesse/petit/musique/getMusique',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editPetitPropheteMusique($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier un contenu';
                 $data['menu'] = array('Jeunesse','nos petits prphètes','musique');

                 $data['editMusiquePetit'] = $this->musique_petit->checkDataByKey($id,'id_jeunesse_musique_petit');

                 if (count($data['editMusiquePetit']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/jeunesse/petit/musique/editMusique',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function upDatePetitPropheteMusique()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/jeunesse/musique/petit/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'mp3';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);

             if(!$this->upload->do_upload('audio'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_get_jeunesse_musique_petit',$error);
                 $this->getPetitPropheteMusique();

             }else{

                 $fileName = $this->upload->data();
                 $data['upDateMusiquePetitFileName'] = $fileName['file_name'];
                 $data['upDateMusiquePetitTitle'] = $this->input->post('title',true);
                 $data['upDateMusiquePetitStatus'] = $this->input->post('status',true);

                 $idMusiquePetit = $this->input->post('idMusiquePetit',true);
                 $oldMusiquePetit = $this->input->post('oldMusiquePetit',true);

             }


             $dataUpdateMusiquePetit =  array(

                 'title_jeunesse_musique_petit'=>$data['upDateMusiquePetitTitle'],
                 'file_jeunesse_musique_petit'=>$data['upDateMusiquePetitFileName'],
                 'status_jeunesse_musique_petit'=>$data['upDateMusiquePetitStatus'],
                 'modified_at_jeunesse_musique_petit'=> date('Y-m-d h:s:i'),
                 'modified_by_jeunesse_musique_petit'=> getAdminId()
             );

             $upDateMusiquePetit = $this->musique_petit->update(array('id_jeunesse_musique_petit'=>$idMusiquePetit),$dataUpdateMusiquePetit);


             if($upDateMusiquePetit)
             {


                 if(!empty($data['upDateMusiquePetitFileName']) and isset($data['upDateMusiquePetitFileName']))
                 {

                     if(file_exists($path.'/'.$oldMusiquePetit))
                     {
                         unlink($path.'/'.$oldMusiquePetit);

                         $this->session->set_flashdata('success_get_jeunesse_musique_petit', 'Modification effectuée');
                         $this->getPetitPropheteMusique();
                     }

                 }



             }else{

                 $this->session->set_flashdata('error_get_jeunesse_musique_petit', 'Modification échouée');
                 $this->getPetitPropheteMusique();

             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function deletePetitPropheteMusique()
     {

     }


     /**
      * prophete Musique Grand
      */


    public function newGrandPropheteMusique()
    {

        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter du contenu';
            $data['menu'] = array('Jeunesse','nos Grands prphètes','musique');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/jeunesse/grand/musique/newMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }

    }

    public function addGrandPropheteMusique()
    {

        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/jeunesse/musique/grand/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);



            if(!$this->upload->do_upload('audio'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_jeunesse_grand_musique',$error);
                $this->newGrandPropheteMusique();

            }else{

                $fileName = $this->upload->data();
                $data['addGrandMusiqueFileName'] = $fileName['file_name'];
                $data['addGrandMusiqueTitle'] = $this->input->post('title',true);
                $data['addGrandMusiqueStatus'] = $this->input->post('status',true);

            }


            $dataMusiqueGrand =  array(

                'title_jeunesse_musique_grand'=>$data['addGrandMusiqueTitle'],
                'file_jeunesse_musique_grand'=>$data['addGrandMusiqueFileName'],
                'status_jeunesse_musique_grand'=>$data['addGrandMusiqueStatus'],
                'created_by_jeunesse_musique_grand'=> getAdminId()
            );


            //var_dump($dataMusiquePetit); die();


            $checkDataMusiqueGrand = $this->musique_grand->checkUser($dataMusiqueGrand);


            if(count($checkDataMusiqueGrand) == 1)
            {



                $this->session->set_flashdata('error_new_jeunesse_grand_musique', 'Ces données existent en base!');
                $this->newGrandPropheteMusique();



            }else{

                $insertDataMusiqueGrand = $this->musique_grand->create($dataMusiqueGrand);

                if($insertDataMusiqueGrand)
                {

                    $this->session->set_flashdata('success_new_jeunesse_grand_musique', 'Enregistrement effectué');
                    $this->newGrandPropheteMusique();

                }else{

                    $this->session->set_flashdata('error_new_jeunesse_grand_musique', 'Enregistrement non effectué');
                    $this->newGrandPropheteMusique();

                }



            }

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }

    }

    public function getGrandPropheteMusique()
    {

        if (adminLoggedIn()) {

            $data['allMusiqueGrand'] = $this->musique_grand->read();
            $data['titre'] = 'liste des contenus';
            $data['menu'] = array('Jeunesse','nos grands prphètes','musique');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/jeunesse/grand/musique/getMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editGrandPropheteMusique($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier un contenu';
                $data['menu'] = array('Jeunesse','nos grands prophètes','musique');

                $data['editMusiqueGrand'] = $this->musique_grand->checkDataByKey($id,'id_jeunesse_musique_grand');

                if (count($data['editMusiqueGrand']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/jeunesse/grand/musique/editMusique',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateGrandPropheteMusique()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/jeunesse/musique/grand/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('audio'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_jeunesse_musique_grand',$error);
                $this->getGrandPropheteMusique();

            }else{

                $fileName = $this->upload->data();
                $data['upDateMusiqueGrandFileName'] = $fileName['file_name'];
                $data['upDateMusiqueGrandTitle'] = $this->input->post('title',true);
                $data['upDateMusiqueGrandStatus'] = $this->input->post('status',true);

                $idMusiqueGrand = $this->input->post('idMusiqueGrand',true);
                $oldMusiqueGrand = $this->input->post('oldMusiqueGrand',true);

            }


            $dataUpdateMusiqueGrand =  array(

                'title_jeunesse_musique_grand'=>$data['upDateMusiqueGrandTitle'],
                'file_jeunesse_musique_grand'=>$data['upDateMusiqueGrandFileName'],
                'status_jeunesse_musique_grand'=>$data['upDateMusiqueGrandStatus'],
                'modified_at_jeunesse_musique_grand'=> date('Y-m-d h:s:i'),
                'modified_by_jeunesse_musique_grand'=> getAdminId()
            );

            $upDateMusiqueGrand = $this->musique_grand->update(array('id_jeunesse_musique_grand'=>$idMusiqueGrand),$dataUpdateMusiqueGrand);


            if($upDateMusiqueGrand)
            {


                if(!empty($data['upDateMusiqueGrandFileName']) and isset($data['upDateMusiqueGrandFileName']))
                {

                    if(file_exists($path.'/'.$oldMusiqueGrand))
                    {
                        unlink($path.'/'.$oldMusiqueGrand);

                        $this->session->set_flashdata('success_get_jeunesse_musique_grand', 'Modification effectuée');
                        $this->getGrandPropheteMusique();
                    }

                }


            }else{

                $this->session->set_flashdata('error_get_jeunesse_musique_grand', 'Modification échouée');
                $this->getGrandPropheteMusique();

            }

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function deleteGrandPropheteMusique()
    {

    }



    /**
     * Loisirs Musique
     */


    public function newLoisirsMusique()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'Ajouter du contenu';
            $data['menu'] = array('Loisirs','musique');

            $data['status'] = $this->status->read();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/loisirs/musique/newMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function addLoisirsMusique()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/loisirs/musique/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);



            if(!$this->upload->do_upload('audio'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_new_loisirs_musique',$error);
                $this->newLoisirsMusique();

            }else{

                $fileName = $this->upload->data();
                $data['addLoisirsMusiqueFileName'] = $fileName['file_name'];
                $data['addLoisirsMusiqueTitle'] = $this->input->post('title',true);
                $data['addLoisirsMusiqueStatus'] = $this->input->post('status',true);

            }


            $dataMusiqueLoisirs =  array(

                'title_loisirs_musique'=>$data['addLoisirsMusiqueTitle'],
                'file_loisirs_musique'=>$data['addLoisirsMusiqueFileName'],
                'status_loisirs_musique'=>$data['addLoisirsMusiqueStatus'],
                'created_by_loisirs_musique'=> getAdminId()
            );


            //var_dump($dataMusiqueLoisirs); die();


            $checkDataMusiqueLoisirs = $this->loisirs_musique->checkUser($dataMusiqueLoisirs);


            if(count($checkDataMusiqueLoisirs) == 1)
            {



                $this->session->set_flashdata('error_new_loisirs_musique', 'Ces données existent en base!');
                $this->newLoisirsMusique();



            }else{

                $insertDataMusiqueLoisirs = $this->loisirs_musique->create($dataMusiqueLoisirs);

                if($insertDataMusiqueLoisirs)
                {

                    $this->session->set_flashdata('success_new_loisirs_musique', 'Enregistrement effectué');
                    $this->newLoisirsMusique();

                }else{

                    $this->session->set_flashdata('error_new_loisirs_musique', 'Enregistrement non effectué');
                    $this->newLoisirsMusique();

                }



            }

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function getLoisirsMusique()
    {
        if (adminLoggedIn()) {

            $data['allLoisirsMusique'] = $this->loisirs_musique->read();
            $data['titre'] = 'liste des contenus';
            $data['menu'] = array('Loisirs','musique');

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/loisirs/musique/getMusique',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');


        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function editLoisirsMusique($id)
    {

        if (adminLoggedIn()) {

            if (isset($id)) {

                $data['status'] = $this->status->read();
                $data['titre'] = 'Modifier un contenu';
                $data['menu'] = array('Loisirs','musique');

                $data['editLoisirsMusique'] = $this->loisirs_musique->checkDataByKey($id,'id_loisirs_musique');

                if (count($data['editLoisirsMusique']) == 1) {

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/loisirs/musique/editMusique',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');

                }

            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function upDateLoisirsMusique()
    {
        if (adminLoggedIn()) {

            $path = realpath(APPPATH.'../assets/loisirs/musique/');

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp3';
            $config['remove_spaces'] = true;

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('audio'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_get_loisirs_musique',$error);
                $this->getLoisirsMusique();

            }else{

                $fileName = $this->upload->data();
                $data['upDateLoisirsMusiqueFileName'] = $fileName['file_name'];
                $data['upDateLoisirsMusiqueTitle'] = $this->input->post('title',true);
                $data['upDateLoisirsMusiqueStatus'] = $this->input->post('status',true);

                $idLoisirsMusique = $this->input->post('idLoisirsMusique',true);
                $oldLoisirsMusique = $this->input->post('oldLoisirsMusique',true);

            }


            $dataUpdateLoisirsMusique =  array(

                'title_loisirs_musique'=>$data['upDateLoisirsMusiqueTitle'],
                'file_loisirs_musique'=>$data['upDateLoisirsMusiqueFileName'],
                'status_loisirs_musique'=>$data['upDateLoisirsMusiqueStatus'],
                'modifed_at_loisirs_musique'=> date('Y-m-d h:s:i'),
                'modifeid_by_loisirs_musique'=> getAdminId()
            );

            $upDateLoisirsMusique = $this->loisirs_musique->update(array('id_loisirs_musique'=>$idLoisirsMusique),$dataUpdateLoisirsMusique);


            if($upDateLoisirsMusique)
            {


                if(!empty($data['upDateLoisirsMusiqueFileName']) and isset($data['upDateLoisirsMusiqueFileName']))
                {

                    if(file_exists($path.'/'.$oldLoisirsMusique))
                    {
                        unlink($path.'/'.$oldLoisirsMusique);

                        $this->session->set_flashdata('success_get_loisirs_musique', 'Modification effectuée');
                        $this->getLoisirsMusique();
                    }

                }


            }else{

                $this->session->set_flashdata('error_get_loisirs_musique', 'Modification échouée');
                $this->getLoisirsMusique();

            }

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function deleteLoisirsMusique()
    {

    }



    /**
     * Live chat
     */


    public function homeChat()
    {
        if (adminLoggedIn()) {

            $data['titre'] = 'liste des sujets de commentaires';
            $data['menu'] = array('Live chat');

            $data['sujets'] = $this->chat->readDistinct();

           // var_dump($data['sujets']); die();

            $this->load->view('backoffice/admin/header/header');
            $this->load->view('backoffice/admin/header/css');
            $this->load->view('backoffice/admin/header/navTop');
            $this->load->view('backoffice/admin/header/navLeft');
            $this->load->view('backoffice/chat/home',$data);
            $this->load->view('backoffice/admin/header/footer');
            $this->load->view('backoffice/admin/header/htmlClose');

        } else {


            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();


        }
    }

    public function treatementChat()
    {

    }

    public function chat($id)
    {
        if (adminLoggedIn()) {

            if (isset($id)) {

                     $data['titre'] ='live chat avec ('.$id.')';
                     $data['menu'] = array('Loisirs','musique');

                     $data['commentChat'] = $this->chat->read('*',array('email'=>$id));
                     $data['countMessage'] = $this->chat->compter('email',$id);


                     $data['clientAddress'] = $id;

                    $this->load->view('backoffice/admin/header/header');
                    $this->load->view('backoffice/admin/header/css');
                    $this->load->view('backoffice/admin/header/navTop');
                    $this->load->view('backoffice/admin/header/navLeft');
                    $this->load->view('backoffice/chat/chat',$data);
                    $this->load->view('backoffice/admin/header/footer');
                    $this->load->view('backoffice/admin/header/htmlClose');


            }

        } else {

            $this->session->set_flashdata('error', 'Connectez vous svp!');
            $this->login();

        }
    }

    public function sendChat()
    {
        if($this->input->is_ajax_request())
        {

             $data['addressClient'] = $this->input->post('address',true);
             $data['messageAdmin'] = $this->input->post('message',true);
             $data['etat'] = $this->input->post('status',true);



            $dataAdminChat = array(

                'email'=> $data['addressClient'],
                'message'=> $data['messageAdmin'],
                'etat'=> $data['etat'],
                'user_id' => getAdminId()
            );


            $insertDataAdminChat =  $this->chat->create($dataAdminChat);

            if($insertDataAdminChat)
            {

            }

        }
    }

    public function deleteChat()
    {
          // echo 'deleted identifier';

                 if (adminLoggedIn()) {

                            if ($this->input->is_ajax_request()) {

                                $this->input->post('id', true);
                                $idDelChatIdentifier = $this->input->post('text', true);


                                    $idDelChatIdentifierDecrypt = $this->encryption->decrypt($idDelChatIdentifier);

                                    $checkDelChatIdentifier = $this->chat->delete(array('id' => $idDelChatIdentifierDecrypt));

                                    if ($checkDelChatIdentifier) {

                                       echo 'success';

                                    }else{

                                        echo 'not deleted';
                                    }

                                }else{

                                    echo('not found');

                                }



                        } else {

                            $this->session->set_flashdata('error', 'Connectez vous svp!');
                            $this->login();

                        }
    }

    /**
     * Loisir Humour
     */

     public function newLoisirsHumour()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter du contenu';
             $data['menu'] = array('Loisirs','humour');

             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/loisirs/humour/newHumour',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function addLoisirsHumour()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/loisirs/humour/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);



             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_new_loisirs_humour',$error);
                 $this->newLoisirsHumour();

             }else{

                 $fileName = $this->upload->data();
                 $data['addLoisirsHumourFileName'] = $fileName['file_name'];
                 $data['addLoisirsHumourTheme'] = $this->input->post('theme',true);
                 $data['addLoisirsHumourDescribe'] = $this->input->post('describe',true);
                 $data['addLoisirsHumourStatus'] = $this->input->post('status',true);

             }


             $dataHumourLoisirs =  array(

                 'theme_loisirs_humour'=>$data['addLoisirsHumourTheme'],
                 'image_loisirs_humour'=>$data['addLoisirsHumourFileName'],
                 'description_loisirs_humour'=>$data['addLoisirsHumourDescribe'],
                 'status_loisirs_humour'=>$data['addLoisirsHumourStatus'],
                 'date_loisirs_humour'=> date('d-m-Y'),
                 'created_by_loisirs_humour'=> getAdminId()
             );


           //  var_dump($dataHumourLoisirs); die();


             $checkDataHumourLoisirs = $this->humour->checkUser($dataHumourLoisirs);


             if(count($checkDataHumourLoisirs) == 1)
             {



                 $this->session->set_flashdata('error_new_loisirs_humour', 'Ces données existent en base!');
                 $this->newLoisirsHumour();



             }else{

                 $insertDataHumourLoisirs = $this->humour->create($dataHumourLoisirs);

                 if($insertDataHumourLoisirs)
                 {

                     $this->session->set_flashdata('success_new_loisirs_humour', 'Enregistrement effectué');
                     $this->newLoisirsHumour();

                 }else{

                     $this->session->set_flashdata('error_new_loisirs_humour', 'Enregistrement non effectué');
                     $this->newLoisirsHumour();

                 }



             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function getLoisirsHumour()
     {
         if (adminLoggedIn()) {

             $data['allLoisirsHumour'] = $this->humour->read();
             $data['titre'] = 'liste des contenus';
             $data['menu'] = array('Loisirs','humour');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/loisirs/humour/getHumour',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editLoisirsHumour($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier un contenu';
                 $data['menu'] = array('Loisirs','humour');

                 $data['editLoisirsHumour'] = $this->humour->checkDataByKey($id,'id_loisirs_humour');

                 if (count($data['editLoisirsHumour']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/loisirs/humour/editHumour',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function upDateLoisirsHumour()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/loisirs/humour/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);

             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_get_loisirs_humour',$error);
                 $this->getLoisirsHumour();

             }else{

                 $fileName = $this->upload->data();
                 $data['upDateLoisirsHumourFileName'] = $fileName['file_name'];
                 $data['upDateLoisirsHumourTheme'] = $this->input->post('theme',true);
                 $data['upDateLoisirsHumourDescribe'] = $this->input->post('describe',true);
                 $data['upDateLoisirsHumourStatus'] = $this->input->post('status',true);

                 $idLoisirsHumour = $this->input->post('idLoisirsHumour',true);
                 $oldLoisirsHumour = $this->input->post('oldLoisirsHumour',true);

             }


             $dataUpdateLoisirsHumour =  array(

                 'theme_loisirs_humour'=>$data['upDateLoisirsHumourTheme'],
                 'image_loisirs_humour'=>$data['upDateLoisirsHumourFileName'],
                 'description_loisirs_humour'=>$data['upDateLoisirsHumourDescribe'],
                 'status_loisirs_humour'=>$data['upDateLoisirsHumourStatus'],
                 'modified_at_loisirs_humour'=> date('Y-m-d h:s:i'),
                 'modified_by_loisirs_humour'=> getAdminId()
             );

             $upDateLoisirsHumour = $this->humour->update(array('id_loisirs_humour'=>$idLoisirsHumour),$dataUpdateLoisirsHumour);


             if($upDateLoisirsHumour)
             {


                 if(!empty($data['upDateLoisirsHumourFileName']) and isset($data['upDateLoisirsHumourFileName']))
                 {

                     if(file_exists($path.'/'.$oldLoisirsHumour))
                     {
                         unlink($path.'/'.$oldLoisirsHumour);

                         $this->session->set_flashdata('success_get_loisirs_humour', 'Modification effectuée');
                         $this->getLoisirsHumour();
                     }

                 }


             }else{

                 $this->session->set_flashdata('error_get_loisirs_humour', 'Modification échouée');
                 $this->getLoisirsHumour();

             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function deleteLoisirsHumour()
     {

     }


     /**
      * Bien être
      */


     public function newLoisirsBienEtre()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter du contenu';
             $data['menu'] = array('Loisirs','bien-être');

             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/loisirs/bien-etre/newBien-etre',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function addLoisirsBienEtre()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/loisirs/bien-etre/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);



             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_new_loisirs_bien_etre',$error);
                 $this->newLoisirsBienEtre();

             }else{

                 $fileName = $this->upload->data();
                 $data['addLoisirsBienEtreFileName'] = $fileName['file_name'];
                 $data['addLoisirsBienEtreTheme'] = $this->input->post('theme',true);
                 $data['addLoisirsBienEtreDescribe'] = $this->input->post('describe',true);
                 $data['addLoisirsBienEtreStatus'] = $this->input->post('status',true);

             }


             $dataBienEtreLoisirs =  array(

                 'theme_loisirs_bien_etre'=>$data['addLoisirsBienEtreTheme'],
                 'image_loisirs_bien_etre'=>$data['addLoisirsBienEtreFileName'],
                 'description_loisirs_bien_etre'=>$data['addLoisirsBienEtreDescribe'],
                 'status_loisirs_bien_etre'=>$data['addLoisirsBienEtreStatus'],
                 'date_loisirs_bien_etre'=> date('d-m-Y'),
                 'created_by_loisirs_bien_etre'=> getAdminId()
             );


            // var_dump($dataBienEtreLoisirs); die();


             $checkDataBienEtreLoisirs = $this->bien_etre->checkUser($dataBienEtreLoisirs);


             if(count($checkDataBienEtreLoisirs) == 1)
             {

                 $this->session->set_flashdata('error_new_loisirs_bien_etre', 'Ces données existent en base!');
                 $this->newLoisirsBienEtre();

             }else{

                 $insertDataBienEtreLoisirs = $this->bien_etre->create($dataBienEtreLoisirs);

                 if($insertDataBienEtreLoisirs)
                 {

                     $this->session->set_flashdata('success_new_loisirs_bien_etre', 'Enregistrement effectué');
                     $this->newLoisirsBienEtre();

                 }else{

                     $this->session->set_flashdata('error_new_loisirs_bien_etre', 'Enregistrement non effectué');
                     $this->newLoisirsBienEtre();

                 }



             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function getLoisirsBienEtre()
     {
         if (adminLoggedIn()) {

             $data['allLoisirsBienEtre'] = $this->bien_etre->read();
             $data['titre'] = 'liste des contenus';
             $data['menu'] = array('Loisirs','bien-être');

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/loisirs/bien-etre/getBien-etre',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');


         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editLoisirsBienEtre($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier un contenu';
                 $data['menu'] = array('Loisirs','bien-être');

                 $data['editLoisirsBienEtre'] = $this->bien_etre->checkDataByKey($id,'id_loisirs_bien_etre');

                 if (count($data['editLoisirsBienEtre']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/loisirs/bien-etre/editBien-etre',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function upDateLoisirsBienEtre()
     {

         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/loisirs/bien-etre/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);

             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_get_loisirs_bien_etre',$error);
                 $this->getLoisirsBienEtre();

             }else{

                 $fileName = $this->upload->data();
                 $data['upDateLoisirsBienEtreFileName'] = $fileName['file_name'];
                 $data['upDateLoisirsBienEtreTheme'] = $this->input->post('theme',true);
                 $data['upDateLoisirsBienEtreDescribe'] = $this->input->post('describe',true);
                 $data['upDateLoisirsBienEtreStatus'] = $this->input->post('status',true);

                 $idLoisirsBienEtre = $this->input->post('idLoisirsBienEtre',true);
                 $oldLoisirsBienEtre = $this->input->post('oldLoisirsBienEtre',true);

             }


             $dataUpdateLoisirsBienEtre =  array(

                 'theme_loisirs_bien_etre'=>$data['upDateLoisirsBienEtreTheme'],
                 'image_loisirs_bien_etre'=>$data['upDateLoisirsBienEtreFileName'],
                 'description_loisirs_bien_etre'=>$data['upDateLoisirsBienEtreDescribe'],
                 'status_loisirs_bien_etre'=>$data['upDateLoisirsBienEtreStatus'],
                 'modified_at_loisirs_bien_etre'=> date('Y-m-d h:s:i'),
                 'modified_by_loisirs_bien_etre'=> getAdminId()
             );

             $upDateLoisirsBienEtre = $this->bien_etre->update(array('id_loisirs_bien_etre'=>$idLoisirsBienEtre),$dataUpdateLoisirsBienEtre);


             if($upDateLoisirsBienEtre)
             {


                 if(!empty($data['upDateLoisirsBienEtreFileName']) and isset($data['upDateLoisirsBienEtreFileName']))
                 {

                     if(file_exists($path.'/'.$oldLoisirsBienEtre))
                     {
                         unlink($path.'/'.$oldLoisirsBienEtre);

                         $this->session->set_flashdata('success_get_loisirs_bien_etre', 'Modification effectuée');
                         $this->getLoisirsBienEtre();
                     }

                 }


             }else{

                 $this->session->set_flashdata('error_get_loisirs_bien_etre', 'Modification échouée');
                 $this->getLoisirsBienEtre();

             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }

     }

     public function deleteLoisirsBienEtre()
     {

     }


     /**
      * Loisirs Annonce
      */


     public function newLoisirsAnnonce()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter du contenu';
             $data['menu'] = array('Loisirs','petites annonces');

             $data['status'] = $this->status->read();
             $data['month'] = $this->month->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/loisirs/annonces/newAnnonce',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function addLoisirsAnnonce()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/loisirs/annonce/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);



             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_new_loisirs_annonce',$error);
                 $this->newLoisirsAnnonce();

             }else{

                 $fileName = $this->upload->data();
                 $data['addLoisirsAnnonceFileName'] = $fileName['file_name'];
                 $data['addLoisirsAnnonceTheme'] = $this->input->post('theme',true);
                 $data['addLoisirsAnnonceDomain'] = $this->input->post('domain',true);
                 $data['addLoisirsAnnonceStructure'] = $this->input->post('structure',true);
                 $data['addLoisirsAnnonceDescribe'] = $this->input->post('describe',true);
                 $data['addLoisirsAnnonceDay'] = $this->input->post('day',true);
                 $data['addLoisirsAnnonceMonth'] = $this->input->post('month',true);
                 $data['addLoisirsAnnonceStatus'] = $this->input->post('status',true);

             }


             $dataAnnonceLoisirs =  array(

                 'theme_loisirs_annonce'=>$data['addLoisirsAnnonceTheme'],
                 'image_loisirs_annonce'=>$data['addLoisirsAnnonceFileName'],
                 'domaine_loisirs_annonce'=>$data['addLoisirsAnnonceDomain'],
                 'structure_loisirs_annonce'=>$data['addLoisirsAnnonceStructure'],
                 'jour_loisirs_annonce'=>$data['addLoisirsAnnonceDay'],
                 'mois_loisirs_annonce'=>$data['addLoisirsAnnonceMonth'],
                 'description_loisirs_annonce'=>$data['addLoisirsAnnonceDescribe'],
                 'status_loisirs_annonce'=>$data['addLoisirsAnnonceStatus'],
                 'created_by_loisirs_annonce'=> getAdminId()
             );


             // var_dump($dataAnnonceLoisirs); die();


             $checkDataAnnonceLoisirs = $this->annonce->checkUser($dataAnnonceLoisirs);


             if(count($checkDataAnnonceLoisirs) == 1)
             {

                 $this->session->set_flashdata('error_new_loisirs_annonce', 'Ces données existent en base!');
                 $this->newLoisirsAnnonce();

             }else{

                 $insertDataAnnonceLoisirs = $this->annonce->create($dataAnnonceLoisirs);

                 if($insertDataAnnonceLoisirs)
                 {

                     $this->session->set_flashdata('success_new_loisirs_annonce', 'Enregistrement effectué');
                     $this->newLoisirsAnnonce();

                 }else{

                     $this->session->set_flashdata('error_new_loisirs_annonce', 'Enregistrement non effectué');
                     $this->newLoisirsAnnonce();

                 }



             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function getLoisirsAnnonce()
     {
         if (adminLoggedIn()) {

             $data['allLoisirsAnnonce'] = $this->annonce->read();
             $data['titre'] = 'liste des contenus';
             $data['menu'] = array('Loisirs','petites annonces');

             $data['month'] = $this->month->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/loisirs/annonces/getAnnonce',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');



         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editLoisirsAnnonce($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Modifier un contenu';
                 $data['menu'] = array('Loisirs','petites annonces');
                 $data['month'] = $this->month->read();

                 $data['editLoisirsAnnonce'] = $this->annonce->checkDataByKey($id,'id_loisirs_annonce');

                 if (count($data['editLoisirsAnnonce']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/loisirs/annonces/editAnnonce',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function updateLoisirsAnnonce()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/loisirs/annonce/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);

             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_get_loisirs_annonce',$error);
                 $this->getLoisirsAnnonce();

             }else{

                 $fileName = $this->upload->data();
                 $data['upDateLoisirsAnnonceFileName'] = $fileName['file_name'];
                 $data['upDateLoisirsAnnonceTheme'] = $this->input->post('theme',true);
                 $data['upDateLoisirsAnnonceDomain'] = $this->input->post('domain',true);
                 $data['upDateLoisirsAnnonceStructure'] = $this->input->post('structure',true);
                 $data['upDateLoisirsAnnonceDescribe'] = $this->input->post('describe',true);
                 $data['upDateLoisirsAnnonceDay'] = $this->input->post('day',true);
                 $data['upDateLoisirsAnnonceMonth'] = $this->input->post('month',true);
                 $data['upDateLoisirsAnnonceStatus'] = $this->input->post('status',true);

                 $idLoisirsAnnonce = $this->input->post('idLoisirsAnnonce',true);
                 $oldLoisirsAnnonce = $this->input->post('oldLoisirsAnnonce',true);

             }


             $dataUpdateLoisirsAnnonce =  array(

                 'theme_loisirs_annonce'=>$data['upDateLoisirsAnnonceTheme'],
                 'image_loisirs_annonce'=>$data['upDateLoisirsAnnonceFileName'],
                 'domaine_loisirs_annonce'=>$data['upDateLoisirsAnnonceDomain'],
                 'structure_loisirs_annonce'=>$data['upDateLoisirsAnnonceStructure'],
                 'jour_loisirs_annonce'=>$data['upDateLoisirsAnnonceDay'],
                 'mois_loisirs_annonce'=>$data['upDateLoisirsAnnonceMonth'],
                 'description_loisirs_annonce'=>$data['upDateLoisirsAnnonceDescribe'],
                 'modified_at_loisirs_annonce'=> date('Y-m-d h:s:i'),
                 'modified_by_loisirs_annonce'=> getAdminId()
             );

             $upDateLoisirsAnnonce = $this->bien_etre->update(array('id_loisirs_annonce'=>$idLoisirsAnnonce),$dataUpdateLoisirsAnnonce);


             if($upDateLoisirsAnnonce)
             {


                 if(!empty($data['upDateLoisirsAnnonceFileName']) and isset($data['upDateLoisirsAnnonceFileName']))
                 {

                     if(file_exists($path.'/'.$oldLoisirsAnnonce))
                     {
                         unlink($path.'/'.$oldLoisirsAnnonce);

                         $this->session->set_flashdata('success_get_loisirs_annonce', 'Modification effectuée');
                         $this->getLoisirsAnnonce();
                     }

                 }


             }else{

                 $this->session->set_flashdata('error_get_loisirs_annonce', 'Modification échouée');
                 $this->getLoisirsAnnonce();

             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function deleteLoisirsAnnonce()
     {

     }

     /*=========== contact ============*/

     public function newContactService()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter un contact';
             $data['menu'] = array('Boutique','Contacts');

             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/boutique/contact/newContact',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function addContactService()
     {

        // number_service
         if (adminLoggedIn()) {

                 $data['addNumber'] = $this->input->post('number',true);
                 $data['addStatus'] = $this->input->post('status',true);


             $dataContactService =  array(

                 'number'=>$data['addNumber'],
                 'status'=>$data['addStatus']
             );


             $checkDataContactService = $this->number_service->checkUser($dataContactService);


             if(count($checkDataContactService) == 1)
             {

                 $this->session->set_flashdata('error_new_contact_service', 'Ces données existent en base!');
                 $this->newContactService();

             }else{

                 $insertDataContactService = $this->number_service->create($dataContactService);

                 if($insertDataContactService)
                 {

                     $this->session->set_flashdata('success_new_contact_service', 'Enregistrement effectué');
                     $this->newContactService();

                 }else{

                     $this->session->set_flashdata('error_new_contact_service', 'Enregistrement non effectué');
                     $this->newContactService();

                 }

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function getContactService()
     {
         if (adminLoggedIn()) {

             $data['allContactService'] = $this->number_service->read();
             $data['titre'] = 'Liste des contacts';
             $data['menu'] = array('Boutique','Contacts');


             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/boutique/contact/getContact',$data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');



         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editContactService($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Liste des contacts';
                 $data['menu'] = array('Boutique','Contacts');

                 $data['editContactService'] = $this->number_service->checkDataByKey($id,'id');

                 if (count($data['editContactService']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/boutique/contact/editContact',$data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function updateContactService()
     {

         if (adminLoggedIn()) {


                 $data['upDateContactServiceNumber'] = $this->input->post('number',true);
                 $data['upDateContactServiceStatus'] = $this->input->post('status',true);

                 $idContactService = $this->input->post('idContactService',true);


             $dataUpdateContactService =  array(

                 'number'=>$data['upDateContactServiceNumber'],
                 'status'=>$data['upDateContactServiceStatus']
             );

            // var_dump($dataUpdateContactService); die();

             $upDateContactService = $this->number_service->update(array('id'=>$idContactService),$dataUpdateContactService);


             if($upDateContactService)
             {
                 $this->session->set_flashdata('success_get_contact_service', 'Modification effectuée');
                 $this->getContactService();
             }else{

                 $this->session->set_flashdata('error_get_contact_service', 'Modification échouée');
                 $this->getContactService();

             }

              }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();
         }

     }

     public function deleteContactService()
     {
         if (adminLoggedIn()) {

             if ($this->input->is_ajax_request()) {

                 $this->input->post('id', true);
                 $idDelContactService = $this->input->post('text', true);


                 $idDelContactServiceDecrypt = $this->encryption->decrypt($idDelContactService);

                 $checkDelContactService = $this->number_service->delete(array('id' => $idDelContactServiceDecrypt));

                 if ($checkDelContactService) {

                     echo 'success';

                 }else{

                     echo 'not deleted';
                 }

             }else{

                 echo('not found');

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }




     /* slide programmable */


     public function newSlide()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter un slide';
             $data['menu'] = array('Gestion des slides');

             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/slides/newSlide', $data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function addSlide()
     {
        // echo 'propre';

         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/slide/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);



             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_new_slide',$error);
                 $this->newSlide();

             }else{

                 $fileName = $this->upload->data();
                 $data['addFileName'] = $fileName['file_name'];
                 $data['addSlideType'] = $this->input->post('slide',true);
                 $data['addDate'] = $this->input->post('date',true);
                 $data['addTextOne'] = $this->input->post('texte1',true);
                 $data['addTextTwo'] = $this->input->post('texte2',true);
                 $data['addReference'] = $this->input->post('reference',true);
                 $data['addStatus'] = $this->input->post('status',true);

             }


             $dataSlide =  array(

                 'type'=>$data['addSlideType'],
                 'file'=>$data['addFileName'],
                 'text1'=>$data['addTextOne'],
                 'text2'=>$data['addTextTwo'],
                 'reference'=>$data['addReference'],
                 'date'=>$data['addDate'],
                 'status'=>$data['addStatus']

             );

             //var_dump($dataSlide); die();

             $checkDataSlide = $this->slide->checkUser($dataSlide);


             if(count($checkDataSlide) == 1)
             {

                 $this->session->set_flashdata('error_new_slide', 'Ces données existent en base!');
                 $this->newSlide();

             }else{

                 $insertDataSlide = $this->slide->create($dataSlide);

                 if($insertDataSlide)
                 {

                     $this->session->set_flashdata('success_new_slide', 'Enregistrement effectué');
                     $this->newSlide();

                 }else{

                     $this->session->set_flashdata('error_new_loisirs_annonce', 'Enregistrement non effectué');
                     $this->newSlide();

                 }



             }

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function getSlide()
     {
         if (adminLoggedIn()) {

             $data['allSlides'] = $this->slide->read();
             $data['titre'] = 'Liste des slides';
             $data['menu'] = array('Gestion des slides');


             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/slides/getSlide', $data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function editSlide($id)
     {
         if (adminLoggedIn()) {

             if (isset($id)) {

                 $data['status'] = $this->status->read();
                 $data['titre'] = 'Ajouter un slide';
                 $data['menu'] = array('Gestion des slides');

                 $data['editSlide'] = $this->slide->checkDataByKey($id,'id');

                 if (count($data['editSlide']) == 1) {

                     $this->load->view('backoffice/admin/header/header');
                     $this->load->view('backoffice/admin/header/css');
                     $this->load->view('backoffice/admin/header/navTop');
                     $this->load->view('backoffice/admin/header/navLeft');
                     $this->load->view('backoffice/slides/editSlide', $data);
                     $this->load->view('backoffice/admin/header/footer');
                     $this->load->view('backoffice/admin/header/htmlClose');

                 }

             }

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function updateSlide()
     {
         if (adminLoggedIn()) {

             $data['upDateSlideStatus'] = $this->input->post('status',true);

             $idSlide = $this->input->post('idSlideUpDate',true);


             $dataUpdateSlide =  array(

                 'status'=>$data['upDateSlideStatus']
             );


             $upDateSlide = $this->slide->update(array('id'=>$idSlide),$dataUpdateSlide);


             if($upDateSlide)
             {
                 $this->session->set_flashdata('success_get_slide', 'Modification effectuée');
                 $this->getSlide();

             }else{

                 $this->session->set_flashdata('error_get_slide', 'Modification échouée');
                 $this->getSlide();

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();
         }

     }

     public function changeSlideStatus()
     {
         if (adminLoggedIn()) {

             if ($this->input->is_ajax_request()) {

                 $status =  $this->input->post('status', true);

                 $idText = $this->input->post('text', true);

                 if (!empty($idText)) {

                     $idTextDecrypt = $this->encryption->decrypt($idText);

                     if($status == 1)
                     {
                         $dataStatus = array('status'=>0);

                     }elseif ($status == 0)
                     {
                         $dataStatus = array('status'=>1);

                     }else{

                         return false;

                     }

                     $updateStatus =  $this->slide->update(array('id' => $idTextDecrypt), $dataStatus);

                     if($updateStatus)

                     {

                         return true;

                     }else{

                         return false;
                     }

                 }
             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }

     }


     public function deleteSlide()
     {
         if(adminLoggedIn())
         {

             if($this->input->is_ajax_request())
             {

                 $this->input->post('id',true);
                 $idSlide = $this->input->post('text',true);


                 if(!empty($idSlide))
                 {

                     $idSlideDecrypt = $this->encryption->decrypt($idSlide);

                     $imgSlideToDel = $this->slide->getImageById('file',array('id'=>$idSlideDecrypt));

                     if(!empty($imgSlideToDel) and count($imgSlideToDel) == 1)
                     {
                         $realImage = $imgSlideToDel[0]['file'];
                     }


                     $delSlide =  $this->slide->delete(array('id'=>$idSlideDecrypt));


                     if($delSlide)
                     {

                         if(!empty($realImage) and isset($realImage))
                         {
                             $path = realpath(APPPATH.'../assets/slide/');

                             if(file_exists($path.'/'.$realImage))
                             {
                                 unlink($path.'/'.$realImage);
                             }

                         }

                     }


                 }

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }


    /**==== A propos de l'intuition ====*/

     public function newIntuition()
     {
         if (adminLoggedIn()) {

             $data['titre'] = 'Ajouter du contenu';
             $data['menu'] = array('Interfaces','A propos de l\'intuition ');

             $data['status'] = $this->status->read();

             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/interfaces/accueil/intuition/newIntuition', $data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }

     public function addIntuition()
     {
         if (adminLoggedIn()) {

             $path = realpath(APPPATH.'../assets/uploads/intuition/');

             $config['upload_path'] = $path;
             $config['allowed_types'] = 'jpg|jpeg';
             $config['remove_spaces'] = true;

             $this->load->library('upload',$config);


             $data['addIntuitionTitle'] = $this->input->post('title',true);
             $data['addIntuitionP1'] = $this->input->post('paragraph1',true);
             $data['addIntuitionP2'] = $this->input->post('paragraph2',true);
             $data['addIntuitionP3'] = $this->input->post('paragraph3',true);
             $data['addIntuitionP4'] = $this->input->post('paragraph4',true);
             $data['addIntuitionP5'] = $this->input->post('paragraph5',true);
             $data['addIntuitionStatus'] = $this->input->post('status',true);


             if(!$this->upload->do_upload('image'))
             {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error_interface_intuition',$error);
                 $this->newIntuition();

             }else{

                 $fileName = $this->upload->data();
                 $data['addIntuitionFileName'] = $fileName['file_name'];

             }


             $dataIntuition =  array(
                 'title'=>$data['addIntuitionTitle'],
                 'para1'=>$data['addIntuitionP1'],
                 'para2'=>$data['addIntuitionP2'],
                 'para3'=>$data['addIntuitionP3'],
                 'para4'=>$data['addIntuitionP4'],
                 'para5'=>$data['addIntuitionP5'],
                 'file'=>$data['addIntuitionFileName'],
                 'status'=>$data['addIntuitionStatus']

             );

           //  var_dump($dataIntuition); die();

             $checkDataIntuition = $this->intuition->checkUser($dataIntuition);


             if(count($checkDataIntuition) == 1)
             {

                 $this->session->set_flashdata('error_interface_intuition', 'Ces données existent en base!');
                 $this->newIntuition();

             }else{

                   $insertIntuition = $this->intuition->create($dataIntuition);

                 if($insertIntuition)
                 {

                     $this->session->set_flashdata('success_interface_intuition', 'Enregistrement effectué');
                     $this->newIntuition();

                 }else{

                     $this->session->set_flashdata('error_interface_intuition', 'Enregistrement non effectué');
                     $this->newIntuition();

                 }

             }

         }else{


             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();


         }
     }
     
     public function getIntuition()
     {
         if (adminLoggedIn()) {

             $data['allIntuition'] = $this->intuition->read();

             $data['titre'] = 'Liste des contenus';
             $data['menu'] = array('Interfaces','A propos de l\'intuition ');


             $this->load->view('backoffice/admin/header/header');
             $this->load->view('backoffice/admin/header/css');
             $this->load->view('backoffice/admin/header/navTop');
             $this->load->view('backoffice/admin/header/navLeft');
             $this->load->view('backoffice/interfaces/accueil/intuition/getIntuition', $data);
             $this->load->view('backoffice/admin/header/footer');
             $this->load->view('backoffice/admin/header/htmlClose');

         } else {

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }

     public function changeStatusIntuition()
     {
         if (adminLoggedIn()) {

             if ($this->input->is_ajax_request()) {

                 $status =  $this->input->post('status', true);

                 $idText = $this->input->post('text', true);

                 if (!empty($idText)) {

                     $idTextDecrypt = $this->encryption->decrypt($idText);

                     if($status == 1)
                     {
                         $dataStatus = array('status'=>0);

                     }elseif ($status == 0)
                     {
                         $dataStatus = array('status'=>1);

                     }else{

                         return false;

                     }

                     $updateStatus =  $this->intuition->update(array('id' => $idTextDecrypt), $dataStatus);

                     if($updateStatus)

                     {

                         return true;

                     }else{

                         return false;
                     }

                 }
             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }

     }

     public function deleteIntuition()
     {
         if(adminLoggedIn())
         {

             if($this->input->is_ajax_request())
             {

                 $this->input->post('id',true);
                 $idIntuition = $this->input->post('text',true);


                 if(!empty($idIntuition))
                 {

                     $idIntuitionDecrypt = $this->encryption->decrypt($idIntuition);

                     $imgIntuitionToDel = $this->intuition->getImageById('file',array('id'=>$idIntuitionDecrypt));

                     if(!empty($imgIntuitionToDel) and count($imgIntuitionToDel) == 1)
                     {
                         $realImage = $imgIntuitionToDel[0]['file'];
                     }


                     $delIntuition =  $this->intuition->delete(array('id'=>$idIntuitionDecrypt));


                     if($delIntuition)
                     {

                         if(!empty($realImage) and isset($realImage))
                         {
                             $path = realpath(APPPATH.'../assets/uploads/intuition/');

                             if(file_exists($path.'/'.$realImage))
                             {
                                 unlink($path.'/'.$realImage);
                             }

                         }

                     }


                 }

             }

         }else{

             $this->session->set_flashdata('error', 'Connectez vous svp!');
             $this->login();

         }
     }



}