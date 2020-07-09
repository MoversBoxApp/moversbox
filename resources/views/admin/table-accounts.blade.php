@section('title')
Accounts
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Accounts</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Accounts</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
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
                    <!-- <h5 class="card-title">Data Export Table</h5> -->
                </div>
                <div class="card-body">
                    <!-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6> -->
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                              <th>Client</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th># of Moves</th>
                              <th>Moves Total</th>
                              <th># of Cases</th>
                              <th>Cases Total</th>
                              <th>Last Move Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Katja Lichtenberger Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
                            </tr>
                            <tr>
                              <td>Sue Johnstone</td>
                              <td>604-604-6064</td>
                              <td>test@email.com</td>
                              <td>2</td>
                              <td>249.33</td>
                              <td>1</td>
                              <td>25</td>
                              <td>2011/04/25</td>
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
<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-datatable.js') }}"></script>
@endsection
