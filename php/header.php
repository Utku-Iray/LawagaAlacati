<?php
$URL = 'data/menu.json';
$JSON = file_get_contents($URL);
$menu_JSON = json_decode($JSON);

$URL = 'data/categories.json';
$JSON = file_get_contents($URL);
$category_JSON = json_decode($JSON);

$URL = 'data/blog.json';
$JSON = file_get_contents($URL);
$blog_JSON = json_decode($JSON);
?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
    <!-- <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader" style="text-align:center">
                <div class="spinner"></div>
                <img width="200px" src="assets/images/logo/mavi-alacati.png" alt="">
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="W" class="letters-loading">
                        W
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- preloader end -->

    <!-- header start -->
    <header class="site-header site-header__3 site-header__4">
        <div class="menu-area menu-area__3 menu-area__4">
            <div class="container-fluid custom-width custom-width__2">
                <div class="row d-none d-xl-flex">
                    <div class="col-xl-5 col-lg-4 col-md-5 align-self-center">
                        <div class="main-menu main-menu__3 main-menu__4">
                            <nav>
                                <ul>
                                    <!-- <li class="menu-item-has-children"><a href="index.php">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.php">Home 01</a></li>
                                            <li><a href="home-2.html">Home 02</a></li>
                                            <li><a href="home-3.html">Home 03</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="index.php">ANASAYFA</a></li> -->

                                    <li>
                                        <i class="fa fa-book"></i><a href="about.php">HİKAYEMİZ</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-glass"></i><a href="menu.php">MENÜ</a>
                                    </li>


                                    <li class="menu-item-has-children"><i class="fa fa-tag"></i><a href="#0">ÖZEL HİZMETLER</a>
                                        <ul class="sub-menu">
                                            <li><a href="toptan-satis.php">Toptan Satış</a></li>
                                            <li><a href="lawaga-truck.php">Lawaga Truck</a></li>
                                            <li><a href="workshop.php">Workshop</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block text-center align-self-center">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo/mavi-alacati.png" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-7 align-self-center">
                        <div class="menu-area__right menu-area__right--3 menu-area__right--4 d-flex justify-content-end align-items-center">
                            <div class="main-menu main-menu__3 main-menu__4">
                                <nav>
                                    <ul>
                                        <!-- <li><a href="#0">pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.php">Blog Details</a></li>
                                                <li><a href="chefs.html">Chefs</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="story.html">Story</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="product-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Shop Cart</a></li>
                                                <li><a href="checkout.html">Shop Checkout</a></li>
                                            </ul>
                                        </li> -->
                                        <li>
                                            <i class="fab fa fa-newspaper"></i>
                                            <a href="blog.php">BLOG</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <i class="fa fa-camera"></i><a href="#0">GALERİ</a>
                                            <ul class="sub-menu">
                                                <li><a href="gallery.php">Fotoğraflar</a></li>
                                                <li><a href="video.php">Vİdeolar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <i class="fa fa-paper-plane"></i><a href="contact.php">İLETİŞİM</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="wrapper wrapper__2 pl-50 d-flex justify-content-end align-items-center">
                                <!-- <div class="search">
                                    <div class="search__trigger item">
                                        <span class="open"><i class="far fa-search"></i></span>
                                        <span class="close"><i class="fal fa-times"></i></span>
                                    </div>
                                    <div class="search__form">
                                        <form role="search" method="get" action="index.html">
                                            <input type="search" name="s" value="" placeholder="Search Keywords">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </form>
                                    </div>
                                </div> -->
                                <div class="hamburger-trigger item">
                                    <i class="far fa-bars"></i>
                                </div>
                                <!-- <div class="cart cart-trigger item position-relative">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="cart__count">3</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-lg-flex d-xl-none">
                    <div class="col-xl-9 col-lg-10 col-6">
                        <div class="wrapper-for-lg d-flex align-items-center">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/mavi-alacati.png" alt="img">
                                </a>
                            </div>
                            <div class="main-menu main-menu__3 main-menu__4">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="index.php">ANASAYFA</a></li>

                                        <li><a href="about.php">HİKAYEMİZ</a></li>
                                        <li><a href="menu.php">MENÜ</a></li>
                                        <li><a href="blog.php">BLOG</a></li>
                                        <li><a href="gallery.php">GALERİ</a></li>


                                        <li><a href="contact.php">İLETİŞİM</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-6 align-self-center">
                        <div class="menu-area__right menu-area__right--4  d-flex justify-content-end align-items-center">
                            <!-- <div class="search">
                                <div class="search__trigger item">
                                    <span class="open"><i class="far fa-search"></i></span>
                                    <span class="close"><i class="fal fa-times"></i></span>
                                </div>
                                <div class="search__form">
                                    <form role="search" method="get" action="index.html">
                                        <input type="search" name="s" value="" placeholder="Search Keywords">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div> -->
                            <div class="hamburger-trigger item">
                                <i class="far fa-bars"></i>
                            </div>
                            <!-- <div class="cart cart-trigger item position-relative">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="cart__count">3</span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- header end -->

    <!-- side info for mobile view -->
    <aside class="side-info-wrapper mm-only">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab" href="#menu-tab-1" role="tab" aria-controls="menu-tab-1" aria-selected="true">MENÜ</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2" role="tab" aria-controls="menu-tab-2" aria-selected="false">İLETİŞİM</a>
            </div>
        </nav>
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.php">
                    <!-- <img src="assets/images/logo/mavi-alacati.png" alt="Lawaga"> -->
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel" aria-labelledby="menu-tab-1-tab">
                <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel" aria-labelledby="menu-tab-2-tab">
                <div class="side-info">
                    <div class="side-info__content mb-35">
                        <h4 class="title mb-5">HİKAYEMİZ</h4>
                        <p>Lawaga’nın Uganda’daki Elgon Yanardağı’nın eteklerinde başlayan yolculuğu, dağları ve vadileri aştı; peri masallarının diyarı Kapadokya’ya kadar ulaştı.</p>
                        <a class="site-btn mt-20" href="contact.php">İLETİŞİM</a>
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title mb-10">İLETİŞİM</h4>
                        <ul class="contact__info list-unstyled">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Temenni Mh. Tevfik Fikret Cd. Veli Tören Sitesi, 13/1, Ürgüp, NEVŞEHİR</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+90 532 392 64 06</p>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>coffee@lawagacappadocia.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                        <a href="https://www.facebook.com/lawagacappadocia"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/channel/UC87stkf-n8G4O7YO0Ha8Gkg"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/lawagacappadocia/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- side info for desktop view -->
    <aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.php">
                    <!-- <img src="assets/images/logo/mavi-alacati.png" alt="logo"> -->
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="title mb-5">HİKAYEMİZ</h4>
                <p>Lawaga’nın Uganda’daki Elgon Yanardağı’nın eteklerinde başlayan yolculuğu, dağları ve vadileri aştı; peri masallarının diyarı Kapadokya’ya kadar ulaştı.</p>
                <a class="site-btn mt-20" href="contact.php">İLETİŞİM</a>
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-10">İLETİŞİM</h4>
                <ul class="contact__info list-unstyled">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Temenni Mh. Tevfik Fikret Cd. Veli Tören Sitesi, 13/1, Ürgüp, NEVŞEHİR</p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+90 532 392 64 06</p>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>coffee@lawagacappadocia.com</p>
                    </li>
                </ul>
            </div>
            <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                <a href="https://www.facebook.com/lawagacappadocia"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/channel/UC87stkf-n8G4O7YO0Ha8Gkg"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/lawagacappadocia/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </aside>

    <!-- cart list -->
    <!-- <aside class="cart-bar-wrapper">
        <div class="cart-bar__close">
            <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
        <div class="cart-bar">
            <h4 class="cart-bar__title">Cart Items - <span>4</span></h4>
            <div class="cart-bar__lists">
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-1.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$19.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-2.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$36.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-3.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-4.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
                <span>Sub Total:</span>
                <span>$87.00</span>
            </div>
            <div class="btns d-flex align-items-center justify-content-center">
                <a href="cart.html" class="site-btn">View Cart</a>
                <a href="checkout.html" class="site-btn site-btn__borderd">Checkout</a>
            </div>
        </div>
    </aside> -->
    <div class="overlay"></div>