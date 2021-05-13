<?php
    include_once './Models/HomeModel.php';
    require_once './commons/helper.php';
    class HomeController
    {
        function Home(){
            $model = new HomeModel();
            $product = $model->sltPrHome();
            $cate = $model->sltCateHome();
            $set = $model->sltSet();
            // $slide = $model->sltSli();
            if(isset($_GET['logout'])){
                $id = $_GET['logout'];
                session_destroy();
                header('location:?page');
            }
            
            require_once './Views/home.php';
        }
    }
?>