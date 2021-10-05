<?php
require_once('./Model/FightersModel.php');
require_once('./View/RankingsView.php');

class RankingsController{

    private $model;
    private $view;

    function __construct(){
        $this->model= new FightersModel;
        $this->view= new RankingsView;
    }

    function showRankings(){
        $weightclasses= $this->model->getWeightclass();
        $fighters=$this->model->getFighters();
        $this->view->showRankings($fighters,$weightclasses);

    }
}