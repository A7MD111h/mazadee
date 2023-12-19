{{-- <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
  
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
  
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
          </div>
        @endguest
      </div>
    </div>
</header> --}}


<header>
  {{-- <div class="header-top">
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
  </div> --}}
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
                      @auth
                      {{auth()->user()->name}}
                      <li class="nav-item">
                          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                      </li>
                      @endauth
                      @guest
                      <li class="nav-item">
                          <a href="{{ route('login.perform') }}" class="nav-link" href="/sing-in">Login</a>
                      </li>

                      <li class="nav-item">
                          <a href="{{ route('register.perform') }}" class="nav-link" href="sing-up">Sing Up</a>
                      </li>
                      @endguest
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