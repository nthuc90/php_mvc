<?php
    require_once './Controllers/MainController.php';
    require_once './Controllers/CategoryController.php';
    require_once './Controllers/ProductController.php';
    require_once './Controllers/UserController.php';
    require_once './Controllers/SettingController.php';
    require_once './Controllers/SlideController.php';
    $page = isset($_GET['page'])?$_GET['page']:"";
    switch ($page) {
        case '':
            $ctr = new MainController();
            $ctr->HomeAdmin();
            break;
        case 'cate':
            $action=isset($_GET['action'])?$_GET['action']:"";
            switch ($action) {
                case 'listCate':
                    $ctr = new CategoryController();
                    $ctr->showCate();
                    break;
                case 'insert':
                    $ctr = new CategoryController();
                    $ctr->insertCate();
                    break;
                case 'update':
                    $ctr = new CategoryController();
                    $ctr->updateCate();
                    break;
                case 'delete':
                    $ctr = new CategoryController();
                    $ctr->delCate();
                    break;
            }
            break;
        case 'product':
            $action=isset($_GET['action'])?$_GET['action']:"";
            switch ($action) {
                case 'listProduct':
                    $ctr = new ProductController();
                    $ctr->showPr();
                    break;
                case 'insert':
                    $ctr = new ProductController();
                    $ctr->insertPr();
                    break;
                case 'update':
                    $ctr = new ProductController();
                    $ctr->editPr();
                    break;
                case 'delete':
                    $ctr = new ProductController();
                    $ctr->delPr();
                    break;
            }
            break;
        case 'user':
            $action=isset($_GET['action'])?$_GET['action']:"";
            switch($action){
                case 'listUser':
                    $ctr= new UserController();
                    $ctr->showUs();
                    break;
                case 'update':
                    $ctr = new UserController();
                    $ctr->upUs();
                    break;
                case 'delete':
                    $ctr = new UserController();
                    $ctr->delUs();
                break;
            }
        case 'slide':
            $action=isset($_GET['action'])?$_GET['action']:"";
            switch($action){
                case 'listSlide':
                    $ctr= new SlideController();
                    $ctr->showSli();
                    break;
                case 'update':
                    $ctr = new SlideController();
                    $ctr->upSli();
                    break;
                case 'delete':
                    $ctr = new SlideController();
                    $ctr->delSli();
                    break;
                case 'insert':
                    $ctr = new SlideController();
                    $ctr->insertSli();
                    break;
            }
        case 'setting':
            $action=isset($_GET['action'])?$_GET['action']:"";
            switch($action){
                case 'listSett':
                    $ctr = new SettingController();
                    $ctr->showSet();
                    break;
                case 'update':
                    $ctr = new SettingController();
                    $ctr->upSet();
                    break;
                // case 'delete':
                //     $ctr = new SettingController();
                //     $ctr->delSet();
                //     break;
            }
        default:
            echo ("Error");
            break;
    }
?>