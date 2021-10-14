<?php
require_once('./Model/FightersModel.php');
require_once('./Model/WeightclassModel.php');
require_once('./View/RankingsView.php');

class RankingsController{

    private $weightClassModel;
    private $model;
    private $view;

    function __construct(){
        $this->weightClassModel= new WeightclassModel();
        $this->model= new FightersModel();
        $this->view= new RankingsView();
    }

    function showRankings(){
        $weightclasses= $this->weightClassModel->getWeightclass();
        $fighters=$this->model->getFighters();
        $this->view->showRankings($fighters,$weightclasses);

    }
}