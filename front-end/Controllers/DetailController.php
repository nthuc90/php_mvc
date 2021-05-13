<?php
    include_once './Models/DetailModel.php';
    require_once './commons/helper.php';
    class DetailController
    {
        function Detail(){
            $model = new DetailModel();
            $id = "";
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            $pr = $model->sltOneDetail($id);
            $cate = $model->sltCateDetail();
            $set = $model->sltSet();
            require_once './Views/detail.php';
        }
    }
?>