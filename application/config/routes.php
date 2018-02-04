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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Login
$route['Login'] = 'Login';
$route['Profile'] = 'Login/verify';
$route['Forget'] = 'Login/forget_password';
$route['Reset'] = 'Login/reset_password';



//Registration
$route['Registration'] = 'Registration';
$route['Registration/Survey'] = 'Registration/add_reg';
$route['Registration/Verification'] = 'Registration/verify';

//Registration
$route['Property'] = 'Post';
$route['All-property'] = 'Post/all_property';
$route['All-property-grid'] = 'Post/all_property_grid';
$route['Single-property'] = 'Post/single_property';


//profile
$route['profile'] = 'Profile';
$route['My_profile'] = 'Profile/my_profile';
$route['Fav_post'] = 'Profile/fav_post';
$route['New_post'] = 'Profile/new_post';
$route['My_post'] = 'Profile/my_post';
$route['Chng_pass'] = 'Profile/chgn_pass';

// Language
$route['([a-z 0-9 -]+)'] = 'Language/index/$1';

// Logout
$route['Logout'] = 'Logout';

