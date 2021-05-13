<?php
require_once './Models/ProductModel.php';
require_once './Models/CategoryModel.php';
require_once './commons/helper.php';
class ProductController
{
    function showPr()
    {
        $model = new ProductModel();
        $allPr = $model->sltAllPr();
        require_once './Views/Products/index.php';
    }
    function delPr(){
        $model = new ProductModel();
        if (isset($_GET['deleteID'])) {
            $id = $_GET['deleteID'];
            $model->removePr($id);
            header("location:?page=product&action=listProduct");
        }
        require_once './Views/Products/index.php';
    }
    function insertPr()
    {
        $model = new ProductModel();
        $model1 = new CategoryModel();
        $cate = $model1->selectAllCate();
        $error = "";
        $nameErr = "";
        $priceErr = "";
        $imageErr = "";
        $descErr = "";
        if (isset($_POST['addSubmit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_FILES['image'];
            $cate_id = $_POST['cate_id'];
            $desc = $_POST['short_desc'];
          
            if ($name == "") {
                $error = null;
                $nameErr = "Tên sản phẩm không được trống !!";
            }
            if ($price == "") {
                $error = null;
                $priceErr = "Giá sản phẩm không được trống !!";
            }
            if ($desc == "") {
                $error = null;
                $descErr = "Nội dung sản phẩm không được trống !!";
            }
            if ($file['size'] > 0) {
                $filename = uniqid() . '-' . $image['name'];
                $destination = "../products/" . $filename;
                move_uploaded_file($image['tmp_name'],  $destination);
                $model->image = ltrim($destination, './');
                // var_dump($image);
            } else {
                $imageErr = "Ảnh sản phẩm không được trống !!";
                $error = null;
            }
            if (isset($error) == true) {
                $model->insertPr($name, $price, $image, $desc, $cate_id);
                header("location:?page=product&action=listProduct");
            }
        }
        require_once './Views/Products/add.php';
    }
    function editPr()
    {
        $model = new ProductModel();
        $model1 = new CategoryModel();
        if (isset($_GET['editID'])) {
            $cate = $model1->selectAllCate();
            $id = $_GET['editID'];
            $pr = $model->sltOnePr($id);
            $error = "";
            $nameErr = "";
            $priceErr = "";
            $imageErr = "";
            $descErr = "";

            if (isset($_POST['editSubmit'])) {
                $id = $_GET['editID'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['short_desc'];
                $cate_id = $_POST['cate_id'];

                if ($name == "") {
                    $error = null;
                    $nameErr = "Tên sản phẩm không được trống !!";
                }
                if ($price == "") {
                    $error = null;
                    $priceErr = "Giá sản phẩm không được trống !!";
                }
                if ($desc == "") {
                    $error = null;
                    $descErr = "Nội dung sản phẩm không được trống !!";
                }
                if (isset($error) == true) {
                    if ($_FILES['image']['name'] == "") {
                        $filename = $_POST['oldIMG'];
                        $model->updatePr($id, $name, $price, $filename, $desc, $cate_id);
                        header("location:?page=product&action=listProduct");
                    } else {
                        $image = $_FILES['image'];
                        $filename = uniqid() . '-' . $image['name'];
                        move_uploaded_file($image['tmp_name'], '../products' . $filename);
                        $model->updatePr($id, $name, $price, $filename, $desc, $cate_id);
                        header("location:?page=product&action=listProduct");
                    }
                } 
            }
            require_once './Views/Products/edit.php';
        }
    }
}
