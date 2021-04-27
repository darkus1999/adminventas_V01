 @extends('layouts.index')
 @section('contenido')
        <!-- Page pre loader -->
        <div id="pre-loader">
            <div class="loader-holder">
                <div class="frame">
                    <img alt="Laboom" src="{{ asset('img/preview/Preloader.gif') }}"/>
                </div>
            </div>
        </div>
        <div class="wrapper" style="display: none">
            <!-- Start Header -->
            <header>
                <div class="header-part header-reduce sticky">
                    <div class="header-top">
                        <div class="container">
                            <div class="header-top-inner">
                                <div class="header-top-left">
                                    <a class="top-cell" href="#">
                                        <img alt="" src="img/preview/fon.png">
                                            <span>
                                                123-456-7890
                                            </span>
                                        </img>
                                    </a>
                                    <a class="top-email" href="#">
                                        <span>
                                            support@laboom.com
                                        </span>
                                    </a>
                                </div>
                                <div class="header-top-right">
                                    <div class="social-top">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-facebook">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-twitter">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-pinterest">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-dribbble">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-google">
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="language-menu">
                                        <a class="current-lang" href="#">
                                            English
                                            <i aria-hidden="true" class="fa fa-caret-down">
                                            </i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-angle-right">
                                                    </i>
                                                    Turkish
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-angle-right">
                                                    </i>
                                                    Nederlands
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-angle-right">
                                                    </i>
                                                    Français
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-angle-right">
                                                    </i>
                                                    Deutsch
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-angle-right">
                                                    </i>
                                                    Italiano
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="container">
                            <div class="header-info">
                                <div class="header-info-inner">
                                    <div class="book-table header-collect book-md">
                                        <a data-target="#booktable" data-toggle="modal" href="#">
                                            <img alt="" src="img/preview/icon-table.png">
                                                Book a Table
                                            </img>
                                        </a>
                                    </div>
                                    <div class="shop-cart header-collect">
                                        <a href="#">
                                            <img alt="" src="img/preview/icon-basket.png">
                                                2 items - $ 20.89
                                            </img>
                                        </a>
                                        <div class="cart-wrap">
                                            <div class="cart-blog">
                                                <div class="cart-item">
                                                    <div class="cart-item-left">
                                                        <img alt="" src="img/preview/img59.png">
                                                        </img>
                                                    </div>
                                                    <div class="cart-item-right">
                                                        <h6>
                                                            Caramel Chesse Cake
                                                        </h6>
                                                        <span>
                                                            $ 14.00
                                                        </span>
                                                    </div>
                                                    <span class="delete-icon">
                                                    </span>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-item-left">
                                                        <img alt="" src="img/preview/img60.png">
                                                        </img>
                                                    </div>
                                                    <div class="cart-item-right">
                                                        <h6>
                                                            Caramel Chesse Cake
                                                        </h6>
                                                        <span>
                                                            $ 14.00
                                                        </span>
                                                    </div>
                                                    <span class="delete-icon">
                                                    </span>
                                                </div>
                                                <div class="subtotal">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <h6>
                                                            Subtotal :
                                                        </h6>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <span>
                                                            $ 140.00
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="cart-btn">
                                                    <a class="btn-black view" href="#">
                                                        VIEW ALL
                                                    </a>
                                                    <a class="btn-main checkout" href="#">
                                                        CHECK OUT
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-part">
                                        <a href="#">
                                        </a>
                                        <div class="search-box">
                                            <input name="txt" placeholder="Search" type="text">
                                                <input name="submit" type="submit" value=" ">
                                                </input>
                                            </input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-icon">
                                <a class="hambarger" href="#">
                                    <span class="bar-1">
                                    </span>
                                    <span class="bar-2">
                                    </span>
                                    <span class="bar-3">
                                    </span>
                                </a>
                            </div>
                            <div class="book-table header-collect book-sm">
                                <a data-target="#booktable" data-toggle="modal" href="#">
                                    <img alt="" src="img/preview/icon-table.png">
                                        Book a Table
                                    </img>
                                </a>
                            </div>
                            <div class="menu-main">
                                <ul>
                                    <li class="has-child">
                                        <a href="index.html">
                                            Home
                                        </a>
                                        <ul class="drop-nav">
                                            <li>
                                                <a href="index.html">
                                                    Home Page 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="homepage1.html">
                                                    Home Page 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="homepage2.html">
                                                    Home Page 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="homepage3.html">
                                                    Home Page 4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="homepage4.html">
                                                    Home Page 5
                                                </a>
                                            </li>
                                            <li class="drop-has-child">
                                                <a href="#">
                                                    Headers
                                                </a>
                                                <ul class="drop-nav">
                                                    <li>
                                                        <a href="index.html">
                                                            Header 1
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="homepage1.html">
                                                            Header 2
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="homepage2.html">
                                                            Header 3
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="homepage3.html">
                                                            Header 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="homepage4.html">
                                                            Header 5
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="#">
                                            Menu
                                        </a>
                                        <ul class="drop-nav">
                                            <li>
                                                <div class="drop-mega-part">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                                            <span class="mega-title">
                                                                MAIN MENU
                                                            </span>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">
                                                                                Ready Player One
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Ernest Cline
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Ender's Game
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Orson Scott Card
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Americam Gods
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Neil Gaiman
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                The Great Gatsby
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">
                                                                                Ready Player One
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Ernest Cline
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Ender's Game
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Orson Scott Card
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Americam Gods
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Neil Gaiman
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                The Great Gatsby
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 col-xs-12">
                                                            <span class="mega-title">
                                                                IMAGE
                                                            </span>
                                                            <img alt="" src="img/preview/img13.png">
                                                            </img>
                                                        </div>
                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                                            <div class="mega-preview">
                                                                <span class="mega-title">
                                                                    DESCRIPTION
                                                                </span>
                                                                <p>
                                                                    This column can contain whatever you like! Add text, shortcodes, or HTML.Various versions have evolved over the years, sometimes by accident, sometimes on
                                                                </p>
                                                            </div>
                                                            <div class="mega-position">
                                                                <img alt="" src="img/preview/img14.png"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="shop.html">
                                            Shop
                                        </a>
                                        <ul class="drop-nav">
                                            <li>
                                                <a href="shop.html">
                                                    Shop Page
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop_single.html">
                                                    Shop Single
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop_cart.html">
                                                    Shop Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop_checkout.html">
                                                    Shop Checkout
                                                </a>
                                            </li>
                                            <li>
                                                <a href="order_complete.html">
                                                    Order Complete
                                                </a>
                                            </li>
                                            <li>
                                                <a href="track_order.html">
                                                    Track Your Order
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login_register.html">
                                                    Login & Register
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="#">
                                            Pages
                                        </a>
                                        <ul class="drop-nav">
                                            <li>
                                                <a href="about.html">
                                                    About Us
                                                </a>
                                            </li>
                                            <li class="drop-has-child">
                                                <a href="service1.html">
                                                    Services
                                                </a>
                                                <ul class="drop-nav">
                                                    <li>
                                                        <a href="service1.html">
                                                            Service 1
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="service2.html">
                                                            Service 2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-has-child">
                                                <a href="gallery1.html">
                                                    Gallery
                                                </a>
                                                <ul class="drop-nav">
                                                    <li>
                                                        <a href="gallery1.html">
                                                            Gallery 2 Columns
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="gallery2.html">
                                                            Gallery 3 Columns
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="gallery3.html">
                                                            Gallery 4 Columns
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="gallery_masonry.html">
                                                            Gallery Masonry
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-has-child">
                                                <a href="menu1.html">
                                                    Menu
                                                </a>
                                                <ul class="drop-nav">
                                                    <li>
                                                        <a href="menu1.html">
                                                            Menu 1
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="menu2.html">
                                                            Menu 2
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="menu3.html">
                                                            Menu 3
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="menu4.html">
                                                            Menu 4
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-has-child">
                                                <a href="team.html">
                                                    Team
                                                </a>
                                                <ul class="drop-nav">
                                                    <li>
                                                        <a href="team.html">
                                                            Team List
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="team_single.html">
                                                            Team Single
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-has-child">
                                                <a href="contact1.html">
                                                    Contact
                                                </a>
                                                <ul class="drop-nav">
                                                    <li>
                                                        <a href="contact1.html">
                                                            Contact 1
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact2.html">
                                                            Contact 2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="terms_condition.html">
                                                    Terms & Condition
                                                </a>
                                            </li>
                                            <li>
                                                <a href="faq.html">
                                                    FAQ
                                                </a>
                                            </li>
                                            <li>
                                                <a href="404.html">
                                                    404 Error
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="blog_2col.html">
                                            Blog
                                        </a>
                                        <ul class="drop-nav">
                                            <li>
                                                <a href="blog_list.html">
                                                    Blog List
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog_2col.html">
                                                    Blog 2 Columns
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog_full.html">
                                                    Blog Full Width
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog_left_sidebar.html">
                                                    Blog Left Sidebar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog_right_sidebar.html">
                                                    Blog Right Sidebar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog_single.html">
                                                    Blog Single
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="contact1.html">
                                            Contact
                                        </a>
                                        <ul class="drop-nav">
                                            <li>
                                                <a href="contact1.html">
                                                    Contact 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact2.html">
                                                    Contact 2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="logo">
                                <a href="index.html">
                                    <img alt="" src="img/logo.png"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <!-- Start Main -->
            <main>
                <div class="main-part">

                    <!-- End Slider Part -->
                    <!-- Start Welcome Part -->
                    <section class="welcome-part home-icon" id="reach-to">
                        <div class="icon-default">
                            <a class="scroll" href="#reach-to">
                                <img alt="" src="img/preview/scroll-arrow.png"/>
                            </a>
                        </div>
                        <div class="container">
                            <div class="build-title">
                                <h2>
                                    Bienvenido a Queen Burger
                                </h2>
                                <h6>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <p>
                                        Welcome. This is La Boom. Elegant & sophisticated restaurant template. Royal plate offers different home page layouts with smart and unique design, showcasing beautifully designed elements every restaurant website should have. Smooth animations, fast loading and engaging user experience are just some of , the features this template offers. So, give it a try and dive into a world of La Boom restaurant websites.
                                    </p>
                                    <p>
                                        <img alt="" src="img/preview/signature.png"/>
                                    </p>
                                    <p>
                                        <a class="btn-black" href="#">
                                            LEARN MORE
                                        </a>
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <img alt="" src="img/preview/img2.png">
                                    </img>
                                </div>
                            </div>
                        </div>
                        <div class="float-main">
                            <div class="icon-top-left">
                                <img alt="" src="img/preview/icon1.png">
                                </img>
                            </div>
                            <div class="icon-bottom-left">
                                <img alt="" src="img/preview/icon2.png">
                                </img>
                            </div>
                            <div class="icon-top-right">
                                <img alt="" src="img/preview/icon3.png">
                                </img>
                            </div>
                            <div class="icon-bottom-right">
                                <img alt="" src="img/preview/icon4.png">
                                </img>
                            </div>
                        </div>
                    </section>
                    <!-- End Welcome Part -->
                    <!-- Start Dishes Part -->
                    <section class="dishes banner-bg invert invert-black home-icon wow fadeInDown" data-background="img/preview/banner1.jpg" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="icon-default icon-black">
                            <img alt="" src="img/preview/icon5.png">
                            </img>
                        </div>
                        <div class="container">
                            <div class="build-title">
                                <h2>
                                    Welcome To The La Boom
                                </h2>
                                <h6>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </h6>
                            </div>
                            <div class="slider multiple-items">
                                <div class="product-blog">
                                    <img alt="" src="img/preview/product1.png">
                                        <h3>
                                            Quattro Formaggi
                                        </h3>
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                        </p>
                                        <del>
                                            $ 55.00
                                        </del>
                                        <strong class="txt-default">
                                            $ 18.00
                                        </strong>
                                    </img>
                                </div>
                                <div class="product-blog">
                                    <img alt="" src="img/preview/product2.png">
                                        <h3>
                                            Vegetarian Pasta
                                        </h3>
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                        </p>
                                        <del>
                                            $ 55.00
                                        </del>
                                        <strong class="txt-default">
                                            $ 18.00
                                        </strong>
                                    </img>
                                </div>
                                <div class="product-blog">
                                    <img alt="" src="img/preview/product3.png">
                                        <h3>
                                            Gluten-Free Pasta
                                        </h3>
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                        </p>
                                        <del>
                                            $ 55.00
                                        </del>
                                        <strong class="txt-default">
                                            $ 18.00
                                        </strong>
                                    </img>
                                </div>
                                <div class="product-blog">
                                    <img alt="" src="img/preview/product1.png">
                                        <h3>
                                            Quattro Formaggi
                                        </h3>
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                        </p>
                                        <del>
                                            $ 55.00
                                        </del>
                                        <strong class="txt-default">
                                            $ 18.00
                                        </strong>
                                    </img>
                                </div>
                                <div class="product-blog">
                                    <img alt="" src="img/preview/product2.png">
                                        <h3>
                                            Vegetarian Pasta
                                        </h3>
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                        </p>
                                        <del>
                                            $ 55.00
                                        </del>
                                        <strong class="txt-default">
                                            $ 18.00
                                        </strong>
                                    </img>
                                </div>
                                <div class="product-blog">
                                    <img alt="" src="img/preview/product3.png">
                                        <h3>
                                            Gluten-Free Pasta
                                        </h3>
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                        </p>
                                        <del>
                                            $ 55.00
                                        </del>
                                        <strong class="txt-default">
                                            $ 18.00
                                        </strong>
                                    </img>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Dishes Part -->
                    <!-- Start Menu Part -->
                    <section class="special-menu bg-skeen home-icon wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="icon-default icon-skeen">
                            <img alt="" src="img/preview/icon6.png">
                            </img>
                        </div>
                        <div class="container">
                            <div class="build-title">
                                <h2>
                                    Our Special Menu
                                </h2>
                                <h6>
                                    The role of a good cook ware in the preparation of a sumptuous meal cannot be over emphasized then one consider white bread
                                </h6>
                            </div>
                            <div class="menu-wrapper">
                                <div class="portfolioFilter">
                                    <div class="portfolioFilter-inner">
                                        @foreach($Categorias as $categoria)
                                        <a class="current" data-filter="*" href="javascript:;">
                                            {{ $categoria->nombre }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="portfolioContainer row">
                                    @foreach( $Productos as $producto)
                                    <div class="col-md-6 col-sm-6 col-xs-12 isotope-item lunch">
                                        <div class="menu-list">
                                            <span class="menu-list-product">
                                                <img alt="" src="img/preview/img4.png">
                                                </img>
                                            </span>
                                            <h5>
                                                {{ $producto->nombre }}
                                                <span>
                                                    {{ 'S/.'.$producto->precio_venta }}
                                                </span>
                                            </h5>
                                            <p>
                                                {{ $producto->descripcion }}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="btn-outer">
                                    <a class="btn-main btn-shadow" href="#">
                                        Explore Full Menu
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="float-main">
                            <div class="icon-top-left">
                                <img alt="" src="img/preview/icon7.png">
                                </img>
                            </div>
                            <div class="icon-bottom-left">
                                <img alt="" src="img/preview/icon8.png">
                                </img>
                            </div>
                            <div class="icon-top-right">
                                <img alt="" src="img/preview/icon9.png">
                                </img>
                            </div>
                            <div class="icon-bottom-right">
                                <img alt="" src="img/preview/icon10.png">
                                </img>
                            </div>
                        </div>
                    </section>
                    <!-- End Menu Part -->
                    <!-- Start Chef -->
                    <section class="chef-part home-icon wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="icon-default">
                            <img alt="" src="img/preview/icon11.png">
                            </img>
                        </div>
                        <div class="container">
                            <div class="build-title">
                                <h2>
                                    Our Awesome Chef
                                </h2>
                                <h6>
                                    Meet Professional Cook Team
                                </h6>
                            </div>
                            <div class="owl-carousel owl-theme chef-slider" data-autoplay="true" data-autotime="5000" data-dots="false" data-items="4" data-laptop="3" data-mobile="1" data-nav="true" data-speed="1800" data-tablet="2">
                                <div class="item">
                                    <div class="chef-blog">
                                        <div class="chef-inner">
                                            <div class="chef-member">
                                                <img alt="" src="img/preview/chef1.png">
                                                </img>
                                            </div>
                                            <div class="chef-info">
                                                <h5>
                                                    Anna Taylor
                                                </h5>
                                                <span>
                                                    Head Chief
                                                </span>
                                                <div class="social-top">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-instagram">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-pinterest">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-google">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chef-blog">
                                        <div class="chef-inner">
                                            <div class="chef-member">
                                                <img alt="" src="img/preview/chef2.png">
                                                </img>
                                            </div>
                                            <div class="chef-info">
                                                <h5>
                                                    Alex Wilson
                                                </h5>
                                                <span>
                                                    Head Chief
                                                </span>
                                                <div class="social-top">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-instagram">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-pinterest">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-google">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chef-blog">
                                        <div class="chef-inner">
                                            <div class="chef-member">
                                                <img alt="" src="img/preview/chef3.png">
                                                </img>
                                            </div>
                                            <div class="chef-info">
                                                <h5>
                                                    Anita Golden
                                                </h5>
                                                <span>
                                                    Head Chief
                                                </span>
                                                <div class="social-top">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-instagram">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-pinterest">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-google">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chef-blog">
                                        <div class="chef-inner">
                                            <div class="chef-member">
                                                <img alt="" src="img/preview/chef4.png">
                                                </img>
                                            </div>
                                            <div class="chef-info">
                                                <h5>
                                                    Benderd Dimitor
                                                </h5>
                                                <span>
                                                    Head Chief
                                                </span>
                                                <div class="social-top">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-instagram">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-pinterest">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-google">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chef-blog">
                                        <div class="chef-inner">
                                            <div class="chef-member">
                                                <img alt="" src="img/preview/chef1.png">
                                                </img>
                                            </div>
                                            <div class="chef-info">
                                                <h5>
                                                    Anna Taylor
                                                </h5>
                                                <span>
                                                    Head Chief
                                                </span>
                                                <div class="social-top">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-instagram">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-pinterest">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-google">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chef-blog">
                                        <div class="chef-inner">
                                            <div class="chef-member">
                                                <img alt="" src="img/preview/chef2.png">
                                                </img>
                                            </div>
                                            <div class="chef-info">
                                                <h5>
                                                    Alex Wilson
                                                </h5>
                                                <span>
                                                    Head Chief
                                                </span>
                                                <div class="social-top">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-instagram">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-pinterest">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-google">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chef-blog">
                                        <div class="chef-inner">
                                            <div class="chef-member">
                                                <img alt="" src="img/preview/chef3.png">
                                                </img>
                                            </div>
                                            <div class="chef-info">
                                                <h5>
                                                    Anita Golden
                                                </h5>
                                                <span>
                                                    Head Chief
                                                </span>
                                                <div class="social-top">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-instagram">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-pinterest">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-google">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="chef-blog">
                                        <div class="chef-inner">
                                            <div class="chef-member">
                                                <img alt="" src="img/preview/chef4.png">
                                                </img>
                                            </div>
                                            <div class="chef-info">
                                                <h5>
                                                    Benderd Dimitor
                                                </h5>
                                                <span>
                                                    Head Chief
                                                </span>
                                                <div class="social-top">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-instagram">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-pinterest">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i aria-hidden="true" class="fa fa-google">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-main">
                            <div class="icon-top-left">
                                <img alt="" src="img/preview/icon12.png">
                                </img>
                            </div>
                            <div class="icon-bottom-left">
                                <img alt="" src="img/preview/icon13.png">
                                </img>
                            </div>
                            <div class="icon-top-right">
                                <img alt="" src="img/preview/icon14.png">
                                </img>
                            </div>
                        </div>
                    </section>
                    <!-- End Chef -->
                    <!-- Start Food Hours -->
                    <section class="food-hours home-icon wow fadeInDown" data-stellar-background-ratio="0.5" data-stellar-offset-parent="true" data-wow-delay="300ms" data-wow-duration="1000ms" style="background-image: url('img/preview/banner2.jpg');">
                        <div class="icon-default icon-gold">
                            <img alt="" src="img/preview/icon19.png">
                            </img>
                        </div>
                        <div class="container">
                            <div class="food-blog">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                        <div class="food-blog-inner">
                                            <div class="food-item">
                                                <div class="food-item-inner">
                                                    <img alt="" src="img/preview/icon15.png">
                                                    </img>
                                                </div>
                                            </div>
                                            <h2>
                                                Breakfast
                                            </h2>
                                            <span>
                                                8.00 am 10.00 am
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                        <div class="food-blog-inner">
                                            <div class="food-item">
                                                <div class="food-item-inner">
                                                    <img alt="" src="img/preview/icon16.png">
                                                    </img>
                                                </div>
                                            </div>
                                            <h2>
                                                Lunch
                                            </h2>
                                            <span>
                                                1.00 am 2.00 am
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                        <div class="food-blog-inner">
                                            <div class="food-item">
                                                <div class="food-item-inner">
                                                    <img alt="" src="img/preview/icon17.png">
                                                    </img>
                                                </div>
                                            </div>
                                            <h2>
                                                Dinner
                                            </h2>
                                            <span>
                                                7.00 am 9.00 am
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                        <div class="food-blog-inner">
                                            <div class="food-item">
                                                <div class="food-item-inner">
                                                    <img alt="" src="img/preview/icon18.png">
                                                    </img>
                                                </div>
                                            </div>
                                            <h2>
                                                Dessert
                                            </h2>
                                            <span>
                                                All Day
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Food Hours -->
                    <!-- Start Feature Blog -->
                    <section class="feature-blog-wrap bg-skeen home-icon wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="icon-default icon-skeen">
                            <img alt="" src="img/preview/icon20.png">
                            </img>
                        </div>
                        <div class="container">
                            <div class="build-title">
                                <h2>
                                    Feature Blog
                                </h2>
                                <h6>
                                    Read Latest Delicious Posts And News
                                </h6>
                            </div>
                            <div class="feature-blog">
                                <div class="owl-carousel owl-theme" data-autoplay="true" data-autotime="5000" data-dots="false" data-items="3" data-laptop="3" data-mobile="1" data-nav="true" data-speed="1800" data-tablet="2">
                                    <div class="item">
                                        <div class="feature-img">
                                            <img alt="" src="img/preview/feature1.jpg">
                                                <div class="date-feature">
                                                    27
                                                    <br>
                                                        <small>
                                                            may
                                                        </small>
                                                    </br>
                                                </div>
                                            </img>
                                        </div>
                                        <div class="feature-info">
                                            <span>
                                                <i class="icon-user">
                                                </i>
                                                By Ali TUFAN
                                            </span>
                                            <span>
                                                <i class="icon-comment">
                                                </i>
                                                5 Comments
                                            </span>
                                            <h5>
                                                Easy Sparkling Sangria
                                            </h5>
                                            <p>
                                                Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.
                                            </p>
                                            <a href="#">
                                                Read More
                                                <i class="icon-more">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="feature-img">
                                            <img alt="" src="img/preview/feature2.jpg">
                                                <div class="date-feature">
                                                    27
                                                    <br>
                                                        <small>
                                                            may
                                                        </small>
                                                    </br>
                                                </div>
                                            </img>
                                        </div>
                                        <div class="feature-info">
                                            <span>
                                                <i class="icon-user">
                                                </i>
                                                By Ali TUFAN
                                            </span>
                                            <span>
                                                <i class="icon-comment">
                                                </i>
                                                5 Comments
                                            </span>
                                            <h5>
                                                Disclosue - Real food here
                                            </h5>
                                            <p>
                                                Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.
                                            </p>
                                            <a href="#">
                                                Read More
                                                <i class="icon-more">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="feature-img">
                                            <img alt="" src="img/preview/feature3.jpg">
                                                <div class="date-feature">
                                                    27
                                                    <br>
                                                        <small>
                                                            may
                                                        </small>
                                                    </br>
                                                </div>
                                            </img>
                                        </div>
                                        <div class="feature-info">
                                            <span>
                                                <i class="icon-user">
                                                </i>
                                                By Ali TUFAN
                                            </span>
                                            <span>
                                                <i class="icon-comment">
                                                </i>
                                                5 Comments
                                            </span>
                                            <h5>
                                                The Best Drink on Market
                                            </h5>
                                            <p>
                                                Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.
                                            </p>
                                            <a href="#">
                                                Read More
                                                <i class="icon-more">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="feature-img">
                                            <img alt="" src="img/preview/feature1.jpg">
                                                <div class="date-feature">
                                                    27
                                                    <br>
                                                        <small>
                                                            may
                                                        </small>
                                                    </br>
                                                </div>
                                            </img>
                                        </div>
                                        <div class="feature-info">
                                            <span>
                                                <i class="icon-user">
                                                </i>
                                                By Ali TUFAN
                                            </span>
                                            <span>
                                                <i class="icon-comment">
                                                </i>
                                                5 Comments
                                            </span>
                                            <h5>
                                                Easy Sparkling Sangria
                                            </h5>
                                            <p>
                                                Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.
                                            </p>
                                            <a href="#">
                                                Read More
                                                <i class="icon-more">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="feature-img">
                                            <img alt="" src="img/preview/feature2.jpg">
                                                <div class="date-feature">
                                                    27
                                                    <br>
                                                        <small>
                                                            may
                                                        </small>
                                                    </br>
                                                </div>
                                            </img>
                                        </div>
                                        <div class="feature-info">
                                            <span>
                                                <i class="icon-user">
                                                </i>
                                                By Ali TUFAN
                                            </span>
                                            <span>
                                                <i class="icon-comment">
                                                </i>
                                                5 Comments
                                            </span>
                                            <h5>
                                                Disclosue - Real food here
                                            </h5>
                                            <p>
                                                Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.
                                            </p>
                                            <a href="#">
                                                Read More
                                                <i class="icon-more">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="feature-img">
                                            <img alt="" src="img/preview/feature3.jpg">
                                                <div class="date-feature">
                                                    27
                                                    <br>
                                                        <small>
                                                            may
                                                        </small>
                                                    </br>
                                                </div>
                                            </img>
                                        </div>
                                        <div class="feature-info">
                                            <span>
                                                <i class="icon-user">
                                                </i>
                                                By Ali TUFAN
                                            </span>
                                            <span>
                                                <i class="icon-comment">
                                                </i>
                                                5 Comments
                                            </span>
                                            <h5>
                                                The Best Drink on Market
                                            </h5>
                                            <p>
                                                Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.
                                            </p>
                                            <a href="#">
                                                Read More
                                                <i class="icon-more">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Feature Blog -->
                    <!-- Start Client Say -->
                    <section class="client banner-bg invert invert-black home-icon wow fadeInDown" data-background="img/preview/banner3.jpg" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="icon-default icon-black">
                            <img alt="" src="img/preview/icon21.png">
                            </img>
                        </div>
                        <div class="container">
                            <div class="build-title">
                                <h2>
                                    What Clients Say
                                </h2>
                                <h6>
                                    1500+ Satisfied Clients
                                </h6>
                            </div>
                            <div class="client-say">
                                <div class="owl-carousel owl-theme" data-autoplay="true" data-autotime="5000" data-dots="true" data-items="1" data-laptop="1" data-mobile="1" data-nav="false" data-speed="1800" data-tablet="1">
                                    <div class="item">
                                        <p>
                                            <img alt="" src="img/preview/client1.png"/>
                                        </p>
                                        <h5>
                                            Alice Williams
                                        </h5>
                                        <p>
                                            Kitchen Manager
                                        </p>
                                        <p>
                                            Success isn’t really that difficult. There is a significant portion of the
                                            <br>
                                                population here in North America, that actually want and need
                                                <br>
                                                    success really no magic to be hard.
                                                </br>
                                            </br>
                                        </p>
                                    </div>
                                    <div class="item">
                                        <p>
                                            <img alt="" src="img/preview/client1.png"/>
                                        </p>
                                        <h5>
                                            Alice Williams
                                        </h5>
                                        <p>
                                            Kitchen Manager
                                        </p>
                                        <p>
                                            Success isn’t really that difficult. There is a significant portion of the
                                            <br>
                                                population here in North America, that actually want and need
                                                <br>
                                                    success really no magic to be hard.
                                                </br>
                                            </br>
                                        </p>
                                    </div>
                                    <div class="item">
                                        <p>
                                            <img alt="" src="img/preview/client1.png"/>
                                        </p>
                                        <h5>
                                            Alice Williams
                                        </h5>
                                        <p>
                                            Kitchen Manager
                                        </p>
                                        <p>
                                            Success isn’t really that difficult. There is a significant portion of the
                                            <br>
                                                population here in North America, that actually want and need
                                                <br>
                                                    success really no magic to be hard.
                                                </br>
                                            </br>
                                        </p>
                                    </div>
                                    <div class="item">
                                        <p>
                                            <img alt="" src="img/preview/client1.png"/>
                                        </p>
                                        <h5>
                                            Alice Williams
                                        </h5>
                                        <p>
                                            Kitchen Manager
                                        </p>
                                        <p>
                                            Success isn’t really that difficult. There is a significant portion of the
                                            <br>
                                                population here in North America, that actually want and need
                                                <br>
                                                    success really no magic to be hard.
                                                </br>
                                            </br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Client Say -->
                    <!-- Start Feature list -->
                    <section class="bg-skeen feature-list text-center home-icon wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="icon-default icon-skeen">
                            <img alt="" src="img/preview/icon22.png">
                            </img>
                        </div>
                        <div class="container">
                            <div class="build-title">
                                <h2>
                                    Our Some Feature
                                </h2>
                                <h6>
                                    The role of a good cook ware in the preparation of a sumptuous meal cannot be
                                    <br>
                                        over emphasized then one consider white bread
                                    </br>
                                </h6>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="feature-list-icon">
                                        <div class="feature-icon-table">
                                            <img alt="" src="img/preview/img9.png">
                                            </img>
                                        </div>
                                    </div>
                                    <h5>
                                        Fresh Dishes
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="feature-list-icon">
                                        <div class="feature-icon-table">
                                            <img alt="" src="img/preview/img10.png">
                                            </img>
                                        </div>
                                    </div>
                                    <h5>
                                        Various Menu
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="feature-list-icon">
                                        <div class="feature-icon-table">
                                            <img alt="" src="img/preview/img11.png">
                                            </img>
                                        </div>
                                    </div>
                                    <h5>
                                        Well Service
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="feature-list-icon">
                                        <div class="feature-icon-table">
                                            <img alt="" src="img/preview/img12.png">
                                            </img>
                                        </div>
                                    </div>
                                    <h5>
                                        Fast Delivery
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Feature list -->
                    <!-- Start Instagram -->
                    <section class="instagram-main home-icon wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="icon-default">
                            <img alt="" src="img/preview/icon23.png">
                            </img>
                        </div>
                        <div class="container">
                            <div class="build-title">
                                <h2>
                                    #laboom
                                </h2>
                                <h6>
                                    Enjoyed your stay at La Boom? Share your moments with us. Follow us on Instagram and use
                                </h6>
                            </div>
                        </div>
                        <div class="gallery-slider">
                            <div class="owl-carousel owl-theme" data-autoplay="true" data-autotime="3000" data-dots="false" data-items="6" data-laptop="5" data-mobile="1" data-nav="true" data-speed="2000" data-tablet="4">
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big1.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery1.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big2.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery2.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big3.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery3.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big4.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery4.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big5.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery5.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big6.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery6.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big1.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery1.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big2.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery2.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big3.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery3.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big4.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery4.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big5.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery5.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="magnific-popup" href="img/preview/gallery/gallery-big6.jpeg">
                                        <img alt="" class="animated" src="img/preview/gallery/gallery6.png">
                                            <div class="gallery-overlay">
                                                <div class="gallery-overlay-inner">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </div>
                                            </div>
                                        </img>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Instagram -->
                </div>
            </main>
            <!-- End Main -->
            <!-- Start Footer -->
            <footer>
                <div class="footer-part wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="icon-default icon-dark">
                        <img alt="" src="img/logo.png" width="120" height="120">
                        </img>
                    </div>
                    <div class="container">
                        <div class="footer-inner">
                            <div class="footer-info">
                                <h3>
                                    La boom Restaurant
                                </h3>
                                <p>
                                    329 Queensberry Street, North Melbourne VIC 3051, Australia.
                                </p>
                                <p>
                                    <a href="#">
                                        123 456 7890
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        support@laboom.com
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="copy-right">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 copyright-before">
                                    <span>
                                        Copyright © 2017 Polygon Theme. All rights reserved.
                                    </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 copyright-after">
                                    <div class="social-round">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-facebook">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-twitter">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-instagram">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-pinterest">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-dribbble">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-google">
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-find">
                        <a href="#">
                            <img alt="" src="img/preview/location.png">
                                <span>
                                    Find us on Map
                                </span>
                            </img>
                        </a>
                    </div>
                    <div class="location-footer-map">
                        <div class="icon-find-location">
                            <a href="#">
                                <img alt="" src="img/preview/location.png">
                                    <span>
                                        Find us on Map
                                    </span>
                                </img>
                            </a>
                        </div>
                        <div class="footer-map-outer">
                            <div id="footer-map">
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
            <!-- Start Book Table -->
            <div aria-labelledby="booktable" class="modal fade booktable" id="booktable" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                <span aria-hidden="true">
                                    ×
                                </span>
                            </button>
                            <div class="table-title">
                                <h2>
                                    Reservation
                                </h2>
                                <h6 class="heade-xs">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select-dropbox">
                                        <option>
                                            Hour
                                        </option>
                                        <option>
                                            1
                                        </option>
                                        <option>
                                            2
                                        </option>
                                        <option>
                                            3
                                        </option>
                                        <option>
                                            4
                                        </option>
                                        <option>
                                            5
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select-dropbox">
                                        <option>
                                            Number of People
                                        </option>
                                        <option>
                                            1
                                        </option>
                                        <option>
                                            2
                                        </option>
                                        <option>
                                            3
                                        </option>
                                        <option>
                                            4
                                        </option>
                                        <option>
                                            5
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="date-pick" name="txt" placeholder="Pick a Date" type="text">
                                    </input>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="txt" placeholder="Phone Number" type="text">
                                    </input>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input name="email" placeholder="Email Address" type="email">
                                    </input>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn-main btn-big">
                                        BOOK A TABLE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Book Table -->
        </div>
        <!-- Back To Top Arrow -->
        <a class="top-arrow" href="#">
        </a>