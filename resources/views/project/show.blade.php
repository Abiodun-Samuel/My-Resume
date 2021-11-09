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
                <div class="col-lg-12">
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


            <div class="row">
                <div class="col-lg-6 col-md-6 my-4 d-flex align-items-stretch">
                    <div class="project-info" data-aos="fade-up" data-aos-delay="100">
                        <h3>Project Information</h3>

                        <ul>
                            <li><strong>Category</strong>: {{ $project->project_category }}</li>
                            <li><strong>Client</strong>: {{ $project->title }}</li>
                            <li><strong>Tech Stack</strong>:
                                @foreach (json_decode($project->tech_stack) as $tech_stack)
                                    <span class="mr-1"> {!! tech_value($tech_stack) !!} </span>
                                @endforeach
                            </li>
                            {{-- <li><strong>Project date</strong>: {{ $project->created_at }}</li> --}}
                            <li><strong>Project URL</strong>: <a target="_blank"
                                    href="{{ $project->project_link }}">{{ $project->project_link }}</a></li>
                            <li><strong>Github URL</strong>: <a target="_blank"
                                    href="{{ $project->github_link }}">{{ $project->github_link }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 my-4 d-flex align-items-stretch">
                    <div class="project-description" data-aos="fade-up" data-aos-delay="200">
                        <h3>Project Description</h2>
                        <p>
                            {{ $project->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
