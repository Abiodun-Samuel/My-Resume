@extends('layouts.app')

@section('content')
    {{-- hero section --}}
    <div id="hero">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7" data-aos="fade-up">
                    <div class="hero-text mt-1 rounded" data-aos="fade-up" data-aos-delay="200">
                        {{-- <img loading="lazy" class="hero-one" src="{{ url('/images/icons/flower.png') }}"
                            alt="design"> --}}
                        <img loading="lazy" class="hero-two" src="{{ url('/images/icons/flower.png') }}"
                            alt="design">

                        <p class="hello">Hi There 👋,</p>
                        <h1> I'm <span>Samuel</span></h1>
                        <h2>Full Stack Web Developer.</h2>
                        <p class="description">i-Design, i-Develop Innovative Web Solutions for Individuals, Organizations
                            and Companies.
                        </p>
                    </div>

                    <div class="hero-btn my-2">
                        <a class="btn_one mr-3" title="download my resume"
                            href="{{ url('images/resume/Abiodun Samuel CV.pdf') }}" download="">Resume</a>
                        <a target="_blank" class="btn_two ml-3" href="{{ route('project.index') }}">Projects</a>
                    </div>

                    <div class="thim-click-to-bottom mt-5 d-flex justify-content-center align-items-center">
                        <a href="#about" class="scroll d-flex justify-content-center align-items-center">
                            <img loading="lazy" class='no-img' src="{{ asset('images/icons/down-arrow.png') }}"
                                alt="go to about section">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="hero" class="row">
        <div class="col-lg-7 col-md-6 hero-img-box">
            <div class="p-quote text-center">
                <p>“Make it Work, Right, Fast" – Kent Beck</p>
            </div>
        </div>
    </div> --}}
    {{-- hero section --}}

    {{-- Counts Section --}}
    <div id="counts" class="counts">
        <div class="container">
            <div class="row d-flex align-items-stretch">
                {{-- <div class="counter-skill"></div> --}}
                <div class="col-lg-2 col-md-3 my-1 col-sm-4 xs text-center">
                    <a target="_blank" href="{{ url('projects/search?query=Javascript') }}">
                        <div class="counters">
                            <img loading="lazy" src="{{ asset('images/icons/javascript.svg') }}" alt="javascript icon">
                            {{-- <div class="counter">
                            {{ $projects->where('project_category', 'Javascript')->count() }}
                        </div> --}}
                            <p>Javascript</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 my-1 col-sm-4 xs text-center">
                    <a target="_blank" href="{{ url('projects/search?query=React') }}">
                        <div class="counters">
                            <img loading="lazy" src="{{ asset('images/icons/react.svg') }}" alt="react icon">
                            {{-- <div class="counter">
                            {{ $projects->where('project_category', 'React')->count() }}
                        </div> --}}
                            <p>React</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 my-1 col-sm-4 xs text-center">
                    <a target="_blank" href="{{ url('projects/search?query=NodeJs') }}">
                        <div class="counters">
                            <img loading="lazy" src="{{ asset('images/icons/nodejs.svg') }}" alt="nodejs icon">
                            {{-- <div class="counter">
                            {{ $projects->where('project_category', 'NodeJs')->count() }}
                        </div> --}}
                            <p>NodeJs</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 my-1 col-sm-4 xs text-center">
                    <a target="_blank" href="{{ url('projects/search?query=MERN') }}">
                        <div class="counters">
                            <img loading="lazy" src="{{ asset('images/icons/mongodb.svg') }}" alt="nodejs icon">
                            {{-- <img loading="lazy" src="{{ asset('images/icons/expressjs.svg') }}" alt="nodejs icon"> --}}
                            <img loading="lazy" src="{{ asset('images/icons/react.svg') }}" alt="nodejs icon">
                            <img loading="lazy" src="{{ asset('images/icons/nodejs.svg') }}" alt="nodejs icon">
                            {{-- <div class="counter">
                            {{ $projects->where('project_category', 'MERN')->count() }}
                        </div> --}}
                            <p>M.E.R.N</p>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <img loading="lazy" src="{{ asset('images/icons/php.svg') }}" alt="php icon">
                        <div class="counter">
                            {{ $projects->where('project_category', 'PHP')->count() }}
                        </div>
                        <p>PHP</p>
                    </div>
                </div> --}}
                <div class="col-lg-2 col-md-3 my-1 col-sm-4 xs text-center">
                    <a target="_blank" href="{{ url('projects/search?query=Laravel') }}">
                        <div class="counters">
                            <img loading="lazy" src="{{ asset('images/icons/laravel.svg') }}" alt="laravel icon">
                            {{-- <div class="counter">
                            {{ $projects->where('project_category', 'Laravel')->count() }}
                        </div> --}}
                            <p>Laravel</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 my-1 col-sm-4 xs text-center">
                    <a target="_blank" href="{{ url('projects/search?query=CodeIgniter') }}">
                        <div class="counters">
                            <img loading="lazy" src="{{ asset('images/icons/codeigniter.svg') }}" alt="codeigniter icon">
                            {{-- <div class="counter">
                            {{ $projects->where('project_category', 'CodeIgniter')->count() }}
                        </div> --}}
                            <p>CodeIgniter</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Counts Section --}}

    {{-- about me section --}}
    <div class="header">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="text-center">About Me</h2>
                <p>
                    I'm a performance-driven and self-motivated developer with extensive experience designing,
                    developing,
                    and
                    deploying web applications with strong attention to details and an innate passion for learning new
                    technologies.
                </p>
            </div>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 my-2 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="50">

                    <div class="about-icons pt-4">
                        <a href="https://web.facebook.com/psalmzie007">
                            <img class="no-img" loading="lazy" src="{{ asset('images/icons/facebook.svg') }}"
                                alt="facebook">
                        </a>
                        <a href="https://wa.link/aqutc1">
                            <img class="no-img" loading="lazy" src="{{ asset('images/icons/whatsapp.svg') }}"
                                alt="whatsapp">
                        </a>
                        <a href="https://www.linkedin.com/in/samuel-abiodun-9b9a64168/">
                            <img class="no-img" loading="lazy" src="{{ asset('images/icons/linkedin.svg') }}"
                                alt="linkedin">
                        </a>

                        {{-- <a href="https://www.instagram.com/4pointerz/">
                                <img loading="lazy" src="{{ asset('images/icons/linkedin.svg') }}" alt="facebook">
                            </a> --}}
                        <a href="https://github.com/Abiodun-Samuel">
                            <img class="no-img" loading="lazy" src="{{ asset('images/icons/github.svg') }}"
                                alt="facebook">
                        </a>
                    </div>

                    <div class="about-img">
                        <img loading="lazy" class="img-fluid" src="{{ asset('images/profile.jpg') }}"
                            alt="Developer Abiodun Samuel" title="Developer Abiodun Samuel" width="311px" height="350px">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 my-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-text">
                        <h4><b>Tech Stack</b></h4>

                        {{-- <h4>My Work Ethics</h4> --}}
                        <ul>
                            <li class="mb-3">
                                <b>Front-End:</b> HTML5, CSS3, Bootstrap, TailwindCSS, Material UI, Chakra UI JavaScript,
                                TypeScript, JQuery,
                                ReactJS,
                                Redux, NextJS.
                            </li>
                            <li class="my-3">
                                <b>Back-End:</b> Firebase, GraphQL, NodeJs, ExpressJS, Docker, PHP, Laravel,
                                CodeIgniter.
                            </li>
                            <li class="my-3">
                                <b>Database:</b> MongoDB, MySQL & PostgresSQL.
                            </li>
                            {{-- <li class="mt-2">
                                I write high quality, well-documented, Front-end/Back-end codes with an emphasis on
                                efficiency, ease of maintenance
                                and compatibility, engaging the best coding practices.
                            </li> --}}
                            {{-- <li>
                                I'm quite familiar with GitHub, and Git flow methodology also with
                                in-depth understanding of the entire web development processes (requirements, design,
                                development, QA, deployment, testing, and maintenance).
                            </li> --}}
                            {{-- <li> I'm adept at translating user and business needs into functional frontend design and highly
                                scalable backend systems using JavaScript (ReactJS), NodeJs, PHP, HTML, CSS and other
                                relevent technologies. </li> --}}
                        </ul>
                    </div>

                    <div class="about-skill">
                        <img loading="lazy" src="{{ asset('images/icons/javascript.svg') }}" alt="javascript icon">
                        <img loading="lazy" src="{{ asset('images/icons/react.svg') }}" alt="react icon">
                        <img loading="lazy" src="{{ asset('images/icons/php.svg') }}" alt="php icon">
                        <img loading="lazy" src="{{ asset('images/icons/nodejs.svg') }}" alt="nodejs icon">
                        <img loading="lazy" src="{{ asset('images/icons/codeigniter.svg') }}" alt="codeigniter icon">
                        <img loading="lazy" src="{{ asset('images/icons/laravel.svg') }}" alt="laravel icon">
                        <img loading="lazy" src="{{ asset('images/icons/postgresql.svg') }}" alt="postgresql icon">
                        <img loading="lazy" src="{{ asset('images/icons/laptop.svg') }}" alt="laptop icon">
                        <img loading="lazy" src="{{ asset('images/icons/mongodb.svg') }}" alt="mongodb icon">
                        <img loading="lazy" src="{{ asset('images/icons/mysql.svg') }}" alt="mysql icon">
                        <img loading="lazy" src="{{ asset('images/icons/cloud-api.svg') }}" alt="cloud-api icon">
                        <img loading="lazy" src="{{ asset('images/icons/npm.svg') }}" alt="npm icon">
                        <img loading="lazy" src="{{ asset('images/icons/css3.svg') }}" alt="css3 icon">
                        <img loading="lazy" src="{{ asset('images/icons/html5.svg') }}" alt="html5 icon">
                        <img loading="lazy" src="{{ asset('images/icons/bootstrap.svg') }}" alt="bootstrap icon">
                        <img loading="lazy" src="{{ asset('images/icons/jquery.svg') }}" alt="jquery icon">
                        <img loading="lazy" src="{{ asset('images/icons/server.svg') }}" alt="server icon">
                        <img loading="lazy" src="{{ asset('images/icons/security.svg') }}" alt="security icon">
                        <img loading="lazy" src="{{ asset('images/icons/responsive.svg') }}" alt="responsive icon">
                        <img loading="lazy" src="{{ asset('images/icons/firebase.svg') }}" alt="firebase icon">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about me section --}}

    {{-- portfolio section --}}
    <div id="portfolio-header" class="header">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="text-center">Portfolio</h2>
                <p>
                    Here's a catalogue of my projects executed over the years as a Designer | Developer. I've
                    selected a few of them for your amusement, It's only a drop in the ocean compared to the entire
                    list. Interested to see more? Visit my porfolio page.
                </p>
                <div class="header-link text-center">
                    <a target="_blank" href="{{ route('project.index') }}">Portfolio</a>
                </div>
            </div>
        </div>
    </div>

    <section id="portfolio">
        <div class="container">
            <div class="row portfolio">
                @foreach ($portfolio as $key => $project)
                    <a target="_blank" href="{{ route('project.show', $project->slug) }}">
                        <div class="col-lg-4 col-md-6 col-sm-6 my-4 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="{{ $key * 100 }}">
                            <div class="card">
                                <div class="state">
                                    <img loading="lazy" src="{{ asset('images/icons/' . $project->state . '.svg') }}"
                                        class="img-fluid" alt=" {{ $project->state }} project"
                                        title="{{ $project->state }} project" height="35px" width="35px">
                                </div>
                                <img loading="lazy"
                                    src="{{ asset('storage/images/projects/' . $project->project_category . '/' . $project->title . '/' . $project->main_image) }}"
                                    class="img-fluid profile-img bg-secondary" alt="{{ $project->title }}"
                                    title="{{ $project->title }}" height="226px" width="auto">
                                <div class="card-body">
                                    <h5 class="card-title"><a target="_blank"
                                            href="{{ route('project.show', $project->slug) }}">{{ $project->title }}
                                            <span class="small">&#128293;</span></a>
                                    </h5>
                                    <p class="card-text">{{ $project->description }}</p>
                                    <div>
                                        @foreach (explode(',', $project->keywords) as $value)
                                            <p class="tech-stack">
                                                {{ $value }}</p>
                                        @endforeach
                                    </div>
                                    <div class="mt-1 text-right project_btn">
                                        {{-- <a href="{{ $project->github_link }}" target="_blank">
                                            <span class="iconify" data-icon="bi:github"></span>
                                        </a> --}}
                                        <a href="{{ route('project.show', $project->slug) }}" target="_blank">
                                            More &#8594;
                                        </a>
                                        {{-- <a href="{{ $project->project_link }}" target="_blank">
                                            <span class="iconify" data-icon="carbon:view-filled"></span>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- portfolio section --}}

    {{-- contact section --}}
    <div class="header">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="text-center">Contact Me</h2>
                <p> Do you have an enquiry? Do you have a project that requires my expertise? - I'm available. Feel
                    free to
                    drop your message or give me a call, Cheers🥂
                </p>
                <div class="header-link text-center">
                    <a target="_blank" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </div>
    {{-- contact section --}}

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
                                <a href="mailto:contact@abiodunsamuel.com">
                                    <span>contact@abiodunsamuel.com</span> </a>
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
                                    placeholder="Name" id="name" minlength="3">
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
                                    value="{{ old('subject') }}" minlength="3">
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-lg-12">
                                <textarea class="w-100 shadow-sm" name="message" id="message" placeholder="Message"
                                    rows="5"> {{ old('message') }} </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! RecaptchaV3::initJs() !!}
                            {!! RecaptchaV3::field('contactus') !!}
                            {{-- @error('g-recaptcha-response')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror --}}
                        </div>

                        <div class="form-row my-3">
                            <div class="col-lg-12 text-right">
                                <button class="shadow-sm contact_btn" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script> --}}
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/CSSRulePlugin.min.js"></script> --}}
@endpush
