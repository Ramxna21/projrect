<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['admin'] = 'admin/auth';
$route['admin/login'] = 'admin/auth/login';
$route['admin/logout'] = 'admin/auth/logout';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/formulir'] = 'admin/formulir';
$route['admin/murid'] = 'admin/murid';
$route['admin/pertanyaan'] = 'admin/pertanyaan';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;