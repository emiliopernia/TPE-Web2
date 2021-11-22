<?php
require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');

class FightersView{
    

    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    function loadWeightclassSelect($weightclasses){
        $this->smarty->assign('weightclasses',$weightclasses);
    }

    function showFightersView($fighters){
        $this->smarty->assign('fighters',$fighters);
        $this->smarty->display('templates/fightersTable.tpl');
    }

    function showFighterView($fighter,$user){
        var_dump($user);
        $this->smarty->assign('user',$user);
        $this->smarty->assign('fighter',$fighter);
        $this->smarty->display('templates/fighterInfoPage.tpl');
    }

}