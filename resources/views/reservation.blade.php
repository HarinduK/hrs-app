@extends('layouts.app')

@section('head')
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ url('vendors/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('vendors/slick/slick-theme.css') }}" type="text/css">
     <!-- Datepicker -->
     <link rel="stylesheet" href="{{ url('vendors/datepicker/daterangepicker.css') }}">
@endsection

@section('content')

    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Reservation</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Hotel</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Reseravation</li>
                </ol>
            </nav>
        </div>
        <div class="mt-2 mt-md-0">
            <div class="dropdown">
                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="ti-settings mr-2"></i> Actions
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slider-for">
                                <div class="slick-slide-item">
                                    <img id="imgHotel" src="{{ url('assets/media/image/products/hotel.jpg') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                                {{-- <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/Hotel1.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/Hotel2.jpg') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div> --}}
                            </div>
                            <div class="slider-nav mt-4">
                                {{-- <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/Hotel3.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/Hotel4.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/Hotel6.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="d-flex justify-content-between mb-2">
                                <span class="d-flex align-items-center">
                                <i class="fa fa-heart text-danger mr-2"></i> 259
                            </span>
                            </div> --}}
                            <h2 id="lblHotelName">Hireitence Luxury</h2>
                            <p>
                                <span class="badge bg-success-bright text-success">Intro</span>
                            </p>
                            <p>This hotel is a well known hotel and resort in Sri Lanka.“All aspects of our stay here
                                were excellent, the accommodation was clean and luxurious, the food was delicious and the spread was
                                plentiful with options for all palettes and the overall environment was calm .”</p>

                            <div class="d-flex">
                                <ul class="list-inline mb-3 mr-2">
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star-half-o text-warning"></i>
                                    </li>
                                </ul>
                                <span>(4.5)</span>
                            </div>


                                    <div id="default-map" style="height: 200px"></div>

                            <form class="mt-4 d-flex align-items-center">
                                <div class="col-md-4">
                                    <input id="txtRoomCount" type="number" class="form-control" value="1">
                                </div>
                                <label>Rooms</label>
                                <button class="btn btn-primary ml-4">Book Now</button>
                            </form>
                            <ul></ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <ul id="myTab" class="nav nav-pills mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">Guest Details</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h4 class="mb-4">Details</h4>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Check-in/out</label>
                                <div class="col-sm-3">
                                    <input type="text" id="daterangepicker"  name="daterangepicker" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input id="txtRoomCount2" type="number" class="form-control" value="1">
                                </div>
                                <label lass="col-sm-1 col-form-label">Rooms</label>
                                <button class="btn btn-primary ml-4">Apply Changes</button>
                            </div>
                            <div>

                            </div>
                            <div class="table-responsive">
                                <table id="tablerooms" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Select</th>
                                        <th scope="col">Sleep</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Today Price</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbodyrooms">
                                    {{-- <tr class="table-default">
                                        <td scope="row">
                                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                                <input type="checkbox" class="custom-control-input" id="chkroom1" >
                                                <label class="custom-control-label" for="chkroom1"> </label>
                                            </div>
                                        </td>
                                        <th>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </th>
                                        <td>Jessie</td>
                                        <td>Otto</td>
                                        <td>
                                            <span class="badge badge-success">Avalable</span>
                                        </td>
                                    </tr>
                                    <tr class="table-active">
                                        <td scope="row">
                                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                                <input type="checkbox" class="custom-control-input" id="chkroom2" >
                                                <label class="custom-control-label" for="chkroom2"> </label>
                                            </div>
                                        </td>
                                        <th>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </th>
                                        <td>Jessie</td>
                                        <td>Otto</td>
                                        <td>
                                            <span class="badge badge-danger">Booked</span>
                                        </td>
                                    </tr> --}}

                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <button id="btnReserve" class="btn btn-primary" type="submit">I'll Reserve </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h4 class="mb-4">Guest Details</h4>
                            <form id="formHotel" class="needs-validation" novalidate="">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="validationCustom01">Name</label>
                                        <input name="name" type="text" class="form-control" id="validationCustom01"
                                            placeholder="Full Name" required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="validationCustom03">Address</label>
                                        <input name="address" type="text" class="form-control" id="validationCustom03"
                                            placeholder="Address" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid address.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="validationCustom03">Phone Number</label>
                                        <input name="phone_number" type="text" class="form-control" id="validationCustom03"
                                            placeholder="phone_number" required="">
                                        <div class="invalid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="validationCustom03">NIC</label>
                                        <input name="nic" type="text" class="form-control" id="validationCustom03"
                                            placeholder="nic" required="">
                                        <div class="invalid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="password" value="000">
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="validationCustom03">Email</label>
                                        <input name="email" type="text" class="form-control" id="validationCustom03"
                                            placeholder="email" required="">
                                        <div class="invalid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <button id="btnNext" class="btn btn-primary" type="submit">Next</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register to continue ... </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmRegi" >
                        {{ csrf_field() }}
                        <input name="id" type="hidden" class="form-control">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input name="regi-email" type="text" class="form-control">
                            </div>
                        </div>
                        <input type="hidden" name='guestId'>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input name="password1" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Retype Password</label>
                            <div class="col-sm-9">
                                <input name="re-password" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <button id="btnSignup" type="submit" class="btn btn-primary">SignUp</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Slick js -->
    <script src="{{ url('vendors/slick/slick.min.js') }}"></script>

    <script src="{{ url('vendors/datepicker/daterangepicker.js') }}"></script>

    <script src="{{ url('js/reservation.js') }}"></script>
    <script src="{{ url('assets/js/examples/pages/product-detail.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-psmVEhSZZkKCE2d1UZ9x3eKO3ATR1Mo&callback=initialize"
            async defer></script>

@endsection
