<?php
include_once './Controllers/HomeController.php';
include_once './Controllers/ShopController.php';
include_once './Controllers/DetailController.php';
include_once './Controllers/LoginController.php';
include_once './Controllers/RegisterController.php';

$page = isset($_GET['page']) ? $_GET['page'] : "";
switch ($page) {
    case '':
        $ctr = new HomeController();
        $ctr->Home();
        break;
    case 'shop':
        $action = isset($_GET['action']) ? $_GET['action'] : "";
        switch ($action) {
            case '':
                $ctr = new ShopController();
                $ctr->Shop();
                break;
        }
        break;
    case 'detail':
        $action = isset($_GET['action']) ? $_GET['action'] : "";
        switch ($action) {
            case '':
                $ctr = new DetailController();
                $ctr->Detail();
                break;
        }
        break;
    case 'login':
        $action = isset($_GET['action']) ? $_GET['action'] : "";
        switch ($action) {
            case '/':
                $ctr = new LoginController();
                $ctr->Login();
                break;
        }
        break;
    case 'register':
        $action = isset($_GET['action']) ? $_GET['action'] : "";
        switch ($action) {
            case '':
                $ctr = new RegisterController();
                $ctr->Register();
                break;
        }
        break;

    default:
        echo ("Error");
        break;
}
