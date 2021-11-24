<?php

class LoggedHelper{

    private $logged=true;

    function __construct(){        
    }

    function checkLogin(){
        session_start();
        if(isset($_SESSION['email'])){
            return $this->logged;
        }
    }
    function login($user){
        session_start();
        $_SESSION['ID'] = $user->user_id;
        $_SESSION['userName'] = $user->userName;
        $_SESSION['addmin'] = $user->admin;
        $_SESSION['email'] = $user->email;
    }

    function logout(){
        session_start();
        session_destroy();
    }

    function checkAutorization(){
        {
            session_start();
            if (isset($_SESSION['ID'])&&isset($_SESSION['addmin'])) {
                $id = $_SESSION['ID'];
                $user = $_SESSION['addmin'];
                //como el valor que guarde en db es bolleano (admin 0 o 1), lo transformo para legibilidad
                if($user==0){
                    $user="user";
                }else if($user==1){
                   $user="admin"; 
                }
            } else {
                $id = "";
                $user=null;
            }
            $user = array(
                "id"=>$id,
                "user"=>$user
            );
            return $user;
        }
    }

    function isAdmin(){
        session_start();
        $user=$this->checkAutorization();
        if($user['user']=="admin"){
            return true;
        }else{
            return false;
        }
    }
}