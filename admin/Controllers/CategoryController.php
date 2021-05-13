<?php
require_once './Models/CategoryModel.php';
class CategoryController
{
    function showCate()
    {
        $model = new CategoryModel();
        $allCate = $model->selectAllCate();
        require_once './Views/Categories/index.php';
       
    }
    function delCate(){
        $model = new CategoryModel();
        if(isset($_GET['deleteID'])){
            $id = $_GET['deleteID'];
            $model->removeCate($id);
            header("location:?page=cate&action=listCate");

        }
        require_once './Views/Categories/index.php';
    }
    function insertCate()
    {
        
        $model = new CategoryModel();
        $messErr = "";    
        if (isset($_POST['addSubmit'])) {
            $name = $_POST['cate_name'];
            if($name == ""){
                $messErr = "Tên danh mục rỗng !!";
            }else{
                $model->insertCate($name);
                header("location:?page=cate&action=listCate");
            }
        }
        require_once './Views/Categories/add.php';
        $messErr;
        
    }
    function updateCate()
    {
        $model = new CategoryModel();
        if(isset($_GET['editID'])){
            $id = $_GET['editID'];
            $cate = $model->sltOneCate($id);
            require_once './Views/Categories/edit.php';
            if (isset($_POST['editSubmit'])) {
                $id = $_GET['editID'];
                $name = $_POST['cate_name'];
                if ($model->updateCate($id, $name)) {
                    header("location:?page=cate&action=listCate");
                } else {
                    echo ("Error");
                }
            }
        }
    }
}
