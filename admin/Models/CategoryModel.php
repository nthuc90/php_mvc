<?php
require_once 'DatabaseModel.php';
class CategoryModel extends DatabaseModel
{
    function selectAllCate()
    {
        $sql = "SELECT * FROM categories";
        return $this->selectAll($sql);
    }
    function sltOneCate($id)
    {
        $sql = "SELECT * FROM `categories` WHERE id='$id' ";
        return $this->selectOne($sql);
    }
    function insertCate($name)
    {
        $sql = "INSERT INTO `categories`(`id`, `cate_name`) VALUES ('','$name')";
        return $this->executeSQL($sql);
    }
    function removeCate($id)
    {
        $sql = "DELETE FROM `categories` WHERE id='$id'";
        return $this->executeSQL($sql);
    }
    function updateCate($id, $name)
    {
        $sql = "UPDATE `categories` 
                       SET `cate_name`='$name'
                       WHERE id='$id' ";
        return $this->executeSQL($sql);
    }
}
