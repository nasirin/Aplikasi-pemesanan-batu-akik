<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ADMIN
$route['admin'] = 'Admin';

//AUTH
$route['auth'] = 'auth';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['profil/(:num)'] = 'auth/profil/$1';

// PESANAN
$route['pesanan'] = 'Order';
$route['pes-tambah'] = 'Order/tambah'; //for debug
$route['pes-simpan/(:num)'] = 'Order/simpan/$1'; //for debug
$route['pes-detail/(:any)'] = 'Order/detail/$1';
$route['pes-hapus/(:any)'] = 'Order/hapus/$1';
$route['pes-confirm/(:any)'] = 'Order/confirm/$1';
$route['pes-selesai/(:any)'] = 'Order/selesai/$1';

// RETURN 
$route['return'] = 'Pengembalian';
$route['pengajuan/(:any)'] = 'Pengembalian/pengajuan/$1';
$route['pengajuan/tambah/(:any)'] = 'Pengembalian/tambah/$1';
$route['pengajuan/approve/(:num)'] = 'Pengembalian/approve/$1';
$route['pengajuan/reject/(:num)'] = 'Pengembalian/reject/$1';


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


// PELANGGAN
$route['pelanggan'] = 'Pelanggan';
$route['pelanggan/detail/(:num)'] = 'Pelanggan/detail/$1';

// SHOP
$route['shop'] = 'Shop';
$route['shop-detail/(:num)'] = 'Shop/detail/$1';
$route['shop-checkout/(:any)'] = 'Shop/checkout/$1';
// $route['shop-confirm'] = 'Shop/confirm';
$route['shop-cart'] = 'Shop/cart';

// CART
// $route['cart'] = 'Cart/tambah';


// CONTACT
$route['contact'] = 'Contact';

// LOGIN USER
$route['ulogin'] = 'Login';
$route['signin'] = 'Login/signin';
$route['uprofil/(:num)'] = 'Login/profil/$1';
$route['registration'] = 'Login/register';
$route['register'] = 'Login/signup';
$route['signout'] = 'Login/signout';

// PRINT
$route['print/(:any)'] = 'Cetak/cetak_invoice/$1';
$route['cetak/penjualan'] = 'Cetak/cetak_penjualan';
$route['cetak/pelanggan'] = 'Cetak/cetak_pelanggan';
