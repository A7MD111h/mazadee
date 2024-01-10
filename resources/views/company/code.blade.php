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
                                <a class="nav-link" href="home" style="margin: auto;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="winning-bids" style="margin: auto;">Winning Auction</a>
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
        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="home">
                            Home
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="winning-bids">
                            Winning Bids
                            <i class="flaticon-right-arrow"></i>

                        </a>
                    </li>
                    <li>
                        <a href="code">
                            Code            
                         </a>
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(/img/OIP.jpg)">

            </div>
        </section>

        <section id="dashboard">
            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-8">
                        <div class="winning-bids">
                           
                            <div style="width:100% ;margin-left:50%">
                              
                                <div class="col-lg-6">
                                    <div class="auction-item">
                                      
                                        <div class="auction-content" >
                                        

                                            <h5>2020 Hyundai Elantra, Sel</h5>
                                            <div class="bid d-flex justify-content-between">
                                                <div class="buy-now-price d-flex">
                                                    <i class="flaticon-money"></i>
                                                    <p class="d-flex flex-column">Sold
                                                        <span>$5000.00</span>
                                                    </p>
                                                </div>
                                                <div class="buy-now-price d-flex">
                                                            <i class="flaticon-date"></i>
                                                            <p class="d-flex flex-column">Date
                                                                <span>1/1/2024</span>
                                                            </p>
                                                        </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div >
                                        <input type="text" placeholder="Check Code" style="width:100%;text-align:center"> 
                                    </div>
                                    <br>
                                        <div class="bid d-flex justify-content-between">
                                        <a type="button" class="btn btn-success" href="#">Accept</a>
                                                    <a type="button" class="btn btn-danger " style="margin-left: 40%;" href="winning-bids">Cancel</a>

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
