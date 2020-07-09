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
  .card-body{
    padding: 2px 2px 2px 2px;
  }
  .btn-room{
    width: 90px;
    height: 58px;
    padding: 0px;
  }
  .col-div{
    max-width: 50%;
  }
  .dimensions{
    min-width: 30px;
    max-width: 45px;
    text-align: center;
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
                <button type="button" class="btn btn-primary-rgba" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="feather icon-plus mr-2"></i>Booking</button>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Booking</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Start row -->
                                <div class="row">
                                    <!-- Start col -->
                                    <div class="col-lg-12">
                                        <div class="card m-b-30">
                                            <div class="card-body">
                                                <div class="row justify-content-left">
                                                    <div class="col-lg-12 col-xl-28">
                                                        <form id="vertical-form-wizard" align="left" action="#">
                                                            <div class="no">
                                                                <h3>Client Info</h3>
                                                                <section>
                                                                    <!-- <h4 class="font-22 mb-3">Client Registration</h4> -->

                                                                  <div class="card m-b-30">
                                                                    <div class="card-body">
                                                                        <label>Find an existing client or add a new one.</label>
                                                                        <div class="tab-content" id="defaultTabContent">
                                                                            <div class="tab-pane fade show active" id="new-user" role="tabpanel" aria-labelledby="new-user-tab">
                                                                                <div class="form-row">
                                                                                  <div class="form-check form-check-inline p-b-20">
                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                                    <label class="form-check-label" for="inlineRadio1">My Home</label>
                                                                                  </div>
                                                                                  <div class="form-check form-check-inline p-b-20">
                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                    <label class="form-check-label" for="inlineRadio2">A Business</label>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                      <div class="form-group col-md-6">
                                                                                          <label for="useradd">Company</label>
                                                                                          <input type="text" class="form-control" id="company">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-row">
                                                                                      <div class="form-group col-md-6">
                                                                                          <label for="username">First Name<span class="text-danger">*</span></label>
                                                                                          <input type="text" class="form-control" id="firstname">
                                                                                      </div>
                                                                                      <div class="form-group col-md-6">
                                                                                          <label for="useradd">Last Name<span class="text-danger">*</span></label>
                                                                                          <input type="text" class="form-control" id="lastname">
                                                                                      </div>
                                                                                  </div>
                                                                              <div class="form-group">
                                                                                  <label class="col-lg-3 col-form-label" for="client-phone">Phone<span class="text-danger">*</span></label>
                                                                                  <input type="text" class="form-control" id="client-phone" name="val-client-phone" placeholder="(__) ___-___-____">
                                                                                  <label class="col-lg-3 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                                                                                  <input type="text" class="form-control" id="email" name="val-email" placeholder="_@_._">
                                                                              </div>
                                                                              <div class="p-t-50">
                                                                                <button class="btn btn-primary">Add Another Contact</button>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                </section>
                                                                <h3>Move Date</h3>
                                                                <section>
                                                                    <h4 class="font-22 mb-3">Set Date</h4>

                                                                    <div class="card-body">
                                                                        <div class="input-group">
                                                                            <input type="text" id="time-format" class="form-control" placeholder="dd/mm/yyyy - hh:ii aa" aria-describedby="basic-addon5" />
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text" id="basic-addon5"><i class="feather icon-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <h3>Pick Up</h3>
                                                                <section>
                                                                    <h4 class="font-22 mb-3">Pick Up Locations</h4>
                                                                        <div class="card m-b-30">
                                                                            <div class="card-header">
                                                                            </div>
                                                                            <div class="card-body">
                                                                            <input id="address-0" class="address form-control" type="text"/>
                                                                                <div class="form-row p-t-15">
                                                                                  <div class="form-group col-md-2">
                                                                                      <label for="unit-address-0">Unit #</label>
                                                                                      <input type="text" class="form-control" id="unit-address-0">
                                                                                  </div>
                                                                                  <div class="col-md-10">
                                                                                    <label for="faddress-0">Address</label>
                                                                                    <input type="text" class="form-control faddress" disabled="true" id="faddress-0">
                                                                                    <!-- <label id="faddress-0" class="faddress p-t-15"></label> -->
                                                                                  </div>
                                                                                  <div class="col-md-10">
                                                                                    <label>Parking Instructions</label>
                                                                                    <textarea class="form-control" name="inputTextarea" id="pu-pk-instructions" rows="3" placeholder="Parking in the front..."></textarea>
                                                                                  </div>
                                                                                  <div class="col-md-10 p-t-15">
                                                                                    <label>Access Information</label>
                                                                                    <textarea class="form-control" name="inputTextarea" id="pu-access-info" rows="3" placeholder="Stairs..."></textarea>
                                                                                  </div>
                                                                                </div>

                                                                             <div class="p-t-15">
                                                                               <button class="btn btn-primary">Add Another Pick Up</button>
                                                                             </div>
                                                                         </div>
                                                                        </div>
                                                                </section>
                                                                <h3>Drop Off</h3>
                                                                <section>
                                                                    <h4 class="font-22 mb-3">Drop Off Locations</h4>
                                                                        <div class="card m-b-30">
                                                                            <div class="card-header">
                                                                            </div>
                                                                            <div class="card-body">
                                                                            <input id="address-1" class="address form-control" type="text"/>
                                                                            <div class="form-row p-t-15">
                                                                              <div class="form-group col-md-2">
                                                                                  <label for="unit-address-1">Unit #</label>
                                                                                  <input type="text" class="form-control" id="unit-address-1">
                                                                              </div>
                                                                              <div class="col-md-10">
                                                                                <label for="faddress-1">Address</label>
                                                                                <input type="text" class="form-control faddress" disabled="true" id="faddress-1">
                                                                                <!-- <label id="faddress-0" class="faddress p-t-15"></label> -->
                                                                              </div>
                                                                              <div class="col-md-10">
                                                                                <label>Parking Instructions</label>
                                                                                <textarea class="form-control" name="inputTextarea" id="do-pk-instructions" rows="3" placeholder="Parking in the front..."></textarea>
                                                                              </div>
                                                                              <div class="col-md-10 p-t-15">
                                                                                <label>Access Information</label>
                                                                                <textarea class="form-control" name="inputTextarea" id="do-access-info" rows="3" placeholder="Stairs..."></textarea>
                                                                              </div>
                                                                            </div>

                                                                             <div class="p-t-15">
                                                                               <button class="btn btn-primary">Add Another Drop Off</button>
                                                                             </div>
                                                                         </div>
                                                                        </div>
                                                                </section>
                                                                <h3>Scope</h3>
                                                                <section>
                                                                    <h4 class="font-22 mb-3">Scope of the Job</h4>
                                                                        
                                                                </section>
                                                                <h3>Logistics</h3>
                                                                <section>
                                                                    <h4 class="font-22 mb-3">Logistics</h4>

                                                                        <div class="card m-b-30">
                                                                            <div class="card-header">
                                                                                <!-- <h5 class="card-title">Default Select</h5> -->
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <h6 class="card-subtitle">Available Trucks for the Date selected</h6>
                                                                                <div class="form-group">
                                                                                    <select class="form-control" id="select-truck">
                                                                                        <option>Savana 1</option>
                                                                                        <option>Savana 2</option>
                                                                                        <option>3 TON</option>
                                                                                        <option>5 TON</option>
                                                                                        <option>External Truck 1</option>
                                                                                    </select>
                                                                                </div>
                                                                                    <h6 class="card-subtitle">Movers</h6>
                                                                                    <div class="form-group">
                                                                                        <select class="form-control" id="select-movers">
                                                                                            <option>2 Movers</option>
                                                                                            <option>3 Movers</option>
                                                                                            <option>4 Movers</option>
                                                                                            <option>5 Movers</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <h6 class="card-subtitle">Estimated Time</h6>
                                                                                    <div class="form-group">
                                                                                      <input type="text" class="form-control" id="move-estimated-time" name="inputmask-time" placeholder="hh:mm">
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                </section>
                                                                <h3>Summary</h3>
                                                                <section>
                                                                    <h4 class="font-22 mb-3">Summary</h4>
                                                                    <div class="custom-control custom-checkbox">
                                                                      <ul>
                                                                          <li><strong>Client :</strong> John Doe</li>
                                                                          <li><strong>Phone Number :</strong> 604-778-0000</li>
                                                                          <li><strong>Email :</strong> johndoe@gmail.com</li>
                                                                          <li><strong>Date :</strong> 24-03-2020</li>
                                                                          <li><strong>Time :</strong> 9:00</li>
                                                                          <li><strong>Estimated Time :</strong> 3:15</li>
                                                                          <li><strong>Cargo :</strong> 1 queen box spring mattress set with rails, 42 inch TV, wall mirror and 2 boxes (Home Depot medium sized box).</li>
                                                                          <li><strong>Pick Up Address :</strong> 123, Street, City.</li>
                                                                          <li><strong>Drop Off Address :</strong> 125, Street, City.</li>
                                                                          <li><strong>2nd Contact :</strong> Mark Doe</li>
                                                                          <li><strong>Phone Number :</strong> 604-778-0001</li>
                                                                          <li><strong>Note :</strong> His brother will be at the drop off</li>
                                                                          <li><strong>Truck :</strong> Savana 1</li>
                                                                          <li><strong>Movers :</strong> 2</li>
                                                                      </ul>
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
                    </div>
                </div>
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
                            <tr>
                                <td>04-26-2020</td>
                                <td>10:00 AM</td>
                                <td>Josh Prowse</td>
                                <td>4.0 H</td>
                                <td>Savana 2</td>
                                <td>10:05 AM</td>
                                <td>01:30 PM</td>
                                <td><span class="badge badge-primary-inverse">Booked</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04-26-2020</td>
                                <td>10:00 AM</td>
                                <td>Katja Lichtenberger</td>
                                <td>4.0 H</td>
                                <td>Savana 2</td>
                                <td>10:05 AM</td>
                                <td>01:30 PM</td>
                                <td><span class="badge badge-secondary-inverse">Finished</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04-26-2020</td>
                                <td>10:00 AM</td>
                                <td>Katja Lichtenberger</td>
                                <td>4.0 H</td>
                                <td>Savana 2</td>
                                <td>10:05 AM</td>
                                <td>01:30 PM</td>
                                <td><span class="badge badge-success-inverse">Confirmed</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04-26-2020</td>
                                <td>10:00 AM</td>
                                <td>Josh Prowse</td>
                                <td>4.0 H</td>
                                <td>Savana 2</td>
                                <td>10:05 AM</td>
                                <td>01:30 PM</td>
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
                                <td>04-26-2020</td>
                                <td>10:00 AM</td>
                                <td>Josh Prowse</td>
                                <td>4.0 H</td>
                                <td>Savana 2</td>
                                <td>10:05 AM</td>
                                <td>01:30 PM</td>
                                <td><span class="badge badge-danger-inverse">Canceled</span></td>
                                <td>
                                  <div class="button-list">
                                      <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                      <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                      <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04-26-2020</td>
                                <td>10:00 AM</td>
                                <td>Josh Prowse</td>
                                <td>4.0 H</td>
                                <td>Savana 2</td>
                                <td>10:05 AM</td>
                                <td>01:30 PM</td>
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
                                <td>04-26-2020</td>
                                <td>10:00 AM</td>
                                <td>Josh Prowse</td>
                                <td>4.0 H</td>
                                <td>Savana 2</td>
                                <td>10:05 AM</td>
                                <td>01:30 PM</td>
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
                                <td>04-26-2020</td>
                                <td>10:00 AM</td>
                                <td>Josh Prowse</td>
                                <td>4.0 H</td>
                                <td>Savana 2</td>
                                <td>10:05 AM</td>
                                <td>01:30 PM</td>
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
<!-- Input Mask js -->
<script src="{{ asset('assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<!-- Footable js -->
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/footable/js/footable.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-footable.js') }}"></script>
<!-- Form Step js -->
<script src="{{ asset('assets/plugins/jquery-step/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-wizard.js') }}"></script>
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-booking.js') }}"></script>
<!-- X-editable js -->
<script src="{{ asset('assets/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js') }}"></script>
<!-- Google Maps JS -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAaP8ZIrOxt7RLrU4aBD3GI-maM3ITjGp4&language=en&region=CA"></script>

@endsection
