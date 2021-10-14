<?php
require_once('Controller/FightersController.php');
require_once('Controller/HomeController.php');
require_once('Controller/LoginController.php');
require_once('Controller/RankingsController.php');
require_once('Controller/AbmController.php');

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
$abmController = new AbmController();

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
    case 'showFightersByWeightclass': 
        $fightersController->showByCategory($_POST['input_weightclass']);
        break;
    case 'rankings':
        $rankingsController->showRankings();
        break;
    case 'abm':
        $abmController->showFighters();
        break;
    case 'addFighter':
        $abmController->addFighter($_POST['name'], $_POST['nickname'],$_POST['nationality'],$_POST['age'],$_POST['record'],
        $_POST['height'],$_POST['weight'],$_POST['weightclass'],$_POST['rank']);
        break;
    case 'deleteFighter':
        $abmController->deleteFighter($params[1]);
        break;
    case 'editFighterPage':
        $abmController->editFighterPage($params[1]);
        break;
    case 'editFighter':
        $abmController->editFighter($params[1],$_POST['name'], $_POST['nickname'],$_POST['nationality'],$_POST['age'],$_POST['record'],
        $_POST['height'],$_POST['weight'],$_POST['weightclass'],$_POST['rank']);
        break;
    case 'userFighters': 
        $abmController->showFighters(); 
        break; 
    case 'userWeightclass': 
        $abmController->showByCategory($_POST['input_weightclass']);
        break;
    case 'loginForm': 
        $loginController->showLoginForm();
        break;
    case 'register':
        $loginController->register();
        break;  
    case 'login':
        $loginController->loginForm();
        break;  
    case 'logout':
        $loginController->logout();
        break; 
    case 'createWeightclass':
        $abmController->createNewWeightclass($_POST['weightclass'], $_POST['maxWeight'], $_POST['minWeight']);
        break; 
    case 'deleteWeightclass':
        $abmController->deleteWeightclass($_POST['weightclass']) ;
        break;
    case 'editWeightclass':
        $abmController->editWeightclass($_POST['id'],$_POST['weightclass'],$_POST['maxWeight'],$_POST['minWeight']);
     
    default: 
        echo('404 Page not found'); 
        break;
        
}