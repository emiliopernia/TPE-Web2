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
}