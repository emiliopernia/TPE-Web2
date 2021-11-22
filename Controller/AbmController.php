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

    function showByCategory(){
        $this->loadSelectWeightclass();   
        $weightclassFighters = $this->model->getFightersByWeightclass($_POST['input_weightclass']);
        if ($this->helper->checkLogin()==true){
            $this->view->showUserFightersView($weightclassFighters);
        }else{  
            header("Location:".BASE_URL."/loginForm");
        }
        
    }

    //funciones de abmfighter

    function addFighter(){
        if (!empty ($_POST)) {
            $this->model->addFighter($_POST['name'], $_POST['nickname'],$_POST['nationality'],$_POST['age'],$_POST['record'],
            $_POST['height'],$_POST['weight'],$_POST['weightclass'],$_POST['rank']);
        }
        
        $this->redirectUrl();     
    }

    function deleteFighter($id){
        $this->model->deleteFighter($id);
        $this->redirectUrl();  
        
    }

    function editFighterPage($id){
        $fighter=$this->model->getFighter($id);
        $this->loadSelectWeightclass();
        $this->view->editFighter($fighter);  
    }

    function editFighter($id){
        if (!empty ($_POST)){
             $this->model->saveChanges($id,$_POST['name'], $_POST['nickname'],$_POST['nationality'],$_POST['age'],$_POST['record'],
        $_POST['height'],$_POST['weight'],$_POST['weightclass'],$_POST['rank']);
        }
       
        $this->redirectUrl(); 
    }

    //funciones de abmweightclass

    function createNewWeightclass(){
        if (!empty ($_POST)){
            $this->weightClassModel->createNewWeightclass($_POST['weightclass'], $_POST['maxWeight'], $_POST['minWeight']);
        }
        $this->redirectUrl(); 
    }

    function deleteWeightclass(){
        if (!empty ($_POST)){
            $msg=$this->weightClassModel->deleteWeightclass($_POST['weightclass']);
            if ($msg=="error"){
                $this->redirectUrl(); 
            }else{
                $this->redirectUrl(); 
            }
        }
            
    }

    function editWeightclass(){
        if (!empty ($_POST)){
            $this->weightClassModel->editWeightclass($_POST['id'],$_POST['weightclass'],$_POST['maxWeight'],$_POST['minWeight']);
        }
        $this->redirectUrl(); 
    }
}