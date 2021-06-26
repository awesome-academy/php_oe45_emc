@extends('admin.layouts.app')

@section('title')
    <title>Manage Order Customer</title>
@endsection

@section('css')
	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin-page/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin-page/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin-page/vendors/images/favicon-16x16.png') }}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/src/fonts/google-font/inter.css') }}">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
	<!-- switchery css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/src/plugins/switchery/switchery.min.css') }}">
	<!-- bootstrap-tagsinput css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/vendors/styles/style.css') }}">
@endsection

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>DataTable</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    January 2018
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- multiple select row Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Data Table with multiple select row</h4>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table hover multiple-select-row nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Name</th>
                                    <th>Age</th>
                                    <th>Office</th>
                                    <th>Address</th>
                                    <th>Start Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-plus">Gloria F. Mead</td>
                                    <td>25</td>
                                    <td>Sagittarius</td>
                                    <td>
                                        Sagittarius
                                    </td>
                                    <td>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" data-style="btn-outline-danger">
                                                    <option data-subtext="French's">Mustard</option>
                                                    <option data-subtext="Heinz">Ketchup</option>
                                                    <option data-subtext="Sweet">Relish</option>
                                                    <option data-subtext="Miracle Whip">Mayonnaise</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect</td>
                                    
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect</td>
                                    
                                    <td>$162,700</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- multiple select row Datatable End -->
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
	<!-- js -->
	<script src="{{ asset('admin-page/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('admin-page/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('admin-page/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('admin-page/vendors/scripts/layout-settings.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
	<!-- buttons for Export datatable -->
	<script src="{{ asset('admin-page/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
	<script src="{{ asset('admin-page/src/plugins/datatables/js/vfs_fonts.js') }}"></script>
	<!-- Datatable Setting js -->
	<script src="{{ asset('admin-page/vendors/scripts/datatable-setting.js') }}"></script></body>
    <!-- switchery js -->
	<script src="{{ asset('admin-page/src/plugins/switchery/switchery.min.js') }}"></script>
	<!-- bootstrap-tagsinput js -->
	<script src="{{ asset('admin-page/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
	<!-- bootstrap-touchspin js -->
	<script src="{{ asset('admin-page/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
	<script src="{{ asset('admin-page/vendors/scripts/advanced-components.js') }}"></script>
@endsection
