<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sbidu - Bid And Auction HTML Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/favicon-logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/5f8f97e3fd.js" crossorigin="anonymous"></script>
</head>

<body>

    <section id="loader">
        <div class="img-loader">
        </div>
    </section>

        {{--  navbar  --}}
        @include('layouts.partials.navbar')


    <main>
        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">
                            Home
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </li>
                    <li>
                        {{-- <a href="auction" style="color: black;"></a> --}}
                        {{$category->name}}
                        
                    </li>
                </ul>
            </div>
            {{-- <div class="bg-image"  style="background-image: url(/img/OIP.jpg);"> --}}

            </div>
        </section>
        <!-- End Breadcrumb -->
        <!-- Featured Auctions -->
        <section id="featured-auctions"  style="background-image: url(/img/OIP.jpg);background-size: cover">
            <div class="container">
                <div class="row" >
                    <div class="col-lg-12">
                        <div class="title">
                            <h2 style="color:#000">Bid On These Featured Auctions! </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($subCategories as $subCategory )
                    <div class="col-lg-4">
                        <div class="auction-item">
                            <div class="image">
                                <a href="{{url ('auction-details' , $subCategory->id)}}">
                                    <img src="{{ asset('uploads/'.$subCategory->photo) }}" width="5%" height="70%" alt="">
                                </a>
                            </div>
                            <div class="auction-content">
                                <h5>{{$subCategory->name}}</h5>
                            </div>
                            <div class="button text-center">
                                <a href="{{url ('auction-details' , $subCategory->id)}}">Submit A Bid</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4">
                        <div class="auction-item">
                            <div class="image">
                                <a href="#">
                                    <img src="/img/s-l500-removebg-preview.png" width="5%" height="70%" alt="">
                                </a>
                                
                            </div>
                            <div class="auction-content">
                                <h5>Car Screen</h5></div>
                               
                            <div class="button text-center">
                                <a href="auction-details">Submit A Bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="auction-item">
                            <div class="image">
                                <a href="#">
                                    <img src="/img/61peYAD2-bL._AC_SL1500_-removebg-preview.png" width="5%" height="70%" alt="">
                                </a>
                               
                            </div>
                            <div class="auction-content">
                                <h5>Car Engine Oil</h5>
                           
                            </div>
                          
                            <div class="button text-center">
                                <a href="auction-details">Submit A Bid</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- End Featured Auctions -->
        <!-- Product Auction -->
       
        <!-- End Product Auction -->
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
                    <img src="/img/logo.png" class="logo" alt="">
                    
                   
                </div>
            </div>
        </div>
        
    </footer>

    <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>