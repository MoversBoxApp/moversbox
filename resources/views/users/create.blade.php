@section('title')
Admin - Users
@endsection
@extends('layouts.main')
@section('style')
<style media="screen">
  .test{
    width: 90%;
    margin: auto;
    padding: 15px 15px 15px 15px !important;
    /* border-color: #8A98AC; */
    /* background-color: #e9ecf0; */
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
                    <li class="breadcrumb-item"><a href="{{url('/users')}}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add User</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">

    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
<div class="test">
  <form method="POST" action="{{ route('users.store') }}">
      @csrf
      <div class="form-row">
          <div class="form-group col-md-3">
              <label for="name">First Name</label>
              <input value="David" name="name" type="text"  class="form-control @error('name') is-invalid @enderror" id="name">
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group col-md-3">
              <label for="lastname">Last Name</label>
              <input value="Leal" name="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname">
              @error('lastname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group col-md-3">
              <label for="userpic">Picture</label>
              <input name="userpic" type="file" class="" id="userpic">
                  @error('userpic')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>
      </div>
          <div class="form-row">
              <div class="form-group col-md-3">
                  <label for="username">Username</label>
                  <input value="David" name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username">
                  @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group col-md-3">
                  <label for="email">Email</label>
                  <input value="david@mail.com" name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
      <div class="form-row">
          <div class="form-group col-md-3">
              <label for="profile">Profile</label>
              <select name="profile" id="profile" class="form-control @error('profile') is-invalid @enderror">
                    <!-- <option selected value="0" >Select Profile...</option> -->
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
          <div class="form-group col-md-3">
              <label for="phone">Phone</label>
              <input value="1231231234" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="user-phone">
              @error('phone')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="form-row">
      </div>
      <div class="float-right col-md-3">
        <button type="submit" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Add User</button>
      </div>
  </div>
  </form>
  </div>
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<script src="{{ asset('assets/js/custom/custom-inputmask.js') }}"></script>

@endsection
