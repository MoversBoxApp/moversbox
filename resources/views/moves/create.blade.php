@section('title')
Admin - Booking
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
<!-- Select2 css -->
<link href="{{ asset('assets/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" />
<!-- jquery UI css -->
<link href="{{ asset('assets/js/jqueryui/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
<style>
/* .pac-container {
z-index: 1151 !important;
}
.pac-container > div {
  display: inherit;
}
.datepicker{z-index:1151 !important;
} */
.company{
  display: none;
}
.extra-location{
  display: none;
}
.datepicker > div {
  display: inherit;
}
.btn-contact-2{
  color: #FFFFFF !important;
}
.modal-content {
    width: 1000px !important;
    left: -150px !important;
}
  .card-body{
    padding: 2px 2px 2px 2px;
  }
  .btn-room{
    max-width: 100px;
    height: 40px;
    padding: 2px;
    margin-bottom: 2px;
    margin-right: -2px;
    line-height: 1.0 !important;
  }
  .dimensions{
    min-width: 36px;
    max-width: 40px;
    font-size: x-small;
    text-align: left;
    margin-right: 1px !important;
  }
  .col-div{
    /* width: 100% !important; */
    padding-left: 5px;
    padding-right: 1px;

  }
  .t-items{
    width: auto !important;
    padding: 0 !important;
    font-size: 14px !important;
  }
  .wizard > .steps .number {
    font-size: 15px !important;
    width: 30px !important;
    height: 30px !important;
  }
  .wizard > .steps a {
    font-size: 12px;
  }
  .wizard > .steps .form-wizard-line {
    margin-left: 7% !important;
    margin-right: 7% !important;
    top: 20px;
  }
  .test{
    width: 90%;
    margin: auto;
    padding: 15px 15px 15px 15px !important;
    border-color: #8A98AC;
    background-color: #e9ecf0;
  }
  .card-subtitle{
    margin-top: 25px !important;
  }
  @media (max-width: 750px){
    .test{
      width: 100%;
    }
    .btn-room{
      /* min-width: 63px; */
      font-size: smaller;
    }
  }
  /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
