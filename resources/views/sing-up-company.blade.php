<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAZADe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon-logo.png" type="image/x-icon">
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
                            <a href="tel:+962000000000" class="mr-3">
                                <i class="fas fa-phone-alt"></i>
                                <span>+962000000000</span>
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">En</option>
                                <option value="az">Ar</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navbar -->
        <div class="header-bottom">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="logo">
                        <a class="navbar-brand" href="/">
                            <img src="/img/logo.png" alt="logo">
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
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Auction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sing-in">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sing-up">Sing Up</a>
                            </li>
                            <li>
                                <a href="" class="nav-link" style="background-color: #ee4730; border-radius: 50%;">
                                <i class="fas fa-user-alt" style="color: #fff ;line-height: inherit;"></i>
                            </a>
                            </li>
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
                        <a href="index.html">
                            Home
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            Sing In
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(assets/img/hero-bg.png);">

            </div>
        </section>
        <!-- End Breadcrumb -->
        <!-- Login -->
        <section id="register">
            <div class="container">
                <div class="account d-flex">
                    <div class="left-side">
                        <div class="header text-center">
                            <h1>SIGN UP</h1>
                            <p>We're happy you're here!</p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label for="company-name">
                                    <i class="far fa-user"></i>
                                </label>
                                <input id="company-name" class="form-control" type="text" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <label for="Address">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                                <input id="Address" class="form-control" type="text" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <i class="far fa-envelope"></i>
                                </label>
                                <input id="email" class="form-control" type="text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label for="phone">
                                    <i class="fa fa-phone"></i>
                                </label>
                                <input id="phone" class="form-control" type="number" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="commercial-register">
                                    <i class="fa fa-solid fa-briefcase"></i>
                                </label>
                                <input id="commercial-register" class="form-control" type="number" placeholder="Commercial Register">
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    <i class="fas fa-lock"></i>
                                </label>
                                <input id="password" class="form-control" type="password" placeholder="Password">
                                <span class="show-password"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="form-group">
                                <label for="password-comfirm">
                                    <i class="fas fa-lock"></i>
                                </label>
                                <input id="password-comfirm" class="form-control" type="password" placeholder="Re-Password">
                                <span class="show-password"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="sign-up">
                                <p>ALREADY HAVE AN ACCOUNT? <a href="sing-in.html">LOGIN</a></p>
                                
                            </div>
                            <div class="form-group mb-0 mt-4">
                                <button type="submit">REGISTER</button>
                            </div>
                        </form>
                    </div>
                    <div class="right-side">
                       <img src="/img/3.jpg" style="width: 100%;" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login -->
    </main>

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