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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Brand Details
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Show Brand Details</small>
                    <!--end::Description--></h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <a href="{{ route('brand-list') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Brand List</a>
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
                <!-- <div class="card mb-5"> -->
                <div class="card mt-4">
                    <div class="card-header bg-light bd-cyan">
                        <div class="card-title">
                            <h2>Brand Details</h2>
                        </div>
                    </div>
                    <!--begin::Body-->
                    <div class="card-body p-1">

                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Image</span>
                            <div class="me-7 mb-4">
                                <div class="position-relative">
                                    @if($brand->brand_image != '')
                                        <img style="width: 100%;" src="{{ asset('uploads/brands/' . $brand->brand_image) }}" alt="{{ $brand->brand_name }}">
                                    @else
                                        <img alt="Logo" src="{{ asset('uploads/noimage.jpg') }}"/>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Brand Name</span>
                            <span>{{ $brand->brand_name }}</span>
                        </div>

                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Description</span>
                            <span>{{ $brand->brand_description }}</span>
                        </div>

                        <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                            <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Status</span>
                            @if ($brand->status === 1)
                                <span>Active</span>
                            @elseif ($brand->status === 0)
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
