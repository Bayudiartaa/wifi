<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']        = 'auth';

$route['pemasangan']                = 'pemasangan';

$route['pemasangan_baru']           = 'pemasangan/pemasangan_baru';
$route['pemasangan_lama']           = 'pemasangan/pemasangan_lama';

$route['tambah_pemasangan_baru']        = 'pemasangan/tambah_pemasangan_baru';
$route['add_pemasangan_baru']           = 'pemasangan/add_pemasangan_baru';
$route['edit_pemasangan_baru/(:any)']   = 'pemasangan/edit_pemasangan_baru/$1';
$route['update_pemasangan_baru']        = 'pemasangan/update_pemasangan_baru';
$route['hapus_pemasangan_baru/(:any)']  = 'pemasangan/hapus_pemasangan_baru/$1';

$route['tambah_pemasangan_lama']        = 'pemasangan/tambah_pemasangan_lama';
$route['add_pemasangan_lama']           = 'pemasangan/add_pemasangan_lama';
$route['edit_pemasangan_lama/(:any)']   = 'pemasangan/edit_pemasangan_lama/$1';
$route['update_pemasangan_lama']        = 'pemasangan/update_pemasangan_lama';
$route['hapus_pemasangan_lama/(:any)']  = 'pemasangan/hapus_pemasangan_lama/$1';

$route['autofill']                      = 'pemasangan/autofill';

$route['tagihan']                       = 'tagihan';
$route['detail_tagihan/(:any)']         = 'tagihan/detail_tagihan/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
