<?php
require_once("api/ApiView.php");
require_once('./Model/CommentsModel.php');

class ApiFightersController{

    private $view;
    private $model;
    private $data;

    function __construct(){
        $this->view= new ApiView();
        $this->model= new CommentsModel();
        $this->data = file_get_contents("php://input");

    }

    private function getData(){
        return json_decode($this->data);
    }

    function addComment(){
        // FALTAN CONTROLES DE LOGUEO

        $data = $this->getData();

        $comment = $data->comment;
        $score = $data->score;
        $user_id = $data->user_id;
        $id_fighter = $data->id_fighter;

        $added = $this->model->addComment($comment, $score, $user_id, $id_fighter);

        if ($added) {
            $this->view->response("Se agrego el comentario con id: {$added}", 200);
        } else {
            $this->view->response("El comentario no fue creado", 500);
        }
    }

    function getFighterComments(){
        $comments = $this->model->getAllComments();

        if ($comments) {
            $this->view->response($comments, 200);
        } else {
            $this->view->response("No se pueden obtener comentarios", 404);
        }
    }
}