@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
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
                        <img src="public/img/vglams2-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
            <div class="banner-bottom-image d-none d-lg-block">
                <img src="public/img/banner-shape.png" alt="" class="img-fluid">
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
                                    <img src="assets/img/catagory01.png" alt="">
                                    <span>Vehicles</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/catagory02.png" alt="">
                                    <span>Jewelry</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/catagory03.png" alt="">
                                    <span>Watches</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/catagory04.png" alt="">
                                    <span>Electronics</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/catagory05.png" alt="">
                                    <span>Sports</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/catagory06.png" alt="">
                                    <span>Real Estate</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/catagory07.png" alt="">
                                    <span>Arts</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/catagory08.png" alt="">
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
                <div class="content" style="background-image: url(assets/img/call-bg.png);">
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
                                <img src="assets/img/OIP__1_-removebg-preview.png" class="img-fluid" alt="">
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
                                <img src="assets/img/3815759-removebg-preview.png" width="70%" class="img-fluid" alt="">
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
                                <img src="assets/img/how3.png" class="img-fluid" alt="">
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
                    <img src="public/img/logo.png" width="20%" class="logo" alt="">
                    <!-- <ul class="d-flex">
                        <li>
                            <img src="assets/img/paypal.png"   style="color: black;"  alt="">
                        </li>
                        <li>
                            <img src="assets/img/visa.png" alt="">
                        </li>
                        <li>
                            <img src="assets/img/discover.png" alt="">
                        </li>
                        <li>
                            <img src="assets/img/mastercard.png" alt="">
                        </li>
                    </ul> -->
                    
                </div>
            </div>
        </div>

      </footer>
        @endguest
    </div>
@endsection