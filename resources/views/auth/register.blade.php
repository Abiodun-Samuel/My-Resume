@extends('layouts.app')

@section('content')
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6">
                    <div class="auth-card">
                        <h3>Register</h3>
                        <form class="mt-1" method="POST" action="{{ route('register') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            @if (session('status'))
                                <div class="alert alert-danger">
                                    <p>{{ session('status') }}</p>
                                </div>
                            @endif

                            @if (session('error_message'))
                                <div class="alert alert-danger">
                                    <p>{{ session('error_message') }}</p>
                                </div>
                            @endif

                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">Name*</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail*') }}</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                    autocomplete="email">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password"> {{ __('Password*') }} </label>
                                <input id="password" class="block mt-1 w-full" type="password" name="password"
                                    autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="password_confirmation"> {{ __('Confirm Password*') }} </label>
                                <input id="password_confirmation" type="password" name="password_confirmation" />
                            </div>

                            <div class="form-group">
                                <p><a class="text-danger" href="{{ route('login') }}">
                                        {{ __('Already registered? Login') }}
                                    </a></p>
                            </div>

                            <button class="mybtn">
                                {{ __('Register') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
