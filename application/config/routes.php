<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';
$route['actualites/(:any)'] = "actualites/details/$1";
$route['decouverte/(:any)'] = "decouverte/details/$1";
$route['404_override'] = 'notFound';
$route['translate_uri_dashes'] = FALSE;


/*====== define my routes ======*/

$route['formation/forum'] = 'education_formation/forum/forum';
$route['formation/cours-en-differes'] = 'formation/differes';
$route['temoin-au-visage-pluriel/ecole'] = 'formation';
$route['presentation'] = 'leministere';
$route['organisation'] = 'leministere/organisation';
$route['partenaires'] = 'Leministere/partenaires';
//$route['evangelisation-edification/parole-de-la-semaine'] = 'evangelisation/Parole';
$route['temoin-au-visage-pluriel/parole-de-la-semaine'] = 'evangelisation/Parole';
//$route['evangelisation-edification/enseignements'] = 'evangelisation/Direct';
$route['temoin-au-visage-pluriel/edification'] = 'evangelisation/Direct';
$route['evangelisation-edification/exhortation'] = 'evangelisation/Differe';
$route['evangelisation-edification/el-elyon-dans-mon-histoire'] = 'evangelisation/Temoignages';
$route['formation/livre-numerique'] = 'education_formation/bibliotheque/livre_numerique';
$route['ressources/bibliotheque'] = 'education_formation/bibliotheque/livre_numerique';
$route['boutique'] = 'boutique/Boutique';
$route['administration/connectez-vous'] = 'backoffice/admin/login';
$route['administration/deconnection'] = 'backoffice/admin/logOut';
$route['formation/forum/(:num)'] = 'education_formation/forum/forum_details/commentForumDetail/$1';

$route['boutique/panier'] = 'boutique/Cart/data';
$route['boutique/connectez-vous'] = 'boutique/Boutique/createRegister';
$route['boutique/informations-supplementaires'] = 'boutique/Boutique/command';
$route['faire-un-don'] = 'Donate';
$route['priere-partager'] = 'priere/Priere';
$route['priere-intention'] = 'priere/Priere/intention';
//$route['priere-exercices'] = 'priere/Priere/exercices';
$route['temoin-au-visage-pluriel/exercices'] = 'priere/Priere/exercices';


$route['echange-ecoute'] = 'echange/Ecoute';
$route['echange-forum'] = 'echange/Forum';

$route['jeunesse/nos-petits-prophetes/prieres'] = 'jeunesse/Prieres';
$route['jeunesse/nos-petits-prophetes/livres'] = 'jeunesse/Livres';
$route['jeunesse/nos-petits-prophetes/musiques'] = 'jeunesse/Musique';



$route['jeunesse/nos-grands-prophetes/prieres'] = 'jeunesse/Prieres/jeune';
$route['jeunesse/nos-grands-prophetes/livres'] = 'jeunesse/Livres/jeune';
$route['jeunesse/nos-grands-prophetes/musiques'] = 'jeunesse/Musique/jeune';


$route['loisirs/musique'] = 'loisirs/Musique';
$route['loisirs/humour'] = 'loisirs/Humour';
$route['loisirs/bien-etre'] = 'loisirs/Bienetre';
$route['loisirs/petites-annonces'] = 'loisirs/Annonces';



//$route['administration/tableau-de-bord'] = 'backoffice/Admin/checkLogin';
//setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
//echo strftime('%A %d %B %Y %I:%M:%S');
//echo strftime('%d %B %Y');
//echo date('d-M-Y');

