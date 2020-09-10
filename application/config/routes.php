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
|	$route['default_controller'] = 'User';
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
//Default controller
$route['default_controller'] = 'userdashboard';
//User access routes
$route['login'] = 'user/login';
$route['login-post'] = 'user/login_post';
$route['register'] = 'user/register';
$route['register-post'] = 'user/register_post';
$route['logout'] = 'user/logout';
//Default routes for dashboard
$route['dashboard'] = 'dashboard/dashboard';
$route['dashboard_stats'] = 'dashboard/dashboard_stats';
//Default routes for projects,files,billing,messages and profile//
$route['dashboard/projects'] = 'Userdashboard/projects/projects';
$route['dashboard/files'] = 'Userdashboard/files/files';
$route['dashboard/billing'] = 'Userdashboard/billing/billing';
$route['dashboard/messages'] = 'Userdashboard/inbox';
$route['dashboard/profile'] = 'Userdashboard/profile/profile';
$route['dashboard/upload'] = 'Userdashboard/upload';
$route['files/file_upload'] = 'Userdashboard/files/file_upload';
$route['dashboard/aboutus'] = 'Userdashboard/aboutus/aboutus';
//Common views for header and footer
$route['footer_view'] = 'common/footer_view';
$route['header_view'] = 'common/header_view';
//404 error!
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/*upload routes */
$route['upload-image'] = 'ImageUploadController';
$route['store-image'] = 'ImageUploadController/store';
//Admin routes
$route['admin'] = 'Admin/admin/dashboard/dashboard';
$route['admin/dashboard/billing'] = 'Admin_billing/admin_billing/admin/billing/billing';
$route['admin/dashboard/files'] = 'Admin_files/admin_files/admin/files/files';
$route['admin/dashboard/upload'] = 'Admin_files/upload/admin/files/file_upload';
$route['admin/dashboard/profile'] = 'Admin_profile/admin_profile/admin/profile/profile';
$route['admin/dashboard/aboutus'] = 'Pages/aboutus/aboutus';
$route['admin/dashboard/projects'] = 'Admin_projects/admin_projects/admin/projects/projects';
$route['admin_footer_view'] = 'admin/common/footer_view';
$route['admin_header_view'] = 'admin/common/header_view';
