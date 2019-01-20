<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['dashboard'] = 'index.php/dashboard';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