/* input[type=number] {
  -moz-appearance: textfield;
} */
</style>
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Booking</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Moves</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary-rgba" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="feather icon-plus mr-2"></i>Booking</button>
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
                </div>
                <div class="card-body">
                  <div class="card-body">
    <div class="row justify-content-left">
        <div class="col-lg-9 col-xl-28">
              <form id="basic-form-wizard" method="POST" enctype="multipart/form-data" action="{{ route('moves.store') }}">
                @csrf
                <div class="no">
                    <h3>Client Info</h3>
                    <section>
                      <div class="card m-b-30">
                        <div class="card-body">
                            <label>Find an existing client or add a new one.</label>
                            <div class="tab-content" id="defaultTabContent">
                                <div class="test border rounded tab-pane fade show active" id="new-user" role="tabpanel" aria-labelledby="new-user-tab">
                                    <div class="form-row">
                                      <div class="form-check form-check-inline p-b-20">
                                        <input checked onchange="hideCompany()" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">My Home</label>
                                      </div>
                                      <div class="form-check form-check-inline p-b-20">
                                        <input onchange="showCompany()" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">A Business</label>
                                      </div>
                                      <div class="form-check form-check-inline p-b-20 p-l-20">
                                        <a href="{{ route('users.create')}}">New Client?</a>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                          <div id="company" class="company form-group col-md-9">
                                              <label for="company">Company</label>
                                              <input value="{{ old('company') }}" name="company" type="text" class="form-control">
                                          </div>
                                      </div>
                                      <div class="input_contacts_wrap">
                                        <div class="form-group">
                                            <label class="col-lg-3 col-form-label" for="client-phone">Phone<span class="text-danger">*</span></label>
                                            <input value="{{ old('client-phone.0') }}" type="text" id="client-phone" class="form-control" name="client-phone[]" placeholder="(__)-___-____">
                                            <label class="col-lg-3 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                                            <input value="{{ old('client-email') }}" type="text" class="form-control" id="client-email" name="client-email" placeholder="_@_._">
                                        </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="firstname">First Name<span class="text-danger">*</span></label>
                                                    <input value="{{ old('firstname.0') }}" type="text" name="firstname[]" class="form-control" id="firstname">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lastname">Last Name<span class="text-danger">*</span></label>
                                                    <input value="{{ old('lastname.0') }}" type="text" name="lastname[]" class="form-control" id="lastname">
                                                </div>
                                            </div>
                                        <div class="p-t-50">
                                          <a id="add_contact" class="add_field_button btn-contact-2 btn btn-primary">Add Another Contact</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                    </section>
                    <h3>Move Date</h3>
                    <section>
                        <h4 class="font-22 mb-3">Set Date</h4>

                        <div class="test border rounded card-body">
                            <div class="input-group">
                                <input value="{{ old('bookingdate') }}" type="text" name="bookingdate" id="time-format" class="form-control" placeholder="dd/mm/yyyy - hh:ii aa" aria-describedby="basic-addon5" />
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon5"><i class="feather icon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h3>Pick Up</h3>
                    <section>
                        <h4 class="font-22 mb-3">Pick Up Locations</h4>
                            <div class="test border rounded card m-b-30">
                                <div class="card-header">
                                </div>
                                <div class="input_pickup_wrap card-body">
                                  <label class="p-t-20">Pick Up Address # 1</label>
                                <input value="{{ old('pickup-address.0') }}" name="pickup-address[]" id="address-0" class="address form-control" type="text"/>
                                    <div class="form-row p-t-15">
                                      <div class="form-group col-md-2">
                                          <label for="unit-address-0">Unit #</label>
                                          <input value="{{ old('pickup-unit.0') }}" name="pickup-unit[]" type="text" class="form-control" id="unit-address-0">
                                      </div>
                                      <div class="col-md-10">
                                        <label for="faddress-0">Address</label>
                                        <input type="text" class="form-control faddress" disabled="true" id="faddress-0">
                                        <!-- <label id="faddress-0" class="faddress p-t-15"></label> -->
                                      </div>
                                      <div class="col-md-9">
                                        <label>Parking Instructions</label>
                                        <textarea value="{{ old('pickup-parking.0') }}" class="form-control"  name="pickup-parking[]" id="pu-pk-instructions" rows="3" placeholder="Parking in the front..."></textarea>
                                      </div>
                                      <div class="col-md-9 p-t-15">
                                        <label>Access Information</label>
                                        <textarea value="{{ old('pickup-access.0') }}" class="form-control"  name="pickup-access[]" id="pu-access-info" rows="3" placeholder="Stairs..."></textarea>
                                      </div>
                                    </div>

                                    <a onclick="SetSummary()" class="btn btn-primary">Get Summary</a>
                                 <div class="p-t-15">
                                   <a id="add_pickup" class="add_pickup_button btn-contact-2 btn btn-primary">Add Another Pick Up</a>
                                 </div>
                                 <br>
                             </div>
                                <div id="pickup-1" class="extra-location input_pickup_wrap card-body">
                                  <label class="p-t-20">Pick Up Address # 2</label>
                                <input value="{{ old('pickup-address.1') }}"  name="pickup-address[]" id="address-1" class="address form-control" type="text"/>
                                    <div class="form-row p-t-15">
                                      <div class="form-group col-md-2">
                                          <label for="unit-address-1">Unit #</label>
                                          <input value="{{ old('pickup-unit.1') }}" name="pickup-unit[]" type="text" class="form-control" id="unit-address-1">
                                      </div>
                                      <div class="col-md-10">
                                        <label for="faddress-1">Address</label>
                                        <input type="text" class="form-control faddress" disabled="true" id="faddress-1">
                                        <!-- <label id="faddress-1" class="faddress p-t-15"></label> -->
                                      </div>
                                      <div class="col-md-9">
                                        <label>Parking Instructions</label>
                                        <textarea value="{{ old('pickup-parking.1') }}" class="form-control"  name="pickup-parking[]" id="pu-pk-instructions-1" rows="3" placeholder="Parking in the front..."></textarea>
                                      </div>
                                      <div class="col-md-9 p-t-15">
                                        <label>Access Information</label>
                                        <textarea value="{{ old('pickup-access.1') }}" class="form-control"  name="pickup-access[]" id="pu-access-info-1" rows="3" placeholder="Stairs..."></textarea>
                                      </div>
                                    </div>
                                 <br>
                             </div>

                                <div id="pickup-2" class="extra-location input_pickup_wrap card-body">
                                  <label class="p-t-20">Pick Up Address # 3</label>
                                <input value="{{ old('pickup-address.2') }}"  name="pickup-address[]" id="address-2" class="address form-control" type="text"/>
                                    <div class="form-row p-t-15">
                                      <div class="form-group col-md-2">
                                          <label for="unit-address-2">Unit #</label>
                                          <input value="{{ old('pickup-unit.2') }}" name="pickup-unit[]" type="text" class="form-control" id="unit-address-2">
                                      </div>
                                      <div class="col-md-10">
                                        <label for="faddress-2">Address</label>
                                        <input type="text" class="form-control faddress" disabled="true" id="faddress-2">
                                        <!-- <label id="faddress-2" class="faddress p-t-15"></label> -->
                                      </div>
                                      <div class="col-md-9">
                                        <label>Parking Instructions</label>
                                        <textarea value="{{ old('pickup-parking.2') }}" class="form-control"  name="pickup-parking[]" id="pu-pk-instructions-2" rows="3" placeholder="Parking in the front..."></textarea>
                                      </div>
                                      <div class="col-md-9 p-t-15">
                                        <label>Access Information</label>
                                        <textarea value="{{ old('pickup-access.2') }}" class="form-control"  name="pickup-access[]" id="pu-access-info-2" rows="3" placeholder="Stairs..."></textarea>
                                      </div>
                                    </div>
                                 <br>
                             </div>

                            </div>
                    </section><h3>Drop Off</h3>
                    <section>
                        <h4 class="font-22 mb-3">Drop Off Locations</h4>
                            <div class="test border rounded card m-b-30">
                                <div class="card-header">
                                </div>
                                <div class="input_dropoff_wrap card-body">
                                  <label class="p-t-20">Drop Off Address # 1</label>
                                <input value="{{ old('dropoff-address.0') }}" name="dropoff-address[]" id="address-3" class="address form-control" type="text"/>
                                    <div class="form-row p-t-15">
                                      <div class="form-group col-md-2">
                                          <label for="unit-address-3">Unit #</label>
                                          <input value="{{ old('dropoff-unit.0') }}" name="dropoff-unit[]" type="text" class="form-control" id="unit-address-3">
                                      </div>
                                      <div class="col-md-10">
                                        <label for="faddress-3">Address</label>
                                        <input type="text" class="form-control faddress" disabled="true" id="faddress-3">
                                        <!-- <label id="faddress-3" class="faddress p-t-15"></label> -->
                                      </div>
                                      <div class="col-md-9">
                                        <label>Parking Instructions</label>
                                        <textarea value="{{ old('dropoff-parking.0') }}" class="form-control"  name="dropoff-parking[]" id="do-pk-instructions" rows="3" placeholder="Parking in the front..."></textarea>
                                      </div>
                                      <div class="col-md-9 p-t-15">
                                        <label>Access Information</label>
                                        <textarea value="{{ old('dropoff-access.0') }}" class="form-control"  name="dropoff-access[]" id="do-access-info" rows="3" placeholder="Stairs..."></textarea>
                                      </div>
                                    </div>

                                 <div class="p-t-15">
                                   <a id="add_dropoff" class="add_dropoff_button btn-contact-2 btn btn-primary">Add Another Drop Off</a>
                                 </div>
                                 <br>
                             </div>
                                <div id="dropoff-1" class="extra-location input_dropoff_wrap card-body">
                                  <label class="p-t-20">Drop Off Address # 2</label>
                                <input value="{{ old('dropoff-address.1') }}" name="dropoff-address[]" id="address-4" class="address form-control" type="text"/>
                                    <div class="form-row p-t-15">
                                      <div class="form-group col-md-2">
                                          <label for="unit-address-4">Unit #</label>
                                          <input value="{{ old('dropoff-unit.1') }}" name="dropoff-unit[]" type="text" class="form-control" id="unit-address-4">
                                      </div>
                                      <div class="col-md-10">
                                        <label for="faddress-4">Address</label>
                                        <input type="text" class="form-control faddress" disabled="true" id="faddress-4">
                                        <!-- <label id="faddress-4" class="faddress p-t-15"></label> -->
                                      </div>
                                      <div class="col-md-9">
                                        <label>Parking Instructions</label>
                                        <textarea value="{{ old('dropoff-parking.1') }}" class="form-control"  name="dropoff-parking[]" id="do-pk-instructions-1" rows="3" placeholder="Parking in the front..."></textarea>
                                      </div>
                                      <div class="col-md-9 p-t-15">
                                        <label>Access Information</label>
                                        <textarea value="{{ old('dropoff-access.1') }}" class="form-control"  name="dropoff-access[]" id="do-access-info-1" rows="3" placeholder="Stairs..."></textarea>
                                      </div>
                                    </div>
                                 <br>
                             </div>

                                <div id="dropoff-2" class="extra-location input_dropoff_wrap card-body">
                                  <label class="p-t-20">Drop Off Address # 3</label>
                                <input value="{{ old('dropoff-address.2') }}" name="dropoff-address[]" id="address-5" class="address form-control" type="text"/>
                                    <div class="form-row p-t-15">
                                      <div class="form-group col-md-2">
                                          <label for="unit-address-5">Unit #</label>
                                          <input value="{{ old('dropoff-unit.2') }}" name="dropoff-unit[]" type="text" class="form-control" id="unit-address-5">
                                      </div>
                                      <div class="col-md-10">
                                        <label for="faddress-5">Address</label>
                                        <input type="text" class="form-control faddress" disabled="true" id="faddress-5">
                                        <!-- <label id="faddress-5" class="faddress p-t-15"></label> -->
                                      </div>
                                      <div class="col-md-9">
                                        <label>Parking Instructions</label>
                                        <textarea value="{{ old('dropoff-parking.2') }}" class="form-control"  name="dropoff-parking[]" id="do-pk-instructions-2" rows="3" placeholder="Parking in the front..."></textarea>
                                      </div>
                                      <div class="col-md-9 p-t-15">
                                        <label>Access Information</label>
                                        <textarea value="{{ old('dropoff-access.2') }}" class="form-control"  name="dropoff-access[]" id="do-access-info-2" rows="3" placeholder="Stairs..."></textarea>
                                      </div>
                                    </div>
                                 <br>
                             </div>

                            </div>
                    </section>
                      <h3>Scope</h3>
                    <section>
                        <h4 class="font-22 mb-3">Scope of the Job</h4>
                        <div class="test border rounded row">
                          <div class="col-md-6 col-div">
                            <h5>Select a Room</h5>
                            <div class="row btn-block">
                              <button type="button" onclick="setLivingRoom()" class="col col-md-3 btn btn-room btn-secondary-rgba" name="button">Living Room</button>
                              <button type="button" onclick="setDiningRoom()" class="col col-md-3 btn btn-room btn-success-rgba" name="button">Dining Room</button>
                              <button type="button" onclick="setBedRoom()" class="col col-md-3 btn btn-room btn-danger-rgba" name="button">Bedroom</button>
                              <button type="button" onclick="setKitchen()" class="col col-md-3 btn btn-room btn-secondary-rgba" name="button">Kitchen</button>
                              <button type="button" class="col col-md-3 btn btn-room btn-primary-rgba" name="button">Nursery</button>
                              <button type="button" onclick="" class="col col-md-3 btn btn-room btn-info-rgba" name="button">Office</button>
                              <button type="button" class="col col-md-3 btn btn-room btn-success-rgba" name="button">Garage</button>
                              <button type="button" class="col col-md-3 btn btn-room btn-warning-rgba" name="button">Outdoor</button>
                              <button type="button" class="col col-md-3 btn btn-room btn-warning-rgba" name="button">Appliances</button>
                              <button type="button" class="col col-md-3 btn btn-room btn-secondary-rgba" name="button">Boxes</button>
                              <button type="button" class="col col-md-3 btn btn-room btn-danger-rgba" name="button">Laundry</button>
                              <button type="button" class="col col-md-3 btn btn-room btn-primary-rgba" name="button">Storage</button>
                            </div>
                            <br><h5>Select Items</h5>
                            <div class="row table-responsive">
                              <table id="selItemsTable" class="col-md-9 table table-striped">
                                <thead>
                                  <tr>
                                    <th class="t-items" style="min-width:auto">Item</th>
                                    <th class="t-items">CuFt</th>
                                    <th class="t-items">Add</th>
                                  </tr>
                                </thead>
                                <tbody>

                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-6 col-div">
                            <h5>Inventory</h5>
                            <div class="table-responsive">
                                <table data-show-toggle="true" id="inventoryItemsTable" class="table foo-filtering-table table-striped">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="" class="t-items" style="min-width:auto">Item</th>
                                            <th data-breakpoints="xs sm" class="t-items">CuFt</th>
                                            <th data-breakpoints="" class="t-items">Quantity</th>
                                            <th data-breakpoints="all" class="t-items" data-title="Dimensions">Dimensions</th>
                                            <th data-breakpoints="xs" class="t-items">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                      </div>
                    </section>
                    <h3>Logistics</h3>
                    <section>
                        <h4 class="font-22 mb-3">Logistics</h4>

                            <div class="test border rounded card m-b-30">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-subtitle">Available Trucks for the Date selected</h6>
                                    <div class="form-group">
                                        <select name="truck" class="form-control" id="select-truck">
                                          @foreach ($trucks as $truck)
                                            <option value="{{ $truck->id }}" {{ old('truck') == $truck->id ? 'selected' : '' }} >{{ $truck->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <h6 class="card-subtitle">Movers</h6>
                                        <div class="form-group">
                                            <select name="movers" class="form-control" id="select-movers">
                                                <option value="2" {{ old('movers') == 2 ? 'selected' : '' }} >2 Movers</option>
                                                <option value="3" {{ old('movers') == 3 ? 'selected' : '' }} >3 Movers</option>
                                                <option value="4" {{ old('movers') == 4 ? 'selected' : '' }} >4 Movers</option>
                                                <option value="5" {{ old('movers') == 5 ? 'selected' : '' }} >5 Movers</option>
                                            </select>
                                        </div>
                                        <h6 class="card-subtitle">Estimated Time</h6>
                                        <div class="form-group">
                                          <input value="{{ old('move-estimated-time') }}" type="text" class="form-control" id="move-estimated-time" name="estimated-time" placeholder="0.0">
                                        </div>
                                </div>
                            </div>
                    </section>
                    <h3>Summary</h3>
                    <section>
                        <h4 class="font-22 mb-3">Summary</h4>
                        <div class="summary test border rounded custom-control custom-checkbox">

                        </div>
                        <a onclick="SetSummary()" class="btn btn-primary">Get Summary</a>
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
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<!-- jquery -->
<!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
<script src="{{ asset('assets/js/jqueryui/jquery-ui.min.js') }}"></script>
<!-- Input Mask js -->
<script src="{{ asset('assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<!-- Form Step js -->
<script src="{{ asset('assets/plugins/jquery-step/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-wizard.js') }}"></script>
<!-- Footable js -->
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/footable/js/footable.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-footable.js') }}"></script>
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-booking.js') }}"></script>
<!-- X-editable js -->
<script src="{{ asset('assets/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js') }}"></script>
<!-- Google Maps JS -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key={{ Config::get('services.google.key') }}&language=en&region=CA"></script>
<script src="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.js"></script>
<script type="text/javascript">
//Start - Set cargo
var livingroomitems = ['One Seater Sofa','Two Seater Sofa','Coffee Table','Large TV',
                      'Small Bench','Medium Bench','Large Bench','Armchair','Sofa Bed'];
var diningroomitems = ['Bench, Harvest','Buffet','Cabinet China','Cabinet Corner',
                      'Chair Dining','Rug, Large','Rug, Small','Server','Table, Dining','Tea Cart'];
var bedroomitems = ['Bench','Dresser','Bookshelf','Bunk Bed','Cedar Chest','Chair,Budoir',
                    'Chair, Stright','Chaise Lounge','Desk','Dresser, Dbl.', 'Exercise Bike'];
var kitchenitems = ['Baker Rack','Breakfast Suite','Breakfast Table','Butcher Block',
                    'Chair, High','Ironing Board','Kitchen Cabinet','Microwave','Serving Cart','Stool','Table',
                    'Utility Cabinet'];
// var arrayselected = [livingroomitems,diningroomitems,bedroomitems,kitcheitems];
var arrayselected = -1;
function setLivingRoom(){
  $("#selItemsTable td").remove();
  livingroomitems.forEach(addItemsRoom);
  arrayselected = 1;
}
function setDiningRoom(){
  $("#selItemsTable td").remove();
  diningroomitems.forEach(addItemsRoom);
  arrayselected = 2;
}
function setBedRoom(){
  $("#selItemsTable td").remove();
  bedroomitems.forEach(addItemsRoom);
  arrayselected = 3;
}
function setKitchen(){
  $("#selItemsTable td").remove();
  kitchenitems.forEach(addItemsRoom);
  arrayselected = 4;
}
function addItemsRoom(x) {
$("#selItemsTable tbody").append(
  "<tr>" +
      "<td class='t-items'>" + x + "</td>" +
      "<td class='t-items'>" + Math.floor(Math.random() * 15) + 1   + "</td>" +
      "<td class='t-items'> <button type='button' onclick='itemTransfer(this)' class='btn btn-round btn-success-rgba'><i class='feather icon-plus'></i></button> </td>" +
  "</tr>"

);
}
function addItemsInventory(y,z) {
  var empty = $("#inventoryItemsTable").find(".footable-empty");
          if (empty) {
            empty.remove();
          }
$("#inventoryItemsTable tbody").append(
  "<tr>" +
      "<td class='t-items'>" + y + "</td>" +
      "<td class='t-items'>" + z  + "</td>" +
      "<td class='t-items'><input class='dimensions' type='number' min='1' value='1' class='form-control'></td>" +
      "<td class='t-items'>" +
      "<div class='button-list'>" +
      "<input class='dimensions' type='number' step='0.1' min='1' placeholder='Weight'>" +
      "<input class='dimensions' type='number' step='0.1' min='1' placeholder='Width' >" +
      "<input class='dimensions' type='number' step='0.1' min='1' placeholder='Depth' >" +
      "<input class='dimensions' type='number' step='0.1' min='1' placeholder='Height'>" +
      "</div>" +
      "</td>" +
      "<td class='t-items'> <button type='button' onclick='itemDelete(this)' class='btn btn-round btn-danger-rgba'><i class='feather icon-trash-2'></i></button> </td>" +
  "</tr>"
);
$('#inventoryItemsTable').footable();
};
function itemTransfer(ctl) {
var _row = $(ctl).parents("tr");
var cols = _row.children("td");
var it = $(cols[0]).text();
var vl = $(cols[1]).text();
  if (arrayselected==1) {
    index = livingroomitems.indexOf(it);
    livingroomitems.splice(index,1);
  }else if (arrayselected==2) {
    index = diningroomitems.indexOf(it);
    diningroomitems.splice(index,1);
  }else if (arrayselected==3) {
    index = bedroomitems.indexOf(it);
    bedroomitems.splice(index,1);
  }else if (arrayselected==4) {
    index = kitchenitems.indexOf(it);
    kitchenitems.splice(index,1);
  };
  addItemsInventory(it,vl);
  $(ctl).parents("tr").remove();
};
function itemDelete(ctl) {
  $(ctl).parents("tr").remove();
};
//End - Set cargo
//Start - Show/Hide Company
function showCompany(){
  document.getElementById('company').style.display = "block";
};
function hideCompany(){
  document.getElementById('company').style.display = "none";
};
//End - Show/Hide Company
//Start - Autocomplete
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

  $( "#client-phone" ).autocomplete({
    source: function( request, response ) {
      // Fetch data
      $.ajax({
        url:"{{route('users.getUsersByPhone')}}",
        type: 'post',
        dataType: "json",
        data: {
           _token: CSRF_TOKEN,
           search: request.term
        },
        success: function( data ) {
           response( data );
        }
      });
    },
    select: function (event, ui) {
       // Set selection
       $('#client-phone').val(ui.item.label); // display the selected text
       // $('#userid').val(ui.item.value); // save selected id to input
       $('#firstname').val(ui.item.name); // save selected id to input
       $('#lastname').val(ui.item.lastname); // save selected id to input
       $('#client-email').val(ui.item.email); // save selected id to input
       return false;
    }
  });

});
// Add fields dynamically
$(document).ready(function() {
  var max_contacts      = 6; //maximum input boxes allowed
  var wrapper         = $(".input_contacts_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
      e.preventDefault();
      if(x < max_contacts){ //max input box allowed
          x++; //text box increment

          $(wrapper).append('<div class="p-t-30 contact-2">' +
          '<label class="p-t-20">Contact #' + x + '</label>' +
          '<div class="form-group">' +
          '<label class="col-lg-3 col-form-label" for="client-phone">Phone<span class="text-danger">*</span></label>' +
          '<input type="text" class="phone_number form-control" name="client-phone[]" placeholder="(__)-___-____"></div>' +
          '<div class="form-row">' +
          '<div class="form-group col-md-6">' +
          '<label for="firstname">First Name<span class="text-danger">*</span></label>' +
          '<input type="text" name="firstname[]" class="form-control"></div>' +
          '<div class="form-group col-md-6">' +
          '<label for="lastname">Last Name<span class="text-danger">*</span></label>' +
          '<input type="text" name="lastname[]" class="form-control">' +
          '</div></div></div>' +
          // $(wrapper).append('<a href="#" id="rm" class="remove_field">Remove</a>');
          '<br>');
      }
  });
  var max_pickups = 3;

  var y = 1; //initlal text box count
  $(add_pickup).click(function(e){ //on add input button click
      e.preventDefault();
      if(y < max_pickups){ //max input box allowed
          document.getElementById('pickup-' + y).style.display = "block";
          y++; //text box increment
      }else{
          alert('You can only add ' + y + ' pick up locations.' + y);
      }
  });

    var max_dropoffs = 3;

    var w = 1; //initlal text box count
    $(add_dropoff).click(function(e){ //on add input button click
        e.preventDefault();
        if(w < max_dropoffs){ //max input box allowed
            document.getElementById('dropoff-' + w).style.display = "block";
            w++; //text box increment

        }else{
            alert('You can only add ' + w + ' drop off locations.');
        }
    });
});
function SetSummary(){
  var summary = $(".summary");
  var contact = '';
  var pickup = '';
  var dropoff = '';
  var firstname = document.getElementsByName("firstname[]");
  var lastname = document.getElementsByName("lastname[]");
  var phone = document.getElementsByName("client-phone[]");
  var email = document.getElementsByName("client-email")[0].value;
  var bookingdate = document.getElementsByName("bookingdate")[0].value
  var pickup_address = document.getElementsByName("pickup-address[]");
  var pickup_unit = document.getElementsByName("pickup-unit[]");
  var pickup_parking = document.getElementsByName("pickup-parking[]");
  var pickup_access = document.getElementsByName("pickup-access[]");
  var dropoff_address = document.getElementsByName("dropoff-address[]");
  var dropoff_unit = document.getElementsByName("dropoff-unit[]");
  var dropoff_parking = document.getElementsByName("dropoff-parking[]");
  var dropoff_access = document.getElementsByName("dropoff-access[]");
  var estimated_time = document.getElementsByName("estimated-time")[0].value;
  var truck = document.getElementById("select-truck");
  var selectedTruck = truck.options[truck.selectedIndex].text;
  var movers = document.getElementsByName("movers")[0].value;
  // alert(pickup_address[1].value);
for (i = 0; i < firstname.length; i++){
  contact = contact + '<li><strong>Contact #' + i + ' :</strong>' + firstname[i].value + ' ' + lastname[i].value + '</li>' +
  '<li><strong>Phone Number :</strong> ' + phone[i].value + '</li>';
}
for (j = 0; j < pickup_address.length; j++){
  if (pickup_address[j].value){
    // alert(pickup_address[j].value);
    pickup =  pickup + '<li><strong>Pick Up Address #' + (j+1) + ' :</strong>' +
              pickup_address[j].value + ', Unit ' + pickup_unit[j].value + '</li>' +
              '<li><strong>Parking :</strong> ' + pickup_parking[j].value + '</li>' +
              '<li><strong>Access :</strong> ' + pickup_access[j].value + '</li>';
  }
}
for (k = 0; k < dropoff_address.length; k++){
  if (dropoff_address[k].value){
    dropoff =  dropoff + '<li><strong>Drop Off Address #' + k+1 + ' :</strong>' +
            dropoff_address[k].value + ', Unit ' + dropoff_unit[k].value + '</li>' +
            '<li><strong>Parking :</strong> ' + dropoff_parking[k].value + '</li>' +
            '<li><strong>Access :</strong> ' + dropoff_access[k].value + '</li>';
          }
}
  $(summary).empty();
  $(summary).append(
    '<ul><li><strong>Email :</strong> ' + email+ '</li>' +
    contact +
    pickup +
    dropoff +
    '<li><strong>Booking Date :</strong> ' + bookingdate + '</li>' +
    '<li><strong>Estimated Time :</strong> ' + estimated_time + '</li>' +
    '<li><strong>Cargo :</strong> 1 queen box spring mattress set with rails, 42 inch TV, wall mirror and 2 boxes (Home Depot medium sized box).</li>' +
    '<li><strong>Truck :</strong> ' + selectedTruck + '</li>' +
    '<li><strong>Movers :</strong> ' + movers + '</li></ul>'
  );
}
</script>
@endsection
