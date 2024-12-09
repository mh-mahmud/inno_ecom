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
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Career Form
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                <!--end::Separator-->
                                <!--begin::Description-->
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">Fill up the Career form</small>
                                <!--end::Description--></h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Button-->
                            <a href="{{ route('blogger-category-list') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Career List</a>
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
                                <div class="card-header bg-light bd-cyan">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bolder m-0">Create Career</h3>
                                    </div>
                                    <!--end::Card title-->
                                </div>

                                <!-- Card Body-->
                                <div class="card-body">

                                    <!-- Start Form-->

                                    <form class="g-form w-100" action="{{ route('careers-store') }}" enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label fw-bolder text-dark">Job Title</label>
                                                        <input class="form-control form-control-sm form-control-solid" 
                                                            type="text" name="job_title" value="{{ old('job_title') }}" autocomplete="off" />
                                                        @if ($errors->has('job_title'))
                                                            <span class="text-danger">{{ $errors->first('job_title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label fw-bolder text-dark">Job Description</label>
                                                        <textarea class="form-control form-control-sm form-control-solid" 
                                                                name="job_description" rows="3">{{ old('job_description') }}</textarea>
                                                        @if ($errors->has('job_description'))
                                                            <span class="text-danger">{{ $errors->first('job_description') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                               
                                                <div class="col-md-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label fw-bolder text-dark">Requirements</label>
                                                        <textarea class="form-control form-control-sm form-control-solid" 
                                                                name="requirements" rows="3">{{ old('requirements') }}</textarea>
                                                    </div>
                                                </div>

                                               
                                                <div class="col-md-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label fw-bolder text-dark">Location</label>
                                                        <input class="form-control form-control-sm form-control-solid" 
                                                            type="text" name="location" value="{{ old('location') }}" autocomplete="off" />
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label fw-bolder text-dark">Employment Type</label>
                                                        <select class="form-control form-control-sm form-control-solid" 
                                                                name="employment_type">
                                                            <option value="">Select Employment Type</option>
                                                            <option value="Full-Time" {{ old('employment_type') == 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                                                            <option value="Part-Time" {{ old('employment_type') == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                                                            <option value="Contract" {{ old('employment_type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                                                            <option value="Internship" {{ old('employment_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                                                        </select>
                                                        @if ($errors->has('employment_type'))
                                                            <span class="text-danger">{{ $errors->first('employment_type') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                               
                                                <div class="col-md-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label fw-bolder text-dark">Salary Range</label>
                                                        <input class="form-control form-control-sm form-control-solid" 
                                                            type="text" name="salary_range" value="{{ old('salary_range') }}" autocomplete="off" />
                                                    </div>
                                                </div>

                                               
                                                <div class="col-md-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label fw-bolder text-dark">Closing Date</label>
                                                        <input class="form-control form-control-sm form-control-solid flatpickr" 
                                                            type="text" id="common_dob" name="closing_date" value="{{ old('closing_date') }}" placeholder="Select Closing Date" />
                                                        @if ($errors->has('closing_date'))
                                                            <span class="text-danger">{{ $errors->first('closing_date') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                              
                                                <div class="col-md-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label fw-bolder text-dark">Contact Email</label>
                                                        <input class="form-control form-control-sm form-control-solid" 
                                                            type="email" name="contact_email" value="{{ old('contact_email') }}" autocomplete="off" />
                                                        @if ($errors->has('contact_email'))
                                                            <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                               
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                               
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
