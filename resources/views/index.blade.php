@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-7 my-3">
                    <div class="hero" data-aos="fade-up">
                        <div class="hero-text">
                            <h1> <span id="hi">Hi There 👋,</span> <br> I'm <span id="hero_name">Samuel</span>, <br> Web <b
                                    id="typed"></b>
                            </h1>
                            <p>i-Design, i-Develop Innovative Web Solutions for Individuals, Organizations and Companies.
                            </p>
                        </div>

                        <div class="hero-btn">
                            <a class="d-inline-block btn_one" href="#portfolio">Portolio</a>
                            <a class="d-inline-block btn_two" href="{{ asset('images/resume/Abiodun Samuel CV.pdf') }}"
                                target="_blank" download="">Resume</a>
                        </div>

                        <div class="hero-icons anim">
                            <a href="https://web.facebook.com/psalmzie007"><img class="no-img img-fluid"
                                    src="{{ asset('images/icons/facebook.svg') }}" alt="facebook icon"></a>
                            {{-- <a href=""><img class="no-img img-fluid" src="{{ asset('images/icons/twitter.svg') }}"
                                    alt="twitter icon"></a> --}}
                            <a href="https://wa.link/aqutc1"><img class="no-img img-fluid"
                                    src="{{ asset('images/icons/whatsapp.svg') }}" alt="whatsapp icon"></a>
                            <a href="https://www.linkedin.com/in/samuel-abiodun-9b9a64168/"><img class="no-img img-fluid"
                                    src="{{ asset('images/icons/linkedin.svg') }}" alt="linkedin icon"></a>
                            <a href="https://www.instagram.com/4pointerz/"><img class="no-img img-fluid"
                                    src="{{ asset('images/icons/instagram.svg') }}" alt="instagram icon"></a>
                            <a href="https://github.com/Abiodun-Samuel"><img class="no-img img-fluid"
                                    src="{{ asset('images/icons/github.svg') }}" alt="github icon"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 d-flex justify-content-center my-3">
                    <div class="hero-img" data-aos="fade-up" data-aos-delay="200">
                        <img class="img-fluid no-img" src="{{ asset('images/abiodun-samuel.png') }}"
                            alt="Abiodun Samuel Oluyemi" title="Abiodun Samuel Oluyemi">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="header">
                        <h2 class="text-center">About Me</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus alias hic quas
                            eligendi omnis dolor saepe dicta tenetur architecto quis quisquam fuga et rem aut rerum
                            mollitia! Tempore at minima, sint tenetur, possimus consequatur libero molestiae eos sit,
                            placeat non alias officiis nam quidem assumenda eius voluptate quo aliquam ... <span>Abiodun
                                Samuel</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="about">
                        <div class="content-inner">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="exp-col">
                                        <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                        <h3>Codex Solution</h3>
                                        <h4>San Francisco, CA</h4>
                                        <h5>Project Manager</h5>
                                        <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="exp-col">
                                        <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                        <h3>Soft Solution Ltd</h3>
                                        <h4>San Francisco, CA</h4>
                                        <h5>Web Developer</h5>
                                        <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="exp-col">
                                        <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                        <h3>ABC Soft Ltd</h3>
                                        <h4>San Francisco, CA</h4>
                                        <h5>Web Designer</h5>
                                        <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="exp-col">
                                        <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                        <h3>Soft Agency</h3>
                                        <h4>San Francisco, CA</h4>
                                        <h5>Graphic Designer</h5>
                                        <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="header">
                        <h2 class="text-center">Portfolio</h2>
                        <p>
                            Here's a catalogue of my projects executed over the years as a Designer | Developer. I've
                            selected a few of them for your amusement, It's only a drop in the ocean compared to the entire
                            list. Interested to see more? Visit my
                            <a href="{{ route('portfolio.home') }}">Portfolio</a>
                            page.
                        </p>
                    </div>
                </div>
            </div>

            <div class="portfolio">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Web Apps</li>
                            <li data-filter=".filter-card">Web Designs</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">
                    {{-- Web Apps --}}
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app p-3">
                        <div class="card">
                            <div class="state">
                                <img src="{{ asset('images/icons/live.svg') }}" class="img-fluid" alt=""
                                    height="45px" width="45px">
                            </div>
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                                <p class="card-text"> <span>ipsum dolor</span> <span>ipsum dolor</span> <span>ipsum
                                        dolor</span> <span>ipsum dolor</span> <span>ipsum dolor</span></p>
                                <a href="#" class="" target=" _blank">
                                    <svg xmlns=" http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" width="1.5em" height="1.5em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <g fill="currentColor">
                                            <circle cx="12" cy="12" r="1.5" />
                                            <path
                                                d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5c-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zm-9.87 4a3.5 3.5 0 1 1 3.5-3.5a3.5 3.5 0 0 1-3.5 3.5z" />
                                        </g>
                                    </svg>
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Web Designs --}}
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card p-3">
                        <div class="card">
                            <div class="state">
                                <img src="{{ asset('images/icons/demo.svg') }}" class="img-fluid" alt=""
                                    height="45px" width="45px">
                            </div>
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                                <p class="card-text"><span>ipsum dolor</span> <span>ipsum dolor</span> <span>ipsum
                                        dolor</span> <span>ipsum dolor</span> <span>ipsum dolor</span>
                                </p>

                                <a href="#" class="" target=" _blank">
                                    <svg xmlns=" http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" width="1.5em" height="1.5em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <g fill="currentColor">
                                            <circle cx="12" cy="12" r="1.5" />
                                            <path
                                                d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5c-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zm-9.87 4a3.5 3.5 0 1 1 3.5-3.5a3.5 3.5 0 0 1-3.5 3.5z" />
                                        </g>
                                    </svg>
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Web Designs --}}
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card p-3">
                        <div class="card">
                            <div class="state">
                                <img src="{{ asset('images/icons/demo.svg') }}" class="img-fluid" alt=""
                                    height="45px" width="45px">
                            </div>
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                                <p class="card-text"><span>ipsum dolor</span> <span>ipsum dolor</span> <span>ipsum
                                        dolor</span> <span>ipsum dolor</span> <span>ipsum dolor</span>
                                </p>

                                <a href="#" class="" target=" _blank">
                                    <svg xmlns=" http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" width="1.5em" height="1.5em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <g fill="currentColor">
                                            <circle cx="12" cy="12" r="1.5" />
                                            <path
                                                d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5c-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zm-9.87 4a3.5 3.5 0 1 1 3.5-3.5a3.5 3.5 0 0 1-3.5 3.5z" />
                                        </g>
                                    </svg>
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="header">
                        <h2 class="text-center">Contact Me</h2>
                        <p> Do you have an enquiry? Do you have a project that requires my expertise? - I'm available. Feel
                            free to
                            drop your message or give me a call, Cheers🥂
                        </p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                {{-- phone and email --}}
                <div class="col-lg-6 col-md-6 contact-form py-3 mt-3 align-items-stretch">
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 col-sm-6 my-1">
                            <div class="contact-icons shadow-sm text-center p-3">
                                <img class="no-img img-fluid" src="{{ asset('images/icons/phone.svg') }}"
                                    alt="Phone call"> <br>
                                <a href="tel:+2348164650987"><span>+234 8164650987</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 my-1">
                            <div class="contact-icons shadow-sm text-center p-3">
                                <img class="no-img img-fluid" src="{{ asset('images/icons/email.svg') }}"
                                    alt="facebook icon"> <br>
                                <a href="mailto:contact@abiodundigitalhub.tech">
                                    <span>contact@abiodundigitalhub.tech</span> </a>
                            </div>
                        </div>
                    </div>
                    {{-- form --}}

                    <form action="{{ route('send_message') }}" method="POST" enctype="application/x-www-form-urlencoded"
                        id="contact_form">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <p class="my-0 py-0"> {{ session('status') }} </p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger mt-2 alert-dismissible fade show">
                                @foreach ($errors->all() as $error)
                                    <p class="my-0 py-0">{{ $error }}</p>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="form-row my-3">
                            <div class="col-lg-6 col-md-6 col-sm-6 xs">
                                <input class="w-100 shadow-sm" value="{{ old('name') }}" type="text" name="name"
                                    placeholder="Name" id="name" maxlength="3">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 xs">
                                <input class="w-100 shadow-sm" type="email" value="{{ old('name') }}" id="email"
                                    name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row my-3">
                            {{-- <div class="col-lg-6 col-md-6 col-sm-6 xs">
                                <input class="w-100 shadow-sm" type="tel" value="{{ old('phone') }}" id="phone"
                                    name="phone" placeholder="WhatsApp">
                            </div> --}}
                            <div class="col-lg-12">
                                <input class="w-100 shadow-sm" type="text" name="subject" placeholder="Subject" id="subject"
                                    value="{{ old('subject') }}" maxlength="3">
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-lg-12">
                                <textarea class="w-100 shadow-sm" name="message" id="message" placeholder="Message"
                                    rows="5"> {{ old('message') }} </textarea>
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-lg-12 text-right">
                                <button class="shadow-sm" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7479868303462353"
                crossorigin="anonymous"></script> --}}
        <!-- ads -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7479868303462353"
            data-ad-slot="7817005250" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </section>
@endsection
@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/CSSRulePlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
