@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">

    <link rel="stylesheet" href="vendors/datepicker/daterangepicker.css" type="text/css">
@endsection

@section('content')
    <div class="page-header">
        <div>
            <h3>Report</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Report</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Revenue</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Revenue Report</h6>
                            <div class="row">
                                <div class="col-md-2 mb-2">
                                    <label for="validationCustom01">Select Date Range</label>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input id="daterangepicker" type="text" class="form-control" id="validationCustom01"
                                        placeholder="First name" value="Mark" required>
                                </div>
                                <div class="col-md-2 mb-2"></div>
                                <div class="col-md-4 mb-3">
                                    <a id="btnExport" class="btn btn-primary">
                                        <i class="ti-download mr-2"></i> Export Report
                                    </a>
                                </div>
                            </div>
                            <table id="tblHotels" class="table table-striped table-bordered dataTable dtr-inline collapsed"
                                role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Room No</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyrooms">


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <!-- Form validation example -->
    <script src="{{ url('assets/js/examples/form-validation.js') }}"></script>

    <script src="js/reportrevenue.js"></script>
    <script src="js/table2excelv2.js"></script>
    <script src="vendors/datepicker/daterangepicker.js"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
