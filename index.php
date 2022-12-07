<?php

require_once 'functions.php';
session_start();
// error_reporting(0);
$userLevel = 'guest';
$userName = null;
if (isset($_SESSION['login'])) {
    if ($_SESSION['level'] == 'admin') {
        header('Location: http://localhost/skurent_project/admin/index.php');
    } else {    
        $userLevel = $_SESSION['level'];
        $userName = $_SESSION['name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img class="" src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#men">Men's</a></li>
                            <li class="scroll-to-section"><a href="#women">Women's</a></li>
                            <li class="scroll-to-section"><a href="#kids">Kid's</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="products.php">Products</a></li>
                                    <li><a href="single-product.php">Checkout</a></li>
                                </ul>
                            </li>
                            <?php if ($userLevel != 'user') : ?>
                            <li class="scroll-to-section"><a href="login.php">Login</a></li>
                            <?php else : ?>
                                
                                <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
                                <?php endif; ?>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Parfume</h4>
                                <span>Perfect parfume and fragrant</span>
                                <div class="main-border-button">
                                    <a href="products.php">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Women</h4>
                                            <span>Best Parfume For Women</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Women</h4>
                                                <p>This women's perfume is very fragrant and delicious</p>
                                                <div class="main-border-button">
                                                    <a href="products.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Men</h4>
                                            <span>Best parfume For Men</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Men</h4>
                                                <p>This men's perfume is very fragrant, delicious and lasts a long time</p>
                                                <div class="main-border-button">
                                                    <a href="products.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kids</h4>
                                            <span>Best Parfume for Kids</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Kids</h4>
                                                <p>perfume that is very suitable for children and sweet</p>
                                                <div class="main-border-button">
                                                    <a href="products.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Parfume</h4>
                                            <span>Best Parfume</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Parfume</h4>
                                                <p>Best All Parfume</p>
                                                <div class="main-border-button">
                                                    <a href="products.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Men's Latest</h2>
                        <span>Best parfume for man</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class="gambar" src="assets/images/sonar.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Sonar Sport</h4>
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class="gambar" src="assets/images/men-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Jayrosse GREY</h4>
                                    <span>Rp100.000</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class="gambar" src="assets/images/men-05.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Lacoste</h4>
                                    <span>$150.00</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class="gambar" src="assets/images/men-06.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Classic Spring</h4>
                                    <span>$120.00</span>
                                    <ul class="stars">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Women's Latest</h2>
                        <span>Best Parfume for Woman</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class="gambar" src="assets/images/women-04.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Coco Chanel</h4>
                                    <span>Rp100.000</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class="gambar" src="assets/images/women-02.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Alphar</h4>
                                    <span>Rp45.000</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class="gambar"src="assets/images/women-03.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>N5 CHANLEL</h4>
                                    <span>Rp56.000</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/women-04.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Classic Spring</h4>
                                    <span>$120.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kid's Latest</h2>
                        <span>Best parfume for kids</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class="gambar"src="assets/images/kids_01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Buttercup</h4>
                                    <span>Rp30.000</span>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img class= "gambar"src="assets/images/kids-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Eskulin Kids</h4>
                                    <span>Rp23.000</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/kids-03.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>DoReMi Thomas</h4>
                                    <span>Rp25.000</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/kids_01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Classic Spring</h4>
                                    <span>$120.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->

    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">7777 Kota Malang, Kecamatan Klojen, Jalan Raja rajaan no 17 </a></li>
                            <li><a href="#">Parfume</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>

                        <br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">ThemeWagon</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
            $("."+selectedClass).fadeIn();
            $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>