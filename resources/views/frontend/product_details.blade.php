@extends('frontend.layouts.master')
@php
use Carbon\Carbon;
@endphp

@section('content')

<style>
    /* existing style for price */
    .pro-price.single-p .normal-price {
        font-size: 20px;
        color: #222;
    }

    /* remove default button styles */
    .add-to-cartbest.single-add .custom-cart-btn {
        all: unset;
        cursor: pointer;
    }

    /* button span styling */
    .add-to-cartbest.single-add .custom-cart-btn span {
        float: left;
        display: inline-block;
        line-height: 21px;
        padding: 8px 20px;
        border: 2px solid #ffbb00;
        margin-left: 30px;
        color: #ffbb00;
        font-size: 17px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* hover effect */
    .add-to-cartbest.single-add .custom-cart-btn:hover span {
        background-color: #ffbb00;
        color: #fff;
    }
</style>


<!-- <div class="single-banner-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="single-ban-top-content">
                    <p>{{ $product->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
                            <!-- Simple Lens Gallery Container -->
                            <div class="simpleLens-gallery-container" id="p-view">
                                <div class="simpleLens-container tab-content">
                                    @php
                                    $active = true;
                                    $imageFields = ['img_path', 'img_path_2', 'img_path_3', 'img_path_4', 'img_path_5', 'img_path_6'];
                                    $index = 1;
                                    @endphp

                                    @foreach($imageFields as $field)
                                    @if(!empty($product->$field))
                                    <div class="tab-pane fade {{ $active ? 'in active' : '' }}" id="p-view-{{ $index }}">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="{{ asset('uploads/products/' . $product->$field) }}">
                                                <img src="{{ asset('uploads/products/' . $product->$field) }}" class="simpleLens-big-image" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    @php
                                    $active = false;
                                    $index++;
                                    @endphp
                                    @endif
                                    @endforeach
                                </div>

                                <!-- Thumbnails -->
                                <div class="simpleLens-thumbnails-container text-center">
                                    <div id="single-product" class="owl-carousel custom-carousel">
                                        @php
                                        $active = true;
                                        $count = 0;
                                        $index = 1;
                                        @endphp

                                        <ul class="nav nav-tabs" role="tablist">
                                            @foreach($imageFields as $field)
                                            @if(!empty($product->$field))
                                            @if($count > 0 && $count % 3 == 0)
                                        </ul>
                                        <ul class="nav nav-tabs" role="tablist">
                                            @endif

                                            <li class="{{ $active ? 'active' : '' }}">
                                                <a href="#p-view-{{ $index }}" role="tab" data-toggle="tab">
                                                    <img src="{{ asset('uploads/products/' . $product->$field) }}" alt="product-thumb" width="100" height="100">
                                                </a>
                                            </li>

                                            @php
                                            $active = false;
                                            $count++;
                                            $index++;
                                            @endphp
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                            <!-- Error Message for Stock -->

                            <div id="stockError" class="text-danger mb-2" style="display:none;"></div>
                            <!-- Size Selection -->
                            @if(!empty($sizes))
                            <div class="skill-checklist">
                                <label for="sizeSelect"><span class="size-cho">Size:</span></label><br>
                                <select id="sizeSelect" class="form-control">
                                    <option value="">Select Size</option>
                                    @foreach($sizes as $size)
                                    <option value="{{ trim($size) }}">{{ trim($size) }}</option>
                                    @endforeach
                                </select>
                                <span id="sizeError" class="text-danger" style="display:none;">Please select a size.</span>
                            </div>
                            @endif


                            <!-- Color Options -->
                            @if(!empty($colors))
                            <div class="skill-checklist">
                                <label for="colorSelect"><span class="size-cho">Color:</span></label><br>
                                <select id="colorSelect" class="form-control">
                                    <option value="">Select Color</option>
                                    @foreach($colors as $color)
                                    <option value="{{ trim($color) }}">{{ trim($color) }}</option>
                                    @endforeach
                                </select>
                                <span id="colorError" class="text-danger" style="display:none;">Please select a color.</span>
                            </div>
                            @endif


                            <!-- Quantity & Add to Cart -->
                            <div class="">
                                <div class="quick-add-to-cart">
                                    <form method="POST" action="{{ route('add-to-cart', $product->id) }}" class="cart" id="addToCartForm">
                                        @csrf
                                        <input type="hidden" name="color" id="selectedColor">
                                        <input type="hidden" name="size" id="selectedSize">
                                        <input type="hidden" name="purchase_limit" value="{{ $product->max_purchase_limit }}">

                                        <div class="qty-button">
                                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="500" id="qty" name="qty">
                                            <div class="box-icon button-plus">
                                                <input type="button" class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = parseInt(qty_el.value); if(!isNaN(qty)) qty_el.value = qty + 1;" value="+">
                                            </div>
                                            <div class="box-icon button-minus">
                                                <input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = parseInt(qty_el.value); if(!isNaN(qty) && qty > 1) qty_el.value = qty - 1;" value="-">
                                            </div>
                                              <div id="qtyError" style="display:none; color:red; margin-top:5px;"></div>
                                        </div>
                                        <div class="add-to-cartbest single-add">
                                            <button type="submit" class="custom-cart-btn">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>

                                        <!-- <div class="add-to-cartbest single-add">
                                            <a href="{{ route('add-to-cart', $product->id) }}" title="add to cart">
                                                <div><span>Add to cart</span></div>
                                            </a>
                                        </div> -->
                                        <!-- <div class="add-to-cartbest single-add">
                                            <button type="submit">
                                                <div><span>Add to cart</span></div>
                                            </button>
                                        </div>  -->
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
                            {!! $product->how_to_order !!}
                        </div>
                        <div class="tab-pane" id="product-tag">
                            {!! $product->return_policy !!}
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
                            <a class="product-img" href="{{ route('product-details', $product->id) }}">
                                <img src="{{ asset('uploads/products/' . $product->img_path) }}" alt="{{ $product->name }}" />
                            </a>
                            <!-- <div class="add-to-link">
                                <a href="#">
                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                </a>
                                <a data-toggle="modal" data-target="#productModal" href="#">
                                    <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                </a>
                                <a href="#">
                                    <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                </a>
                            </div> -->
                            <div class="add-to-cart">
                                <a href="#" title="add to cart">
                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="product-info text-center">
                            <div class="product-content">
                                <a href="{{ route('product-details', $product->id) }}">
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

<script>
    document.getElementById('addToCartForm').addEventListener('submit', function(e) {
        let hasError = false;

        let availability = "{{ $product->stock_status }}";
        //let maxLimit = "{{ $product->max_purchase_limit }}";
        let maxLimit = parseInt(document.querySelector('input[name="purchase_limit"]').value);
        //console.log("Max Purchase Limit:", maxLimit);

        let colorSelect = document.getElementById('colorSelect');
        let sizeSelect = document.getElementById('sizeSelect');
        let qtyInput = document.getElementById('qty');
        let qty = parseInt(qtyInput.value.trim()) || 1;

        let qtyErrorDiv = document.getElementById('qtyError');
        let stockErrorDiv = document.getElementById('stockError');

        // Reset error messages
        document.getElementById('colorError')?.style.setProperty('display', 'none');
        document.getElementById('sizeError')?.style.setProperty('display', 'none');
        if (qtyErrorDiv) qtyErrorDiv.style.display = 'none';
        if (stockErrorDiv) {
            stockErrorDiv.style.display = 'none';
            stockErrorDiv.innerText = '';
        }

        // Stock check
        if (availability !== "In Stock") {
            if (stockErrorDiv) {
                stockErrorDiv.style.display = 'block';
                stockErrorDiv.innerText = "Product is not in stock.";
            }
            e.preventDefault();
            return;
        }

        // Color validation
        if (colorSelect && colorSelect.value.trim() === "") {
            document.getElementById('colorError')?.style.setProperty('display', 'inline');
            hasError = true;
        }

        // Size validation
        if (sizeSelect && sizeSelect.value.trim() === "") {
            document.getElementById('sizeError')?.style.setProperty('display', 'inline');
            hasError = true;
        }

        // Quantity limit validation
        if (qty > maxLimit) {
            //alert(maxLimit);
            if (qtyErrorDiv) {
                qtyErrorDiv.style.display = 'block';
                qtyErrorDiv.innerText = "You can only purchase up to " + maxLimit + " units.";
            }
            e.preventDefault();
            return;
        }

        if (hasError) {
            e.preventDefault();
            return;
        }

        // Set hidden fields
        document.getElementById('selectedColor').value = colorSelect ? colorSelect.value.trim() : '';
        document.getElementById('selectedSize').value = sizeSelect ? sizeSelect.value.trim() : '';
    });
</script>




@endsection
<!-- End Single Description Tab -->
<!--Start-upsell-products-wrap-->