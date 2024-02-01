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
                        {{-- <a href="auction-done-details"> --}}
                       Auction Done Details
                        {{-- </a> --}}
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
                                <img src="assets/img/user.png" alt="">                                
                                    <label data-toggle="modal" data-target="#profilePicEditModalCenter">
                                        <i class="fas fa-pencil-alt"></i>
                                    </label>
                                </div>
                                <div class="content">
                                <h4>
                                        Percy Reed
                                    </h4>
                                    <span>john@gmail.com</span>
                                </div>
                            </div>
                            <ul class="menu">
                                <li>
                                    <a href="{{ url('my-bids') }}" class="active">
                                        <i class="flaticon-hammer"></i>
                                        My Bids</a>
                                </li>
                                <li>
                                    <a href="{{ url('personal-profile') }}">
                                        <i class="flaticon-settings"></i>
                                        Personal Profile </a>
                                </li>
                                <li>
                                    <a href="auction-done-details">
                                        <i class="flaticon-best-seller"></i>
                                        Auction done Details</a>
                                </li>

                                {{-- <li>
                                    <a href="referrals">
                                        <i class="flaticon-shake-hand"></i>
                                        Referrals</a>
                                </li> --}}

                            </ul>
                           </div>
                        </div>
                



                  <div class="col-lg-8">
                        <div class="winning-bids">
                                        <div class="header">
                                             <div class="row">
                                                       <div class="col-lg-12">
                                                              <div class="title">
                                                                 <h3>Auction Done Details</h3>
                                                              </div>
                                                                <div class="search d-flex justify-content-between">
                                                                      <form action="#">
                                                                           <input type="text" placeholder="Item Name">
                                                                               <button>
                                                                                  <i class="fas fa-search"></i>
                                                                               </button>
                                                                      </form>
                                                                                <div class="sort d-flex align-items-center">
                                                                                       <div class="name">
                                                                                      <span>Sort By :</span>
                                                                                        </div>
                                                                                                    <div class="sort-by">
                                                                                                  <select class="form-control">
                                                                                                      <option value="all">All</option>
                                                                                                      <option value="a-z">A-Z</option>
                                                                                                      <option value="date">Date</option>
                                                                                                    </select>
                                                                                             </div>
                                                                                 </div>
                                                                 </div>
                                                         </div>
                                                  </div>
                                         </div>
                          

            

                                            <div class="row" >
                                                    <div class="col-lg-12" >

                                                       <div class="details">

                                                            <div class="header d-flex justify-content-between">
                                                              <h4 class="mb_10">Billing Details</h4>
                                                            </div>
                                                              <ul>
                                                                  <li>
                                                                      <div class="info">
                                                                              Name:<br>Company-Name
                                                                          </div>
                                                                                     
   
                                                                       <div class="info">
                                                                              Phone:<br>company-phone

                                                                        </div>

                                                                         <div class="info">
                                                                               city:<br>company->city
                                                                           </div>
                                                                            <div class="info">
                                                                            Address:<br>company->address
                                                                             </div>
                                                                           <div class="info">
                                                                                   price:<br>budjet
                                                                             </div> 

             
                                                                    </li>
                                                              </ul>
                                                                                              <br>

                                                       <div class="header d-flex justify-content-between">

                                                         <h4 class="mb_10">price Details</h4>
                                                         </div>
                                                                <ul>
                                                                      <li>
                                                                           <div class="info">
                                              
                                                                          <b>Total:budjet</b>
                                                                           </div>
                          
                                                                       </li>
                                                                </ul>
                                             </div>
                                      
                            </div>   
                    
                    </div>
             </div>
          </div>
    <section>
    </main>

</body>

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
