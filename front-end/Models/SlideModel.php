<?php 
require_once '../admin/Models/DatabaseModel.php';
class SlideModel extends DatabaseModel {
    function sltSli(){
        $sql = "SELECT * from slides";
        return $this->selectAll();
    }
}



?>