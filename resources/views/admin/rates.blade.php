@section('title')
Admin - Rates
@endsection
@extends('layouts.main')
@section('style')
<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.css') }}" rel="stylesheet" type="text/css">
<!-- X-editable css -->
<link href="{{ asset('assets/plugins/bootstrap-xeditable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />
<style media="screen">
.datepicker > div {
  display: inherit;
}
</style>
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Rates</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rates</li>
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
        <!-- <h5 class="card-title font-18">Mover's Share</h5> -->
      </div>
      <!-- End col -->
      <!-- Start col -->
      <div class="col-lg-6">
          <div class="card m-b-30">
              <div class="card-header">
                  <h5 class="card-title">Mover's Share</h5>
              </div>
              <div class="card-body">
                  <a href="#" id="movers-share-rate" class="editable editable-click editable-empty"></a>
              </div>
                  <div class="card-header">
                      <h5 class="card-title">Validity Period</h5>
                  </div>
                  <div class="card-body">
                      <div class="input-group"  style="width:350px" >
                          <input type="text" id="movers-share-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
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
      <!-- End col -->
      <!-- Start col -->
      <div class="col-lg-6">
          <div class="card m-b-30">
              <div class="card-header">
                  <h5 class="card-title">Mover's Tax</h5>
              </div>
              <div class="card-body">
                  <a href="#" id="movers-tax-rate" class="editable editable-click editable-empty"></a>
              </div>
                  <div class="card-header">
                      <h5 class="card-title">Validity Period</h5>
                  </div>
                  <div class="card-body">
                      <div class="input-group"  style="width:350px" >
                          <input type="text" id="movers-tax-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
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
      <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-7">

        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
        <!-- Start row -->
        <div class="row">
          <!-- Start col -->
          <div class="col-lg-12">
            <!-- <h5 class="card-title font-18">Mover's Share</h5> -->
          </div>
          <!-- End col -->
          <!-- Start col -->
          <div class="col-lg-6">
              <div class="card m-b-30">
                  <div class="card-header">
                      <h5 class="card-title">Alliance's Share</h5>
                  </div>
                  <div class="card-body">
                      <a href="#" id="alliance-share-rate" class="editable editable-click editable-empty"></a>
                  </div>
                      <div class="card-header">
                          <h5 class="card-title">Validity Period</h5>
                      </div>
                      <div class="card-body">
                          <div class="input-group"  style="width:350px" >
                              <input type="text" id="alliance-share-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
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
          <!-- End col -->
          <!-- Start col -->
          <div class="col-lg-6">
              <div class="card m-b-30">
                  <div class="card-header">
                      <h5 class="card-title">Alliance's Tax</h5>
                  </div>
                  <div class="card-body">
                      <a href="#" id="alliance-tax-rate" class="editable editable-click editable-empty"></a>
                  </div>
                      <div class="card-header">
                          <h5 class="card-title">Validity Period</h5>
                      </div>
                      <div class="card-body">
                          <div class="input-group"  style="width:350px" >
                              <input type="text" id="alliance-tax-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
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
          <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-7">

            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
            <!-- Start row -->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-12">
                <!-- <h5 class="card-title font-18">Mover's Share</h5> -->
              </div>
              <!-- End col -->
              <!-- Start col -->
              <div class="col-lg-6">
                  <div class="card m-b-30">
                      <div class="card-header">
                          <h5 class="card-title">Small Moves Share</h5>
                      </div>
                      <div class="card-body">
                          <a href="#" id="smallmoves-share-rate" class="editable editable-click editable-empty"></a>
                      </div>
                          <div class="card-header">
                              <h5 class="card-title">Validity Period</h5>
                          </div>
                          <div class="card-body">
                              <div class="input-group"  style="width:350px" >
                                  <input type="text" id="smallmoves-share-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
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
              <!-- End col -->
              <!-- Start col -->
              <div class="col-lg-6">
                  <div class="card m-b-30">
                      <div class="card-header">
                          <h5 class="card-title">Small Moves Tax</h5>
                      </div>
                      <div class="card-body">
                          <a href="#" id="smallmoves-tax-rate" class="editable editable-click editable-empty"></a>
                      </div>
                          <div class="card-header">
                              <h5 class="card-title">Validity Period</h5>
                          </div>
                          <div class="card-body">
                              <div class="input-group"  style="width:350px" >
                                  <input type="text" id="smallmoves-tax-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
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
              <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-7">

                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
                <!-- Start row -->
                <div class="row">
                  <!-- Start col -->
                  <div class="col-lg-12">
                    <!-- <h5 class="card-title font-18">Mover's Share</h5> -->
                  </div>
                  <!-- End col -->
                  <!-- Start col -->
                  <div class="col-lg-6">
                      <div class="card m-b-30">
                          <div class="card-header">
                              <h5 class="card-title">GST</h5>
                          </div>
                          <div class="card-body">
                            <a href="#" id="gst-rate" class="editable editable-click editable-empty"></a>
                          </div>
                              <div class="card-header">
                                  <h5 class="card-title">Validity Period</h5>
                              </div>
                              <div class="card-body">
                                  <div class="input-group"  style="width:350px" >
                                      <input type="text" id="gst-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
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
                  <!-- End col -->
                  <!-- Start col -->
                  <div class="col-lg-6">
                      <div class="card m-b-30">
                          <div class="card-header">
                              <h5 class="card-title">Move Rate</h5>
                          </div>
                          <div class="card-body">
                            <a href="#" id="move-rate" class="editable editable-click editable-empty"></a>
                          </div>
                              <div class="card-header">
                                  <h5 class="card-title">Validity Period</h5>
                              </div>
                              <div class="card-body">
                                  <div class="input-group"  style="width:350px" >
                                      <input type="text" id="move-rate-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
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
                  <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-7">

                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
                    <!-- Start row -->
                    <div class="row">
                      <!-- Start col -->
                      <div class="col-lg-12">
                        <!-- <h5 class="card-title font-18">Mover's Share</h5> -->
                      </div>
                      <!-- End col -->
                      <!-- Start col -->
                      <div class="col-lg-6">
                          <div class="card m-b-30">
                              <div class="card-header">
                                  <h5 class="card-title">One Man Rate</h5>
                              </div>
                              <div class="card-body">
                                <a href="#" id="one-man-rate" class="editable editable-click editable-empty"></a>
                              </div>
                                  <div class="card-header">
                                      <h5 class="card-title">Validity Period</h5>
                                  </div>
                                  <div class="card-body">
                                      <div class="input-group"  style="width:350px" >
                                          <input type="text" id="one-man-rate-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
                                          <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon7"><i class="feather icon-calendar"></i></span>
                                          </div>
                                      </div>
                                      <div class="text-left p-t-30">
                                          <button type="button" class="btn btn-primary">Save</button>
                                      </div>
                                  </div>
                      </div>
                      <!-- End col -->
                    </div>
                    <!-- End row -->
                    <!-- Start col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Extra Man Rate</h5>
                            </div>
                            <div class="card-body">
                              <a href="#" id="extra-man-rate" class="editable editable-click editable-empty"></a>
                            </div>
                                <div class="card-header">
                                    <h5 class="card-title">Validity Period</h5>
                                </div>
                                <div class="card-body">
                                    <div class="input-group"  style="width:350px" >
                                        <input type="text" id="extra-man-rate-range-date" class="datepicker-here form-control"placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon7"><i class="feather icon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="text-left p-t-30">
                                        <button type="button" class="btn btn-primary">Save</button>
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
<!-- <script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script> -->
<!-- X-editable js -->
<script src="{{ asset('assets/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/js/custom/rates.js') }}"></script>
<!-- Input Mask js -->
<script src="{{ asset('assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-inputmask.js') }}"></script>
@endsection
