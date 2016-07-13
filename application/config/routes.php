<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "html_snapshot";
$route['404_override'] = '';

$route['api/items/(:any)'] = 'api/items/index/item/$1';
$route['api/search/(:any)'] = 'api/search/index/q/$1';
$route['api/tags/(:any)'] = 'api/tags/index/item/$1';
$route['api/transcripts/(:any)'] = 'api/transcripts/index/item/$1';
$route['api/feedback_email/(:any)'] = 'api/feedback_email/index/$1';
$route['json/(:any)'] = 'api/index/$1';

$route['([a-zA-Z][0-9]+[_0-9]*.*)'] = "html_snapshot/index/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */