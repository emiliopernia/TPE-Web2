<?php

require_once('./View/LoginView.php');
require_once('./Model/UserModel.php');
require_once('./Helpers/LoggedHelper.php');

class LoginController{

    private $view;
    private $model;
    private $helper;
    
    

    function __construct(){
        $this->view= new LoginView();
        $this->model= new UserModel();
        $this->helper= new LoggedHelper();

    }


    function showLoginForm(){
        if ($this->helper->checkLogin()==true){
            $this->view->showLoginForm("Logueado");
        }else{
            $this->view->showLoginForm("Inicie sesion para acceder a ABM");
        }
    }

    function register(){
        if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['password'])){
            $userName=$_POST['name'];
            $userEmail=$_POST['email'];
            $userPassword= password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->model->newUser($userName,$userEmail,$userPassword);
            $this->view->showLoginForm("Registro exitoso");
        }

    }

    function loginForm(){
            if(!empty($_POST['email'])&&!empty($_POST['password'])){
            $userEmail=$_POST['email'];
            $userPassword= $_POST['password'];
            $user= $this->model->getUser($userEmail);

            if($user && password_verify($userPassword,$user->password)){
                session_start();
                $_SESSION['email']=$userEmail;
                $this->view->showLoginForm("Logueado");
            }else{
                $this->view->showLoginForm("Usuario no identificado");
            }     
            }
        }
        
    

    function logout(){
        session_start();
        session_destroy();
        $this->view->showLoginForm("Deslogueado");
    }
}

