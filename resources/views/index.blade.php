@extends('layouts.app')

@section('content')
    {{-- hero section --}}
    <div id="hero">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="hero-text mt-1 mb-5">
                        <p class="hello">Hi There 👋,</p>
                        <h1> I'm <span>Samuel</span></h1>
                        <h2>Full Stack Web Developer.</h2>
                        <p class="description">i-Design, i-Develop Innovative Web Solutions for Individuals, Organizations and Companies.
                        </p>
                    </div>

                    <div class="hero-btn my-4">
                        <a target="_blank" href="{{ route('project.index') }}">Projects</a>
                    </div>

                    <div class="thim-click-to-bottom mt-5 d-flex justify-content-center align-items-center">
                        <a href="#about" class="scroll d-flex justify-content-center align-items-center">
                            <img loading="lazy" class='no-img' src="{{ asset('images/icons/down-arrow.png') }}" alt="">
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
    <section id="counts" class="counts">
        <div class="container">
            <div class="row d-flex align-items-stretch">
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <img loading="lazy" src="{{ asset('images/icons/javascript.svg') }}" alt="javascript icon">
                        <div class="counter">
                            {{ $projects->where('project_category', 'Javascript')->count() }}
                        </div>
                        <p>Javascript</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <img loading="lazy" src="{{ asset('images/icons/react.svg') }}" alt="react icon">
                        <div class="counter">
                            {{ $projects->where('project_category', 'React')->count() }}
                        </div>
                        <p>React</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <img loading="lazy" src="{{ asset('images/icons/nodejs.svg') }}" alt="nodejs icon">
                        <div class="counter">
                            {{ $projects->where('project_category', 'NodeJs')->count() }}
                        </div>
                        <p>NodeJs</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <img loading="lazy" src="{{ asset('images/icons/mongodb.svg') }}" alt="nodejs icon">
                        {{-- <img loading="lazy" src="{{ asset('images/icons/expressjs.svg') }}" alt="nodejs icon"> --}}
                        <img loading="lazy" src="{{ asset('images/icons/react.svg') }}" alt="nodejs icon">
                        <img loading="lazy" src="{{ asset('images/icons/nodejs.svg') }}" alt="nodejs icon">
                        <div class="counter">
                            {{ $projects->where('project_category', 'MERN')->count() }}
                        </div>
                        <p>M.E.R.N</p>
                    </div>
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
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <img loading="lazy" src="{{ asset('images/icons/laravel.svg') }}" alt="laravel icon">

                        <div class="counter">
                            {{ $projects->where('project_category', 'Laravel')->count() }}
                        </div>
                        <p>Laravel</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <img loading="lazy" src="{{ asset('images/icons/codeigniter.svg') }}" alt="codeigniter icon">

                        <div class="counter">
                            {{ $projects->where('project_category', 'CodeIgniter')->count() }}
                        </div>
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
                <div class="col-lg-5 my-2 d-flex justify-content-center">

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

                        <a title="Download Resume" href="{{ asset('images/resume/Abiodun Samuel CV.pdf') }}"
                            target="_blank" download>
                            <img class="no-img resume" loading="lazy"
                                src="{{ asset('images/icons/download-file.svg') }}" alt="download resume">
                        </a>
                    </div>

                    <div class="about-img">
                        <img loading="lazy" class="img-fluid" src="{{ asset('images/profile.jpg') }}"
                            alt="Developer Abiodun Samuel" title="Developer Abiodun Samuel" width="311px" height="350px">
                    </div>
                </div>
                <div class="col-lg-7 my-2">
                    <div class="about-text">
                        <h4>My Work Ethics</h4>
                        <ul>
                            <li>
                                I write high quality, well-documented, Front-end/Back-end codes with an emphasis on
                                efficiency, ease of maintenance
                                and compatibility, engaging the best coding practices.
                            </li>
                            <li>
                                I'm quite familiar with GitHub, and Git flow methodology also with
                                in-depth understanding of the entire web development processes (requirements, design,
                                development, QA, deployment, testing, and maintenance).
                            </li>
                            <li> I'm adept at translating user and business needs into functional frontend design and highly
                                scalable backend systems using JavaScript (ReactJS), NodeJs, PHP, HTML, CSS and other
                                relevent technologies. </li>
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
            <div class="col-lg-8">
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
                    <div class="col-lg-4 col-md-6 col-sm-6 my-4 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="{{ $key * 100 }}">
                        <div class="card">
                            <div class="state">
                                <img loading="lazy" src="{{ asset('images/icons/' . $project->state . '.svg') }}"
                                    class="img-fluid" alt=" {{ $project->state }} project"
                                    title="{{ $project->state }} project" height="45px" width="45px">
                            </div>
                            <img loading="lazy"
                                src="{{ asset('storage/images/projects/' . $project->project_category . '/' . $project->title . '/' . $project->main_image) }}"
                                class="img-fluid profile-img bg-secondary" alt="{{ $project->title }}"
                                title="{{ $project->title }}" height="226px" width="auto">
                            <div class="card-body">
                                <h5 class="card-title"><a target="_blank"
                                        href="{{ route('project.show', $project->slug) }}">{{ $project->title }}</a>
                                </h5>
                                <p class="card-text">{{ $project->description }}</p>
                                {{-- <div class="tech-stack">
                                    @foreach (json_decode($project->tech_stack) as $tech_stack)
                                        {!! tech_value($tech_stack) !!}
                                    @endforeach
                                </div> --}}
                                <div class="mt-3 text-right project_btn">
                                    <a href="{{ $project->github_link }}" target="_blank">
                                        <span class="iconify" data-icon="bi:github"></span>
                                    </a>
                                    <a href="{{ route('project.show', $project->slug) }}" target="_blank">
                                        <span class="iconify" data-icon="emojione-monotone:open-book"></span>
                                    </a>
                                    <a href="{{ $project->project_link }}" target="_blank">
                                        <span class="iconify" data-icon="carbon:view-filled"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                <div class="header-link text-center">
                    <a target="_blank" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </div>
    {{-- contact section --}}

@endsection
@push('scripts')
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script> --}}
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/CSSRulePlugin.min.js"></script> --}}

@endpush
