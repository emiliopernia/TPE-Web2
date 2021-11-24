<?php

class CommentsModel{
    private $db;

    function __construct(){

        $this->db=new PDO('mysql:host=localhost;'.'dbname=ufc;charset=utf8', 'root', '');
        
    }

    function addComment($comment, $score, $user_id, $id_fighter){
        $insert = 'INSERT INTO comment ( comment, score, user_id, id_fighter) VALUES ( ?,?,?,?);';
        $query = $this->db->prepare($insert);
        $query->execute(array($comment, $score, $user_id, $id_fighter));

        $lastId = $this->db->lastInsertId();

        return  $lastId;
    }

    /*function getAllComments(){
        $query = $this->db->prepare('SELECT * FROM comment');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }*/

    function getFighterComments($id)
    {
        $query = $this->db->prepare('SELECT * FROM comment WHERE id_fighter=?');
        $query->execute(array($id));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getFighterCommentsByFilter($id,$score){
        $query = $this->db->prepare('SELECT * FROM comment WHERE id_fighter=? AND score=?');
        $query->execute(array($id,$score));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getParticularComment($id){
        $query = $this->db->prepare('SELECT * FROM comment  WHERE id_comment=?');
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    function deleteComment($id){
        $query = $this->db->prepare('DELETE FROM comment WHERE id_comment=?');
        $query->execute(array($id));
    }


        
}