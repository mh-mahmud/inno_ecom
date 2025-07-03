@extends('frontend.layouts.master')
@php
use Carbon\Carbon;
@endphp

@section('content')


<div class="single-banner-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="single-ban-top-content">
                    <p>{{ $product->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="signle-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-head-menu">
                    <ul>
                        <li><i class="fa fa-home"></i><a class="shop-home" href="{{ route('index') }}"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                        <li class="shop-pro">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Details Area -->
<div class="single-page-area padding-t">
    <!-- Single Product details Area -->
    <div class="single-product-details-area">
        <!-- Single Product View Area -->
        <div class="single-product-view-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <!-- Single Product View -->
                        <div class="single-procuct-view">
                            <!-- Simple Lence Gallery Container -->
                            <div class="simpleLens-gallery-container" id="p-view">
                                <div class="simpleLens-container tab-content">
                                    @php $active = true; @endphp
                                    @for($i = 1; $i <= 6; $i++)
                                        @php $img='img_path_' . ($i==1 ? '' : $i); @endphp
                                        @if(!empty($product->$img))
                                        <div class="tab-pane {{ $active ? 'active' : '' }}" id="p-view-{{ $i }}">
                                            <div class="simpleLens-big-image-container">
                                                <a class="simpleLens-lens-image" data-lens-image="{{ asset('uploads/products/' . $product->$img) }}">
                                                    <img src="{{ asset('uploads/products/' . $product->$img) }}" class="simpleLens-big-image" alt="product">
                                                </a>
                                            </div>
                                        </div>
                                        @php $active = false; @endphp
                                        @endif
                                        @endfor
                                </div>
                                <!-- Simple Lence Thumbnail -->
                                <div class="simpleLens-thumbnails-container text-center">
                                    <div id="single-product" class="owl-carousel custom-carousel">
                                        <ul class="nav nav-tabs" role="tablist">
                                            @php
                                            $active = true;
                                            $count = 0;
                                            @endphp

                                            @for ($i = 1; $i <= 6; $i++)
                                                @php
                                                $imgField='img_path' . ($i==1 ? '' : '_' . $i);
                                                @endphp

                                                @if (!empty($product->$imgField))
                                                @if ($count > 0 && $count % 3 == 0)
                                        </ul>
                                        <ul class="nav nav-tabs" role="tablist">
                                            @endif

                                            <li class="{{ $active ? 'active' : '' }}">
                                                <a href="#p-view-{{ $i }}" role="tab" data-toggle="tab">
                                                    <img src="{{ asset('uploads/products/' . $product->$imgField) }}" alt="product-thumb" width="100" height="100">
                                                </a>
                                            </li>

                                            @php
                                            $active = false;
                                            $count++;
                                            @endphp
                                            @endif
                                            @endfor
                                        </ul>
                                    </div>
                                </div>

                                <!-- End Simple Lence Thumbnail -->
                            </div>
                            <!-- End Simple Lence Gallery Container -->
                        </div>
                        <!-- End Single Product View -->
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
                        <div class="single-pro">
                            <div class="product-name">
                                <h3>{{ $product->name }}</h3>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="product-content">
                                <!-- Ratings -->
                                <!-- <div class="pro-rating single-p">
                                    <ul class="single-pro-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                    <div class="rating-links">
                                        <a href="#">1 Review(s)</a>
                                        <span class="separator">|</span>
                                        <a href="#" class="add-to-review">Add Your Review</a>
                                    </div>
                                </div> -->
                              

                                <!-- Price -->
                                <div class="pro-price single-p">
                                    <span class="price-text">Price:</span>
                                    <span class="normal-price">TK {{ number_format($product->product_value, 2) }}</span>
                                    @if ($product->discount_price)
                                    <span class="old-price"><del>TK {{ number_format($product->discount_price, 2) }}</del></span>
                                    @endif
                                </div>
                            </div>

                            <!-- Availability -->
                            <p>Availability: <span class="signle-stock">{{ $product->stock_status }}</span></p>

                            <!-- Description -->
                            <div class="product-reveiw">
                                <p>{!! $product->description !!}</p>
                            </div>

                            <div class="clear"></div>

                            <!-- Size Selection -->
                            <div class="skill-checklist">
                                <label for="skillc"><span class="size-cho">Size:</span></label><br>
                                <select id="skillc">
                                    @foreach(['xxs','xs','s','m','l','xl','xxl','xxxl','xxxxl'] as $size)
                                    @php $stockField = $size . '_stock'; @endphp
                                    @if ($product->$stockField > 0)
                                    <option value="{{ strtoupper($size) }}">{{ strtoupper($size) }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <!-- Color Options -->
                            @if($product->colors)
                            <div class="color-instock">
                                <div class="skill-colors">
                                    <span class="color-cho">Color</span>
                                    <ul class="skill-ulli">
                                        @foreach(explode(',', $product->colors) as $color)
                                            @php
                                                $colorName = strtolower(trim($color)); // normalize color name
                                            @endphp
                                            <li class="skill-{{ $colorName }}">
                                                <a href="#">
                        
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif


                            <!-- Quantity & Add to Cart -->
                            <div class="">
                                <div class="quick-add-to-cart">
                                    <form method="POST" action="#" class="cart">

                                        <div class="qty-button">
                                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                            <div class="box-icon button-plus">
                                                <input type="button" class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = parseInt(qty_el.value); if(!isNaN(qty)) qty_el.value = qty + 1;" value="+">
                                            </div>
                                            <div class="box-icon button-minus">
                                                <input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = parseInt(qty_el.value); if(!isNaN(qty) && qty > 1) qty_el.value = qty - 1;" value="-">
                                            </div>
                                        </div>
                                        <div class="add-to-cartbest single-add">
                                            <a href="#" title="add to cart">
                                                <div><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                          
                            <div class="clear"></div>
                            <!-- <div class="single-pro-cart">
                                <div class="add-to-link single-p">
                                    <a href="#" title="Wishlist">
                                        <div><i class="fa fa-heart"></i></div>
                                    </a>
                                    <a href="#" title="Email">
                                        <div><i class="fa fa-envelope"></i></div>
                                    </a>
                                    <a href="#" title="Compare">
                                        <div><i class="fa fa-random"></i></div>
                                    </a>
                                </div>
                            </div> -->

                            <div class="clear"></div>

                            <!-- <div class="social-icon-img">
                                <div class="sharethis-inline-share-buttons"></div>
                            </div> -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Single Product View Area -->
    </div>
    <!-- End Single details Area -->
</div>

<!-- Description Tabs -->
<div class="single-product-description">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-description-tab custom-tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#product-des" data-toggle="tab">Product Description</a></li>
                        <li><a href="#product-rev" data-toggle="tab">How to order</a></li>
                        <li><a href="#product-tag" data-toggle="tab">Return Policy</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="product-des">
                            {!! $product->product_specification !!}
                        </div>
                        <div class="tab-pane" id="product-rev">
                            <p>No reviews yet.</p>
                        </div>
                        <div class="tab-pane" id="product-tag">
                            <p>Tags: {{ $product->product_tag }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

                <!-- End-single-product -->
                <!-- Start-single-product -->
                @foreach($newArrivals as $product)
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-product">
                        @if($product->discount_price)
                        <div class="sale">Sale</div>
                        @endif
                        @if(strtolower($product->product_tag) == 'new arrival')
                        <div class="new">new</div>
                        @endif
                        <div class="sale-border"></div>
                        <div class="product-img-wrap">
                            <a class="product-img" href="#">
                                <img src="{{ asset('uploads/products/' . $product->img_path) }}" alt="{{ $product->name }}" />
                            </a>
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
                                <a href="#">
                                    <h3 class="pro-name">{{ $product->name }}</h3>
                                </a>
                                <!-- <div class="pro-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div> -->
                                <div class="pro-price">
                                    <span class="price-text">Price:</span>
                                    <span class="normal-price">TK {{ $product->product_value }}</span>
                                    @if($product->old_price)
                                    <span class="old-price"><del>TK {{ $product->old_price }}</del></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <!-- End-single-product -->
                <!-- Start-single-product -->

                <!-- End-single-product -->

            </div>
        </div>
    </div>
</div>
@endsection
<!-- End Single Description Tab -->
<!--Start-upsell-products-wrap-->