<?php
require_once 'DatabaseModel.php';
class ProductModel extends DatabaseModel
{
    function sltAllPr()
    {
        $sql = "SELECT * FROM `categories` as c 
                  JOIN `products` as p ON p.cate_id = c.id";
        return $this->selectAll($sql);
    }
    function sltOnePr($id)
    {
        $sql = "SELECT * FROM `products` WHERE id='$id' ";
        return $this->selectOne($sql);
    }
    function insertPr($name, $price, $filename, $desc, $cate_id)
    {
        $sql = "INSERT INTO `products`(`id`, `name`,`price`,`image`,`short_desc`,`cate_id`)
                                 VALUES ('','$name','$price','$image','$desc','$cate_id')";
        return $this->executeSQL($sql);
    }
    function removePr($id)
    {
        $sql = "DELETE FROM `products` WHERE id='$id'";
        return $this->executeSQL($sql);
    }
    function updatePr($id, $name, $price, $filename, $desc, $cate_id)
    {
        $sql = "UPDATE `products` 
                   SET `name`='$name',`price`='$price',
                       `image`='$filename',`short_desc`='$desc',
                       `cate_id`='$cate_id' 
                   WHERE id='$id' ";
        return $this->executeSQL($sql);
    }
}
