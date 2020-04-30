<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['(:any)/(:num)'] = 'welcome/index/$1/$2';
$route['(:any)'] = 'welcome/index/$1';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
