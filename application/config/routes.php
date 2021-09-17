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
$route['default_controller'] = 'beranda/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']['post'] = 'auth/post_login';
$route['logout'] = 'auth/logout';
$route['beranda'] = 'beranda/index';

$route['home'] = 'user/home';
$route['home_admin'] = 'admin/home_admin';
$route['kedatangan'] = 'user/kedatangan';
$route['keberangkatan'] = 'user/keberangkatan';
$route['inputberangkat/(:num)'] = 'user/inputberangkat/$1';
$route['inputdatang/(:num)'] = 'user/inputdatang/$1';
$route['inputikan/(:num)'] = 'user/inputikan/$1';
$route['dataout'] = 'user/dataout';
$route['datain'] = 'user/datain';
$route['hasil_tangkap'] = 'user/hasil_tangkap';
$route['daftar_ikan'] = 'user/daftar_ikan';
$route['tambah_ikan/(:num)'] = 'user/tambah_ikan/$1';
$route['hasil_tangkap/(:num)'] = 'user/hasil_tangkap/$1';
$route['rincian_kapal/(:num)'] = 'user/rincian_kapal/$1';
$route['data_user'] = 'admin/data_user';
$route['data_admin'] = 'admin/data_admin';
$route['profile_user'] = 'user/profile_user';
$route['profile_admin'] = 'admin/profile_admin';

$route['edit_kapal'] = 'user/edit_kapal';
$route['edit_kapal/(:num)'] = 'user/edit_kapal/$1';
$route['edit_dataout/(:num)'] = 'user/edit_dataout/$1';
$route['edit_datain/(:num)'] = 'user/edit_datain/$1';
$route['edit_ikan/(:num)'] = 'user/edit_ikan/$1';
$route['edit_profile'] = 'auth/edit_profile';

$route['delete_kapal/(:num)'] = 'user/delete_kapal/$1';
$route['hapus_kapal/(:num)'] = 'user/hapus_kapal/$1';
$route['delete_dataout/(:num)'] = 'user/delete_dataout/$1';
$route['delete_dataout2/(:num)'] = 'user/delete_dataout2/$1';
$route['hapus_dataout/(:num)'] = 'user/hapus_dataout/$1';
$route['hapus_datain/(:num)'] = 'user/hapus_datain/$1';
$route['hapus_ikan/(:num)'] = 'user/hapus_ikan/$1';
$route['hapus_dataproduksi/(:num)'] = 'user/hapus_dataproduksi/$1';
$route['hapus_datauser/(:num)'] = 'admin/hapus_datauser/$1';
$route['hapus_dataadmin/(:num)'] = 'admin/hapus_dataadmin/$1';
$route['hapus_akun/(:num)'] = 'admin/hapus_akun/$1';
$route['delete_kapal/(:num)'] = 'admin/delete_kapal/$1';

