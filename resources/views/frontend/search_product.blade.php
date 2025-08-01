@extends('frontend.layouts.master')

@php use Carbon\Carbon; @endphp

@section('content')

<!-- Breadcrumb / Category Name -->
<div class="signle-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-head-menu">
                    <ul>
                        <li>
                            <i class="fa fa-home"></i>
                            <a class="shop-home" href="{{ route('index') }}">
                                <span>Home</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="shop-pro">
                            @if($category)
                            {{ $category->category_name }}
                            @elseif(!empty($searchTerm))
                            Search Results for: "{{ $searchTerm }}"
                            @else
                            Search Result
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Grid Area -->
<div class="shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-9 col-sm-8 col-xs-12">
                <div class="shop-product-view">
                    <div class="product-tab-area">
                        <div class="tab-content">
                            <div id="shop-product" class="tab-pane active">
                                <div class="row">
                                    @if($products->count())
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
                                                    <img src="{{ asset('uploads/products/' . $product->img_path) }}" alt="{{ $product->name }}" />
                                                </a>
                                                <div class="add-to-cart">
                                                    <a href="{{ route('product-details', $product->id) }}" title="Order Now">
                                                        <div><i class="fa fa-shopping-cart"></i><span>Order Now</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info text-center">
                                                <div class="product-content">
                                                    <a href="{{ route('product-details', $product->id) }}">
                                                        <h3 class="pro-name">{{ $product->name }}</h3>
                                                    </a>
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
                        </div>

                        <!-- Pagination -->
                        <div class="tab-bar tab-bar-bottom">
                            <div class="toolbar">
                                <div class="pages">
                                    <strong>Page:</strong>
                                    <ol>
                                        {{-- Previous --}}
                                        @if ($products->onFirstPage())
                                        <li class="disabled"><span><i class="fa fa-arrow-left"></i></span></li>
                                        @else
                                        <li><a href="{{ $products->previousPageUrl() }}"><i class="fa fa-arrow-left"></i></a></li>
                                        @endif

                                        {{-- Page Numbers --}}
                                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                                            @if ($i == $products->currentPage())
                                            <li class="current">{{ $i }}</li>
                                            @else
                                            <li><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                                            @endif
                                            @endfor

                                            {{-- Next --}}
                                            @if ($products->hasMorePages())
                                            <li><a href="{{ $products->nextPageUrl() }}"><i class="fa fa-arrow-right"></i></a></li>
                                            @else
                                            <li class="disabled"><span><i class="fa fa-arrow-right"></i></span></li>
                                            @endif
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- End Pagination -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection