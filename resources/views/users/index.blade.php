@section('title')
Admin - Users
@endsection
@extends('layouts.main')
@section('style')
<!-- Pnotify css -->
<link href="{{ asset('assets/plugins/pnotify/css/pnotify.custom.min.css') }}" rel="stylesheet" type="text/css" />
<style media="screen">
.circle
  {
    height:80px;
    width:80px;
    border-radius:50%;
  }
  .sw-position
  {
    padding-top: 20px !important;
    width: 80px !important;
  }
  .btn-size
  {
    /* width: 120px !important; */
    width: 90% !important;
  }
  .field-size
  {
    max-width: 90% !important;
  }
</style>
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Users</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary-rgba" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-plus mr-2"></i>Add User</button> -->
                <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Add User</a>
                <!-- Modal -->
                <div class="modal fade text-left" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                          </div>
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
    <div id="users" class="row">
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <!-- Start col -->
                <div class="card m-b-30 p-b-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title mb-0">Categories</h5>
                            </div>
                            <div class="col-3">
                                <ul class="list-inline-group text-right mb-0 pl-0">
                                    <li class="list-inline-item mr-0 font-12"><a href="{{url('/users')}}"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="custom-control pb-2">
                          <input type="text" style="max-width:150px;" class="field-size form-control" id="searchbox-input" onkeyup="searchbyname()" placeholder="Search for users">
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" onchange="enable();"

                          @if (request()->input('all')==='true')
                            checked
                          @endif
                          value="" name="all" class="custom-control-input" id="all">
                          <label class="custom-control-label" for="all">All</label>
                        </div>
                        @foreach ($userstatuses as $userstatus)
                          <div class="custom-control custom-checkbox">
                              <input
                              name="userstatus" type="checkbox" class="custom-control-input"
                              @if (in_array($userstatus->id, explode(',', request()->input('filter.user_status_id'))))
                                checked
                              @endif
                              value="{{ $userstatus->id }}" id="{{ $userstatus->name }}">
                              <label class="custom-control-label" for="{{ $userstatus->name }}">{{ $userstatus->name }}</label>
                          </div>
                          @endforeach
                            @foreach ($profiles as $profile)
                              <div class="custom-control custom-checkbox">
                                <input name="profile" type="checkbox" class="custom-control-input"
                                @if (in_array($profile->id, explode(',', request()->input('filter.profile_id'))))
                                  checked
                                @endif
                                value="{{ $profile->id }}" id="{{ $profile->name }}">
                                <label class="custom-control-label" for="{{ $profile->name }}">{{ $profile->name }}</label>
                              </div>
                            @endforeach
                      </div>
                            <div class="custom-control pb-2 d-flex justify-content-center">
                              <button class="btn-size btn btn-primary" type="submit" id="filter" name="button"> Filter </button>
                            </div>
                    </div>
            </div>
            @foreach ($users as $user)
              <div id="{{ $user->name }}-{{ $user->lastname }}" class="col-lg-6 col-xl-3">
              <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="storage/{{ $user->userpic }}" class="img-fluid img-thumbnail circle" alt="doctor">
                    <h5 class="users" >{{ $user->name }} {{ $user->lastname }}</h5>
                    <p class="mb-0"><span class="cat badge badge-primary-inverse">{{ $user->profile->name }}</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                          <div class="custom-control">

                            <form class="float-left" action="{{ route('users.destroy',$user) }}" method="POST">
                              @csrf
                              {{ method_field('DELETE') }}
                              <!-- <a href="{{ route('users.destroy', $user) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a> -->
                              <button type="submit"  title="Delete User" class="btn btn-round btn-danger" onclick="return confirm('Are you sure you want to delete this user?');" name="button">
                                <i class="feather icon-trash-2"></i>
                              </button>
                            </form>

                          </div>
                        </div>
                        <div class="col-6">
                          <a class="btn btn-round btn-primary" title="View User" href="{{ route('users.edit',$user)}}">
                            <i class="feather icon-user"></i>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End col -->

    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<script>
function searchbyname() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('searchbox-input');
  filter = input.value.toUpperCase();
  h5 = document.getElementsByClassName("users");
  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < h5.length; i++) {
    id = h5[i].innerText.replace(/ /g, "-");
    a = h5[i].innerText;
    if (a.toUpperCase().indexOf(filter) > -1) {
      document.getElementById(id).style.display = "block";
    } else {
      document.getElementById(id).style.display = "none";
    }
  }
}
function getIds(checkboxName) {
        let checkBoxes = document.getElementsByName(checkboxName);
        let ids = Array.prototype.slice.call(checkBoxes)
                        .filter(ch => ch.checked==true)
                        .map(ch => ch.value);
        return ids;
    }

function filterResults () {
    let userstatusIds = getIds("userstatus");
    let profileIds = getIds("profile");
    let href = 'users?';
    if(userstatusIds.length) {
        href += 'filter[user_status_id]=' + userstatusIds;
    }
    if(profileIds.length) {
        href += '&filter[profile_id]=' + profileIds;
    }
        href += '&all=' + document.getElementById("all").checked;
    document.location.href=href;
}

document.getElementById("filter").addEventListener("click", filterResults);
function enable()
{
  var userstatuses = {!! json_encode($userstatuses->toArray()) !!};
  var profiles = {!! json_encode($profiles->toArray()) !!};
  var value = document.getElementById("all").checked;
  // alert(value);
  for (var i = 0; i < userstatuses.length; i++) {
    document.getElementById(userstatuses[i].name).checked = value;
  }
  for (var j = 0; j < profiles.length; j++) {
    document.getElementById(profiles[j].name).checked = value;
  }
}
</script>
@endsection
