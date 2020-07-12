@section('title')
Admin - Users
@endsection
@extends('layouts.main')
@section('style')

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
                <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">Add User</a>
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
                                <form method="POST" action="{{ route('register') }}">
                                <!-- <form method="POST" action="#"> -->
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">First Name</label>
                                            <input name="name" type="text"  class="form-control @error('name') is-invalid @enderror" id="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lastname">Last Name</label>
                                            <input name="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname">
                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="username">Username</label>
                                                <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username">
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="profile">Profile</label>
                                            <select name="profile" id="profile" class="form-control @error('profile') is-invalid @enderror">
                                                  <option selected value="0" >Select Profile...</option>
                                                @foreach ($profiles as $profile)
                                                  <option value="{{ $profile->id }}">{{ $profile->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('profile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone</label>
                                            <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="userpic">Picture</label>
                                            <input name="userpic" type="file" class="form-control @error('userpic') is-invalid @enderror" id="userpic">
                                            @error('userpic')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Add User</button>
                            </div>
                          </form>
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
                                    <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="all">
                            <label class="custom-control-label" for="all">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="active" checked="">
                            <label class="custom-control-label" for="active">Active</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="inactive">
                            <label class="custom-control-label" for="inactive">Inactive</label>
                        </div>
                        @foreach ($profiles as $profile)
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" name="{{ $profile->name }}" id="{{ $profile->id }}">
                              <label class="custom-control-label" for="manager">{{ $profile->name }}</label>
                          </div>
                          @endforeach
                        <div class="custom-control p-t-15">
                        <input type="text" style="max-width:150px;" class="form-control" id="searchbox-input" onkeyup="myFunction()" placeholder="Search for users">
                        </div>
                      </div>
                    </div>
            </div>
            @foreach ($users as $user)
              <div id="john-doe" class="col-lg-6 col-xl-3">
              <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/boy.svg" class="img-fluid" alt="doctor">
                    <h5>{{ $user->name }} {{ $user->lastname }}</h5>
                    <p class="mb-0"><span class="badge badge-primary-inverse">{{ $user->profile->name }}</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                          <a href="{{ route('users.show',$user)}}">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
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
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('searchbox-input');
  filter = input.value.toUpperCase();
  card = document.getElementById("users");
  h5 = card.getElementsByTagName('h5');
  // Loop through all list items, and hide those who don't match the search query
  for (i = 1; i < h5.length; i++) {
    id = h5[i].innerText.replace(/ /g, "-").toLowerCase();
    a = h5[i].innerText;
    // a = h5[i].getElementsByTagName("a")[0];
    // txtValue = a.textContent || a.innerText;
    if (a.toUpperCase().indexOf(filter) > -1) {
    // alert(id);
      document.getElementById(id).style.display = "block";
    } else {
      document.getElementById(id).style.display = "none";
    }
  }
}
</script>
@endsection
