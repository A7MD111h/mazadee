<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAZAD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon-logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/5f8f97e3fd.js" crossorigin="anonymous"></script>
</head>

<body>

    <section id="loader">
        <div class="img-loader">
        </div>
    </section>

    <header>
        <div class="header-top">
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
        </div>
        <!-- Navbar -->
        <div class="header-bottom" style="background-image: url(/img/OIP.jpg)">
            <nav class="navbar navbar-expand-lg">
                <div class="container"  >
                    <div class="logo">
                        <a class="navbar-brand" href="index">
                            <img src="/img/logo.png"  alt="logo">
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
                                <a class="nav-link" style="color: black;" href="index">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: black;" href="auction">Auction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: black;" href="about-us">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: black;" href="contact">Contact</a>
                            </li>
                        </ul>

                    </div>
                    <div class="search-nav">
                        <span class="icon">
                            <i class="fas fa-search"></i>
                        </span>
                        <form class="search-form my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search for brand, model...."
                                aria-label="Search" style="color: #bdbdbd;;">
                            <button class="btn-search my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End Navbar -->
    </header>

    <main>
        <!-- Bannar -->
        <section id="banner"  style="background-image: url(/img/OIP.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="banner-content">
                            <h5>Next Generation Auction</h5>
                            <h1>
                                Find Your
                                <span>Next Deal!</span>
                            </h1>
                            <p>Online Auction is where everyone goes to shop, sell and give, while discovering variety
                                and affordability.</p>
                            <a href="#">GET STARTED</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="/img/vglams2-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
            <div class="banner-bottom-image d-none d-lg-block">
                <img src="/img/banner-shape.png" alt="" class="img-fluid">
            </div>
        </section>
        <!-- End Banner -->
        <br><br>
        <!-- Catagory Slider -->
        <section id="catagory-slider">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h5>Browse the highlights</h5>
                    </div>
                    <div class="col-lg-12 slider">
                        <div class="owl-carousel owl-theme ">
                            <div class="item">
                                <a href="auction">
                                    <img src="/img/catagory01.png" alt="">
                                    <span>Vehicles</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="/img/catagory02.png" alt="">
                                    <span>Jewelry</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="/img/catagory03.png" alt="">
                                    <span>Watches</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="/img/catagory04.png" alt="">
                                    <span>Electronics</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="/img/catagory05.png" alt="">
                                    <span>Sports</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="/img/catagory06.png" alt="">
                                    <span>Real Estate</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="/img/catagory07.png" alt="">
                                    <span>Arts</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="/img/catagory08.png" alt="">
                                    <span>Coins</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Catagory Slider -->
        <!-- Car Auction -->
       
        <!-- End Car Auction -->
        <!-- Car Auction -->
     
        <!-- End Car Auction -->
        <!-- Register For Free -->
        <section id="register-for-free">
            <div class="container">
                <div class="content" style="background-image: url(/img/call-bg.png);">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-5 col-md-8">
                            <h2>Register For Free & Start Bidding Now!</h2>
                            <p>From cars to diamonds to iPhones, we have it all.</p>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="#">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Register For Free -->
        <!-- Watches Auction -->
      
        <!-- Emd Watches Auction -->
        <!-- Popular Auctions -->
       
        <!-- End Popular Auctions -->
        <!-- Coins & Bullion -->
      
        <!-- End Coins & Bullion -->
        <!-- Real Estate -->
      
        <!-- End Real Estate -->
        <!-- How It Works -->
        <section id="how-it-works">
            <div class="container bg">
                <div class="title">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>How It Works</h1>
                            <p>Easy 3 steps to win</p>
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
                                <p>No Credit Card Required</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="/img/3815759-removebg-preview.png" width="70%" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h3>Bid</h3>
                                <p>Bidding is free Only pay if you win</p>
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
                                <p>Fun - Excitement - Great deals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End How It Works -->
        <!-- Customer Comments  -->
       
        <!-- Customer Comments  -->
    </main>

    <footer style="background-image: url(assets/img/OIP.jpg);">
      
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>