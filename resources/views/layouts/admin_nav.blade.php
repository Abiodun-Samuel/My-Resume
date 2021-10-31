<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token"> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Are you interested in growing your business globally, reaching more clients, and making more profits? Abiodun Samuel is a seanoned experienced web designer, developer, seo expert for your startups, businesses, or individuals. i will help you launch your business to the world with a custom-made website, designed specifically to suit your business needs, Creative web designs to give your business a compelling digital face, and a customer-friendly web design capable of generating more sales. Other services also include website management, digital marketing at a very afforadable rate">
    <meta name="keywords"
        content="web de, webdesign, website company, web page design, build a website, web application development, website, website builder, web developer, ecommerce website, create a website business, Website Design, Development, Responsive Websites, Content Management, online business" />
    <meta name="robots" content="noindex, follow">
    <link rel="canonical" href="https://www.abiodundigitalhub.com" />

    {{-- Facebook Tags --}}
    <meta property="og:title" content="Abiodun Samuel Oluyemi | Resume">
    <meta property="og:description"
        content="B.Sc. Physics | Full Stack Web Developer | Software Developer | Digital Marketer | Educator">
    <meta property="og:image"
        content="https://scontent.flos1-1.fna.fbcdn.net/v/t39.30808-6/239522792_10217300780345737_2630067880173890109_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHqeS8zKjD0A5yGo2_AqxWB87ibzMUhtzfzuJvMxSG3N42syXLhQUsAMv5m7Lep6GE&_nc_ohc=SD8qFbg88Y0AX8Y00vP&_nc_ht=scontent.flos1-1.fna&oh=b0eb2cb0c692a5378498d36086e6dcd4&oe=612588AD">
    <meta property="og:url" content="https://web.facebook.com/psalmzie007">

    <title>{{ config('app.name') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/favicons-180x180.jpg') }}">
    <link rel="icon" type="image/jpg" sizes="32x32" href="{{ asset('images/favicons/favicons-32x32.jpg') }}">
    <link rel="icon" type="image/jpg" sizes="16x16" href="{{ asset('images/favicons/favicons-16x16.jpg') }}">
    <link rel="manifest" href="{{ asset('mix-manifest.json') }}">

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Merriweather:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}"> --}}

    <!-- Bootstrap $ custom Styles -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ mix('css/style_admin.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)">
                        <i><span class="iconify h-100" data-icon="subway:menu"></span></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i><span class="iconify h-100" data-icon="fa-solid:search"></span></i>

                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
                        <i class="iconify h-100" data-icon="ci:chat"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i
                                                class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i
                                                class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
                        <span class="iconify h-100" data-icon="grommet-icons:notification"></span>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin.home') }}" class="brand-link">
                <img src="{{ asset('images/logo/logo2.jpg') }}" alt="Developer Abiodun Samuel"
                    class="brand-image elevation-1">
                <span class="brand-text font-weight-bold">A.S</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('images/profile.jpg') }}" class="img-circle elevation-2"
                            alt="Developer Abiodun Samuel">
                    </div>
                    <div class="info">
                        <a href="javascript:void(0)" class="d-block text-light"> {{ auth()->user()->name }}</a>
                    </div>
                </div>

                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-header">Menu</li>
                        <li class="nav-item">
                            <a href="{{ route('admin.home') }}" class="nav-link">
                                <i>
                                    <span class="iconify nav-icon" data-icon="file-icons:dashboard"></span>
                                </i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i><span class="iconify nav-icon" data-icon="zondicons:portfolio"></span></i>
                                <p>
                                    Projects
                                    <span class="iconify right" data-icon="bx:bx-left-arrow"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.project.create') }}" class="nav-link">
                                        <i>
                                            <span class="iconify nav-icon" data-icon="whh:newwindow"></span>
                                        </i>
                                        <p>
                                            New Projects
                                            <span class="right badge badge-danger">New</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.project.index') }}" class="nav-link">
                                        <i>
                                            <span class="iconify nav-icon"
                                                data-icon="eos-icons:cluster-management"></span>
                                        </i>
                                        <p>Manage Projects</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        {{-- logout --}}
                        <li class="nav-item">
                            @auth
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="border-0 bg-transparent m-0 p-0">
                                        <a href="javascript:void(0)" class="nav-link text-danger">
                                            <i>
                                                <span class="iconify nav-icon" data-icon="ls:logout"></span>
                                            </i>
                                            <p>Logout</p>
                                        </a>
                                    </button>
                                </form>
                            @endauth
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="p-4"></div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row py-3">
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"> <b>Home</b></a>
                                </li>
                                <li class="breadcrumb-item active">{{ $innerTitle }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <!-- Main Footer -->

    </div>

    <footer class="main-footer text-center">
        Copyright &copy; <span id="year"></span> <a href="https://abiodundigitalhub.tech">Abiodun Digital
            Hub</a> All
        rights
        reserved.
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    @stack('scripts')
    <!-- Custom Javascript -->
    <script src="{{ mix('js/script_admin.js') }}"></script>
</body>

</html>
