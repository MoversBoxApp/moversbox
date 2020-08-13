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
.item{
  border: none;
}
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
        <form id="cargoform" class="" method="POST" enctype="multipart/form-data" action="{{ route('moves.store') }}">
          @csrf
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
                        <button onclick="sendit()" type="submit" name="button">Send</button>
        </form>
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
var nurseryitems = {!! json_encode($nurseryitems->toArray()) !!};
var officeitems = {!! json_encode($officeitems->toArray()) !!};
var garageitems = {!! json_encode($garageitems->toArray()) !!};
var outdooritems = {!! json_encode($outdooritems->toArray()) !!};
var appliancesitems = {!! json_encode($appliancesitems->toArray()) !!};
var boxesitems = {!! json_encode($boxesitems->toArray()) !!};
var othersitems = {!! json_encode($othersitems->toArray()) !!};
var storageitems = {!! json_encode($storageitems->toArray()) !!};
var items = livingroomitems.concat(diningroomitems,bedroomitems,kitchenitems,
                                    nurseryitems,officeitems,garageitems,outdooritems,
                                    appliancesitems,boxesitems,othersitems,storageitems
                                      );
var cargo = Array();

var arrayselected = -1;
var room = -1;
function set1(){
  $("#selItemsTable td").remove();
  livingroomitems.forEach(addItemsRoom);
}
function set2(){
  $("#selItemsTable td").remove();
  diningroomitems.forEach(addItemsRoom);
}
function set3(){
  $("#selItemsTable td").remove();
  bedroomitems.forEach(addItemsRoom);
}
function set4(){
  $("#selItemsTable td").remove();
  kitchenitems.forEach(addItemsRoom);
}
function set5(){
  $("#selItemsTable td").remove();
  nurseryitems.forEach(addItemsRoom);
}
function set6(){
  $("#selItemsTable td").remove();
  officeitems.forEach(addItemsRoom);
}
function set7(){
  $("#selItemsTable td").remove();
  garageitems.forEach(addItemsRoom);
}
function set8(){
  $("#selItemsTable td").remove();
  outdooritems.forEach(addItemsRoom);
}
function set9(){
  $("#selItemsTable td").remove();
  appliancesitems.forEach(addItemsRoom);
}
function set10(){
  $("#selItemsTable td").remove();
  boxesitems.forEach(addItemsRoom);
}
function set11(){
  $("#selItemsTable td").remove();
  othersitems.forEach(addItemsRoom);
}
function set12(){
  $("#selItemsTable td").remove();
  storageitems.forEach(addItemsRoom);
}
function addItemsRoom(x) {
$("#selItemsTable tbody").append(
  "<tr>" +
      "<td class='t-items'>" + x.name + "</td>" +
      "<td class='t-items'>" + x.cufeet   + "</td>" +
      "<td class='t-items'> <button type='button' onclick='itemTransfer(this)' class='btn btn-round btn-success-rgba'><i class='feather icon-plus'></i></button> </td>" +
  "</tr>"

);
room = x.room_id;
}
function addItemsInventory(y,z) {
  var empty = $("#inventoryItemsTable").find(".footable-empty");
          if (empty) {
            empty.remove();
          }
$("#inventoryItemsTable tbody").append(
  "<tr>" +
      "<td class='t-items'><input class='item' type='text' name='item[]' value='" + y + "'></td>" +
      "<td class='t-items'><input class='item' type='text' name='cuft[]' value='" + z  + "'></td>" +
      "<td class='t-items'><input class='dimensions' type='number' min='1' value='1' class='form-control'></td>" +
      "<td class='t-items'>" +
      "<div class='button-list'>" +
      "<input name='weight[]' class='dimensions' type='number' step='0.1' min='1' placeholder='Weight'>" +
      "<input name='width[]' class='dimensions' type='number' step='0.1' min='1' placeholder='Width' >" +
      "<input name='depth[]' class='dimensions' type='number' step='0.1' min='1' placeholder='Depth' >" +
      "<input name='height[]' class='dimensions' type='number' step='0.1' min='1' placeholder='Height'>" +
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
var index = 0;
  if (room==1) {
    index = finditem(livingroomitems, it);
    console.log("Index found = " + index);
    livingroomitems.splice(index,1);
  }else if (room==2) {
      index = finditem(diningroomitems, it);
      diningroomitems.splice(index,1);
  }else if (room==3) {
      index = finditem(bedroomitems, it);
      bedroomitems.splice(index,1);
  }else if (room==4) {
      index = finditem(kitchenitems, it);
      kitchenitems.splice(index,1);
  }else if (room==5) {
      index = finditem(nurseryitems, it);
      nurseryitems.splice(index,1);
  }else if (room==6) {
      index = finditem(officeitems, it);
      officeitems.splice(index,1);
  }else if (room==7) {
      index = finditem(garageitems, it);
      garageitems.splice(index,1);
  }else if (room==8) {
      index = finditem(outdooritems, it);
      outdooritems.splice(index,1);
  }else if (room==9) {
      index = finditem(appliancesitems, it);
      appliancesitems.splice(index,1);
  }else if (room==10) {
      index = finditem(boxesitems, it);
      boxesitems.splice(index,1);
  }else if (room==11) {
      index = finditem(othersitems, it);
      othersitems.splice(index,1);
  }else if (room==12) {
      index = finditem(storageitems, it);
      storageitems.splice(index,1);
  }
  addItemsInventory(it,vl);
  $(ctl).parents("tr").remove();
};
function itemDelete(ctl) {
  var _row = $(ctl).parents("tr");
  var cols = _row.children("td");
  var it = cols[0].outerHTML;
  items.find(function(item, i){
    if(it.search(item.name)!=-1){
      cargo.splice(item,1);
      if (item.room_id==1) {
        livingroomitems.push(item);
        set1();
      }else if (item.room_id==2) {
        diningroomitems.push(item);
        set2();
      }else if (item.room_id==3) {
        bedroomitems.push(item);
        set3();
      }else if (item.room_id==4) {
        kitchenitems.push(item);
        set4();
      }else if (item.room_id==5) {
        nurseryitems.push(item);
        set5();
      }else if (item.room_id==6) {
        officeitems.push(item);
        set6();
      }else if (item.room_id==7) {
        garageitems.push(item);
        set7();
      }else if (item.room_id==8) {
        outdooritems.push(item);
        set8();
      }else if (item.room_id==9) {
        appliancesitems.push(item);
        set9();
      }else if (item.room_id==10) {
        boxesitems.push(item);
        set10();
      }else if (item.room_id==11) {
        othersitems.push(item);
        set11();
      }else if (item.room_id==12) {
        storageitems.push(item);
        set12();
      }
      // return item;
    }
  });
  $(ctl).parents("tr").remove();
  // $("#selItemsTable tbody").append();
};
function finditem(array, it){
  var index = 15;
  array.find(function(item, i){
    if(item.name === it){
console.log(item.name + " === " + it);
      cargo.push(item);
      index = (i);
    }
  });
  return index;
};
function sendit(){
  var input = document.createElement("input");
  input.setAttribute("type", "hidden");
  input.setAttribute("name", "cargo");
  input.setAttribute("value", JSON.stringify(cargo));
  document.getElementById("cargoform").appendChild(input);
};
</script>
@endsection
