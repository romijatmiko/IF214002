<?php

require_once "./router.php";
require_once "./handlers/admin-view.php";
require_once "./handlers/admin-edit.php";
require_once "./handlers/user-view.php";
require_once "./handlers/user-edit.php";
require_once "./handlers/menu-view.php";
require_once "./handlers/menu-edit.php";
require_once "./handlers/order-view.php";
require_once "./handlers/order-edit.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT');
header('Content-Type: application/json; charset=utf-8');

$router = new Router();
$router->addRoute('GET', '/user-view', function(){user();});
$router->addRoute('GET', '/admin-view', function(){admin();});
$router->addRoute('GET', '/menu-view', function(){menu();});
$router->doRouting();