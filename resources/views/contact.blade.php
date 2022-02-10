@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Contact Page</h2>
                        <ol>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            {{-- <li><a href="{{ route('project.index') }}">Projects</a></li> --}}
                            <li>{{ $innerTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

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
                            {!! RecaptchaV3::field('contact-us') !!}
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
