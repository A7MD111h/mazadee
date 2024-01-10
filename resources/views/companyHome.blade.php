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
                            <img src="assets/img/logo2.png" alt="logo">
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
                                <a class="nav-link" href="home" style="margin: auto;">Home</a>
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
        <section id="car-auction">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 header d-flex justify-content-between">
                        <div class="title d-flex">
                            <img src="assets/img/Mercedes-Logo.svg.png" alt="">
                            <div class="text" style="margin: auto;">
                                <h1>mercedes</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="auction-item">
                            <div class="image">
                                <a href="auction-details.html">
                                    <img src="assets/img/auction-1.jpg" alt="">
                                </a>
                                <a href="#" class="star">
                                    <i class="far fa-star"></i>
                                </a>
                                <a href="#" class="hammer">
                                    <i class="flaticon-hammer"></i>
                                </a>
                            </div>
                            <div class="auction-content">
                                <h5>2018 Hyundai Sonata</h5>
                                <div class="bid d-flex justify-content-between">
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <div class="buy-now-price d-flex">
                                        <i class="flaticon-money"></i>
                                        <p class="d-flex flex-column">Buy Now
                                            <span>$5000.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="time d-flex ">
                                <div class="countdown" data-countdown="10/31/2020 20:00"></div>
                                <span>30 Bids</span>
                            </div>
                            <div class="button text-center">
                                <a href="auction-details.html">Submit A Bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="auction-item">
                            <div class="image">
                                <a href="auction-details.html">
                                    <img src="assets/img/auction-2.jpg" alt="">
                                </a>
                                <a href="#" class="star">
                                    <i class="far fa-star"></i>
                                </a>
                                <a href="#" class="hammer">
                                    <i class="flaticon-hammer"></i>
                                </a>
                            </div>
                            <div class="auction-content">
                                <h5>2018 Nissan Versa, S</h5>
                                <div class="bid d-flex justify-content-between">
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <div class="buy-now-price d-flex">
                                        <i class="flaticon-money"></i>
                                        <p class="d-flex flex-column">Buy Now
                                            <span>$5000.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="time d-flex ">
                                <div class="countdown" data-countdown="10/31/2020 20:00"></div>
                                <span>30 Bids</span>
                            </div>
                            <div class="button text-center">
                                <a href="auction-details.html">Submit A Bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="auction-item">
                            <div class="image">
                                <a href="auction-details.html">
                                    <img src="assets/img/auction-3.jpg" alt="">
                                </a>
                                <a href="#" class="star">
                                    <i class="far fa-star"></i>
                                </a>
                                <a href="#" class="hammer">
                                    <i class="flaticon-hammer"></i>
                                </a>
                            </div>
                            <div class="auction-content">
                                <h5>2018 Honda Accord, Sport</h5>
                                <div class="bid d-flex justify-content-between">
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <div class="buy-now-price d-flex">
                                        <i class="flaticon-money"></i>
                                        <p class="d-flex flex-column">Buy Now
                                            <span>$5000.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="time d-flex ">
                                <div class="countdown" data-countdown="10/31/2020 20:00"></div>
                                <span>30 Bids</span>
                            </div>
                            <div class="button text-center">
                                <a href="auction-details.html">Submit A Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Car Auction -->



        <!-- Popular Auctions -->
        <section id="popular-auctions">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center">
                            <h1 style="color: black;">Popular Auctions</h1>
                        </div>
                    </div>
                </div>
                <div class="popular-products" style="margin-bottom: 60px;">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-1.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">Apple Macbook Pro Laptop</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-2.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">Canon EOS Rebel T6I Digital Camera</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular--auction-3.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">14k Gold Geneve Watch,24.5g</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-4.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">14K White Gold 185.60 Grams 5.95 Carats</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-5.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">2009 Toyota Prius (Medford, NY 11763)</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-6.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">.6 Gram Pure Gold Nugget</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End Popular Auctions -->


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
                                <img src="assets/img/how1.png" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h3>Sign Up</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="assets/img/how2.png" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h3>Bid</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="assets/img/how3.png" class="img-fluid" alt="">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
