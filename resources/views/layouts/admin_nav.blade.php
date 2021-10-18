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
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- CSS Libraries -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap $ custom Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style_admin.css') }}">

</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <a href="{{ route('admin.home') }}">A.<span>S</span></a>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('admin.home') }}" class="active">
                    <span class="iconify" data-icon="carbon:dashboard-reference"></span>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.project') }}">
                    <span class="iconify" data-icon="dashicons:portfolio"></span>
                    <span class="links_name">Projects</span>
                </a>
                {{-- </li>
            <li>
                <a href="#">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Order list</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links_name">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-coin-stack"></i>
                    <span class="links_name">Stock</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-book-alt"></i>
                    <span class="links_name">Total order</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Team</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-message"></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-heart"></i>
                    <span class="links_name">Favrorites</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Setting</span>
                </a>
            </li> --}}
            <li class="log_out">
                <a href="{{ route('logout') }}">
                    <span class="iconify" data-icon="ls:logout"></span>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="container">
                <div class="sidebar-button">
                    <span class="iconify sidebarBtn" data-icon="dashicons:menu-alt3"></span>
                    <span class="dashboard">Dashboard</span>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search" />
                    <span class="iconify" data-icon="fluent:search-square-24-filled"></span>
                </div>
                <div class="profile-details">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="iconify" data-icon="bx:bxs-user-pin"></span>
                            @auth
                                {{ Str::limit(auth()->user()->name, 3) }}
                            @endauth
                            @guest
                                Name
                            @endguest
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('home') }}">HomePage</a>
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

    </section>



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>


    @stack('scripts')
    <!-- Custom Javascript -->
    <script src="{{ mix('js/script_admin.js') }}"></script>
</body>

</html>
