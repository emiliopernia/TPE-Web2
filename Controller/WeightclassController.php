<?php
    require_once('Model/WeightclassModel.php');
    require_once('View/HomeView.php');

    class WeightclassController{

        private $model;
        private $view;

        function __construct(){
            $this->model= new WeightclassModel();
            $this->view= new HomeView();
        }

        function createNewWeightclass($weightclassName,$maxWeight,$minWeight){
            $this->model->createNewWeightclass($weightclassName,$maxWeight,$minWeight);
            $this->view->showHomeView();

        }

        function deleteWeightclass($id){
            $this->model->deleteWeightclass($id);
            $this->view->showHomeView();
        }

        function editWeightclass($id,$weightclassName,$maxWeight,$minWeight){
            $this->model->editWeightclass($id,$weightclassName,$maxWeight,$minWeight);
            $this->view->showHomeView();

        }
    }