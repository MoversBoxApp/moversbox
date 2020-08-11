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
                      <h3>Scope</h3>
                        <h4 class="font-22 mb-3">Scope of the Job</h4>
                        <div class="test border rounded row">
                          <div class="col-md-6 col-div">
                            <h5>Select a Room</h5>
                            <div class="row btn-block">
                              @foreach ($rooms as $room)
                              <button type="button" onclick="set{{ $room->id }}()" class="col col-md-3 btn btn-room btn-{{ $room->btncolor }}-rgba" name="button">{{ $room->name }}</button>
                              @endforeach
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
var livingroomitems = {!! json_encode($livingroomitems->toArray()) !!};
var diningroomitems = {!! json_encode($diningroomitems->toArray()) !!};
var bedroomitems = {!! json_encode($bedroomitems->toArray()) !!};
var kitchenitems = {!! json_encode($kitchenitems->toArray()) !!};

var arrayselected = -1;
function set1(){
  $("#selItemsTable td").remove();
  livingroomitems.forEach(addItemsRoom);
  arrayselected = 1;
}
function set2(){
  $("#selItemsTable td").remove();
  diningroomitems.forEach(addItemsRoom);
  arrayselected = 2;
}
function set3(){
  $("#selItemsTable td").remove();
  bedroomitems.forEach(addItemsRoom);
  arrayselected = 3;
}
function set4(){
  $("#selItemsTable td").remove();
  kitchenitems.forEach(addItemsRoom);
  arrayselected = 4;
}
function addItemsRoom(x) {
$("#selItemsTable tbody").append(
  "<tr>" +
      "<td class='t-items'>" + x.name + "</td>" +
      "<td class='t-items'>" + x.cufeet   + "</td>" +
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
</script>
@endsection
