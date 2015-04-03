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
$route['operator'] = "auth/configuration/4";
$route['tambah_operator'] = "auth/add_operator";
$route['ubah_operator/(:any)'] = "auth/edit_operator/$1";
$route['leader'] = "auth/configuration/5";
$route['tambah_leader'] = "auth/add_research_group_leader";
$route['edit_leader/(:num)'] = "auth/edit_research_group_leader/$1";
$route['profil'] = "auth/account_setting";
$route['profil/ubah_profil'] = "auth/account_setting/change_profile";
$route['profil/ubah_password'] = "auth/account_setting/change_password";
$route['anggota/(:any)'] = "auth/view_member/$1";

$route['unit'] = "master/units";
$route['config_point'] = "master/config_point";
$route['tipe_item'] = "master/item_types";
$route['tool'] = "master/tools";
$route['research_group'] = "master/research_group";
$route['research_group/add'] = "master/add_research_group";
$route['research_group/edit/(:num)'] = "master/edit_research_group/$1";

$route['item'] = "account/items";
$route['tambah_item'] = "account/add_item";
$route['ubah_item/(:num)'] = "account/edit_item/$1";
$route['rincian_saldo'] = "account/balance_detail";

$route['kategori_pengujian'] = "testing/categories";
$route['pengujian'] = "testing";
$route['tambah_pengujian'] = "testing/add_pengujian";
$route['ubah_pengujian/(:num)'] = "testing/edit_pengujian/$1";

$route['order'] = "orders/index";
$route['tambah_order'] = "orders/add_order";
$route['tambah_keranjang/(:num)/(:num)'] = "orders/add_cart/$1/$2";
$route['keranjang_belanja'] = "orders/view_cart";
$route['invoice/(:any)'] = "orders/view_order/$1";

$route['pengujian_member'] = "testing/history/member";
$route['pengujian_operator'] = "testing/history/operator";
$route['confirm/(:num)'] = "testing/confirm_test_order/$1";
$route['history_pengujian'] = "testing/history/all";
$route['view_test/(:num)'] = "testing/view_test_order/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */