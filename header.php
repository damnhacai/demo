<?php
include 'config/connect.php';
include 'config/funtion.php';
// session_start();
//   session_destroy();
ob_start();
// print_r($_SESSION);
?>
<?php
$slider =  execute("SELECT * FROM  image WHERE type = 0 and status = 0 ORDER BY ordering limit 0,5")->fetch_all(MYSQLI_ASSOC);
$banner =  execute("SELECT * FROM  image WHERE type = 1 and status = 0 ORDER BY ordering")->fetch_all(MYSQLI_ASSOC);
$payment =  execute("SELECT * FROM  image WHERE type = 3 and status = 0 ORDER BY ordering DESC limit 0,5")->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>12Book12 Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="public/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <!-- font-awesome css -->
    <!-- <link rel="stylesheet" href="public/css/font-awesome1.min.css"> -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!-- flexslider.css-->
    <link rel="stylesheet" href="public/css/flexslider.css">
    <!-- chosen.min.css-->
    <link rel="stylesheet" href="public/css/chosen.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/css/gooney-menu.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="public/css/responsive.css">
    <!-- modernizr css -->

</head>

<body class="home-4">
    <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-area-start -->
    <header>
        <!-- header-top-area-start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="language-area">
                            <ul>
                                <li><img src="public/img/flag/4.jpg" alt="flag" style="width: 20px; height: 15px" /><a href="#">Vietnamese<i class="fa fa-angle-down"></i></a>
                                    <div class="header-sub">
                                        <ul>
                                            <li><a href="#"><img src="public/img/flag/1.jpg" alt="flag" />english</a></li>
                                            <li><a href="#"><img src="public/img/flag/2.jpg" alt="flag" />france</a></li>
                                            <li><a href="#"><img src="public/img/flag/3.jpg" alt="flag" />croatia</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">VN?? (??)<i class="fa fa-angle-down"></i></a>
                                    <div class="header-sub dolor">
                                        <ul>
                                            <li><a href="#">EUR (???)</a></li>
                                            <li><a href="#">USD ($)</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="account-area text-right">
                            <ul>
                                <?php if (isset($_SESSION['customer'])) { ?>
                                    <li class="btn-group">
                                        <div id="triggerId" data-toggle="dropdown">Xin ch??o! <?php echo $_SESSION['customer']['name']; ?><i class="fa fa-angle-down" style="padding-left: 5px;"></i></div>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId" style="text-align: left;">
                                            <a style="display: block; width: 100%; padding: 5px;" href="account.php?rl=info"><i class="fa fa-user"></i>Th??ng tin t??i kho???n</a>
                                            <a style="display: block; width: 100%; padding: 5px;" href="account.php?rl=ckeckouthistory"><i class="fa fa-bitcoin"></i>L???ch s??? mua h??ng</a>
                                            <a style="display: block; width: 100%; padding: 5px;" href="xuli-account.php?action=logout"><i class="fa fa-sign-out"></i>Tho??t t??i kho???n</a>
                                        </div>
                                    </li>
                                <?php } else { ?>
                                    <li><a href="#" data-target="#modal-login" data-toggle="modal">????ng nh???p</a></li>
                                    <li><a href="register.php">????ng k??</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="modal fade" id="modal-login">
                            <div class="modal-dialog" style="width: 450px">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <p class="modal-title text-center" style="font-size: 22px">????ng nh???p</p>
                                        <br>
                                        <p>????ng nh???p v??o t??i kho???n ????? c?? th??? theo d??i ????n h??ng, l??u danh s??ch s???n ph???m y??u th??ch v?? nh???n nhi???u ??u ????i h???p d???n t??? Koparion!</p>
                                    </div>
                                    <div class="modal-body">
                                        <form action="xuli-account.php" class="form_login" method="POST" role="form">
                                            <input type="hidden" name="action" value="login">
                                            <div class="form-group">
                                                <label for="">Email *</label>
                                                <input type="text" class="form-control" placeholder="Nh???p Email" name="u_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="">M???t Kh???u *</label>
                                                <input type="password" class="form-control" placeholder="Nh???p m???t kh???u t??? 6 ?????n 32 k?? t???..." name="u_pass">
                                            </div>
                                            <div>
                                                <input type="checkbox">
                                                <label class="inline">Nh??? m???t kh???u</label>
                                            </div>
                                            <div style="margin: 10px auto 15px">
                                                <button type="submit" class="btn btn-warning btn-block">????ng nh???p</button>
                                            </div>
                                            <span class="text-center"> Qu??n m???t kh???u? Nh???n v??o <a href="">????y</a> !</span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-area-end -->
        <!-- header-mid-area-start -->
        <div class="header-mid-area ptb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="logo-area">
                            <a href="index.php"><img src="public/img/logo/2.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                        <div class="header-search">
                            <form action="category.php" id="search_form">
                                <input type="text" placeholder="Nh???p t??? kh??a . ." name="search"/>
                                <a href="javascript:{}" onclick="document.getElementById('search_form').submit();"><i class="fa fa-search"></i><input type="hidden"></a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="my-cart" id="cart-top">
                            <ul>
                                <li><a href="cart.php" id="cart"><i class="fa fa-shopping-cart"></i>Gi??? h??ng</a>
                                    <span><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></span>
                                    <div class="mini-cart-sub">
                                        <div class="cart-product">
                                            <?php if (isset($_SESSION['cart'])) { ?>
                                                <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
                                                    <div class="single-cart">
                                                        <div class="cart-img">
                                                            <a href="#"><img src="admin/public/image/product/<?php echo $value['image'] ?>" alt="book" /></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="#"><?php echo $value['name'] ?></a></h5>
                                                            <p><?php echo $value['quantity'] ?> x <span class="price"><?php echo $value['price'] ?></span></p>
                                                        </div>
                                                        <div class="cart-icon">
                                                            <a href="xuli-cart.php?action=remove&id=<?php echo $value['id']; ?>"><i class="fa fa-remove"></i></a>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                        <div class="cart-totals">
                                            <h5>Total <span class="price"><?php echo isset($_SESSION['total_cart']) ? $_SESSION['total_cart'] : 0 ?></span></h5>
                                        </div>
                                        <div class="cart-bottom">
                                            <a class="view-cart" href="cart.php">Xem gi??? h??ng</a>
                                            <a href="checkout.php">Thanh to??n</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-mid-area-end -->
        <!-- main-menu-area-start -->
        <div class="main-menu-area hidden-sm hidden-xs" id="header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-area">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.php">Trang ch???</a></li>
                                    <li><a href="category.php">Danh m???c<i class="fa fa-angle-down"></i></a>
                                        <div class="mega-menu">
                                            <?php
                                            $category = execute("SELECT * FROM category WHERE parent_id = 0");

                                            foreach ($category as $key => $value) {
                                                $parent = $value['id'];
                                                $sub = execute("SELECT * FROM category WHERE parent_id = $parent");
                                                ?>
                                                <span>
                                                    <a href="category.php?cate_id=<?php echo $value['id']; ?>" class="title"><?php echo $value['name']; ?></a>
                                                    <?php foreach ($sub as $k => $val) { ?>
                                                        <a href="category.php?cate_id=<?php echo $val['id']; ?>"><?php echo $val['name']; ?></a>
                                                    <?php } ?>
                                                </span>
                                            <?php } ?>
                                        </div>
                                    </li>
                                    <li><a href="news.php">Tin t???c</a></li>
                                    <li><a href="about.php">Gi???i thi???u</a></li>
                                    <li><a href="contact.php">Li??n h???</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-menu-area-end -->
        <!-- mobile-menu-area-start -->
        <div class="mobile-menu-area hidden-md hidden-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul id="nav">
                                    <li><a href="index.php">Trang ch???</a></li>
                                    <li><a href="category.php">Danh m???c</a>
                                        <ul>
                                            <?php foreach ($category as $key => $value) {
                                                $parent = $value['id'];
                                                $sub = execute("SELECT * FROM category WHERE parent_id = $parent");
                                                ?>
                                                <li><a href="#"><?php echo $value['name']; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="category.php">Th??? lo???i</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-details.html">product-details</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">blog-details</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="news.php">Tin t???c</a></li>
                                    <li><a href="about.php">Gi???i thi???u</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">blog-details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Li??n h???</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">blog-details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area-end -->
    </header>