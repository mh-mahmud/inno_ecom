@extends('frontend.layouts.master')
@php
    use Carbon\Carbon;
@endphp

@section('content')


 <!-- <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>Shop grid</p>
                            </div>
                        </div>
                    </div>
                </div>
    </div> -->
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="{{ route('index') }}"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">{{ $category->category_name }}</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!--start-shop-product-area-->
            <div class="shop-product-area">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-lg-12 col-md-9 col-sm-8 col-xs-12">
                            <!-- Shop-Product-View-start -->
                            <div class="shop-product-view">
                                <!-- Shop Product Tab Area -->
                                <div class="product-tab-area">
                                   
                                    <!-- End-Tab-Bar -->
                                    <!-- Tab-Content -->
                                    <div class="tab-content">
                                        <!-- Shop Product-->
                                        <div id="shop-product" class="tab-pane active">
                                            <div class="row">
                                                @if($products->count() > 0)
                                                    @foreach($products as $product)
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                            <div class="single-product shop-mar-bottom">
                                                                @if($product->discount_price)
                                                                    <div class="sale">Sale</div>
                                                                @endif
                                                                <div class="sale-border"></div>
                                                                <div class="new">new</div>
                                                                <div class="product-img-wrap">
                                                                    <a class="product-img" href="{{ route('product-details', $product->id) }}">
                                                                        <img src="{{ asset('uploads/products/' . $product->img_path) }}" alt="product-image" />
                                                                    </a>
                                                                    <!-- <div class="add-to-link">
                                                                        <a href="#"><div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div></a>
                                                                        <a data-toggle="modal" data-target="#productModal" href="#"><div><i class="fa fa-eye"></i><span>Quick view</span></div></a>
                                                                        <a href="#"><div><i class="fa fa-random"></i><span>Add to compare</span></div></a>
                                                                    </div> -->
                                                                    <div class="add-to-cart">
                                                                    <!-- <a href="{{ route('add-to-cart', $product->id) }}" title="add to cart"> -->
                                                                        <a href="{{ route('product-details', $product->id) }}" title="add to cart">
                                                                        <!-- <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div> -->
                                                                        <div><i class="fa fa-shopping-cart"></i><span>Order Now</span></div>
                                                                    </a>
                                                                </div>
                                                                </div>
                                                                <div class="product-info text-center">
                                                                    <div class="product-content">
                                                                        <a href="{{ route('product-details', $product->id) }}"><h3 class="pro-name">{{ $product->name }}</h3></a>
                                                                        <!-- <div class="pro-rating">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
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
                                                @else
                                                    <div class="col-12 text-center">
                                                        <h3 style="padding: 40px 0;">Product not available</h3>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <!-- End-Shop-Product-->
                                        <!-- Shop List -->
                                    
                                        <!-- End Shop List -->
                                    </div>
                                    <!-- End Tab Content -->
                                    <!-- Tab Bar -->
                                    <div class="tab-bar tab-bar-bottom">
                                        <!-- <div class="tab-bar-inner">
                                            <ul role="tablist" class="nav nav-tabs">
                                                <li class="active"><a title="Grid" data-toggle="tab" href="#shop"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                                <li><a title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                            </ul>
                                        </div> -->
                                        <div class="toolbar">
                                            <div class="sorter">
                                                <div class="sort-by">
                                                    <label class="sort-none">&nbsp;</label>
                                                    <!-- <select>
                                                        <option value="position">Position</option>
                                                        <option value="name">Name</option>
                                                        <option value="price">Price</option>
                                                    </select> -->
                                                    <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                                </div>
                                            </div>
                                            <div class="pages">
                                            <strong>Page:</strong>
                                            <ol>
                                                {{-- Prev Arrow --}}
                                                @if ($products->onFirstPage())
                                                    <li class="disabled"><span><i class="fa fa-arrow-left"></i></span></li>
                                                @else
                                                    <li><a href="{{ $products->previousPageUrl() }}" title="Prev"><i class="fa fa-arrow-left"></i></a></li>
                                                @endif

                                                {{-- Page numbers --}}
                                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                                    @if ($i == $products->currentPage())
                                                        <li class="current">{{ $i }}</li>
                                                    @else
                                                        <li><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                                                    @endif
                                                @endfor

                                                {{-- Next Arrow --}}
                                                @if ($products->hasMorePages())
                                                    <li><a href="{{ $products->nextPageUrl() }}" title="Next"><i class="fa fa-arrow-right"></i></a></li>
                                                @else
                                                    <li class="disabled"><span><i class="fa fa-arrow-right"></i></span></li>
                                                @endif
                                            </ol>
                                        </div>

                                        </div>
                                    </div>

                                    <!-- End Tab Bar -->
                                </div>
                                <!-- End Shop Product Tab Area -->
                            </div>
                            <!-- End Shop Product View -->
                        </div>
                    </div>
                </div>
            </div>

@endsection
