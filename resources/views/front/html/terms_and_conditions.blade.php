@extends('frontend.layouts.master')
@section('content')

	<div class="free">
      <!-- breadcrumb-area -->

      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" style="background-color:#FFE0B2;">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <h2 class="tp-" style="text-align:center;">REFUND POLICY</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->
          
      <!-- area-start -->
      <section class="about-area pt-80  pb-40">
         <div class="container">
            <div class="tpabout__inner-logo p-relative">
               <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                     <div class="tpabout__inner-title-area mt-25 mb-45">
                        <h4 class="tpabout__inner-title">Refund Policy</h4>
                     </div>

                     {!! $settings->terms_and_conditions !!}

                  </div>
                  <div class="col-lg-1"></div>
               </div>

            </div>

         </div>
      </section>
      <!-- area-end -->


	</div>

@endsection
@section('custom_js')
   <script type="text/javascript">
      $(document).ready(function() {
         $('.cat-menu__category .category-menu').css('display', 'none');
      })
   </script>
@endsection