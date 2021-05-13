<?php
    class DatabaseModel {
        public $conn;
        function __construct(){
            $host = 'localhost';
            $db = 'shop-quan-ao';
            $user = 'root';
            $pass = '';
            $this->conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        }
        function selectAll($sql){
            return $this->conn->query($sql);
        }
        function selectOne($sql){
            $result=$this->conn->query($sql);
            return $result->fetch();
        }
        function executeSQL($sql){
            $result=$this->conn->prepare($sql);
            return $result->execute();
        }
    }
?>