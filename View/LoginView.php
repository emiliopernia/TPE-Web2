<?php

    require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');
    require_once('./Controller/loginController.php');

class LoginView{

    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    function showLoginForm($params=''){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('params',$params);
        $this->smarty->display('templates/login.tpl');
        $this->smarty->display('templates/footer.tpl');
    }

}