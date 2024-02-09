<base href="/public">

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

    <link rel="stylesheet" href="/css2/style.css">
    <link rel="shortcut icon" href="assets/img/favicon-logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/5f8f97e3fd.js" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script> 
    <!-- displays site properly based on user's device -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/images/favicon-32x32.png"
    />
    <link rel="stylesheet" href="/css2/style.css" />
    <title>Frontend Mentor | Notifications page</title>
</head>

<body>

    {{-- <section id="loader">
        <div class="img-loader">
        </div>
    </section> --}}


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
                {{-- <a href="notification"> --}}
                   My Notification
                {{-- </a> --}}
            </li>
        </ul>
    </div>
    <div class="bg-image" style="background-image: url(/img/OIP.jpg)">

    </div>
</section>

<section id="contact-form">
    <div class="container ">
        <div class="bg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header text-center">
                        
                        <h1>  My Notification  </h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">

<div class="container">
<header>
<div class="notif_box">
  <h2 class="title">Notifications</h2>
  <span id="notifes">{{Auth::User()->unreadNotifications->count()}}</span>
</div>
<p id="mark_all">Mark all as read</p>
</header>

@foreach(Auth::User()->unreadNotifications as $notification)
<div class="notif_card unread">
  <img src="{{ asset($notification->data['subCatgeoryPhoto']) }}" alt="avatar" id=img1 />
  <div class="description">
    <p class="user_activity">
      <strong>Auction Ends</strong> 
    </p>
    <p class="time">{{$notification->created_at}}</p>
  </div>
</div>
@endforeach
{{-- <div class="notif_card unread">
  <img src="/img/R__2_-removebg-preview.png" alt="avatar" id=img2 />
  <div class="description">
    <p class="user_activity">
      <strong>Congratulations,you are the winning bidder</strong> 
    </p>
    <p class="time">1 day ago</p>
  </div>
</div> --}}
<div>
  
</div>



{{-- <div class="notif_card">
  <img src="/img/R__2_-removebg-preview.png" alt="avatar" id=img3 />
  <div class="description">
    <p class="user_activity">
      <strong>Congratulations,you are the winning bidder</strong> 
    </p>
    <p class="time">2 weeks ago</p>
  </div>
</div> --}}


</div>
</section>
</main>
<footer style="background: linear-gradient(0deg, rgba(199,199,199,1) 0%, rgba(255,255,255,1) 50%)">
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
                    <img src="assets/img/logo2.png" class="logo" alt="">

                    <p>
                        © Copyright 2020 |
                        <a href="#">MAZADe</a>
                        By
                        <a href="#">Uiaxis</a>
                    </p>
                </div>
            </div>
        </div>

    </footer>

    <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var countdownElement = document.querySelector('.countdown');
    
            if (countdownElement) {
                var creationTime = new Date(countdownElement.dataset.creationTime);
                var targetTime = new Date(creationTime);
                targetTime.setHours(targetTime.getHours() + 24);
    
                function updateCountdown() {
                    var now = new Date();
                    var timeDiff = targetTime - now;
    
                    // Calculate remaining hours, minutes, and seconds
                    var hours = Math.floor(timeDiff / (1000 * 60 * 60));
                    var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);
    
                    // Format and display the remaining time
                    countdownElement.innerHTML ='Auction Ends in: ' +  hours + 'h ' + minutes + 'm ' + seconds + 's';
    
                    // Update every second
                    setTimeout(updateCountdown, 1000);
                }
    
                // Initial call to set up the countdown
                updateCountdown();
            }
            document.getElementById('bidBtn').addEventListener('click',function(){
            document.getElementById('bidForm').style.display='block';
        })
        });
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

