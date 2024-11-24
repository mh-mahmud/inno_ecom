@extends('layouts.master')

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
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Order Forms
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                <!--end::Separator-->
                <!--begin::Description-->
                <small class="text-muted fs-7 fw-bold my-1 ms-1">Fill up the Order form</small>
                <!--end::Description-->
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-1">
            <!--begin::Wrapper-->
            <div class="me-4">
                <!--begin::Menu-->

                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                    id="kt_menu_61484bf44d957">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Menu separator-->
                    <!--begin::Form-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Status:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true"
                                    data-placeholder="Select option"
                                    data-dropdown-parent="#kt_menu_61484bf44d957"
                                    data-allow-clear="true">
                                    <option></option>
                                    <option value="1">Approved</option>
                                    <option value="2">Pending</option>
                                    <option value="2">In Process</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Options-->
                                <label
                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                    <span class="form-check-label">Author</span>
                                </label>
                                <!--end::Options-->
                                <!--begin::Options-->
                                <label
                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2"
                                        checked="checked" />
                                    <span class="form-check-label">Customer</span>
                                </label>
                                <!--end::Options-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value=""
                                    name="notifications" checked="checked" />
                                <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset"
                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                data-kt-menu-dismiss="true">Reset
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary"
                                data-kt-menu-dismiss="true">Apply
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="{{ route('orders-index') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Order List</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->

<!--**********************************
                                Forms
                  ***********************************-->
<div class="container-xxl">
    <div class="row">
        <div class="col-xxl-12">
            <div class="card card-xxl-stretch mt-4">
                <!-- <div class="card card-xxl-stretch"> -->
                <div class="card-header bg-light bd-cyan">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Order Create</h3>
                    </div>
                    <!--end::Card title-->
                </div>

                <!-- Card Body-->
                <div class="card-body">

                    <!-- Start Form-->

                    <form action="{{ route('orders-store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Customer -->
                <div class="col-md-4">
                    <label class="form-label">Customer</label>
                    <select name="customer_id" class="form-control" required>
                        <option value="">Select Customer</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                {{ $customer->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('customer_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Mobile Number -->
                <div class="col-md-4">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" name="mobile_number" class="form-control" value="{{ old('mobile_number') }}">
                    @error('mobile_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Area -->
                <div class="col-md-4">
                    <label class="form-label">Area</label>
                    <select name="area" class="form-control" required>
                        <option value="Inside Dhaka" {{ old('area') == 'Inside Dhaka' ? 'selected' : '' }}>Inside Dhaka</option>
                        <option value="Outside Dhaka" {{ old('area') == 'Outside Dhaka' ? 'selected' : '' }}>Outside Dhaka</option>
                    </select>
                    @error('area')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <!-- Product -->
                <div class="col-md-4">
                    <label class="form-label">Product</label>
                    <select name="product_id" class="form-control" required>
                        <option value="">Select Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('product_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Quantity -->
                <div class="col-md-4">
                    <label class="form-label">Quantity</label>
                    <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}" required>
                    @error('quantity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Unit Price -->
                <div class="col-md-4">
                    <label class="form-label">Unit Price</label>
                    <input type="number" name="unit_price" class="form-control" value="{{ old('unit_price') }}" required>
                    @error('unit_price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <!-- Product Color -->
                <div class="col-md-4">
                    <label class="form-label">Product Color</label>
                    <input type="text" name="product_color" class="form-control" value="{{ old('product_color') }}">
                </div>

                <!-- Product Size -->
                <div class="col-md-4">
                    <label class="form-label">Product Size</label>
                    <input type="text" name="product_size" class="form-control" value="{{ old('product_size') }}">
                </div>

                <!-- Submit Button -->
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Add Order</button>
                </div>
            </div>
        </form>


                    <!-- End Form-->

                </div>
                <!--End Card body-->

                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
        </div>
    </div>
</div>
<!-- End Forms-->


<!-- </div> -->
<!--end::Content-->


@endsection