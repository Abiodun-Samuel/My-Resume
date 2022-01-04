@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Blog Page</h2>
                        <ol>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blog.home') }}">Blogs</a></li>
                            <li>{{ $blog->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog">
        <div class="container-fluid mt-2">
            <div class="row">
                <div class="col-lg-8 col-md-7 my-4">
                    <div class="bg-white p-3 shadow-sm mb-3">
                        <div class="row">
                            <div class="col-lg-12 mb-3 blog_details">
                                <h4 class="blog_title mb-2">
                                    {{ $blog->title }}
                                </h4>

                                <div class="d-flex align-items-center justify-content-between blog_time my-2">
                                    <div class="d-flex align-items-center">
                                        <span class="iconify mr-1" data-icon="carbon:user-avatar"></span>
                                        <span>{{ Str::ucfirst($blog->user->name) }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="iconify mr-1" data-icon="bx:bx-category-alt"></span>
                                        <span>{{ $blog->category }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="iconify mr-1" data-icon="fluent:clock-32-regular"></span>
                                        <span>{{ $blog->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>

                                <img loading="lazy" src="{{ asset('images/backgrounds/blog-bg.jpg') }}"
                                    class="img-fluid profile-img bg-secondary" alt="{{ $blog->title }}"
                                    title="{{ $blog->title }}">

                                <div class="blog_keywords">
                                    <p class="my-2">
                                        @foreach (json_decode($blog->keywords) as $keywords)
                                            <span class="bg-secondary mr-2 my-3 text-white p-1"> {{ $keywords }}</span>
                                        @endforeach
                                    </p>
                                </div>
                                <p class="blog_body my-3">
                                    {!! $blog->body !!}
                                    {{-- {!! $blog->body !!} --}}
                                </p>

                                <div class="mt-3 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-around blog_notifications">
                                        <div class="like mx-2">
                                            <span class="iconify like_button" data-icon="ant-design:like-outlined">
                                            </span>
                                            <div class="like_count">{{ $blog->likes }}</div>
                                        </div>
                                        <div class="dislike mx-2">
                                            <span class="iconify" data-icon="ant-design:dislike-outlined"></span>
                                            <div class="dislike_count">{{ $blog->dislikes }}</div>
                                        </div>
                                        <div class="comments mx-2">
                                            <span class="iconify" data-icon="bx:bx-comment-detail"></span>
                                            <div class="comments_count">{{ $blog->comments }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 my-4">
                    <img src="{{ asset('images/backgrounds/blog-bg.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection
