<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['login']['post'] = 'User/login';

$route['admin/perusahaan']                      = 'Perusahaan';
$route['admin/perusahaan/tambah']['get']        = 'Perusahaan/create';
$route['admin/perusahaan/tambah']['post']       = 'Perusahaan/store';
$route['admin/perusahaan/edit/(:any)']['get']   = 'Perusahaan/edit/$1';
$route['admin/perusahaan/edit/(:any)']['post']  = 'Perusahaan/update/$1';
$route['admin/perusahaan/detail/(:any)']        = 'Perusahaan/show/$1';