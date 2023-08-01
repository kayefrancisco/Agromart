<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


		// To read routes code
		// $route['the url'][methos] = 'directory of controller function';


// Log in and Register for User and Admin
$route['register']['GET'] = 'Auth/RegisterController/index';
$route['register']['POST'] = 'Auth/RegisterController/register';

$route['login']['GET'] = 'Auth/LoginController/index';
$route['login']['POST'] = 'Auth/LoginController/login';

$route['logout']['GET'] = 'Auth/LogoutController/logout';

$route['userpage']['GET'] = 'PageController/userpage';
$route['userpage']['POST'] = 'UserController/index';

$route['adminpage']['GET'] = 'AdminController/index';

$route['403']['GET'] = 'PageController/accessdenied';



//CRUD products w/image

$route['products']['GET'] = 'Products/ProductController/index';

//view ngh buyer
//$route['products/view']['GET'] = 'Products/ProductController/view';

$route['products/add']['GET'] = 'Products/ProductController/create'; 
$route['products/add']['POST'] = 'Products/ProductController/store'; 

$route['products/edit/(:any)']['GET'] = 'Products/ProductController/edit/$1'; 

$route['products/update/(:any)']['POST'] ='Products/ProductController/update/$1';

$route['products/delete/(:any)']['GET'] = 'Products/ProductController/delete/$1'; 
//VIEW ALL PRODUCTS
$route['Product'] = 'welcome/Product';




$route['message'] = 'Message';
$route['sent'] = 'Message/sendMessage';
$route['getmessage'] = 'Message/getMessage';


//pagination
$route['About'] = 'welcome/about';
$route['Contacts'] = 'welcome/Contacts';









