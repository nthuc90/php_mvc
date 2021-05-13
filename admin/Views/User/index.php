
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
            <!-- <nav class="col-10"> -->
                <!-- <nav class="header__sidebar">
                    <nav class="row">
                        <nav class="col-12">
                            <nav class="dropdown">
                                <button class="btn btn-submit dropdown-toggle"
                                    type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                </button>
                                <nav class="dropdown-menu"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Tài khoản</a>
                                    <a class="dropdown-item" href="#">Đăng xuất</a>
                                </nav>
                            </nav>
                        </nav>
                    </nav>
                </nav> -->
                <section>
                    <nav class="show-admin">
                        <h1>Tài khoản</h1>
                     
                        <table border="1px" style="text-align:center">
                            <thead>
                                <tr>
                                    <th width="30">STT</th>
                                    <th width="70">Name</th>
                                    <th width="30">Ava</th>
                                    <th width="50">Email</th>
                                    <th width="60">Pass</th>
                                    <th><a href="?page=user&action=insert" class="btn btn-primary">Thêm mới</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allUser as $key=>$us): ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?=$us['username'] ?></td>
                                    <td><?=$us['avatar'] ?></td>
                                    <td><?=$us['email'] ?></td>
                                    <td><?=$us['password'] ?></td>
                                    <td>
                                    <a class="btn btn-primary" href="?page=user&action=update&editID=<?php echo ($us['id']) ?>">Edit</a>
                                    <a class="btn btn-danger" href="?page=user&action=delete&deleteID=<?php echo ($us['id']) ?>">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
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