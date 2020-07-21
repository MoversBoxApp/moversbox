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
<style>
/* .pac-container {
z-index: 1151 !important;
}
.pac-container > div {
  display: inherit;
}
.datepicker{z-index:1151 !important;
} */
.datepicker > div {
  display: inherit;
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
        <div class="col-lg-12 col-xl-28">
            <form id="basic-form-wizard" align="left" action="#">
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
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">My Home</label>
                                      </div>
                                      <div class="form-check form-check-inline p-b-20">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">A Business</label>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                          <div class="form-group col-md-12">
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
                                      <input type="text" class="form-control" id="client-phone" name="val-client-phone" placeholder="(__)-___-____">
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

                        <div class="test border rounded card-body">
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
                            <div class="test border rounded card m-b-30">
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
                                      <div class="col-md-12">
                                        <label>Parking Instructions</label>
                                        <textarea class="form-control" name="inputTextarea" id="pu-pk-instructions" rows="3" placeholder="Parking in the front..."></textarea>
                                      </div>
                                      <div class="col-md-12 p-t-15">
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
                            <div class="test border rounded card m-b-30">
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
                                  <div class="col-md-12">
                                    <label>Parking Instructions</label>
                                    <textarea class="form-control" name="inputTextarea" id="do-pk-instructions" rows="3" placeholder="Parking in the front..."></textarea>
                                  </div>
                                  <div class="col-md-12 p-t-15">
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
                              <table id="selItemsTable" class="col-md-12 table table-striped">
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
                        <div class="test border rounded custom-control custom-checkbox">
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
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
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
</script>
@endsection
