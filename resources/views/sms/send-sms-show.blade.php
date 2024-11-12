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
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">SMS Details
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                <!--end::Separator-->
                                <!--begin::Description-->
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">Show SMS Details</small>
                                <!--end::Description--></h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">

                            <a href="{{ route('send-sms-list') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">SMS List</a>
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
                                        <h2>SMS Details</h2>
                                    </div>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body p-1">
                                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Mobile NO</span>
                                        <span>{{ $sms->sms_to }}</span>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Lead</span>
                                        <span>{{ $sms->first_name }}  {{ $sms->last_name }}</span>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Send By</span>
                                        <span>{{ $sms->send_by_fname }}  {{ $sms->send_by_lname }}</span>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Time</span>
                                        <span>{{ Carbon::parse($sms->log_time)->format('d-m-Y h:i A') }}</span>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                                        <span
                                            class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px flex-shrink-0">SMS Content</span>
                                        <span>{{ $sms->sms_text }}</span>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 bg-light p-3 mb-1">
                                        <span class="fs-6 fw-bolder mb-1 text-gray-900 text-hover-primary w-lg-100px w-xxl-150px">Status</span>
                                        @if ($sms->send_status == 1)
                                            <span class="badge badge-light-success">Success</span>
                                        @elseif ($value->status == 0)
                                            <span class="badge badge-light-danger">Fail</span>
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
