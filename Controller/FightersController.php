<?php
require_once('./Model/FightersModel.php');
require_once('./View/FightersView.php');

class FightersController{

    private $model;
    private $view;

    function __construct(){
        $this->model= new FightersModel();
        $this->view= new FightersView();
        
    }

    function loadSelectWeightclass(){
        $loadSelect= $this->model->getWeightclass();
        $this->view->loadWeightclassSelect($loadSelect);
    }

    function showFighters(){
        $this->loadSelectWeightclass();
        $fighters = $this->model->getFighters();
        $this->view->showFightersView($fighters);
    }   
    
    function showFighter($id){
        $fighter=$this->model->getFighter($id);
        $this->view->showFighterView($fighter);
    }
    //tratar de hacer con y sin parametros desde showFighters?
    function showByCategory($weightclass){
        $this->loadSelectWeightclass();   
        $weightclassFighters = $this->model->getFightersByWeightclass($weightclass);
        $this->view->showFightersView($weightclassFighters);

    }

}

