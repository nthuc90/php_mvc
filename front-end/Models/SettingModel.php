<?php 
require_once '../admin/Models/DatabaseModel.php';

class SettModel extends DatabaseModel {
    function sltSet(){
        $sql = "SELECT * from settings";
        return $this->selectAll($sql);
    }
} 