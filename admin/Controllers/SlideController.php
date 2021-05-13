<?php
require_once './Models/SlideModel.php';
Class SlideController {
    function showSli(){
        $model = new SlideModel();
        $sli = $model->sltSlide();
        require_once './Views/Slide/index.php';
    }
    function delSli(){
        $model = new SlideModel();
       if(isset($_GET['deleteID'])){
           $id = $_GET['deleteID'];
           $model->removeSli($id);
           header("location:?page=slide&action=listSlide");
       }
    }
    function upSli(){
        $model = new SlideModel();
        if(isset($_GET['editID'])){
            $id = $_GET['editID'];
            $upSli = $model->sltOneSli($id);
            require_once './Views/Slide/edit.php';
            if(isset($_POST['editSubmit'])){
                $id = $_GET['editID'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $content = $_POST['content'];
                if($model->updateSlide($id,$name,$image,$content)){
                    header("location:?page=slide&action=listSlide");
                    require_once './Views/Slide/edit.php';
                }
            }
        }
        
    }

    function insertSli(){
        $model = new SlideModel();
        if(isset($_POST['addSubmit'])){
            $name = $_POST['name'];
            $image = $_FILES['image'];
            $content = $_POST['content'];
            if($model->insertSlide($name,$image,$content)){
                header("location:?page=slide&action=listSlide");
                require_once './Views/Slide/add.php';
            }
        }
    }
    
}

?>
