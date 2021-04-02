<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['leadboard'] = 'welcome/leadboard';
$route['play'] = 'welcome/play';
$route['feedback'] = 'welcome/feedback';


//Api
$route['api/requestToken'] = 'api/api/reqToken';
$route['api/end'] = 'api/api/endGame';
