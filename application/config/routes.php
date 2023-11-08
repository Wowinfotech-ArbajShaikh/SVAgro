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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Home';
$route['about-us'] = 'Home/about_us';
$route['contact-us'] = 'Home/contact_us';
$route['article'] = 'Home/article';
$route['article/grape-farm-and-negative-charge/(:any)'] = 'Home/article_details/$1';
$route['career'] = 'Home/career';
$route['certificate'] = 'Home/certificate';
$route['our-inspiration'] = 'Home/our_Inspiration';
$route['management'] = 'Home/Management';
$route['upcoming-events'] = 'Home/upcoming_events';
$route['award-and-recognitions'] = 'Home/award_and_recognitions';
$route['publications'] = 'Home/publications';
$route['gallery'] = 'Home/gallery';
$route['privacy-policy']='Home/PrivacyPolicy';
$route['product/category/(:any)'] = 'Home/products/$1';
$route['product/(:any)/(:any)']  = 'Home/product_details/$1/$2';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
