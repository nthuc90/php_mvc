<?php
include_once './Models/ShopModel.php';
require_once './commons/helper.php';
class ShopController
{
    function Shop()
    {
        $model = new ShopModel();
        if(isset($_GET['cateID'])){
            $id = $_GET['cateID'];
            $product = $model->sltPrShopId($id);
        }else{
            $product = $model->sltPrShop();
            $set = $model->sltSet();
        }
        $cate = $model->sltCateShop();
        require_once './Views/shop.php';
    }
}
