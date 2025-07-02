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
                        <li><i class="fa fa-home"></i><a class="shop-home" href="{{ url('/') }}"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                        <li class="shop-pro">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Details Area -->
<div class="single-page-area padding-t">
    <div class="single-product-details-area">
        <div class="single-product-view-area">
            <div class="container">
                <div class="row">
                    <!-- Product Images -->
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="single-procuct-view">
                            <div class="simpleLens-gallery-container" id="p-view">
                                <div class="simpleLens-container tab-content">
                                    @for($i = 1; $i <= 6; $i++)
                                        @php $img = 'img_path_' . $i; @endphp
                                        @if(!empty($product->$img))
                                            <div class="tab-pane {{ $i === 1 ? 'active' : '' }}" id="p-view-{{ $i }}">
                                                <div class="simpleLens-big-image-container">
                                                    <a class="simpleLens-lens-image" data-lens-image="{{ asset('uploads/products/' . $product->$img) }}">
                                                        <img src="{{ asset('uploads/products/' . $product->$img) }}" class="simpleLens-big-image" alt="{{ $product->name }}">
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                                <div class="simpleLens-thumbnails-container text-center">
                                    <div id="single-product" class="owl-carousel custom-carousel">
                                        <ul class="nav nav-tabs" role="tablist">
                                            @for($i = 1; $i <= 6; $i++)
                                                @php $img = 'img_path_' . $i; @endphp
                                                @if(!empty($product->$img))
                                                    <li class="{{ $i === 1 ? 'active' : '' }}">
                                                        <a href="#p-view-{{ $i }}" data-toggle="tab">
                                                            <img src="{{ asset('uploads/products/' . $product->$img) }}" alt="" style="width: 100px; height: 100px; object-fit: cover;">

                                                        </a>
                                                    </li>
                                                @endif
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="col-lg-7 col-md-7 col-sm-6 single-product-details">
                        <div class="single-pro">
                            <div class="product-name">
                                <h3>{{ $product->name }}</h3>
                            </div>
                            <div class="product-content">
                                <div class="pro-price single-p">
                                    <span class="price-text">Price:</span>
                                    <span class="normal-price">${{ $product->product_value }}</span>
                                    @if($product->discount_price)
                                        <span class="old-price"><del>${{ $product->old_price }}</del></span>
                                    @endif
                                </div>
                                <p>Availability: <span class="signle-stock">{{ $product->stock_status }}</span></p>

                                <div class="product-reveiw">
                                    <p> {!! $product->description !!}</p>
                                </div>

                                <!-- Sizes -->
                                <div class="skill-checklist">
                                    <label><span class="size-cho">Size:</span></label><br>
                                    <select>
                                        @foreach(['xxs','xs','s','m','l','xl','xxl','xxxl','xxxxl'] as $size)
                                            @php $stock = $size . '_stock'; @endphp
                                            @if($product->$stock > 0)
                                                <option value="{{ strtoupper($size) }}">{{ strtoupper($size) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Colors -->
                                @if($product->colors)
                                    <div class="color-instock">
                                        <div class="skill-colors">
                                            <span class="color-cho">Color</span>
                                            <ul class="skill-ulli">
                                                @foreach(explode(',', $product->colors) as $color)
                                                    <li><span style="background: {{ $color }}; display: inline-block; width: 20px; height: 20px; border-radius: 50%;"></span></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif

                                <!-- Add to Cart -->
                                <form method="POST" action="#">
                                    <div class="qty-button">
                                        <input type="text" name="qty" value="1" class="input-text qty">
                                        <div class="box-icon button-plus">
                                            <input type="button" onclick="var qty = parseInt(document.querySelector('[name=qty]').value); document.querySelector('[name=qty]').value = qty + 1;" value="+">
                                        </div>
                                        <div class="box-icon button-minus">
                                            <input type="button" onclick="var qty = parseInt(document.querySelector('[name=qty]').value); if(qty > 1) document.querySelector('[name=qty]').value = qty - 1;" value="-">
                                        </div>
                                    </div>
                                    <div class="add-to-cartbest single-add">
                                        <button type="submit" class="btn custom-button">Add to cart</button>
                                    </div>
                                </form>

                                <!-- Wishlist/Email/Compare -->
                                <div class="add-to-link single-p">
                                    <a href="#" title="Wishlist"><div><i class="fa fa-heart"></i></div></a>
                                    <a href="#" title="Email"><div><i class="fa fa-envelope"></i></div></a>
                                    <a href="#" title="Compare"><div><i class="fa fa-random"></i></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Description Tabs -->
<div class="single-product-description">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-description-tab custom-tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#product-des" data-toggle="tab">Product Description</a></li>
                        <li><a href="#product-rev" data-toggle="tab">Reviews</a></li>
                        <li><a href="#product-tag" data-toggle="tab">Product Tags</a></li>
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
                                                <a href="#"><div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div></a>
                                                <a data-toggle="modal" data-target="#productModal" href="#"><div><i class="fa fa-eye"></i><span>Quick view</span></div></a>
                                                <a href="#"><div><i class="fa fa-random"></i><span>Add to compare</span></div></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="#" title="add to cart">
                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center">
                                            <div class="product-content">
                                                <a href="#"><h3 class="pro-name">{{ $product->name }}</h3></a>
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
                                                    <span class="normal-price">${{ $product->price }}</span>
                                                    @if($product->old_price)
                                                        <span class="old-price"><del>${{ $product->old_price }}</del></span>
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
                   