<?php
require_once('./Model/FightersModel.php');
require_once('./View/FightersView.php');
require_once('./Helpers/LoggedHelper.php');

class FightersController{

    private $model;
    private $view;
    private $helper;

    function __construct(){
        $this->model= new FightersModel();
        $this->view= new FightersView();
        $this->helper= new LoggedHelper();

        
    }

    function loadSelectWeightclass(){
        $loadSelect= $this->model->getWeightclass();
        $this->view->loadWeightclassSelect($loadSelect);
    }

    function showFighters(){
        $this->loadSelectWeightclass();
        $fighters = $this->model->getFighters();
        if ($this->helper->checkLogin()==true){
            $this->view->showUserFightersView($fighters);
        }else{
            
            $this->view->showFightersView($fighters);
        }
        
    }   
    
    function showFighter($id){
        $fighter=$this->model->getFighter($id);
        $this->view->showFighterView($fighter);
    }
    //tratar de hacer con y sin parametros desde showFighters?
    function showByCategory($weightclass){
        $this->loadSelectWeightclass();   
        $weightclassFighters = $this->model->getFightersByWeightclass($weightclass);
        if ($this->helper->checkLogin()==true){
            $this->view->showUserFightersView($weightclassFighters);
        }else{
            
            $this->view->showFightersView($weightclassFighters);
        }
        
    }

    function addFighter($name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank){
        $this->model->addFighter($name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank);
        $this->showFighters();        
    }

    function deleteFighter($id){
        $this->model->deleteFighter($id);
        $this->showFighters();
    }

    function editFighterPage($id){
        $fighter=$this->model->getFighter($id);
        $this->loadSelectWeightclass();
        $this->view->editFighter($fighter);  
    }

    function editFighter($id,$name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank){
        $this->model->saveChanges($id,$name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank);
        $this->showFighters();  
    }

}

