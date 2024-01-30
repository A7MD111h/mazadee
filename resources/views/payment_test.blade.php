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
    <link rel="shortcut icon" href="assets/img/favicon-logo.png" type="image/x-icon">

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
                            <a href="/">
                                Home
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </li>
                        <li>
                        {{-- <a href="payment"> --}}
                            Payment
                            {{-- </a> --}}
                        </li>
                    </ul>
                </div>
                <div class="bg-image" style="background-image: url(/img/OIP.jpg)">
    
                </div>
            </section>
            
    
            <section id="details" class="mb-5" style="background-image: url(/img/OIP.jpg);background-size: cover">
                <div class="container">
                    <br>
                    <h1 style="text-align: center;">Auction Details</h1>
    
                    <div class="details-bid" style="padding-bottom:5%">
                        <div class="row" >
                            <div class="col-lg-6"  style="display:flex; justify-content: left; align-items: center">
                                <img src="/img/PayPal.png" width="80%"/>
                            </div>
                            <div class="col-lg-6">
                                {{-- <form  ACTION=“https://sbcheckout.payfort.com/FortAPI/paymentPage”  method="POST" style="padding:2% 6%; align-items: center; box-shadow:3px 3px 3px 3px #111111; background-color: whitesmoke;" id="paymentform"> --}}
                                <form  ACTION="{{ route("chenk_payment",$auction->id)}}"  method="POST" style="padding:2% 6%; align-items: center; box-shadow:3px 3px 3px 3px #111111; background-color: whitesmoke;" id="paymentform">
                                    @csrf
                                    <INPUT type="hidden" NAME="service_command" value="TOKENIZATION">
                                      <INPUT type="hidden" NAME="language" value="en">
                                      <INPUT type="hidden" NAME="merchant_identifier" value="NCrNhFkS">
                                      <INPUT type="hidden" NAME="access_code" value="J7me6FtwEQe1MUDJmmW2">
                                      <INPUT type="hidden" NAME="signature" value="">
                                      <INPUT type="hidden" NAME="return_url" value="{{url("/")}}">
                                      <INPUT type="hidden" NAME="merchant_reference" value="ahmed_111">
                                      
                                    
                                    <label for="cvv">card holder name:</label>
                                    <input type="text" id="card_holder_name" NAME="card_holder_name" class="form-control" placeholder="Enter CVV"><br>
       
                                    <label for="card-number">Card Number:</label>
                                    <input type="text" id="card_number" NAME="card_number" class="form-control" placeholder="Enter card number">
    
                                    <label for="expiry-date">Expiry Date:</label>
                                    <input type="text" id="expiry_date" NAME="expiry_date" class="form-control" placeholder="MM/YY">
    
                                    
    
    
                                    <label for="cvv">CVV:</label>
                                    <input type="text" id="card_security_code" NAME="card_security_code" class="form-control" placeholder="Enter CVV"><br>
                                    
                                    <div>
                                            <button class="btn btn-primary btn-lg btn-block text-light" type="submit">
                                                Pay Now
                                            </button>
                                    </div><br>
    
                                </form>
    
                                {{-- <FORM METHOD="post" ACTION=“https://sbcheckout.payfort.com/FortAPI/paymentPage" id=form1 name=form1>
                                  <INPUT type=“hidden” NAME=“service_command” value=“TOKENIZATION”>
                                  <INPUT type=“hidden” NAME=“language” value=“ ”>
                                  <INPUT type=“hidden” NAME=“merchant_identifier” value=“ ”>
                                  <INPUT type=“hidden” NAME=“access_code” value=“ ”>
                                  <INPUT type=“hidden” NAME=“signature” value=“ ”>
                                  <INPUT type=“hidden” NAME=“return_url” value=“ ”>
                                  <INPUT type=“hidden” NAME=“merchant_reference” value=“ ”>
                                  <INPUT type=“hidden” NAME=“card_number” value=“ ”>
                                  <INPUT type=“hidden” NAME=“expiry_date” value=“ ”>
                                  <INPUT type=“hidden” NAME=“card_security_code” value=“ ”>
                                  <INPUT type=“hidden” NAME=“card_holder_name” value=“ ”>
                                  <INPUT type=“submit” value=“” id=“submit2” name=“ ”>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>        
            </section>
        </main>
        <div class="col-lg-4 col-md-4 checkout-right">
            <div class="inner">
                <h4 class="mb_10">Billing Details</h4>
                <div>
                    Name: {{ $auction->company->name}}
                </div>
                
                <div>
                    Phone: {{ $auction->company->phone}}
                </div>
                <div>
                    city: {{ $auction->company->city}}
                </div>
                <div>
                    Address: {{ $auction->company->address}}
                </div>
                {{-- <div>
                    price: {{ $auction->budjet}}
                </div> --}}
                
            </div>
        </div>
        <div class="col-lg-4 col-md-4 checkout-right">
            <div class="inner">
                <h4 class="mb_10">price Details</h4>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                           
                                                           
                            <tr>
                                <td><b>Total:</b></td>
                                <td class="p_price"><b>{{ $auction->budjet}}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/js/jquery.countTo.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
