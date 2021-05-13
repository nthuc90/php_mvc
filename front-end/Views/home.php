<?php 

require_once 'Controllers/HomeController.php';

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COZA | HOME</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="header__top">
            <nav class="container">
                <nav class="row">
                    <nav class="col-3">
                        <nav class="header__logo">
                            <a href="index.php"><img src="./public/img/logo-01.png" alt=""></a>
                        </nav>
                    </nav>
                    <nav class="col-6">
                        <nav class="header__menu">
                            <?php require_once 'layout/menu.php'?>
                        </nav>
                        <nav class="header__search">
                            <form action="" class="form-group">
                                <input type="text" placeholder="Search" class="form-control">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </nav>
                    </nav>
                    <nav class="col-3">
                        <nav class="header__user">
                            <nav class="row">
                                <nav class="col-2">
                                    <button class="btn btn-submit dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user"></i>
                                    </button>
                                    <nav class="dropdown-menu" data-toggle="dropdown">
                                        <a class="dropdown-item" href="">Tài khoản</a>
                                        <a class="dropdown-item" href="login.php">Đăng nhập</a>
                                        <hr>
                                        <a class="dropdown-item" href="">Đăng kí</a>
                                    </nav>
                                </nav>
                                <nav class="col-2">
                                    <button class="btn btn-submit" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                    <nav class="dropdown-menu" data-toggle="dropdown">
                                        <a class="dropdown-item" href="">Giỏ hàng</a>
                                        <a class="dropdown-item" href="">Thanh toán</a>
                                    </nav>
                                </nav>
                                
                            </nav>
                        </nav>
                    </nav>
                </nav>
            </nav>
        </nav>
    </header>
    <section>
        <nav class="container" >
            <nav class="row">
                <nav class="col-12">
                
                    <nav class="header__slide">
                        <img src="" id="image" alt="" width="100%">
                      
                    </nav>
                </nav>
            </nav>
        </nav>
       
    </section>
    <br>
    <main>
        <!--Sản phẩm mới-->
        <nav class="container">
            <nav class="row">
                <nav class="col-12">
                    <nav class="col-12">
                        <nav class="main__title">
                            <h3>Sản phẩm mới</h3>
                        </nav>
                    </nav>
                </nav>
            </nav>
            <nav class="form__product">
                <nav class="row">
                    <?php foreach ($product as $rows): ?>
                        <nav class="col-3">
                            <nav class="main__product">
                                <a href="">
                                    <img src="<?= $rows['image'] ?>" alt="">
                                </a>
                                <nav class="product__name">
                                    <a href="">
                                        <h5><?=$rows['name'] ?></h5>
                                    </a>
                                    <h6>
                                        <span><?= number_format($rows['price']) ?>đ</span>
                                    </h6>
                                </nav>
                                <nav class="product__cart">
                                    <button type="submit" class="btn btn-primary">Thêm giỏ hàng</button>
                                </nav>
                            </nav>
                        </nav>
                    <?php endforeach ?>
                </nav>
            </nav>
        </nav>
        <!--banner-->
        <nav class="container">
            <nav class="row">
                <nav class="col-12">
                    <nav class="main__sale">
                        <img src="./public/img/banner/slide-04.jpg" alt="" width="100%">
                    </nav>
                </nav>
            </nav>
        </nav>
        <br>
        <!--blog-->
        <nav class="container">
            <nav class="row">
                <nav class="col-12">
                    <nav class="col-12">
                        <nav class="main__title">
                            <h3>Tin tức</h3>
                        </nav>
                    </nav>
                </nav>
            </nav>
            <nav class="row">
                <nav class="col-4">
                    <nav class="main__blog">
                        <a href="">
                            <img src="./public/img/blog/blog-06.jpg" alt="">
                        </a>
                        <nav class="blog__title">
                            <a href=""><h4>Holiday on the move</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Consequatur pariatur accusamus ratione eum distinctio, dolorem iure, repellendus, nihil ducimus autem ipsa at beatae ullam mollitia suscipit officiis? Dolorum, nulla vero!</p>
                        </nav>
                    </nav>
                </nav>
                <nav class="col-4">
                    <nav class="main__blog">
                        <a href="">
                            <img src="./public/img/blog/blog-06.jpg" alt="">
                        </a>
                        <nav class="blog__title">
                            <a href=""><h4>Holiday on the move</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Consequatur pariatur accusamus ratione eum distinctio, dolorem iure, repellendus, nihil ducimus autem ipsa at beatae ullam mollitia suscipit officiis? Dolorum, nulla vero!</p>
                        </nav>
                    </nav>
                </nav>
                <nav class="col-4">
                    <nav class="main__blog">
                        <a href="">
                            <img src="./public/img/blog/blog-06.jpg" alt="">
                        </a>
                        <nav class="blog__title">
                            <a href=""><h4>Holiday on the move</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Consequatur pariatur accusamus ratione eum distinctio, dolorem iure, repellendus, nihil ducimus autem ipsa at beatae ullam mollitia suscipit officiis? Dolorum, nulla vero!</p>
                        </nav>
                    </nav>
                </nav>
            </nav>
        </nav>
    </main>
    <footer>
        <nav class="container">
        <!-- <?php foreach ($set as $rows):?> -->
            <nav class="row">
                <nav class="col-3">
                    <nav class="footer__logo">
                        <a href=""><img src="./public/img/logo-01.png" alt=""></a>
                    </nav>
                    <nav class="footer__add">
                        <p>Address:<?php echo $rows['addres'] ?></p>
                        <p>Email: <a href=""><?php echo $rows['email']?></a></p>
                        <p>Phone: <?php echo $rows['phone_number'] ?></p>
                       
                    </nav>
                </nav>
                <?php endforeach ?>
                <nav class="col-6">
                    <nav class="row">
                        <nav class="col-6">
                            <nav class="footer__about">
                                <h4>About</h4>
                                <p><a href="">About Us</a></p>
                                <p><a href="">About Our Shop</a></p>
                                <p><a href="">Secure Shopping</a></p>
                                <p><a href="">Delivery infomation</a></p>
                                <p><a href="">Privacy Policy</a></p>
                            </nav>
                        </nav>
                        <nav class="col-6">
                            <nav class="footer__about">
                                <h4>Top</h4>
                                <p><a href="">About Us</a></p>
                                <p><a href="">About Our Shop</a></p>
                                <p><a href="">Secure Shopping</a></p>
                                <p><a href="">Delivery infomation</a></p>
                                <p><a href="">Privacy Policy</a></p>
                            </nav>
                        </nav>
                    </nav>
                </nav>
                <nav class="col-3">
                    <nav class="footer__link">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fas fa-envelope"></i></a>
                        <a href=""><i class="fab fa-instagram-square"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </nav>
                </nav>
            </nav>
        </nav>
    </footer>


    <script src="./public/js/slide.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>

</html>