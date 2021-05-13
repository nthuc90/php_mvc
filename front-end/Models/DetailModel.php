<?php
require_once '../admin/Models/DatabaseModel.php';
class DetailModel extends DatabaseModel
{
    function sltOneDetail($id)
    {
        $sql = "SELECT * FROM products as p
                JOIN categories as c
                ON c.id = p.cate_id
                WHERE p.id = $id";
        return $this->selectOne($sql);
    }
    function sltCateDetail()
    {
        $sql = "SELECT * FROM categories";
        return $this->selectAll($sql);
    }
    function sltSet(){
        $sql = "SELECT * from settings";
        return $this->selectAll($sql);
    }

}