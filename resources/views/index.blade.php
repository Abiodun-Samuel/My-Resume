@extends('layouts.app')

@section('content')
    {{-- hero section --}}
    <div id="hero" class="row">
        <div class="col-lg-5 col-md-6 hero-text-box">
            <div class="hero">
                <div class="hero-text">
                    <p id="hi">Hi There 👋,</p>
                    <h1> I'm <span id="hero_name">Samuel</span>, <br> Web <b id="typed"> Developer</b>
                    </h1>
                    <p>i-Design, i-Develop Innovative Web Solutions for Individuals, Organizations and Companies.
                    </p>
                </div>

                <div class="hero-btn">
                    <a target="_blank" class="d-inline-block btn_one" href="{{ route('project.index') }}">Portfolio</a>
                    <a class="d-inline-block btn_two" href="{{ asset('images/resume/Abiodun Samuel CV.pdf') }}"
                        target="_blank" download="">Resume</a>
                </div>

                <div class="hero-icons anim">
                    <a href="https://web.facebook.com/psalmzie007">
                        <span class="iconify" data-icon="entypo-social:facebook"></span></a>
                    <a href="https://wa.link/aqutc1">
                        <span class="iconify" data-icon="akar-icons:whatsapp-fill"></span>
                    </a>
                    <a href="https://www.linkedin.com/in/samuel-abiodun-9b9a64168/">
                        <span class="iconify" data-icon="akar-icons:linkedin-fill"></span>
                    </a>
                    <a href="https://www.instagram.com/4pointerz/">
                        <span class="iconify" data-icon="akar-icons:instagram-fill"></span>
                    </a>
                    <a href="https://github.com/Abiodun-Samuel">
                        <span class="iconify" data-icon="akar-icons:github-fill"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 hero-img-box">
            <div class="img-cont d-flex justify-content-center">
                <img loading="lazy" class="img-fluid" src="{{ asset('images/profile.jpg') }}"
                    alt="Developer Abiodun Samuel" title="Developer Abiodun Samuel" height="350px" width="311px">
            </div>
            <div class="p-quote text-center">
                <p>“Make it Work, Right, Fast" – Kent Beck</p>
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
                        <div class="counter">
                            {{ $projects->where('project_category', 'Javascript')->count() }}
                        </div>
                        <p>Javascript</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:react"></span>
                        <div class="counter">
                            {{ $projects->where('project_category', 'React')->count() }}
                        </div>
                        <p>React</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="40" data-height="32" data-icon="logos:nodejs"></span>
                        <div class="counter">
                            {{ $projects->where('project_category', 'NodeJs')->count() }}
                        </div>
                        <p>NodeJs</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:php"></span>
                        <div class="counter">
                            {{ $projects->where('project_category', 'PHP')->count() }}
                        </div>
                        <p>PHP</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:laravel"></span>
                        <div class="counter">
                            {{ $projects->where('project_category', 'Laravel')->count() }}
                        </div>
                        <p>Laravel</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 xs text-center">
                    <div class="counters">
                        <span class="iconify" data-width="32" data-height="32" data-icon="logos:codeigniter"></span>
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
