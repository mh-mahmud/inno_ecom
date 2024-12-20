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
        <link rel="shortcut icon" type="images/png" href="{{url('/')}}/assets/frontend/images/favicon.ico">

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
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one home-4"></div>
                    <div class="object object_two home-4"></div>
                    <div class="object object_three home-4"></div>
                </div>
            </div>
        </div>
        <!--end-Preloader-area-->
        <!--header-area-start-->
        <!--Start-main-wrapper-->
        <div class="page-4">
            <!--Start-Header-area-->
            <header>
                <div class="header-top-wrap home-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-left">
                                    <!--Start-Header-language-->
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
                <div class="header-mid-wrap home-4">
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
                <div class="mainmenu-area home-4 hidden-sm hidden-xs">
                    <div id="sticker">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                                    <div class="log-small"><a class="logo" href="index.html"><img alt="Mt-Shop" src="{{url('/')}}/assets/frontend/images/logo/s.png"></a></div>
                                    <div class="mainmenu home-4">
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
                                                <li class="angle-down"><a href="shop-grid.html">Electronics</a>
                                                    <div class="megamenu home-3">
                                                        <div class="megamenu-list">
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Mobile</a>
                                                                <a href="shop-grid.html">Samsung</a>
                                                                <a href="shop-grid.html">Nokia</a>
                                                                <a href="shop-grid.html">iPhone</a>
                                                                <a href="shop-grid.html">Sony</a>
                                                                <a href="#">Collections</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Cameras</a>
                                                                <a href="shop-grid.html">Camcorders</a>
                                                                <a href="shop-grid.html">Digital</a>
                                                                <a href="shop-grid.html">Point & Shoot</a>
                                                                <a href="shop-grid.html">Camera Accesories</a>
                                                                <a href="shop-grid.html"> New Collections</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Mob: Accessories</a>
                                                                <a href="shop-grid.html">Bluetooth Headsets</a>
                                                                <a href="shop-grid.html">Cases & Covers</a>
                                                                <a href="shop-grid.html">Mobile Memory Cards</a>
                                                                <a href="shop-grid.html">Mobile Headphones</a>
                                                                <a href="shop-grid.html">Collections</a>
                                                            </span>
                                                            <span class="mega-single">
                                                                <a href="shop-grid.html" class="mega-title">Audio & Video</a>
                                                                <a href="shop-grid.html">IPods</a>
                                                                <a href="shop-grid.html">MP3 Players</a>
                                                                <a href="shop-grid.html">Video Players</a>
                                                                <a href="shop-grid.html">Speakers</a>
                                                                <a href="shop-grid.html">Collections</a>
                                                            </span>
                                                            <span>
                                                                <a href="shop-grid.html" class="mega-banner">
                                                                    <img src="{{url('/')}}/assets/frontend/images/menu/6.jpg" alt="Hi">
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
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
                            <div class="col-lg-12 col-md-12">
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
                                                    <li><a href="#">Dresses</a>
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
                                                    <li><a href="#">Dresses</a>
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
                                            <li><a href="shop-grid.html">Electronics</a>
                                                <ul>
                                                    <li><a href="shop-grid.html">Mobile</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Samsung</a></li>
                                                            <li><a href="shop-grid.html">Nokia</a></li>
                                                            <li><a href="shop-grid.html">iPhone</a></li>
                                                            <li><a href="shop-grid.html">Sony</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Cameras</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Camcorders</a></li>
                                                            <li><a href="shop-grid.html">Digital</a></li>
                                                            <li><a href="shop-grid.html">Point & Shoot</a></li>
                                                            <li><a href="shop-grid.html">Camera Accesories</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Mob: Accessories</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">Bluetooth Headsets</a></li>
                                                            <li><a href="shop-grid.html">Cases & Covers</a></li>
                                                            <li><a href="shop-grid.html">Mobile Memory Cards</a></li>
                                                            <li><a href="shop-grid.html">Mobile Headphones</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid.html">Audio & Video</a>
                                                        <ul>
                                                            <li><a href="shop-grid.html">IPods</a></li>
                                                            <li><a href="shop-grid.html">MP3 Players
        </a></li>
                                                            <li><a href="shop-grid.html">Video Players</a></li>
                                                            <li><a href="shop-grid.html">Speakers</a></li>
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
            <section class="slider-area home-1 home-2">
                <div class="container">
                    <div class="row">
                        <!--start-categry-area-->
                        <div class="col-lg-3 col-md-3">
                            <div class="category-main-wrap home-4 hidden-sm hidden-xs">
                                <div class="category-title"><h3>Category</h3></div>
                                    <div class="cat-single-wrap">
                                        <ul class="nav">
                                            <li>
                                            <a href="#">Smart Phone</a>
                                            <div class="single-wrap">
                                                <div class="cat-wrap">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3">
                                                            <h3>brand</h3>
                                                            <ul class="nav">
                                                                <li><a href="#">dell</a></li>
                                                                <li><a href="#">samsung</a></li>
                                                                <li><a href="#">apple</a></li>
                                                                <li><a href="#">canon</a></li>
                                                                <li><a href="#">toshiba</a></li>
                                                                <li><a href="#">asus</a></li>
                                                                <li><a href="#">Sony</a></li>
                                                                <li><a href="#">hp</a></li>
                                                                <li><a href="#">nokia</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 left-border">
                                                            <h3>accessories</h3>
                                                            <ul class="nav">
                                                                <li><a href="#">autem </a></li>
                                                                <li><a href="#">vel eum </a></li>
                                                                <li><a href="#">Duis</a></li>
                                                                <li><a href="#">hendrerit</a></li>
                                                                <li><a href="#">velit </a></li>
                                                                <li><a href="#">display</a></li>
                                                                <li><a href="#">Duis</a></li>
                                                                <li><a href="#">vulputate</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 left-border">
                                                            <div class="custom-category-right">
                                                                <div class="box-category">
                                                                    <div>
                                                                        <h3>Wrist watches</h3>
                                                                        <div class="category-price">60%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="box-category cat-pad-top">
                                                                    <div>
                                                                        <h3>bags &amp; cases</h3>
                                                                        <div class="category-price">50%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="box-category cat-pad-top">
                                                                    <div>
                                                                        <h3>Lens &amp; Flashes  </h3>
                                                                        <div class="category-price">40%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="cat-bane-img">
                                                        <a href="#"><img alt="" src="{{url('/')}}/assets/frontend/images/banner/25.jpg" class="img-responsive"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Camera</a>
                                            <div class="single-wrap">
                                                <div class="cat-wrap">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3">
                                                            <h3>brand</h3>
                                                            <ul class="nav">
                                                                <li><a href="#">dell</a></li>
                                                                <li><a href="#">samsung</a></li>
                                                                <li><a href="#">apple</a></li>
                                                                <li><a href="#">canon</a></li>
                                                                <li><a href="#">toshiba</a></li>
                                                                <li><a href="#">asus</a></li>
                                                                <li><a href="#">Sony</a></li>
                                                                <li><a href="#">hp</a></li>
                                                                <li><a href="#">nokia</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 left-border">
                                                            <h3>accessories</h3>
                                                            <ul class="nav">
                                                                <li><a href="#">autem </a></li>
                                                                <li><a href="#">vel eum </a></li>
                                                                <li><a href="#">Duis</a></li>
                                                                <li><a href="#">hendrerit</a></li>
                                                                <li><a href="#">velit </a></li>
                                                                <li><a href="#">display</a></li>
                                                                <li><a href="#">Duis</a></li>
                                                                <li><a href="#">vulputate</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 left-border">
                                                            <div class="custom-category-right">
                                                                <div class="box-category">
                                                                    <div>
                                                                        <h3>Wrist watches</h3>
                                                                        <div class="category-price">60%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="box-category cat-pad-top">
                                                                    <div>
                                                                        <h3>bags &amp; cases</h3>
                                                                        <div class="category-price">50%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="box-category cat-pad-top">
                                                                    <div>
                                                                        <h3>Lens &amp; Flashes  </h3>
                                                                        <div class="category-price">40%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="cat-bane-img">
                                                        <a href="#"><img alt="" src="{{url('/')}}/assets/frontend/images/banner/25.jpg" class="img-responsive"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Computer</a>
                                            <div class="single-wrap">
                                                <div class="cat-wrap">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3">
                                                            <h3>brand</h3>
                                                            <ul class="nav">
                                                                <li><a href="#">dell</a></li>
                                                                <li><a href="#">samsung</a></li>
                                                                <li><a href="#">apple</a></li>
                                                                <li><a href="#">canon</a></li>
                                                                <li><a href="#">toshiba</a></li>
                                                                <li><a href="#">asus</a></li>
                                                                <li><a href="#">Sony</a></li>
                                                                <li><a href="#">hp</a></li>
                                                                <li><a href="#">nokia</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 left-border">
                                                            <h3>accessories</h3>
                                                            <ul class="nav">
                                                                <li><a href="#">autem </a></li>
                                                                <li><a href="#">vel eum </a></li>
                                                                <li><a href="#">Duis</a></li>
                                                                <li><a href="#">hendrerit</a></li>
                                                                <li><a href="#">velit </a></li>
                                                                <li><a href="#">display</a></li>
                                                                <li><a href="#">Duis</a></li>
                                                                <li><a href="#">vulputate</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 left-border">
                                                            <div class="custom-category-right">
                                                                <div class="box-category">
                                                                    <div>
                                                                        <h3>Wrist watches</h3>
                                                                        <div class="category-price">60%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="box-category cat-pad-top">
                                                                    <div>
                                                                        <h3>bags &amp; cases</h3>
                                                                        <div class="category-price">50%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="box-category cat-pad-top">
                                                                    <div>
                                                                        <h3>Lens &amp; Flashes  </h3>
                                                                        <div class="category-price">40%<sup>off</sup></div>
                                                                        <a href="#">buy now  <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="cat-bane-img">
                                                        <a href="#"><img alt="" src="{{url('/')}}/assets/frontend/images/banner/25.jpg" class="img-responsive"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Laptop</a>
                                            <div class="single-wrap tablet">
                                                <div class="cat-wrap">
                                                    <h3>brand</h3>
                                                    <ul class="nav">
                                                        <li><a href="#">dell</a></li>
                                                        <li><a href="#">nokia</a></li>
                                                        <li><a href="#">canon</a></li>
                                                        <li><a href="#">Sony</a></li>
                                                        <li><a href="#">samsung</a></li>
                                                        <li><a href="#">asus</a></li>
                                                        <li><a href="#">hp</a></li>
                                                        <li><a href="#">nikon</a></li>
                                                        <li><a href="#">apple</a></li>
                                                        <li><a href="#">toshiba</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Tablet</a>
                                            <div class="single-wrap tablet">
                                                <div class="cat-wrap">
                                                    <h3>brand</h3>
                                                    <ul class="nav">
                                                        <li><a href="#">dell</a></li>
                                                        <li><a href="#">nokia</a></li>
                                                        <li><a href="#">canon</a></li>
                                                        <li><a href="#">Sony</a></li>
                                                        <li><a href="#">samsung</a></li>
                                                        <li><a href="#">asus</a></li>
                                                        <li><a href="#">hp</a></li>
                                                        <li><a href="#">nikon</a></li>
                                                        <li><a href="#">apple</a></li>
                                                        <li><a href="#">toshiba</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cat-none"><a href="#">Electronics</a></li>
                                        <li class="cat-none"><a href="#">New arrivals</a></li>
                                        <li class="cat-none"><a href="#">Bestseller</a></li>
                                        <li class="more-view"><a href="#">Bags &amp; Cases</a></li>
                                        <li class="more-view"><a href="#">Accessories</a></li>
                                        <li class="view-more"><a href="#">More category</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--end-category-area-->
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="preview-1 home-4">
                                <div id="ensign-nivoslider" class="slides">
                                    <img src="{{url('/')}}/assets/frontend/images/slider/7.jpg" alt="" title="#slider-direction-1" />
                                    <img src="{{url('/')}}/assets/frontend/images/slider/8.jpg" alt="" title="#slider-direction-2" />
                                </div>
                                <!-- direction 1 -->
                                <div id="slider-direction-1" class="t-cn slider-direction slider-one">
                                    <div class="slider-progress"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 text-right">
                                                <div class="slider-content three">
                                                    <!-- layer 1 -->
                                                    <div class="layer-1-1"><h2 class="title1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay=".8s">Sale up to <span class="h-color">50%</span> off</h2>
                                                    </div>
                                                    <!-- layer 2 -->
                                                    <div class="layer-1-2">
                                                        <p class="title2">
                                                            <span class="fashion-1 wow bounceInRight" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <!-- layer 3 -->
                                                    <div class="layer-1-3 hidden-xs">
                                                        <p class="title3 wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="1.5s" >Clean and elegant design with a modern style.</p>
                                                    </div>
                                                    <!-- layer 4 -->
                                                    <div class="layer-1-4">
                                                        <a class="shop-n wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="2s" href="#">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- direction 2 -->
                                <div id="slider-direction-2" class="slider-direction slider-two">
                                    <div class="slider-progress"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 text-left">
                                                <div class="slider-content four">
                                                    <!-- layer 1 -->
                                                    <div class="layer-1-1">
                                                        <h2 class="title1 wow bounceInRight" data-wow-duration="0.5s" data-wow-delay=".8s">save up to <span class="h-color">30%</span> off</h2>
                                                    </div>
                                                    <!-- layer 2 -->
                                                    <div class="layer-1-2">
                                                        <p class="title2">
                                                            <span class="fashion-1 fashion-2 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <!-- layer 3 -->
                                                    <div class="layer-1-3 layer-2-3 hidden-xs">
                                                        <p class="title3  wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="1.5s" >Clean and elegant design with a modern style.</p>
                                                    </div>
                                                    <!-- layer 4 -->
                                                    <div class="layer-2-4">
                                                        <a class="shop-n wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="2s" href="#">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End-slider-->
            <!-- Start-banner-area-->
            <div class="banner-area padding-t home-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="single-banner banner-m-b">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/14.jpg" /></a>
                            </div>
                            <div class="single-banner banner-r-b">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/15.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-banner banner-r-b">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/16.jpg" /></a>
                            </div>
                        </div>
                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-banner four">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/13.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End-banner-area-->
            <!-- Start-featured-area-->
            <div class="featured-product-wrap home-4 padding-t">
                <div class="container">
                    <!-- section-heading start -->
                    <div class="section-heading">
                        <h3><span class="h-color">FEATURED</span> PRODUCTS</h3>
                    </div>
                    <!-- section-heading end -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="features-tab">
                              <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mobile</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Laptop</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Headphone</a></li>
                                    <li role="presentation"><a href="#section" aria-controls="messages" role="tab" data-toggle="tab">Camera</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!--start-home-section-->
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="featured-carousel indicator">
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product sold-out">
                                                    <div class="sale">Sale</div>
                                                    <div class="new">new</div>
                                                    <div class="sale-border"></div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/26.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="sold-text">
                                                                <span>Sold <br> Out</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/31.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$130.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="upcoming-product featured-count">
                                                            <div data-countdown="2019/06/01"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">Sale</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/32.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$150.00</span>
                                                                    <span class="old-price"><del>$170.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="sale">sale</div>
                                                    <div class="new">new</div>
                                                    <div class="sale-border"></div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/30.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$200.00</span>
                                                                    <span class="old-price"><del>$230.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/29.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">Sale</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end-home-section-->
                                    <!--start-profile-section-->
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="row">
                                            <div class="featured-carousel indicator">
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">Sale</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/27.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$120.00</span>
                                                                    <span class="old-price"><del>$140.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product sold-out">
                                                    <div class="sale">Sale</div>
                                                    <div class="new">new</div>
                                                    <div class="sale-border"></div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/28.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="sold-text">
                                                                <span>Sold <br> Out</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/30.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$300.00</span>
                                                                    <span class="old-price"><del>$320.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">new</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$150.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">new</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/32.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$140.00</span>
                                                                    <span class="old-price"><del>$170.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="sale">Sale</div>
                                                    <div class="new">new</div>
                                                    <div class="sale-border"></div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/26.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end-profile-section-->
                                    <!--start-messages-section-->
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="row">
                                            <div class="featured-carousel indicator">
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/28.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">Sale</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/32.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$200.00</span>
                                                                    <span class="old-price"><del>$220.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">new</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/31.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$180.00</span>
                                                                    <span class="old-price"><del>$210.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/30.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/26.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$240.00</span>
                                                                    <span class="old-price"><del>$300.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end-messages-section-->
                                    <!--start-section-section-->
                                    <div role="tabpanel" class="tab-pane" id="section">
                                        <div class="row">
                                            <div class="featured-carousel indicator">
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="sale">Sale</div>
                                                    <div class="new">new</div>
                                                    <div class="sale-border"></div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/29.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$90.00</span>
                                                                    <span class="old-price"><del>$100.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">new</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/30.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$200.00</span>
                                                                    <span class="old-price"><del>$220.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="new">sale</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/27.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$190.00</span>
                                                                    <span class="old-price"><del>$210.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/26.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$100.00</span>
                                                                    <span class="old-price"><del>$120.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <!-- Start-single-product -->
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                                            <div class="add-to-link">
                                                                <a href="#">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                                <a data-toggle="modal" data-target="#productModal" href="#">
                                                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                                </a>
                                                                <a href="#">
                                                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a href="#" title="add to cart">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">$140.00</span>
                                                                    <span class="old-price"><del>$170.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end-section-section-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-featured-area-->
            <!--Satar-business-policy-wrap-->
            <div class="business-policy-wrap home-2 home-4">
                <div class="container">
                    <div class="barand-content">
                        <div class="row">
                           <!--Satar-single-p-wrap-->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-p-wrap banner-r-b text-center">
                                    <span><i class="fa fa-plane"></i></span>
                                    <h4>Free shipping worldwide <br> order.</h4>
                                </div>
                            </div>
                            <!--end-single-p-wrap-->
                            <!--Satar-single-p-wrap-->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-p-wrap banner-r-b text-center">
                                    <span><i class="fa fa-life-ring"></i></span>
                                    <h4>Support 24/7 We support online 24 hours a day.</h4>
                                </div>
                            </div>
                            <!--end-single-p-wrap-->
                            <!--Satar-single-p-wrap-->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-p-wrap banner-r-b text-center">
                                    <span><i class="fa fa-money"></i></span>
                                    <h4>Money Guaranty 100% money back guaranty !</h4>
                                </div>
                            </div>
                            <!--end-single-p-wrap-->
                            <!--Satar-single-p-wrap-->
                            <div class="col-lg-3 col-md-3 col-sm-3 cl-xs-12">
                                <div class="single-p-wrap text-center">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    <h4>Store Hours Open: 8:00AM - <br>Close: 20:00PM.</h4>
                                </div>
                            </div>
                            <!--end-single-p-wrap-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End-business-policy-wrap-->
            <!--Start-latest-products-wrap-->
            <div class="latest-products-wrap home-4 padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">New</span> Arrivals</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="featured-carousel indicator">
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product sold-out">
                                <div class="sale">Sale</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/29.jpg" alt="product-image" /></a>
                                        <div class="add-to-link">
                                            <a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a>
                                            <a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a>
                                        </div>
                                        <div class="sold-text">
                                            <span>Sold <br> Out</span>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                            <div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">$200.00</span>
                                                <span class="old-price"><del>$220.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="new">new</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/27.jpg" alt="product-image" /></a>
                                        <div class="add-to-link">
                                            <a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a>
                                            <a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                            <div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">$200.00</span>
                                                <span class="old-price"><del>$220.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/28.jpg" alt="product-image" /></a>
                                        <div class="add-to-link">
                                            <a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a>
                                            <a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                            <div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">$170.00</span>
                                                <span class="old-price"><del>$200.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="new">new</div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                        <div class="add-to-link">
                                            <a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a>
                                            <a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                            <div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">$200.00</span>
                                                <span class="old-price"><del>$220.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/32.jpg" alt="product-image" /></a>
                                        <div class="add-to-link">
                                            <a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a>
                                            <a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                            <div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">$200.00</span>
                                                <span class="old-price"><del>$220.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="new">new</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/30.jpg" alt="product-image" /></a>
                                        <div class="add-to-link">
                                            <a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a>
                                            <a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                            <div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">$280.00</span>
                                                <span class="old-price"><del>$300.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/31.jpg" alt="product-image" /></a>
                                        <div class="add-to-link">
                                            <a href="#">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                            </a>
                                            <a href="#">
                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                            </a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                            <div class="pro-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="pro-price">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">$200.00</span>
                                                <span class="old-price"><del>$220.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End-latest-products-wrap-->
            <!--Start-banner-area-->
            <div class="banner-area padding-t home-4 banner-dis">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="single-banner banner-r-b">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/26.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="single-banner">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/17.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-banner-area-->
            <div class="clear"></div>
             <!--Start-top-catagories-wrap-->
            <div class="latest-products-wrap home-4 padding-t">
                <div class="container">
                    <!--start-top-categories-heading-->
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">Top</span> Catagories</h3>
                        </div>
                    </div>
                    <!--end-top-categories-heading-->
                    <div class="row">
                        <div class="featured-carousel indicator">
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"><img src="{{url('/')}}/assets/frontend/images/product/26.jpg" alt="product-image" /></a>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><span>View More</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">SmartPhones & Tablets</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="new">new</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><span>View More</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">watches & jewelry</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/27.jpg" alt="product-image" /></a>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><span>View More</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">laptop & headphone</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="new">new</div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/29.jpg" alt="product-image" /></a>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><span>View More</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">Cameras</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/34.jpg" alt="product-image" /></a>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><span>View More</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">mouses & flashlight</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                            <!-- Start-single-product -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                <div class="sale">Sale</div>
                                <div class="new">new</div>
                                <div class="sale-border"></div>
                                    <div class="product-img-wrap">
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/35.jpg" alt="product-image" /></a>
                                        <div class="add-to-cart">
                                            <a href="#" title="add to cart">
                                                <div><span>View More</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="#"><h3 class="pro-name">printer</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End-single-product -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End-top-categories-wrap-->
            <!--Start-latest-testimonials-->
            <div class="latest-testimonial-wrap home-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <!--start-testimonial-heading-->
                            <div class="testimonial-heading home-4">
                                <div class="section-heading">
                                    <h3><span class="h-color">Latest</span> Testimonials</h3>
                                </div>
                            </div>
                            <!--End-testimonial-heading-->
                        </div>
                    </div>
                </div>
                <div class="main-testimonial home-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="testimonial-carousel indicator">
                                    <!--single-testimonial-start-->
                                    <div class="single-testimonial">
                                        <div class="testimonial-img">
                                            <p><img src="{{url('/')}}/assets/frontend/images/testimonial/1.jpg" alt=""></p>
                                        </div>
                                        <div class="testimonial-des home-1">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis dui odio, non suscipit consectetur elit, Lorem ipsum dolor sit<br> amet, consectetur adipiscing elit. Mattis dui odio, non suscipit , Lorem... </p>
                                        </div>
                                        <div class="testimonial-author">
                                            <h5>Miss.Anna</h5>
                                        </div>
                                    </div>
                                    <!--single-testimonial-end-->
                                    <!--single-testimonial-start-->
                                    <div class="single-testimonial">
                                        <div class="testimonial-img">
                                            <p><img src="{{url('/')}}/assets/frontend/images/testimonial/2.jpg" alt=""></p>
                                        </div>
                                        <div class="testimonial-des">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis dui odio, non suscipit consectetur elit, Lorem ipsum dolor sit<br> amet, consectetur adipiscing elit. Mattis dui odio, non suscipit , Lorem... </p>
                                        </div>
                                        <div class="testimonial-author">
                                            <h5>Jems David</h5>
                                        </div>
                                    </div>
                                    <!--single-testimonial-end-->
                                    <!--single-testimonial-start-->
                                    <div class="single-testimonial">
                                        <div class="testimonial-img">
                                            <p><img src="{{url('/')}}/assets/frontend/images/testimonial/3.jpg" alt=""></p>
                                        </div>
                                        <div class="testimonial-des">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis dui odio, non suscipit consectetur elit, Lorem ipsum dolor sit<br> amet, consectetur adipiscing elit. Mattis dui odio, non suscipit , Lorem... </p>
                                        </div>
                                        <div class="testimonial-author">
                                            <h5>Miss.Jerin</h5>
                                        </div>
                                    </div>
                                    <!--single-testimonial-end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-latest-testimonials-->
            <!--Start-blog-area-->
            <div class="latest-blog-wrap home-4 padding-t">
                <div class="container">
                    <!--start-blog-area-heading-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-heading">
                                <div class="section-heading">
                                    <h3><span class="h-color">Our</span> latest Blog</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end-blog-area-heading-->
                    <div class="row">
                        <div class="blog-carousel indicator">
                            <!--start-single-blog-area-->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="#"><img src="{{url('/')}}/assets/frontend/images/blog/1.jpg" alt=""></a>
                                        <div class="blog-up-text">
                                            <span class="date">21</span>
                                            <span class="month">February</span>
                                        </div>
                                    </div>
                                    <div class="blog-inner-content">
                                        <div class="blog-title">
                                            <a href="#"><h4>Lorem Ipsum is not simply random. </h4></a>
                                        </div>
                                        <div class="post-time">
                                            <span class="post-date"><i class="fa fa-user"></i> Posted By Admin</span>
                                            <span class="comment"><i class="fa fa-comment-o"></i> <a href="#">21 Comments</a></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                        </div>
                                        <div class="blog-button">
                                            <a class="blog-readmore" href="#">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end-single-blog-area-->
                            <!--start-single-blog-area-->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="#"><img src="{{url('/')}}/assets/frontend/images/blog/2.jpg" alt=""></a>
                                        <div class="blog-up-text">
                                            <span class="date">21</span>
                                            <span class="month">February</span>
                                        </div>
                                    </div>
                                    <div class="blog-inner-content">
                                        <div class="blog-title">
                                            <a href="#"><h4>Lorem Ipsum is not simply random. </h4></a>
                                        </div>
                                        <div class="post-time">
                                            <span class="post-date"><i class="fa fa-user"></i> Posted By Admin</span>
                                            <span class="comment"><i class="fa fa-comment-o"></i> <a href="#">21 Comments</a></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                        </div>
                                        <div class="blog-button">
                                            <a class="blog-readmore" href="#">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end-single-blog-area-->
                            <!--start-single-blog-area-->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="#"><img src="images/blog/3.jpg" alt=""></a>
                                        <div class="blog-up-text">
                                            <span class="date">21</span>
                                            <span class="month">February</span>
                                        </div>
                                    </div>
                                    <div class="blog-inner-content">
                                        <div class="blog-title">
                                            <a href="#"><h4>Lorem Ipsum is not simply random. </h4></a>
                                        </div>
                                        <div class="post-time">
                                            <span class="post-date"><i class="fa fa-user"></i> Posted By Admin</span>
                                            <span class="comment"><i class="fa fa-comment-o"></i> <a href="#">21 Comments</a></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                        </div>
                                        <div class="blog-button">
                                            <a class="blog-readmore" href="#">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end-single-blog-area-->
                            <!--start-single-blog-area-->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="#"><img src="{{url('/')}}/assets/frontend/images/blog/4.jpg" alt=""></a>
                                        <div class="blog-up-text">
                                            <span class="date">21</span>
                                            <span class="month">February</span>
                                        </div>
                                    </div>
                                    <div class="blog-inner-content">
                                        <div class="blog-title">
                                            <a href="#"><h4>Lorem Ipsum is not simply random. </h4></a>
                                        </div>
                                        <div class="post-time">
                                            <span class="post-date"><i class="fa fa-user"></i> Posted By Admin</span>
                                            <span class="comment"><i class="fa fa-comment-o"></i> <a href="#">21 Comments</a></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                        </div>
                                        <div class="blog-button">
                                            <a class="blog-readmore" href="#">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end-single-blog-area-->
                            <!--start-single-blog-area-->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="#"><img src="{{url('/')}}/assets/frontend/images/blog/1.jpg" alt=""></a>
                                        <div class="blog-up-text">
                                            <span class="date">21</span>
                                            <span class="month">February</span>
                                        </div>
                                    </div>
                                    <div class="blog-inner-content">
                                        <div class="blog-title">
                                            <a href="#"><h4>Lorem Ipsum is not simply random. </h4></a>
                                        </div>
                                        <div class="post-time">
                                            <span class="post-date"><i class="fa fa-user"></i> Posted By Admin</span>
                                            <span class="comment"><i class="fa fa-comment-o"></i> <a href="#">21 Comments</a></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                        </div>
                                        <div class="blog-button">
                                            <a class="blog-readmore" href="#">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end-single-blog-area-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End-blog-area-->
            <!--Start-brand-area-->
            <div class="brands-area home-4">
                <div class="container">
                    <!--barand-heading-->
                    <div class="brand-heading text-center">
                        <h2>Popular brands</h2>
                    </div>
                    <!--brand-heading-end-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brands-carousel">
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="{{url('/')}}/assets/frontend/images/brands/1.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="{{url('/')}}/assets/frontend/images/brands/2.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="{{url('/')}}/assets/frontend/images/brands/3.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="{{url('/')}}/assets/frontend/images/brands/4.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="{{url('/')}}/assets/frontend/images/brands/1.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="{{url('/')}}/assets/frontend/images/brands/2.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="{{url('/')}}/assets/frontend/images/brands/3.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-brand-area-->
            <!--Start-variety-products-wrap-->
            <div class="variety-products-wrap home-4 padding-t">
                <div class="container">
                    <div class="row">
                        <!--start-best-seller-product-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="best-heading">
                                <div class="section-heading best-h">
                                    <h3><span class="h-color">Best</span> Seller</h3>
                                </div>
                            </div>
                            <div class="best-carousel">
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/31.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/28.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/30.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/26.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                            </div>
                        </div>
                        <!--end-best-seller-product-->
                        <!--start-Top-rated-product-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 top-rated">
                            <div class="best-heading">
                                <div class="section-heading best-h">
                                    <h3><span class="h-color">Top</span> Rated</h3>
                                </div>
                            </div>
                            <div class="best-carousel">
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/27.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/29.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/32.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                            </div>
                        </div>
                        <!--end-Top-rated-product-->
                        <!--start-best-offer-product-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 best-off">
                            <div class="best-heading">
                                <div class="section-heading best-h">
                                    <h3><span class="h-color">Best</span> Offer</h3>
                                </div>
                            </div>
                            <div class="best-carousel">
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/32.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/33.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/26.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/30.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                <div class="pro-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                            </div>
                        </div>
                        <!--end-best-offer-product-->
                    </div>
                </div>
            </div>
            <!--End-variety-products-wrap-->
            <!--Start-newsletter-wrap-->
            <div class="news-letter-wrap text-center home-4">
                <div class="container">
                    <div class="row">
                        <div class="news-subscribe">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="letter-text">
                                    <h3><span class="h-color">Don't</span> Miss Out <br> <span><img src="{{url('/')}}/assets/frontend/images/newsletter/1.png" alt=""></span></h3>
                                    <p>Subscribe for the latest styles and sales, plus get <span class="h-color">30%</span> offer <br> your first order.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="email-area">
                                    <form class="input-group" action="#" method="post">
                                        <span class="input-group-addon icon-envlop">
                                        <i class="fa fa-envelope-o"></i>
                                        </span>
                                        <input type="email" class="form-control form_text" placeholder="Enter your email address">
                                        <input type="submit" class="submit" value="Sign up">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-newsletter-wrap-->
            <!--Start-footer-wrap-->
            <footer class="footer-area">
                <div class="footer-top-area home-4">
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
                                        <p class="adress"><label>Head Office:</label><span class="ft-content">7601 Babla Road, Glasgow,<br> D08 80TR.</span></p>
                                        <p class="phone"><label>phone:</label><span class="ft-content phone-num"><span class="phone1">(600) 0123 235 014</span><span class="phone2">(600) 0123 235 015</span></span></p>
                                        <p class="web"><label>email:</label><span class="ft-content web-site"><a href="mailto: admin@infinitelayout.com">admin@infinitelayout.com</a></span></p>
                                    </div>
                                </div>
                            </div>
                            <!--footer-contact-info-end-->
                        </div>
                    </div>
                </div>
                <!--footer-top-area-end-->
                <!--footer-bottom-area-start-->
                <div class="footer-bottom-area home-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="copy-right">
                                    <span> Copyright &copy; <a href="#">infinitelayout</a>. All Rights Reserved.</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="payment-area">
                                    <ul>
                                        <li><a title="Paypal" href="#"><img src="{{url('/')}}/assets/frontend/images/payment/1.png" alt="Paypal"></a></li>
                                        <li><a title="Visa" href="#"><img src="{{url('/')}}/assets/frontend/images/payment/2.png" alt="Visa"></a></li>
                                        <li><a title="Bank" href="#"><img src="{{url('/')}}/assets/frontend/images/payment/3.png" alt="Bank"></a></li>
                                        <li class="hidden-xs"><a title="Mastercard" href="#"><img src="images/payment/4.png" alt="Mastercard"></a></li>
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
        <!-- Quickview-product-strat -->
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
                                        <img alt="" src="{{url('/')}}/assets/frontend/images/product/31.jpg">
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
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a>
                                                </li>
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
        <!-- End quickview product -->
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


		<!-- all js here -->
		<!-- jquery latest version -->
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