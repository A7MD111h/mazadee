@extends('company.layout.master-page')

@section('content_company')

    <main>

        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="home">
                            Home
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="company-profile">
                           My Profile
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(/img/OIP.jpg)">

            </div>
        </section>
        <!-- End Breadcrumb -->
        <section id="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="user-menu">
                            <div class="user">
                                <div class="image">
                                <img src="/img/companyname.jpg" alt="">
                                    <label for="user-photo">
                                        <i class="fas fa-pencil-alt"></i>
                                    </label>
                                    <input type="file" id="user-photo" class="d-none">
                                </div>
                                <div class="content">
                                    <h4>
                                        {{ auth('companies')->user()->name }}
                                    </h4>
                                </div>
                            </div>
                            <ul class="menu">
                                <li>
                                    <a href="{{ url('/profile') }}">
                                        <i class="flaticon-hammer"></i>
                                        My Bids</a>
                                </li>
                                <li>
                                    <a href="{{ url('/company-profile') }}" class="active">
                                        <i class="flaticon-settings"></i>
                                        Company Profile </a>
                                </li>
                                <li>
                                    <a href="{{ url('/company-winning-bids') }}">
                                        <i class="flaticon-best-seller"></i>
                                        Winning Bids</a>
                                </li>
                              
                                <li>
                                    <a href="referrals">
                                        <i class="flaticon-shake-hand"></i>
                                        Referrals</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        @error('name')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('username')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('email')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('phone')
                        <div class="alert alert-danger" role="alert" style="width: 100%">
                            {{ $message }}
                        </div>
                        @enderror
                        @error('national_number')
                        <div class="alert alert-danger" role="alert" style="width: 100%">
                            {{ $message }}
                        </div>
                        @enderror
                        @error('address')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('city')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('commercial_register')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('oldPassword')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('confirm-password')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Company Details</h3>
                                        <a href="#" data-toggle="modal" data-target="#phoneEditModalCenter">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Name  
                                            </div>
                                            <div class="info-value">
                                                @if (auth('companies')->check())
                                                    {{ auth('companies')->user()->name }}
                                                @endif
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                User Name  
                                            </div>
                                            <div class="info-value">
                                                @if (auth('companies')->check())
                                                    {{ auth('companies')->user()->username }}
                                                @endif
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                E-mail 
                                            </div>
                                            <div class="info-value">
                                                @if (auth('companies')->check())
                                                    {{ auth('companies')->user()->email }}
                                                @endif
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Phone 
                                            </div>
                                            <div class="info-value">
                                                {{ auth('companies')->user()->phone }}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Address 
                                            </div>
                                            <div class="info-value">
                                                    {{ auth('companies')->user()->city . '/' .auth('companies')->user()->address }}                                                
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                National N
                                            </div>
                                            <div class="info-value">
                                                {{ auth('companies')->user()->national_number }}
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            
                            <form action="{{ route('company-profile-edit') }}" method="post">
                                @csrf
                                <div class="modal fade" id="phoneEditModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="name">name</label>
                                                <input type="text" id="name" name="name"
                                                    value="{{ auth('companies')->user()->name }}" /><br />
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="username">username</label>
                                                <input type="text" id="username" name="username"
                                                    value="{{ auth('companies')->user()->username }}" /><br />
                                            </div>
                                           
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="email">Email</label>
                                                <input type="text" id="email" name="email"
                                                    value=" {{ auth('companies')->user()->email }}" /><br />
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="phone">Phone</label>
                                                <input type="text" id="phone" name="phone"
                                                    value="{{ auth('companies')->user()->phone }}" /><br />
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="address"> Address</label>
                                                <input type="test" id="address" name="address"
                                                    value="{{ auth('companies')->user()->address }}" /><br />
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="city">city</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="city">
                                                    {{-- value="{{ auth('companies')->user()->city }}"> --}}
                                                    <option value="City" disabled>Select City</option>
                                                    <option value="Amman" {{ auth('companies')->user()->city === 'Amman' ? 'selected' : '' }}>Amman</option>
                                                    <option value="Amman" {{ auth('companies')->user()->city === 'Amman' ? 'selected' : '' }}>Amman</option>
                                                    <option value="Ajloun" {{ auth('companies')->user()->city === 'Ajloun' ? 'selected' : '' }}>Ajloun</option>
                                                    <option value="Aqaba" {{ auth('companies')->user()->city === 'Aqaba' ? 'selected' : '' }}>Aqaba</option>
                                                    <option value="Balqa"  {{ auth('companies')->user()->city === 'Balqa' ? 'selected' : '' }}>Balqa</option>
                                                    <option value="Irbid"  {{ auth('companies')->user()->city === 'Irbid' ? 'selected' : '' }}>Irbid</option>
                                                    <option value="Jerash"  {{ auth('companies')->user()->city === 'Jerash' ? 'selected' : '' }}>Jerash</option>
                                                    <option value="Karak"  {{ auth('companies')->user()->city === 'Karak' ? 'selected' : '' }}>Karak</option>
                                                    <option value="Ma'an"  {{ auth('companies')->user()->city === "Ma'an" ? 'selected' : '' }}>Ma'an</option>
                                                    <option value="Madaba"  {{ auth('companies')->user()->city === 'Madaba' ? 'selected' : '' }}>Madaba</option>
                                                    <option value="Mafraq"  {{ auth('companies')->user()->city === 'Mafraq' ? 'selected' : '' }}>Mafraq</option>
                                                    <option value="Tafilah"  {{ auth('companies')->user()->city === 'Tafilah' ? 'selected' : '' }}>Tafilah</option>
                                                    <option value="Zarqa"  {{ auth('companies')->user()->city === 'Zarqa' ? 'selected' : '' }}>Zarqa</option>
                                                </select>
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="national_number">national number</label>
                                                <input type="number" id="national_number" name="national_number"
                                                    value="{{ auth('companies')->user()->national_number }}" /><br />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Account Settings</h3>
                                        <a href="#">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Language
                                            </div>
                                            <div class="info-value">
                                                English (United States)
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Time Zone
                                            </div>
                                            <div class="info-value">
                                                (GMT-06:00) Central America
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Status  
                                            </div>
                                            <div class="info-value">
                                                <i class="fas fa-check-circle"></i>
                                                Active
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>  --}}
                            
                            {{-- <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Email Address</h3>
                                        <a href="#" data-toggle="modal"
                                            data-target="#emailAddressEditModalCenter">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Email
                                            </div>
                                            <div class="info-value">
                                                
                                                @if (auth('companies')->check())
                                                    {{ auth('companies')->user()->email }}
                                                @endif
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <form action="{{ route('company-email-edit') }}" method="post">
                                @csrf
                                <div class="modal fade" id="emailAddressEditModalCenter" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    Email Address</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="email">Email</label>
                                                <input type="text" id="email" name="email"
                                                    value="{{ $Company->email }}" /><br />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                            <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Commercial </h3>
                                        <a href="#" data-toggle="modal" data-target="#commercialEditModalCenter">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Commercial 
                                            </div>
                                            <div class="info-value">
                                                {{ auth('companies')->user()->commercial_register }}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <form action="{{ route('company-commercial-edit') }}" method="post">
                                @csrf
                                <div class="modal fade" id="commercialEditModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    Commercial </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="commercial_register">commercial :</label>
                                                <input type="file" id="commercial_register" name="commercial_register"
                                                    value="{{ auth('companies')->user()->commercial_register }}" /><br />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            
                            <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Security</h3>
                                        <a href="#" data-toggle="modal" data-target="#passwordEditModalCenter">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Password
                                            </div>
                                            <div class="info-value">
                                                ********
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <form action="{{ route('company-password-edit') }}" method="post">
                                @csrf
                                <div class="modal fade" id="passwordEditModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    Password</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%">
                                                <label for="oldPassword">Old Password  : </label>
                                                <input type="password" id="oldPassword" name="oldPassword" /><br />
                                                <label for="password">New Password  : </label>
                                                <input type="password" id="password" name="password" /><br />
                                                <label for="confirm-password">Confirm Password :</label>
                                                <input type="password" id="confirm-password"
                                                    name="confirm-password" /><br />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>   
            </div>
        </section>
    </main>
@endsection