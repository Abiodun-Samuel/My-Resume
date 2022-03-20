@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Project Details</h2>
                        <ol>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('project.index') }}">Projects</a></li>
                            <li>{{ $project->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="project-details" class="project-details">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="project-detail-image">
                        <img src="{{ asset('storage/images/projects/' . $project->project_category . '/' . $project->title . '/' . $project->main_image) }}"
                            class="img-fluid shadow rounded" alt="{{ $project->title }}" title="{{ $project->title }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="project-info">
                        <h3>Project Details</h3>
                        <p><strong>Category</strong>: {{ $project->project_category }}</p>
                        <p><strong>Client</strong>: {{ $project->title }}</p>
                        <p><strong>Tech Stack</strong>:
                            @foreach (explode(',', $project->tech_stack) as $value)
                                <span class="d-inline-block">
                                    {{ Str::ucfirst($value) . ', ' }}</span>
                            @endforeach
                        </p>
                        <div class="project-details-link mt-3">
                            <a target="_blank" href="{{ $project->project_link }}">Project</a>
                            <a target="_blank" href="{{ $project->github_link }}">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3 pt-3">
                <div class="col-lg-12">
                    <div class="project-description" data-aos="fade-up">
                        <h3>Project Description</h3>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 my-2">
                    <div class="project-gallery">
                        @foreach (json_decode($project->images) as $key => $image)
                            <a data-aos="fade-up" data-aos-delay="{{ $key * 50 }}" class="venobox"
                                data-gall="gallery01"
                                href="{{ url('storage/images/projects/' . $project->project_category . '/' . $project->title . '/' . $image) }}">
                                <img src="{{ asset('storage/images/projects/' . $project->project_category . '/' . $project->title . '/' . $image) }}"
                                    class="img-fluid" alt="{{ $project->title }}" title="{{ $project->title }}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
