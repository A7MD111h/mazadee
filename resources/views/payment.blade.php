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

    <section id="loader">
        <div class="img-loader">
        </div>
    </section>

    <header>
        @include('layouts.partials.navbar')
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
                                <a class="nav-link" href="index">Home</a>
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
                            <button class="btn-search my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div> --}}
        <!-- End Navbar -->
    </header>


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
                            <img src="img/PayPal.svg.png" width="80%"/>
                        </div>
                      <div class="col-lg-6">
                         <form  ACTION=“https://sbcheckout.payfort.com/FortAPI/paymentPage”  method="POST" style="padding:2% 6%; align-items: center; box-shadow:3px 3px 3px 3px #111111; background-color: whitesmoke;" id="paymentform">
                             @csrf
                             <INPUT type="hidden" NAME="service_command" value="TOKENIZATION">
                              <INPUT type="hidden" NAME="language" value="en">
                              <INPUT type="hidden" NAME="merchant_identifier" value="NCrNhFkS">
                              <INPUT type="hidden" NAME="access_code" value="OndtqemkL02sixAMcu9p">
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





<footer style="background-image: url(/img/OIP.jpg);">
      
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
 <script>
    (function( $ ) {
    'use strict';
    /**
     * All of the code for your checkout functionality placed here.
     * should reside in this file.
     */
    /** 
     * Sandbox Url -  /sbcheckout.payfort.com/
     * Production Url - /checkout.payfort.com/
    */
    const formElement = $( '#paymentform' ).filter( function(){
        return this.action.match(/sbcheckout.payfort.com/i);
    });
    /** 
     * MADA bins are applicable only for KSA based payments.
     * MEEZA bins are applicable only for Egypt based payments.
     * */
    const bins = {
        mada : '446404|440795|440647|421141|474491|588845|968208|457997|457865|468540|468541|468542|468543|417633|446393|636120|968201|410621|409201|403024|458456|462220|968205|455708|484783|588848|455036|968203|486094|486095|486096|504300|440533|489318|489319|445564|968211|410685|406996|432328|428671|428672|428673|968206|446672|543357|434107|407197|407395|42689700|412565|431361|604906|521076|588850|968202|529415|535825|543085|524130|554180|549760|968209|524514|529741|537767|535989|536023|513213|442463|520058|558563|605141|968204|422817|422818|422819|410834|428331|483010|483011|483012|589206|968207|406136|419593|439954|407520|530060|531196|420132|242030|22402030',
        meeza : '507803[0-6][0-9]|507808[3-9][0-9]|507809[0-9][0-9]|507810[0-2][0-9]',
    }
    const apsPaymentErrors = {
        invalid_card: 'Invalid Card',
        invalid_card_length: 'Invalid Card Length',
        card_empty: 'Card Number Empty',
        invalid_card_holder_name: 'Invalid Card Holder Name',
        invalid_card_cvv: 'Invalid Card CVV',
        invalid_expiry_date: 'Invalid Expiry Date',
        invalid_expiry_year : 'Invalid Expiry Year. Expected as YYMM',
        invalid_expiry_month : 'Invalid Expiry Month. Expected as YYMM'
    };
    const cardNumberSelector    = '[name=\'card_number\']';
    const cardHolderSelector    = '[name=\'card_holder_name\']';
    const expirySelector        = '[name=\'expiry_date\']';
    //Validation control
    let APSValidation = {
        validateCard: function (card_number) {
            let card_type = "";
            let card_validity = true;
            let message = '';
            let card_length = 0;
            if (card_number) {
                card_number = card_number.replace(/ /g, '').replace(/-/g, '');
                // Visa
                let visa_regex = new RegExp('^4[0-9]{0,15}$');
                // MasterCard
                let mastercard_regex = new RegExp('^5$|^5[0-5][0-9]{0,16}$');
                // American Express
                let amex_regex = new RegExp('^3$|^3[47][0-9]{0,13}$');
                //mada
                let mada_regex = new RegExp('^' + bins.mada);
                //meeza
                let meeza_regex = new RegExp(bins.meeza, 'gm');
                if (card_number.match(mada_regex)) {
                    card_type = 'mada';
                    card_length = 16;
                } else if (card_number.match(meeza_regex)) {
                    card_type = 'meeza';
                    card_length = 19;
                } else if (card_number.match(visa_regex)) {
                    card_type = 'visa';
                    card_length = 16;
                } else if (card_number.match(mastercard_regex)) {
                    card_type = 'mastercard';
                    card_length = 16;
                } else if (card_number.match(amex_regex)) {
                    card_type = 'amex';
                    card_length = 15;
                } else {
                    card_validity = false;
                    message = apsPaymentErrors.invalid_card;
                }
                if (card_number.length < 15) {
                    card_validity = false;
                    message = apsPaymentErrors.invalid_card_length;
                } else {
                    let cardValidByAlgorithm = APSValidation.validateCardNumber(card_number);
                    if (!cardValidByAlgorithm) {
                        card_validity = false;
                        message = apsPaymentErrors.invalid_card;
                    }
                }
            } else {
                message = apsPaymentErrors.card_empty;
                card_validity = false;
            }
            return {
                card_type,
                validity: card_validity,
                msg: message,
                card_length
            }
        },
        validateCardNumberByAlgorithm : function (card_number){
            let checksum = 0; // running checksum total
            let j = 1; // takes value of 1 or 2
            // Process each digit one by one starting from the last
            for (let i = card_number.length - 1; i >= 0; i--) {
                let calc = 0;
                // Extract the next digit and multiply by 1 or 2 on alternative digits.
                calc = Number(card_number.charAt(i)) * j;
                // If the result is in two digits add 1 to the checksum total
                if (calc > 9) {
                    checksum = checksum + 1;
                    calc = calc - 10;
                }
                // Add the units element to the checksum total
                checksum = checksum + calc;
                // Switch the value of j
                if (j === 1) {
                    j = 2;
                } else {
                    j = 1;
                }
            }
            //Check if it is divisible by 10 or not.
            return (checksum % 10) === 0;
        },
        validateCardNumber : function (card_number){
            //Check if the number contains only numeric value  
            //and is of between 13 to 19 digits
            const regex = new RegExp("^[0-9]{13,19}$");
            if (!regex.test(card_number)){
                return false;
            }
            return APSValidation.validateCardNumberByAlgorithm(card_number);
        },
        validateHolderName: function (card_holder_name) {
            let validity = true;
            let message = '';
            card_holder_name = card_holder_name.trim();
            if (card_holder_name.length > 51 || card_holder_name.length === 0) {
                validity = false;
                message = apsPaymentErrors.invalid_card_holder_name;
            }
            const regex = new RegExp("^[a-zA-Z- '.]+$");
            if (!regex.test(card_number)){
                return false;
            }
            return {
                validity,
                msg: message
            }
        },
        validateCVV: function (card_cvv, card_type) {
            let validity = false;
            let message = apsPaymentErrors.invalid_card_cvv;
            if (card_cvv.length > 0) {
                card_cvv = card_cvv.trim();
                if (!card_type.length || card_type.length === 0) {
                    if (card_cvv.length === 3 && card_cvv !== '000') {
                        validity = true;
                        message = '';
                    }
                    else if (card_cvv.length === 4 && card_type === 'amex' && card_cvv !== '0000') {
                        validity = true;
                        message = '';
                    }
                }
            } 
            return {
                validity,
                msg: message
            }
        },
        validateCardExpiry: function (card_expiry_month, card_expiry_year) {
            let validity = true;
            let message = '';
            if (card_expiry_month === '' || !card_expiry_month) {
                validity = false;
                message = apsPaymentErrors.invalid_expiry_month;
            } else if (card_expiry_year === '' || !card_expiry_year) {
                validity = false;
                message = apsPaymentErrors.invalid_expiry_year;
            } else if (parseInt(card_expiry_month) <= 0 || parseInt(card_expiry_month) > 12) {
                validity = false;
                message = apsPaymentErrors.invalid_expiry_month;
            } else {
                let cur_date, exp_date;
                card_expiry_month = ('0' + parseInt(card_expiry_month - 1)).slice(-2);
                cur_date = new Date();
                exp_date = new Date(parseInt('20' + card_expiry_year), card_expiry_month, 30);
                if (exp_date.getTime() < cur_date.getTime()) {
                    message = apsPaymentErrors.invalid_expiry_date;
                    validity = false;
                }
            }
            return {
                validity,
                msg: message
            }
        }
    };
    //Defining of payment functions
    let apsPayment = {
        validatePayment: function (  ) {
            let status = true;
            let payment_box        = formElement;
            let card_value         = payment_box.find( "[name=\'card_number\']" ).val();
            let holdername_value   = payment_box.find( "[name=\'card_holder_name\']" ).val();
            let cvv_value          = payment_box.find( "[name=\'card_security_code\']" ).val();
            let expiry             = payment_box.find( "[name=\'expiry_date\']" ).val();
            let expiry_year        = expiry.substring(0, 2);
            let expiry_month       = expiry.substring(2, 4);
            let validateCard       = APSValidation.validateCard( card_value );
            let validateHolderName = APSValidation.validateHolderName( holdername_value );
            let validateCardCVV    = APSValidation.validateCVV( cvv_value, validateCard.card_type);
            let validateExpiry     = APSValidation.validateCardExpiry( expiry_month, expiry_year );
            let message;
            if ( validateCard.validity === false ) {
                message = validateCard.msg;
                status = false;
            }
            if ( validateHolderName.validity === false ) {
                message = validateHolderName.msg;
                status = false;
            }
            if ( validateCardCVV.validity === false ) {
                message = validateCardCVV.msg;
                status = false;
            }
            if ( validateExpiry.validity === false ) {
                message = validateExpiry.msg;
                status = false;
            }
            return status;
        },
        parseExpiry : function( monthYear ){
        }
    };
    formElement.on(
        'submit',
        function(e) {
            return apsPayment.validatePayment();
        }
    );
})( jQuery );
 </script>
</body>



 </html> 
