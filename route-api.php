<?php
require_once 'libs/Router.php';
require_once 'api/ApiFightersController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$r = new Router();

// arma la tabla de ruteo
$r->addRoute('comments', 'GET', 'ApiFightersController', 'getAllFightersComments');
$r->addRoute('comments/:ID', 'GET', 'ApiFightersController', 'getFighterComments');
$r->addRoute('comments', 'POST', 'ApiFightersController', 'addComment');
$r->addRoute('comment/:ID', 'GET', 'ApiFightersController','getParticularComment');
$r->addRoute('comments/:ID', 'DELETE', 'ApiFightersController', 'deleteComment');
//$r->addRoute('comments/:ID', 'PUT', 'ApiFightersController', 'editFighter');


// rutea
$r->route($resource, $method);

