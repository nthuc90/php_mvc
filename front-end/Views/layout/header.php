<header>
        <nav class="header__top">
            <nav class="container">
                <nav class="row">
                    <nav class="col-3">
                        <nav class="header__logo">
                            <a href="index.php"><img src="img/logo-01.png" alt=""></a>
                        </nav>
                    </nav>
                    <nav class="col-6">
                        <nav class="header__menu">
                            <?php include_once 'layout/menu.php'?>
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
                                        <a class="dropdown-item" href="">Đăng nhập</a>
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