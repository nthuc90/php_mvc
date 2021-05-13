<?php
include_once './Models/LoginModel.php';
require_once './commons/helper.php';
session_start();

class LoginController
{
    function Login()
    {
        $model = new LoginModel();
        $users = $model->sltLogin();
        $error = "";
        $usernameErr = "";
        $passwordErr = "";
        $_SESSION['id'] = "";
        $_SESSION['username'] = "";
        $_SESSION['password'] = "";
        if (isset($_POST['submitForm'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            foreach ($users as $key => $value) {
                $_SESSION['id'] = $value['id'];
                $_SESSION['username'] = $value['username'];
                $_SESSION['password'] = $value['pass'];
            }
            if ($username == "") {
                $error = null;
                $usernameErr = "Hãy nhập tài khoản !";
            }
            if ($password == "") {
                $error = null;
                $passwordErr = "Hãy nhập mật khẩu !";
            } else if ($password != $_SESSION['password'] || $username != $_SESSION['username']) {
                $error = null;
                $passwordErr = "Sai tài khoản hoặc mật khẩu";
            }
            if (isset($error) == true) {
                header('location:?page=');
            }
        }

        require_once './Views/login.php';
    }
}
