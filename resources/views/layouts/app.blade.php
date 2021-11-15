<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token">
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

    <!-- CSS Libraries -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.css" />
    <!-- Bootstrap $ custom Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
</head>

<body>
    {{-- Navigation --}}
    <header class="fixed-top">
        <nav id="navbar" class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">A.<span>S</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span class="navbar-toggler-icon">
                            <svg id="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false"
                                width="1.4em" height="1.4em"
                                style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path d="M0 1h16v3H0V1z" />
                                <path d="M0 6h16v3H0V6z" />
                                <path d="M0 11h16v3H0v-3z" />
                            </svg>
                        </span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        <a class="nav-link" href="{{ route('project.index') }}">Portfolio</a>
                        <a class="nav-link" href="{{ route('blog.home') }}">Blog</a>
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        @auth
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="nav-link auth-btn px-3">Logout</button>
                            </form>
                        @endauth
                        @guest
                            <a class="nav-link auth-btn" href="{{ route('login') }}"> Login </a>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- Footer Start -->
    <div id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="m-0 p-0">&copy; Copyright 2021. All Rights Reserved.</p>
                    <p class="m-0 p-0">Designed & Developed by <a href="https://abiodundigitalhub.tech">Abiodun
                            Digital Hub</a>
                    <p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->

    <!-- Back to Top -->
    <a href="#" class="scrollup back-to-top">
        <svg width="2.3em" height="2.3em" viewBox="0 0 16 16">
            <g fill="#f37e21">
                <path fill-rule="evenodd"
                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 8.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z" />
            </g>
        </svg>
    </a>

    <div id="preloader">
        <div class="col-lg-6">
            <div id="centerdiv">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"> </script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>

    @stack('scripts')
    <!-- Custom Javascript -->
    <script src="{{ mix('js/script.js') }}"></script>
</body>

</html>
