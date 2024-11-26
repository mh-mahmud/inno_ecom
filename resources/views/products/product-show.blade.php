@extends('layouts.master')
@php
    use Carbon\Carbon;
@endphp

@section('content')

            <!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> -->

            						     <!--begin::Toolbar-->
	  <div class="toolbar" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                             data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                             class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Product Details
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                <!--end::Separator-->
                                <!--begin::Description-->
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">Show Product Details</small>
                                <!--end::Description--></h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">

                            <a href="{{ route('product-list') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Product List</a>
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->

       <!--**********************************
                                Tables View
                  ***********************************-->
                  <div class="container-fluid">
    <div class="row">
        <div class="col-xxl-8 mx-auto">
            <div class="card mt-4">
                <div class="card-header bg-light bd-cyan">
                    <div class="card-title">
                        <h2>Product Details</h2>
                    </div>
                </div>
                <!--begin::Body-->
                <div class="card-body p-1">

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Image</span>
                        <div class="me-7 mb-4">
                            <div class="position-relative">
                                @if($product->img_path)
                                    <img style="width: 60%;" src="{{ asset('uploads/products/' . $product->img_path) }}" alt="{{ $product->name }}">
                                @else
                                    <img alt="Logo" src="{{ asset('uploads/noimage.jpg') }}"/>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Product Name</span>
                        <span>{{ $product->name }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Code</span>
                        <span>{{ $product->product_code }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Product Type</span>
                       {{ $product->product_type }}
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Product Cost</span>
                        <span>{{ $product->product_cost }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Product Price</span>
                        <span>{{ $product->product_value }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Club Points</span>
                        <span>{{ $product->club_point }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px flex-shrink-0">Description</span>
                        <span>{!! $product->description !!}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px flex-shrink-0">Product Specification</span>
                        <span>{!! $product->product_specification !!}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px flex-shrink-0">Key Features</span>
                        <span>{!! $product->key_features !!}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Stock Status</span>
                        <span>{{ $product->stock_status }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Stock Quantity</span>
                        <span>{{ $product->stock_quantity }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Max Purchase Limit</span>
                        <span>{{ $product->max_purchase_limit }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-250px w-xxl-150px">Status</span>
                        @if ($product->status === 1)
                            <span>Active</span>
                        @elseif ($product->status === 0)
                            <span>Inactive</span>
                        @endif
                    </div>








                </div>


            </div>

        </div>
    </div>
</div>


                <!-- End Tables View-->


            <!-- </div> -->
            <!--end::Content-->

@endsection
