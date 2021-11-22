<?php

class UserModel{

    private $db;

    function __construct(){

        $this->db=new PDO('mysql:host=localhost;'.'dbname=ufc;charset=utf8', 'root', '');
        
    }

    function newUser($userName,$userEmail,$userPassword){
        $query= $this->db->prepare('INSERT INTO user (userName,email,password) VALUES (?,?,?)');
        $query->execute([$userName,$userEmail,$userPassword]);
    }

    function getUser($userEmail){
        $query=$this->db->prepare('SELECT * FROM user WHERE email=?');
        $query->execute([$userEmail]);
        $user= $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}