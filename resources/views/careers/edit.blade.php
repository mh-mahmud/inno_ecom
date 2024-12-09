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
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Career Edit Forms
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                <!--end::Separator-->
                <!--begin::Description-->
                <small class="text-muted fs-7 fw-bold my-1 ms-1">Fill up the Career Edit form</small>
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
            <a href="{{ route('careers-index') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Career List</a>
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
                        <h3 class="fw-bolder m-0">Career Edit</h3>
                    </div>
                    <!--end::Card title-->
                </div>

                <!-- Card Body-->
                <div class="card-body">

                    <!-- Start Form-->

                    <form class="g-form w-100" action="{{ route('careers-update', $career->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       
                        <div class="row">
                            <!-- Job Title -->
                            <div class="col-md-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label fw-bolder text-dark">Job Title</label>
                                    <input class="form-control form-control-sm form-control-solid"
                                        type="text" name="job_title"
                                        value="{{ old('job_title', $career->job_title) }}" autocomplete="off" />
                                    @if ($errors->has('job_title'))
                                    <span class="text-danger">{{ $errors->first('job_title') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="col-md-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label fw-bolder text-dark">Location</label>
                                    <input class="form-control form-control-sm form-control-solid"
                                        type="text" name="location"
                                        value="{{ old('location', $career->location) }}" autocomplete="off" />
                                    @if ($errors->has('location'))
                                    <span class="text-danger">{{ $errors->first('location') }}</span>
                                    @endif
                                </div>
                            </div>

                              <!-- Job Description -->
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label fw-bolder text-dark">Job Description</label>
                                    <textarea class="form-control form-control-sm form-control-solid editor"
                                        name="job_description" rows="2">{{ old('job_description', $career->job_description) }}</textarea>
                                    @if ($errors->has('job_description'))
                                    <span class="text-danger">{{ $errors->first('job_description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Requirements -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label fw-bolder text-dark">Requirements</label>
                                    <textarea class="form-control form-control-sm form-control-solid editor"
                                        name="requirements" rows="2">{{ old('requirements', $career->requirements) }}</textarea>
                                    @if ($errors->has('requirements'))
                                    <span class="text-danger">{{ $errors->first('requirements') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Employment Type -->
                            <div class="col-md-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label fw-bolder text-dark">Employment Type</label>
                                    <select class="form-control form-control-sm form-control-solid"
                                        name="employment_type">
                                        <option value="Full-Time" {{ $career->employment_type === 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                                        <option value="Part-Time" {{ $career->employment_type === 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                                        <option value="Contract" {{ $career->employment_type === 'Contract' ? 'selected' : '' }}>Contract</option>
                                        <option value="Internship" {{ $career->employment_type === 'Internship' ? 'selected' : '' }}>Internship</option>
                                    </select>
                                    @if ($errors->has('employment_type'))
                                    <span class="text-danger">{{ $errors->first('employment_type') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Salary Range -->
                            <div class="col-md-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label fw-bolder text-dark">Salary Range</label>
                                    <input class="form-control form-control-sm form-control-solid"
                                        type="text" name="salary_range"
                                        value="{{ old('salary_range', $career->salary_range) }}" autocomplete="off" />
                                    @if ($errors->has('salary_range'))
                                    <span class="text-danger">{{ $errors->first('salary_range') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Closing Date -->
                            <div class="col-md-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label fw-bolder text-dark">Closing Date</label>
                                    <input type="text" class="form-control form-control-sm form-control-solid flatpickr"
                                        name="closing_date"  id="common_dob" placeholder="Closing Date"
                                        value="{{ old('closing_date', $career->closing_date) }}" />
                                    @if ($errors->has('closing_date'))
                                    <span class="text-danger">{{ $errors->first('closing_date') }}</span>
                                    @endif
                                </div>
                            </div>

                          

                            <!-- Contact Email -->
                            <div class="col-md-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label fw-bolder text-dark">Contact Email</label>
                                    <input class="form-control form-control-sm form-control-solid"
                                        type="email" name="contact_email"
                                        value="{{ old('contact_email', $career->contact_email) }}" autocomplete="off" />
                                    @if ($errors->has('contact_email'))
                                    <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label fw-bolder text-dark">Status</label>
                                    <select class="form-control form-control-sm form-control-solid" name="status">
                                        <option value="Open" {{ $career->status === 'Open' ? 'selected' : '' }}>Open</option>
                                        <option value="Closed" {{ $career->status === 'Closed' ? 'selected' : '' }}>Closed</option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{ route('careers-edit', $career->id) }}" class="btn btn-light me-2">Reset</a>
                            <button type="submit" class="btn btn-primary">Update Changes</button>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@endsection