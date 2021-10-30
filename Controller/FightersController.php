<?php
require_once('./Model/FightersModel.php');
require_once('./Model/WeightclassModel.php');
require_once('./View/FightersView.php');

class FightersController{

    private $fightersModel;
    private $weightClassModel;
    private $view;


    function __construct(){
        $this->fightersModel= new FightersModel();
        $this->weightClassModel= new WeightclassModel();
        $this->view= new FightersView();

        
    }

    function loadSelectWeightclass(){
        $loadSelect= $this->weightClassModel->getWeightclass();
        $this->view->loadWeightclassSelect($loadSelect);
    }

    function showFighters(){
        $this->loadSelectWeightclass();
        $fighters = $this->fightersModel->getFighters();
        $this->view->showFightersView($fighters);        
    }   
    
    function showFighter($id){
        $fighter=$this->fightersModel->getFighter($id);
        $this->view->showFighterView($fighter);
    }

    function showByCategory(){
        $this->loadSelectWeightclass();   
        if (!empty ($_POST)) {
            $weightclassFighters = $this->fightersModel->getFightersByWeightclass($_POST['input_weightclass']); 
        }
           
        $this->view->showFightersView($weightclassFighters); 
    }

}

