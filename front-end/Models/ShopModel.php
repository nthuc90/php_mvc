<?php
require_once '../admin/Models/DatabaseModel.php';
class ShopModel extends DatabaseModel
{
    function sltPrShop()
    {
        $sql = "SELECT * FROM products";
        return $this->selectAll($sql);
    }
    function sltPrShopId($id)
    {
        $sql = "SELECT * FROM products WHERE cate_id = $id";
        return $this->selectAll($sql);
    }
    function sltCateShop()
    {
        $sql = "SELECT * FROM categories";
        return $this->selectAll($sql);
    }
    function sltSet(){
        $sql = "SELECT * from settings";
        return $this->selectAll($sql);
    }
}