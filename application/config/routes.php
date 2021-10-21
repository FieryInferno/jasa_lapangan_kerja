<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['login']['post'] = 'User/login';

$route['admin/perusahaan']                = 'Perusahaan';
$route['admin/perusahaan/tambah']['get']  = 'Perusahaan/create';
$route['admin/perusahaan/tambah']['post'] = 'Perusahaan/store';