<?php
$title = '';
include_once 'resources/include.php';

$request = $_SERVER['REQUEST_URI'];

$route = new Router($request);

// Set different header if any of this url exist otherwise show regular header
if(strpos($request,  'test') | strpos($request,  'prutt') | strpos($request,  'kunder') | strpos($request,  'test') | strpos($request,  'skapa-produkt') | strpos($request,  'orders') !== false) {
    include_once 'admin/adminheader.php';
} else {
    include_once 'header.php';
}



$route->get('', '/start');

$route->get('Skapa-avsnitt', '/admin/createepi');

$route->get('login', '/user/userlogin');

$route->get('logout', '/user/logout');

$route->get('userhome', '/user/userhome');

// include_once 'footer.php';

?>