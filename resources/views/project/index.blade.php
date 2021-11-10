@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Projects</h2>
                        <ol>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            {{-- <li><a href="{{ route('project.index') }}">Projects</a></li> --}}
                            <li>Projects</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    {{-- same style with index projects --}}
    <section id="portfolio">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="search d-flex align-items-stretch shadow-sm">
                        <form action="{{ route('project.search') }}" method="get">
                            <select name="query" class="w-100 category" id="search_query" onchange="this.form.submit()">
                                <option value="">Category</option>
                                <option value="NodeJs">NodeJs</option>
                                <option value="Javascript">JavaScript</option>
                                <option value="PHP">PHP</option>
                                <option value="Laravel">Laravel</option>
                                <option value="React">React</option>
                                <option value="CodeIgniter">CodeIgniter</option>
                            </select>
                        </form>
                        <form action="{{ route('project.search') }}" method="get">
                            <input type="text" class="w-100 keyword" name="query" id="search_query"
                                onchange="this.form.submit()" placeholder="Keyword">
                        </form>
                    </div>
                </div>
            </div>

            <div class="row portfolio">
                @foreach ($projects as $key => $project)
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
@endsection
