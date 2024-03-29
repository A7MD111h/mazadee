@extends('layouts.auth-master')

@section('content')
    
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
                        <a href="{{ url('/register')}}">
                            Sing up
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(img/hero-bg.png);">

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
                        <select id="selectType">
                            <option value="">Select Type</option>
                            <option value="1">User</option>
                            <option value="2">Company</option>
                        </select>
                        <form method="POST" action="{{ route('register.perform') }}" id="userForm" >
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
                                <input id="first-name" class="form-control" type="text" name="fname" value="{{ old('fname') }}" placeholder="first Name">
                                @if ($errors->has('fname'))
                                    <span class="text-danger text-left">{{ $errors->first('fname') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="last-name">
                                    <i class="far fa-user"></i>
                                </label>
                                <input id="last-name" class="form-control" type="text" name="lname" value="{{ old('lname') }}" placeholder="Last Name">
                                @if ($errors->has('lname'))
                                    <span class="text-danger text-left">{{ $errors->first('lname') }}</span>
                                @endif
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
                                <input id="phone" class="form-control" type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                @if ($errors->has('phone'))
                                    <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                @endif
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
                                <span id="show-confirm-password" ><i class="fas fa-eye"></i></span>
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
                        <form action="{{ route('company.register') }}" method="POST" id="companyForm" style="display: none" enctype="multipart/form-data">
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
                                    <input id="last-name" class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Company Name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                {{-- <div class="form-group">
                                    <label for="last-name">
                                        <i class="far fa-user"></i>
                                    </label>
                                    <input id="last-name" class="form-control" type="text" name="lname" value="{{ old('lname') }}" placeholder="Last Name">
                                    @if ($errors->has('lname'))
                                        <span class="text-danger text-left">{{ $errors->first('lname') }}</span>
                                    @endif
                                </div> --}}
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
                                <div class="form-group">
                                    <label for="phone">
                                        <i class="fa fa-phone"></i>
                                    </label>
                                    <input id="phone" class="form-control" type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{-- <label for="nationl_number">
                                        <i class="fa fa-phone"></i>
                                    </label> --}}
                                    <input id="phone" class="form-control" type="number" name="national_number" value="{{ old('national_number') }}" placeholder="National Number">
                                    @if ($errors->has('national_number'))
                                        <span class="text-danger text-left">{{ $errors->first('national_number') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{-- <label for="address">
                                        <i class="fa fa-phone"></i>
                                    </label> --}}
                                    <textarea class="form-control" name="address" value="{{ old('address') }}" placeholder="Address"></textarea>
                                    @if ($errors->has('address'))
                                        <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{-- <label for="city">
                                        <i class="fa fa-phone"></i>
                                    </label> --}}
                                    <select class="form-control" id="exampleFormControlSelect1" name="city"
                                        value="{{ old('city') }}">
                                        <option value="City" selected disabled>City</option>
                                        <option value="Amman">Amman</option>
                                        <option value="Ajloun">Ajloun</option>
                                        <option value="Aqaba">Aqaba</option>
                                        <option value="Balqa">Balqa</option>
                                        <option value="Irbid">Irbid</option>
                                        <option value="Jerash">Jerash</option>
                                        <option value="Karak">Karak</option>
                                        <option value="Ma'an">Ma'an</option>
                                        <option value="Madaba">Madaba</option>
                                        <option value="Mafraq">Mafraq</option>
                                        <option value="Tafilah">Tafilah</option>
                                        <option value="Zarqa">Zarqa</option>
                                    </select>
                                    @if ($errors->has('city'))
                                        <span class="text-danger text-left">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{-- <label for="category_id">
                                        <i class="fa fa-phone"></i>
                                    </label> --}}
                                    <select class="form-control" id="exampleFormControlSelect1" name="category_id"
                                        value="{{ old('category_id') }}">
                                        <option value="Category_id" selected disabled>Category</option>
                                        @foreach ($categories as $category )
                                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger text-left">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="commercial_register">
                                        <i class="fa fa-phone"></i>
                                    </label>
                                    <input type="file" class="form-control" name="commercial_register"/>
                                    @if ($errors->has('commercial_register'))
                                        <span class="text-danger text-left">{{ $errors->first('commercial_register') }}</span>
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
    <script>
        let selectType = document.getElementById('selectType');
        selectType.addEventListener('change', function() {
            if (selectType.value == 1) {
                document.getElementById('userForm').style.display = 'block';
                document.getElementById('companyForm').style.display = 'none';
            }
            if (selectType.value == 2) {
                document.getElementById('companyForm').style.display = 'block'
                document.getElementById('userForm').style.display = 'none';
            }
        })
    </script>
@endsection