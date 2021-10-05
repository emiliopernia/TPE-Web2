<?php

class FightersModel{

    private $db;

    function __construct(){

        $this->db=new PDO('mysql:host=localhost;'.'dbname=ufc;charset=utf8', 'root', '');
        
    }

    function getFighters(){
        
        $sentencia = $this->db->prepare( "SELECT a.*, b.* FROM fighter a LEFT JOIN weightclass b ON a.weightClass_id=b.weightClass_id");
        $sentencia->execute();
        $fighters = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $fighters;
    }

    function getFighter($id){
        $sentencia = $this->db->prepare( "SELECT * FROM fighter WHERE id_fighter=?");
        $sentencia->execute(array($id));
        $fighter = $sentencia->fetch(PDO::FETCH_OBJ);
        return $fighter;
    }

    function getWeightclass(){
        $sentencia = $this->db->prepare("SELECT * FROM weightclass");
        $sentencia->execute();
        $weightclasses= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $weightclasses;
    }

    function getFightersByWeightclass($weightclass){
        $sentencia = $this->db->prepare( "SELECT a.*, b.* FROM fighter a LEFT JOIN weightclass b ON a.weightClass_id=b.weightClass_id WHERE a.weightClass_id=?");
        $sentencia->execute(array($weightclass));
        $fighters = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $fighters;
    }
}