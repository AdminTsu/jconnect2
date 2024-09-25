<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'dashboard';
$route['login/(:num)?$'] = "login/failed/$1";
$route['Login_web/(:num)?$'] = "Login_web/failed/$1";
// $route['LupaPassword'] = "resetpassword";

$route['jpn/login'] = "login";

$route['dashboard/find_jobs/(:num)?$'] = "dashboard/find_jobs";

$route['Find_jobs/(:num)?$'] = "Find_jobs";

$route['Find_jobs/search/(:num)?$'] = "Find_jobs/search/";

$route['grab/([\w\-]+)/([\w\-]+)$'] = "grab/get_Randomid/$1/$2";

$route['otc/report/([\w\-]+)$'] = "otc/report/listreport/$1";

$route['edit/kpi/kpiinputotc/([\w\-]+)/([\w\-]+)?$'] = "kpi/kpiinputotc/show/edit/$1/$2";
$route['edit/kpi/kpi_input/([\w\-]+)/([\w\-]+)/([\w\-]+)?$'] = "kpi/kpi_input/show/edit/$1/$2/$3";
$route['add/hrd/organisasi/([\w\-]+)$'] = "hrd/organisasi/show/add/$1";
$route['add/([\w\-]+)/([\w\-]+)$'] = "$1/$2/show/add";
$route['add/([\w\-]+)$'] = "$1/show/add";
$route['edit/([\w\-]+)/([\w\-]+)/([\w\-]+)?$'] = "$1/$2/show/edit/$3";
$route['edit/([\w\-]+)/([\w\-]+)?$'] = "$1/show/edit/$2";
$route['konfirm/([\w\-]+)/([\w\-]+)/([\w\-]+)?$'] = "$1/$2/show/konfirm/$3";
$route['save/([\w\-]+)/([\w\-]+)?$'] = "$1/$2/save";
$route['save/([\w\-]+)?$'] = "$1/save";
$route['delete/([\w\-]+)/([\w\-]+)/([\w\-]+)?$'] = "$1/$2/delete/$3";
$route['delete/([\w\-]+)/([\w\-]+)?$'] = "$1/$2/delete";
$route['delete/([\w\-]+)?$'] = "$1/delete";
$route['view/([\w\-]+)/([\w\-]+)/([\w\-]+)?$'] = "$1/$2/show/view/$3";

//lelang start
$route['action/ngebid'] = "lelang/dashboard/submit_bid/";
$route['lelang/detail/([\w\-]+)$'] = "lelang/dashboard/detail/$1";
$route['lelang/profile'] = "lelang/dashboard/acount";
$route['lelang/register'] = "lelang/login/register";
$route['verification/lelang/([\w\-]+)'] = "lelang/login/verification/$1";
$route['lelang/winner'] = "lelang/dashboard/mywin";
$route['lelang/personal'] = "lelang/dashboard/personal";
$route['success/lelang'] = "lelang/dashboard/sukses";
$route['log/out'] = "lelang/login/out";
$route['edit/phone_lelang'] = "lelang/dashboard/edit_phone/";
$route['edit/ktp_lelang'] = "lelang/dashboard/edit_ktp/";
$route['edit/pass_lelang'] = "lelang/dashboard/edit_pass/";
//lelang end

$route['otc/report/([\w\-]+)?$'] = "otc/report/laporan/$1";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

////Training
$route['master/(:num)?$'] = "master/referensi/show/list/$1";

