<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_login/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Karya  
$route['admin'] = 'admin/C_home/home';
$route['admin/dashboard'] = 'admin/C_home/home';
$route['admin/login'] = 'C_login/login';
$route['admin/login/aksi'] = 'C_login/aksi';
$route['admin/login/keluar/(:any)'] = 'C_login/logout';
$route['admin/login/keluar'] = 'C_login/logout';


//agama
$route['admin/agama'] = 'admin/C_agama/list';
$route['admin/agama/data'] = 'admin/C_agama/data/$1';
$route['admin/agama/getagama'] = 'admin/C_agama/getagama';
$route['admin/agama/getPublikasi'] = 'admin/C_agama/getPublikasi';
$route['admin/agama/getSubjek'] = 'admin/C_agama/getSubjek';
$route['admin/agama/getSatker'] = 'admin/C_agama/getSatker';
$route['admin/agama/get/(:any)'] = 'admin/C_agama/get/$1';
$route['admin/agama/insert'] = 'admin/C_agama/insert';
$route['admin/agama/update'] = 'admin/C_agama/update';
$route['admin/agama/update/agama/(:any)'] = 'admin/C_agama/updateagama/$1';
$route['admin/agama/delete/(:any)'] = 'admin/C_agama/delete/$1';
$route['admin/agama/set/(:any)/(:any)'] = 'admin/C_agama/set/$1/$2';

//pendidikan
$route['admin/pendidikan'] = 'admin/C_pendidikan/list';
$route['admin/pendidikan/data'] = 'admin/C_pendidikan/data/$1';
$route['admin/pendidikan/getpendidikan'] = 'admin/C_pendidikan/getpendidikan';
$route['admin/pendidikan/getPublikasi'] = 'admin/C_pendidikan/getPublikasi';
$route['admin/pendidikan/getSubjek'] = 'admin/C_pendidikan/getSubjek';
$route['admin/pendidikan/getSatker'] = 'admin/C_pendidikan/getSatker';
$route['admin/pendidikan/get/(:any)'] = 'admin/C_pendidikan/get/$1';
$route['admin/pendidikan/insert'] = 'admin/C_pendidikan/insert';
$route['admin/pendidikan/update'] = 'admin/C_pendidikan/update';
$route['admin/pendidikan/update/pendidikan/(:any)'] = 'admin/C_pendidikan/updatependidikan/$1';
$route['admin/pendidikan/delete/(:any)'] = 'admin/C_pendidikan/delete/$1';
$route['admin/pendidikan/set/(:any)/(:any)'] = 'admin/C_pendidikan/set/$1/$2';


//pekerjaan
$route['admin/pekerjaan'] = 'admin/C_pekerjaan/list';
$route['admin/pekerjaan/data'] = 'admin/C_pekerjaan/data/$1';
$route['admin/pekerjaan/getpekerjaan'] = 'admin/C_pekerjaan/getpekerjaan';
$route['admin/pekerjaan/getPublikasi'] = 'admin/C_pekerjaan/getPublikasi';
$route['admin/pekerjaan/getSubjek'] = 'admin/C_pekerjaan/getSubjek';
$route['admin/pekerjaan/getSatker'] = 'admin/C_pekerjaan/getSatker';
$route['admin/pekerjaan/get/(:any)'] = 'admin/C_pekerjaan/get/$1';
$route['admin/pekerjaan/insert'] = 'admin/C_pekerjaan/insert';
$route['admin/pekerjaan/update'] = 'admin/C_pekerjaan/update';
$route['admin/pekerjaan/update/pekerjaan/(:any)'] = 'admin/C_pekerjaan/updatepekerjaan/$1';
$route['admin/pekerjaan/delete/(:any)'] = 'admin/C_pekerjaan/delete/$1';
$route['admin/pekerjaan/set/(:any)/(:any)'] = 'admin/C_pekerjaan/set/$1/$2';

