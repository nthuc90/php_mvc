<?php 

// require_once 'connect/constants.php';
// require_once 'controller/mainController.php';
// require_once './Controllers/DetailController.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COZA | SHOP</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-dropdown-hover/4.2.0/jquery.bootstrap-dropdown-hover.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-dropdown/2.0.3/jquery.dropdown.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
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
                            <ul>
                                <li><a href="home.php">Trang chủ</a></li>
                                <li><a href="shop.php">Sản phẩm</a></li>
                                <li><a href="./tin_tuc.php">Tin tức</a></li>
                                <li><a href="./lien_he.php">Liên hệ</a></li>
                            </ul>
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
                            <a href="login.php"><i class="fa fa-user"></i></a>
                            <label for="">|</label>
                            <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                        </nav>
                    </nav>
                </nav>
            </nav>
        </nav>
    </header>

    <main>
        <nav class="shop__text text-center">
            <h2>X-Brow</h2>
            <nav class="shop__text__options">
                <a href="home.php">Trang chủ</a>
                <i class="fa fa-chevron-right"></i>
                <a href="shop.php">Sản phẩm</a>
            </nav>
        </nav>
        <nav class="container">
            <nav class="row">
                
                <div class="row">
                <div class="card mb-3" style="max-width: 1110px;margin-left:30px">
                <div class="row g-0 text-center">
                <div class="col-md-4">
                <img src="./public/img/product/giay_the_thao_XSPORT_MLB_F1.jpg" alt="...">
                 </div>
                <div class="col-md-8">
                <div class="card-body" style="margin-left:300px">
                <h5 class="card-title"><?php echo $pr['name'] ?></h5>
                <p class="card-text"><?php echo $pr['price'] ?>đ</p>
                <p class="font-monospace">Color:</p>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-dark">Dark</button>
                <p class="font-monospace">Size: </p>
                <button type="button" class="btn btn-secondary btn-sm">SM</button>
                <button type="button" class="btn btn-secondary btn-sm">MD</button>
                <button type="button" class="btn btn-secondary btn-sm">LG</button>
                <button type="button" class="btn btn-secondary btn-sm">XL</button>
               <hr>
                <input type="number">
                <button>Thêm Giỏ Hàng</button>
      </div>
    </div>
  </div>
</div>
            </nav>
            
            <nav class="card mb-3">
                <nav class="right">
						
                    <nav class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
						
                        <nav class="tab-content">
                            <nav class="tab-pane active" id="tabs-1" role="tabpanel">
                                <nav class="product__details__tab__desc">
                                    <h6>Description</h6>
                                    <p><?php echo $pr['short_desc'] ?></p>
                                </nav>
                            </nav>
                            <nav class="tab-pane" id="tabs-2" role="tabpanel">
                                <nav class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id tincidunt nibh pulvinar a.</p>
                                </nav>
                            </nav>
                            <nav class="tab-pane" id="tabs-3" role="tabpanel">
                                <nav class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada.</p>
                                </nav>
                            </nav>
                        </nav>
                    </nav>
                </nav>
            </nav>
            <nav class="row">
                <nav class="col-12">
                    <nav class="shop__productTitle">
                        <h3>Sản phẩm liên quan</h3>
                    </nav>
                </nav>
                <nav class="col-12">
                    <nav class="row">
                        <nav class="col-3">
                            <nav class="main__product">
                                <a href="">
                                    <img src="./public/img/product/giay_the_thao_XSPORT_MLB_F1.jpg" alt="">
                                </a>
                                <nav class="product__name">
                                    <a href="">
                                        <h5>Giày thể thao XSPORT MLB F1</h5>
                                    </a>
                                    <h6>
                                        <del>2,000,000đ</del>
                                        <br>
                                        <span>1,650,000đ</span>
                                    </h6>
                                </nav>
                                <nav class="product__cart">
                                    <button type="submit" class="btn btn-primary">Thêm giỏ hàng</button>
                                </nav>
                            </nav>
                        </nav>
                        <nav class="col-3">
                            <nav class="main__product">
                                <a href="">
                                    <img src="./public/img/product/giay_the_thao_XSPORT_MLB_F1.jpg" alt="">
                                </a>
                                <nav class="product__name">
                                    <a href="">
                                        <h5>Giày thể thao XSPORT MLB F1</h5>
                                    </a>
                                    <h6>
                                        <del>2,000,000đ</del>
                                        <br>
                                        <span>1,650,000đ</span>
                                    </h6>
                                </nav>
                                <nav class="product__cart">
                                    <button type="submit" class="btn btn-primary">Thêm giỏ hàng</button>
                                </nav>
                            </nav>
                        </nav>
                        <nav class="col-3">
                            <nav class="main__product">
                                <a href="">
                                    <img src="./public/img/product/giay_the_thao_XSPORT_MLB_F1.jpg" alt="">
                                </a>
                                <nav class="product__name">
                                    <a href="">
                                        <h5>Giày thể thao XSPORT MLB F1</h5>
                                    </a>
                                    <h6>
                                        <del>2,000,000đ</del>
                                        <br>
                                        <span>1,650,000đ</span>
                                    </h6>
                                </nav>
                                <nav class="product__cart">
                                    <button type="submit" class="btn btn-primary">Thêm giỏ hàng</button>
                                </nav>
                            </nav>
                        </nav>
                        <nav class="col-3">
                            <nav class="main__product">
                                <a href="">
                                    <img src="./public/img/product/giay_the_thao_XSPORT_MLB_F1.jpg" alt="">
                                </a>
                                <nav class="product__name">
                                    <a href="">
                                        <h5>Giày thể thao XSPORT MLB F1</h5>
                                    </a>
                                    <h6>
                                        <del>2,000,000đ</del>
                                        <br>
                                        <span>1,650,000đ</span>
                                    </h6>
                                </nav>
                                <nav class="product__cart">
                                    <button type="submit" class="btn btn-primary">Thêm giỏ hàng</button>
                                </nav>
                            </nav>
                        </nav>
                    </nav>
                </nav>
            </nav>
        </nav>
    </main>

    <footer>
        <nav class="container">
        <?php foreach ($set as $rows):?>
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

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>