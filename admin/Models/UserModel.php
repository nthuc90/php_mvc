<?php 
require_once 'DatabaseModel.php';
    class UserModel extends DatabaseModel{
       function selectAllUser(){
            $sql = "SELECT * from users";
            return $this->selectAll($sql);
       }
       function sltOneUs($id){
           $sql = "SELECT * from `users` WHERE id='$id' ";
           return $this->selectOne($sql);
       }
       function updateUs($id,$username,$avatar,$email,$password){
           $sql = "UPDATE `users` 
                SET `username` = '$username' ,`avatar` = '$avatar',
                     `email` = '$email' ,    `password` = '$password'
                WHERE `id` = $id";
                 return $this->executeSQL($sql);
           
      }
      function removeUs($id){
            $sql = "DELETE from  users WHERE id='$id'";
            return $this->executeSQL($sql);
    }
    }
?>