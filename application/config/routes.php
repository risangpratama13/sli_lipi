<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "auth/index";
$route['404_override'] = '';

$route['login'] = "auth/login";
$route['logout'] = "auth/logout";
$route['registrasi'] = "auth/member_registration";

$route['administrator'] = "auth/configuration/1";
$route['tambah_administrator'] = "auth/add_administrator";
$route['ganti_password/(:any)'] = "auth/change_password/$1";
$route['anggota'] = "auth/configuration/2";
$route['tambah_anggota'] = "auth/add_member";
$route['profil'] = "auth/account_setting";
$route['profil/ubah_profil'] = "auth/account_setting/change_profile";
$route['profil/ubah_password'] = "auth/account_setting/change_password";

$route['unit'] = "master/units";
$route['kurs_point'] = "master/kurs_point";
$route['tipe_item'] = "master/item_types";

$route['kategori_pengujian'] = "testing/categories";
$route['pengujian'] = "testing";
$route['tambah_pengujian'] = "testing/add_pengujian";
$route['ubah_pengujian/(:num)'] = "testing/edit_pengujian/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */