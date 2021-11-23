<?php
    require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');
    

class HomeView{

    private $smarty;

    function __construct()
    {
      $this->smarty= new Smarty();
    }

    function showHomeView(){ 
        session_start();
        $this->smarty->display('templates/bodyHome.tpl');
    }
}