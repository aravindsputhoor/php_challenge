<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = "AuthController";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['home'] = "AuthController";
$route['dashboard'] = "DashController";
$route['api-search-data'] = "ApiController/search_data";
$route['logout'] = "AuthController/logout";




