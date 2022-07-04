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
$route['default_controller'] = 'User';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['user/login'] = 'User/index';

//vender contacts 
$route['admin/vender_contacts'] = 'admin/Vender_contact/contact_listing';
//$route['admin/vender_contacts/edit/(:num)'] = 'admin/Vender_contact/edit_vender_contact';

//tenant contacts 
$route['admin/tenant_contacts'] = 'admin/Tenant_contact/te_contact_listing';

//buildings
$route['admin/buildings'] = 'admin/Buildings/buildings_information_listing';

//tenants information 
$route['admin/tenants_information'] = 'admin/Tenant_information/tenant_information_listing';

//tenants location 
$route['admin/tenants_location'] = 'admin/Tenant_location/tenant_location_listing';

//lease notes 
$route['admin/lease_notes'] = 'admin/Lease_notes/lease_notes_listing';

//lease terms
$route['admin/lease_terms'] = 'admin/Lease_terms/lease_terms_listing';

$route['test'] = 'admin/Welcome/test_file';
