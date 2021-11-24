<?php
require_once("api/ApiView.php");
require_once('./Model/CommentsModel.php');
require_once('./Helpers/LoggedHelper.php');

class ApiCommentsController{

    private $view;
    private $model;
    private $data;
    private $helper;

    function __construct(){
        $this->view= new ApiView();
        $this->model= new CommentsModel();
        $this->helper= new LoggedHelper();
        $this->data = file_get_contents("php://input");//para obtener el body del request

    }

    private function getData(){
        return json_decode($this->data);//de string a json
    }

    function addComment(){
        if ($this->helper->checkLogin()==true){
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
    }

    /*Aun no lo uso
    function getAllFightersComments(){
        
        $comments = $this->model->getAllComments();

        if ($comments) {
            $this->view->response($comments, 200);
        } else {
            $this->view->response("No se pueden obtener comentarios", 404);
        }
    }*/

    function getFighterComments($params = null){
        $id = $params[':ID'];
        $comment = $this->model->getFighterComments($id);

        if ($comment) {
            $this->view->response($comment, 200);
        } else {
            $this->view->response("No se encontraron comentarios para este peleador", 404);
        }
    }
    
    /*Aun sin uso
    function getParticularComment($params = null){
        $id = $params[':ID'];
        $comment = $this->model->getParticularComment($id);

        if ($comment) {
            $this->view->response($comment, 200);
        } else {
            $this->view->response("No existe el comentario con el id={$id}", 404);
        }
    }*/

    function deleteComment($params=null){
        if($this->helper->isAdmin()){
            $id = $params[':ID'];
            $comment= $this->model->getParticularComment($id);
            if($comment){
                $this->model->deleteComment($id);
                $this->view->response("Borrado exitosamente el comentario con el id={$id}", 200);
            }else{
            $this->view->response("No existe el comentario con el id={$id}", 404);
            }
        }else{
            $this->view->response("Sin autorizacion", 401);
        }
        
    }

  
}