<?php

require_once('./Model/FightersModel.php');
require_once('./Model/WeightclassModel.php');
require_once('./View/AbmView.php');
require_once('./Helpers/LoggedHelper.php');

class AbmController{

    private $model;
    private $weightClassModel;
    private $view;
    private $helper;

    function __construct(){

        $this->model= new FightersModel();
        $this->weightClassModel= new WeightclassModel();
        $this->view= new AbmView();
        $this->helper= new LoggedHelper();
    }

    function loadSelectWeightclass(){
        $loadSelect= $this->weightClassModel->getWeightclass();
        $this->view->loadWeightclassSelect($loadSelect);
    }

    function redirectUrl(){
        header("Location:".BASE_URL."/abm");
    }

    function showFighters(){
        $this->loadSelectWeightclass();
        $fighters = $this->model->getFighters();
        if ($this->helper->checkLogin()==true){
            $this->view->showUserFightersView($fighters);
        }else{
            header("Location:".BASE_URL."/loginForm");
        }
    }

    function showByCategory($weightclass){
        $this->loadSelectWeightclass();   
        $weightclassFighters = $this->model->getFightersByWeightclass($weightclass);
        if ($this->helper->checkLogin()==true){
            $this->view->showUserFightersView($weightclassFighters);
        }else{  
            header("Location:".BASE_URL."/loginForm");
        }
        
    }

    //funciones de abmfighter

    function addFighter($name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank){
        $this->model->addFighter($name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank);
        header("Location:".BASE_URL."/abm");       
    }

    function deleteFighter($id){
        $this->model->deleteFighter($id);
        header("Location:".BASE_URL."/abm");
    }

    function editFighterPage($id){
        $fighter=$this->model->getFighter($id);
        $this->loadSelectWeightclass();
        $this->view->editFighter($fighter);  
    }

    function editFighter($id,$name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank){
        $this->model->saveChanges($id,$name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank);
        header("Location:".BASE_URL."/abm");
    }

    //funciones de abmweightclass

    function createNewWeightclass($weightclassName,$maxWeight,$minWeight){
        $this->weightClassModel->createNewWeightclass($weightclassName,$maxWeight,$minWeight);
        header("Location:".BASE_URL."/abm");
    }

    function deleteWeightclass($id){
        $this->weightClassModel->deleteWeightclass($id);
        header("Location:".BASE_URL."/abm");
    }

    function editWeightclass($id,$weightclassName,$maxWeight,$minWeight){
        $this->weightClassModel->editWeightclass($id,$weightclassName,$maxWeight,$minWeight);
        header("Location:".BASE_URL."/abm");
    }
}