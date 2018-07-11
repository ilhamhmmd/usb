<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['registrasi']            = 'c_registrasi';
$route['verify/(:any)/(:any)']  = 'c_registrasi/verify_register/$1/$2';

$route['default_controller']    = 'c_welcome';

$route['login']                 = 'c_login';
$route['login/lupa_password']   = 'c_login/lupa_password';
$route['logout']                = 'c_logout/logout';

$route['user']                  = 'c_user';
$route['user/upload']           = 'c_user/upload';
$route['user/upload']           = 'c_user/upload';
$route['user/buat_ktp']         = 'c_user/buat_ktp';
$route['user/panduan']          = 'c_user/panduan';
$route['user/pengumuman']       = 'c_user/pengumuman';
$route['user/suket']            = 'c_user/suket';
$route['user/supeng']           = 'c_user/supeng';

$route['admin']                 = 'c_admin';

$route['404_override']          = '';

$route['translate_uri_dashes']  = FALSE;
