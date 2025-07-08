@extends('layouts.master')


@section('content')

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                 data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Hi {{ Auth::user()->first_name }}</small>
                    <!--end::Description--></h1>
                <!--end::Title-->
            </div>

        </div>
        <!--end::Container-->
    </div>

    <div class="container-fluid">

        <!--Table Alert Message-->
        <!-- Display Success and Error Messages using SweetAlert2 -->
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success')}}',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
        @endif

        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error')}}',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
        @endif

        <!--End Table Alert Message-->
        <!--end::Toolbar-->

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">


                <!--begin::Row-->
                <div class="p-5"></div>
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-sm-4">
                        <div class="card card-flush h-md-20 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header card-header-dashboard pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <!-- <span class="fs-4 fw-semibold text-gray-501 me-1 align-self-start">$</span> -->
                                        <!--end::Currency-->

                                        <!--begin::Amount-->
                                        <span
                                            class="fs-2hx fw-bold text-gray-901 me-2 lh-1 ls-n2">12</span>
                                        <!--end::Amount-->

                                        <!--begin::Badge-->
                                        <!-- <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                            2.2%
                                        </span>   -->
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Subtitle-->
                                    <a href="#">
                                    <span class="text-gray-501 pt-1 fw-semibold fs-6">Total Product</span>
                                </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card card-flush h-md-20 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header card-header-dashboard pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <!-- <span class="fs-4 fw-semibold text-gray-501 me-1 align-self-start">$</span> -->
                                        <!--end::Currency-->

                                        <!--begin::Amount-->
                                        <span
                                            class="fs-2hx fw-bold text-gray-901 me-2 lh-1 ls-n2">22</span>
                                        <!--end::Amount-->

                                        <!--begin::Badge-->
                                        <!-- <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                            2.2%
                                        </span>  -->
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Subtitle-->
                                     <a href="#">
                                    <span class="text-gray-501 pt-1 fw-semibold fs-6">Total Category</span>
                                </a>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card card-flush h-md-20 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header card-header-dashboard pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <!-- <span class="fs-4 fw-semibold text-gray-501 me-1 align-self-start">$</span> -->
                                        <!--end::Currency-->

                                        <!--begin::Amount-->
                                        <span
                                            class="fs-2hx fw-bold text-gray-901 me-2 lh-1 ls-n2">22</span>
                                        <!--end::Amount-->

                                        <!--begin::Badge-->
                                        <!-- <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                            2.2%
                                        </span>  -->
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-501 pt-1 fw-semibold fs-6">Total Order</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                        </div>
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Row-->

          
                <!--end::Row-->

                <!--begin::Row-->
                <!-- calender design is here -->
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->

        <!-- add modal -->
    

        <script>
            document.getElementById('submit_button').addEventListener('click', function () {
                var formId = document.getElementById('form_id').value;
                if (formId) {
                    var baseUrl = '{{ url('/') }}';
                    //window.location.href = 'http://localhost/gplexCRM/public/lead/create?form_id=' + formId;
                    window.location.href = baseUrl + '/lead/create?form_id=' + formId;
                } else {
                    alert('Please select a form.');
                }
            });
        </script>
@endsection
