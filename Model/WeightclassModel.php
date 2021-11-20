<?php

class WeightclassModel{

    private $db;

    function __construct(){

        $this->db=new PDO('mysql:host=localhost;'.'dbname=ufc;charset=utf8', 'root', '');   
    }

    function getWeightclass(){
        $query = $this->db->prepare("SELECT * FROM weightclass");
        $query->execute();
        $weightclasses= $query->fetchAll(PDO::FETCH_OBJ);
        return $weightclasses;
    }

    function createNewWeightclass($weightclassName,$maxWeight,$minWeight){
        $query=$this->db->prepare("INSERT INTO weightclass (weightClassName, maxWeight, minWeight) VALUES (?,?,?)");
        $query->execute(array($weightclassName,$maxWeight,$minWeight));

    }

    function deleteWeightclass($id){
        try {
            $query=$this->db->prepare("DELETE FROM weightclass WHERE weightClass_id=?");
            $query->execute(array($id)); 
        } catch (PDOException $e) {
            if ($e->getCode() == '23000'){
                return "error";
            }
        
        }     
                        
    }

    function editWeightclass($id,$weightclassName,$maxWeight,$minWeight){
        $query=$this->db->prepare("UPDATE weightclass SET weightClassName='$weightclassName',maxWeight='$maxWeight',
        minWeight='$minWeight' WHERE weightClass_id=?");
        $query->execute(array($id));
    }
}