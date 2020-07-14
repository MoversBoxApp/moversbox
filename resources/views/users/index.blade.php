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
                                    <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="custom-control custom-checkbox">
                            <input checked type="checkbox" class="custom-control-input" id="all">
                            <label class="custom-control-label" for="all">All</label>
                        </div>
                        @foreach ($userstatuses as $userstatus)
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" name="{{ $userstatus->name }}" id="{{ $userstatus->name }}">
                              <label class="custom-control-label" for="{{ $userstatus->name }}">{{ $userstatus->name }}</label>
                          </div>
                          @endforeach
                        @foreach ($profiles as $profile)
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" name="{{ $profile->name }}" id="{{ $profile->name }}">
                              <label class="custom-control-label" for="{{ $profile->name }}">{{ $profile->name }}</label>
                          </div>
                          @endforeach
                        <div class="custom-control p-t-15">
                        <input type="text" style="max-width:150px;" class="form-control" id="searchbox-input" onkeyup="myFunction()" placeholder="Search for users">
                        </div>
                      </div>
                    </div>
            </div>
            @foreach ($users as $user)
              <div id="{{ $user->name }}-{{ $user->lastname }}" class="col-lg-6 col-xl-3">
              <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="storage/{{ $user->userpic }}" class="img-fluid circle" alt="doctor">
                    <h5>{{ $user->name }} {{ $user->lastname }}</h5>
                    <p class="mb-0"><span class="badge badge-primary-inverse">{{ $user->profile->name }}</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                          <div class="custom-control">

                            <form class="float-left" action="{{ route('users.destroy',$user) }}" method="POST">
                              @csrf
                              {{ method_field('DELETE') }}
                              <!-- <a href="{{ route('users.destroy', $user) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a> -->
                              <button type="submit" class="btn btn-round btn-danger" onclick="return confirm('Are you sure you want to delete this user?');" name="button">
                                <i class="feather icon-trash-2"></i>
                              </button>
                            </form>

                          </div>
                        </div>
                        <div class="col-6">
                          <a class="btn btn-round btn-primary" href="{{ route('users.edit',$user)}}">
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
<!-- Pnotify js -->
<script src="{{ asset('assets/plugins/pnotify/js/pnotify.custom.min.js') }}"></script>
<!-- <script src="{{ asset('assets/js/custom/custom-pnotify.js') }}"></script> -->
<script type="text/javascript">
function deleteUser(user) {
    (new PNotify({
        title: 'Confirmation Needed',
        text: 'Delete user: ' + user.name + ' '  + user.lastname + '. Are you sure?',
        icon: 'glyphicon glyphicon-question-sign',
        hide: false,
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        addclass: 'stack-modal',
        stack: {
            'dir1': 'down',
            'dir2': 'right',
            'modal': true
        }
    })).get().on('pnotify.confirm', function() {
        // $(".deleteRecord").action = "{{ route('users.destroy',$user) }}";
        $(this).submit();
    }).on('pnotify.cancel', function() {
        alert('The user will NOT be deleted.');
    });
};
</script>
@endsection
