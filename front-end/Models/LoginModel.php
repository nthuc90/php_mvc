<?php
require_once '../admin/Models/DatabaseModel.php';
class LoginModel extends DatabaseModel
{
    function sltLogin(){
        $sql = "SELECT * FROM users ";
        return $this->selectAll($sql);
    }
}
?>