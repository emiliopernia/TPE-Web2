<?php
require_once 'libs/Router.php';
require_once 'api/ApiCommentsController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$r = new Router();

// arma la tabla de ruteo
//$r->addRoute('comments', 'GET', 'ApiCommentsController', 'getAllFightersComments');
$r->addRoute('comments/:ID', 'GET', 'ApiCommentsController', 'getFighterComments');
$r->addRoute('comments', 'POST', 'ApiCommentsController', 'addComment');
//$r->addRoute('comments/:ID', 'GET', 'ApiCommentsController','getParticularComment');esto como se resolveria? (con una variable para modificar el endpoint a comment, por ejemplo?)
$r->addRoute('comments/:ID', 'DELETE', 'ApiCommentsController', 'deleteComment');
//$r->addRoute('comments/:ID', 'PUT', 'ApiCommentsController', 'editComment');


// rutea
$r->route($resource, $method);

