@extends('layouts.auth-master')

@section('content')
    {{-- <form method="post" action="{{ route('register.perform') }}">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        @include('auth.partials.copy')
    </form> --}}
    <main>
        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">
                            Home
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            Sing up
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(assets/img/hero-bg.png);">

            </div>
        </section>
        <!-- End Breadcrumb -->
        <!-- Login -->
        <section id="register">
            <div class="container">
                <div class="account d-flex">
                    <div class="left-side">
                        <div class="header text-center">
                            <h1>SIGN UP</h1>
                            <p>We're happy you're here!</p>
                        </div>
                        <form method="post" action="{{ route('register.perform') }}">
                            @csrf
                            <div class="form-group">
                                <label for="first-name">
                                    <i class="far fa-user"></i>
                                </label>
                                <input id="first-name" class="form-control" type="text" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="last-name">
                                    <i class="far fa-user"></i>
                                </label>
                                <input id="last-name" class="form-control" type="text" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <i class="far fa-envelope"></i>
                                </label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required="required" autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="phone">
                                    <i class="fa fa-phone"></i>
                                </label>
                                <input id="phone" class="form-control" type="number" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    <i class="fas fa-lock"></i>
                                </label>
                                <input id="password" class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                <span class="show-password"><i class="fas fa-eye"></i></span>
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password-comfirm">
                                    <i class="fas fa-lock"></i>
                                </label>
                                <input id="password-comfirm" class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                                <span class="show-password"><i class="fas fa-eye"></i></span>
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            <div class="sign-up">
                                <p>ALREADY HAVE AN ACCOUNT? <a href="sing-in.html">LOGIN</a></p>
                                
                            </div>
                            <div class="form-group mb-0 mt-4">
                                <button type="submit">REGISTER</button>
                            </div>
                            @include('auth.partials.copy')
                        </form>
                    </div>
                    <div class="right-side">
                       <img src="/img/2.jpg" style="width: 100%;" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login -->
    </main>

    <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </div>
@endsection