<?php
require_once('Controller/FightersController.php');
require_once('Controller/HomeController.php');
require_once('Controller/LoginController.php');
require_once('Controller/RankingsController.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);




//para llamar a las funciones de los objetos, primero instancio la clase.
$homeController= new HomeController();
$fightersController= new FightersController();
$loginController= new LoginController();
$rankingsController= new RankingsController();

switch ($params[0]) {
    case 'home': 
        $homeController->showHome(); 
        break;
    case 'fighters': 
        $fightersController->showFighters(); 
        break;
    case 'showFighter': 
        $fightersController->showFighter($params[1]); 
        break;
    case 'weightclass': 
        $filtro = $_POST['input_weightclass'];
        $fightersController->showByCategory($filtro);
        break;
    case 'loginForm': 
        $loginController->showLoginForm();
        break;
    case 'rankings':
        $rankingsController->showRankings();
        break;
    case 'register':
        $loginController->register();
        break;  
    case 'login':
        $loginController->loginForm();
        break;    
    default: 
        echo('404 Page not found'); 
        break;
        
}