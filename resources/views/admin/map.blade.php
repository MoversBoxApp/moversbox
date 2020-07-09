@section('title')
Map
@endsection
@extends('layouts.main')
@section('style')
<style media="screen">
#markers-map {
      height: 500px;
      width: 100%;
    }
</style>
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Map</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Map</li>
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
 <div class="row">
 <!-- Start col -->
 <div class="col-lg-12">
     <div class="card m-b-30">
         <div class="card-header">
             <h5 class="card-title">Marker</h5>
         </div>
         <div>
             <div id="markers-map" class="gmaps"></div>
         </div>
     </div>
 </div>
 <!-- End col -->
 </div>
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<!-- Google Maps JS -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAaP8ZIrOxt7RLrU4aBD3GI-maM3ITjGp4&language=en&region=CA"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaP8ZIrOxt7RLrU4aBD3GI-maM3ITjGp4&language=en&region=CA"
        async defer></script> -->
<script src="{{ asset('assets/plugins/gmaps/gmaps.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-marker-maps.js') }}"></script>
@endsection
