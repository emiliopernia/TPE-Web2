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

    function getAllComments(){
        $query = $this->db->prepare('SELECT * FROM comment');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }


        
}