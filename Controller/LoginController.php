<?php

require_once('./View/LoginView.php');
require_once('./Model/UserModel.php');

class LoginController{

    private $view;
    private $model;
    

    function __construct(){
        $this->view= new LoginView();
        $this->model= new UserModel();
    }


    function showLoginForm(){
        $this->view->showLoginForm();
    }

    function register(){
        if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['password'])){
            $userName=$_POST['name'];
            $userEmail=$_POST['email'];
            $userPassword= password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->model->newUser($userName,$userEmail,$userPassword);
            $this->showLoginForm();
        }

    }

    function loginForm(){
        if(!empty($_POST['email'])&&!empty($_POST['password'])){
            $userEmail=$_POST['email'];
            $userPassword= $_POST['password'];
            $user= $this->model->getUser($userEmail);

            if($user && password_verify($userPassword,$user->password)){
                $this->view->showLoginForm($user->userName);
            }else{
                $this->view->showLoginForm("Usuario no identificado");

            }
            
            
        }
    }
}

