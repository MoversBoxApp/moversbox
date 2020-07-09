@section('title')
Admin - Promotions
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
            <h4 class="page-title">Promotions</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Promotions</li>
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
            <h5 class="card-title">Set a New Discount</h5>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="form-inline">
                <input type="text" class="form-control" style="width:150px" id="inputmask-decimal" name="inputmask-decimal" placeholder="0.00">
                <select class="form-control" id="formControlSelect">
                  <option>%</option>
                  <option>$</option>
                </select>
              </div>
              <div class="card-header p-t-30">
                  <h5 class="card-title">Coupon Code</h5>
              </div>
              <div class="card-body">
                      <textarea class="form-control" style="width:350px" name="inputTextarea" id="inputTextarea" rows="1" placeholder="Add Coupon Code e.g. RRSSDISCOUNT"></textarea>
              </div>
                  <div class="card-header">
                      <h5 class="card-title">Validity Period</h5>
                  </div>
                  <div class="card-body">
                      <div class="input-group"  style="width:350px" >
                          <input type="text" id="range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
                          <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon7"><i class="feather icon-calendar"></i></span>
                          </div>
                      </div>
                      <div class="text-left p-t-30">
                          <button type="button" class="btn btn-primary">Save</button>
                      </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
                                <th data-breakpoints="xs">Amount</th>
                                <th data-breakpoints="xs">Unit</th>
                                <th data-breakpoints="xs">Coupon Code</th>
                                <th data-breakpoints="xs">Start Date</th>
                                <th data-breakpoints="xs">End Date</th>
                                <th data-breakpoints="xs">Status</th>
                                <th data-breakpoints="xs sm md">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>5</td>
                                <td>%</td>
                                <td>RRSSDISCOUNT</td>
                                <td>04-26-2020</td>
                                <td>04-26-2020</td>
                                <td><span class="badge badge-primary-inverse">Active</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>%</td>
                                <td>RRSSDISCOUNT</td>
                                <td>04-26-2020</td>
                                <td>04-26-2020</td>
                                <td><span class="badge badge-secondary-inverse">Inactive</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>%</td>
                                <td>RRSSDISCOUNT</td>
                                <td>04-26-2020</td>
                                <td>04-26-2020</td>
                                <td><span class="badge badge-primary-inverse">Active</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>%</td>
                                <td>RRSSDISCOUNT</td>
                                <td>04-26-2020</td>
                                <td>04-26-2020</td>
                                <td><span class="badge badge-secondary-inverse">Inactive</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>%</td>
                                <td>RRSSDISCOUNT</td>
                                <td>04-26-2020</td>
                                <td>04-26-2020</td>
                                <td><span class="badge badge-primary-inverse">Active</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>%</td>
                                <td>DAYDISCOUNT</td>
                                <td>04-26-2020</td>
                                <td>04-26-2020</td>
                                <td><span class="badge badge-secondary-inverse">Inactive</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>%</td>
                                <td>OTHERDISCOUNT</td>
                                <td>04-26-2020</td>
                                <td>04-26-2020</td>
                                <td><span class="badge badge-secondary-inverse">Inactive</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>%</td>
                                <td>RRSSDISCOUNT</td>
                                <td>04-26-2020</td>
                                <td>04-26-2020</td>
                                <td><span class="badge badge-secondary-inverse">Inactive</span></td>
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
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script>
<!-- Input Mask js -->
<script src="{{ asset('assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-inputmask.js') }}"></script>
<!-- Footable js -->
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/footable/js/footable.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-footable.js') }}"></script>
@endsection
