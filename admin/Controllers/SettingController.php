<?php 
require_once './Models/SettingModel.php';
 class SettingController{
     function showSet(){
         $model = new SettModel();
         $sett = $model->sltAllSet();
         require_once './Views/Setting/index.php';
     }
    // function delSet(){
    //     $model = new SettModel();
    //     if(isset($_GET['deleteID'])){
    //         $id = $_GET['deleteID'];
    //         $model->removeSet($id);
    //         header("location:?page=setting&action=listSett");
    //     }
    // }
     function upSet(){
         $model = new SettModel();
         if(isset($_GET['editID'])){
         $id = $_GET['editID'];
         $upSet = $model->sltOneSet($id);
         require_once './Views/Setting/edit.php';
         if(isset($_POST['editSubmit'])){
             $id = $_GET['editID'];
             $addres = $_POST['addres'];
             $phone_number = $_POST['phone_number'];
             $email = $_POST['email'];
             if($model->updateSet($id,$addres,$phone_number,$email)){
                 header("location:?page=setting&action=listSett");
                 require_once './Views/Setting/edit.php';
             }
         }
         }
        
    }




}
?>