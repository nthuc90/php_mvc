<?php 
require_once 'DatabaseModel.php';
class SettModel extends DatabaseModel {
    function sltAllSet(){
    $sql = "SELECT * from settings";
    return $this->selectAll($sql);
    }
    function sltOneSet($id){
        $sql = "SELECT * from settings WHERE id= '$id'";
        return $this->selectOne($sql);
    }
    function updateSet($id,$addres,$phone_number,$email){
        $sql ="UPDATE `settings` 
                SET  `addres` = '$addres',
                     `phone_number` = '$phone_number',
                     `email` = '$email' 
                     WHERE id = '$id'";
         return $this->executeSQL($sql);
        
        
    }
    function removeSet($id){
        $sql = "DELETE from settings WHERE id='$id'";
        return $this->executeSQL($sql);
    }
  
}
?>