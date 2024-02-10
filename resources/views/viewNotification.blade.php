<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sbidu - Bid And Auction HTML Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/favicon-logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/5f8f97e3fd.js" crossorigin="anonymous"></script>
</head>

<body>

    <section id="loader">
        <div class="img-loader">
        </div>
    </section>

    @include('layouts.partials.navbar')
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
                        Auction Ends Notification
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
                    <div class="row">
                        <div class="col-lg-6" style="display:flex; justify-content: left; align-items: center">
                            <img src="{{ asset($auction->subCategory->photo) }}" alt="sub-category photo"
                                width="80%" />
                        </div>
                        <div class="col-lg-6">
                            <div
                                style="padding:2% 6%; align-items: center; box-shadow:3px 3px 3px 3px #111111; background-color: whitesmoke;">
                                <div style="display: flex; justify-content: space-between;">
                                    <div class="auction-item">
                                        <div class="auction-content" style="padding-top:10%">
                                            <h2>{{ $auction->subCategory->name }}</h2>
                                            <div class="bid d-flex justify-content-between" style="font-size:20px">

                                                <div class="buy-now-price d-flex">
                                                    <i class="flaticon-money"></i>
                                                    <p class="d-flex flex-column">last Price
                                                        <span>{{ $auction->company_price }}</span>
                                                    </p>
                                                </div>
                                                <div class="buy-now-price d-flex">
                                                    <i class="flaticon-hammer"></i>
                                                    <p class="d-flex flex-column">status
                                                        <span>{{ $auction->status }}</span>
                                                    </p>
                                                </div>
                                            </div><br>
                                            <div>
                                                @if ($auction->company_id == null)
                                                    <p class="d-flex flex-column">
                                                        Sorry, there is no bids for this auction
                                                    </p>
                                                @else
                                                    @if ($auction->payment_Status == 0)
                                                        <a href="{{ route('test.checkout', $auction->id) }}">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-lg btn-block text-light">Payment</button>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('order_details', $auction->id) }}">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-lg btn-block text-light">The
                                                                payment was made</button>
                                                        </a>
                                                        {{-- <p class="btn btn-primary btn-lg btn-block text-light">The payment was made</p> --}}
                                                    @endif
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
