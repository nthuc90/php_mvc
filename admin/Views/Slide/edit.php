

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="crossorigin="anonymous"
            />
    </head>
    <body>
   
    <nav class="row">
            <nav class="col-2">
                <nav class="menu__sidebar">
                    <h3>Admin</h3>
                    <?php require_once './Views/layout/menu.php'; ?>
                </nav>
            </nav>
            
                <section>
                    <nav class="show-admin">
                   
                        <h1>Sửa Slides</h1>
                        <form action="" method="post">
                            <div>
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo ($upSli['name'])?>">
                            </div>
                            <div>
                                <label for="">Ảnh</label>
                                <input type="file" class="form-control" name="image" value="<?php echo ($upSli['image'])?>">
                            </div>
                            <div>
                                <label for="">Mô tả</label>
                                <input type="text" class="form-control" name="content" value="<?php echo ($upSli['content'])?>">
                            </div>
                            <div>
                                <input type="submit" name="editSubmit" value="Sửa" class="btn btn-primary">
                                <a href="?page=slide&action=listSlide" class="btn btn-danger">Hủy</a>
                            </div>
                        </form>
                    </nav>
                    </nav>
                </section>
            </nav>
        </nav>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </body>
</html>