@extends('layouts.app')

@section('content')
    {{-- <main> --}}
    {{-- hero section --}}
    <div id="hero" class="row">
        <div class="col-lg-5 col-md-6 hero-text-box">
            <div class="hero">
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
                    <a href="https://web.facebook.com/psalmzie007"><img loading="lazy" class="no-img img-fluid"
                            src="{{ asset('images/icons/facebook.svg') }}" alt="facebook icon"></a>
                    {{-- <a href=""><img loading="lazy" class="no-img img-fluid" src="{{ asset('images/icons/twitter.svg') }}"
                                    alt="twitter icon"></a> --}}
                    <a href="https://wa.link/aqutc1"><img loading="lazy" class="no-img img-fluid"
                            src="{{ asset('images/icons/whatsapp.svg') }}" alt="whatsapp icon"></a>
                    <a href="https://www.linkedin.com/in/samuel-abiodun-9b9a64168/"><img loading="lazy"
                            class="no-img img-fluid" src="{{ asset('images/icons/linkedin.svg') }}"
                            alt="linkedin icon"></a>
                    <a href="https://www.instagram.com/4pointerz/"><img loading="lazy" class="no-img img-fluid"
                            src="{{ asset('images/icons/instagram.svg') }}" alt="instagram icon"></a>
                    <a href="https://github.com/Abiodun-Samuel"><img loading="lazy" class="no-img img-fluid"
                            src="{{ asset('images/icons/github.svg') }}" alt="github icon"></a>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 hero-img-box">
            <div class="img-cont d-flex justify-content-center">
                <img loading="lazy" class="img-fluid" src="{{ asset('images/profile.jpg') }}"
                    alt="Developer Abiodun Samuel" title="Developer Abiodun Samuel" height="350px" width="311px">
            </div>
            <div class="p-quote text-center">
                <p>“Make it <b id="p-quote"></b>" – Kent Beck</p>
            </div>
        </div>
    </div>
    {{-- hero section --}}

    {{-- Counts Section --}}
    <section id="counts" class="counts">
        <div class="container">
            <div class="row d-flex align-items-stretch">
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:javascript"></span>
                        <div class="counter">50</div>
                        <p>Javascript</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:react"></span>
                        <div class="counter">50</div>
                        <p>React</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="40" data-height="32" data-icon="logos:nodejs"></span>
                        <div class="counter">10</div>
                        <p>NodeJs</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:php"></span>
                        <div class="counter">50</div>
                        <p>PHP</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:laravel"></span>
                        <div class="counter">50</div>
                        <p>Laravel</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:codeigniter"></span>
                        <div class="counter">50</div>
                        <p>CodeIgniter</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Counts Section --}}

    {{-- about me section --}}
    <div class="header">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center">About Me</h2>
                <p>
                    I'm a Performance-driven and Self-motivated Developer with extensive experience designing,
                    developing,
                    and
                    deploying web applications with strong attention to details and passion for learning new things.
                </p>
                <p class="span">Abiodun Samuel O.</p>
            </div>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <h4> I'm a Versatile Web Developer with vast knowledge and proficiency in array of Front-End,
                        Back-End Languages, Frameworks and Technologies like;
                    </h4>
                    <hr>
                    {{-- front end --}}
                    <div class="skill-container">
                        <div class="skill-box">
                            <span class="iconify" data-icon="cib:adobe-photoshop"></span>
                            <p>Photoshop</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="ci:adobe-xd"></span>
                            <p>Adobe Xd</p>
                        </div>
                        {{-- <div class="skill-box">
                                <span class="iconify" data-icon="bx:bxl-figma"></span>
                                <p>Figma</p>
                            </div> --}}
                        <div class="skill-box">
                            <span class="iconify" data-icon="cib:html5"></span>
                            <p>HTML5</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="cib:css3"></span>
                            <p>CSS3</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="akar-icons:bootstrap-fill"></span>
                            <p>Bootstrap</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="file-icons:tailwind"></span>
                            <p>Tailwind</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="cib:javascript"></span>
                            <p>JavaScript</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="akar-icons:jquery-fill"></span>
                            <p>JQuery</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="teenyicons:react-outline"></span>
                            <p>React</p>
                        </div>
                    </div>
                    <hr>
                    {{-- backends --}}
                    <div class="skill-container">
                        {{-- backend --}}
                        <div class="skill-box">
                            <span class="iconify" data-icon="akar-icons:php-fill"></span>
                            <p>PHP</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="simple-icons:laravel"></span>
                            <p>Laravel</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="whh:codeigniter"></span>
                            <p>CodeIgniter</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="fontisto:nodejs"></span>
                            <p>NodeJs</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="cib:mysql"></span>
                            <p>MySQL</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="cib:mongodb"></span>
                            <p>MongoDB</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="bi:github"></span>
                            <p>Git/GitHub</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="simple-icons:packagist"></span>
                            <p>Packagists</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="cib:npm"></span>
                            <p>NPM</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="eos-icons:api-outlined"></span>
                            <p>API</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="carbon:http"></span>
                            <p>HTTP</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="ic:round-cached"></span>
                            <p>Cache</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="healthicons:health-data-security-outline"></span>
                            <p>Security</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="clarity:rack-server-solid-badged"></span>
                            <p>Server</p>
                        </div>
                        <div class="skill-box">
                            <span class="iconify" data-icon="mdi:ab-testing"></span>
                            <p>Testing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about me section --}}

    {{-- portfolio section --}}
    <div id="portfolio-header" class="header">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-8">
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

    <section id="portfolio">
        <div class="container">
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
                {{-- 4 web apps and 2 web designs web app = filter app && web designs = filter card --}}
                <div class="row portfolio-container" data-aos="fade-up">
                    {{-- Web Apps --}}
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app p-3">
                        <div class="card">
                            <div class="state">
                                <img loading="lazy" src="{{ asset('images/icons/live.svg') }}" class="img-fluid"
                                    alt="" height="45px" width="45px">
                            </div>
                            <img loading="lazy" src="{{ asset('images/portfolio/portfolio-1.jpg') }}"
                                class="card-img-top" alt="project image" title="project image">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                                <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem, nobis?
                                </p>
                                <div class="tech-stack">
                                    <span class="iconify" data-icon="cib:mysql"></span>
                                    <span class="iconify" data-icon="cib:mongodb"></span>
                                    <span class="iconify" data-icon="bi:github"></span>
                                </div>
                                <div class="mt-3 text-right">
                                    <a href="#" class="" target="_blank">
                                        <span class="iconify" data-icon="emojione-monotone:open-book"></span>
                                    </a>
                                    <a href="#" class="" target="_blank">
                                        <span class="iconify" data-icon="carbon:view-filled"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Web Designs  filter-card --}}
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card p-3">
                        <div class="card">
                            <div class="state">
                                <img loading="lazy" src="{{ asset('images/icons/live.svg') }}" class="img-fluid"
                                    alt="" height="45px" width="45px">
                            </div>
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                                <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem, nobis?
                                </p>
                                <div class="tech-stack">
                                    <span class="iconify" data-icon="cib:mysql"></span>
                                    <span class="iconify" data-icon="cib:mongodb"></span>
                                    <span class="iconify" data-icon="bi:github"></span>
                                </div>
                                <div class="mt-3 text-right">
                                    <a href="#" class="" target="_blank">
                                        <span class="iconify" data-icon="emojione-monotone:open-book"></span>
                                    </a>
                                    <a href="#" class="" target="_blank">
                                        <span class="iconify" data-icon="carbon:view-filled"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- portfolio section --}}

    {{-- contact section --}}
    <div class="header">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center">Contact Me</h2>
                <p> Do you have an enquiry? Do you have a project that requires my expertise? - I'm available. Feel
                    free to
                    drop your message or give me a call, Cheers🥂
                </p>
            </div>
        </div>
    </div>
    <section id="contact">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-7 contact-form py-3 mt-3 align-items-stretch">
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 col-sm-6 my-1">
                            <div class="contact-icons shadow-sm text-center p-3">
                                <img loading="lazy" class="no-img img-fluid" src="{{ asset('images/icons/phone.svg') }}"
                                    alt="Phone call"> <br>
                                <a href="tel:+2348164650987"><span>+234 8164650987</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 my-1">
                            <div class="contact-icons shadow-sm text-center p-3">
                                <img loading="lazy" class="no-img img-fluid" src="{{ asset('images/icons/email.svg') }}"
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
                                <input class="w-100 shadow-sm" type="text" name="subject" placeholder="Subject"
                                    id="subject" value="{{ old('subject') }}" maxlength="3">
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
    {{-- contact section --}}
    {{-- </main> --}}
@endsection
@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/CSSRulePlugin.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
