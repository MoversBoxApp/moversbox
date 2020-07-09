@section('title')
Booking Wizard
@endsection
@extends('layouts.main')
@section('style')
<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Booking</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Sales Agent</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Booking a Move</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-left">
                        <div class="col-lg-10 col-xl-8">
                            <form id="vertical-form-wizard" action="#">
                                <div>
                                    <h3>Start</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Client Registration</h4>
                                        <div class="form-group">
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadioInline1">New</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadioInline2">Old</label>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="verticalusername">First Name</label>
                                            <input type="text" class="form-control" id="verticalusername">
                                                <label for="verticalusername">Lastname</label>
                                                <input type="text" class="form-control" id="verticalusername">
                                                <label for="verticalusername">Phone</label>
                                                <input type="text" class="form-control" id="verticalusername">
                                                <label for="verticalusername">Email</label>
                                                <input type="text" class="form-control" id="verticalusername">
                                        </div>
                                    </section>
                                    <h3>Move Date</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Set Dates</h4>
                                        <div class="form-group">
                                            <label for="verticalfirstname">Move Date</label>
                                                <div class="input-group">
                                                <input type="text" id="default-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon2"/>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2"><i class="feather icon-calendar"></i></span>
                                                  </div>
                                                </div>
                                        </div>
                                    </section>
                                    <h3>Locations</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Set Locations</h4>
                                        <ul>
                                            <li><strong>First Name :</strong> John</li>
                                            <li><strong>Last Name :</strong> Doe</li>
                                            <li><strong>Email ID :</strong> johndoe@gmail.com</li>
                                            <li><strong>Address :</strong> 123, Street, City.</li>
                                        </ul>
                                    </section>
                                    <h3>Cargo</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Set Cargo</h4>
                                        <ul>
                                            <li><strong>First Name :</strong> John</li>
                                            <li><strong>Last Name :</strong> Doe</li>
                                            <li><strong>Email ID :</strong> johndoe@gmail.com</li>
                                            <li><strong>Address :</strong> 123, Street, City.</li>
                                        </ul>
                                    </section>
                                    <h3>Contacts</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Set Contacts</h4>
                                        <ul>
                                            <li><strong>First Name :</strong> John</li>
                                            <li><strong>Last Name :</strong> Doe</li>
                                            <li><strong>Email ID :</strong> johndoe@gmail.com</li>
                                            <li><strong>Address :</strong> 123, Street, City.</li>
                                        </ul>
                                    </section>
                                    <h3>Logistic</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Logistic</h4>
                                        <ul>
                                            <li><strong>First Name :</strong> John</li>
                                            <li><strong>Last Name :</strong> Doe</li>
                                            <li><strong>Email ID :</strong> johndoe@gmail.com</li>
                                            <li><strong>Address :</strong> 123, Street, City.</li>
                                        </ul>
                                    </section>
                                    <h3>Finish</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Finish</h4>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="verticalacceptTerms">
                                          <label class="custom-control-label" for="verticalacceptTerms">I Agree with the Terms and Conditions.</label>
                                        </div>
                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<!-- Form Step js -->
<script src="{{ asset('assets/plugins/jquery-step/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-wizard.js') }}"></script>
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script>
@endsection
