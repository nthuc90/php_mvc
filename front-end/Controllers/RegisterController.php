<?php
include_once './Models/RegisterModel.php';
require_once './commons/helper.php';
class RegisterController
{
    function Register()
    {
        $model = new RegisterModel();
        $user = '/^[a-zA-Z0-9\_]{3,20}$/';
        $error = "";
        $usernameErr = "";
        $passwordErr = "";
        $errRepass = "";
        if(isset($_POST['submitForm'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $repass = $_POST['re-password'];
            $phone = $_POST['phone_number'];
            if(preg_match($user,$usernameErr)){
                $error = null;
                $usernameErr = "Hãy nhập tài khoản !";
            }
            if($password == ""){
                $error = null;
                $passwordErr = "Hãy nhập mật khẩu !";
            }
            if($password != $repass){
                $error = null;
                $errRepass = "Mật khẩu không trùng khớp !";
            }
            if(isset($error) == true){
                $model->saveAdd($username,$password);
                header('location:?page=login');
            }
        }
        include_once './Views/register.php';
    }
}
