<header>
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
                            <a class="nav-link" href="/">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                        @auth
                            {{ auth()->user()->name }}
                            <li class="nav-item">
                                <a href="{{ route('user.logout') }}" class="btn btn-outline-light me-2">Logout</a>
                            </li>
                            <li>
                                <a href="{{ url('/my-bids') }}" class="nav-link"
                                    style="background-color: #ee4730; border-radius: 50%;">
                                    <i class="fas fa-user-alt" style="color: #fff ;line-height: inherit;"></i>
                                </a>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login.perform') }}" class="nav-link">Login</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('register.perform') }}" class="nav-link">Sing Up</a>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->
</header>
