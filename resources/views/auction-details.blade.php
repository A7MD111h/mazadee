<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sbidu - Bid And Auction HTML Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon-logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/5f8f97e3fd.js" crossorigin="anonymous"></script>
</head>

<body>

    <section id="loader">
        <div class="img-loader">
        </div>
    </section>

    @include('layouts.partials.navbar')
    {{-- <header> --}}
        {{-- <div class="header-top">
            <div class="container">
                <div class="content d-flex justify-content-between align-items-center">
                    <ul class="d-flex">
                        <li>
                            <a href="#" class="mr-3">
                                <i class="fas fa-phone-alt"></i>
                                <span>Customer Support</span>
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">En</option>
                                <option value="az">Az</option>
                                <option value="ru">Ru</option>
                            </select>
                        </li>
                    </ul>
                    <div class="my-account d-flex align-items-center">
                        <a href="sing-in" class="login">Login</a>
                        <a href="my-account-bids" class="user">
                            <img src="/img/R-removebg-preview.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Navbar -->
        {{-- <div class="header-bottom" style="background-image: url(/img/OIP.jpg)">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="logo">
                        <a class="navbar-brand" href="/">
                            <img src="/img/logo.png" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars navbar-toggler-icon"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="auction">Auction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about-us">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">Contact</a>
                            </li>
                        </ul>

                    </div>
                    <div class="search-nav">
                        <span class="icon">
                            <i class="fas fa-search"></i>
                        </span>
                        <form class="search-form my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search for brand, model...."
                                aria-label="Search">
                            <button class="btn-search my-2 my-sm-0" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div> --}}
        <!-- End Navbar -->
    {{-- </header> --}}

    <main>
        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="/" style="color: black;">
                            Home
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('subCategory', $subCategory->category_id) }}" style="color: black;">
                            {{ $subCategory->category->name }}
                            <i class="flaticon-right-arrow" style="color: #000"></i>
                        </a>
                    </li>
                    <li>
                        <a href="auction-details" style="color: black;"></a>
                        {{ $subCategory->name }}
                        </a>
                    </li>
                </ul>
            </div>
            {{-- <div class="bg-image" style="background-image: url(/img/OIP.jpg);"> --}}

            </div>
        </section>
        <!-- End Breadcrumb -->
        <section id="details" class="mb-5" style="background-image: url(/img/OIP.jpg);background-size: cover">
            <div class="container"><br>
                <h1 style="text-align: center;">Auction Details</h1>


                <div class="details-bid" style="padding-bottom:5%">
                    <div class="row" >
                        <div class="col-lg-6"  style="display:flex; justify-content: left; align-items: center">
                            <img src="{{ asset($subCategory->photo) }}" alt="sub-category photo" width="80%" />
                        </div>
                        <div class="col-lg-6">

                            <form action="{{ url('createAuction') }}" method="post"
                                style="padding:2% 6%; align-items: center; box-shadow:3px 3px 3px 3px #111111; background-color: whitesmoke;">
                                @csrf
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
                                <br>
                                <div style="display: flex; justify-content: space-between;">
                                    <div class="form-group" style="width:48%">
                                        <label for="exampleFormControlSelect1"
                                            style="color: black; font-size: larger;font-weight: bold;"> Category
                                        </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $subCategory->category->name }}" name="category" readonly>
                                        @error('category')
                                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group" style="width:48%">
                                        <label for="exampleFormControlSelect1"
                                            style="color: black; font-size: larger;font-weight: bold;">Sub-Category
                                        </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $subCategory->name }}" name="name" readonly>
                                        @error('name')
                                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"
                                        style="color: black; font-size: larger;font-weight: bold;"> Quality </label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="quality"
                                        value="{{ old('quality') }}">
                                        <option value="Quality" selected disabled>Select Quality</option>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                    @error('quality')
                                        <div class="alert alert-danger" role="alert" style="width: 100%">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"
                                        style="color: black;font-size: larger;font-weight: bold;"> Budjet </label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Budjet.." name="budjet" step="any"
                                        value="{{ old('budjet') }}">
                                    @error('budjet')
                                        <div class="alert alert-danger" role="alert" style="width: 100%">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"
                                        style="color: black;font-size: larger;font-weight: bold;"> City </label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="city"
                                        value="{{ old('city') }}">
                                        <option value="City" selected disabled>Select City</option>
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
                                    @error('city')
                                        <div class="alert alert-danger" role="alert" style="width: 100%">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1"
                                        style="color: black;font-size: larger;font-weight: bold;">Quantity</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Number.." name="quantity" min="1"
                                        value="{{ old('quantity') }}">
                                    @error('quantity')
                                        <div class="alert alert-danger" role="alert" style="width: 100%">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"
                                        style="color: black;font-size: larger;font-weight: bold;">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description.."
                                        name="description" value="{{ old('description') }}"></textarea>
                                    @error('description')
                                        <div class="alert alert-danger" role="alert" style="width: 100%">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <button class="btn btn-primary btn-lg btn-block text-light" type="submit">Start
                                        Auction </button>
                                </div><br>
                            </form>

                        </div>
                        
                    </div>
                </div>
            </div>


        </section>

    </main>

    <footer style="background-image: url(/img/OIP.jpg);">


        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="item">
                            <h4>
                                Auction Categories
                            </h4>
                            <ul>
                                <li>
                                    <a href="#">Ending Now</a>
                                </li>
                                <li>
                                    <a href="#">Vehicles</a>
                                </li>
                                <li>
                                    <a href="#">Watches</a>
                                </li>
                                <li>
                                    <a href="#">Electronics</a>
                                </li>
                                <li>
                                    <a href="#">Real Estate </a>
                                </li>
                                <li>
                                    <a href="#">Jewelry</a>
                                </li>
                                <li>
                                    <a href="#">Art</a>
                                </li>
                                <li>
                                    <a href="#">Sports & Outdoor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item">
                            <h4>
                                About Us
                            </h4>
                            <ul>
                                <li>
                                    <a href="#">About Sbidu</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Affiliates</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                                <li>
                                    <a href="#">Press</a>
                                </li>
                                <li>
                                    <a href="#">Our blog</a>
                                </li>
                                <li>
                                    <a href="#">Collectors' portal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item">
                            <h4>
                                We're Here to Help
                            </h4>
                            <ul>
                                <li>
                                    <a href="#">Your Account</a>
                                </li>
                                <li>
                                    <a href="#">Safe and Secure</a>
                                </li>
                                <li>
                                    <a href="#">Shipping Information</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Help & FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item">
                            <h4>
                                Follow Us
                            </h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-phone-alt"></i>
                                        (646) 663-4575
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-blender-phone"></i>
                                        (646) 968-0608
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-envelope-open-text"></i>
                                        help@engotheme.com
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-location-arrow"></i>
                                        1201 Broadway Suite
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <img src="/img/logo.png" width="20%" class="logo" alt="">

                </div>
            </div>
        </div>

    </footer>

    <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="/js/jquery.countTo.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
