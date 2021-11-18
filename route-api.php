<?php
require_once 'libs/Router.php';
require_once 'Controller/ApiFightersController.php';

//define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$r = new Router();

// arma la tabla de ruteo
$r->addRoute('fighters', 'GET', 'ApiFightersController', 'getFighters');
$r->addRoute('fighters/:ID', 'GET', 'ApiFightersController', 'getFighter');
$r->addRoute('fighters', 'POST', 'ApiFightersController', 'addFighter');
$r->addRoute('fighters/:ID', 'DELETE', 'ApiFightersController', 'deleteFighter');
$r->addRoute('fighters/:ID', 'PUT', 'ApiFightersController', 'editFighter');


// rutea
$r->route($resource, $method);

