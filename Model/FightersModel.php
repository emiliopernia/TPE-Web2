<?php

class FightersModel{

    private $db;

    function __construct(){

        $this->db=new PDO('mysql:host=localhost;'.'dbname=ufc;charset=utf8', 'root', '');
        
    }

    function getFighters(){
        
        $query = $this->db->prepare( "SELECT a.*, b.* FROM fighter a LEFT JOIN weightclass b ON a.weightClass_id=b.weightClass_id");
        $query->execute();
        $fighters = $query->fetchAll(PDO::FETCH_OBJ);
        return $fighters;
    }

    function getFighter($id){
        $query = $this->db->prepare( "SELECT a.*, b.* FROM fighter a LEFT JOIN weightclass b ON a.weightClass_id=b.weightClass_id WHERE id_fighter=?");
        $query->execute(array($id));
        $fighter = $query->fetch(PDO::FETCH_OBJ);
        return $fighter;
    }

    function getFightersByWeightclass($weightclass){
        $query = $this->db->prepare( "SELECT a.*, b.* FROM fighter a LEFT JOIN weightclass b ON a.weightClass_id=b.weightClass_id 
        WHERE a.weightClass_id=?");
        $query->execute(array($weightclass));
        $fighters = $query->fetchAll(PDO::FETCH_OBJ);
        return $fighters;
    }

    function addFighter($name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank){
        $query = $this->db->prepare("INSERT INTO fighter (name, nickname, nationality, age, record,
         height, weight, weightClass_id, weightClassRank) VALUES (?,?,?,?,?,?,?,?,?)");
         $query->execute(array($name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank));

    }

    function deleteFighter($id){
        $query=$this->db->prepare("DELETE FROM fighter WHERE id_fighter=?");
        $query->execute(array($id));

    }

    function saveChanges($id,$name, $nickname,$nationality,$age,$record,$height,$weight,$weightclass_id,$rank){
        $query=$this->db->prepare("UPDATE fighter SET name='$name', nickname='$nickname', nationality='$nationality', age='$age',
        record='$record',height='$height',weight='$weight',weightClass_id='$weightclass_id',weightClassRank='$rank' WHERE id_fighter=?");
        $query->execute(array($id));
    }
    
}