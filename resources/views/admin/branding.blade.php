@section('title')
Admin - Branding
@endsection
@extends('layouts.main')
@section('style')
<!-- X-editable css -->
<link href="{{ asset('assets/plugins/bootstrap-xeditable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Branding</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Branding</li>
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
                <h5 class="card-title">Company Name</h5>
            </div>
            <div class="card-body">
                <a href="#" id="xeditable-company" class="editable editable-click editable-empty p-r 30"></a>
            </div>
        </div>
    </div>
    <!-- End col -->
</div>
<!-- End row -->
<!-- Start row -->
  <div class="row">
<!-- Start col -->
<div class="col-lg-12">
  <div class="card m-b-30">
      <div class="card-header">
          <h5 class="card-title">Site Style</h5>
      </div>
      <div class="card-body">
        <a class="btn btn-primary" href="#" onclick="changeCSS('/assets/css/dark.css', 0);">Dark</a>
        <a class="btn btn-primary" href="#" onclick="changeCSS('/assets/css/light.css', 0);">Light</a>
      </div>
  </div>
</div>
<!-- End col -->
<!-- Start col -->
<div class="col-lg-12">
<div class="card m-b-30">
    <div class="card-header">
        <h5 class="card-title">Set a Logo</h5>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="#" onclick="setLogo('/assets/images/small_logo.svg', 0);"><img src="assets/images/small_logo.svg" height="50" width="50" class="img-fluid" alt="logo"></a>
      <a class="btn btn-primary" href="#" onclick="setLogo('/assets/images/svg-icon/truck-mid-white.png', 0);"><img src="assets/images/svg-icon/truck-mid-white.png" height="50" width="50" class="img-fluid" alt="logo"></a>
    </div>
</div>
</div>
<!-- End col -->
</div>
<!-- End row -->
        <!-- Start row -->
        <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-15">
                <div class="card-header">
                    <h5 class="card-title">Upload logo</h5>
                </div>
                <div class="card-body">
                    <form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                    </form>
                    <div class="text-center m-t-15">
                        <button type="button" class="btn btn-primary">Upload File</button>
                        <div class="text-right">
                            <button type="button" class="btn btn-primary">Save Changes</button>
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
<!-- X-editable js -->
<script src="{{ asset('assets/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/js/custom/forms.js') }}"></script>
<!-- Dropzone js -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
<!-- Switch css js -->
<script src="{{ asset('assets/js/switchercss.js') }}"></script>
@endsection
