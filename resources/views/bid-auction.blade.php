<base href="/public">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAZADe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/img/favicon-logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/5f8f97e3fd.js" crossorigin="anonymous"></script>
</head>

<body>

    {{-- <section id="loader">
        <div class="img-loader">
        </div>
    </section> --}}

    <header>
        <!-- Navbar -->
        <div class="header-bottom">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="logo">
                        <a class="navbar-brand" href="index.html">
                            <img src="/img/logo.png" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars navbar-toggler-icon" style="color: black;"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            @if (auth('companies')->check())
                                <p>Welcome, {{ auth('companies')->user()->name }}</p>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('home') }}" style="margin: auto;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="auction.html" style="margin: auto;">Winning Auction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile" style="margin: auto;">Your Auctions</a>
                            </li>
                            <li class="nav-item" style="margin: auto;">
                                <a href="company-profile">
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>

                            <li class="nav-item" style="margin: auto;">
                                <a href="my-account-bids.html">
                                    <i class="fa fa-comment"></i>
                                </a>
                            </li>

                            @if (auth('companies')->check())
                                <li class="nav-item" style="margin: auto;">
                                    <a href="{{ route('logout.perform') }}">
                                        <i class="fa fa-sign-out"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End Navbar -->
    </header>

    <main>

        <!-- Car Auction -->
        <section id="car-auction" style="padding-top: 20%">
            {{-- <form method="post" action="{{url('addbid')}}"> --}}
            <div class="container">
                <div class="row">
                    <div style="width:60%;margin-left:auto;margin-right:auto">
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
                    </div>
                    <div class="col-lg-12">
                        <div style="display: flex; justify-content: space-around">
                            <div>
                                <label>Category</label><br />
                                <label>Sub-Category</label><br />
                                <label>Quality</label><br />
                                <label>Budjet</label><br />
                                <label>Quantity</label><br />
                                <label>Last Price</label><br />
                                <label>Description</label><br />
                            </div>
                            <div>
                                <input type="text" value="{{ $auction->subCategory->category->name }}"
                                    readonly /><br />
                                <input type="text" value="{{ $auction->subCategory->name }}" readonly /><br />
                                <input type="text" value="{{ $auction->quality }}" readonly /><br />
                                <input type="number" value="{{ $auction->budjet }}" readonly /><br />
                                <input type="number" value="{{ $auction->quantity }}" readonly /><br />
                                @if ($auction->company_price != null)
                                    <input type="number" value="{{ $auction->company_price }}" readonly /><br />
                                @else
                                    <input type="number" value="00" readonly /><br />
                                @endif
                                <textarea readonly>{{ $auction->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div style="color:red;text-align:center" class="col-lg-12 countdown"
                        data-creation-time="{{ $auction->created_at->toIso8601String() }}"></div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/home') }}">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel </button></a>
                    <button type="submit" class="btn btn-primary" id="bidBtn">Bid</button>
                </div>
            </div>
            <form action="{{url('addbid', $auction->id)}}" method="post" id="bidForm" style="display: none">
                @csrf
                <div style="display: flex; justify-content: space-between;width:50%;margin-left:auto;margin-right:auto">
                    <div>
                        <label >Price</label>
                    </div>
                    <div>
                        <input type="text" name="company_price"/>
                    </div>
                </div>
                <div style="width:73%;margin-left:auto;margin-right:auto;text-align:right">
                    <a href="{{ url('/home') }}">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel </button></a>
                    <button type="submit" class="btn btn-primary" id="bidBtn">Bid</button>
                </div>
            </form>
            {{-- </form> --}}
        </section>

        <!-- How It Works -->
        <section id="how-it-works">
            <div class="container bg">
                <div class="title">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>How It Works</h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="/img/OIP__1_-removebg-preview.png" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h3>Sign Up</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="/img/3815759-removebg-preview.png" width="70%" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="content">
                                <h3>Bid</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="/img/how3.png" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h3>Win</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End How It Works -->

    </main>

    <footer style="background: linear-gradient(0deg, rgba(199,199,199,1) 0%, rgba(255,255,255,1) 50%)">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <img src="assets/img/logo2.png" class="logo" alt="">

                    <p>
                        © Copyright 2020 |
                        <a href="#">MAZADe</a>
                        By
                        <a href="#">Uiaxis</a>
                    </p>
                </div>
            </div>
        </div>

    </footer>

    <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var countdownElement = document.querySelector('.countdown');

            if (countdownElement) {
                var creationTime = new Date(countdownElement.dataset.creationTime);
                var targetTime = new Date(creationTime);
                targetTime.setHours(targetTime.getHours() + 24);

                function updateCountdown() {
                    var now = new Date();
                    var timeDiff = targetTime - now;

                    // Calculate remaining hours, minutes, and seconds
                    var hours = Math.floor(timeDiff / (1000 * 60 * 60));
                    var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

                    // Format and display the remaining time
                    countdownElement.innerHTML = 'Auction Ends in: ' + hours + 'h ' + minutes + 'm ' + seconds +
                        's';

                    // Update every second
                    setTimeout(updateCountdown, 1000);
                }

                // Initial call to set up the countdown
                updateCountdown();
            }
        });

        document.getElementById('bidBtn').addEventListener('click',function(){
            document.getElementById('bidForm').style.display='block';
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
