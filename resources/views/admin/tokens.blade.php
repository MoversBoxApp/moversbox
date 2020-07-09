@section('title')
Admin - Tokens
@endsection
@extends('layouts.main')
@section('style')
<!-- X-editable css -->
<link href="{{ asset('assets/plugins/bootstrap-xeditable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Tokens</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tokens</li>
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
        <h5 class="card-title font-18">Tokenization</h5>
      </div>
      <!-- End col -->
      <!-- Start col -->
      <div class="col-lg-12">
          <div class="card m-b-30">
              <div class="card-header">
                  <h5 class="card-title">Select Token Provider</h5>
              </div>
              <div class="card-body">
                  <a href="#" id="xeditable-token-provider" class="editable editable-click" style="color: #777777;">not selected</a>
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
              <h5 class="card-title">Add Token</h5>
          </div>
          <div class="card-body">
              <a href="#" id="xeditable-token" class="editable editable-click editable-empty"></a>
          </div>
      </div>
  </div>
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
@endsection
