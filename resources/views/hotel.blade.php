@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
    <script type="text/javascript" src="{{ URL::asset('js/hotel.js') }}"></script>
@endsection

@section('content')
    <div class="page-header">
        <div>
            <h3>Hotel</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Hotel</li>
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
                            <h6 class="card-title">Add New Hotel</h6>
                            <form id="formHotel" class="needs-validation" novalidate="">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="validationCustom01">Hotel Name</label>
                                        <input name="name" type="text" class="form-control" id="validationCustom01"
                                            placeholder="Hotel Name" required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="validationCustom03">Adderss</label>
                                        <input name="address" type="text" class="form-control" id="validationCustom03"
                                            placeholder="Adderss" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid address.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 mb-3">
                                        <label for="validationCustom03">Longitude</label>
                                        <input name="longitude" type="text" class="form-control" id="validationCustom03"
                                            placeholder="longitude" required="">
                                        <div class="invalid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="validationCustom03">Latitude</label>
                                        <input name="latitude" type="text" class="form-control" id="validationCustom03"
                                            placeholder="Latitude" required="">
                                        <div class="invalid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <button id="btnSave" class="btn btn-primary" type="submit">Save</button>
                            </form>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Hotel List</h6>
                            <table id="tblHotels" class="table table-striped table-bordered dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="id">Id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>View Rooms</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="editHotelModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Hotel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmHotelUpdate" >
                        {{ csrf_field() }}
                        <input name="id" type="hidden" class="form-control">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input name="address" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Longitude</label>
                            <div class="col-sm-9">
                                <input name="longitude" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Latitude</label>
                            <div class="col-sm-9">
                                <input name="latitude" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <button id="btnUpdate" type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Form validation example -->
    <script src="{{ url('assets/js/examples/form-validation.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
