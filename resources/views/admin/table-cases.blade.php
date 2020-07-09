@section('title')
Cases
@endsection
@extends('layouts.main')
@section('style')
<!-- Footabel css -->
<link href="{{ asset('assets/plugins/footable/css/footable.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Cases</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cases</li>
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
                    <!-- <h5 class="card-title">Filtering</h5> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table foo-filtering-table" data-filtering="true">
                            <thead>
                            <tr>
                                <th data-breakpoints="xs">Client</th>
                                <th data-breakpoints="xs">Phone</th>
                                <th data-breakpoints="xs">Email</th>
                                <th data-breakpoints="xs">Move Date</th>
                                <th data-breakpoints="xs">Truck</th>
                                <th data-breakpoints="xs">Total</th>
                                <th data-breakpoints="xs sm">Booked by</th>
                                <th data-breakpoints="xs sm">Status</th>
                                <th data-breakpoints="xs sm md">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Josh Prowse</td>
                                <td>778-542-0987</td>
                                <td>email@email.com</td>
                                <td>04-26-2020</td>
                                <td>Savana 2</td>
                                <td>349.27</td>
                                <td>Brenda</td>
                                <td><span class="badge badge-primary-inverse">New</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Katja Lichtenberger</td>
                                <td>778-542-0987</td>
                                <td>email@email.com</td>
                                <td>04-26-2020</td>
                                <td>Savana 2</td>
                                <td>349.27</td>
                                <td>Brenda</td>
                                <td><span class="badge badge-secondary-inverse">Close</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Josh Prowse</td>
                                <td>778-542-0987</td>
                                <td>email@email.com</td>
                                <td>04-26-2020</td>
                                <td>Savana 2</td>
                                <td>349.27</td>
                                <td>Brenda</td>
                                <td><span class="badge badge-info-inverse">In Progress</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Josh Prowse</td>
                                <td>778-542-0987</td>
                                <td>email@email.com</td>
                                <td>04-26-2020</td>
                                <td>Savana 2</td>
                                <td>349.27</td>
                                <td>Brenda</td>
                                <td><span class="badge badge-info-inverse">In Progress</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Josh Prowse</td>
                                <td>778-542-0987</td>
                                <td>email@email.com</td>
                                <td>04-26-2020</td>
                                <td>Savana 2</td>
                                <td>349.27</td>
                                <td>Brenda</td>
                                <td><span class="badge badge-secondary-inverse">Close</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Josh Prowse</td>
                                <td>778-542-0987</td>
                                <td>email@email.com</td>
                                <td>04-26-2020</td>
                                <td>Savana 2</td>
                                <td>349.27</td>
                                <td>Brenda</td>
                                <td><span class="badge badge-info-inverse">In Progress</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Josh Prowse</td>
                                <td>778-542-0987</td>
                                <td>email@email.com</td>
                                <td>04-26-2020</td>
                                <td>Savana 2</td>
                                <td>349.27</td>
                                <td>Brenda</td>
                                <td><span class="badge badge-info-inverse">In Progress</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Josh Prowse</td>
                                <td>778-542-0987</td>
                                <td>email@email.com</td>
                                <td>04-26-2020</td>
                                <td>Savana 2</td>
                                <td>349.27</td>
                                <td>Brenda</td>
                                <td><span class="badge badge-info-inverse">In Progress</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>

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
<!-- Footable js -->
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/footable/js/footable.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-footable.js') }}"></script>
@endsection
