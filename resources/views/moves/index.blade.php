@section('title')
Admin - Moves
@endsection
@extends('layouts.main')
@section('style')
<!-- X-editable css -->
<link href="{{ asset('assets/plugins/bootstrap-xeditable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />
<!-- Footabel css -->
<link href="{{ asset('assets/plugins/footable/css/footable.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Animate css -->
<link href="{{ asset('assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
<style>
.pac-container {
z-index: 1151 !important;
}
.pac-container > div {
  display: inherit;
}
.datepicker{z-index:1151 !important;
}
.datepicker > div {
  display: inherit;
}
</style>
<!-- Select2 css -->
<link href="{{ asset('assets/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" />
<style media="screen">
.modal-content {
    width: 1000px !important;
    left: -150px !important;
    overflow-y: auto;
}
  .card-body{
    padding: 2px 2px 2px 2px;
  }
  .btn-room{
    width: 85px;
    height: 40px;
    padding: 0px;
    line-height: 1.0 !important;
  }
  .dimensions{
    min-width: 30px;
    max-width: 45px;
    text-align: center;
  }
  .col-div{
    padding-left: 5px;
    padding-right: 1px;

  }
  .t-items{
    width: auto !important;
    padding: 0 !important;
    font-size: 12px !important;
  }
</style>
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Moves</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Moves</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- Button trigger modal -->
                <!-- <button type="button" onclick="window.open('{{url('/admin-booking')}}','_self');" class="btn btn-primary-rgba" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="feather icon-plus mr-2"></i>Booking</button> -->
                <a style="margin: 19px;" href="{{ route('moves.create')}}" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Booking</a>
                <!-- Modal -->
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
                    <!-- <h5 class="card-title">Filtering</h5> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table foo-filtering-table" data-filtering="true">
                            <thead>
                            <tr>
                                <th data-breakpoints="">Date</th>
                                <th data-breakpoints="">Time</th>
                                <th data-breakpoints="">Client</th>
                                <th data-breakpoints="xs">Estimated Hours</th>
                                <th data-breakpoints="">Truck</th>
                                <th data-breakpoints="">Start Time</th>
                                <th data-breakpoints="xs">End Time</th>
                                <th data-breakpoints="">Status</th>
                                <th data-breakpoints="all" data-title="Actions">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach ($jobs as $job)
                              <tr>
                                  <td>{{ date('d-m-Y', strtotime($job->bookingdate)) }}</td>
                                  <td>{{ date('H-i A', strtotime($job->bookingdate)) }}</td>
                                  @foreach($job->users as $user)
                                    @if($user->profile_id === '7')
                                      <td>{{ $user->name }} {{ $user->lastname }}</td>
                                    @endif
                                  @endforeach
                                  <td>{{ $job->estimatedTime }}</td>
                                  <td>{{ $job->truck->name }}</td>
                                  <td>{{ date('H-i A', strtotime($job->start)) }}</td>
                                  <td>{{ date('H-i A', strtotime($job->end)) }}</td>
                                    <td><span
                                      @if($job->job_status->id === 1)
                                        class="badge badge-primary-inverse"
                                      @elseif($job->job_status->id === 2)
                                        class="badge badge-secondary-inverse"
                                      @elseif($job->job_status->id === 3)
                                        class="badge badge-success-inverse"
                                      @elseif($job->job_status->id === 4)
                                        class="badge badge-info-inverse"
                                      @elseif($job->job_status->id === 5)
                                        class="badge badge-danger-inverse"
                                      @endif
                                      >{{ $job->job_status->name }}</span></td>
                                  <td>
                                    <div class="button-list">
                                        <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                        <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                    </div>
                                  </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
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
<!-- Input Mask js -->
<script src="{{ asset('assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<!-- Footable js -->
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/footable/js/footable.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-footable.js') }}"></script>
<!-- X-editable js -->
<script src="{{ asset('assets/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js') }}"></script>
<!-- Google Maps JS -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key={{ Config::get('services.google.key') }}&language=en&region=CA"></script>
@endsection
