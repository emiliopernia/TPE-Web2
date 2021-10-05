<?php
    require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');
    require_once('./Controller/HomeController.php');
    

class HomeView{

    private $smarty;

    function __construct()
    {
      $this->smarty= new Smarty();
    }

    function showHomeView(){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/bodyHome.tpl');
        $this->smarty->display('templates/footer.tpl');
    }
}