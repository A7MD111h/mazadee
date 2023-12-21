@extends('layouts.auth-master')

@section('content')
    {{-- <form method="post" action="{{ route('login.perform') }}">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
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

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
        @include('auth.partials.copy')
    </form> --}}
    <main>
        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/')}}">
                            Home
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/login')}}">
                            Sing In
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Breadcrumb -->
        <!-- Login -->
        <section id="login">
            <div class="container">
                <div class="account d-flex">
                    <div class="left-side">
                    <img class="left-img" src="/img/1.jpg" alt="">

                        <div class="header text-center">
                            <h1>HI, THERE</h1>
                            <p>You can log in to your MAZADe account here.</p>
                        </div>
                        <form method="post" action="{{ route('login.perform') }}">
                            @csrf
                            @include('layouts.partials.messages')
                            <div class="form-group">
                                <label for="email">
                                    <i class="far fa-envelope"></i>
                                </label>
                                <input id="email"  name="username" value="{{ old('username') }}" class="form-control" type="text" placeholder="Email Address or User Name" required="required" autofocus>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    <i class="fas fa-lock"></i>
                                </label>
                                <input id="password" class="form-control"  type="password"  name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                <span class="show-password"><i class="fas fa-eye"></i></span>
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <a href="#">Forgot Password?</a>
                            </div>
                            <div class="form-group mb-0 mt-4">
                                <button type="submit">LOG IN</button>
                            </div>
                        </form>
                    </div>
                    <div class="right-side">
                        <img class="right-img" src="/img/1.jpg" alt="" width="100%">
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