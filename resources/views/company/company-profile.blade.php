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
                        <a class="navbar-brand" href="index">
                            <img src="img/logo.png" alt="logo">
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
                        <a href="company-profile">
                           My Profile
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(/img/OIP.jpg)">

            </div>
        </section>
        <!-- End Breadcrumb -->
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
                                    <a href="profile">
                                        <i class="flaticon-hammer"></i>
                                        My Bids</a>
                                </li>
                                <li>
                                    <a href="company-profile" class="active">
                                        <i class="flaticon-settings"></i>
                                        Company Profile </a>
                                </li>
                                <li>
                                    <a href="winning-bids">
                                        <i class="flaticon-best-seller"></i>
                                        Winning Bids</a>
                                </li>
                              
                                <li>
                                    <a href="referrals">
                                        <i class="flaticon-shake-hand"></i>
                                        Referrals</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Company Details</h3>
                                        <a href="#">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Name
                                            </div>
                                            <div class="info-value">
                                                Percy Reed
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Date of Birth
                                            </div>
                                            <div class="info-value">
                                                15-03-1980
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Address
                                            </div>
                                            <div class="info-value">
                                                8198 Fieldstone Dr.La Crosse, WI 54601
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Account Settings</h3>
                                        <a href="#">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Language
                                            </div>
                                            <div class="info-value">
                                                English (United States)
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Time Zone
                                            </div>
                                            <div class="info-value">
                                                (GMT-06:00) Central America
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Status  
                                            </div>
                                            <div class="info-value">
                                                <i class="fas fa-check-circle"></i>
                                                Active
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                            <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Email Address</h3>
                                        <a href="#">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Email
                                            </div>
                                            <div class="info-value">
                                                albert349@gmail.com
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Phone</h3>
                                        <a href="#">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Mobile
                                            </div>
                                            <div class="info-value">
                                                +1 234-567-8925 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="details">
                                    <div class="header d-flex justify-content-between">
                                        <h3>Security</h3>
                                        <a href="#">
                                            <i class="flaticon-edit"></i>
                                            Edit
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                Password
                                            </div>
                                            <div class="info-value">
                                                xxxxxxxxxxxxxxxx
                                            </div>
                                        </li>
                                    </ul>
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
                   <img src="/img/logo.png"  class="logo" alt="">
                   
                   
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