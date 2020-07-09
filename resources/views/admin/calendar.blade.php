@section('title')
Calendar
@endsection
@extends('layouts.main')
@section('style')
<!-- Calendar css -->
<link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Calendar</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Apps</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Calendar</li>
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
        <div class="col-12">
            <div class="row">
                 <div class="col-md-8 col-lg-9 col-xl-10">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Available Trucks</h5>
                        </div>
                        <div class="card-body">
                            <div id='external-events'>
                                <!-- <h4 class="m-b-15 font-16">Draggable Events</h4> -->
                                <div style="background-color: #f7bb4d;" class='fc-event'>Savana 1</div>
                                <div style="background-color: #f9616d;" class='fc-event'>Savana 2</div>
                                <div style="background-color: #141d46;" class='fc-event'>3 TON</div>
                                <div style="background-color: #43d187;" class='fc-event'>5 TON</div>
                                <div style="background-color: #a536c0;" class='fc-event'>Truck 1</div>
                                <div style="background-color: #7c7772;" class='fc-event'>Truck 2</div>
                                <div style="background-color: #2a6002;" class='fc-event'>Truck 3</div>
                            </div>
                            <!-- checkbox -->
                            <div class="custom-control custom-checkbox mt-3">
                                <input type="checkbox" default="true" class="custom-control-input" id="drop-remove" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                <!-- <label class="custom-control-label" for="drop-remove">Remove after drop</label> -->
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div> <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<!-- jQuery UI -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<!-- Events js -->
<script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-calender.js') }}"></script>
@endsection
