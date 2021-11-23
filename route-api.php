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
//$r->addRoute('comments', 'GET', 'ApiFightersController', 'getAllFightersComments');
$r->addRoute('comments/:ID', 'GET', 'ApiFightersController', 'getFighterComments');
$r->addRoute('comments', 'POST', 'ApiFightersController', 'addComment');
//$r->addRoute('comments/:ID', 'GET', 'ApiFightersController','getParticularComment');esto como se resolveria? (con una variable para modificar el endpoint a comment, por ejemplo?)
$r->addRoute('comments/:ID', 'DELETE', 'ApiFightersController', 'deleteComment');
//$r->addRoute('comments/:ID', 'PUT', 'ApiFightersController', 'editComment');


// rutea
$r->route($resource, $method);

