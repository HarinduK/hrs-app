<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRS - Hotel Reservation System</title>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('img/logo.jpg') }}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">

    @yield('head')

    <!-- App css -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div>
    <!-- ./ Preloader -->

    <!-- Sidebar group -->
    <div class="sidebar-group">

        <!-- BEGIN: Settings -->

        <!-- END: Settings -->

        <!-- BEGIN: Chat List -->

        <!-- END: Chat List -->

    </div>
    <!-- ./ Sidebar group -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper">

        <!-- Header -->
        <div class="header d-print-none">
            <div class="header-container">
                <div class="header-left">
                    <div class="navigation-toggler">
                        <a href="#" data-action="navigation-toggler">
                            <i data-feather="menu"></i>
                        </a>
                    </div>

                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img class="logo" src="{{ url('img/logo.jpg') }}" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="header-body">
                    <div class="header-body-left">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-3">
                                <div class="header-search-form">
                                    <form>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="btn">
                                                    <i data-feather="search"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn header-search-close-btn">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown d-none d-md-block">
                                <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">Apps</a>
                                <div class="dropdown-menu dropdown-menu-big">
                                    <div class="border-bottom px-4 py-3 text-center d-flex justify-content-between">
                                        <h5 class="mb-0">Apps</h5>
                                    </div>
                                    <div class="p-3">
                                        <div class="row row-xs">
                                            <div class="col-6">
                                                <a href="">
                                                    <div class="border-radius-1 text-center mb-3">
                                                        <figure class="avatar avatar-lg border-0">
                                                            <span
                                                                class="avatar-title bg-primary text-white rounded-circle">
                                                                <i class="width-30 height-30"
                                                                    data-feather="message-circle"></i>
                                                            </span>
                                                        </figure>
                                                        <div class="mt-2">Chat</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="">
                                                    <div class="border-radius-1 text-center mb-3">
                                                        <figure class="avatar avatar-lg border-0">
                                                            <span
                                                                class="avatar-title bg-secondary text-white rounded-circle">
                                                                <i class="width-30 height-30" data-feather="mail"></i>
                                                            </span>
                                                        </figure>
                                                        <div class="mt-2">Mail</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="">
                                                    <div class="border-radius-1 text-center">
                                                        <figure class="avatar avatar-lg border-0">
                                                            <span
                                                                class="avatar-title bg-info text-white rounded-circle">
                                                                <i class="width-30 height-30"
                                                                    data-feather="check-circle"></i>
                                                            </span>
                                                        </figure>
                                                        <div class="mt-2">Todo List</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="">
                                                    <div class="border-radius-1 text-center">
                                                        <figure class="avatar avatar-lg border-0">
                                                            <span
                                                                class="avatar-title bg-warning text-white rounded-circle">
                                                                <i class="width-30 height-30" data-feather="file"></i>
                                                            </span>
                                                        </figure>
                                                        <div class="mt-2">File Manager</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown d-none d-md-block">
                                <a href="#" class="nav-link" title="Actions" data-toggle="dropdown">Create</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Add Products</a>
                                    <a href="#" class="dropdown-item">Add Category</a>
                                    <a href="#" class="dropdown-item">Add Report</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Reports</a>
                                    <a href="#" class="dropdown-item">Customers</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="header-body-right">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link mobile-header-search-btn" title="Search">
                                    <i data-feather="search"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown d-none d-md-block">
                                <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                                    <i class="maximize" data-feather="maximize"></i>
                                    <i class="minimize" data-feather="minimize"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link nav-link-notify" title="Chats"
                                    data-sidebar-target="#chat-list">
                                    <i data-feather="message-circle"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link nav-link-notify" title="Notifications"
                                    data-toggle="dropdown">
                                    <i data-feather="bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div
                                        class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Notifications</h5>
                                        <small class="opacity-7">2 unread notifications</small>
                                    </div>
                                    <div class="dropdown-scroll">
                                        <ul class="list-group list-group-flush">
                                            <li class="px-4 py-2 text-center small text-muted bg-light">Today</li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span
                                                                class="avatar-title bg-info-bright text-info rounded-circle">
                                                                <i class="ti-lock"></i>
                                                            </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            2 steps verification
                                                            <i title="Mark as read" data-toggle="tooltip"
                                                                class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">20 min ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span
                                                                class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                                <i class="ti-server"></i>
                                                            </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            Storage is running low!
                                                            <i title="Mark as read" data-toggle="tooltip"
                                                                class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">45 sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-4 py-2 text-center small text-muted bg-light">Old
                                                Notifications</li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span
                                                                class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                                                                <i class="ti-file"></i>
                                                            </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            1 person sent a file
                                                            <i title="Mark as unread" data-toggle="tooltip"
                                                                class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span
                                                                class="avatar-title bg-success-bright text-success rounded-circle">
                                                                <i class="ti-download"></i>
                                                            </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            Reports ready to download
                                                            <i title="Mark as unread" data-toggle="tooltip"
                                                                class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span
                                                                class="avatar-title bg-primary-bright text-primary rounded-circle">
                                                                <i class="ti-arrow-top-right"></i>
                                                            </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            The invitation has been sent.
                                                            <i title="Mark as unread" data-toggle="tooltip"
                                                                class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">Last Week</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 text-right border-top">
                                        <ul class="list-inline small">
                                            <li class="list-inline-item mb-0">
                                                <a href="#">Mark All Read</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                                    <i data-feather="shopping-bag"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div
                                        class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Cart</h5>
                                        <small class="opacity-7">4 products</small>
                                    </div>
                                    <div class="dropdown-scroll">
                                        <div class="list-group list-group-flush">
                                            <a href="#" class="px-4 py-3 list-group-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img class="rounded"
                                                            src="{{ url('assets/media/image/products/product6.png') }}"
                                                            alt="Canon 4000D 18-55 MM">
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Canon 4000D 18-55 MM
                                                        <i title="Close" data-toggle="tooltip"
                                                            class="hide-show-toggler-item small ti-close"></i>
                                                    </p>
                                                    <span class="text-muted small">X $1,200</span>
                                                </div>
                                            </a>
                                            <a href="#" class="px-4 py-3 list-group-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img class="rounded"
                                                            src="{{ url('assets/media/image/products/product3.png') }}"
                                                            alt="pineapple">
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Snopy SN-BT96 Pretty
                                                        <i title="Close" data-toggle="tooltip"
                                                            class="hide-show-toggler-item small ti-close"></i>
                                                    </p>
                                                    <span class="text-muted small">X $250</span>
                                                </div>
                                            </a>
                                            <a href="#" class="px-4 py-3 list-group-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img src="{{ url('assets/media/image/products/product7.png') }}"
                                                            class="rounded" alt="pineapple">
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Lenovo Tab E10 TB-X104F 32GB
                                                        <i title="Close" data-toggle="tooltip"
                                                            class="hide-show-toggler-item small ti-close"></i>
                                                    </p>
                                                    <span class="text-muted small">X $100</span>
                                                </div>
                                            </a>
                                            <a href="#" class="px-4 py-3 list-group-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img class="rounded"
                                                            src="{{ url('assets/media/image/products/product6.png') }}"
                                                            alt="Canon 4000D 18-55 MM">
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Canon 4000D 18-55 MM
                                                        <i title="Close" data-toggle="tooltip"
                                                            class="hide-show-toggler-item small ti-close"></i>
                                                    </p>
                                                    <span class="text-muted small">X $1,200</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 border-top text-right small">
                                        <p class="d-flex justify-content-between align-items-center mb-1">
                                            <span>Sub Total</span>
                                            <span>$1,650</span>
                                        </p>
                                        <p class="d-flex justify-content-between align-items-center mb-1">
                                            <span>Taxes</span>
                                            <span>$15</span>
                                        </p>
                                        <p
                                            class="d-flex justify-content-between align-items-center mb-1 font-weight-bold">
                                            <span>Total</span>
                                            <span>$1,665</span>
                                        </p>
                                        <button class="btn btn-primary btn-block mt-2">
                                            Order and Payment <i class="ti-arrow-right ml-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                                    <i data-feather="settings"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" title="User menu"
                                    data-toggle="dropdown">
                                    <figure class="avatar avatar-sm">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                            class="rounded-circle" alt="avatar">
                                    </figure>
                                    <span class="ml-2 d-sm-inline d-none">{{ Auth::User()->name }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div class="text-center py-4">
                                        <figure class="avatar avatar-lg mb-3 border-0">
                                            <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                                class="rounded-circle" alt="image">
                                        </figure>
                                        <h5 class="text-center">{{ Auth::User()->name }}</h5>
                                        <a href="#" class="btn btn-outline-light btn-rounded">Manage Your
                                            Account</a>
                                    </div>
                                    <div class="list-group">
                                        <a href="" class="list-group-item">View Profile</a>
                                        <a href="" class="list-group-item text-danger" data-toggle="modal"
                                            data-target="#modalLogOut">Sign Out!</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./ Header -->

        <div class="modal" tabindex="-1" role="dialog" id="modalLogOut">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are You Leaving ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> Do you want to sign out ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="/signout" method="get">
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- begin::navigation -->
            <div class="navigation">
                <div class="navigation-header">
                    <span>Navigation</span>
                    <a href="#">
                        <i class="ti-close"></i>
                    </a>
                </div>
                <div class="navigation-menu-body">
                    <ul>
                        <li>
                            <a @if (!request()->segment(1)) class="active" @endif href="">
                                <span class="nav-link-icon">
                                    <i data-feather="pie-chart"></i>
                                </span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                         @php
                            $userRole = Auth::User()->role_id
                        @endphp
                        @if ($userRole == 1)
                            <li>
                                <a @if (request()->segment(1) == 'hotel') class="active" @endif href="/hotel">
                                    <span class="nav-link-icon">
                                        <i data-feather="home"></i>
                                    </span>
                                    <span>Hotels</span>
                                    {{-- <span class="badge badge-danger">5</span> --}}
                                </a>
                            </li>
                        @endif

                        @if ($userRole == 1 || $userRole == 2 || $userRole == 3)
                            <li>
                                <a @if (request()->segment(1) == 'hotellist') class="active" @endif href="/hotellist">
                                    <span class="nav-link-icon">
                                        <i data-feather="mail"></i>
                                    </span>
                                    <span>Reservations</span>
                                </a>
                            </li>
                        @endif

                        @if ($userRole == 1 || $userRole == 2 || $userRole == 3)
                            <li>
                                <a @if (request()->segment(1) == 'reservationlist') class="active" @endif href="/reservationlist">
                                    <span class="nav-link-icon">
                                        <i data-feather="mail"></i>
                                    </span>
                                    <span>Reservations List</span>
                                </a>
                            </li>
                        @endif

                        @if ($userRole == 1 || $userRole == 2 || $userRole == 3)
                            <li>
                                <a @if (request()->segment(1) == 'creditcard') class="active" @endif href="/creditcard">
                                    <span class="nav-link-icon">
                                        <i data-feather="mail"></i>
                                    </span>
                                    <span>Credit Card</span>
                                </a>
                            </li>
                        @endif

                        @if ($userRole == 1 || $userRole == 3)
                            <li>
                                <a @if (request()->segment(1) == 'todo-list') class="active" @endif href="">
                                    <span class="nav-link-icon">
                                        <i data-feather="users"></i>
                                    </span>
                                    <span>Guest List</span>
                                </a>
                            </li>
                        @endif

                        @if ($userRole == 1)
                            <li>
                                <a @if (request()->segment(1) == 'file-manager') class="active" @endif href="">
                                    <span class="nav-link-icon">
                                        <i data-feather="file-plus"></i>
                                    </span>
                                    <span>Employees</span>
                                </a>
                            </li>
                        @endif


                        @if ($userRole == 1 || $userRole == 2 || $userRole == 3)
                            <li>
                                <a @if (request()->segment(1) == 'calendar') class="active" @endif href="">
                                    <span class="nav-link-icon">
                                        <i data-feather="calendar"></i>
                                    </span>
                                    <span>Calendar</span>
                                </a>
                            </li>
                        @endif


                        @if ($userRole == 1 || $userRole == 3)
                            <li>
                                <a href="#">
                                    <span class="nav-link-icon">
                                        <i data-feather="shopping-cart"></i>
                                    </span>
                                    <span>Reports</span>
                                </a>
                                <ul>
                                    <li>
                                        <a @if (request()->segment(1) == 'revenuereport') class="active" @endif
                                            href="/revenuereport">Revenue</a>
                                    </li>
                                    <li>
                                        <a @if (request()->segment(1) == 'products') class="active" @endif
                                            href="">Customers</a>
                                    </li>
                                    {{-- <li>
                                <a @if (request()->segment(1) == 'product-detail') class="active"
                                   @endif href=""></a>
                            </li> --}}
                                </ul>
                            </li>
                        @endif


                    </ul>
                </div>
            </div>
            <!-- end::navigation -->

            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content @yield('parentClassName')">
                    @yield('content')
                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <footer class="content-footer">
                    <div>© {{ date('Y') }} H R S - <a href="" target="_blank">Hotel Reservation System</a>
                    </div>
                    <div>
                        <nav class="nav">

                        </nav>
                    </div>
                </footer>
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="{{ url('vendors/bundle.js') }}"></script>

    @yield('script')

    <!-- App scripts -->
    <script src="{{ url('assets/js/app.min.js') }}"></script>

    <!-- DataTable -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('assets/js/examples/datatable.js') }}"></script>

</body>

</html>
