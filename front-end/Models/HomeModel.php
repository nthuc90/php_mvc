<?php
require_once '../admin/Models/DatabaseModel.php';
class HomeModel extends DatabaseModel
{
    function sltPrHome()
    {
        $sql = "SELECT * FROM products LIMIT 6";
        return $this->selectAll($sql);
    }
    function sltCateHome()
    {
        $sql = "SELECT * FROM categories LIMIT 6";
        return $this->selectAll($sql);
    }
    function sltSet(){
        $sql = "SELECT * from settings";
        return $this->selectAll($sql);
    }
    function sltSli(){
        $sql = "SELECT * from slides";
        return $this->selectAll($sql);
    }
}