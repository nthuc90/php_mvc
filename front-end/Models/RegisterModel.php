<?php
require_once '../admin/Models/DatabaseModel.php';
class RegisterModel extends DatabaseModel
{
    function saveAdd($username,$password,$phone_number){
        $sql = "INSERT INTO `users`(`id`, `username`,`password`,`phone_number`)
        VALUES ('','$username','$password' ,'$phone_number')";
        return $this->executeSQL($sql);
    }
}
