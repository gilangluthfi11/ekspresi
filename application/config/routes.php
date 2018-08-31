<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/newsletter_baru'] = 'dashboards/add_newsletter';
$route['admin/daftar_newsletter'] = 'dashboards/newsletter_list';
$route['admin/tambah_artikel'] = 'dashboards/add_article';
$route['admin/daftar_artikel'] = 'dashboards/article_list';
$route['admin/profil_member'] = 'dashboards/member_profile';
$route['admin/paket_membership/invoice'] = 'dashboards/invoice';
$route['admin/paket_membership'] = 'dashboards/package_list';
$route['admin/daftar_member'] = 'dashboards/member_list';
$route['admin/admin_panel'] = 'dashboards/admin';
$route['admin'] = 'dashboards/admin_login';
$route['daftar_artikel'] = 'posts/list_article';
$route['edit_membership'] = 'pages/edit_member';
$route['membership'] = 'pages/member';
$route['lupa_password'] = 'pages/forget_password';
$route['register'] = 'pages/join_us';
$route['blog'] = 'posts/article';
$route['assets/(:any)'] = 'assets/$1';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
