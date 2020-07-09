@section('title')
Affiliate - Leads
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Submit a Lead</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Affiliate</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leads</li>
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
        <h5 class="card-title font-18">Submit a new Lead</h5>
      </div>
      <!-- End col -->
      <!-- Start col -->
      <div class="col-lg-4">
        <div class="card m-b-30">
          <div class="card-header">
            <h5 class="card-title">Select Client</h5>
          </div>
          <div class="card-body">
            <div class="form-group">
              <select class="form-control" id="formControlSelect">
                <option>Katja Lichtenberger</option>
                <option>Josh Prowse</option>
                <option>Jocelyn Fernandez</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
          <div class="card m-b-30">
            <div class="card-header">
              <h5 class="card-title">Select Move Date</h5>
            </div>
            <div class="card-body">
              <div class="form-group">
                <select class="form-control" id="formControlSelect">
                  <option>04-26-2020</option>
                  <option>12-25-2019</option>
                  <option>11-12-2019</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
      <!-- Start row -->
      <div class="row">
        <!-- Start col -->
        <div class="col-lg-8">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Add Text</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <textarea class="form-control" name="inputTextarea" id="inputTextarea" rows="8" placeholder="New Lead"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary">Submit Lead</button>
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

@endsection
