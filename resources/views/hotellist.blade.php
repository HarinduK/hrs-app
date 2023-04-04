@extends('layouts.app')

@section('head')
    <!-- Range slider -->
    <link rel="stylesheet" href="{{ url('vendors/range-slider/css/ion.rangeSlider.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Hotel list</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Hotel</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Hotel List</li>
                </ol>
            </nav>
        </div>
        <div class="mt-2 mt-md-0">
            <a href="#" class="btn btn-outline-primary" title="List"
               data-toggle="tooltip">
                <i class="fa fa-th-list"></i>
            </a>
            <a href="#" class="btn btn-outline-primary active ml-2" title="Grid"
               data-toggle="tooltip">
                <i class="fa fa-th-large"></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Our Services</h6>
                            <form>


                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">

                                        <label class="custom-control-label" for="customCheck1">Rooms and Resorts</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">

                                        <label class="custom-control-label" for="customCheck2">Breakfirst-Dinner-Lunch</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">

                                        <label class="custom-control-label" for="customCheck3">Pool Facilities</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">

                                        <label class="custom-control-label" for="customCheck4">Kids Playing Area</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">

                                        <label class="custom-control-label" for="customCheck5">Vehicle Parking</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">

                                        <label class="custom-control-label" for="customCheck5">Gym and Fitness Room</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">

                                        <label class="custom-control-label" for="customCheck5">Mini Bar</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">

                                        <label class="custom-control-label" for="customCheck5">Computer Facilities</label>
                                    </div>
                                </div>




                                <hr>



                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item"> Star Services</div>
                                    </a>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">

                    <div id="hotelCardsList" class="row">

                        {{-- hotel card --}}


                        {{-- end hotel card --}}

                    </div>

                    <nav aria-label="..." class="mb-4">
                        <ul class="pagination pagination-rounded justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Range slider -->
    <script src="{{ url('vendors/range-slider/js/ion.rangeSlider.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/product-list.js') }}"></script>

    <script src="{{ url('js/hotellist.js') }}"></script>
@endsection
