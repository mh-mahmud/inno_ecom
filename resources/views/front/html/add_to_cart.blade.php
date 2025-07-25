@extends('frontend.layouts.master')
@section('content')

<style>
   .alert .close {
    position: relative;
    top: 50%;
    transform: translateY(38%);
    float: right;
}
</style>

<div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>Product Cart</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <li class="shop-pro">Product Cart</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>

	<div class="free">
      <!-- breadcrumb-area -->
      <!-- breadcrumb-area-end -->

      <!-- cart area -->
      <section class="cart-area wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
         <div class="row">
            <div class="col-12">

            @if (session('success'))
               <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
                  {{ session('success') }}
               </div>
            @endif

            @if (session('error'))
               <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
                  {{ session('error') }}
               </div>
            @endif


                  <form action="{{ route('go-checkout') }}" method="POST">
                     @csrf
                     <div class="table-content table-responsive">
                        <table id="cartTable" class="table">
                              <thead>
                                 <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Name</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                     @if(!empty($colors))
                                    <th class="product-quantity">Color</th>
                                    @endif
                                     @if(!empty($size_list))
                                     <th class="product-quantity">Size</th>
                                    @endif
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 @php
                                    $total = [];
                                    //dd($carts);
                                 @endphp
                                 @foreach($carts as $cart)

                                 <tr>
                                    <input type="hidden" name="cart_id[]" value="{{$cart->id}}">
                                    <td class="product-thumbnail">
                                       <a href="{{ route('product-details', $cart->product_id) }}"><img src="{{url('/')}}/uploads/products/{{$cart->product_image}}" alt="">
                                       </a>
                                    </td>
                                    <td class="product-name">
                                       <a href="{{ route('product-details', $cart->product_id) }}">{{ $cart->product_name }}</a>
                                    </td>
                                    <td class="product-price">
                                       <span class="unit-price" data-price="{{$cart->unit_price}}">Tk. {{ $cart->unit_price }}</span>
                                       <input type="hidden" name="unit_price[]" value="{{$cart->unit_price}}">
                                    </td>
                                    <td class="product-quantity">
                                          <!-- <span class="cart-minus">-</span>
                                          <input class="cart-input quantity" name="quantity[]" type="text" value="{{ $cart->quantity }}"/>
                                          <span class="cart-plus">+</span> -->
                                          <input class="cart-input quantity" name="quantity[]" type="number" value="{{ $cart->quantity }}"/>
                                    </td>
                                       @if(!empty($colors))
                                     <td class="product-quantity">
                                          <!-- <span class="cart-minus">-</span>
                                          <input class="cart-input quantity" name="quantity[]" type="text" value="{{ $cart->quantity }}"/>
                                          <span class="cart-plus">+</span> -->
                                          <a href="{{ route('product-details', $cart->product_id) }}">{{ $cart->colors }}</a>
                                    </td>
                                    @endif
                                      @if(!empty($size_list))
                                    <td class="product-quantity">
                                          <!-- <span class="cart-minus">-</span>
                                          <input class="cart-input quantity" name="quantity[]" type="text" value="{{ $cart->quantity }}"/>
                                          <span class="cart-plus">+</span> -->
                                           <a href="{{ route('product-details', $cart->product_id) }}">{{ $cart->size_list }}</a>
                                    </td>
                                    @endif
                                    <td class="product-subtotal">
                                       TK. <span class="product-total">{{ $cart->total_price }}</span>
                                    </td>
                                    <td class="product-remove">
                                       <a href="{{ route('remove-from-cart', $cart->id) }}"><i class="fa fa-times"></i></a>
                                    </td>
                                 </tr>
                                 @php $total[] = $cart->total_price @endphp
                                 @endforeach
                                 @php $sub_total = array_sum($total) @endphp

                              </tbody>
                        </table>
                     </div>

                     {{--
                     <div class="row">
                        <div class="col-12">
                              <div class="coupon-all">
                                 <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                          placeholder="Coupon code" required type="text">
                                    <button id="apply-coupon" class="tp-btn tp-color-btn banner-animation" name="apply_coupon" type="submit">Apply Coupon</button>
                                    <p class="coupon-p" style="color:red;font-size: 14px;display:none;">Invalid coupon</p>
                                 </div>
                                 <div class="coupon2">
                                    <button class="tp-btn tp-color-btn banner-animation" name="update_cart" type="submit">Update cart</button>
                                 </div>
                              </div>
                        </div>
                     </div>
                     --}}
                     <div class="row">
                        <div class="col-md-12">
                        {{--<div class="cart_totals">
                           <h2>Cart total</h2>
                           <ul class="mb-20">
                              <li>Subtotal <span>Tk. <span class="cart-total">{{ $sub_total }}</span></span></li>
                              <li>Total <span>Tk. <span class="cart-total">{{ $sub_total }}</span></span></li>
                           </ul>
                           <div>
                              @if(count($carts) > 0)
                              <button style="overflow: hidden !important;" type="submit" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</button>
                              @endif
                              <a href="{{ route('all-products') }}" class="tp-btn banner-animation" style="background-color:#66BB6A;overflow: visible !important;">Continue Shopping</a>
                           </div>
                        </div>--}}

                        <div class="d-flex justify-content-end"> {{-- Flex container to push content to the right --}}
                           <div class="cart_totals" style="max-width: 400px; width: 100%;">
                              <h2 style="font-size: 24px; margin-bottom: 15px;">Cart Totals</h2>

                              <table style="width: 100%; border-collapse: collapse;">
                                 <tbody>
                                    <tr class="cart-subtotal">
                                       <th style="text-align: left; padding: 10px 0;">Subtotal</th>
                                       <td style="text-align: right;">Tk. <span class="amount cart-total">{{ $sub_total }}</span></td>
                                    </tr>
                                    <tr class="order-total">
                                       <th style="text-align: left; padding: 10px 0;">Total</th>
                                       <td style="text-align: right;"><strong>Tk. <span class="amount cart-total">{{ $sub_total }}</span></strong></td>
                                    </tr>
                                 </tbody>
                              </table>

                              <div class="mt-3 mb-3">
                                 @if(count($carts) > 0)
                                    <button type="submit" class="btn btn-success btn-lg me-3" style="background-color: #252525; border-color: #252525;">
                                       Proceed to Checkout
                                    </button>
                                 @endif
                                 <a href="{{ route('index') }}" class="btn btn-success btn-lg">
                                    Continue Shopping
                                 </a>
                              </div>

                           </div>
                        </div>
                     </div>

                     </div>
                  </form>
            </div>
         </div>
         </div>
      </section>
      <!-- cart area end-->
    </div>
    <br>

@endsection

@section('custom_js')
<script type="text/javascript">
   $('.cat-menu__category .category-menu').css('display', 'none');
   $("#apply-coupon").on("click", function(e) {
      e.preventDefault();
      let code = $("#coupon_code").val();
      if(code!="") {
         $('.coupon-p').show();
      }
      else {
         $('.coupon-p').hide();
      }
   });

   $(document).ready(function() {
     // Function to update total prices
      function updateCart() {
         let cartTotal = 0;

         // Iterate through each row in the cart
         $('#cartTable tbody tr').each(function() {
             const unitPrice = parseFloat($(this).find('.unit-price').data('price'));
             const quantity = parseInt($(this).find('.quantity').val());
             const productTotal = unitPrice * quantity;

             // Update the product total in the table
             $(this).find('.product-total').text(productTotal.toFixed(2));

             // Add to cart total
             cartTotal += productTotal;
         });

         // Update the cart total
         $('.cart-total').text(cartTotal.toFixed(2));
      }

      // Event listener for quantity changes
      $("span.cart-plus, span.cart-minus").on("click", function() {
         updateCart();
      });
   });

</script>
<script>
    $(document).ready(function () {
        $(".alert").delay(3000).slideUp(300);
    });
</script>

@endsection