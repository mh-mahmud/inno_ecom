<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home  || Ecommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800i" rel="stylesheet">

        <!-- favicon icon -->
        <link rel="shortcut icon" type="images/png" href="{{url('/')}}/assets/frontend/images/images/favicon.ico">

		<!-- all css here -->
		<link rel="stylesheet" href="{{url('/')}}/assets/frontend/style.css">
		<!-- modernizr css -->
        <script src="{{url('/')}}/assets/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <!--Start-Preloader-area-->
        <!--<div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>-->
        <!--end-Preloader-area-->
        <!--header-area-start-->
        <!--Start-main-wrapper-->
        <div class="page-1">
            <!--Start-Header-area-->
            <header>
                <div class="header-top-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-left">
                                    <!--Start-Header-language dd-->
                                    <div class="dropdown top-language-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-language dropdown-toggle" href="#"> <img src="{{url('/')}}/assets/frontend/images/flag/e.png" alt="language"> English <span class="caret"></span> </a>
                                        
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" href="#"><img src="{{url('/')}}/assets/frontend/images/flag/e.png" alt="language"> English </a></li>
                                            <li role="presentation"><a role="menuitem" href="#"><img src="{{url('/')}}/assets/frontend/images/flag/f.png" alt="language"> French </a></li>
                                            <li role="presentation"><a role="menuitem" href="#"><img src="{{url('/')}}/assets/frontend/images/flag/g.png" alt="language"> German </a></li>
                                        </ul>
                                    </div>
                                    <!--End-Header-language-->
                                    <!--Start-Header-currency-->
                                    <div class="dropdown top-currency-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-currency dropdown-toggle" href="#"><span class="usd-icon"><i class="fa fa-usd"></i></span> USD <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" href="#"> $ - Dollar </a></li>
                                            <li role="presentation"><a role="menuitem" href="#"> £ - Pound </a></li>
                                            <li role="presentation"><a role="menuitem" href="#"> € - Euro </a></li>
                                        </ul>
                                    </div>
                                    <!--End-Header-currency-->
                                    <!--Start-welcome-message-->
                                    <div class="welcome-mg hidden-xs"><span>Default Welcome Message!</span></div>
                                    <!--End-welcome-message-->
                                </div>
                            </div>
                            <!-- Start-Header-links -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-right">
                                    <div class="top-link-wrap">
                                        <div class="single-link">
                                            <div class="my-account"><a href="my-account.html"><span class="">My Account</span></a></div>
                                            <div class="wishlist"><a href="wishlist.html"><span class="">Wishlist</span></a></div>
                                            <div class="check"><a href="checkout.html"><span class="">Checkout</span></a></div>
                                            <div class="login"><a href="login.html"><span  class="">Log In</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- End-Header-links -->
                        </div>
                    </div>
                </div>
                <!--Start-header-mid-area-->
                <div class="header-mid-wrap">
                    <div class="container">
                        <div class="header-mid-content">
                            <div class="row">
                                <!--Start-logo-area-->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="header-logo">
                                    <a href="index.html"><img src="{{url('/')}}/assets/frontend/images/logo/1.png" alt="Mt-Shop"></a>
                                    </div>
                                </div>
                                <!--End-logo-area-->
                                <!--Start-gategory-searchbox-->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div id="search-category-wrap">
                                        <form class="header-search-box" action="#" method="post">
                                            <div class="search-cat">
                                                <select class="category-items" name="category">
                                                    <option>All Categories</option>
                                                    <option>Men</option>
                                                    <option>Women</option>
                                                    <option>Jewellery</option>
                                                    <option>Electronics</option>
                                                    <option>Kid</option>
                                                    <option>Bootees Bags</option>
                                                    <option>Clothing</option>
                                                    <option>Footwear</option>
                                                    <option>T-Shirts</option>
                                                    <option>Polo-Shirts</option>
                                                </select>
                                            </div>
                                            <input type="search" placeholder="Search here..." id="text-search" name="search">
                                            <button id="btn-search-category" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!--End-gategory-searchbox-->
                                <!--Start-cart-wrap-->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <ul class="header-cart-wrap">
                                        <li><a class="cart" href="#">My Cart: 2 items</a>
                                            <div class="mini-cart-content">
                                                <div class="cart-products-list">
                                                    <div class="sing-cart-pro">
                                                        <div class="cart-image">
                                                            <a href="#"><img src="{{url('/')}}/assets/frontend/images/product/4.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-product-info">
                                                            <a href="#" class="product-name"> Sample product </a>
                                                            <div class="cart-price">
                                                                <span class="quantity"><strong> 1 x</strong></span>
                                                                <span class="p-price">$110.00</span>
                                                            </div>
                                                            <a class="edit-pro" title="edit"><i class="fa fa-pencil-square-o"></i></a>
                                                            <a class="remove-pro" title="remove"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="sing-cart-pro">
                                                        <div class="cart-image">
                                                            <a href="#"><img src="{{url('/')}}/assets/frontend/images/product/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-product-info">
                                                            <a href="#" class="product-name">Sample product </a>
                                                            <div class="cart-price">
                                                                <span class="quantity"><strong> 1 x</strong></span>
                                                                <span class="p-price">$150.00</span>
                                                            </div>
                                                            <a class="edit-pro" title="edit"><i class="fa fa-pencil-square-o"></i></a>
                                                            <a class="remove-pro" title="remove"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-price-list">
                                                    <p class="price-amount"><span class="cart-subtotal">SUBTotal :</span> <span>$260.00</span> </p>
                                                    <div class="cart-checkout">
                                                        <a href="#">Checkout</a>
                                                    </div>
                                                    <div class="view-cart">
                                                        <a href="#">View cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--End-cart-wrap-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End-header-mid-area-->
                <!--Start-Mainmenu-area -->
                <div class="mainmenu-area hidden-sm hidden-xs">
                    <div id="sticker">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                                    <div class="log-small"><a class="logo" href="index.html"><img alt="OurStore" src="{{url('/')}}/assets/frontend/images/logo/s.png"></a></div>
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="nav">
                                                <li class="angle-down"><a href="index.html">Home</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index.html" class="mega-title">Homepage</a></li>
                                                        <li><a href="index-2.html">Homepage Version 2</a></li>
                                                        <li><a href="index-3.html">Homepage Version 3</a></li>
                                                        <li><a href="index-4.html">Homepage Version 4</a></li>
                                                        <li><a href="index-5.html">Homepage Version 5</a></li>
                                                        <li><a href="index-6.html">Homepage Version 6</a></li>
                                                        <li><a href="index-7.html">Homepage Version 7</a></li>
                                                    </ul>
                                                </li>
                                                <li class="angle-down"><a href="shop-grid.html">Men</a>
                                                    <div class="megamenu">
                                                        <div class="megamenu-list">
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Clothing</a>
                                                                <a href="shop-grid.html">Jackets</a>
                                                                <a href="shop-grid.html">Blazers</a>
                                                                <a href="shop-grid.html">T-Shirts</a>
                                                                <a href="#">Collections</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Dresses</a>
                                                                <a href="shop-grid.html">Evening</a>
                                                                <a href="shop-grid.html">Cocktail</a>
                                                                <a href="shop-grid.html">Footwear</a>
                                                                <a href="shop-grid.html">Sunglass</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Handbags</a>
                                                                <a href="shop-grid.html">Bootees Bags</a>
                                                                <a href="shop-grid.html">Exclusive</a>
                                                                <a href="shop-grid.html">Furniture</a>
                                                                <a href="shop-grid.html">Jackets</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Jewellery</a>
                                                                <a href="shop-grid.html">Earrings</a>
                                                                <a href="shop-grid.html">Braclets</a>
                                                                <a href="shop-grid.html">Nosepins</a>
                                                                <a href="shop-grid.html">Bangels</a>
                                                            </span>
                                                            <span>
                                                                <a href="shop-grid.html" class="mega-banner">
                                                                    <img src="{{url('/')}}/assets/frontend/images/menu/1.jpg" alt="Hi">
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="angle-down"><a href="shop-grid.html">Women</a>
                                                    <div class="megamenu">
                                                        <div class="megamenu-list">
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Clothing</a>
                                                                <a href="shop-grid.html">Jackets</a>
                                                                <a href="shop-grid.html">Blazers</a>
                                                                <a href="shop-grid.html">T-Shirts</a>
                                                                <a href="#">Collections</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Dresses</a>
                                                                <a href="shop-grid.html">Cocktail</a>
                                                                <a href="shop-grid.html">Evening</a>
                                                                <a href="shop-grid.html">Footwear</a>
                                                                <a href="shop-grid.html">Sunglass</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Handbags</a>
                                                                <a href="shop-grid.html">Bootees Bags</a>
                                                                <a href="shop-grid.html">Exclusive</a>
                                                                <a href="shop-grid.html">Furniture</a>
                                                                <a href="shop-grid.html">Jackets</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Jewellery</a>
                                                                <a href="shop-grid.html">Earrings</a>
                                                                <a href="shop-grid.html">Braclets</a>
                                                                <a href="shop-grid.html">Nosepins</a>
                                                                <a href="shop-grid.html">Bangels</a>
                                                            </span>
                                                            <span>
                                                                <a href="shop-grid.html" class="mega-banner">
                                                                    <img src="{{url('/')}}/assets/frontend/images/menu/2.jpg" alt="Hi">
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="shop-grid.html">Footwear</a></li>
                                                <li><a href="shop-grid.html">Accessories</a>
                                                </li>
                                                <li class="angle-down"><a href="shop-grid.html">Pages</a>
                                                    <div class="megamenu pages">
                                                        <div class="megamenu-list">
                                                            <span class="mega-single pages">
                                                                <a href="about-us.html">About Us</a>
                                                                <a href="checkout.html">Checkout</a>
                                                                <a href="wishlist.html">Wishlist</a>
                                                                <a href="shopping-cart.html">Shopping Cart</a>
                                                                <a href="shop-grid.html">Shop Grid</a>
                                                                <a href="shop-list.html">Shop List</a>
                                                                <a href="shop-right-sidebar.html">Shop Right Sidbar</a>
                                                                <a href="my-account.html">My Account</a>
                                                                <a href="login.html">Login</a>
                                                                <a href="contact-us.html">Contact v1</a>
                                                                <a href="contact-v2.html">Contact v2</a>
                                                                <a href="portfolio.html">Portfolio</a>
                                                                <a href="portfolio-details.html">Portfolio Details</a>
                                                                <a href="collection-list.html">Collection List</a>
                                                            </span>
                                                            <span class="mega-single pages">
                                                                <a href="single-product.html">Single Product</a>
                                                                <a href="single-product-left-sidebar.html">Single Product Left sidebar</a>
                                                                <a href="single-product-right-sidebar.html">Single Product Right Sidebar</a>
                                                                <a href="single-product-sidebar-reviews.html">Single Product  Reviews</a>
                                                                <a href="blog.html">Blog</a>
                                                                <a href="blog-details.html">Blog Details</a>
                                                                <a href="blog-grid.html">Blog Grid</a>
                                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                                <a href="blog-fullwidth.html">Blog Fullwidth</a>
                                                                <a href="gallery.html">Gallery</a>
                                                                <a href="gallery-details.html">Gallery Details</a>
                                                                <a href="404.html">404</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End-Mainmenu-area-->
                <!--Start-Mobile-Menu-Area -->
                <div class="mobile-menu-area visible-sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="index-4.html">Home 4</a></li>
                                                    <li><a href="index-5.html">Home 5</a></li>
                                                    <li><a href="index-6.html">Home 6</a></li>
                                                    <li><a href="index-7.html">Home 7</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html">Men</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Clothing</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Jackets</a></li>
                                                            <li><a href="shop-grid.html">Blazers</a></li>
                                                            <li><a href="shop-grid.html">T-Shirts</a></li>
                                                            <li><a href="shop-grid.html">Collections</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Dresses</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Evening</a></li>
                                                            <li><a href="shop-grid.html">Cocktail</a></li>
                                                            <li><a href="shop-grid.html">Footwear</a></li>
                                                            <li><a href="shop-grid.html">Sunglass</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Handbags</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Bootees Bags</a></li>
                                                            <li><a href="shop-grid.html">Exclusive</a></li>
                                                            <li><a href="shop-grid.html">Jackets</a></li>
                                                            <li><a href="shop-grid.html">Furniture</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Jewellery</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Earrings</a></li>
                                                            <li><a href="shop-grid.html">Braclets
        </a></li>
                                                            <li><a href="shop-grid.html">Nosepins</a></li>
                                                            <li><a href="shop-grid.html">SweaBangelsters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html">Women</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Clothing</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Jackets</a></li>
                                                            <li><a href="shop-grid.html">Blazers</a></li>
                                                            <li><a href="shop-grid.html">T-Shirts</a></li>
                                                            <li><a href="shop-grid.html">Collections</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Dresses</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Evening</a></li>
                                                            <li><a href="shop-grid.html">Cocktail</a></li>
                                                            <li><a href="shop-grid.html">Footwear</a></li>
                                                            <li><a href="shop-grid.html">Sunglass</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Handbags</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Bootees Bags</a></li>
                                                            <li><a href="shop-grid.html">Exclusive</a></li>
                                                            <li><a href="shop-grid.html">Jackets</a></li>
                                                            <li><a href="shop-grid.html">Furniture</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Jewellery</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Earrings</a></li>
                                                            <li><a href="shop-grid.html">Braclets
        </a></li>
                                                            <li><a href="shop-grid.html">Nosepins</a></li>
                                                            <li><a href="shop-grid.html">SweaBangelsters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html">Pages</a>
                                                <ul>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidbar</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End-Mobile-Menu-Area -->
            </header>
            <!--End-Header-area-->
            <!-- Start-slider-->
            @yield('content')
            <!--End-newsletter-wrap-->
            <!--Start-footer-wrap-->
            <footer class="footer-area">
                <div class="footer-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{url('/')}}/assets/frontend/images/logo/1.png" alt="Logo Demo"></a>
                                </div>
                                <!--footer-text-start-->
                                <div class="footer-top-content">
                                    <p class="des">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                                    <div class="footer-read-more">
                                        <a href="#">read more</a>
                                         <span><i class="fa fa-long-arrow-right"></i></span>
                                    </div>
                                </div>
                                <!--footer-text-end-->
                                <!--footer-link-area-start-->
                                <div class="social-icon">
                                    <h4>FOLLOW US ON</h4>
                                    <a class="faceb" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                                     <a class="twitt" href="#" title="Twitter" ><i class="fa fa-twitter"></i></a>
                                    <a class="tumb" href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a>
                                    <a class="google" href="#" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                                    <a class="dribb" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                                </div>
                                <!--footer-link-area-end-->
                            </div>
                            <!--footer-tag-area-start-->
                            <div class="tag-area">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <h3 class="wedget-title">Related Tags</h3>
                                    <div class="footer-top-content">
                                        <ul>
                                            <li><a href="#">men</a></li>
                                            <li><a href="#">women</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">accessories</a></li>
                                            <li><a href="#">fashion</a></li>
                                            <li><a href="#">top</a></li>
                                            <li><a href="#">Gallery</a></li>
                                            <li><a href="#">new</a></li>
                                            <li><a href="#">furniture</a></li>
                                            <li><a href="#">footwear</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                            <li><a href="#">kid</a></li>
                                            <li><a href="#">sports</a></li>
                                            <li><a href="#">Electronics</a></li>
                                        </ul>
                                        <div class="view-all-tag">
                                            <ul>
                                                <li><a href="#">View All Tags</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--footer-tag-area-end-->
                            <!--footer-account-area-start-->
                            <div class="footer-account-area footer-none">
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                    <h3 class="wedget-title">My account</h3>
                                    <div class="footer-top-content">
                                        <ul>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">My Cart</a></li>
                                            <li><a href="#">Wishlist</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">Safe shopping</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Discount</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--footer-account-area-end-->
                            <!--footer-contact-info-start-->
                            <div class="footer-contact-info">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <h3 class="wedget-title">Contact Us</h3>
                                    <div class="footer-contact">
                                        <p class="adress"><label>Head Office:</label><span class="ft-content">8901 Marmora Road, Glasgow,<br> D05 90GR.</span></p>
                                        <p class="adress"><label>Branch Office:</label><span class="ft-content">7601 Babla Road, Glasgow,<br> D08 80TR.</span></p>
                                        <p class="phone"><label>phone:</label><span class="ft-content phone-num"><span class="phone1">(600) 0123 235 014</span><span class="phone2">(600) 0123 235 015</span></span></p>
                                        <p class="web"><label>email:</label><span class="ft-content web-site"><a href="mailto:admin@infinitelayout.com">admin@infinitelayout.com</a></span></p>
                                    </div>
                                </div>
                            </div>
                            <!--footer-contact-info-end-->
                        </div>
                    </div>
                </div>
                <!--footer-top-area-end-->
                <!--footer-bottom-area-start-->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="copy-right">
                                    <span> Copyright &copy; <a href="http://infinitelayout.com/">infinitelayout</a>. All Rights Reserved.</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="payment-area">
                                    <ul>
                                        <li><a title="Paypal" href="#"><img src="{{url('/')}}/assets/frontend/images/payment/1.png" alt="Paypal"></a></li>
                                        <li><a title="Visa" href="#"><img src="{{url('/')}}/assets/frontend/images/payment/2.png" alt="Visa"></a></li>
                                        <li><a title="Bank" href="#"><img src="{{url('/')}}/assets/frontend/images/payment/3.png" alt="Bank"></a></li>
                                        <li class="hidden-xs"><a title="Mastercard" href="#"><img src="{{url('/')}}/assets/frontend/images/payment/4.png" alt="Mastercard"></a></li>
                                        <li><a title="Discover" href="#"><img src="{{url('/')}}/assets/frontend/images/payment/5.png" alt="Discover"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--footer-bottom-area-end-->
            </footer>
            <!--End-footer-wrap-->

        </div>
        <!--End-main-wrapper-->
        <!--strat-Quickview-product -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <!-- modal-content-start-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- product-images -->
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="{{url('/')}}/assets/frontend/images/single-p/m1.jpg">
                                    </div>
                                </div>
                                <!-- product-images -->
                                <!-- product-info -->
                                <div class="product-info">
                                    <h1>Sample Product</h1>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="normal-price">£333.00</span>
                                        </div>
                                    </div>
                                    <a href="shop-grid.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info -->
                            </div>
                            <!-- modal-product -->
                        </div>
                        <!-- modal-body -->
                    </div>
                    <!-- modal-content -->
                </div>
                <!-- modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- End-quickview-product -->
        <!--Start-Newsletter-Popup-->
        <div id="newsletter-popup-conatiner">
            <div id="newsletter-popup">
                <span class="hide-popup">Close</span>
                <div class="subscribe-popup">
                    <div class="title-subscribe">
                        <h1>NEWSLETTER</h1>
                    </div>
                    <form id="newsletter-form" method="post" action="#">
                        <div class="content-subscribe">
                            <div class="form-subscribe-header">
                                <label>Subcribe to the Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat..</label>
                            </div>
                            <div class="input-box">
                               <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email">
                            </div>
                            <div class="actions">
                                <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                    <div class="subscribe-bottom">
                        <input type="checkbox" id="dont_show">
                        <label for="dont_show">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!--End-Newsletter-Popup-->


        <script src="{{url('/')}}/assets/frontend/js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="{{url('/')}}/assets/frontend/js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="{{url('/')}}/assets/frontend/js/owl.carousel.min.js"></script>
		<!-- meanmenu.js -->
        <script src="{{url('/')}}/assets/frontend/js/jquery.meanmenu.js"></script>
		<!-- nivo.slider.js -->
        <script src="{{url('/')}}/assets/frontend/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/frontend/lib/home.js" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="{{url('/')}}/assets/frontend/js/jquery-ui.min.js"></script>
		<!-- scrollUp.min.js -->
        <script src="{{url('/')}}/assets/frontend/js/jquery.scrollUp.min.js"></script>
		<!-- jquery.parallax.js -->
        <script src="{{url('/')}}/assets/frontend/js/jquery.parallax.js"></script>
		<!-- sticky.js -->
        <script src="{{url('/')}}/assets/frontend/js/jquery.sticky.js"></script>
        <!-- jquery.simpleGallery.min.js -->
        <script src="{{url('/')}}/assets/frontend/js/jquery.simpleGallery.min.js"></script>
        <script src="{{url('/')}}/assets/frontend/js/jquery.simpleLens.min.js"></script>
        <!-- countdown.min.js -->
        <script src="{{url('/')}}/assets/frontend/js/jquery.countdown.min.js"></script>
        <!-- isotope.pkgd.min -->
        <script src="{{url('/')}}/assets/frontend/js/isotope.pkgd.min.js"></script>
		<!-- wow js -->
        <script src="{{url('/')}}/assets/frontend/js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="{{url('/')}}/assets/frontend/js/plugins.js"></script>
		<!-- main js -->
        <script src="{{url('/')}}/assets/frontend/js/main.js"></script>
    </body>
</html>