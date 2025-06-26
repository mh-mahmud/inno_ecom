@extends('frontend.layouts.master')
@php
    use Carbon\Carbon;
@endphp

@section('content')


  <section class="slider-area home-1">
    <div class="preview-1">
        {{-- Slider Images --}}
        <div id="ensign-nivoslider" class="slides">
            @foreach ($sliders as $key => $slider)
                <img 
                    src="{{ asset('uploads/sliders/' . $slider->slider_image) }}" 
                    alt="{{ $slider->slider_title }}" 
                    title="#slider-direction-{{ $key + 1 }}" 
                />
            @endforeach
        </div>

        {{-- Slider Content / Direction --}}
        @foreach ($sliders as $key => $slider)
            <div id="slider-direction-{{ $key + 1 }}" class="slider-direction {{ $loop->even ? 'slider-two' : 'slider-one' }}">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 {{ $loop->even ? 'text-left' : 'text-right' }}">
                            <div class="slider-content">
                                <!-- Title -->
                                <div class="layer-1-1">
                                    <h2 class="title1 wow bounceIn{{ $loop->even ? 'Right' : 'Left' }}" data-wow-duration="0.5s" data-wow-delay=".8s">
                                        {{ $slider->slider_title }}
                                    </h2>
                                </div>
                                <!-- Icon -->
                                <div class="layer-1-2">
                                    <p class="title2">
                                        <span class="fashion-1 {{ $loop->even ? 'fashion-2' : '' }} wow bounceIn{{ $loop->even ? 'Right' : 'Left' }}" data-wow-duration="0.5s" data-wow-delay="1s">
                                            <i class="fa fa-modx"></i>
                                        </span>
                                    </p>
                                </div>
                                <!-- Description -->
                                <div class="layer-1-3 {{ $loop->even ? 'layer-2-3' : '' }} hidden-xs">
                                    <p class="title3 wow bounceIn{{ $loop->even ? 'Right' : 'Left' }}" data-wow-duration="0.5s" data-wow-delay="1.5s">
                                        {{ $slider->slider_description }}
                                    </p>
                                </div>
                                <!-- Button -->
                                <div class="{{ $loop->even ? 'layer-2-4' : 'layer-1-4' }}">
                                    <a class="shop-n wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="2s" href="#">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

            <!-- End-slider-->
            <!-- Start-banner-area-->
            <div class="banner-area padding-t banner-dis1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-banner banner-r-b">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/1.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="single-banner banner-m-b">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/2.jpg" /></a>
                            </div>
                            <div class="single-banner banner-r-b">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/3.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-banner banner-4">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/4.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End-banner-area-->
            <!-- Start-featured-area-->
            <div class="featured-product-wrap padding-t padding-dis">
                <div class="container">
                    <!-- section-heading start -->
                  
                    <!-- section-heading end -->
                   
                </div>
            </div>
            <!--End-featured-area-->
            <!--Start-latest-trend-area-->
          
            <!--End-latest-trend-area-->
       
            <!--End-banner-area-->
           
            <!--end-new-arrival-random-wrap-->
   
            <!--Satar-business-policy-wrap-->
          
            <!--End-business-policy-wrap-->
            <!--Start-latest-products-wrap-->
            <div class="latest-products-wrap padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">New Arrival</span> Products</h3>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/10.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/1.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/9.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/8.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/6.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/5.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/2.jpg" alt="product-image" /></a>
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




            <div class="latest-products-wrap padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">Top Selling</span> Products</h3>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/10.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/1.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/9.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/8.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/6.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/5.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/2.jpg" alt="product-image" /></a>
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



                      <div class="latest-products-wrap padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">Polo</span></h3>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/10.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/1.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/9.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/8.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/6.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/5.jpg" alt="product-image" /></a>
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
                                        <a class="product-img" href="#"> <img src="{{url('/')}}/assets/frontend/images/product/2.jpg" alt="product-image" /></a>
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
            <!-- Start-banner-area-->
            <div class="banner-area padding-t banner-dis">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="single-banner fullwide-ban">
                                <a href="#"><img alt="Hi Guys" src="{{url('/')}}/assets/frontend/images/banner/23.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End-banner-area-->
            <!--Start-latest-testimonials-->
   
            <!--End-latest-testimonials-->
            <!--Start-blog-area-->
      
            <!--End-blog-area-->
            <!--Start-brand-area-->
            <div class="brands-area brand-dis1">
                <div class="container">
                    <!--barand-heading-->
                    <div class="brand-heading text-center">
                        <h2>Our brands</h2>
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
    
            <!--End-variety-products-wrap-->
            <!--Start-newsletter-wrap-->
          


    <!-- common portion here-->

@endsection