//pernikahan
$route['admin/pernikahan'] = 'admin/C_pernikahan/list';
$route['admin/pernikahan/data'] = 'admin/C_pernikahan/data/$1';
$route['admin/pernikahan/getpernikahan'] = 'admin/C_pernikahan/getpernikahan';
$route['admin/pernikahan/getPublikasi'] = 'admin/C_pernikahan/getPublikasi';
$route['admin/pernikahan/getSubjek'] = 'admin/C_pernikahan/getSubjek';
$route['admin/pernikahan/getSatker'] = 'admin/C_pernikahan/getSatker';
$route['admin/pernikahan/get/(:any)'] = 'admin/C_pernikahan/get/$1';
$route['admin/pernikahan/insert'] = 'admin/C_pernikahan/insert';
$route['admin/pernikahan/update'] = 'admin/C_pernikahan/update';
$route['admin/pernikahan/update/pernikahan/(:any)'] = 'admin/C_pernikahan/updatepernikahan/$1';
$route['admin/pernikahan/delete/(:any)'] = 'admin/C_pernikahan/delete/$1';
$route['admin/pernikahan/set/(:any)/(:any)'] = 'admin/C_pernikahan/set/$1/$2';

//Penduduk
$route['admin/penduduk'] = 'admin/C_penduduk/list';
$route['admin/penduduk/tambah'] = 'admin/C_penduduk/tambah';
$route['admin/penduduk/edit/(:any)'] = 'admin/C_penduduk/edit/$1';
$route['admin/penduduk/data'] = 'admin/C_penduduk/data/$1';
$route['admin/penduduk/getpenduduk'] = 'admin/C_penduduk/getpenduduk';
$route['admin/penduduk/getPublikasi'] = 'admin/C_penduduk/getPublikasi';
$route['admin/penduduk/getSubjek'] = 'admin/C_penduduk/getSubjek';
$route['admin/penduduk/getSatker'] = 'admin/C_penduduk/getSatker';
$route['admin/penduduk/get/(:any)'] = 'admin/C_penduduk/get/$1';
$route['admin/penduduk/insert'] = 'admin/C_penduduk/insert';
$route['admin/penduduk/update/(:any)'] = 'admin/C_penduduk/update/$1';
$route['admin/penduduk/update/penduduk/(:any)'] = 'admin/C_penduduk/updatependuduk/$1';
$route['admin/penduduk/delete/(:any)'] = 'admin/C_penduduk/delete/$1';
$route['admin/penduduk/set/(:any)/(:any)'] = 'admin/C_penduduk/set/$1/$2';


//rt
$route['admin/rt'] = 'admin/C_rt/list';
$route['admin/rt/tambah'] = 'admin/C_rt/tambah';
$route['admin/rt/edit/(:any)'] = 'admin/C_rt/edit/$1';
$route['admin/rt/data'] = 'admin/C_rt/data/$1';
$route['admin/rt/getrt'] = 'admin/C_rt/getrt';
$route['admin/rt/getPublikasi'] = 'admin/C_rt/getPublikasi';
$route['admin/rt/getSubjek'] = 'admin/C_rt/getSubjek';
$route['admin/rt/getSatker'] = 'admin/C_rt/getSatker';
$route['admin/rt/get/(:any)'] = 'admin/C_rt/get/$1';
$route['admin/rt/insert'] = 'admin/C_rt/insert';
$route['admin/rt/update/(:any)'] = 'admin/C_rt/update/$1';
$route['admin/rt/update/rt/(:any)'] = 'admin/C_rt/updatert/$1';
$route['admin/rt/delete/(:any)'] = 'admin/C_rt/delete/$1';
$route['admin/rt/set/(:any)/(:any)'] = 'admin/C_rt/set/$1/$2';



//user
$route['admin/user'] = 'admin/C_user/list';
$route['admin/user/rt'] = 'admin/C_user/getRt';
$route['admin/user/tambah'] = 'admin/C_user/tambah';
$route['admin/user/edit/(:any)'] = 'admin/C_user/edit/$1';
$route['admin/user/data'] = 'admin/C_user/data/$1';
$route['admin/user/getuser'] = 'admin/C_user/getuser';
$route['admin/user/getPublikasi'] = 'admin/C_user/getPublikasi';
$route['admin/user/getSubjek'] = 'admin/C_user/getSubjek';
$route['admin/user/getSatker'] = 'admin/C_user/getSatker';
$route['admin/user/get/(:any)'] = 'admin/C_user/get/$1';
$route['admin/user/insert'] = 'admin/C_user/insert';
$route['admin/user/update/(:any)'] = 'admin/C_user/update/$1';
$route['admin/user/update/user/(:any)'] = 'admin/C_user/updateuser/$1';
$route['admin/user/delete/(:any)'] = 'admin/C_user/delete/$1';
$route['admin/user/set/(:any)/(:any)'] = 'admin/C_user/set/$1/$2';

// $route['admin/penduduk/tambah'] = 'admin/C_penduduk/list';