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

    function changeUserRol($email){
        $user=$this->getUser($email);
        $id = $user->user_id;
        $rol = $user->admin;
        $name = $user->userName;
        $mail = $user->email;
        $password = $user->password;

        if ($rol == 1) {
            $rol = 0;
        } else {
            $rol = 1;
        }

        $update = 'UPDATE user SET admin = ? , userName = ? , email = ? , password = ?  WHERE user_id=?';
        $query = $this->db->prepare($update);
        $query->execute(array($rol, $name, $mail, $password, $id));
    }

    function getUsers(){
        $query=$this->db->prepare('SELECT * FROM user');
        $query->execute();
        $users= $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function deleteUser($id){
        $query=$this->db->prepare('DELETE FROM user WHERE user_id=?');
        $query->execute(array($id));
    }
}