<?php

require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');


class RankingsView{

    private $smarty;
    
    function __construct(){
        $this->smarty= new Smarty();
    }

    function showRankings($fighters,$weightclasses){
        session_start();
        $this->smarty->assign('fighters',$fighters);
        $this->smarty->assign('weightclasses',$weightclasses);        
        $this->smarty->display('templates/rankings.tpl');
    }
}