<?php

    require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');

class LoginView{

    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    function showLoginForm($params=''){
        $this->smarty->assign('params',$params);
        $this->smarty->display('templates/login.tpl');
    }

}