@section('title')
Admin - Users
@endsection
@extends('layouts.main')
@section('style')
<style media="screen">
  .test
  {
    width: 90%;
    margin: auto;
    padding: 15px 15px 15px 15px !important;
    /* border-color: #8A98AC; */
    /* background-color: #e9ecf0; */
  }
  .alingbottom
  {
    position: absolute;
    bottom: 0px;
    right: 0px;
  }
  .circle
    {
      height:120px;
      width:120px;
      border-radius:50%;
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
</div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
  <div class="test">
    <form method="POST" enctype="multipart/form-data" action="{{ route('users.update',$user) }}">
      @csrf
      {{ method_field('PUT') }}
      <div class="form-row">
            <div class="form-group col-md-3 pt-4 ">
              <img class="img-fluid circle" src="../../storage/{{ $user->userpic }}" alt="">
              <label for="userpic"></label>
              <input value="{{ $user->userpic }}" name="userpic" type="file" class="form-control-file pt-4" id="userpic">
                  @error('userpic')
                          <strong>{{ $message }}</strong>
                  @enderror
              <div class="pt-4 sw-position custom-control custom-switch">
                  @if($user->user_status->id == 1)
                  <input name="user_status" type="checkbox" checked class="custom-control-input" id="user_status">
                  @else
                  <input name="user_status" type="checkbox" class="custom-control-input" id="user_status">
                  @endif
                <label class="custom-control-label" for="user_status">Enable / Disable</label>
              </div>
            </div>
            <div class="form-group col-md-9">
              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="name">First Name</label>
                      <input value="{{ $user->name }}" name="name" type="text"  class="form-control @error('name') is-invalid @enderror" id="name">
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group col-md-3">
                      <label for="lastname">Last Name</label>
                      <input value="{{ $user->lastname }}" name="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname">
                      @error('lastname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="username">Username</label>
                    <input value="{{ $user->username }}" name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="email">Email</label>
                    <input value="{{ $user->email }}" name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email">
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
                      @if($profile->id == $user->profile->id)
                        <option selected value="{{ $profile->id }}">{{ $profile->name }}</option>
                      @else
                        <option value="{{ $profile->id }}">{{ $profile->name }}</option>
                      @endif
                    @endforeach
                </select>
                @error('profile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row mt-auto">
            <div class="col-md-3">
                <label for="phone">Phone</label>
                <input value="{{ $user->phone }}" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for=""></label>
              <button type="submit" class="btn btn-primary alingbottom"><i class="feather icon-plus mr-2"></i>Update User</button>
            </div>
        </div>
            </div>
      </div>
    </form>
  </div>
</div>
<!-- End Contentbar -->
@endsection
@section('script')
@endsection
