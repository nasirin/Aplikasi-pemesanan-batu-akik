<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//AUTH
$route['auth'] = 'auth';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['profil/(:num)'] = 'auth/profil/$1';

// PESANAN
$route['pesanan'] = 'Order';
$route['pes-tambah'] = 'Order/tambah'; //for debug
$route['pes-simpan'] = 'Order/simpan'; //for debug
$route['pes-detail/(:num)'] = 'Order/detail/$1';

// USER
$route['user'] = 'User';
$route['user-tambah'] = 'User/tambah';
$route['user-simpan'] = 'User/simpan';
$route['user-edit/(:num)'] = 'User/edit/$1';
$route['user-ubah/(:num)'] = 'User/ubah/$1';
$route['user-hapus/(:num)'] = 'User/hapus/$1';
$route['user-detail/(:num)'] = 'User/detail/$1';

// PRODUK
$route['produk'] = 'Produk';
$route['produk-tambah'] = 'Produk/tambah';
$route['produk-simpan'] = 'Produk/simpan';
$route['produk-ubah/(:num)'] = 'Produk/ubah/$1';
$route['produk-ganti/(:num)'] = 'Produk/ganti/$1';
$route['produk-hapus/(:num)'] = 'Produk/hapus/$1';
$route['produk-detail/(:num)'] = 'Produk/detail/$1';
