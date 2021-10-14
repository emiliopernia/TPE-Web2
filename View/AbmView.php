<?php
require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');

class AbmView{

    private $smarty;
    function __construct(){
        $this->smarty= new Smarty();
    }

    function loadWeightclassSelect($weightclasses){
        $this->smarty->assign('weightclasses',$weightclasses);
    }

    function showUserFightersView($fighters){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('fighters',$fighters);
        $this->smarty->display('templates/userFightersList.tpl');
        $this->smarty->display('templates/footer.tpl');
    }

    function editFighter($fighter){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('fighter',$fighter);
        $this->smarty->display('templates/editFighterForm.tpl');
        $this->smarty->display('templates/footer.tpl');
       
    }
}
    