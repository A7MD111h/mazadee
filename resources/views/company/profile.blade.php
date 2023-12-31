<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAZAD</title>
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
                                <a class="nav-link" style="color: black;" href="auction">Winning</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: black;" href="about-us">Your Auction</a>
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

 <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index">
                            Home
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="profile">
                           Profile
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
                    <div class="col-lg-4">
                        <div class="user-menu">
                            <div class="user">
                                <div class="image">
                                    <img src="/img/companyname.jpg" alt="">
                                    <label for="user-photo">
                                        <i class="fas fa-pencil-alt"></i>
                                    </label>
                                    <input type="file" id="user-photo" class="d-none">
                                </div>
                                <div class="content">
                                    <h4>
                                        Auto Car
                                    </h4>
                                    <span>car@gmail.com</span>
                                </div>
                            </div>
                            <ul class="menu">
                                <li>
                                    <a href="profile" class="active">
                                        <i class="flaticon-hammer"></i>
                                        My Bids</a>
                                </li>
                                <li>
                                    <a href="company-profile">
                                        <i class="flaticon-settings"></i>
                                        Company Profile </a>
                                </li>
                                <li>
                                    <a href="winning-bids">
                                        <i class="flaticon-best-seller"></i>
                                        Winning Bids</a>
                                </li>
                              
                                <!-- <li>
                                    <a href="referrals">
                                        <i class="flaticon-shake-hand"></i>
                                        Referrals</a>
                                </li> -->
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="my-bids start">
                            <div class="activity">
                                <div class="title">
                                    <h4>My Activity</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="item">
                                            <div class="image">
                                                <img src="/img/bid01.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="timer" data-to="80" data-speed="5000"></div>
                                                <span>Active Bids</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="item">
                                            <div class="image">
                                                <img src="/img/bid02.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="timer" data-to="15" data-speed="5000"></div>
                                                <span>Items Won</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="item">
                                            <div class="image">
                                                <img src="/img/bid03.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="timer" data-to="115" data-speed="5000"></div>
                                                <span>Favorites</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav d-flex">
                                    <li class="nav-item">
                                        <a href="#upcoming" data-toggle="tab" class="upcoming nav-link active">Upcoming</a>
                                    </li>
                                    <li  class="nav-item">
                                        <a href="#past" data-toggle="tab" class="past nav-link">Last order</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="upcoming">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="auction-item">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/img/Michelin-Pilot-Sport-All-Season-4-UHP-All-Season-295-35R21-103V-Passenger-Tire_4f2a9690-0b37-46b6-b265-7c7ab20af4c0.bd1d46e64614fcf3743fbd3b01b31899-removebg-preview.png" width="5%" height="70%" alt="">
                                                    </a>
                                                    
                                                  
                                                </div>
                                                <div class="auction-content">
                                                    <h5>Michelin Tires 11435 Tires
                                                    </h5>
                                                    <div class="bid d-flex justify-content-between">
                                                        <div class="current-bid d-flex">
                                                            <i class="flaticon-hammer"></i>
                                                            <p class="d-flex flex-column">Price
                                                                <span>$876.00</span>
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
                                                <div class="time d-flex ">
                                                    <div class="countdown" data-countdown="10/31/2020 20:00" style="margin-left: 20%;"></div>
                                                </div>
                                                <div >
                                                    <a type="button" class="btn btn-primary" style="margin-left: 30%;" href="">Request Status</a>

                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="col-lg-6">
                                            <div class="auction-item">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/img/s-l500-removebg-preview.png" width="5%" height="70%" alt="">
                                                    </a>
                                                    
                                                </div>
                                                <div class="auction-content">
                                                    <h5>7 Inch Car Stereo Radio Bluetooth USB TF Touch Screen</h5>
                                                    <div class="bid d-flex justify-content-between">
                                                        <div class="current-bid d-flex">
                                                            <i class="flaticon-hammer"></i>
                                                            <p class="d-flex flex-column">Price
                                                                <span>$876.00</span>
                                                            </p>
                                                        </div>
                                                        <div class="buy-now-price d-flex">
                                                            <i class="flaticon-date"></i>
                                                            <p class="d-flex flex-column">Date
                                                                <span>2/1/2024</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="time d-flex ">
                                                    <div class="countdown" data-countdown="10/31/2020 20:00" style="margin-left: 20%;"></div>
                                                </div>
                                                <div >
                                                    <a type="button" class="btn btn-primary" style="margin-left:30%;" href="">Request Status</a>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="past">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="auction-item">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/img/61peYAD2-bL._AC_SL1500_-removebg-preview.png" width="5%" height="70%" alt="">
                                                    </a>
                                                   
                                                </div>
                                                <div class="auction-content">
                                                    <h5>Oil Car</h5>
                                                    <div class="bid d-flex justify-content-between">
                                                        
                                                        <div class="buy-now-price d-flex">
                                                            <i class="flaticon-money"></i>
                                                            <p class="d-flex flex-column">Price
                                                                <span>$5000.00</span>
                                                            </p>
                                                        </div>
                                                        <div class="buy-now-price d-flex">
                                                            <i class="flaticon-money"></i>
                                                            <p class="d-flex flex-column">Date
                                                                <span>2/1/2024</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div >
                                                    <a type="button" class="btn btn-primary" style="margin-left:30%;" href="">Request Status</a>

                                                </div>
                                                </div>
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
