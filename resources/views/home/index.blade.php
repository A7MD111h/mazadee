@extends('layouts.app-master')

@section('content')
    {{-- 
        @auth
            <h1>Dashboard</h1>
        @endauth --}}
       
        {{-- @guest
        @endguest --}}
        
    
        {{-- <main> --}}
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
                                @foreach ($categories as $category)
                                <div class="item">
                                    <a href="{{url ('subCategory', $category->id)}}">
                                        <img src="{{ asset($category->photo) }}" alt="category photo">
                                        <span>{{$category->name}}</span>
                                    </a>
                                </div>
                                    
                                @endforeach
                                {{-- <div class="item">
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
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Catagory Slider -->
            
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
            
        {{-- </main> --}}

@endsection