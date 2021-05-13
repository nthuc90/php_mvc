<?php 
require_once './Models/UserModel.php';
class UserController{
    function showUs(){
        $model = new UserModel();
        $allUser = $model->selectAllUser();
        require_once './Views/User/index.php';
    }
    function delUs(){
        $model = new UserModel();
        if(isset($_GET['deleteID'])){
            $id = $_GET['deleteID'];
            $model->removeUs($id);
            header("location:?page=user&action=listUser");
        }
        require_once './Views/User/index.php';
    }
    
    function upUs(){
        $model = new UserModel();
        if(isset($_GET['editID'])){
            $id = $_GET['editID'];
            $us = $model->sltOneUs($id);
            require_once './Views/User/edit.php';
        if(isset($_POST['editSubmit'])){
                $id = $_GET['editID'];
                $username = $_POST['username'];
                $ava = $_POST['avatar'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
                if($model->updateUs($id,$username,$ava,$email,$pass)){
                    header("location:?page=user&action=listUser");
                }
        }
        }
        require_once './Views/User/edit.php';

    }
}

?>