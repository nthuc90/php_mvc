<?php 
require_once 'DatabaseModel.php';
class SlideModel extends DatabaseModel{
    function sltSlide(){
        $sql = "SELECT * from slides";
        return $this->selectAll($sql);
    }
    function sltOneSli($id){
        $sql = "SELECT * from slides WHERE id='$id'";
        return $this->selectOne($sql);
    }
    function updateSlide($id,$name,$image,$content){
        $sql = "UPDATE `slides`
                SET `name` = '$name',
                    `image` =  '$image',
                    `content` = '$content'

                WHERE id = '$id' ";
        return $this->executeSql($sql);
    }
    function removeSli($id){
        $sql = "DELETE from slides WHERE id='$id'";
        return $this->executeSQL($sql);
    }

    function insertSlide(){
        $sql = "INSERT into `slides` ('`id' ,`name`,`image`,`content`) VALUES ('','$name', '$image','$content')";
        return $this->executeSQL($sql);
    }
}


?>